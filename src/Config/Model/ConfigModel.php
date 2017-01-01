<?php

namespace Yangyifan\Administrator\Config\Model;

use Yangyifan\Model\RestfulModelHelper;
use Yangyifan\Model\QueryModelHelper;

class ConfigModel extends BaseModel
{
    use RestfulModelHelper;
    use QueryModelHelper;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'config';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'value'];

    /**
     * 获得列表显示字段
     *
     * @return array
     */
    public static function getListColumns()
    {
        return [
            ['title' => '键', 'dataIndex' => 'name',],
            ['title' => '值', 'dataIndex' => 'value',],
        ];
    }

    /**
     * 获得配置
     *
     * @param $name
     * @return mixed
     */
    public static function get($name)
    {
        return static::multiwhere(['name' => $name])->pluck('value');
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
        return static::multiwhere(['name' => $name])->update(['value' => $value]) > 0 ? true : false ;
    }
}
