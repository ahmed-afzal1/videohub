@extends('layouts.admin')

@section('content')

    <div class="container-fluid" id="container-wrapper">


        <div class="row">
            <div class="col-lg-12">

                <div class="card mb-4">
                    <div class="card-body">
                        <form action="" method="post">

                            @csrf


                            <div class="form-group">
                                <textarea class="form-control" rows="10" name="css" id="customCss">{{$content}}</textarea>

                            </div>


                            <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </div>



    @endsection

    @push('style')

        <link rel="stylesheet" href="{{ asset('assets/admin/css/codemirror.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/css/showhint.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/css/monokai.css') }}">

    @endpush


    @push('script')

        <script src="{{ asset('assets/admin/js/codemirror.js') }}"></script>
        <script src="{{ asset('assets/admin/js/sublime.js') }}"></script>
        <script src="{{ asset('assets/admin/js/css.js') }}"></script>
        <script src="{{ asset('assets/admin/js/showhint.js') }}"></script>
        <script src="{{ asset('assets/admin/js/csshint.js') }}"></script>

    @endpush


    @push('script')

        <script>
            "use strict";

            var editor = CodeMirror.fromTextArea(document.getElementById("customCss"), {
                lineNumbers: true,
                mode: "text/css",
                theme: "monokai",
                keyMap: "sublime",
                autoCloseBrackets: true,
                matchBrackets: true,
                showCursorWhenSelecting: true,
                matchBrackets: true,
               
            });
        </script>

    @endpush
