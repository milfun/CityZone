<?php

/**
 * @Author: MilFun
 * @Date:   2019-10-21 14:32:38
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-21 16:43:47
 */
namespace app\index\controller;

use think\Controller;
use think\Request;

class Blog extends Controller{
    public function index()
    {
        # code...
        $request = request();
        $aid=$request->param('aid');
        $res = model('Blog')->getById($aid);
        //dump($res);

        $this->assign('blog',$res);
        return $this->fetch('index/detail');
    }
    /**
    *	首页文章展示3篇热门文章
    */
    public function getHotBlog()
    {
        # code...
        $hot = cache('hot_blog');
        if (!$hot) {
            //echo "111111111";
            $hot =model('Blog')->getHotBlog();
            cache('hot_blog',$hot);
        }
        $this->assign('hot_blog',$hot);
        return $hot;
    }
    /**
    *	首页推荐文章展示8篇
    */
    public function getSugBlog()
    {
        # code...
        $sug = cache('sug_blog');
        if (!$sug) {
            //echo "111111111";
            $hot =model('Blog')->getSugBlog();
            cache('sug_blog',$sug);
        }
        $this->assign('sug_blog',$sug);
        return $sug;
    }
}