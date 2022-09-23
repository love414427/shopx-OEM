<?php /*a:2:{s:74:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/lib/module/user.html";i:1660808542;s:80:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/paylog/module/payment.html";i:1660808542;}*/ ?>
<!-- 支付方式 -->
<?php if(!empty($module_data)): if(isset($module_data['payment_name'])): ?>
        <p><?php echo htmlentities($module_data['payment_name']); ?></p>
    <?php endif; if(isset($module_data['payment'])): ?>
        <p>
            <span class="am-badge am-badge-secondary-plain am-radius"><?php echo htmlentities($module_data['payment']); ?></span>
        </p>
    <?php endif; ?>
<?php endif; ?>