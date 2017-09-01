<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleLotteryCreatePrizeStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'prize',
         'title_column' => 'prize_name',
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
        'prize_grade' => [
            'required' => true,
        ],
        'prize_name' => [
            'required' => true,
        ],
        'prize_probability' => [
            'required' => true,
        ],
        'prize_num' => [
            'required' => true,
        ],
        'prize_lottery_id',
        'prize_winning_mobile',
        'prize_description',
    ];

}
