<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];        //tất cả fea đều được phép insert
    public function permissionChildren()
    {

        return $this->hasMany(Permission::class, 'parent_id');
    }
}
