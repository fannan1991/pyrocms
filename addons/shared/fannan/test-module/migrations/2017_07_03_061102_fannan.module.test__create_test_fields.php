<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleTestCreateTestFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'num' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'max'           => 100,
                'step'          => 5,
                'default_value' => 50
            ]
        ]
    ];

}
