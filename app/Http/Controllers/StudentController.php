<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/30
 * Time: 17:04
 */

namespace App\Http\Controllers;

use App\Student;
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
//            ['name' => '刘老根', 'age' => 60],
//            ['name' => '易烊千玺', 'age' => 13]
//        ]);
//        var_dump($bool);

        // get
//        $students = DB::table('student')->get();
//        dd($students);

        // update(update里面的参数需要放在数组里面)
//        $num = DB::table('student')
//            -> where('id', 8)
//            -> update(['age' => 35, 'name' => '赵大宝']);
//        var_dump($num);

        // 查询符合条件的第一行
//        $student = DB::table('student') -> where('age', 35) -> first();
//        dd($student);

        // 只返回某几列数据(value:返回第一行，lists:返回符合条件的所有值)
//        $student = DB::table('student') -> where('age', '>', 0) -> lists('name', 'age');
//        dd($student);

        // 使用chunk分批返回数据
//        DB::table('student') -> chunk(5, function($students){
//            dd($students);
//        });

        // 聚合函数(min, max, count, avg)
//        $num = DB::table('student') -> max('age');
//        var_dump($num);

        // select
//        $data = DB::table('student') -> select('name', 'age', 'created_at as time') -> get();
//        dd($data);

        // distinct
        $data = DB::table('student') -> distinct() -> get();
        dd($data);
    }

    /*
     * 3.Eloquent ORM 查询
     */
    public static function orm1(){
        // 查询所有记录
//        $students = Student::all();
//        dd($students);

        // 利用主键进行查询(find, findOrFail)
//        $student = Student::find(5);
//        dd($student);

        // 在ORM中使用查询构造器
        $students = Student::where('age', '>', '20')
            -> orderby('age', 'desc')
            -> take(5)
            -> get();
        dd($students);

        // chunk
//        echo '<pre>';
//        Student::chunk(3, function($students){
//            var_dump($students);
//        });
    }

    /*
     * 4.Eloquent ORM 增加和修改
     */
    public static function editORM(){
        // 使用save插入记录
//        $student = new Student;
//        $student->name = '佚名';
//        $data = $student->save();
//        dd($data);

        // 使用save更新记录(先查找出对应记录，然后设置，再save)
////        $student = Student::find(11);
//        $student = Student::where('name', '喜洋洋')
//            -> where('age', '>', 10)
//            -> first();
//        $student->name = '小张';
//        $data = $student->save();
//        dd($data);

        // 也可以用update来更新
        $data = Student::where('name', '小张')
            -> where('age', '>', 10)
            -> update(['age' => 3]);
        dd($data);

        // 批量赋值(create)

    }
}