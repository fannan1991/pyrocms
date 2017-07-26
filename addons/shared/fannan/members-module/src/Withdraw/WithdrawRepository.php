<?php namespace Fannan\MembersModule\Withdraw;

use Fannan\MembersModule\Withdraw\Contract\WithdrawRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class WithdrawRepository extends EntryRepository implements WithdrawRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var WithdrawModel
     */
    protected $model;

    /**
     * Create a new WithdrawRepository instance.
     *
     * @param WithdrawModel $model
     */
    public function __construct(WithdrawModel $model)
    {
        $this->model = $model;
    }
}
