<?php
use think\Route;
// 注册路由到index模块的News控制器的read操作
Route::rule('index','index/Index/index');
Route::rule('vip','index/Vip/index');
Route::rule('note','index/Note/index');
Route::rule('my','index/My/index');
Route::rule('msg','index/Msg/index');

Route::rule('read/:id','index/Base/read');
Route::rule('search','index/Base/search');
Route::rule('cate/:id','index/Base/cate');
