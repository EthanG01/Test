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
    
    <h2>Lista de libros/revistas</h2>
   
    <table>
        <thead>
        <th style="color:#fff;">Editorial</th>
        <th style="color:#fff;">Tipo</th>
        <th style="color:#fff;">Autor</th>
        <th style="color:#fff;">Edición</th>
        <th style="color:#fff;">Título</th>
        <th style="color:#fff;">Cant Pag</th>
        <th style="color:#fff;">Etiqueta</th>
        <th style="color:#fff;">Fecha de publicación</th>
        <th style="color: #fff">Estado</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($libroRevistas as $libroRevista)
                        <tr>
                            
                            <td>{{ $libroRevista->editorial->nombreEditorial }}</td>
                            <td>{{ $libroRevista->tipolibro->nombreLibro }}</td>
                            <td>{{ $libroRevista->autor->nombreAutor }} {{ $libroRevista->autor->apellidoAutor1 }}</td>
                            <td>{{ $libroRevista->edicion }}</td>
                            <td>{{ $libroRevista->titulo }}</td>
                            <td>{{ $libroRevista->cant_pag }}</td>
                            <td>{{ $libroRevista->etiqueta->nombreEtiqueta }}</td>
                            <td>{{ $libroRevista->fechaPublicacionLR }}</td>

                            @can('habilitar-libroRevista')
                            @if ($libroRevista->estado == 0)
                                <td>
                                    <a class="btn btn-sm btn-danger"
                                        {{ route('libro-revistas.estado', $libroRevista->id) }}>Inactivo</a>
                                </td>
                            @endif
                            @if ($libroRevista->estado == 1)
                                <td>
                                    <a class="btn btn-sm btn-success"
                                        {{ route('libro-revistas.estado', $libroRevista->id) }}>Activo</a>

                                </td>
                            @endif
                        @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
</body>

</html>