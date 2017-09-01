<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleLotteryCreateLotteryFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        //抽奖活动
        //活动标题
        'lottery_title' => 'anomaly.field_type.text',
        //活动开始时间
        "lottery_start" => [
            "type"   => "anomaly.field_type.datetime",
            "config" => [
                "default_value" => null,
                "mode"          => "datetime",
                "date_format"   => "j F, Y",
                "year_range"    => "-50:+50",
                "time_format"   => "g:i A",
                "timezone"      => null,
                "step"          => 1,
                "min"           => null,
                "max"           => null
            ]
        ],
        //活动结束时间
        "lottery_end" => [
            "type"   => "anomaly.field_type.datetime",
            "config" => [
                "default_value" => null,
                "mode"          => "datetime",
                "date_format"   => "j F, Y",
                "year_range"    => "-50:+50",
                "time_format"   => "g:i A",
                "timezone"      => null,
                "step"          => 1,
                "min"           => null,
                "max"           => null
            ]
        ],
        //参与次数
        'lottery_times' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //是否需要抽奖券
        "lottery_is_ticket" => [
            "type"   => "anomaly.field_type.boolean",
            "config" => [
                "default_value" => true,
                "on_color"      => "success",
                "off_color"     => "danger",
                "on_text"       => "YES",
                "off_text"      => "NO",
                "mode"          => null
            ]
        ],
        //是否开启
        "lottery_is_open" => [
            "type"   => "anomaly.field_type.boolean",
            "config" => [
                "default_value" => true,
                "on_color"      => "success",
                "off_color"     => "danger",
                "on_text"       => "YES",
                "off_text"      => "NO",
                "mode"          => null
            ]
        ],
        //描述
        'lottery_description' => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows'          => 5,
                'min'           => 10,
                'max'           => 1000,
            ]
        ],
        //规则
        "lottery_rule" => [
            "type"   => "anomaly.field_type.wysiwyg",
        ],

        //奖品
        //奖品等级说明
        'prize_grade' => 'anomaly.field_type.text',
        'prize_name' => 'anomaly.field_type.text',
        //中奖概率
        "prize_probability" => [
            "type"   => "anomaly.field_type.decimal",
            "config" => [
                "default_value" => null,
                "separator" => ",",
                "point"     => ".",
                "decimals"  => 2,
                "min"       => 0.01,
                "max"       => 100,
            ]
        ],
        //数量
        'prize_num' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 1,
                'step'          => 1,
                "default_value" => 1,
            ]
        ],
        //抽奖活动ID
        'prize_lottery_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\LotteryModule\Lottery\LotteryModel',
            ]
        ],
        //指定中奖人
        "prize_winning_mobile" => [
            "type"   => "anomaly.field_type.tags",
            "config" => [
                "min"           => null,
                "max"           => null,
                "options"       => [],
                "free_input"    => true,
                "filter"        => null,
                "default_value" => null,
            ]
        ],
        //奖品描述
        'prize_description' => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows'          => 5,
                'min'           => 0,
                'max'           => 500,
            ]
        ],

        //中奖记录
        //抽奖活动ID
        'winning_lottery_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\LotteryModule\Lottery\LotteryModel',
            ]
        ],
        //奖品ID
        'winning_prize_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\LotteryModule\Prize\PrizeModel',
            ]
        ],
        'winning_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //中奖人电话（会员账号）
        'winning_mobile' => 'anomaly.field_type.text',
        'winning_member_real_name' => 'anomaly.field_type.text',
        //奖品等级说明
        'winning_prize_grade' => 'anomaly.field_type.text',
        'winning_prize_name' => 'anomaly.field_type.text',
        "winning_status" => [
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

        //抽奖券
        'ticket_name' => 'anomaly.field_type.text',
        //有效期至
        "ticket_valid_period" => [
            "type"   => "anomaly.field_type.datetime",
            "config" => [
                "default_value" => null,
                "mode"          => "datetime",
                "date_format"   => "j F, Y",
                "year_range"    => "-50:+50",
                "time_format"   => "g:i A",
                "timezone"      => null,
                "step"          => 1,
                "min"           => null,
                "max"           => null
            ]
        ],
        //是否使用
        "ticket_is_use" => [
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
        'ticket_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        'ticket_mobile' => 'anomaly.field_type.text',

        //发放抽奖券
        //会员等级
        'grant_grade' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    '0' => '全部',
                    '1' => '游客',
                    '2' => '普通会员',
                    '3' => '铜牌会员',
                    '4' => '银牌会员',
                    '5' => '金牌会员',
                    '6' => '钻石会员',
                ],
                'default_value' => '1',
            ]
        ],
        //有效期
        "grant_valid_period" => [
            "type"   => "anomaly.field_type.datetime",
            "config" => [
                "default_value" => null,
                "mode"          => "datetime",
                "date_format"   => "j F, Y",
                "year_range"    => "-50:+50",
                "time_format"   => "g:i A",
                "timezone"      => null,
                "step"          => 1,
                "min"           => null,
                "max"           => null
            ]
        ],
        //每人发放数量
        'grant_num' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 1,
                'step'          => 1,
                "default_value" => 1,
            ]
        ],
        //优惠券名称
        'grant_ticket_name' => 'anomaly.field_type.text',
    ];

}
