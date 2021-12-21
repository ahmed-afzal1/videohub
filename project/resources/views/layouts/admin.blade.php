<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Not Set Page Title' }}</title>
    <link rel="shortcut icon" href="{{ $gs->icon }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/font-awsome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-iconpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/colorpicker.css') }}">
    @stack('style-plugin')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/stisla.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ menu_asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">

    @stack('style')

    <link rel="stylesheet" href="{{asset('assets/admin/css/mode.css')}}">

</head>

<body>

    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('admin.partials.topbar')
            <div class="main-sidebar">
                @include('admin.partials.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @include('admin.partials.breadcrumb')

                @yield('content')
            </div>

        </div>
    </div>




    {{-- <!-- Modal -->
    <div class="modal fade" id="cleardb" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">@changeLang('Clear Database')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <p>@changeLang('Are You Sure To Clear Database')</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">@changeLang('Close')</button>
                        <button type="submit" class="btn btn-danger">@changeLang('Clear Database')</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/summernote.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/sortable.js') }}"></script>
    <script src="{{ asset('assets/admin/js/moment-a.js') }}"></script>
    <script src="{{ asset('assets/admin/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/colorpicker.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.uploadpreview.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tagify.js') }}"></script>
    <script src="{{ menu_asset('js/menu.js') }}"></script> 
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    @include('admin.partials.toaster')
    @stack('script')

    <script>
        $(function() {
            'use strict'
            $('.clear').on('click', function(e) {
                e.preventDefault();
                const modal = $('#cleardb');
                modal.find('form').attr('action', $(this).data('href'))
                modal.modal('show');
            })

        })
    </script>
    

</body>

</html>
