<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla tema
            'ver-tema',
            'crear-tema',
            'editar-tema',
            'borrar-tema',

            //Operacions sobre tabla galeria
            'ver-galeria',
            'crear-galeria',
            'editar-galeria',
            'borrar-galeria',

            //Operacions sobre tabla canton
            'ver-canton',
            'crear-canton',
            'editar-canton',
            'borrar-canton',

            //Operacions sobre tabla organizacion
            'ver-organizacion',
            'crear-organizacion',
            'editar-organizacion',
            'borrar-organizacion',

            //Operacions sobre tabla categoria
            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',

            //Operacions sobre tabla proyecto
            'ver-proyecto',
            'crear-proyecto',
            'editar-proyecto',
            'borrar-proyecto',
            'habilitar-proyecto',

            //Operacions sobre tabla involucrado
            'ver-involucrado',
            'crear-involucrado',
            'editar-involucrado',
            'borrar-involucrado',

            //Operacions sobre tabla invProyecto
            'ver-invProyecto',
            'crear-invProyecto',
            'editar-invProyecto',
            'borrar-invProyecto',

            //Operacions sobre tabla tipoArticulo
            'ver-tipoArticulo',
            'crear-tipoArticulo',
            'editar-tipoArticulo',
            'borrar-tipoArticulo',

            //Operacions sobre tabla articulo
            'ver-articulo',
            'crear-articulo',
            'editar-articulo',
            'borrar-articulo',
            'habilitar-articulo',

            //Operacions sobre tabla autor
            'ver-autor',
            'crear-autor',
            'editar-autor',
            'borrar-autor',

            //Operacions sobre tabla carrera
            'ver-carrera',
            'crear-carrera',
            'editar-carrera',
            'borrar-carrera',

            //Operacions sobre tabla variable
            'ver-variable',
            'crear-variable',
            'editar-variable',
            'borrar-variable',

            //Operacions sobre tabla tipoTesis
            'ver-tipoTesis',
            'crear-tipoTesis',
            'editar-tipoTesis',
            'borrar-tipoTesis',

            //Operacions sobre tabla tipoLibro
            'ver-tipoLibro',
            'crear-tipoLibro',
            'editar-tipoLibro',
            'borrar-tipoLibro',

            //Operacions sobre tabla tesis
            'ver-tesis',
            'crear-tesis',
            'editar-tesis',
            'borrar-tesis',
            'habilitar-tesis',

            //Operacions sobre tabla libroRevista
            'ver-libroRevista',
            'crear-libroRevista',
            'editar-libroRevista',
            'borrar-libroRevista',
            'habilitar-libroRevista',

            //Operacions sobre tabla indicador
            'ver-indicador',
            'crear-indicador',
            'editar-indicador',
            'borrar-indicador',

            //Operacions sobre tabla etiqueta
            'ver-etiqueta',
            'crear-etiqueta',
            'editar-etiqueta',
            'borrar-etiqueta',

            //Operacions sobre tabla editorial
            'ver-editorial',
            'crear-editorial',
            'editar-editorial',
            'borrar-editorial',

            //Operacions sobre tabla dimension
            'ver-dimension',
            'crear-dimension',
            'editar-dimension',
            'borrar-dimension',

            //Operacions sobre tabla repositorio
            'ver-repositorio',
            'crear-repositorio',
            'editar-repositorio',
            'borrar-repositorio',
            'habilitar-repositorio',

            //Operacions para visualizar funcion
            'ver-contenido',
            'ver-vista'
        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}
