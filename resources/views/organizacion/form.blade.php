<div class="box box-info padding-1">
    <div class="box-body">
        
    
        <div class="form-group">
            {{ Form::label('Nombre organización') }}
            {{ Form::text('nombreOrganizacion', $organizacion->nombreOrganizacion, ['class' => 'form-control' . ($errors->has('nombreOrganizacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreOrganizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <a>Agregar imagen</a>
        <img class="col-md-4 col-form-label text-md-right" src="../../../public/fotoOrganizaciones/{{$organizacion->fotoOrganizacion}}" alt="" width="150">
       
        <div class="col-md-6">
            <input id="fotoOrganizacion" type="file" class="form-control @error('fotoOrganizacion') is-invalid @enderror" name="fotoOrganizacion" value="{{ $organizacion->fotoOrganizacion }}" autocomplete="fotoOrganizacion">

            @error('fotoOrganizacion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>

            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de organización') }}
            {{ Form::select('tipo', [ 'Pública' => 'Pública','Privada' => 'Privada'], $organizacion->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div> 
        <div class="form-group">
            {{ Form::label('cantón ') }}
            {{ Form::select('canton_id', $cantons, $organizacion->canton_id, ['class' => 'form-control' . ($errors->has('canton_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('canton_id', '<div class="invalid-feedback">:message</div>') !!}
           
        </div>
        <div class="form-group">
            {{ Form::label('dirección') }}
            {{ Form::text('direccion', $organizacion->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>