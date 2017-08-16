<?php namespace Fannan\EnvelopesModule\Envelope;

use Fannan\EnvelopesModule\Envelope\Contract\EnvelopeRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class EnvelopeRepository extends EntryRepository implements EnvelopeRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var EnvelopeModel
     */
    protected $model;

    /**
     * Create a new EnvelopeRepository instance.
     *
     * @param EnvelopeModel $model
     */
    public function __construct(EnvelopeModel $model)
    {
        $this->model = $model;
    }
}
