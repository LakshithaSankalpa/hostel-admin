<?php

namespace Axc\article;

use App\Models\Article\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * ArticleGear
 */
class ArticleGear extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ArticleMethods::class;
    }
}
// Methods Class
class ArticleMethods
{
    protected $modal;
    /**
     *
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->modal = new Article();
    }
    /**
     * Method all
     *
     * @return ?Collection
     */
    public function all(): ?Collection
    {
        return $this->modal->all();
    }
    /**
     * Method own
     *
     * @param Array $params [Parameters with the array]
     * @param Bool $isSingle [Is single record or multiple records]
     *
     * @return mixed
     */
    public function own($params, $isSingle = true): mixed
    {
        return $this->modal->own($params, $isSingle);
    }
    /**
     * Method find
     *
     * @param Int $id [User Id]
     *
     * @return Article
     */
    public function find(int $id): ?Article
    {
        return $this->modal->findOrFail($id);
    }
    /**
     * Method exists
     *
     * @param int $id [users ID]
     *
     * @return Bool
     */
    public function exists(int $id): Bool
    {
        return $this->modal->exists($id);
    }
    /**
     * Method get
     *
     * @param Array $ids [Id's array os User]
     *
     * @return Collection
     */
    public function get(array $ids): ?Collection
    {
        return $this->modal->getByIds($ids);
    }
    /**
     * Method firstOrCreate
     *
     * @param Array $data [Parameter and value]
     *
     * @return Article
     */
    public function firstOrCreate(array $params): Article
    {
        return $this->modal->firstOrCreate($params);
    }
    /**
     * Method create
     *
     *  @param Array $data [Data array to make New User record]
     *
     * @return Article
     */
    public function create(array $data): Article
    {
        return $this->modal->create($data);
    }
    /**
     * Method update
     *
     * @param Article $modal [Related User Object]
     * @param Array $data [Related Data Array]
     *
     * @return Bool
     */
    public function update(Article $article, array $data): Bool
    {
        return $article->update(array_merge($article->toArray(), $data));
    }

    /**
     * Delete users Records By Category id
     *
     * @param  Article $modal
     *
     * @return void
     */
    public function delete(Article $article): ?bool
    {
        return $article->delete();
    }

    /**
     * getByMd5Id
     *
     * @param  mixed $id
     * @return Article
     */
    public function getByMd5Id($id): ?Article
    {
        return $this->modal->getByMd5Id($id);
    }

    /**
     * statusChange
     *
     * @param  mixed $id
     */
    public function statusChange($id)
    {
        $article = $this->find($id);
        $article->status == Article::STATUS['UNPUBLISHED'] ? $this->update($article, ['status' => Article::STATUS['PUBLISHED']]) : $this->update($article, ['status' => Article::STATUS['UNPUBLISHED']]);
    }
}
