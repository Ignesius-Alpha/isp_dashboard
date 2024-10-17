<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

/**
 * 
 *
 * @property int $pkiUserID
 * @property string $txtUserFirstname
 * @property string $txtUserSurname
 * @property string $txtUserPassword
 * @property string $txtUserEmail
 * @property int|null $fkiIspID
 * @property string|null $txtUserRoles
 * @property string|null $txtUserSettings
 * @property string|null $dteUserCreatedAt
 * @property string|null $dteUserUpdatedAt
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDteUserCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDteUserUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFkiIspID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePkiUserID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTxtUserEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTxtUserFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTxtUserPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTxtUserRoles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTxtUserSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTxtUserSurname($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    // use HasApiTokens, Notifiable, HasFactory;
    use Notifiable, HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'pkiUserID';
    public $timestamps = false;

    // Define fillable fields if needed
    protected $fillable = [
        'txtUserFirstname',
        'txtUserSurname',
        'txtUserPassword',
        'txtUserEmail',
        'remember_token',
        'fkiIspID',
        'txtUserJobDesc',
        'txtUserContactNumber',
        'fkiRoleID',
        'blnActive'
    ];

    // Hidden fields for serialization
    protected $hidden = [
        'txtUserPassword',
        'remember_token',
    ];

    // Casting fields to native types
    protected $casts = [
        'dteUserCreatedAt' => 'datetime',
        'dteUserUpdatedAt' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->txtUserPassword;
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'fkiRoleID', 'pkiRoleID');
    }
}
