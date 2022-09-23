<?php /*a:6:{s:88:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/goodsparamstemplate/save_info.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/header.html";i:1663335376;s:78:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/page_loading.html";i:1660808542;s:90:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/goodsparamstemplate/tips.html";i:1660808542;s:91:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/goodsparamstemplate/table.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/footer.html";i:1663334516;}*/ ?>
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

<!-- right content start  -->
<div class="content-right">
	<div class="content">
		<!-- form start -->
		<form class="am-form form-validation" action="<?php echo MyUrl('admin/goodsparamstemplate/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/goodsparamstemplate/index', $params); ?>" enctype="multipart/form-data">
			<legend>
				<span class="am-text-default">商品参数<?php if(empty($data['id'])): ?>添加<?php else: ?>编辑<?php endif; ?></span>
				<a href="<?php echo MyUrl('admin/goodsparamstemplate/index', $params); ?>" class="am-fr am-text-sm am-margin-top-sm am-icon-mail-reply"> 返回</a>
			</legend>
			<div class="am-form-group">
				<label>名称</label>
				<input type="text" name="name" placeholder="名称" minlength="2" maxlength="30" data-validation-message="名称格式 2~30 个字符" class="am-radius" <?php if(!empty($data['name'])): ?> value="<?php echo htmlentities($data['name']); ?>"<?php endif; ?> required />
			</div>

			<div class="am-margin-top-lg">
				<label class="block">参数配置</label>
				<div class="am-alert am-alert-warning am-radius" data-am-alert>
    <button type="button" class="am-close">&times;</button>
    <p>1. 展示范围</p>
    <div class="am-padding-left-sm">
        <p>1.1 全部（在商品基础信息和详情参数下都展示）</p>
        <p>1.2 详情（仅在商品详情参数下都展示）</p>
        <p>1.3 基础（仅在商品基础信息下都展示）</p>
    </div>
    <p>2. 快捷操作将会清除原来的数据、重载页面便可恢复原来的数据（仅保存商品后生效）</p>
</div>
				<!-- 通过配置生成商品参数 -->
				<div class="am-dropdown" id="parameters-quick-container" data-am-dropdown>
					<span class="business-operations-submit am-dropdown-toggle parameters-quick-add">
						<span>快捷操作</span>
						<i class="am-icon-caret-down"></i>
					</span>
					<div class="am-dropdown-content parameters-quick-config">
						<textarea rows="5" placeholder="粘贴商品参数配置信息"></textarea>
						<button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block am-margin-top-sm">确认</button>
					</div>
				</div>
				<!-- 复制操作 -->
				<span class="business-operations-submit am-margin-left-sm parameters-quick-copy">
					<i class="am-icon-copy"></i>
					<span>复制配置</span>
				</span>
			    <!-- 清空操作 -->
			    <span class="business-operations-submit am-margin-left-sm parameters-quick-remove">
					<i class="am-icon-times"></i>
					<span>清空参数</span>
				</span>
				<!-- 复制弹窗、仅复制操作失败的时候显示让用户手动复制 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="parameters-quick-copy-modal">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            <a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <div class="am-padding-sm">
                <textarea rows="5" placeholder="商品参数配置信息"></textarea>
            </div>
        </div>
    </div>
</div>

<!--表列表数据 -->
<div class="parameters-container am-margin-top-sm">
    <table class="am-table am-table-bordered am-table-centered am-table-striped am-table-hover am-margin-bottom-sm parameters-table table-thead-beautify am-margin-bottom-0">
        <thead>
            <tr>
                <th class="spec-quick-th-title">展示范围</th>
                <th class="spec-quick-th-title">参数名称</th>
                <th class="spec-quick-th-value">参数值</th>
                <th class="spec-quick-th-value">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($parameters) and is_array($parameters)): foreach($parameters as $pv): ?>
                    <tr>
                        <td class="am-text-middle">
                            <select name="parameters_type[]" class="am-radius chosen-select" data-validation-message="请选择商品参数展示类型">
                                <?php if(!empty($common_goods_parameters_type_list)): foreach($common_goods_parameters_type_list as $v): ?>
                                        <option value="<?php echo htmlentities($v['value']); ?>" <?php if($pv['type'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </td>
                        <td class="am-text-middle">
                            <input type="text" name="parameters_name[]" placeholder="参数名称" value="<?php echo htmlentities($pv['name']); ?>" data-validation-message="请填写参数名称" maxlength="160" required />
                        </td>
                        <td class="am-text-middle">
                            <input type="text" name="parameters_value[]" placeholder="参数值" value="<?php echo htmlentities($pv['value']); ?>" maxlength="160" data-validation-message="请填写参数值" />
                        </td>
                        <td class="am-text-middle">
                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-sm line-move" data-type="top">上移</a>
                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-sm line-move" data-type="bottom">下移</a>
                            <a href="javascript:;" class="am-text-xs am-text-danger line-remove">移除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<div class="am-margin-top-sm">
    <span class="business-operations-submit parameters-line-add">+添加一行</span>
</div>
			</div>

			<div class="am-form-group">
			    <label class="block">是否启用</label>
			    <input name="is_enable" value="1" type="checkbox" data-off-text="否" data-on-text="是" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_enable']) and $data['is_enable'] == 1) or !isset($data['is_enable'])): ?>checked="true"<?php endif; ?> />
			</div>

			<!-- 插件扩展数据 start -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_admin_goods_params_template_save</span>
                </div>
            <?php endif; if(!empty($plugins_view_admin_goods_params_template_save_data) and is_array($plugins_view_admin_goods_params_template_save_data)): ?>
				<div class="am-alert am-alert-secondary">
					<label class="am-text-sm am-text-warning">该区域为插件扩展数据，请按照插件文档填写相应的值</label>
					<div>
						<?php foreach($plugins_view_admin_brand_save_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		                        <?php echo $hook; ?>
		                    <?php endif; ?>
		                <?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
			<!-- 插件扩展数据 end -->

			<div class="am-form-group am-form-group-refreshing am-margin-top-lg am-padding-left-0">
				<input type="hidden" name="id" <?php if(!empty($data['id'])): ?> value="<?php echo htmlentities($data['id']); ?>"<?php endif; ?> />
				<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
			</div>
		</form>
        <!-- form end -->
	</div>
</div>
<!-- right content end  -->
		
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