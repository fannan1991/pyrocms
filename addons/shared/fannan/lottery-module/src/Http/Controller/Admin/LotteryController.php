<?php namespace Fannan\LotteryModule\Http\Controller\Admin;

use Fannan\LotteryModule\Lottery\Form\LotteryFormBuilder;
use Fannan\LotteryModule\Lottery\Table\LotteryTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LotteryController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LotteryTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LotteryTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LotteryFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LotteryFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LotteryFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LotteryFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    public function prize(LotteryFormBuilder $form, $id)
    {
        return redirect('/admin/lottery/prize?view=&page=1&filter_search=&filter_prize_lottery_id='.$id);
    }
    public function winning(LotteryFormBuilder $form, $id)
    {
        return redirect('/admin/lottery/winning?view=&page=1&filter_search=&filter_winning_lottery_id='.$id);
    }
}