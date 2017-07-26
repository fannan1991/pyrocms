<?php namespace Fannan\MembersModule\Integral;

use Fannan\MembersModule\Integral\Contract\IntegralRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class IntegralRepository extends EntryRepository implements IntegralRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var IntegralModel
     */
    protected $model;

    /**
     * Create a new IntegralRepository instance.
     *
     * @param IntegralModel $model
     */
    public function __construct(IntegralModel $model)
    {
        $this->model = $model;
    }
}
