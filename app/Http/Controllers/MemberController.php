<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/30
 * Time: 16:18
 */

namespace App\Http\Controllers;

use App\Member;

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
}