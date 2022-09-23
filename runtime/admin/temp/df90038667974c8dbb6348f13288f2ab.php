<?php /*a:1:{s:83:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/apphomenav/module/images.html";i:1660808542;}*/ ?>
<!-- 图标 -->
<?php if(!empty($module_data) and !empty($module_data['images_url'])): ?>
    <div class="am-circle nav-icon-circle" style="background-color:<?php if(empty($module_data['bg_color'])): ?>#d0d0d0<?php else: ?><?php echo htmlentities($module_data['bg_color']); ?><?php endif; ?>;">
        <a href="<?php echo htmlentities($module_data['images_url']); ?>" target="_blank">
            <img src="<?php echo htmlentities($module_data['images_url']); ?>" class="am-radius am-vertical-align-middle" width="30" height="30" />
        </a>
    </div>
<?php endif; ?>