<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];        //tất cả fea đều được phép insert
    protected $table = 'settings';
}
