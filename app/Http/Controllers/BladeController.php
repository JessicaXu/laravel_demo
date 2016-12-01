<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BladeController extends Controller {
    public function getChild(){
        return view('custom.child');
    }
}