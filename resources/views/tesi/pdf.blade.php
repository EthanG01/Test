<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Observatorio SRCH</title>
        
        <style>
      body{
    font-family: Arial;
}
table{
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
    min-width: 150px;
    padding: 0.5rem;
    
    
}
p, h3, h2, h1{
    text-align: center;
}
th, td{
    border: solid 1px  #0f362d;
    padding: 5px;
    font-size: 10px;
}

thead {
    background-color: #6777EF;
    border-bottom: solid 2px #3d4790;
    color: white;

}
tr:nth-child(even){
    background-color: #e0e0e0;
}
	hr{
		page-break-after: always;
		border: none;
		margin: 0;
		padding: 0;
	}

 img{
        align-content: center;
        width: 75px;
        height: 40px;
    }
  
        </style>
</head>
<body>
   <h2>
    <img src="assets/images/ojo.png">
   </h2>
   <h3>Observatorio SRCH</h3>
    <h2>Lista de tesis</h2>
   
    <table>
        <thead>
        <th style="color:#fff;">Carrera</th>
        <th style="color:#fff;">Tipotesis</th>
        <th style="color:#fff;">Autor</th>
        <th style="color:#fff;">Nombre</th>
        <th style="color:#fff;">Descripción</th>
        <th style="color:#fff;">Etiqueta</th>
        <th style="color:#fff;">Fecha de publicación</th>
        <th style="color:#fff;">Estado</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tesis as $tesi)
                        <tr>
                            
                            
                            <td>{{ $tesi->Carrera->nombreCarrera }}</td>
                            <td>{{ $tesi->TipoTesi->nombreTesis }}</td>
                            <td>{{ $tesi->Autor->nombreAutor }} {{ $tesi->Autor->apellidoAutor1 }}</td>
                            <td>{{ $tesi->nombreTes }}</td> 
                            <td>{{ $tesi->descripcionTes }}</td>
                            <td>{{ $tesi->Etiqueta->nombreEtiqueta}}</td>
                            <td>{{ $tesi->fechaPublicacionTes }}</td>
                            @can('habilitar-tesi')
                                    @if ($tesi->estado == 0)
                                        <td>
                                            <a class="btn btn-sm btn-danger"
                                                {{ route('tesis.estado', $tesi->id) }}>Inactivo</a>
                                        </td>
                                    @endif
                                    @if ($tesi->estado == 1)
                                        <td>
                                            <a class="btn btn-sm btn-success"
                                                {{ route('tesis.estado', $tesi->id) }}>Activo</a>

                                        </td>
                                    @endif
                                @endcan

                        
                        </tr>
                    @endforeach
                </tbody>
            </table>

    
</body>

</html>