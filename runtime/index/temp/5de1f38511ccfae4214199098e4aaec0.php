<?php /*a:16:{s:79:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/usergoodsfavor/index.html";i:1660808542;s:82:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/module/user_form.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header.html";i:1660808542;s:80:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header_top_nav.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/nav_search.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header_nav.html";i:1660808542;s:80:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/goods_category.html";i:1660808542;s:74:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/not_data.html";i:1660808542;s:75:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/user_menu.html";i:1660808542;s:89:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/module/form_operate_top.html";i:1660808542;s:83:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/module/form_table.html";i:1660808542;s:92:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/module/form_operate_bottom.html";i:1660808542;s:91:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/module/form_fields_select.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/footer.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/footer_nav.html";i:1663332220;s:71:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/quick.html";i:1660808542;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo MyConfig('shopxo.default_charset', 'utf-8'); ?>" />
	<title><?php echo htmlentities($home_seo_site_title); ?></title>
	<meta name="keywords" content="<?php echo htmlentities($home_seo_site_keywords); ?>" />
	<meta name="description" content="<?php echo htmlentities($home_seo_site_description); ?>" />
	<meta name="generator" content="<?php echo htmlentities($my_url); ?>" />
	<meta name="application-name" content="<?php echo htmlentities($home_seo_site_title); ?>" />
	<meta name="msapplication-tooltip" content="<?php echo htmlentities($home_seo_site_title); ?>" />
	<meta name="msapplication-starturl" content="<?php echo htmlentities($my_url); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($public_host); ?>favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php echo MyC('home_site_name'); ?>">
    <link rel="apple-touch-icon" href="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_square')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_square')); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/assets/css/amazeui.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/cropper/cropper.min.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/index/<?php echo htmlentities($default_theme); ?>/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <!-- ckplayer播放器 -->
	<?php if(isset($is_load_ckplayer) and $is_load_ckplayer == 1): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/ckplayer/css/ckplayer.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<?php endif; ?>

	<!-- 插件 -->
    <?php if(!empty($plugins_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 可视化拖拽 -->
    <?php if(isset($is_load_layout) and $is_load_layout == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.admin.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>
    <!-- 页面样式 -->
	<?php if(!empty($module_css)): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<?php endif; ?>

	<!-- css钩子 -->
    <?php if(!empty($plugins_css_data) and is_array($plugins_css_data)): foreach($plugins_css_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
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

	<script type="text/javascript">
		var __system_type__ = '<?php echo htmlentities($system_type); ?>';
		var __root__ = '<?php echo htmlentities($public_host); ?>';
		var __my_http__ = '<?php echo htmlentities($my_http); ?>';
		var __my_url__ = '<?php echo htmlentities($my_url); ?>';
        var __my_public_url__ = '<?php echo htmlentities($my_public_url); ?>';
		var __public__ = '<?php echo htmlentities($public_host); ?>';
		var __default_theme__ = '<?php echo htmlentities($default_theme); ?>';
		var __modal_login_url__ = '<?php echo MyUrl("index/user/modallogininfo"); ?>';
		var __attachment_host__ = '<?php echo htmlentities($attachment_host); ?>';
        var __seo_url_suffix__ = '<?php echo MyC("home_seo_url_html_suffix", "html", true); ?>';
		var __user_id__ = <?php if(empty($user['id'])): ?>0<?php else: ?><?php echo htmlentities($user['id']); ?><?php endif; ?>;
        var __currency_symbol__ = '<?php echo htmlentities($currency_symbol); ?>';
        var __is_mobile__ = '<?php if(IsMobile()): ?>1<?php else: ?>0<?php endif; ?>';
        var __env_max_input_vars_count__ = '<?php echo htmlentities($env_max_input_vars_count); ?>';
        var __map_view_url__ = '<?php echo MyUrl("index/map/index"); ?>';
        var __load_map_type__ = '<?php echo htmlentities($load_map_type); ?>';
	</script>
	
	<!-- 公共header内钩子 -->
	<?php if(!empty($plugins_common_header_data) and is_array($plugins_common_header_data)): foreach($plugins_common_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
</head>
<body <?php if(in_array(MiniAppEnv(), MyConfig('shopxo.mini_app_type_list'))): ?>class="mini-app-env"<?php endif; ?>>
<!-- css钩子 -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_header) or $is_header == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
	    <div class="plugins-tag">
	        <span>plugins_css</span>
	    </div>
	<?php endif; ?>
<?php endif; ?>

<!-- 公共header内钩子 -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_header) or $is_header == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		<div class="plugins-tag">
			<span>plugins_common_header</span>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- 公共顶部钩子 -->
<?php if(!isset($page_pure) or $page_pure != 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		<div class="plugins-tag">
			<span>plugins_view_common_top</span>
		</div>
	<?php endif; if(!empty($plugins_view_common_top_data) and is_array($plugins_view_common_top_data)): foreach($plugins_view_common_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>

<!-- header公共顶部钩子 -->
<?php if(!isset($is_footer) or $is_footer == 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		<div class="plugins-tag">
			<span>plugins_view_common_top_header</span>
		</div>
	<?php endif; if(!empty($plugins_view_common_top_header_data) and is_array($plugins_view_common_top_header_data)): foreach($plugins_view_common_top_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>

<!-- header top nav -->
<!-- 顶部导航条 start -->
<div class="header-top">
    <div class="am-container header">
        <ul class="top-nav-left">
            <div class="top-nav-items">
                <div class="menu-hd">
                    <!-- 公共顶部小导航钩子-左侧前面 -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_header_navigation_top_left_begin</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_header_navigation_top_left_begin_data) and is_array($plugins_view_header_navigation_top_left_begin_data)): foreach($plugins_view_header_navigation_top_left_begin_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; if(empty($user)): ?>
                        <em>您好，欢迎来到</em>
                        <em><?php echo MyC('home_site_name'); ?></em>
                        <?php if(!empty($home_user_login_type)): ?>
                            [<a href="<?php echo MyUrl('index/user/logininfo'); ?>">登录</a>]
                        <?php endif; if(!empty($home_user_reg_type)): ?>
                            [<a href="<?php echo MyUrl('index/user/reginfo'); ?>">注册</a>]
                        <?php endif; else: ?>
                        <em>您好</em>
                        <?php if(!empty($user['icon'])): ?>
                            <img src="<?php echo htmlentities($user['icon']); ?>" class="common-user-icon" <?php if(!empty($user['icon_title'])): ?>title="<?php echo htmlentities($user['icon_title']); ?>"<?php endif; ?> />
                        <?php endif; ?>
                        <em><?php echo htmlentities($user['user_name_view']); ?>，欢迎来到</em>
                        <em><?php echo MyC('home_site_name'); ?></em>
                        [<a href="<?php echo MyUrl('index/user/logout'); ?>">退出</a>]
                    <?php endif; ?>

                    <!-- 公共顶部小导航钩子-左侧后面 -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_header_navigation_top_left_end</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_header_navigation_top_left_end_data) and is_array($plugins_view_header_navigation_top_left_end_data)): foreach($plugins_view_header_navigation_top_left_end_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </ul>

        <ul class="top-nav-right">
            <!-- 公共顶部小导航钩子-右侧前面 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_header_navigation_top_right_begin</span>
                </div>
            <?php endif; if(!empty($plugins_view_header_navigation_top_right_begin_data) and is_array($plugins_view_header_navigation_top_right_begin_data)): foreach($plugins_view_header_navigation_top_right_begin_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- 非首页则展示首页入口 -->
            <?php if(MyC('home_header_top_is_home', 0) == 1 and $module_name.$controller_name.$action_name != 'indexindexindex'): ?>
                <div class="top-nav-items top-nav-items-home">
                    <div class="menu-hd ">
                        <a href="<?php echo htmlentities($home_url); ?>" target="_top">
                            <i class="am-icon-fw am-icon-home"></i>
                            <span>商城首页</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <!-- 右侧导航 -->
            <?php if(!empty($common_nav_top_right_list) and is_array($common_nav_top_right_list)): foreach($common_nav_top_right_list as $nav): if(empty($nav['items'])): ?>
                        <div class="top-nav-items <?php if(!empty($nav['type'])): ?>top-nav-items-<?php echo htmlentities($nav['type']); ?><?php endif; ?>">
                            <div class="menu-hd <?php if(isset($nav['is_login']) and $nav['is_login'] == 1 and empty($user)): ?>login-event<?php endif; ?>">
                                <a href="<?php if(empty($user)): ?>javascript:;<?php else: ?><?php echo htmlentities($nav['url']); ?><?php endif; ?>" target="_top">
                                    <i class="am-icon-fw <?php echo htmlentities($nav['icon']); ?>"></i>
                                    <span><?php echo htmlentities($nav['name']); ?></span>
                                    <?php if(isset($nav['badge']) and $nav['badge'] > -1): if($nav['badge'] > 0): ?>
                                            <strong class="am-badge am-badge-danger am-round <?php if(isset($nav['type']) and $nav['type'] == 'cart'): ?>common-cart-total<?php endif; ?>"><?php echo htmlentities($nav['badge']); ?></strong>
                                        <?php else: ?>
                                            <strong class="am-round <?php if(isset($nav['type']) and $nav['type'] == 'cart'): ?>common-cart-total<?php endif; ?>"><?php echo htmlentities($nav['badge']); ?></strong>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="top-nav-items <?php if(!empty($nav['type'])): ?>top-nav-items-<?php echo htmlentities($nav['type']); ?><?php endif; ?>">
                            <div class="am-dropdown menu-hd" data-am-dropdown>
                                <a class="am-dropdown-toggle" href="javascript:;" target="_top" data-am-dropdown-toggle>
                                    <i class="am-icon-fw <?php echo htmlentities($nav['icon']); ?>"></i>
                                    <span><?php echo htmlentities($nav['name']); ?></span>
                                    <i class="am-icon-angle-down"></i>
                                </a>
                                <ul class="am-dropdown-content">
                                    <?php foreach($nav['items'] as $navs): ?>
                                        <li class="<?php if(((isset($nav['is_login']) and $nav['is_login'] == 1) or (isset($navs['is_login']) and $navs['is_login'] == 1)) and empty($user)): ?>login-event<?php endif; ?>">
                                            <a href="<?php if(((isset($nav['is_login']) and $nav['is_login'] == 1) or (isset($navs['is_login']) and $navs['is_login'] == 1)) and empty($user)): ?>javascript:;<?php else: ?><?php echo htmlentities($navs['url']); ?><?php endif; ?>"><?php echo htmlentities($navs['name']); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- 公共顶部小导航钩子-右侧后面 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_header_navigation_top_right_end</span>
                </div>
            <?php endif; if(!empty($plugins_view_header_navigation_top_right_end_data) and is_array($plugins_view_header_navigation_top_right_end_data)): foreach($plugins_view_header_navigation_top_right_end_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
<!-- 顶部导航条 end -->

<!-- search -->
<!-- 搜索框 start -->
<div class="nav-search white am-hide-sm-only">
    <div class="am-container">
        <div class="logo am-show-sm-only">
            <a href="<?php echo htmlentities($home_url); ?>">
                <img src="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_wap')); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
            </a>
        </div>
        <div class="logo-big am-hide-sm-only">
            <a href="<?php echo htmlentities($home_url); ?>">
                <img src="<?php echo AttachmentPathViewHandle(MyC('home_site_logo')); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
            </a>
        </div>

        <!-- logo右侧 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_common_logo_right</span>
            </div>
        <?php endif; if(!empty($plugins_view_common_logo_right_data) and is_array($plugins_view_common_logo_right_data)): foreach($plugins_view_common_search_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="search-bar">
            <!-- 公共搜索框内左侧 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_search_inside_left</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_search_inside_left_data) and is_array($plugins_view_common_search_inside_left_data)): foreach($plugins_view_common_search_inside_left_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- 搜索框 -->
            <form action="<?php echo MyUrl('index/search/index'); ?>" method="POST">
                <div class="search-group">
                    <input id="search-input" name="wd" type="text" placeholder="其实搜索很简单^_^ !" value="<?php if(!empty($params['wd'])): ?><?php echo htmlentities($params['wd']); ?><?php endif; ?>" autocomplete="off" />
                    <button type="submit" id="ai-topsearch" class="submit am-btn">
                        <i class="am-icon-search"></i>
                        <span>搜索</span>
                    </button>
                </div>
                <?php if(!empty($home_search_keywords)): ?>
                    <ul class="search-hot-keywords">
                        <?php foreach($home_search_keywords as $v): ?>
                            <li><a href="<?php echo MyUrl('index/search/index', ['wd'=>StrToAscii($v)]); ?>" target="_blank"><?php echo htmlentities($v); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </form>

            <!-- 公共搜索框内右侧 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_search_inside_right</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_search_inside_right_data) and is_array($plugins_view_common_search_inside_right_data)): foreach($plugins_view_common_search_inside_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- 公共搜索框右侧 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_common_search_right</span>
            </div>
        <?php endif; if(!empty($plugins_view_common_search_right_data) and is_array($plugins_view_common_search_right_data)): foreach($plugins_view_common_search_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- 搜索框 end -->

<!-- header nav -->
<header class="am-topbar shop-navigation">
    <div class="am-container">
        <!-- 中间导航左侧 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_common_header_nav_left</span>
            </div>
        <?php endif; if(!empty($plugins_view_common_header_nav_left_data) and is_array($plugins_view_common_header_nav_left_data)): foreach($plugins_view_common_header_nav_left_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- 手机端导航伸展按钮 -->
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only switch-submit" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <!-- logo -->
        <h1 class="am-topbar-brand wap-logo am-show-sm-only">
            <a href="<?php echo htmlentities($home_url); ?>">
                <img src="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_wap')); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
            </a>
        </h1>

        <!-- 全部分类 -->
        <a href="<?php echo MyUrl('index/category/index'); ?>" class="am-show-md-only">
            <div class="goods-category-title am-hide-sm-only">
                <span class="all-goods">全部分类</span>
            </div>
        </a>

        <!-- 手机端搜索 -->
        <form class="am-topbar-form am-topbar-left am-form-inline am-show-sm-only navigation-search" role="search" action="<?php echo MyUrl('index/search/index'); ?>" method="POST">
            <div class="am-input-group am-input-group-sm">
                <input type="text" name="wd" class="am-form-field" placeholder="其实搜索很简单^_^ !" value="<?php if(!empty($params['wd'])): ?><?php echo htmlentities($params['wd']); ?><?php endif; ?>" autocomplete="off" />
                <span class="am-input-group-btn">
                    <button class="am-btn am-btn-default" type="submit">
                        <span class="am-icon-search am-icon-xs"></span>
                    </button>
                </span>
            </div>

            <!-- 中间导航搜索内部 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_header_nav_search_inside</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_header_nav_search_inside_data) and is_array($plugins_view_common_header_nav_search_inside_data)): foreach($plugins_view_common_header_nav_search_inside_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </form>

        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
            <!-- 中间导航内容内部顶部 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_header_nav_content_inside_top</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_header_nav_content_inside_top_data) and is_array($plugins_view_common_header_nav_content_inside_top_data)): foreach($plugins_view_common_header_nav_content_inside_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; if(empty($user)): ?>
                <!-- 未登录操作栏 -->
                <div class="navigation-button am-show-sm-only">
                    <?php if(!empty($home_user_login_type)): ?>
                        <a href="<?php echo MyUrl('index/user/logininfo'); ?>" class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</a>
                    <?php endif; if(!empty($home_user_reg_type)): ?>
                        <a href="<?php echo MyUrl('index/user/reginfo'); ?>" class="am-btn am-btn-success am-topbar-btn am-btn-sm">注册</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- 主导航 -->
            <?php if(!empty($nav_header)): ?>
                <ul class="am-nav am-nav-pills am-topbar-nav">
                    <?php foreach($nav_header as $nav): if(empty($nav['items'])): ?>
                            <li>
                                <a href="<?php echo htmlentities($nav['url']); ?>" <?php if($nav['is_new_window_open'] == 1): ?>target="_blank"<?php endif; ?> title="<?php echo htmlentities($nav['name']); ?>" <?php if(isset($nav['active']) and $nav['active'] == 1): ?>class="active"<?php endif; ?>><?php echo htmlentities($nav['name']); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="am-dropdown" data-am-dropdown>
                                <a class="am-dropdown-toggle <?php if(isset($nav['active']) and $nav['active'] == 1): ?>active<?php endif; ?>" data-am-dropdown-toggle href="javascript:;">
                                    <?php echo htmlentities($nav['name']); ?> <span class="am-icon-caret-down"></span>
                                </a>
                                <ul class="am-dropdown-content">
                                    <?php foreach($nav['items'] as $navs): ?>
                                        <li>
                                            <a href="<?php echo htmlentities($navs['url']); ?>" title="<?php echo htmlentities($navs['name']); ?>" <?php if(isset($navs['active']) and $navs['active'] == 1): ?>class="active"<?php endif; ?>><?php echo htmlentities($navs['name']); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <!-- 导航右侧 -->
            <div class="am-topbar-right am-hide-sm-only">
                <!-- 快捷百宝箱 -->
                <?php if(MyC('home_navigation_main_quick_status') == 1): ?>
                    <div class="navigation-main-quick">
                        <a href="javascript:;" class="am-block" data-am-modal="{target: '#left-main-quick-popup'}">
                            <span class="am-icon-sliders icon"></span>
                            <b class="am-block"></b>
                            <p class="am-text-truncate name"><?php echo MyC('home_navigation_main_quick_name', '百宝箱', true); ?></p>
                            <i class="am-icon-angle-down"></i>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- 中间导航内容内部底部 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_header_nav_content_inside_bottom</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_header_nav_content_inside_bottom_data) and is_array($plugins_view_common_header_nav_content_inside_bottom_data)): foreach($plugins_view_common_header_nav_content_inside_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- 中间导航右侧 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_common_header_nav_right</span>
            </div>
        <?php endif; if(!empty($plugins_view_common_header_nav_right_data) and is_array($plugins_view_common_header_nav_right_data)): foreach($plugins_view_common_header_nav_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</header>

<!-- goods category -->
<!-- 商品分类  -->
<div id="goods-category" class="am-container am-hide-sm-only am-hide-md-only" data-controller-name="<?php echo htmlentities($controller_name); ?>">
    <div class="goods-category-s">
        <a href="<?php echo MyUrl('index/category/index'); ?>">
            <div class="goods-category-title">
                <span class="all-goods">全部分类</span>
            </div>
        </a>
        <div class="category-content" <?php if((isset($common_goods_category_hidden) and $common_goods_category_hidden == 1)): ?>style="display:none;"<?php endif; ?>>
            <div class="category">
                <ul class="category-list">
                    <?php if(!empty($goods_category_list) and is_array($goods_category_list)): foreach($goods_category_list as $v): ?>
                            <li class="first">
                                <a href="<?php echo MyUrl('index/search/index', ['cid'=>$v['id']]); ?>" class="am-block" title="<?php echo htmlentities($v['name']); ?>">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name am-text-truncate">
                                        <?php if(!empty($v['icon'])): ?>
                                            <img src="<?php echo htmlentities($v['icon']); ?>" />
                                        <?php endif; ?>
                                        <span class="bd-name"><?php echo htmlentities($v['name']); ?></span>
                                    </h3>
                                    <em>&gt;</em>
                                </div>
                                </a>
                                <?php if($category_show_level > 1): ?>
                                    <div class="menu-item menu-in top">
                                        <?php if(!empty($v['items'])): ?>
                                            <div class="area-in">
                                                <div class="area-bg">
                                                    <div class="menu-srot">
                                                        <div class="sort-side">
                                                            <?php foreach($v['items'] as $vs): ?>
                                                                <dl class="dl-sort <?php if($category_show_level == 2): ?>dl-sort-two<?php endif; ?>">
                                                                    <?php if($category_show_level == 2): ?>
                                                                        <dd>
                                                                            <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>">
                                                                                <span><?php echo htmlentities($vs['name']); ?></span>
                                                                            </a>
                                                                        </dd>
                                                                    <?php elseif($category_show_level == 3): ?>
                                                                        <dt>
                                                                            <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>">
                                                                                <span title="<?php echo htmlentities($vs['name']); ?>"><?php echo htmlentities($vs['name']); ?></span>
                                                                            </a>
                                                                        </dt>
                                                                        <?php if(!empty($vs['items'])): foreach($vs['items'] as $vss): ?>
                                                                                <dd>
                                                                                    <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vss['id']]); ?>" title="<?php echo htmlentities($vss['name']); ?>">
                                                                                        <span><?php echo htmlentities($vss['name']); ?></span>
                                                                                    </a>
                                                                                </dd>
                                                                            <?php endforeach; ?>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                </dl>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- content -->
<div class="am-container user-main">

    <!-- user menu start -->
    <!-- 用户中心菜单 -->
<div class="user-sidebar am-offcanvas" id="user-offcanvas">
  <div class="am-offcanvas-bar user-offcanvas-bar">
    <ul class="am-list user-sidebar-list">
      <?php if(!empty($user_left_menu) and is_array($user_left_menu)): foreach($user_left_menu as $k=>$v): if($v['is_show'] == 1): if(empty($v['item'])): ?>
              <li class="<?php if(isset($v['contains']) and ((in_array(strtolower($module_name.$controller_name.$action_name), $v['contains']) and isset($v['is_system']) and $v['is_system'] == 1 and !isset($params['pluginsname'])) or (isset($params['pluginsname']) and isset($params['pluginscontrol']) and isset($params['pluginsaction']) and in_array(strtolower($params['pluginsname'].$params['pluginscontrol'].$params['pluginsaction']), $v['contains']) and (!isset($v['is_system']) or $v['is_system'] != 1)))): ?> am-active<?php endif; ?>" >
                <a href="<?php echo htmlentities($v['url']); ?>"><?php if(!empty($v['icon'])): ?><i class="<?php echo htmlentities($v['icon']); ?>"></i><?php endif; ?> <?php echo htmlentities($v['name']); ?></a>
              </li>
            <?php else: ?>
              <li>
                <a class="am-cf user-item-parent" data-am-collapse="{target: '#collapse-nav-<?php echo htmlentities($k); ?>'}"><?php if(!empty($v['icon'])): ?><i class="<?php echo htmlentities($v['icon']); ?>"></i><?php endif; ?> <?php echo htmlentities($v['name']); ?><span class="am-icon-angle-down am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse user-sidebar-sub am-in" id="collapse-nav-<?php echo htmlentities($k); ?>">
                  <?php foreach($v['item'] as $vs): if($vs['is_show'] == 1): ?>
                      <li class="<?php if(isset($vs['contains']) and ((in_array(strtolower($module_name.$controller_name.$action_name), $vs['contains']) and isset($vs['is_system']) and $vs['is_system'] == 1 and !isset($params['pluginsname'])) or (isset($params['pluginsname']) and isset($params['pluginscontrol']) and isset($params['pluginsaction']) and in_array(strtolower($params['pluginsname'].$params['pluginscontrol'].$params['pluginsaction']), $vs['contains']) and (!isset($vs['is_system']) or $vs['is_system'] != 1)))): ?> am-active<?php endif; ?>">
                        <a href="<?php echo htmlentities($vs['url']); ?>" class="am-cf"><?php if(!empty($vs['icon'])): ?><i class="<?php echo htmlentities($vs['icon']); ?>"></i><?php endif; ?> <?php echo htmlentities($vs['name']); ?></a>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
<a href="javascript:;" class="am-icon-btn am-icon-th-list am-show-sm-only user-menu" data-am-offcanvas="{target: '#user-offcanvas'}"></a>

<!-- 用户头像修改 -->
<div class="am-popup common-cropper-popup" id="user-avatar-popup">
    <div class="am-popup-inner">
        <div class="am-popup-hd meila-radius">
            <h4 class="am-popup-title">头像上传</h4>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd">
            <form class="am-form form-validation-user-avatar view-save" action="<?php echo MyUrl('index/user/useravatarupload'); ?>" method="POST" request-type="ajax-reload" enctype="multipart/form-data">
                <div class="cropper-images-view">
                    <div class="img-container am-fl user-avatar-img-container">
                        <img src="<?php echo htmlentities($attachment_host); ?>/static/<?php echo htmlentities($module_name); ?>/<?php echo htmlentities($default_theme); ?>/images/default-user-avatar.jpg" alt="Picture" />
                    </div>
                    <div class="img-preview preview-lg am-fl am-radius user-avatar-img-preview am-hide-sm-only"></div>
                    <div class="img-preview preview-md am-fl am-radius user-avatar-img-preview "></div>
                    <div class="img-preview preview-sm am-fl am-radius user-avatar-img-preview "></div>
                    <input type="hidden" name="img_x" id="user-avatar-img_x" />
                    <input type="hidden" name="img_y" id="user-avatar-img_y" />
                    <input type="hidden" name="img_width" id="user-avatar-img_width" />
                    <input type="hidden" name="img_height" id="user-avatar-img_height" />
                    <input type="hidden" name="img_rotate" id="user-avatar-img_rotate" />
                </div>
                <div class="submit-operation">
                    <button type="button" class="am-btn am-btn-default am-fl am-icon-search-plus am-icon-sm am-btn-xs am-radius" data-method="zoom" data-option="0.1"></button>
                    <div class="am-form-group am-form-file am-fl am-form-group-refreshing">
                        <button type="button" class="am-btn am-btn-default am-btn-sm cropper-input-images-submit">
                        <i class="am-icon-cloud-upload"></i> 选择图片</button>
                        <input type="file" name="file" multiple accept="image/gif,image/jpeg,image/jpg,image/png" data-validation-message="请选择需要上传的图片" required  />
                    </div>
                    <button type="button" class="am-btn am-btn-default am-fl am-icon-search-minus am-icon-sm am-btn-xs am-radius" data-method="zoom" data-option="-0.1"></button>
                </div>

                <button type="submit" class="am-btn am-btn-primary am-btn-sm am-radius head-submit btn-loading-example am-margin-top-sm" data-am-loading="{loadingText: '上传中...'}">确认上传</button>
            </form>
            <div class="am-alert am-alert-secondary" data-am-alert>
              <p>请在工作区域放大缩小及移动选取框，选择要裁剪的范围，裁切宽高比例固定；</p>
              <p>裁切后的效果为右侧预览图所显示；</p>
              <p>确认提交后生效。</p>
            </div>
        </div>
    </div>
</div>
    <!-- user menu end -->

    <!-- content start -->
    <div class="user-content">
        <div class="user-content-body">
            <!-- content top hook -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span><?php echo htmlentities($hook_name_content_top); ?></span>
                </div>
            <?php endif; 
                $hook_data = MyEventTrigger($hook_name_content_top, ['hook_name'=>$hook_name_content_top, 'is_backend'=>true]);
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

            <!-- content top start -->
            <div class="content-top">
                
            </div>
            <!-- content top end -->

            <!-- content start  -->
            <div class="form-table-content">
                <!-- content inside top hook -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span><?php echo htmlentities($hook_name_content_inside_top); ?></span>
                    </div>
                <?php endif; 
                    $hook_data = MyEventTrigger($hook_name_content_inside_top, ['hook_name'=>$hook_name_content_inside_top, 'is_backend'=>true]);
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

                <!-- form -->
                <?php if(!empty($form_table) and !empty($form_table['base']) and !empty($form_table['form']) and is_array($form_table['base']) and is_array($form_table['form'])): ?>
                    <form class="form-validation-search" method="post" action="<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1 and !empty($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>" request-type="jump" request-value="<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1 and !empty($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>">
                        <!-- nav start -->
                        <div class="form-table-navigation">
                            
                        </div>
                        <!-- nav end -->

                        <!-- top operate start -->
                        <div class="form-table-operate-top am-cf">
                            
                               <!-- 公共操作 -->
<!-- 钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_form_top_operate); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_form_top_operate, ['hook_name'=>$hook_name_form_top_operate, 'is_backend'=>true]);
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

<!-- 是否开启删除操作 -->
<?php if(isset($form_table['base']['is_delete']) and $form_table['base']['is_delete'] == 1): ?>
    <button
        type="button"
        class="am-btn am-btn-danger am-radius am-btn-xs am-icon-trash-o form-table-operate-top-delete-submit"
        data-url="<?php if(isset($form_table['base']['delete_url'])): ?><?php echo htmlentities($form_table['base']['delete_url']); ?><?php endif; ?>"
        data-form="<?php if(isset($form_table['base']['delete_form'])): ?><?php echo htmlentities($form_table['base']['delete_form']); ?><?php endif; ?>"
        data-key="<?php if(isset($form_table['base']['delete_key'])): ?><?php echo htmlentities($form_table['base']['delete_key']); ?><?php endif; ?>"
        data-confirm-title="<?php if(isset($form_table['base']['confirm_title'])): ?><?php echo htmlentities($form_table['base']['confirm_title']); ?><?php endif; ?>"
        data-confirm-msg="<?php if(isset($form_table['base']['confirm_msg'])): ?><?php echo htmlentities($form_table['base']['confirm_msg']); ?><?php endif; ?>"
        data-timeout="<?php if(isset($form_table['base']['timeout'])): ?><?php echo htmlentities($form_table['base']['timeout']); ?><?php endif; ?>"
    > 删除</button>
<?php endif; ?>

<!-- 是否开启搜索操作 公共搜索操作放在最后面 -->
<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1): ?>
    <a href="<?php if(isset($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>" class="am-btn am-btn-warning am-radius am-btn-sm am-icon-filter"> 重置</a>
    <button type="submit" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example am-icon-search" data-am-loading="{loadingText:' 搜索中...'}"> 搜索</button>

    <!-- 排序数据字段 -->
    <input type="hidden" name="fp_order_by_key" value="<?php if(!empty($form_order_by) and !empty($form_order_by['key'])): ?><?php echo htmlentities($form_order_by['key']); ?><?php endif; ?>" />
    <input type="hidden" name="fp_order_by_val" value="<?php if(!empty($form_order_by) and !empty($form_order_by['val'])): ?><?php echo htmlentities($form_order_by['val']); ?><?php endif; ?>" />
<?php endif; ?>

<!-- 字段选择 -->
<?php if(!empty($user) and (!isset($form_table['base']['is_fields_sel']) or $form_table['base']['is_fields_sel'] == 1)): ?>
    <div class="am-fr am-nbfc">
        <button type="button" class="am-btn am-btn-default am-radius am-btn-xs am-icon-cog" data-am-modal="{target: '#form-table-fields-popup'}"> 设置</button>
    </div>
<?php endif; ?>
                            
                        </div>
                        <!-- top operate end -->

                        <!-- form table start -->
                        <div class="am-scrollable-horizontal am-table-scrollable-horizontal" data-md5-key="<?php echo htmlentities($form_md5_key); ?>">
    <table class="am-table am-table-striped am-table-hover am-table-bordered am-text-nowrap form-table-data-list">
        <thead>
            <tr>
                <?php foreach($form_table['form'] as $t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                        <!-- 1. 上下居中 -->
                        <!-- 2. 格子大小 -->
                        <!-- 3. 内容位置居（左|中|右） -->
                        <!-- 4. 格子是否固定（left|right 左|右） -->
                        <th class="
                            <?php if(isset($t['is_middle']) and $t['is_middle'] == 1): ?>am-text-middle <?php endif; if(!empty($t['grid_size'])): ?>am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?>am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?>am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?>am-operate-grid <?php endif; ?>
                        "
                        style="
                            <?php if(!empty($t['width'])): ?>
                                min-width: <?php echo htmlentities($t['width']); ?>px;
                            <?php endif; ?>
                        "
                        >
                            <?php switch($t['view_type']): case "checkbox": ?>
                                    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs form-table-operate-checkbox-submit" data-value="<?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>1<?php else: ?>0<?php endif; ?>" data-checked-text="<?php echo htmlentities($t['checked_text']); ?>" data-not-checked-text="<?php echo htmlentities($t['not_checked_text']); ?>" <?php if(empty($data_list)): ?>disabled<?php endif; ?>><?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?><?php echo htmlentities($t['checked_text']); else: ?><?php echo htmlentities($t['not_checked_text']); ?><?php endif; ?></button>
                                <?php break; default: if(isset($t['label'])): ?><?php echo htmlentities($t['label']); ?><?php endif; ?>
                            <?php endswitch; ?>

                            <!-- 排序操作 -->
                            <?php if(isset($t['is_sort']) and $t['is_sort'] == 1 and !empty($t['sort_key'])): ?>
                                <div class="form-sort-container am-nbfc am-inline-block">
                                    <a href="javascript:;" data-key="<?php echo htmlentities($t['sort_key']); ?>" data-val="asc" class="sort-icon am-icon-caret-up <?php if(!empty($form_order_by) and !empty($form_order_by['key']) and $form_order_by['key'] == $t['sort_key'] and !empty($form_order_by['val']) and $form_order_by['val'] == 'asc'): ?>sort-active<?php endif; ?>"></a>
                                    <a href="javascript:;" data-key="<?php echo htmlentities($t['sort_key']); ?>" data-val="desc" class="sort-icon am-icon-caret-down <?php if(!empty($form_order_by) and !empty($form_order_by['key']) and $form_order_by['key'] == $t['sort_key'] and !empty($form_order_by['val']) and $form_order_by['val'] == 'desc'): ?>sort-active<?php endif; ?>"></a>
                                </div>
                            <?php endif; ?>
                        </th>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>

            <!-- search -->
            <?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1): ?>
                <tr class="form-table-search">
                    <?php if(!empty($params['page_size'])): ?>
                        <input type="hidden" name="page_size" value="<?php echo htmlentities($params['page_size']); ?>" />
                    <?php endif; foreach($form_table['form'] as $k=>$t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                            <td class="
                                <?php if(isset($t['is_middle']) and $t['is_middle'] == 1): ?>am-text-middle <?php endif; if(!empty($t['grid_size'])): ?>am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?>am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?>am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?>am-operate-grid <?php endif; ?>
                            "
                            style="
                                <?php if(!empty($t['width'])): ?>
                                    min-width: <?php echo htmlentities($t['width']); ?>px;
                                <?php endif; ?>
                            "
                            >
                                <?php if(!empty($t['search_config']) and !empty($t['search_config']['form_type']) and !empty($t['search_config']['form_name'])): switch($t['search_config']['form_type']): case "input": ?>
                                            <!-- 输入 -->
                                            <input type="text" class="am-form-field am-radius" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key']])): ?><?php echo htmlentities($form_params[$t['form_key']]); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key']])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key']]); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                        <?php break; case "select": ?>
                                            <!-- 选择 -->
                                            <select name="<?php echo htmlentities($t['form_key']); ?>"
                                                class="chosen-select am-text-left"
                                                data-placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>"
                                                <?php if(isset($t['search_config']['is_multiple']) and $t['search_config']['is_multiple'] == 1): ?> multiple<?php endif; if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; ?>
                                            >
                                                <?php if(isset($t['search_config']['is_seat_select']) and $t['search_config']['is_seat_select'] == 1 and (!isset($t['search_config']['is_multiple']) or $t['search_config']['is_multiple'] != 1)): ?>
                                                    <option value="<?php if(isset($t['search_config']['seat_select_value'])): ?><?php echo htmlentities($t['search_config']['seat_select_value']); ?><?php endif; ?>">
                                                        <?php if(empty($t['search_config']['seat_select_text'])): if(empty($t['search_config']['placeholder'])): ?>请选择<?php if(!empty($t['label'])): ?><?php echo htmlentities($t['label']); ?><?php endif; else: ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; else: ?><?php echo htmlentities($t['search_config']['seat_select_text']); ?><?php endif; ?>
                                                    </option>
                                                <?php endif; if(!empty($t['search_config']['data']) and is_array($t['search_config']['data'])): foreach($t['search_config']['data'] as $k=>$v): if(is_array($v)): ?>
                                                            <option value="<?php if(isset($t['search_config']['data_key']) and isset($v[$t['search_config']['data_key']])): ?><?php echo htmlentities($v[$t['search_config']['data_key']]); ?><?php endif; ?>" <?php if(!empty($form_params) and isset($form_params[$t['form_key']]) and isset($t['search_config']['data_key']) and ((is_array($form_params[$t['form_key']]) and in_array($v[$t['search_config']['data_key']], $form_params[$t['form_key']])) or (!is_array($form_params[$t['form_key']]) and $v[$t['search_config']['data_key']] == $form_params[$t['form_key']]))): ?>selected<?php endif; ?>>
                                                                <?php if(isset($t['search_config']['data_name']) and isset($v[$t['search_config']['data_name']])): ?>
                                                                    <?php echo htmlentities($v[$t['search_config']['data_name']]); ?>
                                                                <?php endif; ?>
                                                            </option>
                                                        <?php else: ?>
                                                            <option value="<?php echo htmlentities($k); ?>" <?php if(!empty($form_params) and isset($form_params[$t['form_key']]) and isset($t['search_config']['data_key']) and ((is_array($form_params[$t['form_key']]) and in_array($k, $form_params[$t['form_key']])) or (!is_array($form_params[$t['form_key']]) and $k == $form_params[$t['form_key']]))): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        <?php break; case "section": ?>
                                            <!-- 区间 -->
                                            <div class="form-table-search-section">
                                                <input type="number" class="am-form-field am-radius am-inline-block" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>_min" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_min'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_min']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_point']) and $t['search_config']['is_point'] == 1): ?>step="0.01"<?php endif; ?> min="0" placeholder="<?php if(isset($t['search_config']['placeholder_min'])): ?><?php echo htmlentities($t['search_config']['placeholder_min']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_min'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_min']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                                <span>-</span>
                                                <input type="number" class="am-form-field am-radius am-inline-block" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>_max" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_max'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_max']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_point']) and $t['search_config']['is_point'] == 1): ?>step="0.01"<?php endif; ?> min="0" placeholder="<?php if(isset($t['search_config']['placeholder_max'])): ?><?php echo htmlentities($t['search_config']['placeholder_max']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_max'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_max']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                            </div>
                                        <?php break; case "datetime": ?>
                                            <div class="form-table-search-section form-table-search-time">
                                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_start" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_start']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_start'])): ?><?php echo htmlentities($t['search_config']['placeholder_start']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd H:mm:ss',maxDate:'#F{$dp.$D(\'form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>\');}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_start']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                                <span>-</span>
                                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_end" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_end']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_end'])): ?><?php echo htmlentities($t['search_config']['placeholder_end']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd H:mm:ss',minDate:'#F{$dp.$D(\'form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>\');}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_end']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                            </div>
                                        <?php break; case "date": ?>
                                            <div class="form-table-search-section form-table-search-time">
                                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_start" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_start']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_start'])): ?><?php echo htmlentities($t['search_config']['placeholder_start']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd',maxDate:'#F{$dp.$D(\'form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>\',{d:-1});}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_start']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                                <span>-</span>
                                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_end" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_end']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_end'])): ?><?php echo htmlentities($t['search_config']['placeholder_end']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd',minDate:'#F{$dp.$D(\'form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>\',{d:+1});}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_end']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                            </div>
                                        <?php break; case "ym": ?>
                                            <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius Wdate" name="<?php echo htmlentities($t['form_key']); ?>" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key']])): ?><?php echo htmlentities($form_params[$t['form_key']]); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key']])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key']]); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                        <?php break; case "module": ?>
                                            <!-- 从模块加载自定义模块数据 -->
                                            <?php if(!empty($t['search_config']['template'])): if(isset($t['search_config']['data'])): ?>
                                                    <?php echo ModuleInclude($t['search_config']['template'], [
                                                        'form'=>$t,
                                                        'data'=>$t['search_config']['data'],
                                                        'form_name_key'=>$t['form_key'],
                                                        'params'=>isset($form_params) ? $form_params : [],
                                                    ]); else: ?>
                                                    <?php echo ModuleInclude($t['search_config']['template'], [
                                                        'form'=>$t,
                                                        'data'=>[],
                                                        'form_name_key'=>$t['form_key'],
                                                        'params'=>isset($form_params) ? $form_params : [],
                                                    ]); ?>
                                                <?php endif; ?>
                                            <?php endif; break; ?>
                                    <?php endswitch; ?>
                                <?php endif; ?>
                            </td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endif; ?>
        </thead>
        <tbody>
            <?php if(!empty($data_list) and !empty($form_table['base']['key_field'])): ?>
                <!-- 处理数据数量小于默认数量 -->
                <?php $__FOR_START_474828151__=0;$__FOR_END_474828151__=count($data_list);for($i=$__FOR_START_474828151__;$i < $__FOR_END_474828151__;$i+=1){ ?>
                    <!-- 1. tr 主键id名称 -->
                    <!-- 2. 是否黄色选中class -->
                    <tr
                        <?php if(isset($data_list[$i][$form_table['base']['key_field']])): ?>
                            id="data-list-<?php echo htmlentities($data_list[$i][$form_table['base']['key_field']]); ?>"
                        <?php endif; if(!empty($form_table['base']['status_field']) and isset($data_list[$i][$form_table['base']['status_field']]) and $data_list[$i][$form_table['base']['status_field']] == 0): ?>
                            class="am-active"
                        <?php endif; ?>
                    >
                        <?php foreach($form_table['form'] as $t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                                <!-- 1. 上下居中 -->
                                <!-- 2. 格子大小 -->
                                <!-- 3. 内容位置居（左|中|右） -->
                                <!-- 4. 格子是否固定（left|right 左|右） -->
                                <!-- 5. 是否操作列 -->
                                <td class="am-nowrap-initial
                                    <?php if(isset($t['is_middle']) and $t['is_middle'] == 1): ?>am-text-middle <?php endif; if(!empty($t['grid_size'])): ?>am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?>am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?>am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?>am-operate-grid <?php endif; ?>
                                "
                                style="
                                    <?php if(!empty($t['width'])): ?>
                                        min-width: <?php echo htmlentities($t['width']); ?>px;
                                    <?php endif; ?>
                                "
                                >
                                    <?php if(isset($data_list[$i]) and !empty($t['view_type']) and !empty($t['view_key'])): ?>
                                        <!-- 数据匹配 -->
                                        <?php switch($t['view_type']): case "field": ?>
                                                <!-- 前后固定拼接的值 前面 -->
                                                <?php if(isset($t['view_join_first'])): ?>
                                                    <span><?php echo htmlentities($t['view_join_first']); ?></span>
                                                <?php endif; ?>

                                                <!-- 如果字段为数组则处理多个字段拼接数据 -->
                                                <?php if(is_array($t['view_key'])): foreach($t['view_key'] as $fk=>$fv): if(isset($data_list[$i][$fv])): ?>
                                                            <span><?php echo htmlentities($data_list[$i][$fv]); ?></span>
                                                            <!-- 多个字段拼接数据的的拼接字符 -->
                                                            <?php if(isset($t['view_key_join']) and $fk < count($t['view_key'])-1): ?>
                                                                <span><?php echo $t['view_key_join']; ?></span>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; else: ?>
                                                    <!-- 是否存在数据 key -->
                                                    <?php if(isset($data_list[$i][$t['view_key']])): ?>
                                                        <!-- 是否指定数据转换 -->
                                                        <?php if(!empty($t['view_data']) and is_array($t['view_data'])): ?>
                                                            <!-- 不存在数组中则不显示 -->
                                                            <?php if(isset($t['view_data'][$data_list[$i][$t['view_key']]])): ?>
                                                                <!-- 是否指定二维数组key取值 -->
                                                                <?php if(!empty($t['view_data_key'])): if(isset($t['view_data'][$data_list[$i][$t['view_key']]][$t['view_data_key']])): ?>
                                                                        <?php echo htmlentities($t['view_data'][$data_list[$i][$t['view_key']]][$t['view_data_key']]); ?>
                                                                    <?php endif; else: ?>
                                                                    <?php echo htmlentities($t['view_data'][$data_list[$i][$t['view_key']]]); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        <!-- 直接展示数据 -->
                                                        <?php else: ?>
                                                            <?php echo $data_list[$i][$t['view_key']]; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <!-- 前后固定拼接的值 后面 -->
                                                <?php if(isset($t['view_join_last'])): ?>
                                                    <span><?php echo htmlentities($t['view_join_last']); ?></span>
                                                <?php endif; break; case "module": ?>
                                                <!-- 从模块加载自定义模块数据 -->
                                                <?php echo ModuleInclude(empty($t['template']) ? $t['view_key'] : $t['template'], $data_list[$i], [
                                                    'form'      => $t,
                                                    'params'    => isset($form_params) ? $form_params : [],
                                                ]); break; case "status": ?>
                                                <!-- 数据状态操作按钮组件 -->
                                                <?php if(!empty($t['key_field']) and !empty($t['post_url']) and !empty($data_list[$i][$t['key_field']]) and array_key_exists($t['view_key'], $data_list[$i])): ?>
                                                    <a href="javascript:;"
                                                        class="am-icon-btn am-icon-check submit-state <?php if($data_list[$i][$t['view_key']] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>"
                                                        data-url="<?php echo htmlentities($t['post_url']); ?>"
                                                        data-id="<?php if(isset($data_list[$i][$t['key_field']])): ?><?php echo htmlentities($data_list[$i][$t['key_field']]); ?><?php endif; ?>"
                                                        data-state="<?php echo htmlentities($data_list[$i][$t['view_key']]); ?>"
                                                        data-field="<?php echo htmlentities($t['view_key']); ?>"
                                                        data-is-update-status="<?php if(isset($t['is_form_su']) and $t['is_form_su'] == 1): ?>1<?php else: ?>0<?php endif; ?>"
                                                        data-is-loading="<?php if(isset($t['is_loading']) and $t['is_loading'] == 1): ?>1<?php else: ?>0<?php endif; ?>"
                                                        data-loading-msg="<?php if(!empty($t['loading_msg'])): ?><?php echo htmlentities($t['loading_msg']); ?><?php endif; ?>"
                                                    ></a>
                                                <?php endif; break; case "operate": ?>
                                                <!-- 是否操作列 -->
                                                <!-- 模块数据 -->
                                                <?php echo ModuleInclude($t['view_key'], $data_list[$i], [
                                                    'form'      => $t,
                                                    'params'    => isset($form_params) ? $form_params : [],
                                                ]); ?>

                                                <!-- 列表操作钩子 -->
                                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                                    <div class="plugins-tag">
                                                        <span><?php echo htmlentities($hook_name_form_list_operate); ?></span>
                                                    </div>
                                                <?php endif; 
                                                    $hook_data = MyEventTrigger($hook_name_form_list_operate, [
                                                        'hook_name'     => $hook_name_form_list_operate,
                                                        'is_backend'    => true,
                                                        'id'            => isset($data_list[$i][$form_table['base']['key_field']]) ? $data_list[$i][$form_table['base']['key_field']] : 0,
                                                        'data'          => $data_list[$i],
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
                                                 break; case "radio": if(isset($data_list[$i][$form_table['base']['key_field']])): ?>
                                                    <!-- 是否配置指定数据不显示控件 -->
                                                    <?php if(!isset($t['not_show_data']) or 
                                                        empty($t['not_show_key']) or 
                                                        (is_array($t['not_show_data']) and isset($data_list[$i][$t['not_show_key']]) and !in_array($data_list[$i][$t['not_show_key']], $t['not_show_data'])) or 
                                                        (isset($t['not_show_type']) and isset($data_list[$i][$t['not_show_key']]) and (
                                                            ($t['not_show_type'] == 0 and $data_list[$i][$t['not_show_key']] == $t['not_show_data']) or 
                                                            ($t['not_show_type'] == 1 and $data_list[$i][$t['not_show_key']] > $t['not_show_data']) or 
                                                            ($t['not_show_type'] == 2 and $data_list[$i][$t['not_show_key']] < $t['not_show_data'])
                                                        ))): ?>
                                                        <div class="form-table-operate-radio">
                                                            <label class="am-radio am-secondary am-radio-inline">
                                                                <input type="radio" name="<?php echo htmlentities($t['view_key']); ?>" value="<?php echo htmlentities($data_list[$i][$form_table['base']['key_field']]); ?>" <?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>checked<?php endif; ?> data-am-ucheck />
                                                            </label>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; break; case "checkbox": if(isset($data_list[$i][$form_table['base']['key_field']])): ?>
                                                    <!-- 是否配置指定数据不显示控件 -->
                                                    <?php if(!isset($t['not_show_data']) or 
                                                        empty($t['not_show_key']) or 
                                                        (is_array($t['not_show_data']) and isset($data_list[$i][$t['not_show_key']]) and !in_array($data_list[$i][$t['not_show_key']], $t['not_show_data'])) or 
                                                        (isset($t['not_show_type']) and isset($data_list[$i][$t['not_show_key']]) and (
                                                            ($t['not_show_type'] == 0 and $data_list[$i][$t['not_show_key']] == $t['not_show_data']) or 
                                                            ($t['not_show_type'] == 1 and $data_list[$i][$t['not_show_key']] > $t['not_show_data']) or 
                                                            ($t['not_show_type'] == 2 and $data_list[$i][$t['not_show_key']] < $t['not_show_data'])
                                                        ))): ?>
                                                        <div class="form-table-operate-checkbox">
                                                            <label class="am-checkbox am-secondary am-checkbox-inline">
                                                                <input type="checkbox" name="<?php echo htmlentities($t['view_key']); ?>" value="<?php echo htmlentities($data_list[$i][$form_table['base']['key_field']]); ?>" <?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>checked<?php endif; ?> data-am-ucheck />
                                                            </label>
                                                        </div>
                                                    <?php endif; ?>
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
                                                    'id'            => isset($data_list[$i][$form_table['base']['key_field']]) ? $data_list[$i][$form_table['base']['key_field']] : 0,
                                                    'data'          => $data_list[$i],
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
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
                <?php } ?>
            <?php endif; ?>
        </tbody>
    </table>
    <?php if(empty($data_list)): ?>
        <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
    <?php endif; ?>
</div>
                        <!-- form table end -->

                        <!-- bottom operate start -->
                        <div class="form-table-operate-bottom am-nbfc am-margin-top-sm">
                            
                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_form_bottom_operate); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_form_bottom_operate, ['hook_name'=>$hook_name_form_bottom_operate, 'is_backend'=>true]);
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
                        <!-- bottom operate end -->
                    </form>

                    <!-- 字段选择 -->
                    <?php if(!isset($form_table['base']['is_fields_sel']) or $form_table['base']['is_fields_sel'] == 1): ?>
    <div class="am-popup popup-not-title" id="form-table-fields-popup">
        <div class="am-popup-inner">
            <span data-am-modal-close class="am-close am-close-alt am-icon-times"></span>
            <div class="am-popup-bd am-padding-0">
                <div class="form-table-fields-select-container">
                    <div class="am-scrollable-vertical form-table-fields-list-container">
                        <?php if(!empty($form_user_fields)): ?>
                            <div class="am-alert am-margin-bottom-0">
                                <p>可点击拖拽调整显示顺序、如需恢复点击重置即可</p>
                            </div>
                            <ul class="am-list am-list-static am-list-striped am-margin-bottom-0 form-table-fields-content-container">
                                <?php foreach($form_user_fields as $v): ?>
                                    <li>
                                        <label class="am-checkbox-inline">
                                            <input type="checkbox" name="form_field_checkbox_value" value="<?php echo htmlentities($v['label']); ?>" data-am-ucheck <?php if(isset($v['checked']) and $v['checked'] == 1): ?>checked<?php endif; ?> />
                                            <span><?php echo htmlentities($v['label']); ?></span>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
                        <?php endif; ?>
                    </div>
                    <div class="am-padding-sm am-nbfc form-table-fields-button-container">
                        <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs form-table-field-checkbox-submit" data-value="<?php if(array_sum(array_column($form_user_fields, 'checked')) > 0): ?>1<?php else: ?>0<?php endif; ?>" data-checked-text="反选" data-not-checked-text="全选"><?php if(array_sum(array_column($form_user_fields, 'checked')) > 0): ?>反选<?php else: ?>全选<?php endif; ?></button>
                        <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-margin-left-sm submit-ajax" data-url="<?php echo MyUrl('index/formtable/fieldsselectreset'); ?>" data-id="<?php echo htmlentities($form_md5_key); ?>" data-key="md5_key" data-view="reload" data-is-confirm="0">重置</button>
                        <button type="button" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example am-fr form-table-field-confirm-submit" data-url="<?php echo MyUrl('index/formtable/fieldsselectsave'); ?>" data-am-loading="{loadingText:'处理中...'}">确认</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; else: ?>
                    <div class="table-no"><i class="am-icon-warning"></i> <?php if(empty($form_error)): ?>动态表格配置有误<?php else: ?><?php echo htmlentities($form_error); ?><?php endif; ?></div>
                <?php endif; ?>

                <!-- page start -->
                
                    <?php if(!empty($data_list) and isset($page_html)): ?>
                        <?php echo $page_html; ?>
                    <?php endif; ?>
                
                <!-- page end -->

                <!-- extend start -->
                
                <!-- extend end -->

                <!-- content inside top hook -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span><?php echo htmlentities($hook_name_content_inside_bottom); ?></span>
                    </div>
                <?php endif; 
                    $hook_data = MyEventTrigger($hook_name_content_inside_bottom, ['hook_name'=>$hook_name_content_inside_bottom, 'is_backend'=>true]);
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
                    <span><?php echo htmlentities($hook_name_content_bottom); ?></span>
                </div>
            <?php endif; 
                $hook_data = MyEventTrigger($hook_name_content_bottom, ['hook_name'=>$hook_name_content_bottom, 'is_backend'=>true]);
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
    </div>
    <!-- content end -->
</div>

<!-- footer start -->
<!-- commom html -->
<textarea id="upload-editor-view" data-url="<?php if(isset($is_load_upload_editor) and $is_load_upload_editor == 1): ?><?php echo MyUrl('index/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?><?php endif; ?>" style="display: none;"></textarea>

<!-- footer start -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): ?>
	<!-- 底部导航上面钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_view_common_footer_top</span>
    </div>
<?php endif; if(!empty($plugins_view_common_footer_top_data) and is_array($plugins_view_common_footer_top_data)): foreach($plugins_view_common_footer_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; if(!IsMobile() or (IsMobile() and MyC('common_is_mobile_concise_model') != 1)): ?>
	<!-- 底部导航 -->
	<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{}">
		<div class="am-container">
			<!-- 底部导航 -->
			<?php if(!empty($nav_footer)): ?>
				<ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gallery-overlay am-no-layout am-u-md-8 footer-nav-list" data-am-gallery="{}">
					<?php foreach($nav_footer as $k=>$v): if($k < 4): ?>
							<li>
								<div class="am-gallery-item">
									<p class="footer-nav-title am-text-truncate"><?php echo htmlentities($v['name']); ?></p>
									<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
											<p class="am-text-truncate">
												<a href="<?php echo htmlentities($vs['url']); ?>" <?php if($vs['is_new_window_open'] == 1): ?>target="_blank"<?php endif; ?>><?php echo htmlentities($vs['name']); ?></a>
											</p>
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<!-- 商店信息 -->
			<ul class="footer-about am-u-md-4">
				<?php if(!empty($common_customer_store_tel)): ?>
					<li class="tel">
						<i class="am-icon-volume-control-phone"></i>
						<a href="tel:<?php echo htmlentities($common_customer_store_tel); ?>"><?php echo htmlentities($common_customer_store_tel); ?></a>
					</li>
				<?php endif; if(!empty($common_customer_store_address)): ?>
					<li class="address">
						<i class="am-icon-map-marker"></i>
						<span><?php echo htmlentities($common_customer_store_address); ?></span>
					</li>
				<?php endif; if(!empty($common_customer_store_email)): ?>
					<li class="email">
						<i class="am-icon-envelope"></i>
						<span><?php echo htmlentities($common_customer_store_email); ?></span>
					</li>
				<?php endif; if(!empty($common_customer_store_qrcode)): ?>
					<li class="qrcode">
						<img src="<?php echo htmlentities($common_customer_store_qrcode); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
					</li>
				<?php endif; ?>
			</ul>
		</div>

		<!-- 页脚信息 -->
		<div class="am-footer-miscs">
			<div class="am-container">
				<!-- 友情链接 -->
				<?php if(!empty($link_list)): ?>
					<div class="friendship-list">
						<ul class="am-cf am-margin-bottom-sm">
							<li class="am-fl am-text-center title">友情链接</li>
							<?php foreach($link_list as $v): ?>
								<li class="am-fl am-text-center">
									<a href="<?php echo htmlentities($v['url']); ?>" <?php if($v['is_new_window_open'] == 1): ?> target="_blank"<?php endif; ?> title="<?php echo htmlentities($v['describe']); ?>"><?php echo htmlentities($v['name']); ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; if(!empty($home_site_icp)): ?>
					<b></b>
					<p class="footer-icp">
						<a href="https://beian.miit.gov.cn/" target="_blank">
							<img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/beian-icp-icon.png" alt="ICP备案" />
							<?php echo htmlentities($home_site_icp); ?>
						</a>
					</p>
				<?php endif; ?>
			</div>
		</div>
	</footer>
<?php else: ?>
	<footer class="am-footer am-footer am-footer-default mobile-concise-model">
		<!-- 页脚信息 -->
		<div class="am-footer-miscs">
			<p class="powered">
				<?php echo $home_theme_footer_bottom_powered; ?> <?php echo htmlentities(APPLICATION_VERSION); ?>
			</p>
		</div>
	</footer>
<?php endif; ?>

<!-- 快捷导航 -->
<?php if(MyC('home_navigation_main_quick_status') == 1): ?>
	<a href="javascript:;" class="am-icon-btn am-icon-sliders am-show-sm-only left-main-quick-menu" data-am-modal="{target: '#left-main-quick-popup'}"></a>
<div class="am-popup popup-not-title" id="left-main-quick-popup">
    <div class="am-popup-inner">
        <span data-am-modal-close class="am-close am-close-alt am-icon-times"></span>
        <div class="am-popup-bd">
            <?php if(!empty($nav_quick) and is_array($nav_quick)): ?>
                <ul class="am-avg-sm-3 am-avg-md-4 am-avg-lg-4 left-main-quick-content">
                    <?php foreach($nav_quick as $nav): if(!empty($nav['images_url']) and !empty($nav['name'])): ?>
                            <li class="am-text-center am-padding-sm <?php if(isset($nav['class_name'])): ?><?php echo htmlentities($nav['class_name']); ?><?php endif; ?>" <?php if(!empty($nav['data_value'])): ?>data-value="<?php echo htmlentities($nav['data_value']); ?>"<?php endif; ?>>
                                <?php if(isset($nav['event_type']) and isset($nav['event_value']) and in_array($nav['event_type'], [3,4])): switch($nav['event_type']): case "3": ?>
                                            <!-- 地图 -->
                                            <a href="javascript:;" <?php if(!empty($nav['event_value_data']) and isset($nav['event_value_data'][2]) and isset($nav['event_value_data'][3]) and $nav['event_value_data'][2] != 0 and $nav['event_value_data'][3] != 0): ?>class="submit-map-popup" data-lng="<?php echo htmlentities($nav['event_value_data'][2]); ?>" data-lat="<?php echo htmlentities($nav['event_value_data'][3]); ?>"<?php endif; ?>>
                                                <p class="nav-icon" style="<?php if(!empty($nav['bg_color'])): ?>background:<?php echo htmlentities($nav['bg_color']); ?>;<?php endif; ?>">
                                                    <img src="<?php echo htmlentities($nav['images_url']); ?>" alt="<?php echo htmlentities($nav['name']); ?>" />
                                                </p>
                                        <?php break; case "4": ?>
                                            <!-- 电话 -->
                                            <a <?php if(!empty($nav['event_value'])): ?>href="tel:<?php echo htmlentities($nav['event_value']); ?>"<?php else: ?>href="javascript:;"<?php endif; ?>>
                                                <p class="nav-icon" style="<?php if(!empty($nav['bg_color'])): ?>background:<?php echo htmlentities($nav['bg_color']); ?>;<?php endif; ?>">
                                                <img src="<?php echo htmlentities($nav['images_url']); ?>" alt="<?php echo htmlentities($nav['name']); ?>" />
                                            </p>
                                        <?php break; ?>
                                    <?php endswitch; else: ?>
                                    <!-- 默认url地址 -->
                                    <a <?php if(!empty($nav['event_value'])): ?>href="<?php echo htmlentities($nav['event_value']); ?>"<?php else: ?>href="javascript:;"<?php endif; ?>>
                                        <p class="nav-icon" style="<?php if(!empty($nav['bg_color'])): ?>background:<?php echo htmlentities($nav['bg_color']); ?>;<?php endif; ?>">
                                            <img src="<?php echo htmlentities($nav['images_url']); ?>" alt="<?php echo htmlentities($nav['name']); ?>" />
                                        </p>
                                <?php endif; ?>
                                <p class="am-margin-top-xs am-text-truncate"><?php echo htmlentities($nav['name']); ?></p>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>
<!-- footer end -->

<!-- 公共底部钩子 -->
<?php if(!isset($page_pure) or $page_pure != 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_common_bottom</span>
        </div>
    <?php endif; if(!empty($plugins_view_common_bottom_data) and is_array($plugins_view_common_bottom_data)): foreach($plugins_view_common_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                <?php echo $hook; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>

<!-- footer公共底部钩子 -->
<?php if(!isset($is_footer) or $is_footer == 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_common_bottom_footer</span>
        </div>
    <?php endif; if(!empty($plugins_view_common_bottom_footer_data) and is_array($plugins_view_common_bottom_footer_data)): foreach($plugins_view_common_bottom_footer_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                <?php echo $hook; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>
</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jquery/jquery-2.2.4.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/assets/js/amazeui.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- jshash -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jshash/md5-min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 图片放大镜 -->
<?php if(isset($is_load_imagezoom) and $is_load_imagezoom == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/imagezoom/jquery.imagezoom.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- echarts 图表 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/echarts.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/macarons.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-dialog/amazeui.dialog.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 图像裁剪插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/cropper/cropper.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 复制插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/clipboard/clipboard.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖拽排序插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/dragsort/jquery.dragsort-0.5.2.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ueditor 编辑器 -->
<script type='text/javascript' src="<?php echo htmlentities($my_public_url); ?>static/common/lib/ueditor/ueditor.config.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/ueditor.all.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/lang/zh-cn/zh-cn.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 颜色选择器 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/colorpicker/jquery.colorpicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 日期组件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/My97DatePicker/WdatePicker.js"></script>

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
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/index/<?php echo htmlentities($default_theme); ?>/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
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

<!-- 底部信息 --> 
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): ?>
    <?php echo MyC('home_footer_info'); ?>
<?php endif; ?>

<!-- js钩子 -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_js</span>
        </div>
    <?php endif; ?>
<?php endif; if(!empty($plugins_js_data) and is_array($plugins_js_data)): foreach($plugins_js_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
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
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_common_page_bottom</span>
    </div>
<?php endif; if(!empty($plugins_common_page_bottom_data) and is_array($plugins_common_page_bottom_data)): foreach($plugins_common_page_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<!-- footer end -->

<!-- page buttom -->
