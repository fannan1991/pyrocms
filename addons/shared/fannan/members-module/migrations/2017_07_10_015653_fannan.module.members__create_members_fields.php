<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleMembersCreateMembersFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        //会员手机号（登录）
        'mobile' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        //密码
        'password' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        //第三方openid
        'openid' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        //6位唯一邀请码
        'invitation_code' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 12,
            ]
        ],
        //昵称
        'nickname' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 24,
            ]
        ],
        //头像
        'avatar' => 'anomaly.field_type.file',
        //会员等级
        'grade' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    '1' => '普通会员',
                    '2' => '铜牌会员',
                    '3' => '银牌会员',
                    '4' => '金牌会员',
                    '5' => '钻石会员',
                ],
            ]
        ],
        "is_verified" => [
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
        //真实姓名
        'real_name' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 12,
            ]
        ],
        //身份证号
        'id_card' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 24,
            ]
        ],
        //身份证正面照片
        'card_positive_pic' => 'anomaly.field_type.file',
        //身份证反面照片
        'card_negative_pic' => 'anomaly.field_type.file',
        //手持身份证照片
        'card_pic' => 'anomaly.field_type.file',
        //认证结果
        'results' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        //积分
        'integral' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'max'           => 12,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //金币
        'gold' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'max'           => 12,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //第一个上级会员id
        'parent_id' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'max'           => 12,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //第二个上级会员id
        'grand_id' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'max'           => 12,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //第三个上级会员id
        'great_grand_id' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'max'           => 12,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],

    ];

}
