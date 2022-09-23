<?php /*a:1:{s:85:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/appcenternav/module/images.html";i:1660808542;}*/ ?>
<!-- 图标 -->
<?php if(!empty($module_data) and !empty($module_data['images_url'])): ?>
    <a href="<?php echo htmlentities($module_data['images_url']); ?>" target="_blank">
        <img src="<?php echo htmlentities($module_data['images_url']); ?>" class="am-radius am-vertical-align-middle" width="30" height="30" />
    </a>
<?php endif; ?>