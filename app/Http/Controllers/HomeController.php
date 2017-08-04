<?php

namespace App\Http\Controllers;

use Anomaly\FilesModule\File\FileModel;
use Anomaly\Streams\Platform\Model\Files\FilesFilesEntryModel;
use App\AccessToken;
use App\Api\Transformers\MemberTransformer;
use App\OauthClients;
use Fannan\MembersModule\Gold\GoldModel;
use Fannan\MembersModule\Integral\IntegralModel;
use Fannan\MembersModule\Member\MemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;


class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function test(Request $request){
        $array = array();
        $array[] = $request->name;
        return $this->response->array($array);

    }

    //注册
    public function register(){
        $captcha = $_POST['captcha'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $invitation_code = $_POST['invitation_code'];
        if(MemberModel::where('mobile',$mobile)->first()){
            return Response::make(['error' => '您的手机号已注册！'], 401);
        }else{
            $str_time = $this->dec62($this->msectime());
            $code = $this->randChar().$str_time;
            $member = new MemberModel;
            $member->mobile = $mobile;
            $member->password = bcrypt($password);
            $member->invitation_code = $code;
            if($invitation_code){
                $father = MemberModel::where('invitation_code',$invitation_code)->first();
                $member->parent_id_id = $father->id;
                $member->grand_id_id = $father->parent_id_id;
                $member->great_grand_id_id = $father->grand_id_id;
            }
            $member->save();
            $member = MemberModel::find($member->id);
            return $this->response->item($member ,null);

        }
    }

    //注册客户端
    public function registerClient(){
        $imsi = $_POST['imsi'];
        $member_id = $_POST['member_id'];
        $secret = bcrypt($imsi+$member_id);
        if(MemberModel::find($member_id)){
            $has_client = OauthClients::where('imsi',$imsi)->where('member_id',$member_id)->first();
            if($has_client){
                return $this->response->item($has_client,null);
            }else{
                $client = new OauthClients;
                $client->member_id = $member_id;
                $client->imsi = $imsi;
                $client->secret = $secret;
                $client->save();
                $client = OauthClients::find($client->id);
                return $this->response->item($client,null);
            }
        }else{
            return Response::make(['error' => '用户不存在！'], 401);
        }

    }

    //申请访问令牌access_token
    public function accessToken(){
        $client_id = $_POST['client_id'];
        $secret = $_POST['secret'];
        $client = OauthClients::find($client_id);
        if($client){
            if($secret == $client->secret){
                $has_token = AccessToken::where('member_id',$client->member_id)->where('client_id',$client_id)->first();
                if($has_token){
                    $access_token = AccessToken::find($has_token->id);
                    $access_token->access_token = bcrypt($client_id+$secret+time());
                    $access_token->save();
                    return $this->response->item($access_token,null);
                }else{
                    $access_token = new AccessToken;
                    $access_token->member_id = $client->member_id;
                    $access_token->client_id = $client_id;
                    $access_token->access_token = bcrypt($client_id+$secret+time());
                    $access_token->save();
                    return $this->response->item($access_token,null);
                }
            }
        }else{
            return Response::make(['error' => '非法请求！'], 401);
        }
    }

    //登录
    public function login(){
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $has_member = MemberModel::where('mobile',$mobile)->first();
        if($has_member){
            if(Hash::check($password, $has_member->password)){
                return $this->response->item($has_member,null);
            }else{
                return Response::make(['error' => '用户名密码不匹配'], 401);
            }
        }else{
            return Response::make(['error' => '用户不存在'], 401);
        }
    }

    //忘记密码
    public function forgetPassword(){
        $mobile = $_POST['mobile'];
        $captcha = $_POST['captcha'];
        $password = $_POST['password'];
        $has_member = MemberModel::where('mobile',$mobile)->first();
        if($has_member){
            $member = MemberModel::find($has_member->id);
            $member->password = bcrypt($password);
            $member->save();
            return $this->response->item($member,null);
        }else{
            return Response::make(['error' => '用户不存在'], 401);
        }
    }

    //修改密码
    public function changePassword(Request $request){
        $member_id = $request->member_id;
        $current_password = $request->current_password;
        $new_password = $request->new_password;
        $re_password = $request->re_password;
        $has_member = MemberModel::find($member_id);
        if($has_member){
            if(Hash::check($current_password, $has_member->password)){
                if($new_password == $re_password){
                    $has_member->password = bcrypt($new_password);
                    $has_member->save();
                    return $this->response->item($has_member,null);
                }else{
                    return Response::make(['error' => '两次密码输入不一致'], 401);
                }
            }else{
                return Response::make(['error' => '当前密码错误'], 401);
            }
        }else{
            return Response::make(['error' => '用户不存在'], 401);
        }
    }

    //个人资料
    public function personalInformation(Request $request){
        $member_id = $request->member_id;
        $nickname = $request->nickname;
        $member = MemberModel::find($member_id);
        $member->nickname = $nickname;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $allowed_extensions = ["png", "jpg", "gif", "bmp", "jpeg"];
            if ($image->getClientOriginalExtension() && !in_array($image->getClientOriginalExtension(), $allowed_extensions)) {
                $msg = collect(['error' => 1, 'content' => '只允许上传文件格式为：png,jpg,gif,bmp,jpeg', 'url' => '/admin/advertising/create']);
                return view('message')->withMsg($msg);
            }
            if($image->isValid()){
                $clientName = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $newName = md5(date('ymdhis') . $clientName) . "." . $extension;
                $path = '/'.$image->move('app\default\files-module\local\images', $newName);
                $file = new FilesFilesEntryModel;
                $file->name = $newName;
                $file->disk_id = 1;
                $file->folder_id = 1;
                $file->mime_type = 'image/jpeg';
                $file->entry_type = 'Anomaly\Streams\Platform\Model\Files\FilesImagesEntryModel';
                $file->save();
                $member->avatar_id = $file->id;
            }
        }
        $member->save();
        $member->avatar_path = $path;
        return $this->response->item($member,null);
    }

    //实名认证
    public function verified(Request $request){
        $member_id = $request->member_id;
        $name = $request->name;
        $id_card = $request->id_card;
        $member = MemberModel::find($member_id);
        $member->real_name = $name;
        $member->id_card = $id_card;
        if($request->hasFile('card_positive_pic')){
            $card_positive_pic = $request->file('card_positive_pic');
            $allowed_extensions = ["png", "jpg", "gif", "bmp", "jpeg"];
            if ($card_positive_pic->getClientOriginalExtension() && !in_array($card_positive_pic->getClientOriginalExtension(), $allowed_extensions)) {
                return Response::make(['error' => '图片格式错误'], 401);
            }
            if($card_positive_pic->isValid()){
                $clientName = $card_positive_pic->getClientOriginalName();
                $extension = $card_positive_pic->getClientOriginalExtension();
                $newName = md5(date('ymdhis') . $clientName) . "." . $extension;
                $card_positive_pic_path = '/'.$card_positive_pic->move('app\default\files-module\local\images', $newName);
                $file = new FilesFilesEntryModel;
                $file->name = $newName;
                $file->disk_id = 1;
                $file->folder_id = 1;
                $file->mime_type = 'image/jpeg';
                $file->entry_type = 'Anomaly\Streams\Platform\Model\Files\FilesImagesEntryModel';
                $file->save();
                $member->card_positive_pic_id = $file->id;
            }
        }
        if($request->hasFile('card_negative_pic')){
            $card_negative_pic = $request->file('card_negative_pic');
            $allowed_extensions = ["png", "jpg", "gif", "bmp", "jpeg"];
            if ($card_negative_pic->getClientOriginalExtension() && !in_array($card_negative_pic->getClientOriginalExtension(), $allowed_extensions)) {
                return Response::make(['error' => '图片格式错误'], 401);
            }
            if($card_negative_pic->isValid()){
                $clientName = $card_negative_pic->getClientOriginalName();
                $extension = $card_negative_pic->getClientOriginalExtension();
                $newName = md5(date('ymdhis') . $clientName) . "." . $extension;
                $card_negative_pic_path = '/'.$card_negative_pic->move('app\default\files-module\local\images', $newName);
                $file = new FilesFilesEntryModel;
                $file->name = $newName;
                $file->disk_id = 1;
                $file->folder_id = 1;
                $file->mime_type = 'image/jpeg';
                $file->entry_type = 'Anomaly\Streams\Platform\Model\Files\FilesImagesEntryModel';
                $file->save();
                $member->card_negative_pic_id = $file->id;
            }
        }
        $member->save();
        $member->card_positive_pic_path = $card_positive_pic_path;
        $member->card_negative_pic_path = $card_negative_pic_path;
        return $this->response->item($member,null);
    }

    //客户管理(一级)
    public function firstCustomer(Request $request){
        $member_id = $request->member_id;
        $first_customers = MemberModel::where('parent_id_id',$member_id)->get();
        return $this->response->collection($first_customers,null);
    }

    //客户管理（二级）
    public function secondCustomer(Request $request){
        $member_id = $request->member_id;
        $second_customers = MemberModel::where('grand_id_id',$member_id)->get();
        return $this->response->collection($second_customers,null);
    }

    //客户管理（三级）
    public function threeCustomer(Request $request){
        $member_id = $request->member_id;
        $three_customers = MemberModel::where('great_grand_id_id',$member_id)->get();
        return $this->response->collection($three_customers,null);
    }

    //会员等级
    public function grade(Request $request){
        $member_id = $request->member_id;
        $member = MemberModel::find($member_id);
        return $this->response->array(['integral' => $member->integral]);
    }

    //积分记录
    public function integral(Request $request){
        $member_id = $request->member_id;
        $integral = IntegralModel::where('integral_member_id_id',$member_id)->get();
        return $this->response->collection($integral,null);
    }

    //金币记录
    public function gold(Request $request){
        $member_id = $request->member_id;
        $gold = GoldModel::where('gold_member_id_id',$member_id)->get();
        return $this->response->collection($gold,null);
    }

    //提现
    public function withdraw(Request $request){
        $member_id = $request->member_id;
        $withdraw_amount = $request->withdraw_amount;
        $withdraw_bank = $request->withdraw_bank;
        $withdraw_name = $request->withdraw_name;
        $withdraw_card = $request->withdraw_card;
        $withdraw_bank_card = $request->withdraw_bank_card;
        $withdraw_mobile = $request->withdraw_mobile;
        $captcha = $request->captcha;
        

    }






    // 当前的毫秒时间戳
    public function msectime(){
        $arr = explode(' ', microtime());
        $tmp1 = $arr[0];
        $tmp2 = $arr[1];
        return (float)sprintf('%.0f', (floatval($tmp1) + floatval($tmp2)) * 1000);
    }
    // 10进制转62进制
    public function dec62($dec){
        $base = 62;
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ret = '';
        for($t = floor(log10($dec) / log10($base)); $t >= 0; $t--){
            $a = floor($dec / pow($base, $t));
            $ret .= substr($chars, $a, 1);
            $dec -= $a * pow($base, $t);
        }
        return $ret;
    }
    // 随机字符
    public function randChar(){
        $base = 62;
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return $chars[mt_rand(1, $base) - 1];
    }

}