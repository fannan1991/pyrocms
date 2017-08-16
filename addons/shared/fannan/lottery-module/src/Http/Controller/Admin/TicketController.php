<?php namespace Fannan\LotteryModule\Http\Controller\Admin;

use Fannan\LotteryModule\Ticket\Form\TicketFormBuilder;
use Fannan\LotteryModule\Ticket\Table\TicketTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TicketController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TicketTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TicketTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TicketFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TicketFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TicketFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TicketFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
