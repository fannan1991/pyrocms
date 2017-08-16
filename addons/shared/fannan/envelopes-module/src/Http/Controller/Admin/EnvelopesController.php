<?php namespace Fannan\EnvelopesModule\Http\Controller\Admin;

use Fannan\EnvelopesModule\Envelope\Form\EnvelopeFormBuilder;
use Fannan\EnvelopesModule\Envelope\Table\EnvelopeTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class EnvelopesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param EnvelopeTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(EnvelopeTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param EnvelopeFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(EnvelopeFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param EnvelopeFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(EnvelopeFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    public function setting(EnvelopeFormBuilder $form)
    {
        return $form->render(1);
    }
}
