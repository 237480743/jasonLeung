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
        <div class="r_name"><span>我要求租</span></div>
        <div class="r_ctn clearfix">
            <ul class="rent clearfix">
                <li class="clearfix">
                    <span class="title">标题：</span>
                    <div class="li_r">
                        <input name="" type="text">
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">联系电话：</span>
                    <div class="li_r">
                        <input name="" type="text">
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">姓名：</span>
                    <div class="li_r">
                        <input name="" type="text">
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">建筑面积：</span>
                    <div class="li_r">
                        <input name="" type="text">
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">求租地址：</span>
                    <div class="li_r">
                        <input name="" type="text">
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">房屋型号：</span>
                    <div class="li_r">
                        <select name="">
                            <option>一房一厅</option>
                            <option>两房一厅</option>
                            <option>三房一厅</option>
                            <option>三房两厅</option>
                        </select>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">缩略图：</span>
                    <div class="li_r">
                        <input name="" type="file">
                        <input name="" type="submit" id="sc" value="上传">
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">租金：</span>
                    <div class="li_r">
                        <input name="" type="text">
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">简介：</span>
                    <div class="li_r">
                        <textarea name="" cols="" rows="5"></textarea>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">详细信息：</span>
                    <div class="li_r">
                        <textarea name="" cols="" rows="10"></textarea>
                    </div>
                </li>
                <li class="clearfix">
                    <span class="title">&nbsp;</span>
                    <div class="li_r">
                        <input name="" type="submit" value="发 送">
                        <input name="" type="reset" value="重 置">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>