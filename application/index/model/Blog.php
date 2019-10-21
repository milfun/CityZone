<?php

/**
 * @Author: MilFun
 * @Date:   2019-10-21 14:38:08
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-21 15:12:21
 */
namespace app\index\model;

use think\Model;
use thinl\Request;

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
    	$res = $this->get($aid);
        dump($res);
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
   


}