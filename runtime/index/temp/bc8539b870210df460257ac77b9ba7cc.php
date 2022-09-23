<?php /*a:1:{s:81:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/order/module/extension.html";i:1660808542;}*/ ?>
<!-- 扩展信息 -->
<?php if(!empty($module_data) and !empty($module_data['extension_data'])): foreach($module_data['extension_data'] as $extk=>$ext): ?>
        <p><?php echo htmlentities($ext['name']); ?> [<?php echo htmlentities($ext['tips']); ?>]</p>
    <?php endforeach; ?>
<?php endif; ?>