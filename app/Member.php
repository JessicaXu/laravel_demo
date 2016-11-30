<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
 * 数据模型示例
 */
class Member extends Model {

    public static function getMember(){
        return 'Member name is Jessica.';
    }
}