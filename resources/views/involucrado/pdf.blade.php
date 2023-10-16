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
    
    <h2>Lista de involucrado</h2>
   
    <table>
        <thead>
            <th style="color:#fff;">Involucrado</th>
            <th style="color:#fff;">Organización</th>
            <th style="color:#fff;">Tipo</th>
            <th style="color:#fff;">Provincia</th>
            <th style="color:#fff;">Cantón</th>
            <th style="color:#fff;">Dirección</th>
            <th style="color:#fff;">Implicación</th>
            <th style="color:#fff;">Codigo</th>
            <th style="color:#fff;">Telefono</th>
            <th style="color:#fff;">Email</th>
            <th style="color:#fff;">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($involucrados as $involucrado)
                        <tr>
                           
                            
                            <td>{{ $involucrado->nombrePersona }} {{ $involucrado->apellido1 }} {{ $involucrado->apellido2 }} </td>

                            <td>{{ $involucrado->Organizacion->nombreOrganizacion }}</td>
                            <td>{{ $involucrado->Organizacion->tipo }} </td>
                           
                            <td>{{ $involucrado->Organizacion->Canton->nombreProvincia}}</td>
                            <td>{{ $involucrado->Organizacion->Canton->nombreCanton}}</td>
                            <td>{{ $involucrado->Organizacion->direccion}}</td>
                            <td>{{ $involucrado->implicacion }}</td>
                            <td>{{ $involucrado->codigo }}</td>
                            <td>{{ $involucrado->telefonoPersona }}</td>
                            <td>{{ $involucrado->emailPersona }}</td>
                            <td>{{ $involucrado->descripcionInvolucrado }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
</body>

</html>