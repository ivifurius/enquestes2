@extends('layouts.app')

@section('template_title')
    {{ $enquestum->name ?? "{{ __('Show') Enquestum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcio:</strong>
                            {{ $enquestum->descripcio }}
                        </div>
                        <div class="form-group">
                            <strong>Localitat:</strong>
                            {{ $enquestum->localitat }}
                        </div>
                    </div>
                    <div class="card-header">
                        
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('enquesta.index') }}"> {{ __('Enrrere') }}</a>
                        </div>
                    </div>
                </div>
                <br>
                @include('enquestum.form2')
            </div>
        </div>
    </section>
@endsection
