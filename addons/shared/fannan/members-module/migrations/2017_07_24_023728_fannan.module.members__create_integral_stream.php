<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleMembersCreateIntegralStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'integral',
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
        'integral_num' => [
            'required' => true,
        ],
        'integral_summary' => [
            'required' => true,
        ],
        'integral_mobile' => [
            'required' => true,
        ],
        'integral_member_id'
    ];

}
