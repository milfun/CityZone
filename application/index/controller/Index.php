<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Config;

class Index extends Controller{
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

    public function index(){
        
        $blog = new \app\index\controller\Blog();
        $blog->getHotBlog();
        //cache('hot_blog',null);
        //dump(cache('hot_blog'));
        //var_dump($s) ;

        return $this->fetch('index');
        
    }

  

    public function login()
    {
        # code...
        return $this->fetch('login');
    }
    public function detail()
    {
        # code...
        return $this->fetch('detail');
    }

    /*
    *   首页职位列表
    */
    public function markdown()
    {
        return $this->fetch('markdown');
    }

    /*
    *   首页公司列表
    */
    public function companys($value='')
    {
        # code...
        $com =model('Company'); 
        $res = $com->getCompanyList();
        //echo input('id');
        //echo $res;
        $this->assign($res);
        return $this->fetch('company');
    }

    /*
    *   首页公司列表
    */
    public function resumes($value='')
    {
        # code...
        $com =model('Resume'); 
        $res = $com->getResumeList();
        //echo input('id');
        //echo $res;
        $this->assign($res);
        return $this->fetch('resume');
    }


}