<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/admin/img/logo/GO-logo.jpg')}} " rel="icon">
    
    <title>GO - Dashboard</title>
    @stack('style')
<style>

        /*color picker Start*/
    .colorpicker-alpha {display:none !important;}
    .colorpicker{ min-width:128px !important;}
    .colorpicker-color {display:none !important;}
/*color picker End*/

span.input-group-addon {
    position: absolute;
    right: 10px;
    top: 0;
    background: #ddd;
    padding: 7px;
    height: 100%;
    width: 40px;
    text-align: center;
    line-height: 33px;
    z-index: 9999;
}

</style>
    @includeIf('admin.partials.style')
    @yield('style')

</head>

<body id="page-top">
<div id="wrapper">
<!-- Sidebar -->
@includeIf('admin.partials.sidebar')
<!-- Sidebar -->

<div id="content-wrapper" class="d-flex flex-column">

        <!-- TopBar -->
        @includeIf('admin.partials.topbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            @yield('content')
        </div>
        <!---Container Fluid-->
    
    <!-- Footer -->
    @includeIf('admin.partials.footer')
    <!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

@includeIf('admin.partials.scripts')
@includeIf('admin.partials.toaster')

@stack('script')

</body>

</html>
