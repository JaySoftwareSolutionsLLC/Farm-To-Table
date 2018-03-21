<!-- This file is the layout file for all pages in the app, this helps keep the code DRY -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Farm to Market</title>
    <link rel="stylesheet" href="<?php echo asset('css/general/reset.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/general/main.css')?>" type="text/css">
    @yield('css')
</head>
<body>
    <header>
        <h2>Farm to Table</h2>
        <nav>
            <a href="{{ route('farms.index') }}"><h3>Farms</h3></a>
            <a href="{{ route('markets.index') }}"><h3>Markets</h3></a>
        </nav>
    </header>
    @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @yield('main')
</body>
</html>
