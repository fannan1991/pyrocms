<?php namespace Fannan\LotteryModule\Grant;

use Fannan\LotteryModule\Grant\Contract\GrantRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class GrantRepository extends EntryRepository implements GrantRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var GrantModel
     */
    protected $model;

    /**
     * Create a new GrantRepository instance.
     *
     * @param GrantModel $model
     */
    public function __construct(GrantModel $model)
    {
        $this->model = $model;
    }
}
