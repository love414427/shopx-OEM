<?php /*a:1:{s:75:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/brand/module/url.html";i:1660808542;}*/ ?>
<!-- url -->
<?php if(!empty($module_data['website_url'])): ?>
    <a href="<?php echo htmlentities($module_data['website_url']); ?>" target="_blank" title="<?php echo htmlentities($module_data['name']); ?>"><?php echo htmlentities($module_data['website_url']); ?></a>
<?php endif; ?>