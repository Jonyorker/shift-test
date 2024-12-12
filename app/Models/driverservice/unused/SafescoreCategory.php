<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $ActivityCode
 * @property string $ActivityType
 * @property float $Value
 * @property float $DurationYears
 * @property string $Category
 * @property string $Display
 */
class SafescoreCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Safescore_Category';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    protected $fillable = ['ActivityCode', 'ActivityType', 'Value', 'DurationYears', 'Category', 'Display'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
