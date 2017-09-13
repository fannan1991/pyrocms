<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
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
<div class="outer_wrap">
    <header class="content_wrap">
        <a href="javascript:;" class="hdleft" onclick="history.back();"></a>
        抽奖
        <a href="#zhongjiangJilu" class="hdright">中奖纪录</a>
    </header>
    <div class="g-content">
        <div class="g-lottery-case">
            <p><a href="/api/lottery-route" class="guize fr">活动规则</a></p>
            <div class="g-left">
                <div class="g-lottery-box">
                    <div class="g-lottery-img">
                        <a class="playbtn" href="javascript:;" title="开始抽奖"></a>
                    </div>
                </div>
                <p>
                    <a href="javascript:;" class="cishu">可抽取<span class="playnum"><?php echo e($lottery_times); ?></span>次</a>
                    <span class="ticket_num" style="display: none;"><?php echo e($ticket_num); ?></span>
                </p>
            </div>
        </div>
    </div>
    <div class="content_wrap">
        <p class="biaoti"><img src="/lottery/images/title1.png"></p>
        <div class="txtScroll-top jiangpintable">
            <div class="bd">
                <ul class="infoList">
                    <?php $__currentLoopData = $prizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prize): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <li>
                        <span><?php echo e($prize->prize_grade); ?></span>
                        <span></span>
                        <span></span>
                        <span><?php echo e($prize->prize_name); ?></span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </ul>
            </div>
        </div>
        <p class="biaoti" id="zhongjiangJilu"><img src="/lottery/images/title0.png"></p>
        <div class="txtScroll-top">
            <div class="hd">
                <a class="next"></a>
                <ul></ul>
                <a class="prev"></a>
                <span class="pageState"></span>
            </div>
            <div class="bd">
                <ul class="infoList">
                    <?php $__currentLoopData = $winnings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $winning): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <li>
                        <span><?php echo e(str_limit($winning->winning_member_real_name, $limit = 2, $end = '**')); ?></span>
                        <span><?php echo e(substr_replace($winning->winning_mobile,'****',3,4)); ?></span>
                        <span><?php echo e($winning->created_at); ?></span>
                        <span><?php echo e($winning->winning_prize_grade); ?></span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </ul>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="/lottery/js/jquery.rotate.min.js"></script>
<script type="text/javascript" src="/lottery/js/jquery.SuperSlide.2.1.1.js"></script>
<script>
    //文字滚动
    jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:5});

    //转盘
    $(function() {
        var $btn = $('.playbtn');
         //初始次数，由后台传入
        //$('.playnum').html(playnum);
        var isture = 0;
        var clickfunc = function() {
            var jun=25.7143;
            var area = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
            isture = true;
            $btn.stopRotate();
            $btn.rotate({
                duration: 20000, //旋转时间
                animateTo: 6440, //让它根据得出来的结果加上1440度旋转
            });
            $.ajax({
                type : "POST",
                url: 'http://runfengnet.com/api/lottery?client_id=<?php echo e($client_id); ?>&access_token=<?php echo e($access_token); ?>&lottery_id=<?php echo e($lottery_acticity->id); ?>',
                dataType: "json",
                success: function(data){
                    if(data){
                        if(data.status == 'success'){
                            if(data.code == 100){
                                if(data.data.prize.id == 1){
                                    area = 1;
                                }else if(data.data.prize.id == 2){
                                    area = 5;
                                }else if(data.data.prize.id == 3){
                                    area = 11;
                                }else if(data.data.prize.id == 4){
                                    area = 13;
                                }
                            }else if(data.code == 101){
                                area = 4;
                            }
                            switch(area) {
                                case 1:
                                    rotateFunc(1, jun*0, '特等奖!');
                                    break;
                                case 2:
                                    rotateFunc(2, jun*1, '幸运奖');
                                    break;
                                case 3:
                                    rotateFunc(3, jun*2, '三等奖');
                                    break;
                                case 4:
                                    rotateFunc(4, jun*3, '幸运奖');
                                    break;
                                case 5:
                                    rotateFunc(5, jun*4, '一等奖');
                                    break;
                                case 6:
                                    rotateFunc(6, jun*5, '幸运奖!');
                                    break;
                                case 7:
                                    rotateFunc(7, jun*6, '二等奖');
                                    break;
                                case 8:
                                    rotateFunc(8, jun*7, '幸运奖');
                                    break;
                                case 9:
                                    rotateFunc(9, jun*8, '二等奖');
                                    break;
                                case 10:
                                    rotateFunc(10, jun*9, '幸运奖');
                                    break;
                                case 11:
                                    rotateFunc(11, jun*10, '二等奖');
                                    break;
                                case 12:
                                    rotateFunc(12, jun*11, '幸运奖');
                                    break;
                                case 13:
                                    rotateFunc(13, jun*12, '三等奖');
                                    break;
                                case 14:
                                    rotateFunc(14, jun*13, '幸运奖');
                                    break;
                            }
                        }else{
                            alert(data.msg);
                        }
                    }
                }
            });

        }
        $btn.click(function() {
            var playnum = $('.playnum').html();
            var ticket_num = $('.ticket_num').html();
            if(isture) return; // 如果在执行就退出
            isture = true; // 标志为 在执行
            //先判断是否登录,未登录则执行下面的函数
            if(1 == 2) {
                $('.playnum').html('0');
                alert("请先登录");
                isture = false;
            } else { //登录了就执行下面
                if(playnum <= 0) { //当抽奖次数为0的时候执行
                    alert("没有次数了");
                    $('.playnum').html(0);
                    isture = false;
                }else if(ticket_num <= 0){//当抽奖券为0的时候执行
                    alert("没有抽奖券了");
                    $('.ticket_num').html(0);
                    isture = false;
                }else{ //还有次数就执行
                    playnum = playnum - 1; //执行转盘了则次数减1
                    ticket_num = ticket_num - 1;//抽奖券减1
                    if(playnum <= 0) {
                        playnum = 0;
                    }
                    $('.playnum').html(playnum);
                    $('.ticket_num').html(ticket_num);
                    clickfunc();
                }
            }
        });
        var rotateFunc = function(awards, angle, text) {
            isture = true;
            $btn.stopRotate();
            $btn.rotate({
                angle: 0,
                duration: 10000, //旋转时间
                animateTo: angle + 1440, //让它根据得出来的结果加上1440度旋转
                callback: function() {
                    isture = false; // 标志为 执行完毕
                    alert(text);
                }
            });
        };
    });

    function zhixing(){

    }

</script>

</body>
</html>
