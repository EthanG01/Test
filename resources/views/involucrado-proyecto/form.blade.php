<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('proyecto') }}
            {{ Form::select('proyecto_id',$proyectos, $involucradoProyecto->proyecto_id, ['class' => 'form-control' . ($errors->has('proyecto_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('proyecto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('involucrado') }}
            {{ Form::select('involucrados_id',$involucrados, $involucradoProyecto->involucrados_id, ['class' => 'form-control' . ($errors->has('involucrados_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('involucrados_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <p>
            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Agregar más involucrados
            </button>
          </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
            
                <div class="form-group">
                    {{ Form::label('involucrado') }}
                    {{ Form::select('inv2',$involucrados, $involucradoProyecto->inv2, ['class' => 'form-control' . ($errors->has('inv2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('inv2', '<div class="invalid-feedback">:message</div>') !!}
                    <div class="form-group">
                        {{ Form::label('involucrado') }}
                        {{ Form::select('inv3',$involucrados, $involucradoProyecto->inv3, ['class' => 'form-control' . ($errors->has('inv3') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        {!! $errors->first('inv3', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
          </div>
          <p>
            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExamplel" aria-expanded="false" aria-controls="collapseExample">
                Agregar más involucrados
            </button>
          </p>
          <div class="collapse" id="collapseExamplel">
            <div class="card card-body">
           
                <div class="form-group">
                    {{ Form::label('involucrado') }}
                    {{ Form::select('inv4',$involucrados, $involucradoProyecto->inv4, ['class' => 'form-control' . ($errors->has('inv4') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('inv4', '<div class="invalid-feedback">:message</div>') !!}

                    <div class="form-group">
                        {{ Form::label('involucrado') }}
                        {{ Form::select('inv5',$involucrados, $involucradoProyecto->inv5, ['class' => 'form-control' . ($errors->has('inv5') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        {!! $errors->first('inv5', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
          </div>

          <p>
            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExamplell" aria-expanded="false" aria-controls="collapseExample">
                Agregar más involucrados
            </button>
          </p>
          <div class="collapse" id="collapseExamplell">
            <div class="card card-body">
             
                <div class="form-group">
                    {{ Form::label('involucrado') }}
                    {{ Form::select('inv6',$involucrados, $involucradoProyecto->inv6, ['class' => 'form-control' . ($errors->has('inv6') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('inv6', '<div class="invalid-feedback">:message</div>') !!}
                    <div class="form-group">
                        {{ Form::label('involucrado') }}
                        {{ Form::select('inv7',$involucrados, $involucradoProyecto->inv7, ['class' => 'form-control' . ($errors->has('inv7') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        {!! $errors->first('inv7', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
          </div>

          <p>
            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExamplelll" aria-expanded="false" aria-controls="collapseExample">
                Agregar más involucrados
            </button>
          </p>
          <div class="collapse" id="collapseExamplelll">
            <div class="card card-body">
              
                <div class="form-group">
                    {{ Form::label('involucrado') }}
                    {{ Form::select('inv8',$involucrados, $involucradoProyecto->inv8, ['class' => 'form-control' . ($errors->has('inv8') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('inv8', '<div class="invalid-feedback">:message</div>') !!}
                    <div class="form-group">
                        {{ Form::label('involucrado') }}
                        {{ Form::select('inv9',$involucrados, $involucradoProyecto->inv9, ['class' => 'form-control' . ($errors->has('inv9') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                        {!! $errors->first('inv9', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
          </div>

          <p>
            <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExamplellll" aria-expanded="false" aria-controls="collapseExample">
                Agregar más involucrados
            </button>
          </p>
          <div class="collapse" id="collapseExamplellll">
            <div class="card card-body">
              
                <div class="form-group">
                    {{ Form::label('involucrado') }}
                    {{ Form::select('inv10',$involucrados, $involucradoProyecto->inv10, ['class' => 'form-control' . ($errors->has('inv10') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('inv10', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
          </div>

    </div>
</div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>