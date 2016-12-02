<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/30
 * Time: 16:18
 */

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Request;

class MemberController extends Controller {

    public function info($id){
//        return 'member-info-id-' . $id;
//        return route('memberinfo');

//        // 向模板传递参数
//        return view('member.info', [
//            'name' => 'Jessica',
//            'city' => 'wuhan'
//        ]);

        return Member::getMember();
    }

    public function request1(Request $request){
        // 1.取值
//        $data = $request -> all();
//        dd($data);

        // 可以在后面带一个默认值
//        $data = $request -> input('name');
//        dd($data);

//        // 2.判断请求类型
//        $data = $request -> getMethod();
//        dd($data);

        // 3.url相关操作
//        $data = $request -> is('student/*');
//        dd($data);

        $path = $request -> path();
        var_dump('path:' . $path);

        $url = $request -> url();
        var_dump('url:' . $url);

    }

    public function setSession(Request $request){
        // 1.HTTP request session
        // put()方法设置值
//        $data = $request -> session() -> put('site', 'www.xulingxue.com');
//        var_dump($data);
        // push()方法push多个值到数组
//        $request -> session() -> push('name', 'Jessica');
//        $request -> session() -> push('name', 'Kate');

        // 2.session()辅助方法
//        session() -> put('date', date('y-m-d h:i:s', time()));

        // 3.Session原生类
//        Session::put('type', 'fascade');
//        // 以数组形式存多个值
//        Session::put(['location' => 'china', 'trade' => 'oil']);
    }

    public function getSession(Request $request){
        // 1.HTTP request session
        // all()方法获取session里面携带的所有内容
//        $data = $request -> session() -> all();
//        dd($data);
        // get()取值时可以带上默认值
//        $data = $request -> session() -> get('site', 'localhost');
//        var_dump($data);

        // 2.session()辅助方法
//        echo session() -> get('date');

        // 3.Session原生类
        // 查询单个值，并指定默认值
//        echo Session::get('type', 'default');
        // pull()方法获取数据并将它删除
//        Session::pull('name', 'default');
        // forget()方法清除某个key
//        Session::forget('location');
        // flush()方法删除所有的session值
//        Session::flush();
//        // 查询所有的值
//        $data = Session::all();
//        dd($data);
    }

    public function response1(){
        // 返回Json
//        $data = [
//            'retCode' => 0,
//            'info' => 'success',
//            'data' => ['total' => 5, 'detail' => 'testing msg.']
//        ];
//
//        return response() -> json($data);

        // response设置header
//        $content = 'response content';
//        $type = 'type';
//
//        return response($content)
//            ->header('Content-Type', $type)
//            ->header('X-Header-One', 'X-Header-One')
//            ->header('X-Header-Two', 'X-Header-Two');

        // 设置cookie
//        $content = 'response content cookie';
//
//        return response($content)
//            ->withCookie('name', 'value');

        // 下载文件(文件路径是相对public的目录)
//        return response() -> download('file\README.txt');

        // 返回重定向
        // url:参数是要被重定向到的目标url
//        return redirect('blade');
        // 路由：参数是别名(可以将路由的参数带到route的第二个参数传递过去)
//        return redirect() -> route('blade_name');
        // action: 参数是处理函数
//        return redirect() -> action('BladeController@getChild');
    }

    public function activity0(){
        return '双十一即将来临，敬请起来';
    }

    public function activity1(){
        return '完爆双十一，家居建材分会场';
    }

    public function activity2(){
        return '完爆双十一，特色美食专场';
    }
}