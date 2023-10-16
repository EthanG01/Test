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
    
    <p>Lista de repositorio</p>
   
    <table>
        <thead>
            <th style="color:#fff;">Persona</th>
            <th style="color:#fff;">Carrera</th>
            <th style="color:#fff;">Nombre</th>
            <th style="color:#fff;">Fecha</th>
            <th style="color:#fff;">Descripción</th>
            <th style="color:#fff;">Tipo</th>
            @can('habilitar-repositorio')
                <th style="color:#fff;">Estado</th>
            @endcan
                    
                </thead>
                <tbody>
                    @foreach ($repositorios as $repositorio)
                        <tr>
                   
                            <td>{{ $repositorio->Autor->nombreAutor }} {{ $repositorio->Autor->apellidoAutor1 }}</td>
                            <td>{{ $repositorio->carrera->nombreCarrera }}</td>
                            <td>{{ $repositorio->nombre }}</td>
                            <td>{{ $repositorio->fecha }}</td>
                            <td>{{ $repositorio->descripcion }}</td>
                            <td>{{ $repositorio->tipo }}</td>
                            
                            @can('habilitar-repositorio')
                                @if ($repositorio->estado == 0)
                                    <td>
                                        <a class="btn btn-sm btn-success"
                                            {{ route('repositorios.estado', $repositorio->id) }}>Habilitar</a>
                                    </td>
                                @endif
                                @if ($repositorio->estado == 1)
                                    <td>
                                        <a class="btn btn-sm btn-danger"
                                            {{ route('repositorios.estado', $repositorio->id) }}>Desabilitar</a>

                                    </td>
                                @endif
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>

    
</body>

</html>