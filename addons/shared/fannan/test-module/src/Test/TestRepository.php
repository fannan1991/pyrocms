<?php namespace Fannan\TestModule\Test;

use Fannan\TestModule\Test\Contract\TestRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TestRepository extends EntryRepository implements TestRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TestModel
     */
    protected $model;

    /**
     * Create a new TestRepository instance.
     *
     * @param TestModel $model
     */
    public function __construct(TestModel $model)
    {
        $this->model = $model;
    }
}
