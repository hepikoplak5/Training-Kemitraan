<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    public function userRole()
    {
        return $this->hasMany('App/UserRole','FK_Id_role','id_role');
    }

}
