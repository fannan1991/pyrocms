<?php
namespace App\Api\Transformers;

use Fannan\MembersModule\Repayment\RepaymentModel;
use League\Fractal\TransformerAbstract;

class RepaymentTransformer extends TransformerAbstract
{
    public function transform(RepaymentModel $repaymentModel)
    {
        return [
            'id' => $repaymentModel['id'],
            'repayment_amount' => $repaymentModel['repayment_amount'],
            'repayment_date' => $repaymentModel['repayment_date'],
            'repayment_status' => $repaymentModel['repayment_status'],
            'repayment_loan_id' => $repaymentModel['repayment_loan_id'],
            'repayment_sn' => $repaymentModel['repayment_sn'],
            'repayment_loan_name' => $repaymentModel['repayment_loan_name'],
            'repayment_loan_card' => $repaymentModel['repayment_loan_card'],
            'repayment_mobile' => $repaymentModel['repayment_mobile'],
            'created_at' => $repaymentModel['created_at']

        ];
    }
}