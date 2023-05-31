@extends('layouts.app')

@section('template_title')
    {{ $enquestador->name ?? "{{ __('Show') Enquestador" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Enquestador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('enquestadors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $enquestador->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Localitat:</strong>
                            {{ $enquestador->localitat }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
