@extends('layouts.gentelella')

@section('title',__('登录'))

@section('body')
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signid"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{ url('auth/admin/login') }}" method="post">
                        <input class="hidden" type="checkbox" name="remember" checked>
                        {{ csrf_field() }}
                        <h1>后台登录</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="邮箱" required="" name="email" value="{{old('email')}}">
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="密码" required="" name="password">
                        </div>
                        <div>
                            <button class="btn btn-default submit" type="submit">{{__('登录')}}</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <div>
                                <h1><i class="fa fa-paw">{{config('app.name')}}</i></h1>
                                <p>@2017 All Rights Reseved. {{config('app.name')}}fdsfsdfsdfsdfsfs</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection