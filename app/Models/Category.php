<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /*
     * 关联文章表，一对多
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
