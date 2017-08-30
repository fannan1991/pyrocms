<?php namespace Fannan\LotteryModule\Http\Controller\Admin;

use Fannan\LotteryModule\Grant\Form\GrantFormBuilder;
use Fannan\LotteryModule\Grant\Table\GrantTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Fannan\LotteryModule\Ticket\TicketModel;
use Fannan\MembersModule\Member\MemberModel;
use Illuminate\Http\Request;

class GrantController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param GrantTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(GrantTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param GrantFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(GrantFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param GrantFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(GrantFormBuilder $form, $id, Request $request)
    {
        $members = MemberModel::orderBy('id','ASC');
        if($request->grant_grade != 0){
            $members = $members->where('grade',$request->grant_grade);
        }
        $members = $members->get();
        foreach($members as $member){
            for($i=0;$i<$request->grant_num;$i++){
                $ticket = new TicketModel;
                if($request->grant_ticket_name){
                    $ticket->ticket_name = $request->grant_ticket_name;
                }else{
                    $ticket->ticket_name = '抽奖券';
                }
                $ticket->ticket_valid_period = $request->grant_valid_period;
                $ticket->ticket_is_use = 0;
                $ticket->ticket_member_id_id = $member->id;
                $ticket->ticket_mobile = $member->mobile;
                $ticket->save();
            }
        }
        return $form->render($id);
    }
}
