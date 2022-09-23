<?php /*a:1:{s:77:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/order/module/goods.html";i:1660808542;}*/ ?>
<!-- 订单商品信息 -->
<?php if(!empty($module_data) and !empty($module_data['items'])): ?>
    <!-- 用户订单列表基础顶部-开始 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_user_order_list_base_top</span>
        </div>
    <?php endif; 
        $hook_name = 'plugins_view_user_order_list_base_top';
        $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
        if(!empty($hook_data) && is_array($hook_data))
        {
            foreach($hook_data as $hook)
            {
                if(is_string($hook) || is_int($hook))
                {
                    echo htmlspecialchars_decode($hook);
                }
            }
        }
     ?>
    <!-- 用户订单列表基础顶部-结束 -->

    <!-- 基础信息 -->
    <p class="am-margin-bottom-sm">
        <!-- 订单号 -->
        <strong class="am-icon-bookmark-o"> <?php echo htmlentities($module_data['order_no']); ?></strong>

        <!-- 仓库信息 -->
        <?php if(!empty($module_data['warehouse_name'])): ?>
            <span class="warehouse-item-container am-fr">
                <?php if(!empty($module_data['warehouse_icon'])): if(IsUrl($module_data['warehouse_icon'])): ?>
                        <img src="<?php echo htmlentities($module_data['warehouse_icon']); ?>" alt="<?php echo htmlentities($module_data['warehouse_name']); ?>" class="warehouse-icon" />
                    <?php else: ?>
                        <i class="<?php echo htmlentities($module_data['warehouse_icon']); ?>"></i>
                    <?php endif; ?>
                <?php endif; if(empty($module_data['warehouse_url'])): ?>
                    <strong class="warehouse-name"><?php echo htmlentities($module_data['warehouse_name']); ?></strong>
                <?php else: ?>
                    <a href="<?php echo htmlentities($module_data['warehouse_url']); ?>" target="_blank" class="text-deco-none">
                        <strong class="warehouse-name"><?php echo htmlentities($module_data['warehouse_name']); ?></strong>
                    </a>
                <?php endif; ?>
            </span>
        <?php endif; ?>

        <!-- 订单列表基础导航底部-开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_user_order_list_base_nav_bottom</span>
            </div>
        <?php endif; 
            $hook_name = 'plugins_view_user_order_list_base_nav_bottom';
            $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
            if(!empty($hook_data) && is_array($hook_data))
            {
                foreach($hook_data as $hook)
                {
                    if(is_string($hook) || is_int($hook))
                    {
                        echo htmlspecialchars_decode($hook);
                    }
                }
            }
         ?>
        <!-- 订单列表基础导航底部-结束 -->
    </p>

    <!-- 用户订单列表基础商品顶部-开始 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_user_order_list_base_goods_top</span>
        </div>
    <?php endif; 
        $hook_name = 'plugins_view_user_order_list_base_goods_top';
        $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
        if(!empty($hook_data) && is_array($hook_data))
        {
            foreach($hook_data as $hook)
            {
                if(is_string($hook) || is_int($hook))
                {
                    echo htmlspecialchars_decode($hook);
                }
            }
        }
     ?>
    <!-- 用户订单列表基础商品顶部-结束 -->

    <!-- 商品信息 -->
    <hr data-am-widget="divider" class="am-divider am-divider-dashed am-margin-top-0" />
    <?php foreach($module_data['items'] as $item): ?>
        <div class="am-nbfc">
            <a href="<?php echo htmlentities($item['goods_url']); ?>" target="_blank">
                <img src="<?php echo htmlentities($item['images']); ?>" class="am-img-thumbnail am-radius am-margin-right-xs am-fl" width="60" height="60" />
            </a>
            <div class="am-nbfc">
                <a href="<?php echo htmlentities($item['goods_url']); ?>" target="_blank" class="am-nowrap-initial"><?php echo htmlentities($item['title']); ?></a>
                <?php if(!empty($item['spec'])): ?>
                    <ul class="goods-spec am-margin-top-xs">
                        <?php foreach($item['spec'] as $spec): ?>
                            <li><?php echo htmlentities($spec['type']); ?>：<?php echo htmlentities($spec['value']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="am-nbfc am-margin-top-xs">
            <?php if($item['original_price'] > 0): ?>
                <span class="original-price am-margin-right-xs"><?php echo htmlentities($module_data['currency_data']['currency_symbol']); ?><?php echo htmlentities($item['original_price']); ?></span>
            <?php endif; ?>
            <span><?php echo htmlentities($module_data['currency_data']['currency_symbol']); ?><?php echo htmlentities($item['price']); ?>x<?php echo htmlentities($item['buy_number']); ?></span>
            <?php if($item['returned_quantity'] > 0 or $item['refund_price'] > 0): ?>
                <span class="am-text-danger am-margin-left-lg">已退 <?php echo htmlentities($item['returned_quantity']); ?> / <?php echo htmlentities($module_data['currency_data']['currency_symbol']); ?><?php echo htmlentities($item['refund_price']); ?></span>
            <?php endif; ?>

            <div class="am-fr">
                <?php if(($module_data['is_can_launch_aftersale'] == 1 or !empty($item['orderaftersale'])) and !empty($item['orderaftersale_btn_text'])): ?>
                <a href="<?php echo MyUrl('index/orderaftersale/detail', ['oid'=>$module_data['id'], 'did'=>$item['id']]); ?>" target="_blank">
                    <?php if(empty($item['orderaftersale'])): ?>
                        <?php echo htmlentities($item['orderaftersale_btn_text']); else: ?>
                        <span class="<?php if($item['orderaftersale']['status'] == 3): ?>am-text-success<?php else: ?>am-text-secondary<?php endif; ?>"><?php echo htmlentities($item['orderaftersale_btn_text']); ?></span>
                    <?php endif; ?>
                </a>
            <?php endif; ?>
            </div>
        </div>
        <hr data-am-widget="divider" class="am-divider am-divider-dashed" />
    <?php endforeach; ?>

    <!-- 用户订单列表基础商品底部-开始 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_user_order_list_base_goods_bottom</span>
        </div>
    <?php endif; 
        $hook_name = 'plugins_view_user_order_list_base_goods_bottom';
        $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
        if(!empty($hook_data) && is_array($hook_data))
        {
            foreach($hook_data as $hook)
            {
                if(is_string($hook) || is_int($hook))
                {
                    echo htmlspecialchars_decode($hook);
                }
            }
        }
     ?>
    <!-- 用户订单列表基础商品底部-结束 -->

    <!-- 商品描述信息 -->
    <div class="am-margin-top-sm"><?php echo htmlentities($module_data['describe']); ?></div>

    <!-- 用户订单列表基础顶部-开始 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_user_order_list_base_bottom</span>
        </div>
    <?php endif; 
        $hook_name = 'plugins_view_user_order_list_base_bottom';
        $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
        if(!empty($hook_data) && is_array($hook_data))
        {
            foreach($hook_data as $hook)
            {
                if(is_string($hook) || is_int($hook))
                {
                    echo htmlspecialchars_decode($hook);
                }
            }
        }
     ?>
    <!-- 用户订单列表基础顶部-结束 -->
<?php endif; ?>