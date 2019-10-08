<?php

/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:57:55
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-08 11:33:52
 */
namespace app\index\controller;

use think\Controller;

class Item extends Controller{
    public function _initialize()
    {
        //echo 'init<br/>';
        //$this->success('新增成功', 'User/list');
        //$this->error('新增失败');
        echo "Item  Controller";
        
    }

    public function sayhello()
    {
    	# code...
    	echo "Hello MilFun";
    	$user =model('Item'); 
        $res = $user->getItemInfo(1);
        echo $res;
    }

    /*
    *   创建一个项目
    */
    public function NewItem($value='')
    {
        # code...
    }

}