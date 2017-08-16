<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleEnvelopesCreateEnvelopesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        //红包
        //红包金额最小值
        'envelopes_amount_min' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 1,
                'step'          => 1,
                'default_value' => 1,
            ]
        ],
        //红包金额最大值
        'envelopes_amount_max' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 1,
                'step'          => 1,
                'default_value' => 1,
            ]
        ],
        //游客每天可参与次数
        'envelopes_visitor_times' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //普通会员每天可参与次数
        'envelopes_ordinary_times' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //铜牌会员每天可参与次数
        'envelopes_bronze_times' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //银牌会员每天可参与次数
        'envelopes_silver_times' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //金牌会员每天可参与次数
        'envelopes_gold_times' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //钻石会员每天可参与次数
        'envelopes_diamond_times' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //是否启用
        "envelopes_is_open" => [
            "type"   => "anomaly.field_type.boolean",
            "config" => [
                "default_value" => false,
                "on_color"      => "success",
                "off_color"     => "danger",
                "on_text"       => "YES",
                "off_text"      => "NO",
                "mode"          => null
            ]
        ],

        //红包记录
        'log_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //姓名
        'log_name' => 'anomaly.field_type.text',
        'log_mobile' => 'anomaly.field_type.text',
        //红包金币金额
        'log_amount' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'step'          => 1,
            ]
        ],
    ];

}
