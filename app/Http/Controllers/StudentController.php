<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/30
 * Time: 17:04
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
/*
 * 数据库用法
 */
class StudentController extends Controller{
    /*
     * 1.facades原始查询
     */
    public static function test(){
        // 查询
        $students = DB::select('select * from student');
        dd($students);

        // insert
//        $bool = DB::insert('insert into student(name, age) values(?, ?)',
//                ['手冢治虫', 59]);
//        var_dump($bool);

        // update
//        $num = DB::update('update student set age = ? where name = ?',
//                [21, '滨崎步']);
//        var_dump($num);

        // delete
//        $num = DB::delete('delete from student where age = ?', [59]);
//        var_dump($num);
    }

    /*
     * 2.查询构造器
     */
    public static function query1(){
        // insert
//        $bool = DB::table('student')->insert(['name' => 'sean', 'age' => 18]);
//        var_dump($bool);

        // 添加多条数据使用二维数组
//        $bool = DB::table('student')->insert([
//            ['name' => '宋小宝', 'age' => 40],
//            ['name' => '约翰.纳什', 'age' => 62]
//        ]);
//        var_dump($bool);

        // get
//        $students = DB::table('student')->get();
//        dd($students);

        // update(update里面的参数需要放在数组里面)
        $num = DB::table('student')
            -> where('id', 8)
            -> update(['age' => 35, 'name' => '赵大宝']);
        var_dump($num);

    }

    /*
     * 3.Eloquent ORM
     */
    public static function query2(){

    }
}