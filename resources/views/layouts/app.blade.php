<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <meta name="renderer" content="webkit">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($pageTitle) ? $pageTitle : '内容占位服务' }}</title>

    {{-- Styles --}}
    <link href="https://cdn.bootcss.com/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    @yield('styles')

</head>
<body>

@yield('content')

{{-- Scripts --}}
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ mix("/js/manifest.js") }}"></script>
<script src="{{ mix("/js/vendor.js") }}"></script>

@yield('scripts')

</body>
</html>
