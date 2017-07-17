<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">-->
    <title>驿家物业</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>tg/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>tg/thems.css">
    <script type="text/javascript" src="<?php echo JS_PATH;?>tg/jquery-1.8.3.min.js"></script>
    <!--<script type="text/javascript" src="Assets/js/js_z.js"></script>-->


</head>

<body>
<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34f41a2f71fbaddd09c776baa0d17b3c&action=category&catid=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'20',));}?>
    <?php echo var_dump($data);?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--<?php echo IMG_PATH;?>-->
<!--头部-->
<div class="header">
    <div class="head clearfix">
        <div class="logo"><a href=""><img src="<?php echo IMG_PATH;?>tg/logo.png" alt="驿家物业"/></a></div>
        <div class="head_r">
            <div class="h_rt">
                <span>咨询电话：<b>400-066-8939</b></span>
                <span><a href="">设为首页</a>|<a href="">联系我们</a></span>
            </div>
            <ul class="nav clearfix">
                <li><a href="<?php echo WEB_PATH;?>">首页</a></li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34f41a2f71fbaddd09c776baa0d17b3c&action=category&catid=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>
<!--头部-->