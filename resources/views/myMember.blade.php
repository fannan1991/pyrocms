<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>我的会员</title>
    <link rel="stylesheet" type="text/css" href="/lottery/css/style.css" />
    <script type="text/javascript" src="/lottery/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/lottery/js/adaptive.js" ></script>
    <script type="text/javascript">
        window['adaptive'].desinWidth=640;
        window['adaptive'].baseFont=24;
        window['adaptive'].maxWidth=480;
        window['adaptive'].init();
    </script>
</head>
<body class="yellowbg">
<div id="buttons"> </div>
<div class="outer_wrap">
    <div class="content_wrap huiyuanhead">
        <div class="jifenbox">
            <p>积分</p>
            <p><strong>{{$member->integral}}</strong></p>
            <p><span>@if($member->grade == '1')游客@elseif($member->grade == '2')普通会员@elseif($member->grade == '3')铜牌会员@elseif($member->grade == '4')银牌会员@elseif($member->grade == '5')金牌会员@elseif($member->grade == '6')钻石会员@endif</span></p>
        </div>
        @if($member->grade == '1')
        <p><a href="#" class="imgbtn" onclick="payMember()"><img src="/lottery/images/kaitongbtn.png"></a></p>
        @endif
        <p><a href="#" class="txtbtn" onclick="creditsLog()">积分记录</a></p>
    </div>
    <div class="content_wrap">
        <div class="dengjitable">
            <h3 class="biaoti">会员等级对照表</h3>
            <ul>
                <li><a href="#">
                        <img src="/lottery/images/img-youke.png">
                        <p class="p1">游客</p>
                        <p class="p2">无积分</p></a>
                </li>
                <li><a href="#">
                        <img src="/lottery/images/img-putong.png">
                        <p class="p1">普通会员</p>
                        <p class="p2">无积分</p></a>
                </li>
                <li><a href="#">
                        <img src="/lottery/images/img-tongpai.png">
                        <p class="p1">铜牌会员</p>
                        <p class="p2">100积分</p></a>
                </li>
                <li><a href="#">
                        <img src="/lottery/images/img-yinpai.png">
                        <p class="p1">银牌会员</p>
                        <p class="p2">500积分</p></a>
                </li>
                <li><a href="#">
                        <img src="/lottery/images/img-jinpai.png">
                        <p class="p1">金牌会员</p>
                        <p class="p2">1000无积分</p></a>
                </li>
                <li><a href="#">
                        <img src="/lottery/images/img-zuanshi.png">
                        <p class="p1">钻石会员</p>
                        <p class="p2">3000积分</p></a>
                </li>
            </ul>
        </div>

        <div class="dengjitable choujiangsm">
            <h3 class="biaoti">福利说明</h3>
            {!! $post->content !!}
        </div>

    </div>

</div>
<script type="text/javascript" src="/lottery/js/jquery.rotate.min.js"></script>
<script type="text/javascript" src="/lottery/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
    function payMemberResult(is_succeed, out_trade_no) {
        //alert(is_succeed+"&"+out_trade_no)
        if(is_succeed == 1){
            //信息框
            layer.open({
                content: text,
                btn: '支付成功'
            });
        }else{
            //信息框
            layer.open({
                content: text,
                btn: '支付失败'
            });
        }
    }

    function creditsLog() {
        window.client.creditsLog()
    }

    function payMember(){
        window.client.payMember()
    }

    <!-- 申明交互 -->
    function setupWebViewJavascriptBridge(callback) {
        if (window.WebViewJavascriptBridge) { return callback(WebViewJavascriptBridge); }
        if (window.WVJBCallbacks) { return window.WVJBCallbacks.push(callback); }
        window.WVJBCallbacks = [callback];
        var WVJBIframe = document.createElement('iframe');
        WVJBIframe.style.display = 'none';
        //WVJBIframe.src = 'https://__bridge_loaded__';
        document.documentElement.appendChild(WVJBIframe);
        setTimeout(function() { document.documentElement.removeChild(WVJBIframe) }, 0)
    }

    <!-- 处理交互  方法名要和ios内定义的对应-->
    setupWebViewJavascriptBridge(function(bridge) {
        <!--处理 oc 调用 js -->
        bridge.registerHandler('registerAction', function(data, responseCallback) {
            //处理oc给的传参
            alert('oc请求js  传值参数是：'+data)
            var responseData = { 'result':'handle success' }
            //处理完，回调传值给oc
            responseCallback(responseData)
        })

        var callbackButton = document.getElementById('buttons').appendChild(document.createElement('button'))
        callbackButton.innerHTML = '点击我，我会调用oc的方法'
        callbackButton.onclick = function(e) {
            e.preventDefault()
            bridge.callHandler('loginAction', {'userId':'zhangsan','name': '章三'}, function(response) {
                //处理oc过来的回调
                alert('收到oc过来的回调:'+response)
            })
        }
    })
</script>
</body>
</html>
