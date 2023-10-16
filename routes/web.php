<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaClienteController;
use App\Http\Controllers\InvolucradoClienteController;
use App\Http\Controllers\ProyectoClienteController;
use App\Http\Controllers\InvolucradoproyectoClienteController;
use App\Http\Controllers\ArticuloClienteController;
use App\Http\Controllers\LibroRevistaClienteController;
use App\Http\Controllers\TesisClienteController;
use App\Http\Controllers\RepositorioClienteController;
use App\Http\Controllers\VistaDimensionController;

//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProvinciaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('nuevo', function () {
    return view('auth/redireccionamiento');
});
 //pdf
Route::get('temas/pdf', [App\Http\Controllers\TemaController::class, 'pdf'])->name('temas.pdf');
Route::get('proyectos/pdf', [App\Http\Controllers\ProyectoController::class, 'pdf'])->name('proyectos.pdf');
Route::get('usuarios/pdf', [App\Http\Controllers\UsuarioController::class, 'pdf'])->name('usuarios.pdf');
Route::get('involucrados/pdf', [App\Http\Controllers\InvolucradoController::class, 'pdf'])->name('involucrados.pdf');
Route::get('articulos/pdf', [App\Http\Controllers\ArticuloController::class, 'pdf'])->name('articulos.pdf');
Route::get('tesis/pdf', [App\Http\Controllers\TesiController::class, 'pdf'])->name('tesis.pdf');
Route::get('libro-revistas/pdf', [App\Http\Controllers\LibroRevistaController::class, 'pdf'])->name('libro-revistas.pdf');
Route::get('canton-organizacions/pdf', [App\Http\Controllers\CantonOrganizacionController::class, 'pdf'])->name('canton-organizacions.pdf');
Route::get('repositorios/pdf', [App\Http\Controllers\RepositorioController::class, 'pdf'])->name('repositorios.pdf');


//excel
Route::get('temas/excel', [App\Http\Controllers\TemaController::class, 'excel'])->name('temas.excel');
Route::get('usuarios/excel', [App\Http\Controllers\UsuarioController::class, 'excel'])->name('usuarios.excel');
Route::get('proyectos/excel', [App\Http\Controllers\ProyectoController::class, 'excel'])->name('proyectos.excel');
Route::get('involucrados/excel', [App\Http\Controllers\InvolucradoController::class, 'excel'])->name('involucrados.excel');
Route::get('articulos/excel', [App\Http\Controllers\ArticuloController::class, 'excel'])->name('articulos.excel');
Route::get('tesis/excel', [App\Http\Controllers\TesiController::class, 'excel'])->name('tesis.excel');
Route::get('libro-revistas/excel', [App\Http\Controllers\LibroRevistaController::class, 'excel'])->name('libro-revistas.excel');
Route::get('canton-organizacions/excel', [App\Http\Controllers\CantonOrganizacionController::class, 'excel'])->name('canton-organizacions.excel');
Route::get('repositorios/excel', [App\Http\Controllers\RepositorioController::class, 'excel'])->name('repositorios.excel');
Route::get('repositorios/estado{id}', [App\Http\Controllers\RepositorioController::class, 'estado'])->name('repositorios.estado');
Route::get('articulos/estado{id}', [App\Http\Controllers\ArticuloController::class, 'estado'])->name('articulos.estado');
Route::get('tesis/estado{id}', [App\Http\Controllers\TesiController::class, 'estado'])->name('tesis.estado');
Route::get('libro-revistas/estado{id}', [App\Http\Controllers\LibroRevistaController::class, 'estado'])->name('libro-revistas.estado');
Route::get('proyectos/estado{id}', [App\Http\Controllers\ProyectoController::class, 'estado'])->name('proyectos.estado');


Route::resource('/cligaleria', GaleriaClienteController::class);
Route::resource('/cliinvolucrado', InvolucradoClienteController::class);
Route::resource('/cliproyecto', InvolucradoproyectoClienteController::class);
Route::resource('/InvPro', InvolucradoproyectoClienteController::class);
Route::resource('/cliarticulo', ArticuloClienteController::class);
Route::resource('/clilibrorevis', LibroRevistaClienteController::class);
Route::resource('/clitesi', TesisClienteController::class);
Route::resource('/clirepo', RepositorioClienteController::class);
Route::get('clirepo/tipo/{filtro}', [RepositorioClienteController::class, 'filter'])->name('clirepo.filter');
// Route::get('cliarticulo/indicador_id/{filtro}', [ArticuloClienteController::class, 'filter'])->name('cliarticulo.filter');

//vista de articulos
Route::get('cliarticulo/nombreIndicador/{filtro}', [ArticuloClienteController::class, 'filter'])->name('cliarticulo.filter');
Route::get('cliarticulo/nombreDimension/{filtro2}', [ArticuloClienteController::class, 'filter2'])->name('cliarticulo.filter2');
Route::get('cliarticulo/nombreVariable/{filtro3}', [ArticuloClienteController::class, 'filter3'])->name('cliarticulo.filter3');
Route::get('cliarticulo/Etiqueta/{filtro4}', [ArticuloClienteController::class, 'filter4'])->name('cliarticulo.filter4');
Route::get('cliarticulo/tipo/{filtro5}', [ArticuloClienteController::class, 'filter5'])->name('cliarticulo.filter5');
Route::get('cliarticulo/buscar/{Buscar}', [ArticuloClienteController::class, 'Buscar'])->name('cliarticulo.Buscar');
//vista de Libros
Route::get('clilibrorevis/tipo/{filtro}', [LibroRevistaClienteController::class,'filter'])->name('clilibrorevis.filter');
Route::get('clilibrorevis/etiqueta/{filtro2}', [LibroRevistaClienteController::class,'filter2'])->name('clilibrorevis.filter2');
//vista de tesis
Route::get('clitesi/tipo/{filtro}', [TesisClienteController::class,'filter'])->name('clitesi.filter');
Route::get('clitesi/etiqueta/{filtro2}', [TesisClienteController::class,'filter2'])->name('clitesi.filter2');
Route::get('clitesi/Carrera/{filtro3}', [TesisClienteController::class,'filter3'])->name('clitesi.filter3');
//Galeria
Route::get('cligaleria/Tema/{filtro}', [GaleriaClienteController::class,'filter'])->name('cligaleria.filter');
Route::get('InvPro/proyecto/{filter}', [InvolucradoproyectoClienteController::class,'filter'])->name('InvPro.filter');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
   
    Route::resource('/temas', App\Http\Controllers\TemaController::class);
    Route::resource('/galerias', App\Http\Controllers\GaleriaController::class);
    Route::resource('/categorias', App\Http\Controllers\CategoriaController::class);
    Route::resource('/proyectos', App\Http\Controllers\ProyectoController::class);
    Route::resource('/cantons', App\Http\Controllers\CantonController::class);
    Route::resource('/involucrado-proyectos', App\Http\Controllers\InvolucradoProyectoController::class);
   
    Route::resource('/personas', App\Http\Controllers\PersonaController::class);
 
    Route::resource('/organizacions', App\Http\Controllers\OrganizacionController::class);
    Route::resource('/involucrados', App\Http\Controllers\InvolucradoController::class);

    Route::resource('/autors', App\Http\Controllers\AutorController::class);
    Route::resource('/etiquetas', App\Http\Controllers\EtiquetaController::class);
    Route::resource('/articulos', App\Http\Controllers\ArticuloController::class);
    Route::resource('/indicadors', App\Http\Controllers\IndicadorController::class);
    Route::resource('/variables', App\Http\Controllers\VariableController::class);
    Route::resource('/dimensions', App\Http\Controllers\DimensionController::class);
    Route::resource('/tesis', App\Http\Controllers\TesiController::class);
    Route::resource('/carreras', App\Http\Controllers\CarreraController::class);
    Route::resource('/tipo-tesis', App\Http\Controllers\TipoTesiController::class);
    Route::resource('/tipo-articulos', App\Http\Controllers\TipoArticuloController::class);
    Route::resource('/editorials', App\Http\Controllers\EditorialController::class);
    Route::resource('/tipo-libros', App\Http\Controllers\TipoLibroController::class);
    Route::resource('/libro-revistas', App\Http\Controllers\LibroRevistaController::class);
    Route::resource('/repositorioNuevo', App\Http\Controllers\RepositorioController::class);


});
