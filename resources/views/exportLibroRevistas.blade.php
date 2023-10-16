<h2>
    <img src="assets/images/ojo.png" width="75" height="75">
   </h2>
<title>LibroRevistas Observatorio SRCH</title>
<h3>LibroRevistas del Observatorio SRCH</h3>
<br>
<table border="1">
    <thead>
        <tr>
    <th>Editorial</th>
    <th>Tipo</th>
    <th>Autor</th>
    <th>Edición</th>
    <th>Título</th>
    <th>Cant Pag</th>
    <th>Etiqueta</th>
    <th>Fecha de publicacion</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>