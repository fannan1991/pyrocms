<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleMembersCreateGoldStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'gold',
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
        'gold_num' => [
            'required' => true,
        ],
        'gold_summary' => [
            'required' => true,
        ],
        'gold_mobile' => [
            'required' => true,
        ],
        'gold_member_id' => [
            'required' => true,
        ],
    ];

}
