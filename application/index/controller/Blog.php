<?php

/**
 * @Author: MilFun
 * @Date:   2019-10-21 14:32:38
 * @Last Modified by:   milfun
 * @Last Modified time: 2019-10-23 08:59:27
 */
namespace app\index\controller;

use think\Controller;
use think\Request;

class Blog extends Controller{
    public function _initialize()
    {
        // 配置变化后，快速清空
        //cache('DB_CONFIG_DATA',null);

        $conf = new Config;
        $conf->getConfigCache();
        if (!is_open()) {
            $this->error('网站已经关闭');
        }
        //dump(is_open());
        //dump(config('site_name'));
    }

    public function index()
    {
        # code...
        $request = request();
        $aid=$request->param('aid');
        $res = model('Blog')->getById($aid);
        //dump($res);
        //dump(config('copy_right'));
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
        cache('hot_blog',null);
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
        cache('sug_blog',null);
        if (!$sug) {
            //echo "111111111";
            $sug =model('Blog')->getSugBlog();
            cache('sug_blog',$sug);
        }
        $this->assign('sug_blog',$sug);
        return $sug;
    }
}