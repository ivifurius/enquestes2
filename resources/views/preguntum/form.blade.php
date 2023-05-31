<div class="box box-info padding-1">
    <div class="box-body">
        
        


        <div class="form-group">
            {{ Form::label('enquesta_id') }}
            {{ Form::select('enquesta_id',$enquestum ,$preguntum->enquesta_id, ['class' => 'form-control' . ($errors->has('enquesta_id') ? ' is-invalid' : ''), 'placeholder' => 'Enquesta Id']) }}
            {!! $errors->first('enquesta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $preguntum->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('enunciat') }}
            {{ Form::text('enunciat', $preguntum->enunciat, ['class' => 'form-control' . ($errors->has('enunciat') ? ' is-invalid' : ''), 'placeholder' => 'Enunciat']) }}
            {!! $errors->first('enunciat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br>
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>