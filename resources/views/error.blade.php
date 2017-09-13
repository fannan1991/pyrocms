<!DOCTYPE html>
<html class="ui-page-login">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>提示</title>
    <link href="/lottery/css/mui.min.css" rel="stylesheet" />
    <link href="lottery/css/qrcommon.css" rel="stylesheet" />
    <link href="/lottery/css/form.css" rel="stylesheet" />
    <!-- js -->
    <script src="/lottery/js/mui.min.js"></script>
    <script type="text/javascript" src="/lottery/js/adaptive.js" ></script>
    <script type="text/javascript">
        window['adaptive'].desinWidth=640;
        window['adaptive'].baseFont=24;
        window['adaptive'].maxWidth=480;
        window['adaptive'].init();
        mui.init()
    </script>
</head>
<style type="text/css">
    body,.mui-content{
        background-color: #fff;
    }
</style>

<body>
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">提示</h1>
</header>
<div class="mui-content">
    <div class="qr-sucbox">
        <p><img src="/lottery/images/error.png"/></p>
        <p><span>{{$msg}}</span></p>
    </div>
</div>
<div class="dibucaozuobox">
    <a href="index.html"><img src="/lottery/images/di.png"/></a>
</div>
</body>

</html>