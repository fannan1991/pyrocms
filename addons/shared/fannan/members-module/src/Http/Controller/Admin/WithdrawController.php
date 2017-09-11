<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Gold\GoldModel;
use Fannan\MembersModule\Member\MemberModel;
use Fannan\MembersModule\Withdraw\Form\WithdrawFormBuilder;
use Fannan\MembersModule\Withdraw\Table\WithdrawTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Fannan\MembersModule\Withdraw\WithdrawModel;
use Illuminate\Http\Request;

class WithdrawController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param WithdrawTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(WithdrawTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param WithdrawFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(WithdrawFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param WithdrawFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(WithdrawFormBuilder $form, $id ,Request $request)
    {
        $withdraw = WithdrawModel::find($id);
        $member = MemberModel::find($request->withdraw_member_id);
        if(isset($request->withdraw_status) && $request->withdraw_status == 3){
            if($withdraw->withdraw_status != 3)
            //金币变动
            $member->gold -= $request->withdraw_amount;
            $member->save();

            //金币记录
            $gold = new GoldModel;
            $gold->gold_num = -$request->withdraw_amount;
            $gold->gold_summary = '提现';
            $gold->gold_mobile = $member->mobile;
            $gold->gold_member_id_id = $member->id;
            $gold->save();
        }
        if($withdraw->withdraw_status == 1 && isset($request->withdraw_status) && $request->withdraw_status == 0){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/withdraw'</script>");die;
        }
        if($withdraw->withdraw_status == 1 && isset($request->withdraw_status) && $request->withdraw_status == 2){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/withdraw'</script>");die;
        }
        if($withdraw->withdraw_status == 2 && isset($request->withdraw_status) && $request->withdraw_status == 0){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/withdraw'</script>");die;
        }
        if($withdraw->withdraw_status == 2 && isset($request->withdraw_status) && $request->withdraw_status == 1){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/withdraw'</script>");die;
        }
        if($withdraw->withdraw_status == 2 && isset($request->withdraw_status) && $request->withdraw_status == 3){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/withdraw'</script>");die;
        }
        if($withdraw->withdraw_status == 3 && isset($request->withdraw_status) && $request->withdraw_status == 0){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/withdraw'</script>");die;
        }
        if($withdraw->withdraw_status == 3 && isset($request->withdraw_status) && $request->withdraw_status == 1){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/withdraw'</script>");die;
        }
        if($withdraw->withdraw_status == 3 && isset($request->withdraw_status) && $request->withdraw_status == 2){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/withdraw'</script>");die;
        }
        return $form->render($id);
    }
}
