<?php namespace Fannan\AdvertisingModule\Http\Controller\Admin;

use Fannan\AdvertisingModule\Advertising\Form\AdvertisingFormBuilder;
use Fannan\AdvertisingModule\Advertising\Table\AdvertisingTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class AdvertisingController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param AdvertisingTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(AdvertisingTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param AdvertisingFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(AdvertisingFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param AdvertisingFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AdvertisingFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
