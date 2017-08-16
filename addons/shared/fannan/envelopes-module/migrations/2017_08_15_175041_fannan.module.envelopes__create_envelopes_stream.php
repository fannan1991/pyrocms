<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleEnvelopesCreateEnvelopesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'envelopes',
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
        'envelopes_amount_min' => [
            'required' => true,
        ],
        'envelopes_amount_max' => [
            'required' => true,
        ],
        'envelopes_visitor_times' => [
            'required' => true,
        ],
        'envelopes_ordinary_times' => [
            'required' => true,
        ],
        'envelopes_silver_times' => [
            'required' => true,
        ],
        'envelopes_gold_times' => [
            'required' => true,
        ],
        'envelopes_diamond_times' => [
            'required' => true,
        ],
        'envelopes_is_open'

    ];

}
