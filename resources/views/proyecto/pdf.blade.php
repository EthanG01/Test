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
    
    <p>Lista de proyectos</p>
   
    <table>
        <thead>
        <th style="color:#fff;">Categoria</th>
        <th style="color:#fff;">Provinicia</th>
        <th style="color:#fff;">Canton</th>
        <th style="color:#fff;">Nombre</th>
        <th style="color:#fff;">Fecha de inicio</th>
        <th style="color:#fff;">Fecha de finalización</th>
        <th style="color:#fff;">Descripción</th>
                    
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                        <tr>
                   
                            <td>{{ $proyecto->Categoria->nombreCategoria }}</td>

                            <td>{{ $proyecto->Canton->nombreProvincia }}</td>
                            <td>{{ $proyecto->Canton->nombreCanton }}</td>
                            <td>{{ $proyecto->nombreProyecto }}</td>
                            <td>{{ $proyecto->fechaInicial }}</td>
                            <td>{{ $proyecto->fechaFinalizacion }}</td>
                            <td>{{ $proyecto->descripcionProyecto }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    
</body>

</html>