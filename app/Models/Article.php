<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * 关联分类表，属于分类表
     *
     * @return belongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /*
     * 关联标签表
     *
     * @return belongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'article_tags');
    }
}
