<?php
namespace App\Api\Transformers;

use Fannan\MembersModule\Loan\LoanModel;
use League\Fractal\TransformerAbstract;

class LoanTransformer extends TransformerAbstract
{
    public function transform(LoanModel $loanModel)
    {
        return [
            'id' => $loanModel['id'],
            'loan_name' => $loanModel['loan_name'],
            'loan_id_card' => $loanModel['loan_id_card'],
            'loan_amount' => $loanModel['loan_amount'],
            'loan_order_sn' => $loanModel['loan_order_sn'],
            'loan_status' => $loanModel['loan_status'],
            'loan_date' => $loanModel['loan_date'],
            'loan_repayment_date' => $loanModel['loan_repayment_date'],
            'loan_term_date' => $loanModel['loan_term_date'],
            'loan_bz' => $loanModel['loan_bz'],
            'created_at' => $loanModel['created_at'],
        ];
    }
}