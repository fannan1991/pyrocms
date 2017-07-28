<?php namespace Fannan\MembersModule\Message;

use Fannan\MembersModule\Message\Contract\MessageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class MessageRepository extends EntryRepository implements MessageRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var MessageModel
     */
    protected $model;

    /**
     * Create a new MessageRepository instance.
     *
     * @param MessageModel $model
     */
    public function __construct(MessageModel $model)
    {
        $this->model = $model;
    }
}
