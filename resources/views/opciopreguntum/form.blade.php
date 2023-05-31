<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $opciopreguntum->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcio') }}
            {{ Form::text('descripcio', $opciopreguntum->descripcio, ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcio']) }}
            {!! $errors->first('descripcio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>