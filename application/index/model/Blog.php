<?php

/**
 * @Author: MilFun
 * @Date:   2019-10-21 14:38:08
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-21 16:32:44
 */
namespace app\index\model;

use think\Model;
use think\Request;

class Blog extends Model
{

    public function getHotBlog()
    {   
        $res = $this->order('hot desc')->limit(3)->select();
        $res = json_decode(json_encode($res),true);
        //dump($res);
        return $res;
    }

    public function getById($aid)
    {
    	# code...
    	$where['aid'] = $aid;
    	$res = $this->where($where)->find();
        //dump($res);
        $res = json_decode(json_encode($res),true);
        return $res;
    }

    public function test()
    {
    	# code...
        $data = [
            'username' => 'MilFun6',
            'email' => 'milfun@qq.com',
            'mobile' => '18558704247'
        ];
        //dump($data) ;
        $result = $this->where('username', 'MilFun5')->update($data);
    	return 'MilFun';
    }

    //获取器
   	public function getAcontentAttr($value)
   	{
   		return htmlspecialchars_decode($value);
   	}


}