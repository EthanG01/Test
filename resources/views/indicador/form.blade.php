<div class="box box-info padding-1">
    <div class="box-body">
        
     

        <div class="form-group">
            {{ Form::label('nombre Indicador') }}
            {{ Form::text('nombreIndicador', $indicador->nombreIndicador, ['class' => 'form-control' . ($errors->has('nombreIndicador') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>