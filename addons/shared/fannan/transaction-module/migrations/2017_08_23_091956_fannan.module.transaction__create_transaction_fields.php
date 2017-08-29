<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FannanModuleTransactionCreateTransactionFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        //交易记录
        //单号
        'trade_out_no' => 'anomaly.field_type.text',
        //交易金额
        "trade_amount" => [
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
        //支付方式
        'trade_payment_method' => 'anomaly.field_type.text',
        //第三方交易流水号
        'trade_no' => 'anomaly.field_type.text',
        //交易项目
        'trade_project' => 'anomaly.field_type.text',
        'trade_member' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Fannan\MembersModule\Member\MemberModel',
            ]
        ],
        //手机号
        'trade_mobile' => 'anomaly.field_type.integer',
        'trade_status' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    '1' => '未支付',
                    '2' => '已支付',
                ],
            ]
        ],
        //付款时间
        "trade_payment_time" => [
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
     ];

}
