<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::rule('/','index/index/index');
Route::rule('blog/:aid','index/blog/index','get',[],[]);
Route::rule('mark/','index/mark/index','get',[],[]);
Route::rule('mark/:addblog','index/mark/addblog','post',[],[]);
Route::rule('resumes/','index/index/resumes','get',[],[]);
/*
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '[jobs]'   => [
    	':jid'  => ['index/jobs',['method' =>'get'],['jid' => '\d+']]
    ],

];
*/
