<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $cmp_id
 */
class BisonAuCplocations extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['cmp_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
