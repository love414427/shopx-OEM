<?php /*a:1:{s:79:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/slide/module/operate.html";i:1660808542;}*/ ?>
<!-- 操作栏 -->
<button type="button" class="am-btn am-btn-default am-btn-xs am-radius am-btn-block submit-popup" data-url="<?php echo MyUrl('admin/slide/detail', ['id'=>$module_data['id']]); ?>">
    <i class="am-icon-eye"></i>
    <span>详情</span>
</button>
<a class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block" href="<?php echo MyUrl('admin/slide/saveinfo', array_merge($params, ['id'=>$module_data['id']])); ?>">
    <i class="am-icon-edit"></i>
    <span>编辑</span>
</a>
<button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-delete" data-url="<?php echo MyUrl('admin/slide/delete'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-key="ids">
    <i class="am-icon-trash-o"></i>
    <span>删除</span>
</button>