<?php

namespace App\Models\Article;

use App\Models\User\ArticleImage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $connection = 'mysql';
    protected $table = 'articles';
    use HasFactory;

    const STATUS = [
        'UNPUBLISHED' => 0,
        'PUBLISHED' => 1,
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'image_url',
        'slug',
        'description',
        'introduction',
        'status',
    ];

    public static function boot()
    {
        parent::boot();
        // registering a callback to be executed upon the creation of an activity AR
        static::creating(function ($article) {
            // produce a slug based on the activity title
            $slug = Str::slug($article->title);
            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            // if other slugs exist that are the same, append the count to the slug
            $article->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }

    /**
     * getByMd5Id
     *
     * @param  string $id
     * @return Article
     */
    public function getByMd5Id(string $id): ?Article
    {
        return $this->whereRaw('md5(id)= "' . $id . '"')
            ->first();
    }

    /**
     * Method get
     *
     * @param array $ids [Id's Array]
     *
     * @return Collection
     */
    public function getByIds(array $ids): ?Collection
    {
        return $this->whereIn('id', $ids)->get();
    }

    /**
     * Method articleImages
     *
     * @return void
     */
    public function articleImages()
    {
        return $this->hasMany(ArticleImage::class);
    }
}
