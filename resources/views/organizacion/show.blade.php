@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar organización</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('organizacions.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                        <div class="form-group">
                            <strong>Tipo :</strong>
                            {{  $organizacion->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $organizacion->nombreOrganizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            <img class="rounded-circle" src="{{asset('/fotoOrganizaciones/'.$organizacion->fotoOrganizacion)}}" alt="{{$organizacion->fotoOrganizaciones}}" width="100" height="100">
                          
                        </div>
                        <div class="form-group">
                            <strong>Cantón :</strong>
                            {{ $organizacion->Canton->nombreCanton}}
                        </div>
                        <div class="form-group">
                            <strong>Direccion :</strong>
                            {{ $organizacion->direccion}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
