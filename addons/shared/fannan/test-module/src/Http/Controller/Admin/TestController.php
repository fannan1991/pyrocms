<?php namespace Fannan\TestModule\Http\Controller\Admin;

use Fannan\TestModule\Test\Form\TestFormBuilder;
use Fannan\TestModule\Test\Table\TestTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TestController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TestTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TestTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TestFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TestFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TestFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TestFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
