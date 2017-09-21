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
            <p><strong><?php echo e($member->integral); ?></strong></p>
            <p><span>铜牌会员</span></p>
        </div>
        <p><a href="#" class="imgbtn" onclick="payMember()"><img src="/lottery/images/kaitongbtn.png"></a></p>
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
            <h3 class="biaoti">抽奖说明</h3>
            <p>1、2016年1月11日-2016年1月24日期间，每位客户限抽1次。</p>
            <p>2、实物奖品抽中后，我们将为您免费配送至所选体验馆；到货后请凭中奖手机号（带手机）到店自提。在接到领奖通知次日起，7天内未领取的，直接取消领奖资格，实物奖品不退换、不补件。</p>
            <p>3、红包奖品发放：抽中红包后，红包序列号将以短信形式发送至手机，请注意查收。</p>
            <p>4、红包使用方法：凭序列号短信到对应体验馆在体验馆人员帮助下下单使用。</p>
        </div>

    </div>

</div>
<script type="text/javascript" src="/lottery/js/jquery.rotate.min.js"></script>
<script type="text/javascript" src="/lottery/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
    function payMemberResult(is_succeed, out_trade_no) {
        alert(is_succeed+"&"+out_trade_no)
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
