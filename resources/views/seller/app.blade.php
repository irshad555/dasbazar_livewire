<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('layouts.styles')
    @stack('page-styles')
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('seller.partials.navbar')
        @include('seller.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60f6c7c5d6289550">
        </script>
        @livewireScripts
        @include('layouts.scripts')
        @stack('page-scripts')
</body>

</html>