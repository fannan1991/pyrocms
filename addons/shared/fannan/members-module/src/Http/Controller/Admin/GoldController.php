<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Gold\Form\GoldFormBuilder;
use Fannan\MembersModule\Gold\Table\GoldTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class GoldController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param GoldTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(GoldTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param GoldFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(GoldFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param GoldFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(GoldFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
