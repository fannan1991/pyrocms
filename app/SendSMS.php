<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendSMS extends Model
{
    const username = '1001@800132820001';		//用户账号
    const apikey = 'F40882245D5B1213FDA9C878A9ED7024';	//密码
    /*
     * 发送短信接口
     * @param unknown_type $mobile  电话号码
     * @param unknown_type $content  发送短信内容
     */
    function _send($mobile,$content)
    {
        $result = file_get_contents("http://120.55.242.177/OpenPlatform/OpenApi?action=sendOnce&ac=".self::username."&authkey=".self::apikey."&cgid=6&c=".$content."&m=".$mobile."");
        return $result;
    }

    function curlSMS($url,$post_fields=array()){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3600); //60秒
        curl_setopt($ch, CURLOPT_HEADER,1);
        curl_setopt($ch, CURLOPT_REFERER,'http://www.yourdomain.com');
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$post_fields);
        $data = curl_exec($ch);
        curl_close($ch);
        $res = explode("\r\n\r\n",$data);
        return $res[2];
    }
}
