<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $date_lookup
 * @property string $trailer_number
 * @property string $ip_address
 * @property string $url
 */
class BisonTrailerSearchHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Trailer_Search_History';

    protected $fillable = ['emp_id', 'date_lookup', 'trailer_number', 'ip_address', 'url'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
