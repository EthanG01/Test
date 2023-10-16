<h2>
    <img src="assets/images/ojo.png" width="75" height="75">
   </h2>
<title>Proyectos Observatorio SRCH</title>
<h3>Proyectos del Observatorio SRCH</h3>
<br>
<table border="1">
    <thead>
        <tr>
    <th>Categoria</th>
    <th>Provinicia</th>
    <th>Canton</th>
    <th>Nombre</th>
    <th>Fecha de inicio</th>
    <th>Fecha de finalización</th>
    <th>Descripción</th>
        </tr>
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