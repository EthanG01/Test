<div class="box box-info padding-1">
    <div class="box-body">
        
      

        <div class="form-group">
            {{ Form::label('Provincia') }}
            {{ Form::select('nombreProvincia', [ 'Guanacaste' => 'Guanacaste','Limón' => 'Limón','San José' => 'San José','Alajuela' => 'Alajuela','Cartago' => 'Cartago','Heredia' => 'Heredia','Puntarenas' => 'Puntarenas'], $canton->nombreProvincia, ['class' => 'form-control' . ($errors->has('nombreProvincia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreProvincia', '<div class="invalid-feedback">:message</div>') !!}
        </div> 
        <div class="form-group">
            {{ Form::label('Nombre del cantón') }}
            {{ Form::text('nombreCanton', $canton->nombreCanton, ['class' => 'form-control' . ($errors->has('nombreCanton') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreCanton', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>