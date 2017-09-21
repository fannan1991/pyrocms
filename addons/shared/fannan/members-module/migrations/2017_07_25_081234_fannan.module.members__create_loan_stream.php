<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleMembersCreateLoanStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'loan',
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
        'loan_name' => [
            'required' => true,
        ],
        'loan_id_card' => [
            'required' => true,
        ],
        'loan_amount' => [
            'required' => true,
        ],
        'loan_order_sn' => [
            'required' => true,
        ],
        'loan_status' => [
            'required' => true,
        ],
        'loan_date',
        'loan_repayment_date',
        'loan_term_date',
        'loan_bz',
        'loan_mobile',
        'loan_member_id',
    ];

}
