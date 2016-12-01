<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/30
 * Time: 16:18
 */

namespace App\Http\Controllers;

use App\Member;
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

//          $data = $request -> input('name');
//          dd($data);

        // 2.判断请求类型
        $data = $request -> getMethod();
        dd($data);
    }
}