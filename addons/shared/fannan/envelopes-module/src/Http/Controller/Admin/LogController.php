<?php namespace Fannan\EnvelopesModule\Http\Controller\Admin;

use Fannan\EnvelopesModule\Log\Form\LogFormBuilder;
use Fannan\EnvelopesModule\Log\Table\LogTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LogController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LogTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LogTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LogFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LogFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LogFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LogFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
