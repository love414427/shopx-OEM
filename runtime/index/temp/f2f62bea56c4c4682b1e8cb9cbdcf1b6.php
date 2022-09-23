<?php /*a:12:{s:71:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/order/detail.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header.html";i:1660808542;s:80:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header_top_nav.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/nav_search.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header_nav.html";i:1660808542;s:80:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/goods_category.html";i:1660808542;s:74:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/not_data.html";i:1660808542;s:75:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/user_menu.html";i:1660808542;s:78:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/order/payment_popup.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/footer.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/footer_nav.html";i:1663332220;s:71:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/quick.html";i:1660808542;}*/ ?>
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
            <!-- 用户订单详情状态环节顶部-开始 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_user_order_detail_progress_top</span>
                </div>
            <?php endif; 
                $hook_name = 'plugins_view_user_order_detail_progress_top';
                $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$data]);
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
            <!-- 用户订单详情状态环节顶部-结束 -->

            <!-- 进度环节 -->
            <?php if(!in_array($data['status'], [5,6])): ?>
                <ul class="progress">
                    <li class="steps-success <?php if($data['status'] < 2): ?> current<?php endif; ?>">
                        <p class="digital">
                            <i class="am-icon-check"></i>
                        </p>
                        <div class="base">
                            <p class="title">拍下商品</p>
                            <?php if(!empty($data['add_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['add_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="<?php if($data['status'] > 1): ?>steps-success<?php endif; if($data['status'] == 2): ?> current<?php endif; ?>">
                        <i class="step"></i>
                        <p class="digital">
                            <?php if($data['status'] > 1): ?><i class="am-icon-check"></i><?php else: ?>2<?php endif; ?>
                        </p>
                        <div class="base">
                            <p class="title">付款</p>
                            <?php if(!empty($data['pay_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['pay_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="<?php if($data['status'] > 2): ?>steps-success<?php endif; if($data['status'] == 3): ?> current<?php endif; ?>">
                        <i class="step"></i>
                        <p class="digital">
                            <?php if($data['status'] > 2): ?><i class="am-icon-check"></i><?php else: ?>3<?php endif; ?>
                        </p>
                        <div class="base">
                            <p class="title">卖家发货</p>
                            <?php if(!empty($data['delivery_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['delivery_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="<?php if($data['status'] > 3): ?>steps-success<?php endif; if($data['status'] == 4 and $data['user_is_comments'] == 0): ?> current<?php endif; ?>">
                        <i class="step"></i>
                        <p class="digital">
                            <?php if($data['status'] > 3): ?><i class="am-icon-check"></i><?php else: ?>4<?php endif; ?>
                        </p>
                        <div class="base">
                            <p class="title">确认收货</p>
                            <?php if(!empty($data['collect_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['collect_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="<?php if($data['user_is_comments'] > 0): ?>steps-success<?php endif; if($data['user_is_comments'] > 0): ?> current<?php endif; ?>">
                        <i class="step"></i>
                        <p class="digital">
                            <?php if($data['user_is_comments'] > 0): ?><i class="am-icon-check"></i><?php else: ?>5<?php endif; ?>
                        </p>
                        <div class="base">
                            <p class="title">评价</p>
                            <?php if(!empty($data['user_is_comments_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['user_is_comments_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            <?php endif; ?>

            <!-- 用户订单详情基础信息顶部-开始 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_user_order_detail_base_top</span>
                </div>
            <?php endif; 
                $hook_name = 'plugins_view_user_order_detail_base_top';
                $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$data]);
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
            <!-- 用户订单详情基础信息顶部-结束 -->

            <!-- 基础信息 -->
            <div class="order-base">
                <div class="base-left">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">订单信息</div>
                        <div class="am-panel-bd">
                            <?php if(!empty($data['warehouse_name'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">出货服务：</div>
                                    <div class="items-detail am-fl">
                                        <span class="warehouse-item-container">
                                            <?php if(!empty($data['warehouse_icon'])): if(IsUrl($data['warehouse_icon'])): ?>
                                                    <img src="<?php echo htmlentities($data['warehouse_icon']); ?>" alt="<?php echo htmlentities($data['warehouse_name']); ?>" class="warehouse-icon" />
                                                <?php else: ?>
                                                    <i class="<?php echo htmlentities($data['warehouse_icon']); ?>"></i>
                                                <?php endif; ?>
                                            <?php endif; if(empty($data['warehouse_url'])): ?>
                                                <strong class="warehouse-name"><?php echo htmlentities($data['warehouse_name']); ?></strong>
                                            <?php else: ?>
                                                <a href="<?php echo htmlentities($data['warehouse_url']); ?>" target="_blank" class="text-deco-none">
                                                    <strong class="warehouse-name"><?php echo htmlentities($data['warehouse_name']); ?></strong>
                                                </a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="items am-cf">
                                <div class="items-title am-fl">订单模式：</div>
                                <div class="items-detail am-fl"><?php echo htmlentities($data['order_model_name']); ?></div>
                            </div>
                            <div class="items am-cf">
                                <div class="items-title am-fl">订单编号：</div>
                                <div class="items-detail am-fl"><?php echo htmlentities($data['order_no']); ?></div>
                            </div>
                            <?php if(!empty($data['status_name'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">订单状态：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['status_name']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['pay_status_name'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">支付状态：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['pay_status_name']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['payment_name'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">支付方式：</div>
                                    <div class="items-detail am-fl">
                                        <span><?php echo htmlentities($data['payment_name']); ?></span>
                                        <?php if(!empty($data['is_under_line_text'])): ?>
                                            <span class="am-badge am-badge-danger-plain am-radius"><?php echo htmlentities($data['is_under_line_text']); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; if(!empty($data['total_price'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">订单总价：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['total_price']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['buy_number_count'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">购买数量：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['buy_number_count']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['returned_quantity'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">退货数量：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['returned_quantity']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['user_note'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">用户留言：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['user_note']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['add_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">下单时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['add_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['confirm_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">确认时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['confirm_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['pay_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">付款时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['pay_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['delivery_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">发货时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['delivery_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['collect_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">收货时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['collect_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['user_is_comments_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">评论时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['user_is_comments_time']); ?></div>
                                </div>
                            <?php endif; if(in_array($data['status'], [5]) and !empty($data['cancel_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">取消时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['cancel_time']); ?></div>
                                </div>
                            <?php endif; if(in_array($data['status'], [6]) and !empty($data['close_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">关闭时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['close_time']); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="base-right">
                    <div class="status">
                        <?php if($data['status'] == 4): ?>
                            <i class="am-icon-check-circle icon-success am-fl"></i>
                        <?php else: ?>
                            <i class="am-icon-info-circle icon-tips am-fl"></i>
                        <?php endif; ?>
                        <p class="status-name am-fl"><?php echo htmlentities($data['status_name']); ?></p>
                    </div>
                    <div class="operation">
                        <!-- 0待确认, 1已确认/待支付, 2已支付/待发货, 3已发货/待收货, 4已完成, 5已取消, 6已关闭 -->
                        <?php if(!empty($data['operate_data'])): if($data['status'] != 2): ?>
                                <span>您可以</span>
                            <?php endif; if($data['operate_data']['is_cancel'] == 1): ?>
                                <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-icon-paint-brush submit-ajax submit-cancel" data-url="<?php echo MyUrl('index/order/cancel'); ?>" data-id="<?php echo htmlentities($data['id']); ?>" data-view="reload"> 取消</button>
                            <?php endif; if($data['operate_data']['is_pay'] == 1): ?>
                                <button class="am-btn am-btn-primary am-btn-xs am-radius am-icon-paypal submit-pay" data-id="<?php echo htmlentities($data['id']); ?>" data-payment-id="<?php echo htmlentities($data['payment_id']); ?>"> 支付</button>
                            <?php endif; if($data['operate_data']['is_collect'] == 1): ?>
                                <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-check-circle-o submit-ajax submit-confirm" data-url="<?php echo MyUrl('index/order/collect'); ?>" data-id="<?php echo htmlentities($data['id']); ?>" data-view="reload" data-msg="请仔细确认已收到货物、确认继续吗？"> 收货</button>
                            <?php endif; if($data['operate_data']['is_comments'] == 1): ?>
                                <a href="<?php echo MyUrl('index/order/comments', ['id'=>$data['id']]); ?>" target="_blank" class="am-btn am-btn-primary am-btn-xs am-radius am-icon-heart-o"> 评价</a>
                            <?php endif; if($data['operate_data']['is_delete'] == 1): ?>
                                <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('index/order/delete'); ?>" data-id="<?php echo htmlentities($data['id']); ?>" data-view="jump" data-value="<?php echo MyUrl('index/order/index'); ?>"> 删除</button>
                            <?php endif; ?>
                        <?php endif; ?>

                        <!-- 订单详情操作钩子 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_index_order_detail_operate</span>
                            </div>
                        <?php endif; 
                            $hook_name = 'plugins_view_index_order_detail_operate';
                            $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'id'=>$data['id'], 'data'=>$data]);
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

                    <!-- 线下支付方式提示信息 -->
                    <?php if(in_array($data['status'], [1]) and $data['is_under_line'] == 1): ?>
                        <div class="am-alert am-alert-warning" data-am-alert>
                            当前为线下支付方式[ <strong class="am-text-success"><?php echo htmlentities($data['payment_name']); ?></strong> ]、需管理员确认后方可生效，如需其它支付可以切换支付重新发起支付。
                        </div>
                    <?php endif; ?>

                    <!-- 待发货提示信息 -->
                    <?php if(in_array($data['status'], [2])): ?>
                        <div class="am-alert" data-am-alert>
                            货物正在仓库打包、出库中...
                        </div>
                    <?php endif; ?>

                    <!-- 快递信息 -->
                    <?php if($data['order_model'] == 0 and in_array($data['status'], [3,4])): ?>
                        <div class="logistics">
                            <div class="items am-cf">
                                <div class="items-title am-fl">快递公司：</div>
                                <div class="items-detail am-fl">
                                    <?php if(!empty($data['express_name'])): ?><?php echo htmlentities($data['express_name']); ?><?php endif; ?>
                                </div>
                            </div>
                            <?php if(!empty($data['express_number'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">快递单号：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['express_number']); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- 自提模式下 - 取货码 -->
                    <?php if($data['order_model'] == 2 and in_array($data['status'], [2,3]) and !empty($data['extraction_data'])): ?>
                        <hr data-am-widget="divider" class="am-divider am-divider-dashed" />
                        <div class="extraction-take-container">
                            <p>
                                <span>取货码：</span>
                                <?php if(empty($data['extraction_data']['code'])): ?>
                                    <span class="am-text-danger">取货码不存在、请联系管理员</span>
                                <?php else: ?>
                                    <span class="am-badge am-badge-success am-radius"><?php echo htmlentities($data['extraction_data']['code']); ?></span>
                                <?php endif; ?>
                            </p>
                            <?php if(!empty($data['extraction_data']['images'])): ?>
                                <p class="am-margin-top-xs">
                                    <img class="qrcode-images am-img-thumbnail" src="<?php echo htmlentities($data['extraction_data']['images']); ?>" alt="取货码" width="150" height="150" />
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- 用户订单详情基础信息底部-开始 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_user_order_detail_base_bottom</span>
                </div>
            <?php endif; 
                $hook_name = 'plugins_view_user_order_detail_base_bottom';
                $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$data]);
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
            <!-- 用户订单详情基础信息底部-结束 -->

            <!-- 地址 -->
            <?php if(in_array($data['order_model'], [0, 2]) and !empty($data['address_data'])): ?>
                <div class="am-panel am-panel-default business-panel">
                    <div class="am-panel-hd"><?php if($data['order_model'] == 2): ?>取货地址<?php else: ?>收货地址<?php endif; ?></div>
                    <div class="am-panel-bd">
                        <div>
                            <?php if(!empty($data['address_data']['alias'])): ?>
                                <span class="am-badge am-badge-secondary-plain am-radius"><?php echo htmlentities($data['address_data']['alias']); ?></span>
                            <?php endif; ?>
                            <span><?php echo htmlentities($data['address_data']['name']); ?></span>
                            <span class="am-margin-left-sm"><?php echo htmlentities($data['address_data']['tel']); ?></span>
                        </div>
                        <div>
                            <span><?php echo htmlentities($data['address_data']['province_name']); ?> <?php echo htmlentities($data['address_data']['city_name']); ?> <?php echo htmlentities($data['address_data']['county_name']); ?> <?php echo htmlentities($data['address_data']['address']); ?></span>
                            <?php if(isset($data['address_data']['lng']) and isset($data['address_data']['lat']) and $data['address_data']['lng'] != 0 and $data['address_data']['lat'] != 0): ?>
                                <button type="button" class="am-btn am-btn-success am-radius am-icon-map-marker submit-map-popup" data-lng="<?php echo htmlentities($data['address_data']['lng']); ?>" data-lat="<?php echo htmlentities($data['address_data']['lat']); ?>"> 查看位置</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- 用户订单详情地址信息底部-开始 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_user_order_detail_address_bottom</span>
                </div>
            <?php endif; 
                $hook_name = 'plugins_view_user_order_detail_address_bottom';
                $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$data]);
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
            <!-- 用户订单详情地址信息底部-结束 -->

            <!-- 虚拟销售信息 -->
            <?php if($data['order_model'] == 3 and $data['pay_status'] == 1 and in_array($data['status'], [3,4])): ?>
                <div class="am-panel am-panel-secondary business-panel fictitious-panel-container">
                    <div class="am-panel-hd"><?php echo htmlentities($site_fictitious['title']); ?></div>
                    <div class="am-panel-bd am-padding-horizontal-0 am-padding-top-xs am-padding-bottom-xs">
                        <?php if(!empty($site_fictitious['tips'])): ?>
                            <div class="am-alert am-alert-warning am-margin-top-xs am-margin-bottom-0 am-margin-horizontal-sm" data-am-alert>
                                <?php echo $site_fictitious['tips']; ?>
                            </div>
                        <?php endif; if(!empty($data['items'])): ?>
                            <ul class="am-list am-margin-bottom-0">
                                <?php foreach($data['items'] as $goods): ?>
                                    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                        <div class="am-u-sm-2 am-u-md-1 am-list-thumb">
                                            <img src="<?php echo htmlentities($goods['images']); ?>" alt="<?php echo htmlentities($goods['title']); ?>" class="am-img-thumbnail am-radius" />
                                        </div>
                                        <div class="am-u-sm-10 am-u-md-11 am-list-item-text">
                                            <?php if(empty($goods['fictitious_goods_value'])): ?>
                                                <span>未配置数据</span>
                                            <?php else: ?>
                                                <?php echo $goods['fictitious_goods_value']; ?>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <div class="table-no"><i class="am-icon-warning"></i> 没有订单商品数据</div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- 用户订单详情虚拟信息底部-开始 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_user_order_detail_fictitious_bottom</span>
                </div>
            <?php endif; 
                $hook_name = 'plugins_view_user_order_detail_fictitious_bottom';
                $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$data]);
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
            <!-- 用户订单详情虚拟信息底部-结束 -->

            <!-- 商品列表 -->
            <?php if(!empty($data['items'])): ?>
                <div class="order-goods am-margin-top-sm">
                    <table class="am-table am-table-centered">
                        <thead>
                            <tr>
                                <th>商品信息</th>
                                <th class="am-hide-sm-only">单价</th>
                                <th class="am-hide-sm-only">数量</th>
                                <th class="am-hide-sm-only">金额</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['items'] as $goods): ?>
                                <tr>
                                    <td>
                                        <div class="am-nbfc am-text-left">
                                            <a href="<?php echo htmlentities($goods['goods_url']); ?>" target="_blank">
                                                <img src="<?php echo htmlentities($goods['images']); ?>" class="am-img-thumbnail am-radius am-margin-right-xs am-fl" width="60" height="60" />
                                            </a>
                                            <div class="am-nbfc">
                                                <a href="<?php echo htmlentities($goods['goods_url']); ?>" target="_blank" class="am-nowrap-initial"><?php echo htmlentities($goods['title']); ?></a>
                                                <?php if(!empty($goods['spec'])): ?>
                                                    <ul class="goods-spec am-margin-top-xs">
                                                        <?php foreach($goods['spec'] as $spec): ?>
                                                            <li><?php echo htmlentities($spec['type']); ?>：<?php echo htmlentities($spec['value']); ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="wap-base am-show-sm-only">
                                            <?php if($goods['original_price'] > 0): ?>
                                                <span class="original-price"><?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($goods['original_price']); ?></span>
                                            <?php endif; ?>
                                            <span class="price">
                                                <strong><?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($goods['price']); ?></strong>
                                            </span>
                                            <span class="wap-number">x<?php echo htmlentities($goods['buy_number']); ?></span>
                                            <?php if(isset($goods['returned_quantity']) and $goods['returned_quantity'] > 0): ?>
                                                <span class="am-badge am-round am-badge-warning-plain">已退 <?php echo htmlentities($goods['returned_quantity']); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td class="price am-hide-sm-only">
                                        <?php if($goods['original_price'] > 0): ?>
                                            <p class="original-price"><?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($goods['original_price']); ?></p>
                                        <?php endif; ?>
                                        <p class="line-price"><?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($goods['price']); ?></p>
                                    </td>
                                    <td class="number am-hide-sm-only">
                                        <span>x<?php echo htmlentities($goods['buy_number']); ?></span>
                                        <?php if(isset($goods['returned_quantity']) and $goods['returned_quantity'] > 0): ?>
                                            <br /><span class="am-badge am-round am-badge-warning-plain">已退 <?php echo htmlentities($goods['returned_quantity']); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="price am-hide-sm-only">
                                        <strong class="total-price-content"><?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($goods['total_price']); ?></strong>
                                        <?php if(isset($goods['refund_price']) and $goods['refund_price'] > 0): ?>
                                            <br /><span class="am-badge am-round am-badge-warning-plain">已退 <?php echo htmlentities($goods['refund_price']); ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- 用户订单详情商品信息底部-开始 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_user_order_detail_goods_inside_bottom</span>
                    </div>
                <?php endif; 
                    $hook_name = 'plugins_view_user_order_detail_goods_inside_bottom';
                    $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$data]);
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
                <!-- 用户订单详情商品信息底部-结束 -->

                <?php if(!empty($data['extension_data'])): ?>
                    <div class="am-alert am-alert-warning">
                        <?php foreach($data['extension_data'] as $ertk=>$ext): ?>
                            <div class="items am-cf">
                                <div class="items-title am-fl"><?php echo htmlentities($ext['name']); ?>：</div>
                                <div class="items-detail am-fl"><?php echo htmlentities($ext['tips']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="am-alert am-alert-secondary">
                  <?php if(!empty($data['price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">商品总价：</div>
                            <div class="items-detail am-fl"><?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($data['price']); ?></div>
                        </div>
                    <?php endif; if(!empty($data['increase_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">增加金额：</div>
                            <div class="items-detail am-fl">+<?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($data['increase_price']); ?></div>
                        </div>
                    <?php endif; if(!empty($data['preferential_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">优惠金额：</div>
                            <div class="items-detail am-fl">-<?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($data['preferential_price']); ?></div>
                        </div>
                    <?php endif; if(!empty($data['refund_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">退款金额：</div>
                            <div class="items-detail am-fl">
                                <span class="am-text-danger">-<?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($data['refund_price']); ?></span>
                            </div>
                        </div>
                    <?php endif; if(!empty($data['total_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">订单总价：</div>
                            <div class="items-detail am-fl line-price"><?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($data['total_price']); ?></div>
                        </div>
                    <?php endif; if(!empty($data['pay_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">支付金额：</div>
                            <div class="items-detail am-fl">
                                <strong class="total-price-content"><?php echo htmlentities($data['currency_data']['currency_symbol']); ?><?php echo htmlentities($data['pay_price']); ?></strong>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- 用户订单详情商品信息底部-开始 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_user_order_detail_goods_bottom</span>
                </div>
            <?php endif; 
                $hook_name = 'plugins_view_user_order_detail_goods_bottom';
                $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$data]);
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
            <!-- 用户订单详情商品信息底部-结束 -->
        </div>

        <!-- 支付弹窗 -->
        <div class="am-popup am-radius" id="order-pay-popup" data-is-auto="<?php if(isset($params['is_pay_auto']) and $params['is_pay_auto'] == 1): ?>1<?php else: ?>0<?php endif; ?>" data-is-pay="<?php if(isset($params['is_pay_submit']) and $params['is_pay_submit'] == 1): ?>1<?php else: ?>0<?php endif; ?>">
    <div class="am-popup-inner">
        <div class="am-popup-hd">
            <h4 class="am-popup-title">支付</h4>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd">
            <form class="am-form pay-form" method="post" action="<?php echo MyUrl('index/order/pay'); ?>">
                <!-- 支付方式 -->
                <div class="business-item">
                    <h3>选择支付</h3>
                    <?php if(!empty($buy_payment_list)): ?>
                        <ul class="payment-list" data-type="payment">
                            <?php foreach($buy_payment_list as $payment): ?>
                                <li class="payment-items-<?php echo htmlentities($payment['id']); ?>" data-value="<?php echo htmlentities($payment['id']); ?>">
                                    <?php if(!empty($payment['logo'])): ?>
                                        <img src="<?php echo htmlentities($payment['logo']); ?>" />
                                    <?php endif; ?>
                                    <span><?php echo htmlentities($payment['name']); ?></span>
                                    <i class="icon-active"></i>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; if(empty($buy_payment_list)): ?>
                        <div class="table-no"><i class="am-icon-warning"></i> 没有支付方式</div>
                    <?php endif; ?>
                </div>
                <div class="am-form-group am-form-group-refreshing">
                    <input type="hidden" name="ids" value="<?php if(!empty($pay_params['order_ids'])): ?><?php echo htmlentities($pay_params['order_ids']); ?><?php endif; ?>" />
                    <input type="hidden" name="payment_id" value="<?php if(!empty($pay_params['payment_id'])): ?><?php echo htmlentities($pay_params['payment_id']); ?><?php endif; ?>" />
                    <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认支付</button>
                </div>
            </form>
        </div>
    </div>
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