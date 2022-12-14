@extends('admin.layouts.app')

@section('panel')

    <div class="row mb-none-30">

        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive table-responsive--sm">
                        <table class="table align-items-center table--light">
                            <thead>
                            <tr>
                                <th>@lang('Short Code')</th>
                                <th>@lang('Description')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>@lang("@{{number}}")</th>
                                <td>@lang('Number')</td>
                            </tr>
                            <tr>
                                <th>@lang("@{{message}}")</th>
                                <td>@lang('Message')</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.sms-template.global') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label>@lang('SMS API')</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="@lang('SMS API Configuration')" name="sms_api" value="{{ $general_setting->sms_api }}" required/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-block btn--primary mr-2">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


