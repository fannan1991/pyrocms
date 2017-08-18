<?php namespace Fannan\AdvertisingModule\Http\Controller\Admin;

use Fannan\AdvertisingModule\Slot\Form\SlotFormBuilder;
use Fannan\AdvertisingModule\Slot\Table\SlotTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SlotController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SlotTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SlotTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SlotFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SlotFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SlotFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SlotFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
