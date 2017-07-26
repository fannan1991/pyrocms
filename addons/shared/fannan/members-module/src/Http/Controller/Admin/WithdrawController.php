<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Withdraw\Form\WithdrawFormBuilder;
use Fannan\MembersModule\Withdraw\Table\WithdrawTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class WithdrawController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param WithdrawTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(WithdrawTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param WithdrawFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(WithdrawFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param WithdrawFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(WithdrawFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
