<h2>
    <img src="assets/images/ojo.png" width="75" height="75">
   </h2>
<title>Articulos Observatorio SRCH</title>
<h3>Articulos del Observatorio SRCH</h3>
<br>
<table border="1">
    <thead>
        <tr>
    <th>Dimensión</th>
    <th>Variable</th>
    <th>Indicador</th>
    <th>Tipo</th>
    <th>Autor</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Etiqueta</th>
    <th>Doi</th>
    <th>Fecha de publicación</th>
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
                      
                    </tr>
                @endforeach
            </tbody>
        </table>