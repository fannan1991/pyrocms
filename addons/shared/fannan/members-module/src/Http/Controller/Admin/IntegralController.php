<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Integral\Form\IntegralFormBuilder;
use Fannan\MembersModule\Integral\Table\IntegralTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class IntegralController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param IntegralTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(IntegralTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param IntegralFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(IntegralFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param IntegralFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(IntegralFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
