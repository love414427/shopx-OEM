<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2099 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://opensource.org/licenses/mit-license.php )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------
namespace app\admin\controller;

use app\service\DesignService;
use app\service\GoodsService;
use app\service\BrandService;
use app\service\StoreService;
use app\layout\service\BaseLayout;

/**
 * 页面设计管理
 * @author  Devil
 * @blog    http://gong.gg/
 * @version 1.0.0
 * @date    2020-09-10
 * @desc    description
 */
class Design extends Common
{
    /**
     * 构造方法
     * @author   Devil
     * @blog     http://gong.gg/
     * @version  0.0.1
     * @datetime 2016-12-03T12:39:08+0800
     */
    public function __construct()
    {
        // 调用父类前置方法
        parent::__construct();

        // 登录校验
        $this->IsLogin();

        // 权限校验
        $this->IsPower();
    }

    /**
     * 首页
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2020-09-10
     * @desc    description
     */
    public function Index()
    {
        // 应用商店
        MyViewAssign('store_design_url', StoreService::StoreDesignUrl());

        return MyView();
    }

    /**
     * 编辑页面
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2020-09-10
     * @desc    description
     */
    public function SaveInfo()
    {
        // 数据
        $data = $this->data_detail;
        if(empty($data))
        {
            $ret = DesignService::DesignSave();
            if($ret['code'] == 0)
            {
                return MyRedirect(MyUrl('admin/design/saveinfo', ['id'=>$ret['data']]));
            } else {
                MyViewAssign('msg', $ret['msg']);
                return MyView('public/tips_error');
            }
        }

        // 配置处理
        $layout_data = BaseLayout::ConfigAdminHandle($data['config']);
        unset($data['config']);
        MyViewAssign('layout_data', $layout_data);
        MyViewAssign('data', $data);

        // 页面列表
        $pages_list = BaseLayout::PagesList();
        MyViewAssign('pages_list', $pages_list);

        // 商品分类
        $goods_category = GoodsService::GoodsCategoryAll();
        MyViewAssign('goods_category_list', $goods_category);

        // 商品搜索分类（分类）
        MyViewAssign('layout_goods_category', $goods_category);
        MyViewAssign('layout_goods_category_field', 'gci.category_id');

        // 品牌
        MyViewAssign('brand_list', BrandService::CategoryBrand());

        // 静态数据
        MyViewAssign('border_style_type_list', BaseLayout::$border_style_type_list);
        MyViewAssign('goods_view_list_show_style', BaseLayout::$goods_view_list_show_style);
        MyViewAssign('many_images_view_list_show_style', BaseLayout::$many_images_view_list_show_style);

        // 首页商品排序规则
        MyViewAssign('goods_order_by_type_list', MyConst('goods_order_by_type_list'));
        MyViewAssign('goods_order_by_rule_list', MyConst('goods_order_by_rule_list'));

        // 加载布局样式+管理
        MyViewAssign('is_load_layout', 1);
        MyViewAssign('is_load_layout_admin', 1);

        // 编辑器文件存放地址定义
        MyViewAssign('editor_path_type', DesignService::AttachmentPathTypeValue($data['id']));
        return MyView();
    }

    /**
     * 下载
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2022-04-17
     * @desc    description
     */
    public function Download()
    {
        // 是否有权限
        if(!AdminIsPower())
        {
            return $this->error('无权限');
        }

        // 下载数据
        $ret = DesignService::DesignDownload($this->data_request);
        if(isset($ret['code']) && $ret['code'] != 0)
        {
            MyViewAssign('msg', $ret['msg']);
            return MyView('public/tips_error');
        }
    }

    /**
     * 保存
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2020-09-29
     * @desc    description
     */
    public function Save()
    {
        // 是否ajax请求
        if(!IS_AJAX)
        {
            return $this->error('非法访问');
        }

        // 开始处理
        return DesignService::DesignSave($this->data_post);
    }

    /**
     * 状态更新
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2021-03-31
     * @desc    description
     */
    public function StatusUpdate()
    {
        // 是否ajax
        if(!IS_AJAX)
        {
            return $this->error('非法访问');
        }

        // 开始操作
        return DesignService::DesignStatusUpdate($this->data_post);
    }
    
    /**
     * 删除
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2021-03-31
     * @desc    description
     */
    public function Delete()
    {
        // 是否ajax
        if(!IS_AJAX)
        {
            return $this->error('非法访问');
        }

        // 开始操作
        return DesignService::DesignDelete($this->data_post);
    }

    /**
     * 同步到首页
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2022-04-19
     * @desc    description
     */
    public function Sync()
    {
        // 是否ajax请求
        if(!IS_AJAX)
        {
            $this->error('非法访问');
        }

        // 开始操作
        return DesignService::DesignSync($this->data_post);
    }

    /**
     * 导入
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2022-04-19
     * @desc    description
     */
    public function Upload()
    {
        // 是否ajax请求
        if(!IS_AJAX)
        {
            $this->error('非法访问');
        }

        // 开始操作
        return DesignService::DesignUpload($this->data_request);
    }
}
?>