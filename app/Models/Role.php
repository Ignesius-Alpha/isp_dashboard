<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'pkiRoleID';
    public $timestamps = false;

    protected $fillable = [
        'txtRoleName',
        'txtRoleDescription',
        'numLevel',
        'txtRolePermissions'
    ];

    protected $casts = [
        'txtRolePermissions' => 'json',
        'dteRoleCreatedAt' => 'datetime',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'fkiRoleID', 'pkiRoleID');
    }
}
