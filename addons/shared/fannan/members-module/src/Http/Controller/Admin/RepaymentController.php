<?php namespace Fannan\MembersModule\Http\Controller\Admin;

use Fannan\MembersModule\Loan\LoanModel;
use Fannan\MembersModule\Repayment\Form\RepaymentFormBuilder;
use Fannan\MembersModule\Repayment\RepaymentModel;
use Fannan\MembersModule\Repayment\Table\RepaymentTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Http\Request;

class RepaymentController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param RepaymentTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(RepaymentTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param RepaymentFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(RepaymentFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param RepaymentFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(RepaymentFormBuilder $form, $id,Request $request)
    {
        $repayment_loan = $request->repayment_loan;
        $repayment_status = $request->repayment_status;
        if($repayment_loan && $repayment_status == 1){
            $has_repayment = RepaymentModel::where('repayment_loan_id',$repayment_loan)->where('repayment_status',0)->count();
            if($has_repayment <= 1){
                $loan = LoanModel::find($repayment_loan);
                $loan->loan_status = 3;
                $loan->save();
            }
        }
        return $form->render($id);
    }
}
