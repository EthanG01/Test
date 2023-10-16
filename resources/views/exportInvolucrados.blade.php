<h2>
    <img src="assets/images/ojo.png" width="75" height="75">
   </h2>
<title>Involucrados Observatorio SRCH</title>
<h3>Involucrados del Observatorio SRCH</h3>
<br>
<table border="1">
    <thead>
        <tr>
    <th>Involucrado</th>
    <th>Organización</th>
    <th>Tipo</th>
    <th>Provincia</th>
    <th>Cantón</th>
    <th>Dirección</th>
    <th>Implicación</th>
    <th>Codigo</th>
    <th>Telefono</th>
    <th>Email</th>
    <th>Descripción</th>
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