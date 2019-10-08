<?php
namespace app\index\controller;

use think\Controller;
use app\index\controller\Jobs;

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

    public function get()
    {
    	/*echo "MilFun Done!";*/
        $user =model('Jobs'); 
        $data=[
            'jobname' => '测试',
            'companyname' => '测试一下',
            'companyid' => 1,
            'district' => '福清市'
        ];
        $result = $user->save($data);
    }

    public function test()
    {
        # code...
        $a = new Jobs();
        echo $a->sayhello();
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