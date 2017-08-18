<?php namespace Fannan\AdvertisingModule\Slot;

use Fannan\AdvertisingModule\Slot\Contract\SlotRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SlotRepository extends EntryRepository implements SlotRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SlotModel
     */
    protected $model;

    /**
     * Create a new SlotRepository instance.
     *
     * @param SlotModel $model
     */
    public function __construct(SlotModel $model)
    {
        $this->model = $model;
    }
}
