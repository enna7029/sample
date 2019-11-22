<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    {{--<meta rel="stylesheet" href="{{mix('css/app.css')}}">--}}
    @yield('css')
</head>
<body>
<!--页眉-->
<header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav b-nav-parent">
                <li class="hidden-xs b-nav-mobile"></li>
            </ul>
            <ul id="b-login-word" class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</header>
<div class="b-h-70"></div>
<!--主要内容-->
<div id="b-content" class="container">
    <div class="row">
        @yield('content')
        <div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md">
            <div class="b-search">
                <form class="form-inline" role="form" action="{{ url('search') }}" method="get">
                    <input class="b-search-text" type="text" name="wd">
                    <input class="b-search-submit" type="submit" value="{{ __('Search') }}">
                </form>
            </div>
        </div>
    </div>
</div>
<!--页脚-->
<footer id="b-foot">
    <div class="container">
        <div class="row b-content">
            <dl class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            </dl>
            <dl class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            </dl>
            <dl class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            </dl>
        </div>
    </div>
    <a class="go-top fa fa-angle-up animated jello" href="javascript:;"></a>
</footer>
<!--登录页-->
<div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title b-ta-center" id="myModalLabel">{{ __('Without registration, you can log in with the account below.') }}</h4>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
            </div>
        </div>
    </div>
</div>

{{--<script src="{{ mix('js/app.js') }}"></script>--}}
</body>
</html>