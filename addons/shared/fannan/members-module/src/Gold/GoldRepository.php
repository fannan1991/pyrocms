<?php namespace Fannan\MembersModule\Gold;

use Fannan\MembersModule\Gold\Contract\GoldRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class GoldRepository extends EntryRepository implements GoldRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var GoldModel
     */
    protected $model;

    /**
     * Create a new GoldRepository instance.
     *
     * @param GoldModel $model
     */
    public function __construct(GoldModel $model)
    {
        $this->model = $model;
    }
}
