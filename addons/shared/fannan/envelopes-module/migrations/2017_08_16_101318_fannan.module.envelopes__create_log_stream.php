<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleEnvelopesCreateLogStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'log',
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
        'log_name' => [
            'required' => true,
        ],
        'log_mobile' => [
            'required' => true,
        ],
        'log_amount' => [
            'required' => true,
        ],
        'log_member_id'
    ];

}
