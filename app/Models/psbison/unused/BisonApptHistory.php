<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $stp_number
 * @property string $stp_schdtearliest
 * @property string $stp_schdtlatest
 * @property string $stp_arrivaldate
 * @property string $stp_departuredate
 * @property int $priority
 * @property string $reason
 * @property string $ref_type
 * @property string $ref_number
 * @property int $lumperreqd
 * @property int $lumperconf
 * @property string $changeby
 * @property string $changedate
 * @property string $stp_comment
 * @property string $book_comment
 */
class BisonApptHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_ApptHistory';

    protected $fillable = ['stp_number', 'stp_schdtearliest', 'stp_schdtlatest', 'stp_arrivaldate', 'stp_departuredate', 'priority', 'reason', 'ref_type', 'ref_number', 'lumperreqd', 'lumperconf', 'changeby', 'changedate', 'stp_comment', 'book_comment'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
