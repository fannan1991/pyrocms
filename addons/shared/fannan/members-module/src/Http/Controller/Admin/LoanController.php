<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Loan\Form\LoanFormBuilder;
use Fannan\MembersModule\Loan\Table\LoanTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LoanController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LoanTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LoanTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LoanFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LoanFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LoanFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LoanFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
