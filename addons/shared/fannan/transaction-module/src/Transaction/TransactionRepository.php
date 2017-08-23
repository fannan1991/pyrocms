<?php namespace Fannan\TransactionModule\Transaction;

use Fannan\TransactionModule\Transaction\Contract\TransactionRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TransactionRepository extends EntryRepository implements TransactionRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TransactionModel
     */
    protected $model;

    /**
     * Create a new TransactionRepository instance.
     *
     * @param TransactionModel $model
     */
    public function __construct(TransactionModel $model)
    {
        $this->model = $model;
    }
}
