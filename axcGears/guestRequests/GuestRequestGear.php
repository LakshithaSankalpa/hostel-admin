<?php

namespace Axc\guestRequests;

use App\Models\GuestRequests\GuestRequest;
use App\Models\Media\Media;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * MediaGear
 */
class GuestRequestGear extends Facade
{
    protected static function getFacadeAccessor()
    {
        return GuestRequestMethods::class;
    }
}
// GuestRequestMethods Class
class GuestRequestMethods
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
        $this->modal = new GuestRequest();
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
     * @return GuestRequest
     */
    public function find(int $id): ?GuestRequest
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
     * @return GuestRequest
     */
    public function firstOrCreate(array $params): GuestRequest
    {
        return $this->modal->firstOrCreate($params);
    }
    /**
     * Method create
     *
     *  @param Array $data [Data array to make New User record]
     *
     * @return GuestRequest
     */
    public function create(array $data): GuestRequest
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
    public function update(GuestRequest $media, array $data): Bool
    {
        return $media->update(array_merge($media->toArray(), $data));
    }

    /**
     * Delete users Records By Category id
     *
     * @param  GuestRequest $modal
     *
     * @return void
     */
    public function delete(GuestRequest $media): ?bool
    {
        return $media->delete();
    }

    /**
     * getByMd5Id
     *
     * @param  mixed $id
     * @return GuestRequest
     */
    public function getByMd5Id($id): ?GuestRequest
    {
        return $this->modal->getByMd5Id($id);
    }

    public function statusChange($id)
    {
        $guestRequest = $this->find($id);
        $guestRequest->status == GuestRequest::STATUS['UNREAD'] ? $this->update($guestRequest, ['status' => GuestRequest::STATUS['READ']]) : $this->update($guestRequest, ['status' => GuestRequest::STATUS['UNREAD']]);
    }
}
