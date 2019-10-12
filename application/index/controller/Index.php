<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Access;

class Index extends Controller{
    public function _initialize()
    {
        //echo 'init<br/>';
        //$this->success('新增成功', 'User/list');
        //$this->error('新增失败');
    }

    public function index(){
        /*
        $a = new Item();
        echo $a->sayhello();
        echo "<h1>MilFunOs is  Working !</h1>";*/
        //var_dump($s) ;
        return $this->fetch('index');
        
    }

  

    public function login()
    {
        # code...
        return $this->fetch('login');
    }

    /*
    *   首页职位列表
    */
    public function jobs()
    {
        $user =model('Jobs'); 
        $res = $user->getJobList();
        //echo input('id');
        //echo $res;
        $this->assign($res);
        return $this->fetch('jobs');
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