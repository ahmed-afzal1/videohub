@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-9 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h5>{{__('Variables Meaning')}}</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>{{__('Variable')}}</th>
                                <th>{{__('Meaning')}}</th>
                            </tr>

                            @foreach ($template->meaning as $key => $temp)
                                <tr>

                                    <td>{{ '{' . $key . '}' }}</td>
                                    <td>{{ $temp }}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-9 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-body">

                    <form action="" method="post">

                        @csrf

                        <div class="row">


                            <div class="form-group col-md-12">

                                <label for="">{{__('Subject')}}</label>
                                <input type="text" name="subject"  class="form-control" value="{{ $template->subject }}">


                            </div>

                            <div class="form-group col-md-12">

                                <label for="">{{__('Template')}}</label>
                                <textarea name="template" 
                                    class="form-control summernote">{{($template->template)}}</textarea>

                            </div>


                            <button type="submit" class="btn btn-primary">{{__('Update Email Template')}}</button>


                        </div>



                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')

    <script>
        $(function() {
            'use strict'
            $('.summernote').summernote();
        })
    </script>
@endpush