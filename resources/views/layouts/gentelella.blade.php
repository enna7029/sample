<!doctype html>
<html>
<head>
    <meta charset="utf8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=decice-width,initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{mix('css/admin.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body class="nav-md">
@yield('body')
<script src="{{mix('js/admin.js')}}"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })
</script>
@yield('js')
</body>
</html>