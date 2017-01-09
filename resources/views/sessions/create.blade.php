@extends('layouts.default')
@section('title', '登录')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>登录</h3>
            </div>
            <div class="panel-body">
                @include('shared.error')
                <form class="form" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email" class="control-label">邮箱：</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">密码：</label>
                        <input type="password" name="password" class="form-control" id="password" value="{{ old('password') }}">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> 记住我</label>
                    </div>
                    <button type="submit" class="btn btn-primary">登录</button>
                </form>
                <hr>
                <p>还没有账号？<a href="{{ route('signup') }}">立即注册！</a></p>
            </div>
        </div>
    </div>
@stop