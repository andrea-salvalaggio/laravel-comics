<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>

    @yield('head-scripts')
</head>
<body>

    @include('includes.header')

    <main>
        @yield('main-content')
    </main>

    @include('includes.footer')

</body>
</html>