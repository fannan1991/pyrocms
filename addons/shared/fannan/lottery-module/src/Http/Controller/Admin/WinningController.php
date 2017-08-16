<?php namespace Fannan\LotteryModule\Http\Controller\Admin;

use Fannan\LotteryModule\Winning\Form\WinningFormBuilder;
use Fannan\LotteryModule\Winning\Table\WinningTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class WinningController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param WinningTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(WinningTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param WinningFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(WinningFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param WinningFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(WinningFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
