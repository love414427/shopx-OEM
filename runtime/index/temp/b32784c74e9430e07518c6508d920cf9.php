<?php /*a:10:{s:68:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/buy/index.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header.html";i:1660808542;s:80:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header_top_nav.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/nav_search.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/header_nav.html";i:1660808542;s:80:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/goods_category.html";i:1660808542;s:74:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/not_data.html";i:1660808542;s:72:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/footer.html";i:1660808542;s:76:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/footer_nav.html";i:1663332220;s:71:"/home/wwwroot/chunguimaoyi.com/app/index/view/default/public/quick.html";i:1660808542;}*/ ?>
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

<!-- 订单确认页面顶部钩子-开始 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_view_buy_top</span>
    </div>
<?php endif; if(!empty($plugins_view_buy_top_data) and is_array($plugins_view_buy_top_data)): foreach($plugins_view_buy_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<!-- 订单确认页面顶部钩子-结束 -->

<!-- content -->
<div class="am-container">
    <div class="link-list">
        <!-- 订单确认页面内部顶部钩子-开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_buy_inside_top</span>
            </div>
        <?php endif; if(!empty($plugins_view_buy_inside_top_data) and is_array($plugins_view_buy_inside_top_data)): foreach($plugins_view_buy_inside_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- 订单确认页面内部顶部钩子-结束 -->

        <!-- 销售+自提 -->
        <?php if($common_site_type == 4): ?>
            <div data-am-widget="tabs" class="am-tabs am-tabs-d2 buy-header-nav">
                <ul class="am-tabs-nav am-cf">
                    <li <?php if(isset($base['site_model']) and $base['site_model'] == 0): ?>class="am-active"<?php endif; ?>><a href="javascript:;" data-value="0">快递邮寄</a></li>
                    <li <?php if(isset($base['site_model']) and $base['site_model'] == 2): ?>class="am-active"<?php endif; ?>><a href="javascript:;" data-value="2">自提点取货</a></li>
                </ul>
            </div>
        <?php endif; ?>

        <!-- 快递 - 用户地址 -->
        <?php if(isset($base['site_model']) and $base['site_model'] == 0): ?>
            <div class="address user-address-container">
                <div class="control">
                    <h3>
                        确认收货地址
                        <button type="button" class="am-close am-fr mobile-address-close-submit">&times;</button>
                    </h3>
                    <?php if(!empty($user_address_list)): ?>
                        <button class="am-btn am-btn-primary am-btn-xs address-submit-save" type="button" data-url="<?php echo MyUrl('index/useraddress/saveinfo'); ?>" data-popup-title="新增地址">使用新地址</button>
                    <?php endif; ?>
                </div>
                <?php if(!empty($user_address_list)): ?>
                    <ul class="address-list">
                        <?php foreach($user_address_list as $address): ?>
                            <li class="<?php if((isset($params['address_id']) and $params['address_id'] == $address['id']) or (!isset($params['address_id']) and isset($address['is_default']) and $address['is_default'] == 1) or (count($user_address_list) == 1)): ?>address-default<?php endif; ?>" id="data-list-<?php echo htmlentities($address['id']); ?>" data-value="<?php echo htmlentities($address['id']); ?>">
                                <div class="address-left">
                                    <div class="user-base">
                                        <?php if(!empty($address['alias'])): ?>
                                            <span class="am-badge am-badge-secondary-plain am-radius"><?php echo htmlentities($address['alias']); ?></span>
                                        <?php endif; if(isset($address['is_default']) and $address['is_default'] == 1): ?>
                                            <span class="am-badge am-badge-success-plain am-radius">默认</span>
                                        <?php endif; ?>
                                        <span class="address-detail">   
                                            <span class="user"><?php echo htmlentities($address['name']); ?></span>
                                            <span class="phone"><?php echo htmlentities($address['tel']); ?></span>
                                        </span>
                                    </div>
                                    <div class="region">
                                        <span class="province"><?php echo htmlentities($address['province_name']); ?></span>
                                        <span class="city"><?php echo htmlentities($address['city_name']); ?></span>
                                        <span class="dist"><?php echo htmlentities($address['county_name']); ?></span>
                                        <span class="street"><?php echo htmlentities($address['address']); ?></span>
                                    </div>
                                </div>
                                <div class="address-right">
                                    <span class="am-icon-angle-right am-icon-md"></span>
                                </div>
                                <div class="address-operation-btn">
                                    <?php if(isset($address['is_default']) and $address['is_default'] != 1): ?>
                                        <a href="javascript:;" class="am-icon-check-circle-o address-default-submit" data-url="<?php echo MyUrl('index/useraddress/setdefault'); ?>" data-id="<?php echo htmlentities($address['id']); ?>" data-view="reload"> 设为默认</a>
                                        <span class="cut">|</span>
                                    <?php endif; ?>
                                    <a href="javascript:;" class="am-icon-edit address-submit-save" data-url="<?php echo MyUrl('index/useraddress/saveinfo', ['id'=>$address['id']]); ?>" data-popup-title="编辑地址"> 编辑</a>
                                    <span class="cut">|</span>
                                    <a href="javascript:;" class="am-icon-trash-o address-submit-delete" data-url="<?php echo MyUrl('index/useraddress/delete'); ?>" data-id="<?php echo htmlentities($address['id']); ?>"> 删除</a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <div class="table-no">
                        <i class="am-icon-warning"></i>
                        <span>没有地址</span>
                        <button class="am-btn am-btn-secondary am-btn-xs am-margin-left-sm address-submit-save" type="button" data-url="<?php echo MyUrl('index/useraddress/saveinfo'); ?>" data-popup-title="新增地址">使用新地址</button>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- 自提点 - 自提地址 -->
        <?php if(isset($base['site_model']) and $base['site_model'] == 2): ?>
            <div class="address extraction-address-container">
                <div class="control">
                    <h3>确认自提点地址</h3>
                    <?php if(!empty($base['address'])): ?>
                        <button type="button" class="am-btn am-btn-default am-btn-secondary am-radius" data-am-modal="{target: '#extraction-address-popup'}">选择取货地址</button>
                    <?php endif; ?>
                </div>
                <?php if(empty($base['extraction_address'])): ?>
                    <p class="am-text-danger am-text-center am-margin-top-lg">请联系管理员配置自提点地址</p>
                <?php else: ?>
                    <!-- 选中地址 -->
                    <?php if(!empty($base['address'])): ?>
                        <div class="am-panel am-panel-default extraction-default">
                            <div class="am-panel-bd extraction-address-item am-cf am-vertical-align">
                                <div class="first-icon am-fl am-vertical-align-middle">
                                    <i class="am-icon-map-marker"></i>
                                </div>
                                <div class="am-fl am-vertical-align-middle">
                                    <p>
                                        <?php if(!empty($base['address']['alias'])): ?>
                                            <span class="am-badge am-badge-secondary-plain am-radius am-margin-right-xs"><?php echo htmlentities($base['address']['alias']); ?></span>
                                        <?php endif; ?>
                                        <span><?php echo htmlentities($base['address']['name']); ?></span>
                                        <span><?php echo htmlentities($base['address']['tel']); ?></span>
                                    </p>
                                    <p class="address-detail">
                                        <span><?php echo htmlentities($base['address']['province_name']); ?></span>
                                        <span><?php echo htmlentities($base['address']['city_name']); ?></span>
                                        <span><?php echo htmlentities($base['address']['county_name']); ?></span>
                                        <span><?php echo htmlentities($base['address']['address']); ?></span>
                                    </p>
                                </div>
                                <div class="address-right">
                                    <span class="am-icon-angle-right am-icon-md"></span>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="table-no">
                            <i class="am-icon-warning"></i>
                            <span>没有地址</span>
                            <button type="button" class="am-btn am-btn-default am-btn-secondary am-radius am-margin-left-sm" data-am-modal="{target: '#extraction-address-popup'}">选择取货地址</button>
                        </div>
                    <?php endif; ?>

                    <!-- 自提地址选择弹层 -->
                    <div class="am-popup" id="extraction-address-popup">
                        <div class="am-popup-inner">
                            <div class="am-popup-hd">
                              <h4 class="am-popup-title">自提点选择</h4>
                              <span class="am-close" data-am-modal-close>&times;</span>
                            </div>
                            <div class="am-popup-bd">
                                <ul class="am-list">
                                    <?php foreach($base['extraction_address'] as $key=>$address): ?>
                                        <li class="extraction-address-item am-nbfc" data-value="<?php echo htmlentities($key); ?>">
                                            <?php if(!empty($address['logo'])): ?>
                                                <div class="am-fl am-margin-right-xs">
                                                    <img src="<?php echo htmlentities($address['logo']); ?>" alt="<?php echo htmlentities($address['name']); ?>" class="am-img-thumbnail am-radius address-logo" />
                                                </div>
                                            <?php endif; ?>
                                            <div class="am-fl">
                                                <p>
                                                    <?php if(!empty($address['alias'])): ?>
                                                        <span class="am-badge am-badge-secondary-plain am-radius am-margin-right-xs"><?php echo htmlentities($address['alias']); ?></span>
                                                    <?php endif; ?>
                                                    <span><?php echo htmlentities($address['name']); ?></span>
                                                    <span><?php echo htmlentities($address['tel']); ?></span>
                                                </p>
                                                <p class="address-detail">
                                                    <span><?php echo htmlentities($address['province_name']); ?></span>
                                                    <span><?php echo htmlentities($address['city_name']); ?></span>
                                                    <span><?php echo htmlentities($address['county_name']); ?></span>
                                                    <span><?php echo htmlentities($address['address']); ?></span>
                                                    <?php if(isset($address['lng']) and isset($address['lat']) and $address['lng'] != 0 and $address['lat'] != 0): ?>
                                                        <a href="javascript:;" class="am-badge am-badge-default am-radius am-icon-map-marker am-margin-left-sm submit-map-popup" data-lng="<?php echo htmlentities($address['lng']); ?>" data-lat="<?php echo htmlentities($address['lat']); ?>"> 查看地图</a>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                            <?php if((isset($params['address_id']) and $params['address_id'] == $key) or (!empty($base['address']) and $base['address']['id'] == $key)): ?>
                                                <button type="button" class="am-btn am-btn-default am-radius" disabled>已选</button>
                                            <?php else: ?>
                                                <button type="button" class="am-btn am-btn-default am-radius" data-value="<?php echo htmlentities($key); ?>">选择</button>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- 订单确认页面地址底部钩子-开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_buy_address_bottom</span>
            </div>
        <?php endif; if(!empty($plugins_view_buy_address_bottom_data) and is_array($plugins_view_buy_address_bottom_data)): foreach($plugins_view_buy_address_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- 订单确认页面地址底部钩子-结束 -->

        <!-- 商品分组订单信息 -->
        <div class="buy-items">
            <h3>订单信息</h3>
            <?php if(!empty($buy_goods)): ?>
                <div class="goods-group-list">
                    <?php foreach($buy_goods as $v): ?>
                        <div class="am-panel am-panel-default am-margin-top-sm am-margin-bottom-0">
                            <div class="am-panel-hd">
                                <!-- 分组导航内部开始钩子-开始 -->
                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                    <div class="plugins-tag">
                                        <span>plugins_view_buy_group_nav_inside_begin</span>
                                    </div>
                                <?php endif; 
                                    $hook_name = 'plugins_view_buy_group_nav_inside_begin';
                                    $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$v]);
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
                                <!-- 分组导航内部开始钩子-结束 -->

                                <!-- 仓库信息 -->
                                <span class="warehouse-item-container">
                                    <?php if(!empty($v['icon'])): if(IsUrl($v['icon'])): ?>
                                            <img src="<?php echo htmlentities($v['icon']); ?>" alt="<?php echo htmlentities($v['name']); ?>" class="warehouse-icon" />
                                        <?php else: ?>
                                            <i class="<?php echo htmlentities($v['icon']); ?>"></i>
                                        <?php endif; ?>
                                    <?php endif; if(empty($v['url'])): ?>
                                        <strong class="warehouse-name"><?php echo htmlentities($v['name']); ?></strong>
                                    <?php else: ?>
                                        <a href="<?php echo htmlentities($v['url']); ?>" target="_blank" class="text-deco-none">
                                            <strong class="warehouse-name"><?php echo htmlentities($v['name']); ?></strong>
                                        </a>
                                    <?php endif; if(!empty($v['alias'])): ?><span class="am-badge am-badge-secondary-plain am-radius am-margin-left-xs"><?php echo htmlentities($v['alias']); ?></span><?php endif; ?>
                                </span>

                                <!-- 分组导航内部中间钩子-开始 -->
                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                    <div class="plugins-tag">
                                        <span>plugins_view_buy_group_nav_inside_middle</span>
                                    </div>
                                <?php endif; 
                                    $hook_name = 'plugins_view_buy_group_nav_inside_middle';
                                    $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$v]);
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
                                <!-- 分组导航内部中间钩子-结束 -->

                                <!-- 地理位置 -->
                                <?php if(isset($v['lng']) and isset($v['lat']) and $v['lng'] != 0 and $v['lat'] != 0): ?>
                                    <div class="am-fr">
                                        <a href="javascript:;" class="am-badge am-badge-default am-radius am-icon-map-marker submit-map-popup" data-lng="<?php echo htmlentities($v['lng']); ?>" data-lat="<?php echo htmlentities($v['lat']); ?>"> 查看地图</a>
                                    </div>
                                <?php endif; ?>

                                <!-- 分组导航内部结束钩子-开始 -->
                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                    <div class="plugins-tag">
                                        <span>plugins_view_buy_group_nav_inside_end</span>
                                    </div>
                                <?php endif; 
                                    $hook_name = 'plugins_view_buy_group_nav_inside_end';
                                    $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$v]);
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
                                <!-- 分组导航内部结束钩子-结束 -->
                            </div>
                            <div class="am-panel-bd">
                                <!-- 分组商品顶部钩子-开始 -->
                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                    <div class="plugins-tag">
                                        <span>plugins_view_buy_group_goods_inside_top</span>
                                    </div>
                                <?php endif; 
                                    $hook_name = 'plugins_view_buy_group_goods_inside_top';
                                    $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$v]);
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
                                <!-- 分组商品顶部钩子-结束 -->

                                <!-- 商品明细 -->
                                <?php if(!empty($v['goods_items'])): ?>
                                    <table class="am-table">
                                        <thead>
                                            <tr>
                                                <th>商品信息</th>
                                                <th class="am-hide-sm-only">单价</th>
                                                <th class="am-hide-sm-only">数量</th>
                                                <th class="am-hide-sm-only">金额</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($v['goods_items'] as $goods): ?>
                                                <tr id="data-list-<?php echo htmlentities($goods['id']); ?>" data-id="<?php echo htmlentities($goods['id']); ?>" data-goods-id="<?php echo htmlentities($goods['goods_id']); ?>">
                                                    <td class="base">
                                                        <!-- 分组商品详情基础顶部钩子-开始 -->
                                                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                                            <div class="plugins-tag">
                                                                <span>plugins_view_buy_group_goods_base_top</span>
                                                            </div>
                                                        <?php endif; 
                                                            $hook_name = 'plugins_view_buy_group_goods_base_top';
                                                            $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$goods]);
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
                                                        <!-- 分组商品详情基础顶部钩子-结束 -->
                                                        <div class="goods-detail">
                                                            <a href="<?php echo htmlentities($goods['goods_url']); ?>" target="_blank">
                                                                <img src="<?php echo htmlentities($goods['images']); ?>">
                                                            </a>
                                                            <div class="goods-base">
                                                                <a href="<?php echo htmlentities($goods['goods_url']); ?>" target="_blank" class="goods-title"><?php echo htmlentities($goods['title']); ?></a>
                                                                <?php if(!empty($goods['spec'])): ?>
                                                                    <ul class="goods-attr">
                                                                        <?php foreach($goods['spec'] as $spec): ?>
                                                                            <li><?php echo htmlentities($spec['type']); ?>：<?php echo htmlentities($spec['value']); ?></li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="wap-base am-show-sm-only">
                                                            <?php if($goods['original_price'] > 0): ?>
                                                                <span class="original-price"><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($goods['original_price']); ?></span>
                                                            <?php endif; ?>
                                                            <strong class="total-price-content"><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($goods['price']); ?></strong>
                                                            <span class="wap-number">x<?php echo htmlentities($goods['stock']); ?></span>
                                                        </div>
                                                        <!-- 分组商品详情基础底部钩子-开始 -->
                                                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                                            <div class="plugins-tag">
                                                                <span>plugins_view_buy_group_goods_base_bottom</span>
                                                            </div>
                                                        <?php endif; 
                                                            $hook_name = 'plugins_view_buy_group_goods_base_bottom';
                                                            $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$goods]);
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
                                                        <!-- 分组商品详情基础底部钩子-结束 -->
                                                    </td>
                                                    <td class="price am-hide-sm-only">
                                                        <?php if($goods['original_price'] > 0): ?>
                                                            <p class="original-price"><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($goods['original_price']); ?></p>
                                                        <?php endif; ?>
                                                        <p class="line-price"><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($goods['price']); ?></p>
                                                    </td>
                                                    <td class="number am-hide-sm-only">
                                                        <?php echo htmlentities($goods['stock']); ?> <?php echo htmlentities($goods['inventory_unit']); ?>
                                                    </td>
                                                    <td class="total-price am-hide-sm-only">
                                                        <span><?php echo htmlentities($currency_symbol); ?></span><strong class="total-price-content"><?php echo htmlentities($goods['total_price']); ?></strong>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <div class="table-no"><i class="am-icon-warning"></i> 没有商品</div>
                                <?php endif; ?>

                                <!-- 商品分割线 -->
                                <hr data-am-widget="divider" class="am-divider am-divider-dashed" />

                                <!-- 分组商品底部钩子-开始 -->
                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                    <div class="plugins-tag">
                                        <span>plugins_view_buy_group_goods_inside_bottom</span>
                                    </div>
                                <?php endif; 
                                    $hook_name = 'plugins_view_buy_group_goods_inside_bottom';
                                    $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$v, 'params'=>$params]);
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
                                <!-- 分组商品底部钩子-结束 -->

                                <!-- 扩展展示数据 -->
                                <?php if(!empty($v['order_base']['extension_data'])): ?>
                                    <ul class="buy-extension-data am-padding-xs am-margin-bottom-sm">
                                        <?php foreach($v['order_base']['extension_data'] as $ext): ?>
                                            <li>
                                                <span class="extension-items-name"><?php echo htmlentities($ext['name']); ?></span>
                                                <span class="am-fr extension-items-tips"><?php echo htmlentities($ext['tips']); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <!-- 含运费小计 -->
                                <div class="buy-point-discharge am-text-right">
                                    <?php if($v['order_base']['total_price'] != $v['order_base']['actual_price']): ?>
                                        <span class="original-price am-margin-right-xs"><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($v['order_base']['total_price']); ?></span>
                                    <?php endif; ?>
                                    <span>
                                        合计 <span class="price"><span><?php echo htmlentities($currency_symbol); ?></span><strong class="total-price-content line-price am-text-sm"><?php echo htmlentities($v['order_base']['actual_price']); ?></strong></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="table-no"><i class="am-icon-warning"></i> 没有商品</div>
            <?php endif; ?>
        </div>

        <!-- 订单确认页面分组商品底部钩子-开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_buy_group_goods_bottom</span>
            </div>
        <?php endif; if(!empty($plugins_view_buy_group_goods_bottom_data) and is_array($plugins_view_buy_group_goods_bottom_data)): foreach($plugins_view_buy_group_goods_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- 订单确认页面分组商品底部钩子-结束 -->

        <!-- 支付方式 -->
        <?php if($base['actual_price'] > 0 and $common_order_is_booking != 1): ?>
            <div class="buy-items business-item payment" data-field="payment_id">
                <h3>选择支付</h3>
                <?php if(!empty($payment_list)): ?>
                    <ul class="payment-list">
                        <?php foreach($payment_list as $payment): ?>
                            <li data-value="<?php echo htmlentities($payment['id']); ?>" class="<?php if(isset($params['payment_id']) and $params['payment_id'] == $payment['id']): ?>selected<?php endif; ?>">
                                <?php if(!empty($payment['logo'])): ?>
                                    <img src="<?php echo htmlentities($payment['logo']); ?>" />
                                <?php endif; ?>
                                <span><?php echo htmlentities($payment['name']); ?></span>
                                <i class="icon-active"></i>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; if(empty($payment_list)): ?>
                    <div class="table-no"><i class="am-icon-warning"></i> 没有支付方式</div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- 订单确认页面支付方式底部钩子-开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_buy_payment_bottom</span>
            </div>
        <?php endif; if(!empty($plugins_view_buy_payment_bottom_data) and is_array($plugins_view_buy_payment_bottom_data)): foreach($plugins_view_buy_payment_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- 订单确认页面支付方式底部钩子-结束 -->
        
        <!-- 留言 -->
        <div class="buy-message am-margin-top-sm">
            <div class="order-extra">
                <label>买家留言</label>
                <input type="text" class="memo-input" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" />
            </div>
        </div>

        <!-- 订单确认页面用户留言底部钩子-开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_buy_user_note_bottom</span>
            </div>
        <?php endif; if(!empty($plugins_view_buy_user_note_bottom_data) and is_array($plugins_view_buy_user_note_bottom_data)): foreach($plugins_view_buy_user_note_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- 订单确认页面用户留言底部钩子-结束 -->

        <!-- 订单确认页面订单确认信息顶部钩子-开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_buy_base_confirm_top</span>
            </div>
        <?php endif; if(!empty($plugins_view_buy_base_confirm_top_data) and is_array($plugins_view_buy_base_confirm_top_data)): foreach($plugins_view_buy_base_confirm_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- 订单确认页面订单确认信息顶部钩子-结束 -->

        <!-- 基础信息 -->
        <div class="order-nav">
            <div class="pay-confirm">
                <div class="box">
                    <div class="base-real-pay">
                        <em>实付款 :</em>
                        <span class="price">
                            <span><?php echo htmlentities($currency_symbol); ?></span><strong class="nav-total-price"><?php echo htmlentities($base['actual_price']); ?></strong>
                        </span>
                    </div>

                    <!-- 销售模式+自提模式 显示地址 -->
                    <?php if(in_array($common_site_type, [0,2,4]) and !empty($base['address'])): ?>
                        <div class="pay-address">
                            <div class="buy-footer-address">
                                <span class="buy-line-title">联系人 :</span> 
                                <span class="buy-user">
                                    <?php if(!empty($base['address'])): ?>
                                        <?php echo htmlentities($base['address']['name']); else: ?>
                                        ...
                                    <?php endif; ?>
                                </span>
                                <span class="buy-phone">
                                    <?php if(!empty($base['address'])): ?>
                                        <?php echo htmlentities($base['address']['tel']); else: ?>
                                        ...
                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="buy-footer-address">
                                <span class="buy-line-title buy-line-title-type">地址 :</span>
                                <span class="buy-address-detail">
                                    <?php if(!empty($base['address'])): ?>
                                        <?php echo htmlentities($base['address']['province_name']); ?> <?php echo htmlentities($base['address']['city_name']); ?> <?php echo htmlentities($base['address']['county_name']); ?> <?php echo htmlentities($base['address']['address']); else: ?>
                                        ...
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <form class="am-form form-validation nav-buy" action="<?php echo MyUrl('index/buy/add'); ?>" method="post" class="nav-buy" request-type="ajax-fun" request-value="BuySubmitBack" data-site-type="<?php echo htmlentities($common_site_type); ?>" data-base-actual-price="<?php echo htmlentities($base['actual_price']); ?>" data-is-booking="<?php echo htmlentities($common_order_is_booking); ?>">
                    <input type="hidden" name="goods_id" value="<?php if(isset($params['goods_id'])): ?><?php echo htmlentities($params['goods_id']); else: ?>0<?php endif; ?>" />
                    <input type="hidden" name="buy_type" value="<?php if(isset($params['buy_type'])): ?><?php echo htmlentities($params['buy_type']); else: ?>goods<?php endif; ?>" />
                    <input type="hidden" name="stock" value="<?php if(isset($params['stock'])): ?><?php echo htmlentities($params['stock']); else: ?>1<?php endif; ?>" />
                    <input type="hidden" name="spec" value='<?php if(isset($params['spec'])): ?><?php echo htmlentities($params['spec']); ?><?php endif; ?>' />
                    <input type="hidden" name="ids" value="<?php if(isset($params['ids'])): ?><?php echo htmlentities($params['ids']); ?><?php endif; ?>" />
                    <input type="hidden" name="address_id" value="<?php if(isset($base['address']) and isset($base['address']['id'])): ?><?php echo htmlentities($base['address']['id']); else: if(isset($params['address_id'])): ?><?php echo htmlentities($params['address_id']); else: ?>-1<?php endif; ?><?php endif; ?>" />
                    <input type="hidden" name="payment_id" value="<?php if(isset($params['payment_id'])): ?><?php echo htmlentities($params['payment_id']); else: ?>0<?php endif; ?>" />
                    <input type="hidden" name="user_note" value="" />
                    <input type="hidden" name="site_model" value="<?php if(isset($base['site_model'])): ?><?php echo htmlentities($base['site_model']); else: ?>0<?php endif; ?>" />
                    <!-- 订单确认页面提交订单表单内部钩子-开始 -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_buy_form_inside</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_buy_form_inside_data) and is_array($plugins_view_buy_form_inside_data)): foreach($plugins_view_buy_form_inside_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- 订单确认页面提交订单表单内部钩子-结束 -->
                    <div class="go-btn-wrap">
                        <button type="submit" class="btn-go btn-loading-example" title="点击此按钮，提交订单" data-am-loading="{loadingText:'处理中...'}">提交订单</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- 订单确认页面内部底部钩子-s开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_buy_inside_bottom</span>
            </div>
        <?php endif; if(!empty($plugins_view_buy_inside_bottom_data) and is_array($plugins_view_buy_inside_bottom_data)): foreach($plugins_view_buy_inside_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- 订单确认页面内部底部钩子-结束 -->
    </div>
</div>

<!-- 订单确认页面底部钩子-开始 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_view_buy_bottom</span>
    </div>
<?php endif; if(!empty($plugins_view_buy_bottom_data) and is_array($plugins_view_buy_bottom_data)): foreach($plugins_view_buy_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<!-- 订单确认页面底部钩子-结束 -->

<!-- 订单提交后提示弹层 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="buy-order-submit-modal">
    <div class="am-modal-dialog">
        <div class="am-modal-bd">
            <div class="content am-vertical-align-middle am-padding-vertical-sm">
                <p class="am-text-success">支付跳转中、请勿关闭页面</p>
                <p class="am-text-warning am-margin-top-lg">支付失败或长时间未响应</p>
                <p class="am-text-warning am-margin-xs">
                    <span>进入</span>
                    <a href="<?php echo MyUrl('index/order/index'); ?>" class="am-text-secondary">我的订单</a>
                    <span>后可以重新发起支付</span>
                </p>
            </div>
        </div>
    </div>
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

<script type="text/javascript">
// 提交订单回调
function BuySubmitBack(e)
{
    if(e.code == 0)
    {
        $('#buy-order-submit-modal').modal({
            closeViaDimmer: false,
            width: 280,
            height: 140
        });
        $.AMUI.progress.done();
        Prompt(e.msg, 'success');
        setTimeout(function()
        {
            window.location.href = e.data.jump_url;
        }, 1500);
    } else {
        $('form.form-validation').find('button[type="submit"]').button('reset');
        $.AMUI.progress.done();
        Prompt(e.msg);
    }
}
</script>