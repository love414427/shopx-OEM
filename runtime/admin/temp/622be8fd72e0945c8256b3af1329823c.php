<?php /*a:2:{s:74:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/lib/module/user.html";i:1660808542;s:78:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/order/module/status.html";i:1660808542;}*/ ?>
<!-- 订单状态 -->
<?php if(!empty($module_data)): ?>
    <p><?php echo htmlentities($module_data['status_name']); ?></p>
    <?php if($module_data['user_is_delete_time'] != 0): ?>
        <p class="am-text-warning">用户已删除</p>
    <?php endif; ?>
<?php endif; ?>