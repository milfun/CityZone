<?php
/**
 * @Author: MilFun
 * @Date:   2019-09-25 10:06:13
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-09-25 14:18:42
 */
namespace app\index\model;

use think\Model;
use thinl\Request;

class Member extends Model
{
	protected $auto = [
		'pwd_hash'
	];

	//自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }
    public function getMemberWhere($where)
    {
        return $this->where($where)->find()->toArray();
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