<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    /**
     * Get all article types
     * @return  App\ArticleType
     */
    public static function getArticleTypes()
    {
        return ArticleType::select('id','name')->get()->ToArray();
    }
}
