<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
//    return 'basic hello world.';
});

// 基础路由
Route::get('basic1', function(){
    return 'basic hello world.';
//    return view('welcome');
});

Route::post('basic2', function(){
    return 'basic2';
//    return view('welcome');
});

// 多请求路由
Route::match(['get', 'post'], 'multi1', function(){
   return 'multi1';
});

Route::any('multi2', function(){
    return 'multi2';
});

// 路由参数
//Route::get('user/{id}', function($id){
//    return 'User-id-'.$id;
//});
//
//Route::get('user/{name?}', function($name = null){
//    // 其中name后面的?表示必须指定默认值
//    return 'User-name-'.$name;
//});

// 给路由参数指定条件(正则表达式，0个或多个字母)
Route::get('user/{name?}', function($name = 'Jessica'){
    return 'User-name-'.$name;
})-> where('name', '[A-Za-z]+');

// 给路由参数指定条件
Route::get('user/{id}/{name?}', function($id, $name = 'Jessica'){
    return 'User-id-' . $id . '-name-'.$name;
})-> where(['id' => '[0-9]+', 'name' =>'[A-Za-z]+']);

// 路由别名(用as指定路由别名)
Route::get('user/member-center', ['as' => 'center', function(){
    return route('center');
}]);

// 路由群组(通常用来抽离出共有的功能)
Route::group(['prefix' => 'member'], function(){
    Route::get('user/center', ['as' => 'center', function(){
        return route('center');
    }]);

    Route::any('multi2', function(){
        return 'member-multi2';
    });
});

// 路由中输出视图
Route::get('view', function(){
    return view('welcome');
});

// 路由关联控制器(指定路由对应的处理函数 控制器@函数名),以下3种方式都是等效的：
//Route::get('member/info', 'MemberController@info');
//Route::get('member/info', ['uses' => 'MemberController@info']);
Route::get('member/info', [
    'uses' => 'MemberController@info',
    'as' => 'memberinfo'
]);

// 带参数
Route::get('member/{id}', 'MemberController@info')
->where('id', '[0-9]+');

// 测试数据库
Route::any('test', 'StudentController@test');
Route::any('query', 'StudentController@query1');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
