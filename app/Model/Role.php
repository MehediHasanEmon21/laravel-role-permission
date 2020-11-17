<?php

namespace App\Model;

use App\User;
use App\Model\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function permission()
    {
        return $this->hasOne(Permission::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
