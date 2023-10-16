<h2>
    <img src="assets/images/ojo.png" width="75" height="75">
   </h2>
<title>Tesis Observatorio SRCH</title>
<h3>Tesis del Observatorio SRCH</h3>
<br>
<table border="1">
    <thead>
        <tr>
    <th>Carrera</th>
    <th>Tipo tesis</th>
    <th>Autor</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Etiqueta</th>
    <th>Fecha de publicación</th>
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
                      
                    </tr>
                @endforeach
            </tbody>
        </table>