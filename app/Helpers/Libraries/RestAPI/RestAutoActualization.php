<?php

namespace App\Helpers\Libraries\RestAPI;

use Illuminate\Support\Facades\Http;

class RestAutoActualization extends RestApi
{
    public function __construct($token = null)
    {
        //$remoteHost = 'http://rest.bison.local';
        $remoteHost = null;
        if (! empty($token)) {
            parent::__construct($token, $remoteHost);
        } else {
            parent::__construct(null, $remoteHost);
        }
    }

    public function actualizeStop($ordHdrNumber, $moveNumber, $stopNumber, $stopArrivalDateTime, $stopDepartureDateTime, $isTest = false)
    {
        if (! is_null($this->expireTime) && $this->expireTime <= time()) {
            return false;
        }

        $response = Http::withHeaders(
            [
                'Authorization' => 'Bearer ' . $this->_restToken,
            ])->post($this->_remoteHost . $this->version . '/tmw/actualize_stop',
                [
                    'ord_hdrnumber' => $ordHdrNumber,
                    'stp_number' => $stopNumber,
                    'mov_number' => $moveNumber,
                    'stp_arrivaldate' => $stopArrivalDateTime,
                    'stp_departuredate' => $stopDepartureDateTime,
                    'isTest' => $isTest,
                ]
            );

        if ($response->status() !== 200) {
            return false;
        }

        return json_decode($response->json(), true);
    }
}
