<?php

namespace Yangyifan\Administrator\Config\Controller;

use Yangyifan\Administrator\Config\Model\ConfigModel;
use Yangyifan\Controller\BaseController;
use Yangyifan\Controller\RestfulController;

class ConfigController extends BaseController
{
    use RestfulController;

    /**
     * 构造方法
     *
     * @description 方法说明
     * @author @author yangyifan <yangyifanphp@gmail.com>
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获得当前模型
     *
     * @return ConfigModel
     */
    public function getModel()
    {
        return new ConfigModel();
    }
}
