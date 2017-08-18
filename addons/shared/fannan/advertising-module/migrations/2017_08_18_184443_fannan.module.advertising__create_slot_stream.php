<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleAdvertisingCreateSlotStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'slot',
         'title_column' => 'slot_name',
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
        'slot_name' => [
            'required' => true,
        ],
        'slot_description',

    ];

}
