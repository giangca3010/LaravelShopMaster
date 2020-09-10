<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    protected $guarded = []; //tất cả fea đều được phép insert
    use SoftDeletes;
}
