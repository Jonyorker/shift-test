<?php

namespace App\Models\sqlweb\datawarehouse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property int $mov_number
 * @property int $ord_hdrnumber
 * @property int $lgh_number
 * @property int $stp_number
 * @property string $stp_event
 * @property string $process_on
 * @property string $created_date
 */
class StopsAutoActualizationByTime extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stops_auto_actualization_by_time';

    protected $fillable = ['mov_number', 'ord_hdrnumber', 'lgh_number', 'stp_number', 'stp_event', 'process_on', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'sqlweb';

    // Methods

    /**
     * @return Collection<int, StopsAutoActualizationByTime>
     */
    public function getRecords(?string $time = null): Collection
    {
        if (empty($time)) {
            $time = strtotime('now');
        }

        return $this::where('process_on', '<=', date('Y-m-d H:i:s', $time))->get();
    }
}
