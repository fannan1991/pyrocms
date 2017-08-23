<?php namespace Fannan\TransactionModule\Http\Controller\Admin;

use Fannan\TransactionModule\Transaction\Form\TransactionFormBuilder;
use Fannan\TransactionModule\Transaction\Table\TransactionTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TransactionController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TransactionTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TransactionTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TransactionFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TransactionFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TransactionFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TransactionFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
