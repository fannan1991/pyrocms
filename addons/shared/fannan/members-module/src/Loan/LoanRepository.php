<?php namespace Fannan\MembersModule\Loan;

use Fannan\MembersModule\Loan\Contract\LoanRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LoanRepository extends EntryRepository implements LoanRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LoanModel
     */
    protected $model;

    /**
     * Create a new LoanRepository instance.
     *
     * @param LoanModel $model
     */
    public function __construct(LoanModel $model)
    {
        $this->model = $model;
    }
}
