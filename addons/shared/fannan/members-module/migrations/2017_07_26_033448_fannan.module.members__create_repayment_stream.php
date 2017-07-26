<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleMembersCreateRepaymentStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'repayment',
         /*'title_column' => 'name',*/
         'translatable' => true,
         'trashable' => false,
         'searchable' => false,
         'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'repayment_amount' => [
            'required' => true,
        ],
        'repayment_date' => [
            'required' => true,
        ],
        'repayment_status' => [
            'required' => true,
        ],
        'repayment_loan' => [
            'required' => true,
        ],
        'repayment_member_id' => [
            'required' => true,
        ],
        'repayment_sn' => [
            'required' => true,
        ],
        'repayment_loan_name' => [
            'required' => true,
        ],
        'repayment_loan_card' => [
            'required' => true,
        ],
        'repayment_mobile' => [
            'required' => true,
        ],

    ];

}
