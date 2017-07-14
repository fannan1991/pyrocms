<?php
namespace App\Http\Controllers\Member;

use Fannan\MembersModule\Member;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\SendSMS;

class MemController extends Controller{
    public function index(){
        var_dump('testestst');die;
    }




    //修改密码
    public function getChangePwd(){
        return view('home.member.changePwd');
    }
    public function postChangePwd(Request $request){
        $this->validate($request,
            [
                'oldpwd' =>'required',
                'newpwd' =>'required | confirmed',
            ],
            [
                'oldpwd.required' =>'请输入旧密码',
                'newpwd.required' =>'请输入新密码',
                'newpwd.confirmed' =>'两次密码输入不一致'
            ]
        );
        $info = MemberModel::find(Auth::user()->get()->id);
        $oldpwd = $request->input('oldpwd');
        if(Hash::check($oldpwd, $info->password)){
            $info->password = bcrypt($request->input('newpwd'));
            if($info->save()){
                echo('<script>alert("密码修改成功");location.href="/mem/index"</script>');
            }
        }else{
            echo('<script>alert("旧密码输入有误");history.go(-1)</script>');
        }
    }
    //修改手机号
    public function getChangeAccount(){
        return view('home.member.changeAccount');
    }
    public function postChangeAccount(Request $request){
        $this->validate($request,
            [
                'password' =>'required',
                'phone' => array('required', 'regex:/(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}/'),
                'captcha' =>'required',
            ],
            [
                'password.required' =>'请输入当前账户密码',
                'phone.required' =>'请输入新手机号',
                'phone.regex' => '请输入正确的手机号码',
                'captcha.required' =>'请输入验证码'
            ]
        );
        $captcha = $request->input('captcha');
        $phone = $request->input('phone');
        $password = $request->input('password');
        $user = MemberModel::where('mobile',$phone)->first();
        if($user){
            echo('<script>alert("手机号已注册");history.go(-1)</script>');
        }else{
            if($captcha != $request->session()->get('captcha.value')){
                echo('<script>alert("验证码错误");history.go(-1)</script>');
            }else{
                $info = MemberModel::find(Auth::user()->get()->id);
                if(Hash::check($password, $info->password)){
                    $info->mobile = $phone;
                    $info->save();
                    echo('<script>alert("绑定成功");location.href="/mem/index"</script>');
                }else{
                    echo('<script>alert("密码错误");history.go(-1);</script>');
                }
            }
        }

    }
    public function getMsg(){
        $phone = "15002983802";
        $sendSMS = new SendSMS();
        $content = "用户您好,您的验证码为123456,有效期10分钟,请及时输入。";
        $result = $sendSMS->_send($phone,$content);
        if($result){
            echo("success");
        }else{
            echo('fail');
        }
    }

    public function getPerCenter(){
        return view('home.member.perCenter');
    }
    //退出
    public function getLogout(){
        Auth::user()->logout();
        return redirect('/home/index');
    }
}