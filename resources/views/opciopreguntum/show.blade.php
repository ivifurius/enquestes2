@extends('layouts.app')

@section('template_title')
    {{ $opciopreguntum->name ?? "{{ __('Show') Opciopreguntum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Opciopreguntum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('opciopregunta.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $opciopreguntum->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcio:</strong>
                            {{ $opciopreguntum->descripcio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
