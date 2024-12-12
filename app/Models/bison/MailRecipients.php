<?php

namespace App\Models\bison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $keyname
 * @property string $members
 * @property string $note
 */
class MailRecipients extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mailrecipients';

    protected $fillable = ['id', 'keyname', 'members', 'note'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bison';
}
