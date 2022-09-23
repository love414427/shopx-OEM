<?php /*a:1:{s:78:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/article/module/info.html";i:1660808542;}*/ ?>
<!-- 标题信息 -->
<?php if(!empty($module_data)): ?>
    <a href="<?php echo MyUrl('index/article/index', ['id'=>$module_data['id']]); ?>" target="_blank" title="<?php echo htmlentities($module_data['title']); ?>" <?php if(!empty($module_data['title_color'])): ?>style="color:<?php echo htmlentities($module_data['title_color']); ?>;"<?php endif; ?>><?php echo htmlentities($module_data['title']); ?></a>
<?php endif; ?>