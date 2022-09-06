<?php

namespace Axc\article;

use App\Models\Article\ArticleImage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * ArticleImageGear
 */
class ArticleImageGear extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ArticleImageMethods::class;
    }
}
// Methods Class
class ArticleImageMethods
{
    protected $articleImages;

    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->articleImages = new ArticleImage();
    }

    /**
     * Method all
     *
     * @return ?Collection
     */
    public function all(): ?Collection
    {
        return $this->articleImages->all();
    }

    /** Method own
     *
     * @param  array  $params [Parameters Array]
     * @param  int  $type [config('systemSettings.OWN_TYPES.SINGLE')]
     * @param  int  $paginate [Paginate count if needed]
     * @return mixed
     */
    public function own($params, $type = 1, $paginate = 6): mixed
    {
        return $this->articleImages->own($params, $type, $paginate);
    }

    /**
     * Method find
     *
     * @param  int  $id [ArticleImage Id]
     * @return ArticleImage
     */
    public function find(int $id): ?ArticleImage
    {
        return $this->articleImages->findOrFail($id);
    }

    /**
     * Method exists
     *
     * @param  int  $id [ArticleImage ID]
     * @return bool
     */
    public function exists(int $id): bool
    {
        return $this->articleImages->exists($id);
    }

    /**
     * Method get
     *
     * @param  array  $ids [Id's array os ArticleImage]
     * @return Collection
     */
    public function get(array $ids): ?Collection
    {
        return $this->articleImages->getByIds($ids);
    }

    /**
     * Method firstOrCreate
     *
     * @param  array  $data [Parameter and value]
     * @return ArticleImage
     */
    public function firstOrCreate(array $params): ArticleImage
    {
        return $this->articleImages->firstOrCreate($params);
    }

    /**
     * Method create
     *
     *  @param  array  $data [Data array to make New ArticleImage record]
     * @return ArticleImage
     */
    public function create(array $data): ArticleImage
    {
        return $this->articleImages->create($data);
    }

    /**
     * Method update
     *
     * @param  ArticleImage  $articleImages [Related ArticleImage Object]
     * @param  array  $data [Related Data Array]
     * @return bool
     */
    public function update(ArticleImage $articleImages, array $data): bool
    {
        return $articleImages->update(array_merge($articleImages->toArray(), $data));
    }

    /**
     * Delete users Records By Category id
     *
     * @param  ArticleImage  $articleImages
     * @return void
     */
    public function delete(ArticleImage $articleImages): ?bool
    {
        return $articleImages->delete();
    }
}
