<?php namespace Fannan\MembersModule\Repayment;

use Fannan\MembersModule\Repayment\Contract\RepaymentRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class RepaymentRepository extends EntryRepository implements RepaymentRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var RepaymentModel
     */
    protected $model;

    /**
     * Create a new RepaymentRepository instance.
     *
     * @param RepaymentModel $model
     */
    public function __construct(RepaymentModel $model)
    {
        $this->model = $model;
    }
}
