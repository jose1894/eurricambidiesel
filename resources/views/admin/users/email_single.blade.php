@extends('admin.layouts.app')

@section('panel')
    <div class="row mb-none-30">
        <div class="col-xl-12">
            <div class="card">
                <form action="{{ route('admin.users.email.single', $user->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label class="font-weight-bold">@lang('Subject')</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" placeholder="Correo del Sujeto" name="subject"  required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label class="font-weight-bold">@lang('Message')</label>
                            </div>
                            <div class="col-md-10">
                                <textarea name="message" rows="10" class="form-control nicEdit" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-center">
                                <button type="submit" class="btn btn-block btn--primary mr-2">@lang('Send Email')</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
