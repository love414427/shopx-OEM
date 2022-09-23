<?php /*a:1:{s:80:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/payment/module/author.html";i:1660808542;}*/ ?>
<!-- 作者 -->
<?php if(!empty($module_data)): ?>
    <span><?php echo htmlentities($module_data['author']); ?></span>
    <?php if(!empty($module_data['author_url'])): ?>
        <a href="<?php echo htmlentities($module_data['author_url']); ?>" target="_blank">
            <i class="am-icon-external-link"></i>
        </a>
    <?php endif; ?>
<?php endif; ?>