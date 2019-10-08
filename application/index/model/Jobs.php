<?php

/**
 * @Author: MilFun
 * @Date:   2019-09-23 15:31:17
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-09-25 14:53:35
 */
namespace app\index\model;

use think\Model;

class Jobs extends Model
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

    public function getJobInfo($jid)
    {
        $info = $this->get($jid);
        return $info->toJson();
    }
    /**  
    * 获取公司列表
    * @return array 返回类型
    */
    public function getJobList()
    {
        $list = $this->all();
        foreach ($list as $k => $v) {
            $list[$k] = $v->toArray();
        }
        return $list;
    }


}