<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Gold\GoldModel;
use Fannan\MembersModule\Loan\Form\LoanFormBuilder;
use Fannan\MembersModule\Loan\LoanModel;
use Fannan\MembersModule\Loan\Table\LoanTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Fannan\MembersModule\Member\MemberModel;
use Fannan\MembersModule\Repayment\RepaymentModel;
use Illuminate\Http\Request;
use Psy\Exception\DeprecatedException;

class LoanController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LoanTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LoanTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LoanFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LoanFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LoanFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LoanFormBuilder $form, $id ,Request $request)
    {
        $loan = LoanModel::find($id);
        $member = MemberModel::find($request->loan_member_id);
        if($loan->loan_status == 0 && isset($request->loan_status) && $request->loan_status == 3 ){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if($loan->loan_status == 1 && isset($request->loan_status) && $request->loan_status == 2){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if($loan->loan_status == 1 && isset($request->loan_status) && $request->loan_status == 0){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if($loan->loan_status == 2 && isset($request->loan_status) && $request->loan_status == 0){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if($loan->loan_status == 2 && isset($request->loan_status) && $request->loan_status == 1){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if($loan->loan_status == 2 && isset($request->loan_status) && $request->loan_status == 3){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if($loan->loan_status == 3 && isset($request->loan_status) && $request->loan_status == 0){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if($loan->loan_status == 3 && isset($request->loan_status) && $request->loan_status == 1){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if($loan->loan_status == 3 && isset($request->loan_status) && $request->loan_status == 2){
            echo("<script>alert('状态修改有误');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/'</script>");die;
        }
        if(isset($request->loan_status) && $request->loan_status == 1){
            //如果原有状态是通过审核，则删除生成的还款记录，并根据修改的条件重新生成还款记录;如果原有状态不是通过审核，则直接生成还款记录
            if($loan->loan_status == 1){
                $repayments = RepaymentModel::where('repayment_loan_id',$id)->get();
                foreach($repayments as $item){
                    RepaymentModel::destroy($item->id);
                }
            }else{
                //发放金币
                $member->gold += $request->loan_amount;
                $member->save();

                //金币记录
                $gold = new GoldModel;
                $gold->gold_num = $request->loan_amount;
                $gold->gold_summary = '贷款';
                $gold->gold_mobile = $member->mobile;
                $gold->gold_member_id_id = $member->id;
                $gold->save();
            }

            //生成还款记录
            if(empty($request->loan_repayment_date) || empty($request->loan_term_date) || empty($request->loan_date)){
                echo("<script>alert('信息不完整');location.href= 'http://".$_SERVER['HTTP_HOST']."/admin/members/loan/edit/".$id."'</script>");die;
            }else{
                $repayment_amount = floor($request->loan_amount/$request->loan_term_date);
                $end_amount = $repayment_amount + $request->loan_amount%$request->loan_term_date;
                $first_time = date('Y-m-d H:i:s',strtotime('+1 month',strtotime(date('Y-m-'.$request->loan_repayment_date.' 23:59:59'))));
                for($i=0; $i<$request->loan_term_date;$i++){
                    $repayment = new RepaymentModel;
                    if($i == $request->loan_term_date-1){
                        $repayment->repayment_amount = $end_amount;
                    }else{
                        $repayment->repayment_amount = $repayment_amount;
                    }
                    $repayment->repayment_date = date('Y-m-d H:i:s',strtotime('+'.$i.' month',strtotime($first_time)));
                    $repayment->repayment_status = 0;
                    $repayment->repayment_loan_id = $id;
                    $repayment->repayment_member_id_id = $request->loan_member_id;
                    $repayment->repayment_sn = $request->loan_order_sn;
                    $repayment->repayment_loan_name = $request->loan_name;
                    $repayment->repayment_loan_card = $request->loan_id_card;
                    $repayment->repayment_mobile = $member->mobile;
                    $repayment->save();
                }
            }
        }elseif(isset($request->loan_status) && $request->loan_status == 0){
            $repayments = RepaymentModel::where('repayment_loan_id',$id)->get();
            foreach($repayments as $item){
                RepaymentModel::destroy($item->id);
            }
        }elseif(isset($request->loan_status) && $request->loan_status == 2){
            $repayments = RepaymentModel::where('repayment_loan_id',$id)->get();
            foreach($repayments as $item){
                RepaymentModel::destroy($item->id);
            }
        }
        return $form->render($id);
    }

    public function repayment(LoanFormBuilder $form, $id ,Request $request){
        return redirect('/admin/members/repayment?view=&page=1&filter_search=&filter_repayment_loan'.$id);
    }
}
