<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleLotteryCreateLotteryStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'lottery',
         'title_column' => 'lottery_title',
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
        'lottery_title' => [
            'required' => true,
        ],
        'lottery_start' => [
            'required' => true,
        ],
        'lottery_end' => [
            'required' => true,
        ],
        'lottery_times' => [
            'required' => true,
        ],
        'lottery_is_ticket',
        'lottery_is_open',
        'lottery_description',
        'lottery_rule'
    ];

}
