<?php /*a:1:{s:78:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/slide/module/images.html";i:1660808542;}*/ ?>
<!-- 图片信息 -->
<?php if(!empty($module_data)): ?>
    <div <?php if(!empty($module_data['bg_color'])): ?>style="background-color:<?php echo htmlentities($module_data['bg_color']); ?>;"<?php endif; ?>>
        <?php if(!empty($module_data['images_url'])): ?>
            <a href="<?php echo htmlentities($module_data['images_url']); ?>" target="_blank">
                <img src="<?php echo htmlentities($module_data['images_url']); ?>" class="am-radius" width="100" height="60" />
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>