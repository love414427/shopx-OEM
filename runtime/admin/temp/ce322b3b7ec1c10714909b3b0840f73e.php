<?php /*a:6:{s:80:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/warehousegoods/detail.html";i:1660808542;s:79:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/module/detail.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/header.html";i:1663335376;s:78:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/page_loading.html";i:1660808542;s:74:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/not_data.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/footer.html";i:1663334516;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo MyConfig('shopxo.default_charset', 'utf-8'); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($public_host); ?>favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/assets/css/amazeui.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <!-- ckplayer播放器 -->
    <?php if(isset($is_load_ckplayer) and $is_load_ckplayer == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/ckplayer/css/ckplayer.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 可视化拖拽 -->
    <?php if(isset($is_load_layout) and $is_load_layout == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.admin.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/iconfontmenu.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <!-- 插件 -->
    <?php if(!empty($plugins_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 页面样式 -->
	<?php if(!empty($module_css)): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<?php endif; ?>

	<!-- css钩子 -->
    <?php if(!empty($plugins_admin_css_data) and is_array($plugins_admin_css_data)): foreach($plugins_admin_css_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
                    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                <?php else: ?>
                    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                <?php endif; elseif(is_array($hook)): foreach($hook as $hook_css): if(!empty($hook_css) and is_string($hook_css)): if(substr($hook_css, 0, 4) == 'http'): ?>
                            <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                        <?php else: ?>
                            <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- 公共header内钩子 -->
	<?php if(!empty($plugins_admin_common_header_data) and is_array($plugins_admin_common_header_data)): foreach($plugins_admin_common_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>

    <!-- 主题配色 -->
    <?php if(isset($admin_color_value) and $admin_color_value == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/color/black.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>
</head>
<script type="text/javascript">
    var __system_type__ = '<?php echo htmlentities($system_type); ?>';
    var __root__ = '<?php echo htmlentities($public_host); ?>';
    var __my_http__ = '<?php echo htmlentities($my_http); ?>';
    var __my_url__ = '<?php echo htmlentities($my_url); ?>';
    var __my_public_url__ = '<?php echo htmlentities($my_public_url); ?>';
    var __public__ = '<?php echo htmlentities($public_host); ?>';
    var __default_theme__ = '<?php echo htmlentities($default_theme); ?>';
	var __attachment_host__ = '<?php echo htmlentities($attachment_host); ?>';
    var __seo_url_suffix__ = '<?php echo MyC("home_seo_url_html_suffix", "html", true); ?>';
    var __currency_symbol__ = '<?php echo htmlentities($currency_symbol); ?>';
    var __is_mobile__ = '<?php if(IsMobile()): ?>1<?php else: ?>0<?php endif; ?>';
    var __env_max_input_vars_count__ = '<?php echo htmlentities($env_max_input_vars_count); ?>';
    var __map_view_url__ = '<?php echo MyUrl("admin/map/index"); ?>';
    var __load_map_type__ = '<?php echo htmlentities($load_map_type); ?>';
</script>
<body>
<?php if($module_name.$controller_name.$action_name != 'adminindexindex'): ?>
    <div class="am-modal am-page-loading">
    <span class="am-icon-spinner am-icon-pulse am-icon-lg"></span>
</div>
<?php endif; ?>

<!-- 公共顶部钩子 -->
<?php if(!empty($plugins_admin_view_common_top_data) and is_array($plugins_admin_view_common_top_data) and (!isset($is_header) or $is_header == 1)): foreach($plugins_admin_view_common_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			<?php echo $hook; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>

<!-- content top hook -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_detail_top); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_detail_top, ['hook_name'=>$hook_name_detail_top, 'is_backend'=>true]);
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

<!-- content start  -->
<div class="am-padding-sm">
    <!-- content inside top hook -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span><?php echo htmlentities($hook_name_detail_inside_top); ?></span>
        </div>
    <?php endif; 
        $hook_data = MyEventTrigger($hook_name_detail_inside_top, ['hook_name'=>$hook_name_detail_inside_top, 'is_backend'=>true]);
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

    <!-- data -->
    <?php if(!empty($data)): ?>
        
    <!-- 父级内容 -->
    
            <?php if(!empty($form_table) and !empty($form_table['form']) and is_array($form_table['form'])): if(!empty($form_table['base']) and !empty($form_table['base']['detail_title'])): ?>
                    <div class="am-panel am-panel-default">
                    <div class="am-panel-hd"><?php echo htmlentities($form_table['base']['detail_title']); ?></div>
                    <div class="am-panel-bd">
                <?php endif; ?>
                <dl class="dl-content">
                    <?php foreach($form_table['form'] as $t): if(isset($t['label']) and isset($t['view_type']) and in_array($t['view_type'], ['field', 'module', 'status']) and (!isset($t['is_detail']) or $t['is_detail'] == 1)): ?>
                            <dt><strong><?php echo htmlentities($t['label']); ?></strong></dt>
                            <dd>
                                <?php switch($t['view_type']): case "field": ?>
                                        <!-- 前后固定拼接的值 前面 -->
                                        <?php if(isset($t['view_join_first'])): ?>
                                            <span><?php echo htmlentities($t['view_join_first']); ?></span>
                                        <?php endif; ?>

                                        <!-- 如果字段为数组则处理多个字段拼接数据 -->
                                        <?php if(is_array($t['view_key'])): foreach($t['view_key'] as $fk=>$fv): if(isset($data[$fv])): ?>
                                                    <?php echo htmlentities($data[$fv]); ?>
                                                    <!-- 多个字段拼接数据的的拼接字符 -->
                                                    <?php if(isset($t['view_key_join']) and $fk < count($t['view_key'])-1): ?>
                                                        <?php echo $t['view_key_join']; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; else: ?>
                                            <!-- 是否存在数据 key -->
                                            <?php if(isset($data[$t['view_key']])): ?>
                                                <!-- 是否指定数据转换 -->
                                                <?php if(!empty($t['view_data']) and is_array($t['view_data'])): ?>
                                                    <!-- 不存在数组中则不显示 -->
                                                    <?php if(isset($t['view_data'][$data[$t['view_key']]])): ?>
                                                        <!-- 是否指定二维数组key取值 -->
                                                        <?php if(!empty($t['view_data_key'])): if(isset($t['view_data'][$data[$t['view_key']]][$t['view_data_key']])): ?>
                                                                <?php echo htmlentities($t['view_data'][$data[$t['view_key']]][$t['view_data_key']]); ?>
                                                            <?php endif; else: ?>
                                                            <?php echo htmlentities($t['view_data'][$data[$t['view_key']]]); ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                <!-- 直接展示数据 -->
                                                <?php else: ?>
                                                    <?php echo $data[$t['view_key']]; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <!-- 前后固定拼接的值 后面 -->
                                        <?php if(isset($t['view_join_last'])): ?>
                                            <span><?php echo htmlentities($t['view_join_last']); ?></span>
                                        <?php endif; break; case "module": ?>
                                        <!-- 从模块加载自定义模块数据 -->
                                        <?php echo ModuleInclude($t['view_key'], $data, ['form_request_type'=>'detail']); break; case "status": ?>
                                        <!-- 数据状态操作按钮组件 -->
                                        <?php if(!empty($t['key_field']) and !empty($t['post_url'])): ?>
                                            <a href="javascript:;"
                                                class="am-icon-btn am-icon-check submit-state <?php if($data[$t['view_key']] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>"
                                                data-url="<?php echo htmlentities($t['post_url']); ?>"
                                                data-id="<?php if(isset($data[$t['key_field']])): ?><?php echo htmlentities($data[$t['key_field']]); ?><?php endif; ?>"
                                                data-state="<?php echo htmlentities($data[$t['view_key']]); ?>"
                                                data-field="<?php echo htmlentities($t['view_key']); ?>"
                                                data-is-update-status="<?php if(isset($t['is_form_su'])): ?><?php echo htmlentities($t['is_form_su']); else: ?>0<?php endif; ?>"
                                            ></a>
                                        <?php endif; break; ?>
                                <?php endswitch; ?>

                                <!-- 列表格子钩子 -->
                                <?php if(!empty($t['unique_key']) and $t['view_type'] != 'operate'): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                        <div class="plugins-tag">
                                            <span><?php echo htmlentities($hook_name_form_grid); ?>_<?php echo htmlentities($t['unique_key']); ?></span>
                                        </div>
                                    <?php endif; 
                                        $hook_data = MyEventTrigger($hook_name_form_grid.'_'.$t['unique_key'], [
                                            'hook_name'     => $hook_name_form_grid.'_'.$t['unique_key'],
                                            'is_backend'    => true,
                                            'id'            => isset($data[$form_table['base']['key_field']]) ? $data[$form_table['base']['key_field']] : 0,
                                            'data'          => $data,
                                        ]);
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
                                <?php endif; ?>
                            </dd>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </dl>
                <?php if(!empty($form_table['base']) and !empty($form_table['base']['detail_title'])): ?>
                    </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        
    
    <!-- 规格 -->
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">规格库存</div>
        <div class="am-panel-bd">
            <?php if(!empty($spec)): ?>
                <table class="am-table am-table-striped am-table-hover form-inventory-container">
                    <thead>
                        <tr>
                            <th>规格</th>
                            <th>库存</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($spec as $v): ?>
                            <tr>
                                <td><?php echo htmlentities($v['name']); ?></td>
                                <td>
                                <?php if(empty($v['inventory'])): ?>
                                    <span class="am-text-grey">无</span>
                                <?php else: ?>
                                    <?php echo htmlentities($v['inventory']); ?>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
            <?php endif; ?>
        </div>
    </div>

    <?php else: ?>
        
            <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
        
    <?php endif; ?>

    <!-- content inside top hook -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span><?php echo htmlentities($hook_name_detail_inside_bottom); ?></span>
        </div>
    <?php endif; 
        $hook_data = MyEventTrigger($hook_name_detail_inside_bottom, ['hook_name'=>$hook_name_detail_inside_bottom, 'is_backend'=>true]);
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
</div>
<!-- content end  -->

<!-- content bottom hook -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_detail_bottom); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_detail_bottom, ['hook_name'=>$hook_name_detail_bottom, 'is_backend'=>true]);
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
        
<!-- footer start -->
<!-- 应用商店账户绑定 -->
<div class="am-popup popup-not-title" id="store-accounts-popup">
    <div class="am-popup-inner">
        <?php if(empty($site_store_info) or empty($site_store_info['base']) or !isset($site_store_info['base']['is_user_not_cloae_accounts_popup']) or $site_store_info['base']['is_user_not_cloae_accounts_popup'] == 0): ?>
            <span data-am-modal-close class="am-close am-close-alt am-icon-times"></span>
        <?php endif; ?>
        <div class="am-popup-bd">
            <!-- form start -->
            <form class="am-form form-validation-store-accounts view-save" action="<?php echo MyUrl('admin/index/storeaccountsbind'); ?>" method="POST" request-type="ajax-reload">
                <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                    <label>账号<span class="am-form-group-label-tips-must">必填</span></label>
                    <input type="text" name="common_store_accounts" placeholder="用户名/手机/邮箱" data-validation-message="账号格式1~30个字符" class="am-radius" value="" autocomplete="off" required />
                </div>
                <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                    <label>密码<span class="am-form-group-label-tips-must">必填</span></label>
                    <input type="password" name="common_store_password" placeholder="登录密码" data-validation-message="登录密码格式6~30个字符" class="am-radius" value="" autocomplete="off" required />
                </div>
                
                <div class="am-form-group am-form-group-refreshing am-margin-top-sm">
                    <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'绑定中...'}">绑定</button>
                </div>

            </form>
            <!-- form end -->
        </div>
    </div>
</div>

<!-- 插件包更新弹窗 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="package-upgrade-modal">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            <a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <p class="am-margin-bottom-sm"><strong class="upgrade-name">...</strong></p>
            <div class="am-scrollable-vertical am-text-left"></div>
            <div class="am-text-left am-nbfc am-margin-top-sm">
                <span class="am-icon-calendar-check-o upgrade-date"> ...</span>
                <span class="am-icon-vimeo am-margin-left-sm upgrade-version"> ...</span>
                <div class="am-fr">
                    <button type="button" class="am-btn am-btn-default am-radius am-btn-xs" data-am-modal-close>取消</button>
                    <button type="button" class="am-btn am-btn-success am-radius am-btn-xs am-margin-left-sm package-upgrade-submit" data-type="" data-value="" data-url="<?php echo MyUrl('admin/packageupgrade/upgrade'); ?>">更新</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- commom html -->
<textarea id="upload-editor-view" data-url="<?php if(isset($is_load_upload_editor) and $is_load_upload_editor == 1): ?><?php echo MyUrl('admin/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?><?php endif; ?>" style="display: none;"></textarea>

<!-- 公共底部钩子 -->
<?php if(!empty($plugins_admin_view_common_bottom_data) and is_array($plugins_admin_view_common_bottom_data)): foreach($plugins_admin_view_common_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jquery/jquery-2.2.4.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/assets/js/amazeui.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- jshash -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jshash/md5-min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- echarts 图表 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/echarts.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/macarons.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ueditor 编辑器 -->
<script type='text/javascript' src="<?php echo htmlentities($my_public_url); ?>static/common/lib/ueditor/ueditor.config.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/ueditor.all.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/lang/zh-cn/zh-cn.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 颜色选择器 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/colorpicker/jquery.colorpicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖拽排序插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/dragsort/jquery.dragsort-0.5.2.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 动画数数 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/animation-count-to/animation.count.to.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-dialog/amazeui.dialog.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 日期组件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/My97DatePicker/WdatePicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖动 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/tdrag/tdrag.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 复制插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/clipboard/clipboard.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ckplayer播放器 -->
<?php if(isset($is_load_ckplayer) and $is_load_ckplayer == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ckplayer/js/ckplayer.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- map -->
<?php if(isset($is_load_map_api) and $is_load_map_api == 1 and !empty($load_map_type)): switch($load_map_type): case "baidu": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://api.map.baidu.com/api?v=2.0&ak=<?php echo MyC('common_baidu_map_ak'); ?>"></script>
        <?php break; case "amap": ?>
            <script type="text/javascript">
                window._AMapSecurityConfig = {
                    securityJsCode: '<?php echo MyC("common_amap_map_safety_ak"); ?>',
                }
            </script>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://webapi.amap.com/maps?v=2.0&key=<?php echo MyC('common_amap_map_ak'); ?>"></script>
        <?php break; case "tencent": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://map.qq.com/api/js?v=2.exp&key=<?php echo MyC('common_tencent_map_ak'); ?>"></script>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://map.qq.com/api/gljs?libraries=service&v=1.exp&key=<?php echo MyC('common_tencent_map_ak'); ?>"></script>
        <?php break; case "tianditu": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://api.tianditu.gov.cn/api?v=4.0&tk=<?php echo MyC('common_tianditu_map_ak'); ?>"></script>
        <?php break; ?>
    <?php endswitch; ?>
<?php endif; ?>

<!-- 隐藏编辑器初始化 -->
<script type="text/javascript">
    var upload_editor = UE.getEditor("upload-editor-view", {
        isShow: false,
        focus: false,
        enableAutoSave: false,
        autoSyncData: false,
        autoFloatEnabled:false,
        wordCount: false,
        sourceEditor: null,
        scaleEnabled:true,
        toolbars: [["insertimage", "insertvideo", "attachment"]]
    });
</script>

<!-- 项目公共 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/layout.admin.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 应用插件公共js -->
<?php if(!empty($plugins_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 当前控制器js -->
<?php if(!empty($module_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- js钩子 -->
<?php if(!empty($plugins_admin_js_data) and is_array($plugins_admin_js_data)): foreach($plugins_admin_js_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
                <script type='text/javascript' src="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
            <?php else: ?>
                <script type='text/javascript' src="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
            <?php endif; elseif(is_array($hook)): foreach($hook as $hook_js): if(!empty($hook_js) and is_string($hook_js)): if(substr($hook_js, 0, 4) == 'http'): ?>
                        <script type='text/javascript' src="<?php echo htmlentities($hook_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
                    <?php else: ?>
                        <script type='text/javascript' src="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- 公共页面底部钩子 -->
<?php if(!empty($plugins_admin_common_page_bottom_data) and is_array($plugins_admin_common_page_bottom_data)): foreach($plugins_admin_common_page_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<script type="text/javascript">
$(function()
{
    // 绑定商店帐号
    <?php if(!empty($site_store_info) and !empty($site_store_info['base']) and isset($site_store_info['base']['is_user_force_bind_accounts']) and $site_store_info['base']['is_user_force_bind_accounts'] == 1 and !in_array($module_name.$controller_name.$action_name, ['adminindexindex', 'adminadminlogininfo']) and empty($site_store_info['user'])): ?>
        StoreAccountsPopupOpen();
    <?php endif; ?>
});
</script>
<!-- footer end -->

<!-- page buttom -->
