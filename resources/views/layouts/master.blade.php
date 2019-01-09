<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
    @include('_partials.links')
</head>
<body class="hold-transition skin sidebar-mini">
    @include('_partials.topnav')
    @include('_partials.sidenav')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <section class="content">
                @yield('page-content')
            </section>
            
        </div>
        @include('_partials.footer')
    </div>
    @include('_partials.scripts')
    @stack('page-script')
</body>
</html>
