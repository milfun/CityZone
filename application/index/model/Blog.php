<?php

/**
 * @Author: MilFun
 * @Date:   2019-10-21 14:38:08
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-23 11:30:30
 */
namespace app\index\model;

use think\Model;
use think\Request;

class Blog extends Model
{
    protected $auto = ['likes'=> 1,'common' => 1,'hot'=> 1 ,'type' => 1,'is_music'=>0,'music'=>''];
    protected $insert = [];  
    protected $update = []; 

    //首页热门3篇博客
    public function getHotBlog()
    {   
        $map['type'] = 1;
        $res = $this->where($map)->order('hot desc')->limit(5)->select();
        $res = json_decode(json_encode($res),true);
        //dump($res);
        return $res;
    }
    //首页推荐8篇博客
    public function getSugBlog()
    {   
        $map['type'] = 1;
        $res = $this->where($map)->order('add_time desc')->limit(10)->select();
        $res = json_decode(json_encode($res),true);
        //dump($res);
        return $res;
    }

    //根据aid获取文章内容
    public function getById($aid)
    {
    	# code...
    	$map['aid'] = $aid;
        $res = $this->where($map)->find();
        //dump($res);
        $res = json_decode(json_encode($res),true);
        return $res;
    }

    public function addBlog($param='')
    {
        # code...
        $data['aid'] = sha1($param['acontent']);
        if ($param['img']=='') {
            $data['imgurl'] = 'http://milfun.fun/s/blog/img/logo.jpg';
        }else{
            $data['imgurl'] = $param['img'];
        }
        
        $data['author'] = 'MilFun';
        $data['acontent'] = $param['acontent'];
        $data['aname'] = $param['aname'];
        $data['caterogy'] = $param['caterogy'];
        
        $data['tag'] = $param['tag'];
        $data['add_time'] = time();
        //dump($data);
        $result = $this->save($data);
        # code...
        
        //dump($data) ;
        //$result = $this->where('username', 'MilFun5')->update($data);
        return 'MilFun';
    }

    //获取器
   	public function getAcontentAttr($value)
   	{
   		return htmlspecialchars_decode($value);
   	}
    //获取器
    public function getAddTimeAttr($value)
    {
        return date('Y-m-d h:i:s',$value);
    }


}