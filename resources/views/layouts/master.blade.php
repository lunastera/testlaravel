<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>{{{isset($title) ? 'MyTest - '.$title : 'MyTest'}}}</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body class="container-fluid">
    @yield('navbar')
    @yield('header')
    @yield('content')
    @yield('footer')
</body>
</html>
