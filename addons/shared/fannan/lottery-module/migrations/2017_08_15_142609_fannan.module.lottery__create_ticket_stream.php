<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleLotteryCreateTicketStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'ticket',
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
        'ticket_name' => [
            'required' => true,
        ],
        'ticket_valid_period' => [
            'required' => true,
        ],
        'ticket_is_use',
        'ticket_member_id',
        'ticket_mobile',

    ];

}
