<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleMembersCreateMessageStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'message',
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
        'message_title' => [
            'required' => true,
        ],
        'message_content' => [
            'required' => true,
        ],
        'message_member_id' => [
            'required' => true,
        ],
        'message_mobile' => [
            'required' => true,
        ],
    ];

}
