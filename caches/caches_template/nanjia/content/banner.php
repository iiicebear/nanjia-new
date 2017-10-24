<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><link href="<?php echo CSS_PATH;?>style/style.css" rel="stylesheet" type="text/css" />
<div class="slider">
    <div class="slider-img">
        <ul class="slider-img-ul">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1dcf71a35ad904dc2eec0daada0ba323&action=lists&catid=6&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','limit'=>'5',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                    <li><img src="<?php echo $val['thumb'];?>"></li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
<script type="text/javascript" src="<?php echo JS_PATH;?>slide/xSlider.js"></script>