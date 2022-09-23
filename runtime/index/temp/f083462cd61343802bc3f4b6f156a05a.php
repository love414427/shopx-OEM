<?php /*a:1:{s:79:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/order/module/operate.html";i:1660808542;}*/ ?>
<!-- 操作栏 -->
<!-- 0待确认, 1已确认/待支付, 2已支付/待发货, 3已发货/待收货, 4已完成, 5已取消, 6已关闭 -->
<a href="<?php echo MyUrl('index/order/detail', ['id'=>$module_data['id']]); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-btn-block" target="_blank">
    <i class="am-icon-eye"></i>
    <span>详情</span>
</a>
<?php if(!empty($module_data['operate_data'])): if($module_data['operate_data']['is_pay'] == 1): ?>
        <button type="button" class="am-btn am-btn-primary am-btn-xs am-radius am-btn-block submit-pay" data-id="<?php echo htmlentities($module_data['id']); ?>" data-payment-id="<?php echo htmlentities($module_data['payment_id']); ?>">
            <i class="am-icon-paypal"></i>
            <span>支付</span>
        </button>
    <?php endif; if($module_data['operate_data']['is_collect'] == 1): ?>
        <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block submit-ajax submit-confirm" data-url="<?php echo MyUrl('index/order/collect'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-view="reload" data-msg="请仔细确认已收到货物、确认继续吗？">
            <i class="am-icon-check-circle-o"></i>
            <span>收货</span>
        </button>
    <?php endif; if($module_data['operate_data']['is_cancel'] == 1): ?>
        <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-btn-block submit-ajax submit-cancel" data-url="<?php echo MyUrl('index/order/cancel'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-view="reload">
            <i class="am-icon-paint-brush"></i>
            <span>取消</span>
        </button>
    <?php endif; if($module_data['operate_data']['is_comments'] == 1): ?>
        <a href="<?php echo MyUrl('index/order/comments', ['id'=>$module_data['id']]); ?>" target="_blank" class="am-btn am-btn-primary am-btn-xs am-radius am-btn-block">
            <i class="am-icon-heart-o"></i>
            <span>评论</span>
        </a>
    <?php endif; if($module_data['operate_data']['is_delete'] == 1): ?>
        <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-delete" data-url="<?php echo MyUrl('index/order/delete'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-view="reload">
            <i class="am-icon-trash-o"></i>
            <span>删除</span>
        </button>
    <?php endif; ?>
<?php endif; ?>