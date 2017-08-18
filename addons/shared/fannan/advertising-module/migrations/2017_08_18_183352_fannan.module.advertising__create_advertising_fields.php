<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleAdvertisingCreateAdvertisingFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        //广告
        //广告标题
        'ad_title' => 'anomaly.field_type.text',
       'ad_slot' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\AdvertisingModule\Slot\SlotModel',
            ]
        ],
        'ad_image' => 'anomaly.field_type.file',
        "ad_url" => [
            "type"   => "anomaly.field_type.url",
        ],
        'ad_description' => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows'          => 5,
                'min'           => 0,
                'max'           => 250,
            ]
        ],

        //广告位
        //名称
        'slot_name' => 'anomaly.field_type.text',
        'slot_description' => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows'          => 5,
                'min'           => 0,
                'max'           => 250,
            ]
        ],
    ];

}
