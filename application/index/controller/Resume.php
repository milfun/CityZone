<?php

/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:59:13
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-09-25 14:51:12
 */
namespace app\index\controller;

use think\Controller;

class Resume extends Controller{
    public function _initialize()
    {
        //echo 'init<br/>';
        //$this->success('新增成功', 'User/list');
        //$this->error('新增失败');
        
    }
    public function index()
    {
    	echo "Resume Controller";
    	dump($request->only(['rid']));
    }

    
}