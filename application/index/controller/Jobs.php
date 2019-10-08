<?php

/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:57:55
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-09-25 12:00:20
 */
namespace app\index\controller;

use think\Controller;

class Jobs extends Controller{
    public function _initialize()
    {
        //echo 'init<br/>';
        //$this->success('新增成功', 'User/list');
        //$this->error('新增失败');
        echo "Jobs  Controller";
        
    }

    public function sayhello()
    {
    	# code...
    	echo "Hello MilFun";
    	$user =model('Jobs'); 
        $res = $user->getOneJob(1);
        echo $res;
    }

}