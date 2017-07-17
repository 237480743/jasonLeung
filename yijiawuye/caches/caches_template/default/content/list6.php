<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php include template("content","banner"); ?>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="scd_l">
        <div class="name">关于驿家<em>/ABOUT</em></div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34f41a2f71fbaddd09c776baa0d17b3c&action=category&catid=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'20',));}?>
        <ul class="s_nav clearfix">
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=87801356c329865187cb4ba736f3a0cc&action=lists&catid=14&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','limit'=>'20',));}?>
    <!--<?php echo var_dump($data);?>-->

            <div class="banner banner_s"><img src="<?php echo $CATEGORYS['image'];?>" alt=""/></div>

    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <div class="scd_r">
        <div class="r_name"><span>联系我们</span></div>
        <div class="r_ctn clearfix">
            <h1>深圳市驿家物业</h1>
            <div class="ct">
                <p>电话（Tel）：0755-26981750</p>
                <p>传真（Fax）：0755-26512421</p>
                <p>公司QQ：568397856</p>
                <p>公司邮箱：45545787@163.com</p>
                <p>公司网址：www.yijiawuliuchina.com</p>
                <p>运营中心：深圳市南山区深南大道100188号新豪方大厦10D.10E</p>
                <p>生产基地：深圳市保安区沙井街道兴业西路裕达富工业园2栋1-2层</p>
            </div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>