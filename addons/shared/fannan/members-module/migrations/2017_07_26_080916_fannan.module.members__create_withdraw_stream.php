<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleMembersCreateWithdrawStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'withdraw',
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
        'withdraw_amount' => [
            'required' => true,
        ],
        'withdraw_bank' => [
            'required' => true,
        ],
        'withdraw_name' => [
            'required' => true,
        ],
        'withdraw_card' => [
            'required' => true,
        ],
        'withdraw_bank_card' => [
            'required' => true,
        ],
        'withdraw_mobile' => [
            'required' => true,
        ],
        'withdraw_member_id' => [
            'required' => true,
        ],
        'withdraw_status' => [
            'required' => true,
        ],

    ];

}
