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
    <!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1f3149032632de5f81e16a27e5ccdb8d&action=lists&catid=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','limit'=>'20',));}?>-->
    <!--<?php echo $data;?>-->
    <!--<div class="banner banner_s"><img src="$data['thumb']" alt=""/></div>-->
    <!--<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
    <div class="scd_r">
        <div class="r_name"><span>人才招聘</span></div>
        <div class="r_ctn clearfix">
            <ul class="join clearfix">
                <li>
                    <div class="title">财务助理</div>
                    <div class="des">
                        <p><b>岗位职责：</b></p>
                        <p>1、申请票据，购买发票，准备和报送会计报表，协助办理税务报表的申报；</p>
                        <p>2、现金及银行收付处理，制作记帐凭证，银行对帐，单据审核，开具与保管发票；</p>
                        <p>3、协助财会文件的准备、归档和保管；</p>
                        <p>4、固定资产和低值易耗品的登记和管理；</p>
                        <p>5、负责与银行、税务等部门的对外联络；</p>
                        <p>6、协助主管完成其他日常事务性工作；</p>
                        <p>7、其它事宜；</p>
                    </div>
                    <div class="space_hx">&nbsp;</div>
                    <div class="des">
                        <p><b>任职要求：</b></p>
                        <p>1、毕业一年以上，有贸易会计公司经验，或者做过会计文员</p>
                        <p>2、持有会计证</p>
                        <p>3、男女不限</p>
                    </div>
                </li>
                <li>
                    <div class="title">财务助理</div>
                    <div class="des">
                        <p><b>岗位职责：</b></p>
                        <p>1、申请票据，购买发票，准备和报送会计报表，协助办理税务报表的申报；</p>
                        <p>2、现金及银行收付处理，制作记帐凭证，银行对帐，单据审核，开具与保管发票；</p>
                        <p>3、协助财会文件的准备、归档和保管；</p>
                        <p>4、固定资产和低值易耗品的登记和管理；</p>
                        <p>5、负责与银行、税务等部门的对外联络；</p>
                        <p>6、协助主管完成其他日常事务性工作；</p>
                        <p>7、其它事宜；</p>
                    </div>
                    <div class="space_hx">&nbsp;</div>
                    <div class="des">
                        <p><b>任职要求：</b></p>
                        <p>1、毕业一年以上，有贸易会计公司经验，或者做过会计文员</p>
                        <p>2、持有会计证</p>
                        <p>3、男女不限</p>
                    </div>
                </li>
            </ul>
            <div class="space_hx">&nbsp;</div>
            <div class="pages">
                <a href="" class="prev">上一页</a>
                <a href="" class="now">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="">5</a>
                <a href="">……</a>
                <a href="" class="next">下一页</a>
            </div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>