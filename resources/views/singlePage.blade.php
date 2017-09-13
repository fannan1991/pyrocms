<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>{{$post->title}}</title>
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
    <header class="content_wrap">
        <a href="javascript:;" class="hdleft" onclick="history.back();"></a>
        {{$post->title}}
    </header>
    <div class="content_wrap">
        <div class="newsdetail">
            @if($post)
                {!! $post->content !!}
            @endif
        </div>
    </div>

</div>


</body>
</html>
