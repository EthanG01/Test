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
    
    <h2>Lista de articulos</h2>
   
    <table>
        <thead>
            <th style="color:#fff;">Dimensión</th>
            <th style="color:#fff;">Variable</th>
            <th style="color:#fff;">Indicador</th>
            <th style="color:#fff;">Tipo</th>
            <th style="color:#fff;">Autor</th>
            <th style="color:#fff;">Nombre</th>
            <th style="color:#fff;">Descripción</th>
            <th style="color:#fff;">Etiqueta</th>
            <th style="color:#fff;">Doi</th>
            <th style="color:#fff;">Fecha publicación</th>
            @can('habilitar-articulo')
            <th style="color:#fff;">Estado</th>
             @endcan

                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->Dimension->nombreDimension }}</td>
                            <td>{{ $articulo->Variable->nombreVariable }}</td>
                            <td>{{ $articulo->Indicador->nombreIndicador }}</td>

                            <td>{{ $articulo->TipoArticulo->nombreArticulo }}</td>
                            <td>{{ $articulo->Autor->nombreAutor }} {{ $articulo->Autor->apellidoAutor1 }}</td>
                            <td>{{ $articulo->nombreArt }}</td>
                            <td>{{ $articulo->descripcionArt }}</td>
                            <td>{{ $articulo->Etiqueta->nombreEtiqueta }}</td>
                            <td>{{ $articulo->doi }}</td>
                            

                            <td>{{ $articulo->fechaPublicacionArt }}</td>
                            @can('habilitar-articulo')
                            @if ($articulo->estado == 0)
                                <td>
                                    <a class="btn btn-sm btn-danger"
                                        {{ route('articulos.estado', $articulo->id) }}>Inactivo</a>
                                </td>
                            @endif
                            @if ($articulo->estado == 1)
                                <td>
                                    <a class="btn btn-sm btn-success"
                                        {{ route('articulos.estado', $articulo->id) }}>Activo</a>

                                </td>
                                @endif
                                @endcan
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
</body>

</html>