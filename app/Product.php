<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];        //tất cả fea đều được phép insert

    public function images()
    {
        // hasMany: mot nhieu
        return $this->hasMany(product_images::class, 'product_id');
    }

    public function tags()
    {
        //belongsToMany: nhieu nhieu. Mot user co nhieu vai tro, mot vai tro thuoc nhieu user
        return $this
            ->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id')
            ->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function productImages()
    {
        return $this->hasMany(product_images::class,'product_id'); //mot nhieu
    }

}
