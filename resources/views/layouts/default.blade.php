<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title', 'Laravel') - Laravel微博实验项目</title>
</head>
<body>
    @include('layouts._header')
    <div class="container">
        @yield('content');
        @include('layouts._footer')
    </div>
</body>
</html>