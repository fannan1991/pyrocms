<?php namespace Fannan\LotteryModule\Lottery;

use Fannan\LotteryModule\Lottery\Contract\LotteryRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LotteryRepository extends EntryRepository implements LotteryRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LotteryModel
     */
    protected $model;

    /**
     * Create a new LotteryRepository instance.
     *
     * @param LotteryModel $model
     */
    public function __construct(LotteryModel $model)
    {
        $this->model = $model;
    }
}
