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
        <div class="r_name"><span>我要存房</span></div>
        <div class="r_ctn clearfix">
            <div class="save">
                <div class="title">
                    <span>客户资料</span>
                    <em>全都必填</em>
                </div>
                <ul class="s_a clearfix">
                    <li class="clearfix">
                        <span class="tit">客户姓名：</span>
                        <div class="li_r">
                            <input name="" type="text">
                        </div>
                    </li>
                    <li class="duan clearfix">
                        <span class="tit">性别：</span>
                        <div class="li_r">
                            <select name="">
                                <option>男</option>
                                <option>女</option>
                            </select>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="tit">手机号码：</span>
                        <div class="li_r">
                            <input name="" type="text">
                        </div>
                    </li>
                </ul>
                <div class="title">
                    <span>房地产资料</span>
                    <em>全都必填</em>
                </div>
                <ul class="s_a s_b clearfix">
                    <li class="clearfix">
                        <span class="tit">房产地址：</span>
                        <div class="li_r">
                            <input name="" type="text">
                            <i>存房为业主、租客，省时、省力、省心，还省钱。</i>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="tit">物业现状：</span>
                        <div class="li_r">
                            <select name="">
                                <option>出租</option>
                                <option>出租</option>
                            </select>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="tit">建筑面积：</span>
                        <div class="li_r">
                            <input name="" type="text">
                            <em>/m</em>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="tit">房屋类型：</span>
                        <div class="li_r">
                            <select name="">
                                <option>一室一厅</option>
                                <option>两室一厅</option>
                            </select>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="tit">房屋价格：</span>
                        <div class="li_r">
                            <input name="" type="text">
                            <em>元</em>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="tit">家私电器：</span>
                        <div class="li_r">
                            <select name="">
                                <option>电视</option>
                                <option>热水器</option>
                            </select>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="tit">装修状况：</span>
                        <div class="li_r">
                            <select name="">
                                <option>经济</option>
                                <option>豪华</option>
                            </select>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="tit">&nbsp;</span>
                        <div class="li_r btn">
                            <input name="" type="submit" value="提 交">
                            <input name="" type="reset" value="重 置">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>