@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form action="" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">

                                <label for="">{{__('Email Method')}}</label>
                                <select name="email_method" id="" class="form-control">

                                    <option value="php" {{ $gs->email_method == 'php' ? 'selected' : '' }}>{{__('PHPMail')}}</option>
                                    <option value="smtp" {{ $gs->email_method == 'smtp' ? 'selected' : '' }}>
                                        {{__('SMTP Mail')}}</option>

                                </select>

                            </div>

                            <div class="form-group col-md-6">

                                <label for="">{{__('Email Sent From')}}</label>

                                <input type="email" name="from_email" class="form-control form_control"  value="{{$gs->email_from}}">

                            </div>

                            <div class="form-group col-md-12 smtp-config">

                                @if ($gs->email_method == 'smtp')

                                    <div class="row">

                                        <div class="col-md-3">

                                            <label for="">{{__('SMTP HOST')}}</label>
                                            <input type="text" name="smtp_config[smtp_host]"
                                                 class="form-control"
                                                value="{{ @$gs->smtp_config->smtp_host }}">

                                        </div>

                                        <div class="col-md-3">

                                            <label for="">{{__('SMTP Username')}}</label>
                                            <input type="text" name="smtp_config[smtp_username]"
                                                 class="form-control"
                                                value="{{ @$gs->smtp_config->smtp_username }}">

                                        </div>

                                        <div class="col-md-3">

                                            <label for="">{{__('SMTP Password')}}</label>
                                            <input type="text" name="smtp_config[smtp_password]"
                                                 class="form-control"
                                                value="{{ @$gs->smtp_config->smtp_password }}">

                                        </div>
                                        <div class="col-md-3">

                                            <label for="">{{__('SMTP port')}}</label>
                                            <input type="text" name="smtp_config[smtp_port]"
                                                 class="form-control"
                                                value="{{ @$gs->smtp_config->smtp_port }}">

                                        </div>

                                        <div class="col-md-6 mt-3">

                                            <label for="">{{__('SMTP Encryption')}}</label>
                                            <select name="smtp_config[smtp_encryption]" id="encryption" class="form-control">
                                                <option value="ssl"
                                                    {{ @$gs->smtp_config->smtp_encryption == 'ssl' ? 'selected' : '' }}>
                                                    {{__('SSL')}}</option>
                                                <option value="tls"
                                                    {{ @$gs->smtp_config->smtp_encryption == 'tls' ? 'selected' : '' }}>
                                                    {{__('TLS')}}</option>
                                            </select>

                                            <code class="hint"></code>

                                        </div>

                                    </div>


                                @endif

                            </div>

                            <div class="form-group col-md-12">

                                <button type="submit" class="btn btn-primary">{{__('Update Email Configuration')}}</button>

                            </div>

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

            $('select[name=email_method]').on('change', function() {
                if ($(this).val() == 'smtp') {
                    var html = `
                
                     <div class="row">

                                    <div class="col-md-3">

                                        <label for="">{{__('SMTP HOST')}}</label>
                                        <input type="text" name="smtp_config[smtp_host]"  class="form-control" value="{{ @$gs->smtp_config->smtp_host }}">

                                    </div> 
                                    
                                    <div class="col-md-3">

                                        <label for="">{{__('SMTP Username')}}</label>
                                        <input type="text" name="smtp_config[smtp_username]"  class="form-control" value="{{ @$gs->smtp_config->smtp_username }}">

                                    </div>
                                    
                                    <div class="col-md-3">

                                        <label for="">{{__('SMTP Password')}}</label>
                                        <input type="text" name="smtp_config[smtp_password]"  class="form-control" value="{{ @$gs->smtp_config->smtp_password }}">

                                    </div>
                                    <div class="col-md-3">

                                        <label for="">{{__('SMTP port')}}</label>
                                        <input type="text" name="smtp_config[smtp_port]"  class="form-control" value="{{ @$gs->smtp_config->smtp_port }}">

                                    </div> 
                                    
                                    <div class="col-md-6 mt-3">

                                        <label for="">{{__('SMTP Encryption')}}</label>
                                       <select name="smtp_config[smtp_encryption]" id="encryption" class="form-control">
                                        <option value="ssl" {{ @$gs->smtp_config->smtp_encription == 'ssl' ? 'selected' : '' }}>{{__('SSL')}}</option>
                                        <option value="tls" {{ @$gs->smtp_config->smtp_encription == 'tls' ? 'selected' : '' }}>{{__('TLS')}}</option>
                                       </select>

                                    </div>
                                
                                </div>
                
                `;

                    $('.smtp-config').html(html)

                } else {
                    $('.smtp-config').html('')
                }
            })

            $(document).on('change','#encryption',function(){
                if($(this).val() == 'ssl'){
                    $('.hint').text("For SSL please add ssl:// before host otherwise it won't work")
                }else{
                    $('.hint').text('')
                }
            })
        })
    </script>

@endpush
