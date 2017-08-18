<?php namespace Fannan\AdvertisingModule\Advertising;

use Fannan\AdvertisingModule\Advertising\Contract\AdvertisingRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class AdvertisingRepository extends EntryRepository implements AdvertisingRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var AdvertisingModel
     */
    protected $model;

    /**
     * Create a new AdvertisingRepository instance.
     *
     * @param AdvertisingModel $model
     */
    public function __construct(AdvertisingModel $model)
    {
        $this->model = $model;
    }
}
