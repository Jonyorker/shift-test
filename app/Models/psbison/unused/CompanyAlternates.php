<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ca_id
 * @property string $ca_alt
 */
class CompanyAlternates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Company_Alternates';

    protected $fillable = ['ca_id', 'ca_alt'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
