<!-- 继承通用模板 -->
@extends('custom.parent')

@section('title', 'Laravel Blade')

{{--@section('content')--}}
    {{--@parent--}}
    {{--<div>This is the child content.</div>--}}
{{--@endsection--}}

@section('content')
    @parent
    <div>This is the child content(stop).</div>

    <!-- 1.PHP模板中输出PHP变量 -->
    <p>{{$name}}</p>

    <!-- 2.PHP模板中调用PHP代码 -->
    <p> {{time()}} </p>
    <p> {{date('y-m-d h:i:s', time())}}</p>
    <p> {{in_array($name, $arr)}}</p>
    <p> {{isset($name) ? $name : 'default'}} </p>
    <p> {{$name ? $name : 'default'}}</p>

    <!-- 3.原样输出 -->
    <p>@{{$name}}</p>

    {{-- 4.模板中的注释(查看源码时，这样的注释不显示) --}}

    <!-- 5.引入子视图(include) -->
    @include('custom.common', [
        'msg' => 'This is a message.'
    ])

    <!-- 6.流程控制(if, unless, for, foreach)-->
    @if($name == 'Jessica')
        name:Jessica.
    @elseif($name == 'Kate')
        name:Kate.
    @else
        name:default
    @endif

    <br><br>

    @foreach($arr as $item)
        <div>item:{{$item}}</div>
    @endforeach

    <br><br>

    <!-- 7.模板的URL-->
    <a href="{{url('orm')}}">url()</a>
    <br>
    <a href="{{action('StudentController@orm1')}}">action()</a>
    <br>
    <a href="{{route('orm')}}">route()</a>

@stop