<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendSMS extends Model
{
    public $post_data = [
        'userid'    => '907722',
        'account'   => '907722',
        'password'  => 'S4hzFX',
        'extno'     => '106907722',
        'content'   => '【润丰网络】请输入验证码234543，尽快完成注册！',
        'mobile'    => '15002983802',
        'sendtime'  => '',
    ];//短信下发数据格式

    public $issue_url = 'http://114.55.88.173:7862/sms?action=send'; //短信下发URL

    public function __construct($marketing = false)
    {
        //判断是否是营销短信如果为true 修改通道
        if($marketing)
        {
            $this->post_data = [
                'userid'    => '10000',
                'account'   => '900002',
                'password'  => 'NEsdmN',
                'extno'     => '106900003',
                'content'   => '',
                'mobile'    => '',
                'sendtime'  => '',
            ];
        }

    }

    /**
     * 发送短信
     * @todo 可能会超时
     * @param string $content 发送短信的内容
     * @param string $mobile  发送短信的号码组多个号码用英文 , 隔开
     * @param string $extno 发送扩展通道号码最多4位 例 0001   组合后10690000200020001未发送号码
     * @param string sendtime 定时发送时间
     * @return bool
     */
    public function sendCodeSMS($content=null, $mobile=null, $extno=null, $sendtime=null)
    {
        $extno = sprintf("%04d", $extno);

        $this->post_data['content'] = $content;
        $this->post_data['extno'] = $this->post_data['extno'].$extno;
        $this->post_data['mobile'] = $mobile;
        $this->post_data['sendtime'] = $sendtime;

        //组合发送字符串
        $o='';

        foreach ($this->post_data as $k=>$v)
        {
            $o.="$k=".urlencode($v).'&';
        }

        $send_data = substr($o,0,-1);


        //发送短信至网关
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL,$this->issue_url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $send_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果需要将结果直接返回到变量里，那加上这句。

        //返回短信网关消息
        $result = curl_exec($ch);



        return $result;
    }
}
