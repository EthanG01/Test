<h2>
    <img src="assets/images/ojo.png" width="75" height="75">
   </h2>
<title>Repositorios Observatorio SRCH</title>
<h3>Repositorios del Observatorio SRCH</h3>
<br>
<table border="1">
    <thead>
        <tr>
    <th>Persona</th>
    <th>Carrera</th>
    <th>Nombre</th>
    <th>Fecha</th>
    <th>Descripción</th>
    <th>Tipo</th>
        </tr>
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
                    </tr>
                @endforeach
            </tbody>
        </table>