<?php namespace Fannan\LotteryModule\Prize;

use Fannan\LotteryModule\Prize\Contract\PrizeRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PrizeRepository extends EntryRepository implements PrizeRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PrizeModel
     */
    protected $model;

    /**
     * Create a new PrizeRepository instance.
     *
     * @param PrizeModel $model
     */
    public function __construct(PrizeModel $model)
    {
        $this->model = $model;
    }
}
