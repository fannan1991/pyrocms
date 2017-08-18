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
        //会员表
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
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        //第一个上级会员id(父级)
        'parent_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //第二个上级会员id（祖父级）
        'grand_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //第三个上级会员id
        'great_grand_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //二维码
        'qrcode' => [
            'type'   => 'anomaly.field_type.text',
        ],


        //积分记录
        //积分数
        'integral_num' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => -500,
                'max'           => 1200,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        'integral_summary' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
            ]
        ],
        'integral_mobile' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        'integral_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //金币记录
        //金币数
        'gold_num' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => -500000,
                'max'           => 1200000,
                'step'          => 1,
                'default_value' => 0,
            ]
        ],
        'gold_summary' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
            ]
        ],
        'gold_mobile' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        'gold_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],

        //贷款记录
        //姓名
        'loan_name' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        //身份证号
        'loan_id_card' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        //贷款金额
        "loan_amount" => [
            "type"   => "anomaly.field_type.decimal",
            "config" => [
                "default_value" => null,
                "separator" => ",",
                "point"     => ".",
                "decimals"  => 2,
                "min"       => null,
                "max"       => null,
            ]
        ],
        //交易号
        'loan_order_sn' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
                'max'           => 64,
            ]
        ],
        //状态
        'loan_status' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    '0' => '待审核',
                    '1' => '审核通过',
                    '2' => '审核拒绝',
                    '3' => '已完成',
                ],
            ]
        ],
        //贷款日期
        "loan_date" => [
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
        //还款日
        'loan_repayment_date' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 1,
                'max'           => 28,
                'step'          => 1,
                'default_value' => null,
            ]
        ],
        //借款期限
        'loan_term_date' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 1,
                'max'           => 1000,
                'step'          => 1,
                'default_value' => null,
            ]
        ],
        //备注
        'loan_bz' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //会员手机号
        'loan_mobile' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //会员ID
        'loan_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],

        //还款记录
        //还款金额
        "repayment_amount" => [
            "type"   => "anomaly.field_type.decimal",
            "config" => [
                "default_value" => null,
                "separator" => ",",
                "point"     => ".",
                "decimals"  => 2,
                "min"       => null,
                "max"       => null,
            ]
        ],
        //还款日期
        "repayment_date" => [
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
        //还款状态
        'repayment_status' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    '0' => '未还款',
                    '1' => '已还款',
                ],
            ]
        ],
        //对应贷款id
        'repayment_loan' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Loan\LoanModel',
            ]
        ],
        //会员id
        'repayment_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //会员手机号
        'repayment_mobile' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //贷款交易号
        'repayment_sn' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //还款人姓名
        'repayment_loan_name' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //还款人身份证号
        'repayment_loan_card' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],

        //提现记录
        //提现金额
        "withdraw_amount" => [
            "type"   => "anomaly.field_type.decimal",
            "config" => [
                "default_value" => null,
                "separator" => ",",
                "point"     => ".",
                "decimals"  => 2,
                "min"       => 0,
                "max"       => null,
            ]
        ],
        //银行
        'withdraw_bank' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //持卡人
        'withdraw_name' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //身份证号
        'withdraw_card' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //银行卡号
        'withdraw_bank_card' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //手机号
        'withdraw_mobile' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //会员id
        'withdraw_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //还款状态
        'withdraw_status' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    '0' => '待审核',
                    '1' => '提现中',
                    '2' => '拒绝',
                    '3' => '已成功',
                ],
            ]
        ],

        //消息记录
        //标题
        'message_title' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
        //内容
        'message_content' => [
            'type'   => 'anomaly.field_type.textarea',
            'config' => [
                'rows'          => 5,
                'min'           => 10,
                'max'           => 1000,
            ]
        ],
        //会员id
        'message_member_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //手机号
        'message_mobile' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'type'          => 'text',
                'min'           => 2,
            ]
        ],
    ];

}
