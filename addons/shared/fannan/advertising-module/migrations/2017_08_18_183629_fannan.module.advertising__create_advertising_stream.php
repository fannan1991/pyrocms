<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleAdvertisingCreateAdvertisingStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'advertising',
         'title_column' => 'ad_title',
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
        'ad_title' => [
            'required' => true,
        ],
        'ad_slot',
        'ad_image' => [
            'required' => true,
        ],
        'ad_url',
        'ad_description',
        'ad_sorting'
    ];

}
