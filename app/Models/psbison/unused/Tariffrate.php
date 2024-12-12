<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $trc_number_row
 * @property int $trc_number_col
 * @property mixed $timestamp
 * @property int $tar_number
 * @property int $tra_rate
 * @property string $tra_apply
 * @property string $tra_retired
 * @property string $last_updateby
 * @property string $last_updatedate
 * @property string $tra_activedate
 * @property string $tra_rateasflat
 * @property int $tra_minrate
 * @property string $tra_minqty
 * @property int $tra_billmiles
 * @property int $tra_paymiles
 * @property int $tra_standardhours
 * @property int $tra_mincharge
 * @property string $tra_remarks1
 * @property string $tra_remarks2
 * @property string $tra_remarks3
 * @property string $tra_remarks4
 */
class Tariffrate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Tariffrate';

    protected $fillable = ['timestamp', 'tar_number', 'tra_rate', 'tra_apply', 'tra_retired', 'last_updateby', 'last_updatedate', 'tra_activedate', 'tra_rateasflat', 'tra_minrate', 'tra_minqty', 'tra_billmiles', 'tra_paymiles', 'tra_standardhours', 'tra_mincharge', 'tra_remarks1', 'tra_remarks2', 'tra_remarks3', 'tra_remarks4'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
