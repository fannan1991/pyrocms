<?php namespace Fannan\LotteryModule\Http\Controller\Admin;

use Fannan\LotteryModule\Prize\Form\PrizeFormBuilder;
use Fannan\LotteryModule\Prize\Table\PrizeTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PrizeController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PrizeTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PrizeTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PrizeFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PrizeFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PrizeFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PrizeFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
