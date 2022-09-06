<?php

namespace App\Models\Article;

use App\Models\Article\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ArticleImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'article_id',
        'image_path',
        'order',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image_url',
    ];

    /**
     * Method getArticlePhotoUrlAttribute
     *
     * @return void
     */
    public function getImageUrlAttribute()
    {
        return $this->image_path
            ? asset(Storage::url('public/media/' . $this->image_path))
            : '';
    }

    /**
     * Method article
     *
     * @return void
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    /**
     * Method own
     *
     * @param  array  $params [Query parameters with values]
     * @param  int  $type [Respond Type]
     * @param  int  $paginate [Paginate count if needed]
     * @return mixed
     */
    public function own(array $params, int $type, string $paginate): mixed
    {
        return by_own_type($this->where($params), $type, $paginate);
    }

    /**
     * Method get
     *
     * @param  array  $ids [Id's Array]
     * @return Collection
     */
    public function getByIds(array $ids): ?Collection
    {
        return $this->whereIn('id', $ids)->get();
    }
}
