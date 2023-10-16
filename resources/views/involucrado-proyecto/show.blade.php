@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar involucrado-proyecto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  

                @includeif('partials.errors')

                <div class="card card-default">
                   
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('involucrado-proyectos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Proyecto:</strong>
                            {{ $involucradoProyecto->Proyecto->nombreProyecto}}
                        </div>
                            <div class="form-group">
                                <strong>Involucrado 1 y su organización:</strong>
                        @if ($involucradoProyecto->involucrado != '')
                        <td>{{ $involucradoProyecto->involucrado->nombrePersona}} {{$involucradoProyecto->involucrado->apellido1}} {{$involucradoProyecto->involucrado->apellido2}}
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->involucrado->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 2 y su organización:</strong>
                        @if ($involucradoProyecto->invo2 != '')
                        <td>{{ $involucradoProyecto->invo2->nombrePersona}} {{$involucradoProyecto->invo2->apellido1}} {{$involucradoProyecto->invo2->apellido2}}
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo2->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 3 y su organización:</strong>
                        @if ($involucradoProyecto->invo3 != '')
                        <td>{{ $involucradoProyecto->invo3->nombrePersona}} {{$involucradoProyecto->invo3->apellido1}} {{$involucradoProyecto->invo3->apellido2}} 
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo3->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 4 y su organización:</strong>
                        @if ($involucradoProyecto->invo4 != '')
                        <td>{{ $involucradoProyecto->invo4->nombrePersona}} {{$involucradoProyecto->invo4->apellido1}} {{$involucradoProyecto->invo4->apellido2}} 
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo4->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 5 y su organización:</strong>
                        @if ($involucradoProyecto->invo5 != '')
                        <td>{{ $involucradoProyecto->invo5->nombrePersona}} {{$involucradoProyecto->invo5->apellido1}} {{$involucradoProyecto->invo5->apellido2}} 
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo5->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 6 y su organización:</strong>
                        @if ($involucradoProyecto->invo6 != '')
                        <td>{{ $involucradoProyecto->invo6->nombrePersona}} {{$involucradoProyecto->invo6->apellido1}} {{$involucradoProyecto->invo6->apellido2}} 
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo6->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 7 y su organización:</strong>
                        @if ($involucradoProyecto->invo7 != '')
                        <td>{{ $involucradoProyecto->invo7->nombrePersona}} {{$involucradoProyecto->invo7->apellido1}} {{$involucradoProyecto->invo7->apellido2}}
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo7->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 8 y su organización:</strong>
                        @if ($involucradoProyecto->invo8 != '')
                        <td>{{ $involucradoProyecto->invo8->nombrePersona}} {{$involucradoProyecto->invo8->apellido1}} {{$involucradoProyecto->invo8->apellido2}} 
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo8->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 9 y su organización:</strong>
                        @if ($involucradoProyecto->invo9 != '')
                        <td>{{ $involucradoProyecto->invo9->nombrePersona}} {{$involucradoProyecto->invo9->apellido1}} {{$involucradoProyecto->invo9->apellido2}} 
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo9->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>
                            <div class="form-group">
                                <strong>Involucrado 10 y su organización:</strong>
                        @if ($involucradoProyecto->invo10 != '')
                        <td>{{ $involucradoProyecto->invo10->nombrePersona}} {{$involucradoProyecto->invo10->apellido1}} {{$involucradoProyecto->invo10->apellido2}} 
                            <strong>, Organizacion:</strong>
                            {{ $involucradoProyecto->invo10->organizacion->nombreOrganizacion}} </td>
                        @endif
                            </div>


                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
