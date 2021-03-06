<!DOCTYPE html>
<html class="ui-page-login">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>注册</title>
    <link href="/lottery/css/mui.min.css" rel="stylesheet" />
    <link href="/lottery/css/qrcommon.css" rel="stylesheet" />
    <link href="/lottery/css/form.css" rel="stylesheet" />
    <!-- js -->
    <script src="/lottery/js/mui.min.js"></script>
    <script src="/lottery/js/mui.enterfocus.js"></script>
    <script src="/lottery/js/app.js"></script>
    <script type="text/javascript" src="/lottery/js/adaptive.js" ></script>
    <script type="text/javascript">
        window['adaptive'].desinWidth=640;
        window['adaptive'].baseFont=24;
        window['adaptive'].maxWidth=480;
        window['adaptive'].init();
        mui.init()
    </script>
    <script type="text/javascript">
        $(window).bind("load", function() {
            var footerHeight = 0;
            var footerTop = 0;

            positionFooter();

            function positionFooter() {
                // 获取页脚的高度
                footerHeight = $(".footer").height();
                // 获取页脚的高度
                /*
                 scrollTop() 设置或获取位于对象最顶端和窗口中可见内容的最顶端之间的距离
                 */
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
                //如果页面内容高度小于屏幕高度，div#footer将绝对定位到屏幕底部，否则div#footer保留它的正常静态定位
                if(($(document.body).height()+footerHeight) < $(window).height()) {
                    $(".footer").css({ position: "absolute",left:"0" }).stop().css({top:footerTop});
                }
            }
            $(window).scroll(positionFooter).resize(positionFooter);
        });
    </script>

</head>
<body>

<div class="mui-content">
    <form id='login-form' class="mui-input-group mui-input-group4 martop25rem" action="/home/h5-register" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mui-input-row mui-input-row4">
            <label>手机号</label>
            <input id='mobile' name="mobile" type="tel" class="mui-input-clear mui-input" placeholder="请输入手机号"
                   pattern="(^(13\d|14[57]|15[^4,\D]|17[678]|18\d)\d{8}|170[059]\d{7})$" required>
            <input type="hidden" value="0" id="N_r">
        </div>
        <div class="mui-input-row mui-input-row4">
            <label>验证码</label>
            <span class="qr-yzm" onclick="getCode(this)" id="J_getCode">发送验证码</span>
            <span class="qr-yzm" id="J_resetCode" style="display:none;"><span id="J_second">60</span>秒后重发</span>
            <input id='captcha' name="captcha" type="text" class="mui-input" placeholder="请输入验证码" required>
        </div>
        <div class="mui-input-row mui-input-row4 mui-password">
            <label>密码</label>
            <input id='password' name="password" type="password" class="mui-input-password mui-input" placeholder="请输入密码" required>
        </div>
        <div class="mui-input-row mui-input-row4 mui-password">
            <label>邀请码</label>
            <input id='invitation_code' name="invitation_code" type="text"  value="{{$invitation_code}}" readonly>
        </div>
        <div class="mui-content-padded martop25rem">
            <div class="cl-5" >注册即同意<a id="xieyiBtn" href="/home/single-page/8">《用户注册协议》</a></div>
        </div>
        <div class="mui-content-padded">
            <input type="submit" class="mui-btn mui-btn-block  mui-btn-primary" value="注册"
                   style="line-height: 40px;
    margin-bottom: 14px;
    background-color: #fb2931;
    font-size: 18px;">
        </div>
    </form>

</div>

<div class="footer dibucaozuobox" style="height: 110px;">
    <a href="index.html"><img src="/lottery/images/di.png" style="width: 100%;"/></a>
</div>
</body>
<script src="http://js.3conline.com/min/temp/v1/lib-jquery1.4.2.js"></script>
<script src="/lottery/js/md5.js"></script>
<script src="/layer_mobile/layer.js"></script>
<script>
    /*获取验证码*/
    var isMobile = 1;
    function getCode(e){
        checkPhone(); //验证手机号码
        var mobile = $('#mobile').val();
        if(isMobile){
            //验证手机号是否存在，如果不存在则发送短信
            $.ajax({
                url:'/api/has-mobile?mobile='+mobile,
                type:'post',
                dataType:'json',
                success:function(data){
                    if(data){
                        if(data.code == 100){
                            if(data.data.has_mobile == 0){
                                $('#N_r').val(1);
                                resetCode(); //倒计时
                                sendSms();
                            }else if(data.data.has_mobile == 1){
                                layer.open({
                                    content: '手机号已被注册，请勿重复注册',
                                    skin: 'msg',
                                    time: 2 //2秒后自动关闭
                                });
                                return;
                            }
                        }
                    }
                }
            })
        }else{
            $('#mobile').focus();
        }
    }
    //验证手机号码
    function checkPhone(){
        var mobile = $('#mobile').val();
        var pattern = /^1[0-9]{10}$/;
        isMobile = 1;
        if(mobile == '') {
            layer.open({
                content: '请输入手机号码',
                skin: 'msg',
                time: 2 //2秒后自动关闭
            });
            isMobile = 0;
            return;
        }
        if(!pattern.test(mobile)){
            layer.open({
                content: '请输入正确的手机号码',
                skin: 'msg',
                time: 2 //2秒后自动关闭
            });
            isMobile = 0;
            return;
        }
    }

    //倒计时
    function resetCode(){
        $('#J_getCode').hide();
        $('#J_second').html('60');
        $('#J_resetCode').show();
        var second = 60;
        var timer = null;
        timer = setInterval(function(){
            second -= 1;
            if(second >0 ){
                $('#J_second').html(second);
            }else{
                clearInterval(timer);
                $('#J_getCode').show();
                $('#J_resetCode').hide();
            }
        },1000);
    }

    //发送验证码
    function sendSms(){
        var mobile = $('#mobile').val();
        var str = '$2y$10$J5BKKdmVrJvllBRsW9f5i.dhjL/czDMns9F5wdpb.byrpDF72jwWG'+mobile;
        var token = str.MD5(32);
        $.ajax({
            url:'/api/send-captcha',
            type:'post',
            dataType:'json',
            data:{
                mobile:mobile,
                token:token,
                type:0
            },
            success:function(data){
                if(data){
                    if(data.status = 'success'){
                        if(data.code == 100){
                            layer.open({
                                content: '短信发送成功',
                                skin: 'msg',
                                time: 2 //2秒后自动关闭
                            });
                        }
                    }else{
                        layer.open({
                            content: data.msg,
                            skin: 'msg',
                            time: 2 //2秒后自动关闭
                        });
                    }
                }
            }
        })
    }
</script>
</html>