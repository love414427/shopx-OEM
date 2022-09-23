<?php /*a:1:{s:80:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/paylog/module/operate.html";i:1660808542;}*/ ?>
<!-- 操作栏 -->
<button type="button" class="am-btn am-btn-default am-btn-xs am-radius am-btn-block submit-popup" data-url="<?php echo MyUrl('admin/paylog/detail', ['id'=>$module_data['id']]); ?>">
    <i class="am-icon-eye"></i>
    <span>详情</span>
</button>
<?php if($module_data['status'] == 0): ?>
    <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/paylog/close'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-key="ids" data-view="reload">
        <i class="am-icon-close"></i>
        <span>关闭</span>
    </button>
<?php endif; ?>