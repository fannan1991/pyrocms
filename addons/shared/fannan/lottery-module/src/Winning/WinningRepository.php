<?php namespace Fannan\LotteryModule\Winning;

use Fannan\LotteryModule\Winning\Contract\WinningRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class WinningRepository extends EntryRepository implements WinningRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var WinningModel
     */
    protected $model;

    /**
     * Create a new WinningRepository instance.
     *
     * @param WinningModel $model
     */
    public function __construct(WinningModel $model)
    {
        $this->model = $model;
    }
}
