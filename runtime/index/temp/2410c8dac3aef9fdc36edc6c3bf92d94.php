<?php /*a:1:{s:82:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/order/module/pay_status.html";i:1660808542;}*/ ?>
<!-- 支付状态 -->
<?php if(!empty($module_data)): if($module_data['pay_status'] == 1): ?>
        <p class="am-text-success"><?php echo htmlentities($module_data['pay_status_name']); ?></p>
    <?php elseif($module_data['pay_status'] > 1): ?>
        <p class="am-text-warning"><?php echo htmlentities($module_data['pay_status_name']); ?></p>
    <?php else: ?>
        <p class="am-text-danger"><?php echo htmlentities($module_data['pay_status_name']); ?></p>
    <?php endif; if(!empty($module_data['is_under_line_text'])): ?>
        <p class="am-text-warning"><?php echo htmlentities($module_data['is_under_line_text']); ?></p>
    <?php endif; ?>
<?php endif; ?>