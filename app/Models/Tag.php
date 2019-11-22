<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /*
     * 关联文章，多对多
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class,'article_tags');
    }
}
