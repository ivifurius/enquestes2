@extends('layouts.app')

@section('template_title')
    {{ $preguntum->name ?? "{{ __('Show') Preguntum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Preguntum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pregunta.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Enquesta Id:</strong>
                            {{ $preguntum->enquesta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $preguntum->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Enunciat:</strong>
                            {{ $preguntum->enunciat }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
