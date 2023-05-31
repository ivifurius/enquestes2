@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tipuspreguntum
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tipuspreguntum</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipuspregunta.update', $tipuspreguntum->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipuspreguntum.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
