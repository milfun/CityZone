<?php
/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:06:13
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-18 17:29:17
 */
namespace app\index\model;

use think\Model;
use thinl\Request;

class Config extends Model
{
    public function getConfigList()
    {   
        $res = $this->field('name,value')->select();
       // $this->setConfigCache($res);
        foreach ($res as $k => $v) {
            $res[$k]['name'] = $v['name'];
            $res[$k]['value'] = $v['value'];
        }
        $res = json_decode(json_encode($res),true);
        if(!config('config_check')){
            $this->setConfigCache($res);
        }
    }

    /**
    *   都出来的config设置到系统配置里
    */
    protected function setConfigCache($value)
    {
        # 
        foreach ($value as $k => $v) {
            # code...
             config($v['name'],$v['value']);
        }
        config('config_check',true);
    }

    public function test()
    {
    	# code...
        $data = [
            'username' => 'MilFun6',
            'email' => 'milfun@qq.com',
            'mobile' => '18558704247'
        ];
        dump($data) ;
        $result = $this->where('username', 'MilFun5')->update($data);
    	return 'MilFUn';
    }
    /*
		获取随机字符串
	*/
    protected function randstr($length=6)
    {
    	$hash='';
        $chars= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#!~?:-='; 
        $max=strlen($chars)-1;   
        mt_srand((double)microtime()*1000000);   
        for($i=0;$i<$length;$i++)   {   
        	$hash.=$chars[mt_rand(0,$max)];   
        }
        return $hash;
    }

    protected function getPwdHash($uid)
    {
    	# code...
    	$res = $this->where('uid',$uid)->value('pwd_hash');
    	return $res;
    }


}