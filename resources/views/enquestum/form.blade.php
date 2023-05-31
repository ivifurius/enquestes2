<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcio') }}
            {{ Form::text('descripcio', $enquestum->descripcio, ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcio']) }}
            {!! $errors->first('descripcio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('localitat') }}
            {{ Form::text('localitat', $enquestum->localitat, ['class' => 'form-control' . ($errors->has('localitat') ? ' is-invalid' : ''), 'placeholder' => 'Localitat']) }}
            {!! $errors->first('localitat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br>
        <button type="submit" class="btn btn-primary">{{ __('Crear enquesta') }}</button>
    </div>
</div>