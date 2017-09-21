<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>详情</title>
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
<body>
<div class="outer_wrap">
    <div class="content_wrap">
        <div class="newsdetail">
            <div class="newtitle">
                <h2>{{$post->title}}</h2>
                <p class="date">{{$post->created_at}}</p>
            </div>
            {!! $post->content !!}
        </div>
    </div>

</div>
</body>
</html>
