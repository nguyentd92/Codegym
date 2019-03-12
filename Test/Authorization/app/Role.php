<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected  $fillable = ['name' , 'slug' , 'permissions'];

    public function users() {
        return $this->belongsToMany(User::class, 'role_users');
    }

    public function hasAccess(array $permissions) {
        foreach ($this->roles as $role) {
            if ($role->hasAccess($permissions)) {
                return true;
            }
        }
        return false;

    }
}
