<?php

namespace App\Helpers\Libraries\PlatformSci;

use App\Models\psbison\Stops;
use Illuminate\Support\Facades\Log;

class ETAPTA
{
    private mixed $body;
    private mixed $mov;
    private mixed $ord;
    private mixed $leg;
    private mixed $stp;
    private mixed $drv;
    private mixed $trc;
    private mixed $formId;
    private string $eta;
    private string $pta;
    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    private array|\Illuminate\Database\Eloquent\Collection $stops;
    private mixed $formName;
    private int $key;

    public function __construct(mixed $data)
    {
        //build all values needed to process message
        [$this->body, $this->mov, $this->ord, $this->leg, $this->stp, $this->drv, $this->trc, $this->formId,$this->formName] = PlatformSci::buildAllValuesNeededToProcessMessage($data);
        $this->pta = $this->body[7] . $this->body[8]; //need to figure out how to parse date time
        $this->eta = $this->body[5] . $this->body[6]; //need to figure out how to parse date time

        $this->stops = Stops::with('event')->where('lgh_number', '=', $this->leg)->orderBy('stp_arrivaldate')->get();
        //if there are no stops to process exit
        if ($this->stops->count() === 0) {
            Log::debug("No stops found for leg:{$this->leg}");
            //exit;
        }
        $this->key = $this->stops->search(function ($stop) {
            return $stop->stp_number == $this->stp;
        });

        $this->evt = $this->stops[$this->key]->stp_event;
        //need to grab confirmed/plansend/oldpta/fleet
    }

    public function Process_ETAPTA(): void
    {
        PlatformSci::messageReceived($this->stp, $this->mov, $this->leg, $this->trc, $this->drv, $this->evt, $this->formName, $this->formId);
    }
}
