<?php
// 微信QQ域名防红跳转 把下面一行代码添加至 index.php
// require_once('WxqqJump/WxqqJump.php');

// 是否开启跳转
$conf["wxqqjump"]="yes";
// 排除路径 vpay回调地址
$conf["vpayurl"]="vpay";
$conf["payurl"]="pay";
// 排除路径 后台登陆地址
$conf["adminurl"]="admin";


if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')||strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false

    && strpos($_SERVER['REQUEST_URI'], strval($conf["vpayurl"]))===false
    && strpos($_SERVER['REQUEST_URI'], strval($conf["adminurl"]))===false
    && strpos($_SERVER['REQUEST_URI'], strval($conf["payurl"]))===false

    && $conf["wxqqjump"]==="yes"){
    $siteurl='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];


echo '<html>
<head>
    <meta charset="UTF-8">
    <title>使用浏览器打开</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <meta name="aplus-touch" content="1">
    <style>
        body,html{width:100%;height:100%}
        *{margin:0;padding:0}
        body{background-color:#fff}
        #browser img{
            width:50px;
        }
        #browser{
            margin: 0px 10px;
            text-align:center;
        }
        #contens{
            font-weight: bold;
            color: #2466f4;
            margin:-285px 0px 10px;
            text-align:center;
            font-size:20px;
            margin-bottom: 125px;
        }
        .top-bar-guidance{font-size:15px;color:#fff;height:70%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(/WxqqJump/banner.png) center top/contain no-repeat}
        .top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
        .app-download-tip{margin:0 auto;width:290px;text-align:center;font-size:15px;color:#2466f4;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x}
        .app-download-tip .guidance-desc{background-color:#fff;padding:0 5px}
        .app-download-tip .icon-sgd{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
        .app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}
    </style>
</head>
<body>

<div class="top-bar-guidance">
    <p>点击右上角<img src="/WxqqJump/3dian.png" class="icon-safari">在 浏览器 打开</p>
    <p>苹果设备<img src="/WxqqJump/iphone.png" class="icon-safari">安卓设备<img src="/WxqqJump/android.png" class="icon-safari">↗↗↗</p>
</div>

<div id="contens">
<p><br/><br/></p>
<p>1.本站不支持微信/QQ访问</p>
<p><br/></p>
<p>2.请按照提示在 浏览器 打开</p>
</div>

<div class="app-download-tip">
    <span class="guidance-desc">'.$siteurl.'</span>
</div>
<p><br/></p>
<div id="browser">
    <a href="mttbrowser://url='. $siteurl .'"><img src="https://img.alicdn.com/imgextra/i4/2200638895580/O1CN01SBZzOC1r5gfz7u3eK_!!2200638895580.jpg"></img></a>
    <a href="googlechrome://browse?url='. $siteurl .'"><img src="https://img.alicdn.com/imgextra/i4/2200638895580/O1CN01uKAjcC1r5gfz7seNT_!!2200638895580.jpg"></img></a>
    <a href="alipays://platformapi/startapp?appId=20000067&url='. $siteurl .'"><img src="https://img.alicdn.com/imgextra/i1/2200638895580/O1CN01G9a7yA1r5gg1mAd2Y_!!2200638895580.jpg"></img></a>
    <a href="googlechrome://browse?url='. $siteurl .'"><img src="https://img.alicdn.com/imgextra/i4/2200638895580/O1CN01gz5cpy1r5gg1mE3BZ_!!2200638895580.jpg"></img></a>
    <a href="ucbrowser://'. $siteurl .'"><img src="https://img.alicdn.com/imgextra/i1/2200638895580/O1CN01pr5nFD1r5gg1mCExu_!!2200638895580.jpg"></img></a>
    <a href="bdbrowser://'. $siteurl .'"><img src="https://img.alicdn.com/imgextra/i3/2200638895580/O1CN01S19hGm1r5gg0JUWIU_!!2200638895580.jpg_160x160.jpg?t=1602614222000"></img></a>
</div>
<div class="app-download-tip">
    <span class="guidance-desc">点击右上角<img src="/WxqqJump/3dian.png" class="icon-sgd"> or 复制网址自行打开</span>
</div>

<script type="text/javascript">$.getScript("http://xxxxx.com/",function(data){});</script>
<script src="/WxqqJump/jquery-3.3.1.min.js"></script>
<script src="/WxqqJump/clipboard.min.js"></script>
<a data-clipboard-text="'.$siteurl.'" class="app-download-btn"  >点此复制本站网址</a>
<script src="https://cdn.staticfile.org/jquery/1.12.3/jquery.min.js"></script>
<script src="/WxqqJump/layer/layer.js"></script>
<script type="text/javascript">new ClipboardJS(".app-download-btn");</script>
<script>
$(".app-download-btn").click(function() {
layer.msg("复制成功，么么哒", function(){
      //关闭后的操作
      });})
</script>

<body>
</html>';
exit;
}
?>