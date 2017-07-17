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

    <div class="scd_r">
        <div class="r_name"><span>公司简介</span></div>
        <div class="r_ctn clearfix">
            <img src="Assets/upload/pic1.jpg" width="355" height="228" alt="" style="float:right; margin-left:15px;"/>
            驿家物业是在香港首创集团业务中应运而生，伴随首创集团的成长，如今驿家物业服务（深圳）有限公司已在2015年9月强势进入深圳，驿家物业依托首创集团金融服务体系架构，聚焦于稳健的高收益财富目标，具备为多元化的资产配置服务功能为客户提供优质保障及服务。
            <p style="text-indent:2em">受深圳房地产火热的销售及投资客对大深圳及前海自贸区整体经济圈的启发，首创集团开始就将物业管理作为今后的产品主线作为发展之一，并提出了在管理服务上一定要超前的理念打破传统的物业管理方式提出“信任、托付、不一样的租住生活的理念”。正是由于有这样的高标准与高起点，铸就了驿家物业超前的服务意识和敢为天下先的创新特质。从2015年9月首创集团旗下第一家物业管理公司成立，代表了驿家物业充满生命力的企业愿景，意味着与业主携手走向更美好的生活。同时，新的标志还预示着驿家物业更富生命力的发展前景，将成为首创集团重要而独立的组成部分。</p>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>