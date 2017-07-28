<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Message\Form\MessageFormBuilder;
use Fannan\MembersModule\Message\Table\MessageTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class MessageController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param MessageTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MessageTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param MessageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(MessageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param MessageFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(MessageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
