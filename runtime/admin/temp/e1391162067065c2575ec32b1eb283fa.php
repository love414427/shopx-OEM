<?php /*a:1:{s:77:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/user/module/avatar.html";i:1660808542;}*/ ?>
<!-- 用户头像信息 -->
<?php if(!empty($module_data)): if(!empty($module_data['avatar'])): ?>
        <img src="<?php echo htmlentities($module_data['avatar']); ?>" class="am-img-thumbnail am-radius" width="80" height="80" />
    <?php else: ?>
        <span class="cr-ddd">暂无头像</span>
    <?php endif; ?>
<?php endif; ?>