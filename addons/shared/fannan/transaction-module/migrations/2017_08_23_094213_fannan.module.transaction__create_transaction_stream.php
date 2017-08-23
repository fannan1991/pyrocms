<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleTransactionCreateTransactionStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'transaction',
         'title_column' => 'trade_out_no',
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
        'trade_out_no',
        'trade_amount',
        'trade_payment_method',
        'trade_no',
        'trade_project',
        'trade_member_id',
        'trade_mobile',
        'trade_status',
        'trade_payment_time',
    ];

}
