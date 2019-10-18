<?php

/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:59:13
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-18 17:05:13
 */
namespace app\index\controller;

use think\Controller;

class Config extends Controller{
    public function index()
    {
    	echo "Config Controller";
    	dump($request->only(['mid']));
    }

    public function getConfigCache()
    {
        # code...
        if(config('Db_config_data')){
            echo config('Db_config_data');
            echo "1111111111";
        }else{
            $com =model('Config'); 
            $res = $com->getConfigList();
        }
        

    }

    
    
}