<?php

namespace Yangyifan\Administrator\Config\Library;

use Yangyifan\Administrator\Config\Model\ConfigModel;

class ConfigLibrary
{
    /**
     * 获取配置
     *
     * @param $key
     * @param string $default
     * @return mixed|string
     */
    public static function get($key, $default = '')
    {
        $value = ConfigModel::get($key);

        return !empty($value) ? $value : $default;
    }

    /**
     * 设置配置
     *
     * @param $name
     * @param $value
     * @return bool
     */
    public static function set($name, $value)
    {
        return ConfigModel::set($name, $value);
    }
}
