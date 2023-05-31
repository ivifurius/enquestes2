<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="box box-info padding-1">
        <div class="box-body">
            
            <div class="form-group">
                {{ Form::label('descripcio') }}
                {{ Form::label('descripcio', $enquestum->descripcio, ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcio']) }}
                {!! $errors->first('descripcio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <br>
            <div class="form-group">
                
                {{ Form::label('Pregunta nº1') }}
                {{ Form::label('enunciat', $preguntum, ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'enunciat']) }}
                {!! $errors->first('enunciat', '<div class="invalid-feedback">:message</div>') !!}
            </div>
    
        </div>
        <div class="box-footer mt20">
            <br>
            <button type="submit" class="btn btn-primary">{{ __('Crear enquesta') }}</button>
        </div>
    </div>
</body>
</html>