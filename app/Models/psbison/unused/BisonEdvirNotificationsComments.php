<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $bison_edvir_notifications_transaction_id
 * @property string $created_date
 * @property string $defect
 * @property string $comment
 */
class BisonEdvirNotificationsComments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Edvir_Notifications_Comments';

    protected $fillable = ['bison_edvir_notifications_transaction_id', 'created_date', 'defect', 'comment'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
