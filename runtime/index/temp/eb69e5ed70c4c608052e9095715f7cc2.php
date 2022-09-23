<?php /*a:1:{s:79:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/order/module/address.html";i:1660808542;}*/ ?>
<!-- 地址信息 -->
<?php if(!empty($module_data) and in_array($module_data['order_model'], [0,2]) and !empty($module_data['address_data'])): ?>
    <div>
        <?php if(!empty($module_data['address_data']['alias'])): ?>
            <span class="am-badge am-badge-secondary-plain am-radius"><?php echo htmlentities($module_data['address_data']['alias']); ?></span>
        <?php endif; ?>
        <span><?php echo htmlentities($module_data['address_data']['name']); ?></span>
        <span class="am-margin-left-sm"><?php echo htmlentities($module_data['address_data']['tel']); ?></span>
    </div>
    <div class="am-margin-top-xs">
        <span><?php echo htmlentities($module_data['address_data']['province_name']); ?></span>
        <span><?php echo htmlentities($module_data['address_data']['city_name']); ?></span>
        <span><?php echo htmlentities($module_data['address_data']['county_name']); ?></span>
        <span><?php echo htmlentities($module_data['address_data']['address']); ?></span>
        <?php if(isset($module_data['address_data']['lng']) and isset($module_data['address_data']['lat']) and $module_data['address_data']['lng'] != 0 and $module_data['address_data']['lat'] != 0): ?>
            <div class="am-margin-top-xs">
                <button type="button" class="am-btn am-btn-success am-btn-xs am-radius am-icon-map-marker am-padding-xs submit-map-popup" data-lng="<?php echo htmlentities($module_data['address_data']['lng']); ?>" data-lat="<?php echo htmlentities($module_data['address_data']['lat']); ?>"> 查看位置</button>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>