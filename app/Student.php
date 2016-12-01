<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    // 指定对应的表
    protected $table = 'student';

    // 设置允许批量赋值
    protected $fillable = ['name', 'age', 'sex'];
}