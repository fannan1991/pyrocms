<?php namespace Fannan\LotteryModule\Ticket;

use Fannan\LotteryModule\Ticket\Contract\TicketRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TicketRepository extends EntryRepository implements TicketRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TicketModel
     */
    protected $model;

    /**
     * Create a new TicketRepository instance.
     *
     * @param TicketModel $model
     */
    public function __construct(TicketModel $model)
    {
        $this->model = $model;
    }
}
