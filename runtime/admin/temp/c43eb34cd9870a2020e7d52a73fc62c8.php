<?php /*a:1:{s:88:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/payment/module/apply_terminal.html";i:1660808542;}*/ ?>
<!-- 适配平台 -->
<?php if(!empty($module_data['apply_terminal']) and is_array($module_data['apply_terminal'])): foreach($module_data['apply_terminal'] as $terminal_k=>$terminal_v): ?>
        <p><?php echo htmlentities($common_platform_type[$terminal_v]['name']); ?></p>
    <?php endforeach; ?>
<?php endif; ?>