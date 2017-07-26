<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Repayment\Form\RepaymentFormBuilder;
use Fannan\MembersModule\Repayment\Table\RepaymentTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class RepaymentController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param RepaymentTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(RepaymentTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param RepaymentFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(RepaymentFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param RepaymentFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(RepaymentFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
