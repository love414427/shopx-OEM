<?php /*a:2:{s:80:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/usergoodsbrowse/index.html";i:1660808542;s:87:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/usergoodsbrowse/module/goods.html";i:1660808542;}*/ ?>
<!-- 商品基础信息 -->
<?php if(!empty($module_data)): ?>
    <div class="am-nbfc">
        <a href="<?php echo htmlentities($module_data['goods_url']); ?>" target="_blank" title="<?php echo htmlentities($module_data['title']); ?>">
            <img src="<?php echo htmlentities($module_data['images']); ?>" class="am-img-thumbnail am-radius am-margin-right-xs am-fl" width="60" height="60" />
        </a>
        <a href="<?php echo htmlentities($module_data['goods_url']); ?>" target="_blank" title="<?php echo htmlentities($module_data['title']); ?>" <?php if(!empty($module_data['title_color'])): ?> style="color:<?php echo htmlentities($module_data['title_color']); ?>;" <?php endif; ?> class="am-nowrap-initial"><?php echo htmlentities($module_data['title']); ?></a>
        <?php if(!empty($module_data['simple_desc'])): ?>
            <p class="am-text-danger am-nowrap-initial"><?php echo htmlentities($module_data['simple_desc']); ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>