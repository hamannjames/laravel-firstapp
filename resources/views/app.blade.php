<DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div id="site-wrapper">
        <div id="header-wrapper">
            <header id ="site-header">
                @include('includes/header')
            </header>
        </div>
        <main id="site-content">
            @yield('content')
        </main>
        <footer id="site-footer">
            @include('includes.footer')
            @yield('scripts')
        </footer>
    </div>
</body>
</html>
