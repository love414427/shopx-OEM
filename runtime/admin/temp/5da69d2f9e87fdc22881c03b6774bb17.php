<?php /*a:5:{s:73:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/appmini/config.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/header.html";i:1663335376;s:78:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/page_loading.html";i:1660808542;s:70:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/appmini/nav.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/admin/view/default/public/footer.html";i:1663334516;}*/ ?>
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
	<!-- second nav start -->
    <?php if(!empty($common_appmini_type) and is_array($common_appmini_type)): ?>
    <ul class="am-nav am-nav-pills table-nav second-nav">
        <?php foreach($common_appmini_type as $nav): ?>
            <li <?php if(isset($nav_type) and $nav_type == $nav['value']): ?>class="am-active"<?php endif; ?> data-type="<?php echo htmlentities($nav['value']); ?>">
                <a href="<?php echo MyUrl('admin/appmini/'.$action_name, ['nav_type'=>$nav['value'], 'view_type'=>$view_type]); ?>"><?php echo htmlentities($nav['name']); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
    <!-- second nav end -->
	<div class="content">
		<!-- 新版本小程序主题提示 -->
	    <div class="am-alert am-alert-warning am-radius">
	    	<a class="am-fr" href="<?php echo htmlentities($store_theme_url); ?>" target="_blank">更多主题下载 <i class="am-icon-external-link"></i></a>
	        <p class="am-text-sm">已发布新版本小程序主题、采用uniapp开发（支持多端小程序+H5），APP也在紧急适配中。</p>
	        <p class="am-margin-top-xs">
	            <a href="https://uniapp.shopxo.net/" target="_blank">查看小程序打包教程 <i class="am-icon-external-link"></i></a>
	        </p>
	    </div>

		<!-- form start -->
		<form class="am-form form-validation" action="<?php echo MyUrl('admin/appmini/save', ['nav_type'=>$nav_type]); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/appmini/config', ['nav_type'=>$nav_type]); ?>">
			<?php switch($nav_type): case "weixin": ?>
					<!-- 微信 -->
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd">
							<h3 class="am-panel-title">基础配置</h3>
						</div>
						<div class="am-panel-bd">
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_weixin_appid']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_weixin_appid']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_weixin_appid']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_weixin_appid']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_weixin_appid']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_weixin_appid']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_weixin_appsecret']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_weixin_appsecret']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_weixin_appsecret']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_weixin_appsecret']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_weixin_appsecret']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_weixin_appsecret']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_weixin_title']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_weixin_title']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_weixin_title']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_weixin_title']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_weixin_title']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_weixin_describe']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_weixin_describe']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_weixin_describe']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_weixin_describe']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_weixin_describe']['value']); ?>"<?php endif; ?> />
							</div>
						</div>
					</div>
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd">
							<h3 class="am-panel-title">扩展插件配置</h3>
						</div>
						<div class="am-panel-bd">
				            <div class="am-form-group">
				                <label><?php echo htmlentities($data['common_app_weixin_liveplayer']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_weixin_liveplayer']['describe']); ?></span></label>
				                <select name="<?php echo htmlentities($data['common_app_weixin_liveplayer']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['common_app_weixin_liveplayer']['error_tips']); ?>" required>
				                    <?php foreach($common_is_text_list as $v): ?>
				                        <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['common_app_weixin_liveplayer']['value']) and $data['common_app_weixin_liveplayer']['value'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
				                    <?php endforeach; ?>
				                </select>
				            </div>
				            <div class="am-form-group">
				                <label><?php echo htmlentities($data['common_app_weixin_liveplayer_ver']['name']); ?></label>
				                <div class="am-alert am-alert-warning">
				                    <p>1. 获取最新组件版本号，默认[ 1.3.0 ]</p>
				                    <p>2. 登录微信小程序平台，左侧导航[ 直播 ]，申请直播权限后等待审核通过方可使用</p>
				                    <p>3. 点击左侧导航[ 小程序直播->接入说明 ]，找到[ 使用方法说明->1. 【直播组件】如何引入 ]，json 代码串[ plugins->live-player-plugin ]参数下的[ version ]的值填入</p>
				                    <a href="https://developers.weixin.qq.com/miniprogram/dev/framework/liveplayer/live-player-plugin.html" target="_blank">去获取组件版本号 <i class="am-icon-external-link"></i></a>
				                </div>
				                <input type="text" name="<?php echo htmlentities($data['common_app_weixin_liveplayer_ver']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_weixin_liveplayer_ver']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_weixin_liveplayer_ver']['error_tips']); ?>" class="am-radius am-margin-top-xs" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_weixin_liveplayer_ver']['value']); ?>"<?php endif; ?> />
				            </div>
						</div>
					</div>
				<?php break; case "alipay": ?>
					<!-- 支付宝 -->
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd">
							<h3 class="am-panel-title">基础配置</h3>
						</div>
						<div class="am-panel-bd">
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_alipay_appid']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_alipay_appid']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_alipay_appid']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_alipay_appid']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_alipay_appid']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_alipay_rsa_public']['name']); ?></label>
								<textarea rows="3" name="<?php echo htmlentities($data['common_app_mini_alipay_rsa_public']['only_tag']); ?>" class="am-radius" placeholder="<?php echo htmlentities($data['common_app_mini_alipay_rsa_public']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_alipay_rsa_public']['error_tips']); ?>"><?php if(!empty($data)): ?><?php echo htmlentities($data['common_app_mini_alipay_rsa_public']['value']); ?><?php endif; ?></textarea>
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_alipay_rsa_private']['name']); ?></label>
								<textarea rows="3" name="<?php echo htmlentities($data['common_app_mini_alipay_rsa_private']['only_tag']); ?>" class="am-radius" placeholder="<?php echo htmlentities($data['common_app_mini_alipay_rsa_private']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_alipay_rsa_private']['error_tips']); ?>"><?php if(!empty($data)): ?><?php echo htmlentities($data['common_app_mini_alipay_rsa_private']['value']); ?><?php endif; ?></textarea>
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_alipay_out_rsa_public']['name']); ?></label>
								<textarea rows="3" name="<?php echo htmlentities($data['common_app_mini_alipay_out_rsa_public']['only_tag']); ?>" class="am-radius" placeholder="<?php echo htmlentities($data['common_app_mini_alipay_out_rsa_public']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_alipay_out_rsa_public']['error_tips']); ?>"><?php if(!empty($data)): ?><?php echo htmlentities($data['common_app_mini_alipay_out_rsa_public']['value']); ?><?php endif; ?></textarea>
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_alipay_title']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_alipay_title']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_alipay_title']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_alipay_title']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_alipay_title']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_alipay_describe']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_alipay_describe']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_alipay_describe']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_alipay_describe']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_alipay_describe']['value']); ?>"<?php endif; ?> />
							</div>
						</div>
					</div>
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd">
							<h3 class="am-panel-title">客服配置</h3>
						</div>
						<div class="am-panel-bd">
							<!-- tips -->
					        <div class="am-alert am-alert-warning" data-am-alert>
					        	<button type="button" class="am-close">&times;</button>
					            <p>
					                <span>PS：如【APP/小程序】中开启（开启在线客服），则以下配置必填 [企业编码] 和 [聊天窗编码]</span>
					                <a href="https://opendocs.alipay.com/mini/component/contact-button" target="_blank" class="am-margin-left-sm">配置教程 <i class="am-icon-external-link"></i></a>
					            </p>
					        </div>
							<div class="am-form-group">
				                <label><?php echo htmlentities($data['common_app_mini_alipay_tnt_inst_id']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_alipay_tnt_inst_id']['describe']); ?></span></label>
				                <input type="text" name="<?php echo htmlentities($data['common_app_mini_alipay_tnt_inst_id']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_alipay_tnt_inst_id']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_alipay_tnt_inst_id']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_alipay_tnt_inst_id']['value']); ?>"<?php endif; ?> />
				            </div>
				            <div class="am-form-group">
				                <label><?php echo htmlentities($data['common_app_mini_alipay_scene']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_alipay_scene']['describe']); ?></span></label>
				                <input type="text" name="<?php echo htmlentities($data['common_app_mini_alipay_scene']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_alipay_scene']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_alipay_scene']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_alipay_scene']['value']); ?>"<?php endif; ?> />
				            </div>
						</div>
					</div>
				<?php break; case "baidu": ?>
					<!-- 百度 -->
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd">
							<h3 class="am-panel-title">基础配置</h3>
						</div>
						<div class="am-panel-bd">
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_baidu_appid']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_baidu_appid']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_baidu_appid']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_baidu_appid']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_baidu_appid']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_baidu_appid']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_baidu_appkey']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_baidu_appkey']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_baidu_appkey']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_baidu_appkey']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_baidu_appkey']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_baidu_appkey']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_baidu_appsecret']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_baidu_appsecret']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_baidu_appsecret']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_baidu_appsecret']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_baidu_appsecret']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_baidu_appsecret']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_baidu_title']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_baidu_title']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_baidu_title']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_baidu_title']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_baidu_title']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_baidu_describe']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_baidu_describe']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_baidu_describe']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_baidu_describe']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_baidu_describe']['value']); ?>"<?php endif; ?> />
							</div>
						</div>
					</div>
				<?php break; case "toutiao": ?>
					<!-- 头条 -->
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd">
							<h3 class="am-panel-title">基础配置</h3>
						</div>
						<div class="am-panel-bd">
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_toutiao_appid']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_toutiao_appid']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_toutiao_appid']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_toutiao_appid']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_toutiao_appid']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_toutiao_appid']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_toutiao_appsecret']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_toutiao_appsecret']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_toutiao_appsecret']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_toutiao_appsecret']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_toutiao_appsecret']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_toutiao_appsecret']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_toutiao_title']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_toutiao_title']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_toutiao_title']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_toutiao_title']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_toutiao_title']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_toutiao_describe']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_toutiao_describe']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_toutiao_describe']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_toutiao_describe']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_toutiao_describe']['value']); ?>"<?php endif; ?> />
							</div>
						</div>
					</div>
				<?php break; case "qq": ?>
					<!-- QQ -->
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd">
							<h3 class="am-panel-title">基础配置</h3>
						</div>
						<div class="am-panel-bd">
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_qq_appid']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_qq_appid']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_qq_appid']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_qq_appid']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_qq_appid']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_qq_appid']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_qq_appsecret']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_qq_appsecret']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_qq_appsecret']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_qq_appsecret']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_qq_appsecret']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_qq_appsecret']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_qq_apptoken']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_qq_apptoken']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_qq_apptoken']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_qq_apptoken']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_qq_apptoken']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_qq_apptoken']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_qq_title']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_qq_title']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_qq_title']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_qq_title']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_qq_title']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_qq_describe']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_qq_describe']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_qq_describe']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_qq_describe']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_qq_describe']['value']); ?>"<?php endif; ?> />
							</div>
						</div>
					</div>
				<?php break; case "kuaishou": ?>
					<!-- 头条 -->
					<div class="am-panel am-panel-default">
						<div class="am-panel-hd">
							<h3 class="am-panel-title">基础配置</h3>
						</div>
						<div class="am-panel-bd">
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_kuaishou_appid']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_kuaishou_appid']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_kuaishou_appid']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_kuaishou_appid']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_kuaishou_appid']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_kuaishou_appid']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_kuaishou_appsecret']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_app_mini_kuaishou_appsecret']['describe']); ?></span></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_kuaishou_appsecret']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_kuaishou_appsecret']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_kuaishou_appsecret']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_kuaishou_appsecret']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_kuaishou_title']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_kuaishou_title']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_kuaishou_title']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_kuaishou_title']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_kuaishou_title']['value']); ?>"<?php endif; ?> />
							</div>
							<div class="am-form-group">
								<label><?php echo htmlentities($data['common_app_mini_kuaishou_describe']['name']); ?></label>
								<input type="text" name="<?php echo htmlentities($data['common_app_mini_kuaishou_describe']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_app_mini_kuaishou_describe']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_app_mini_kuaishou_describe']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_app_mini_kuaishou_describe']['value']); ?>"<?php endif; ?> />
							</div>
						</div>
					</div>
				<?php break; default: ?>
					<div class="table-no"><i class="am-icon-warning"></i> <?php echo htmlentities($nav_type); ?>无配置信息</div>
			<?php endswitch; ?>
			<div class="am-form-group am-form-group-refreshing am-margin-top-lg am-padding-left-0">
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