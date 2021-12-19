@extends('layouts.admin')



@section('content')

    {{-- <form action="{{ route('admin.menu_builder.update') }}" method="POST" class="form-save-menu">
        @csrf
        <div class="row">

            <input type="hidden" name="deleted_nodes">
            <textarea name="menu_nodes" id="nestable-output" class="form-control d-none"></textarea>
            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-12">

                        <div class="card">

                            <div class="card-header">

                                <h4>{{__('Pages')}}</h4>


                            </div>

                            <div class="card-body ">

                                <div class="box-links-for-menu">

                                    <div class="the-box">
                                        <ul class="list-item ">

                                            @foreach ($pages as $page)
                                                <li class="list-group-item">
                                                    <label for=" ws-menu-builder-{{ $page->id }}"
                                                        data-title=" {{ $page->title }}"
                                                        data-reference-id="{{ $page->id }}" data-reference-type="pages">
                                                        <input id="ws-menu-builder-{{ $page->id }}" name="menu_id"
                                                            type="checkbox" value="{{ $page->id }}">
                                                        {{ $page->title }}
                                                    </label>

                                                </li>
                                            @endforeach

                                        </ul>

                                        <div class="text-right">
                                            <div class="btn-group btn-group-devided">
                                                <a href="#" class="btn-add-to-menu btn btn-primary">
                                                    <span class="text"><i class="fa fa-plus"></i> Add to
                                                        menu</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <h4>{{__('Add To menu')}}</h4>
                            </div>

                            <div class="card-body">


                                <div class="box-links-for-menu">
                                    <div id="external_link" class="the-box">
                                        <div class="node-content">
                                            <div class="form-group">
                                                <label for="node-title">Title</label>
                                                <input type="text" class="form-control" id="node-title"
                                                    autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="node-url">URL</label>
                                                <input type="text" class="form-control" id="node-url"
                                                    placeholder="http://" autocomplete="off">
                                            </div>

                                            <div class="form-group">

                                                <button type="submit"
                                                    class="btn btn-primary btn-add-to-menu">{{__('Add To
                                                    Menu')}}</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>


                        </div>



                    </div>



                </div>


            </div>

            <div class="col-md-6">

                <div class="card">

                    <div class="card-header">
                        <h5>Menu Builder</h5>
                    </div>


                    <div class="card-body">

                        <div class="dd nestable-menu" id="nestable">
                            <ol class="dd-list">
                                @foreach (json_decode($prevMenu, true) as $menu)
                              

                                    <li class="dd-item dd3-item" data-reference-type="{{ $menu['referenceType'] }}" data-reference-id="0"
                                        data-title="{{ $menu['title'] }}" data-class="" data-id="{{ $menu['id'] }}"
                                        data-custom-url="/" data-icon-font="" data-target="_self">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">
                                            <span class="text float-left" data-update="title">{{ $menu['title'] }}</span>
                                            <span class="text float-right">{{ $menu['referenceType'] }}</span>
                                            <a href="#" title="" class="show-item-details"><i
                                                    class="fa fa-angle-down"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item-details">
                                            <label class="pad-bot-5">
                                                <span class="text pad-top-5 dis-inline-block"
                                                    data-update="title">Title</span>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ $menu['title'] }}" data-old="{{ $menu['title'] }}">
                                            </label>
                                            <label class="pad-bot-5 dis-inline-block">
                                                <span class="text pad-top-5" data-update="custom-url">URL</span>
                                                <input type="text" class="form-control" name="custom-url"
                                                    value="/{{ $menu['title'] }}" data-old="/">
                                            </label>


                                            <div class="clearfix"></div>
                                            <div class="text-right" style="margin-top: 5px">
                                                <a href="#" class="btn btn-danger btn-remove btn-sm">Remove</a>
                                                <a href="#" class="btn btn-primary btn-cancel btn-sm">Cancel</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
       
                                        @if (count($menu['children']) > 0)
                                        <ol class="dd-list">
                                            @foreach ($menu['children'] as $men)
                                            <li class="dd-item dd3-item" data-reference-type="" data-reference-id="0"
                                                data-title="{{ $men['title'] }}" data-class=""
                                                data-id="{{ $men['id'] }}" data-custom-url="/" data-icon-font=""
                                                data-target="_self">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">
                                                    <span class="text float-left"
                                                        data-update="title">{{ $men['title'] }}</span>
                                                    <span class="text float-right">{{ $men['referenceType'] }}</span>
                                                    <a href="#" title="" class="show-item-details"><i
                                                            class="fa fa-angle-down"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="item-details">
                                                    <label class="pad-bot-5">
                                                        <span class="text pad-top-5 dis-inline-block"
                                                            data-update="title">Title</span>
                                                        <input type="text" class="form-control" name="title"
                                                            value="{{ $men['title'] }}"
                                                            data-old="{{ $men['title'] }}">
                                                    </label>
                                                    <label class="pad-bot-5 dis-inline-block">
                                                        <span class="text pad-top-5" data-update="custom-url">URL</span>
                                                        <input type="text" class="form-control" name="custom-url"
                                                            value="/{{ $men['title'] }}" data-old="/">
                                                    </label>


                                                    <div class="clearfix"></div>
                                                    <div class="text-right" style="margin-top: 5px">
                                                        <a href="#" class="btn btn-danger btn-remove btn-sm">Remove</a>
                                                        <a href="#" class="btn btn-primary btn-cancel btn-sm">Cancel</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                            @endforeach

                                        </ol>
                                        @endif
                                    </li>
                                @endforeach
                            </ol>
                        </div>



                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>


    </form> --}}
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5 class="mb-4 text-center bg-success text-white ">Add New Menu</h5>
                <form action="{{ route('admin.menu_builder.update') }}" method="POST" class="form-save-menu">
                    @csrf
                    @if (count($errors) > 0)
                        <div class="alert alert-danger  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="menus" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control" name="parent_id">
                                    <option selected disabled>Select Parent Menu</option>
                                    @foreach ($allMenus as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h5 class="text-center mb-4 bg-info text-white">Menu List</h5>
                <ul id="tree1">
                    @foreach ($menus as $menu)
                        <li>
                            {{ $menu->menus }}
                            <button class="btn btn-primary delete" data-id="{{$menu->id}}"><i class="fa fa-trash"></i></button>
                            @if (count($menu->childs))
                                @include('admin.menu.manageChild',['childs' => $menu->childs])
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection

@push('script')
    {{-- <script src="{{ asset('assets/admin/js/jquery_nestable.js') }}"></script>
    <script src="{{ asset('assets/admin/js/menu.js') }}"></script> --}}

    <script>
        $(function() {

          


            $.fn.extend({
                treed: function(o) {

                    var openedClass = 'glyphicon-minus-sign';
                    var closedClass = 'glyphicon-plus-sign';

                    if (typeof o != 'undefined') {
                        if (typeof o.openedClass != 'undefined') {
                            openedClass = o.openedClass;
                        }
                        if (typeof o.closedClass != 'undefined') {
                            closedClass = o.closedClass;
                        }
                    };

                    /* initialize each of the top levels */
                    var tree = $(this);
                    tree.addClass("tree");
                    tree.find('li').has("ul").each(function() {
                        var branch = $(this);
                        branch.prepend("");
                        branch.addClass('branch');
                        branch.on('click', function(e) {
                            if (this == e.target) {
                                var icon = $(this).children('i:first');
                                icon.toggleClass(openedClass + " " + closedClass);
                                $(this).children().children().toggle();
                            }
                        })
                        branch.children().children().toggle();
                    });
                    /* fire event from the dynamically added icon */
                    tree.find('.branch .indicator').each(function() {
                        $(this).on('click', function() {
                            $(this).closest('li').click();
                        });
                    });
                    /* fire event to open branch if the li contains an anchor instead of text */
                    tree.find('.branch>a').each(function() {
                        $(this).on('click', function(e) {
                            $(this).closest('li').click();
                            e.preventDefault();
                        });
                    });
                    /* fire event to open branch if the li contains a button instead of text */
                    tree.find('.branch>button').each(function() {
                        $(this).on('click', function(e) {
                            $(this).closest('li').click();
                            e.preventDefault();
                        });
                    });
                }
            });
            /* Initialization of treeviews */
            $('#tree1').treed();


        })
    </script>
@endpush

@push('style')
    {{-- <link rel="stylesheet" href="{{ asset('assets/admin/css/jquery_nestable.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/menu.css') }}"> --}}
    <style>
        .tree,
        .tree ul {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .tree ul {
            margin-left: 1em;
            position: relative
        }

        .tree ul ul {
            margin-left: .5em
        }

        .tree ul:before {
            content: "";
            display: block;
            width: 0;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            border-left: 1px solid
        }

        .tree li {
            margin: 0;
            padding: 0 1em;
            line-height: 2em;
            color: #369;
            font-weight: 700;
            position: relative
        }

        .tree ul li:before {
            content: "";
            display: block;
            width: 10px;
            height: 0;
            border-top: 1px solid;
            margin-top: -1px;
            position: absolute;
            top: 1em;
            left: 0
        }

        .tree ul li:last-child:before {
            background: #fff;
            height: auto;
            top: 1em;
            bottom: 0
        }

        .indicator {
            margin-right: 5px;
        }

        .tree li a {
            text-decoration: none;
            color: #369;
        }

        .tree li button,
        .tree li button:active,
        .tree li button:focus {
            text-decoration: none;
            color: #369;
            border: none;
            background: transparent;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            outline: 0;
        }

    </style>
@endpush
