<?php

/**
 * @Author: MilFun
 * @Date:   2019-09-23 15:31:17
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-08 13:53:04
 */
namespace app\index\model;

use think\Model;

class Item extends Model
{
	protected $auto = [];
    protected $insert = [
    	'audit'=>0,'display' => 0,
    	'click'=>0,'emergency' => 0,
    	'stick'=>0,'education_cn'=>'不限',
    	'experience_cn'=>'不限','contents'=>'不限',
    ];  

    protected $update = ['audit'=>0]; 

	//自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化

    }

    public function getItemInfo($jid)
    {
        $info = $this->get($jid);
        return $info->toJson();
    }
    /**  
    * 获取公司列表
    * @return array 返回类型
    */
    public function getItemList()
    {
        $list = $this->all();
        foreach ($list as $k => $v) {
            $list[$k] = $v->toArray();
        }
        return $list;
    }
    //获取器，添加日期转换
    public function getTagAttr($value)
    {
        $res = explode('|', $value);
        return $res[0];
    }
    //获取器，刷新时间转换
    public function getRefreshtimeAttr($value)
    {
        return date('Y-m-d H:i:s',$value);
    }
}