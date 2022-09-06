<?php

namespace App\Traits;

use App\Models\Article\Article;

trait ArticleHelper
{

    /**
     * Article Status
     *
     * @param  mixed $status
     * @return void
     */
    public function getStatus($status)
    {
        switch ($status) {
            case Article::STATUS['UNPUBLISHED']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-warning'>UnPublished</span>";
                break;
            case Article::STATUS['PUBLISHED']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-success'>Published</span>";
                break;
        }
    }

    /**
     * guest request Status
     *
     * @param  mixed $status
     * @return void
     */
    public function articleStatus($status)
    {
        return Article::STATUS[$status];
    }
}
