<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BladeController extends Controller {
    public function getChild(){
        $name = 'Jessica';
        $arr = ['Jessica', 'Kitty', 'Cindy', 'Demon'];

        // 给模板传递参数
        return view('custom.child', [
            'name' => $name,
            'arr' => $arr
        ]);
    }
}