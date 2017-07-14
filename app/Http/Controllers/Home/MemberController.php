<?php
namespace App\Http\Controllers\Home;

use Fannan\MembersModule\Member\MemberModel;
use App\SendSMS;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Response;
use Validator;

class MemberController extends Controller{
    public function getRegister(){
        return view('home.member.register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,
            [
                'captcha' => 'required',
                'password'=>'required',
                'mobile' => array('required', 'regex:/(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}/')
            ],
            [

                'mobile.required' => '请输入您的手机号码',
                'mobile.regex' => '请输入正确的手机号码',
                'captcha.required' => '请填写验证码',
                'password.required'=>'请输入密码',

            ]
        );
        $captcha = $request->input('captcha');
        $password = $request->input('password');
        $mobile = $request->input('mobile');
        if(MemberModel::where('mobile',$mobile)->first()){
            echo('<script>alert("手机号已注册");location.href="/member/register"</script>');
        }else{
            if($captcha != $request->session()->get('captcha.value'))
            {
                echo('<script>alert("验证码错误");history.go(-1)</script>');
            }else{
                MemberModel::create([
                    'mobile' => $mobile,
                    'password' => bcrypt($password),
                    'id_num' => rand(100000, 1000000),
                ]);
                if(Auth::user()->attempt(['mobile' => $mobile, 'password' => $password ])){
                    return redirect('/mem/per-info');
                }else{
                    return redirect('/member/login');
                }
            }
        }



    }
    public function getLogin(){
        if(Auth::user()->get()){
            return redirect('/mem/index');
        }else{
            return view('home.member.login');
        }
    }

    public function postLogin(Request $request){
        $mobile = $request->input('mobile');
        $password = $request->input('password');
        $remember = $request->input('remember');
        if(Auth::user()->attempt(['mobile' => $mobile, 'password' => $password ],$remember)){
            if(session('redirect_url')){
                return redirect(session('redirect_url'));
            }else{
                return redirect('/mem/index');
            }

        }else{
            echo('<script>alert("用户名或密码错误");history.go(-1)</script>');
        }
     }

    /*
    * 获取验证码
    *
    * */
    public function postCaptcha(Request $request)
    {
        // 验证电话号码
        $validator = Validator::make($request->all(),
            ['phone' => array('required', 'regex:/(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}/')],
            [
                'phone.required' => '内容不能为空',
                'phone.regex' => '请输入正确的电话号码',
            ]
        );

        if ($validator->fails()) {
            return Response::json(['error' => 1, 'errors' => $validator->errors()->first('phone')]);
        }

        $phone = $request->input('phone');
        // 生成验证码
        $captcha = rand(100000, 1000000);
        // 保存到Session
        session(
            [
                'captcha.phone' => $phone,
                'captcha.value' => $captcha,
                'captcha.lifetime' => 100,
            ]);
        // 发送短信
        $content = '用户您好,您的验证码为【'.$captcha.'】,有效期10分钟,请及时输入。';
        $sendSMS = new SendSMS();
        $result = $sendSMS->_send($phone,$content);
        if($result){
            return Response::json(['error' => 0, 'phone' => $request->input('phone')]);
        }else{
            return Response::json(['error' => 1, 'errors' => '系统繁忙,请稍后再试']);
        }
    }
    public function getRegisterShow(){
        return view('user.register');
    }
    public function getTest(){
        dd(Auth::user()->get()->mobile);

    }
    //验证手机
    public function postCheckPhone($phone){
        if(MemberModel::where('mobile',$phone)->first()){
            return 1;
        }else{
            return 0;
        }
    }
    public function getCaptcha()
    {
        $phone = '15002983802';
        // 生成验证码
        $captcha = rand(100000, 1000000);
        // 保存到Session
        session(
            [
                'captcha.phone' => $phone,
                'captcha.value' => $captcha,
                'captcha.lifetime' => 100,
            ]);
        // 发送短信
        $content = '用户您好,您的验证码为【'.$captcha.'】,有效期10分钟,请及时输入。';
        $sendSMS = new SendSMS();
        $result = $sendSMS->_send($phone,$content);
        if($result){
            echo('s');
        }else{
            echo('f');
        }
    }

    public function getFindPwd(){
        return view('home.member.findpwd');
    }
    //忘记密码
    public function postForget(Request $request)
    {
        $this->validate($request,
            [
                'newcaptcha' => 'required',
                'newpassword'=>'required',
                'newpassword'=>'confirmed',
                'newphone' => array('required', 'regex:/(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}/')
            ],
            [
                'newcaptcha.required' => '请填写验证码',
                'newpassword.required'=>'请输入密码',
                'newpassword.confirmed'=>'两次密码输入不一致',
                'newphone.required' => '手机号不能为空',
                'newphone.regex' => '请输入正确的电话号码'
            ]
        );
        $captcha = $request->input('newcaptcha');
        $password = $request->input('newpassword');
        $mobile = $request->input('newphone');
        $user = MemberModel::where('mobile',$mobile)->first();
        if($user){
            if($captcha != $request->session()->get('captcha.value')){
                echo('<script>alert("验证码错误");history.go(-1)</script>');
            }else{
                // 验证成功，将电话保存到用户信息
                $user->password = bcrypt($password);
                $user->save();
                session(
                    [
                        'user.mobile' => $mobile,
                    ]);
                if(Auth::user()->attempt(['mobile' => $mobile, 'password' => $password ])){
                    echo('<script>alert("密码重置成功");</script>');
                }else{
                    echo('<script>alert("重置失败");</script>');
                }
            }
        }else {
            echo('<script>alert("尚未注册");location.href="/member/register"</script>');
        }
    }
}