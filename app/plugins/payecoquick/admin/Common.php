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
namespace app\plugins\payecoquick\admin;

use app\plugins\payecoquick\service\BaseService;

/**
 * 易联快捷支付 - 公共
 * @author  Devil
 * @blog    http://gong.gg/
 * @version 1.0.0
 * @date    2019-08-12
 * @desc    description
 */
class Common
{
    // 插件配置信息
    protected $plugins_config;

    /**
     * 构造方法
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2019-08-12
     * @desc    description
     */
    public function __construct($params = [])
    {
        // 参数赋值属性
        foreach($params as $k=>$v)
        {
            $this->$k = $v;
        }

        // 插件配置信息
        $base = BaseService::BaseConfig();
        $this->plugins_config = $base['data'];
    }
}
?>