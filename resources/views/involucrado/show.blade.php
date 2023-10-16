@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar involucrado</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('involucrados.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona:</strong>
                            {{ $involucrado->nombrePersona }} 
                            {{ $involucrado->apellido1 }} 
                            {{ $involucrado->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $involucrado->telefonoPersona }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $involucrado->emailPersona }}
                        </div>
                        <div class="form-group">
                            <strong>Organizacion:</strong>
                            <img class="rounded-circle" src="{{asset('/fotoOrganizaciones/'.$involucrado->Organizacion->fotoOrganizacion)}}" alt="{{$involucrado->Organizacion->fotoOrganizaciones}}" width="100" height="100">
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $involucrado->Organizacion->nombreOrganizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $involucrado->Organizacion->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $involucrado->Organizacion->Canton->nombreProvincia}}
                            {{ $involucrado->Organizacion->Canton->nombreCanton}}
                        </div>
                        <div class="form-group">
                            <strong>Direccion exacta:</strong>
                            {{ $involucrado->Organizacion->direccion}}
                        </div>
                        <div class="form-group">
                            <strong>Implicacion:</strong>
                            {{ $involucrado->implicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $involucrado->descripcionInvolucrado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
