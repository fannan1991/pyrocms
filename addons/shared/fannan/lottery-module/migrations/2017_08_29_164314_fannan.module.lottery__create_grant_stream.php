<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleLotteryCreateGrantStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'grant',
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
        'grant_ticket_name',
        'grant_grade' => [
            'required' => true,
        ],
        'grant_valid_period' => [
            'required' => true,
        ],
        'grant_num' => [
            'required' => true,
        ],
    ];

}
