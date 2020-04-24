<?php

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
})->name('/');

Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('promocionesyservicios', function () {
    return view('promocionesyservicios');
})->name('promocionesyservicios');




Route::get('servicios', 'ServiciosController@home')->name('servicios');
Route::get('promocionesyservicios', 'ServiciosController@promociones')->name('promocionesyservicios');
Route::get('aseguradoras', 'ServiciosController@aseguradoras')->name('aseguradoras');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('blog', 'BlogController@home')->name('blog');
Route::get('blog/{posts}', 'BlogController@show');

Route::get('eventos', 'Admin\EventosController@home')->name('eventos');
Route::get('eventos/{posts}', 'Admin\EventosController@show');

Route::get('directorio', 'Admin\DirectorioDoctorControler@home')->name('directorio');
Route::post('directorio', 'Admin\DirectorioDoctorControler@home');

Route::get('bolsadetrabajo', 'Admin\BolsaTrabajoController@home')->name('bolsadetrabajo');
Route::get('bolsadetrabajo/{posts}', 'Admin\BolsaTrabajoController@show');

Route::get('buscarpaciente', 'Admin\BuscarPacienteController@home')->name('buscarpaciente');
Route::post('buscarpaciente', 'Admin\BuscarPacienteController@obtenerFormulario');

Route::get('hacercita', function () {
    return view('menulateral.hacercita');
})->name('menulateral.hacercita');

Route::get('rentaventaconsultorios', function () {
    return view('menulateral.rentaventaconsultorios');
})->name('menulateral.rentaventaconsultorios');

Route::get('preadmision', function () {
    return view('menulateral.preadmision');
})->name('menulateral.preadmision');



// ======== Rutas del sistema administrativo =================
Route::auth();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('perfil', function () {
        return view('admin.perfil');
    })->name('admin.perfil');
    /**
     *Administracion de usuarios
     */
    Route::get('usuarios', 'PostController@index')->name('admin.blognoticias.verposts');

    /**
     *Blog
     */
    Route::get('posts', 'PostController@index')->name('admin.blognoticias.verposts');
    Route::get('posts/create', 'PostController@create')->name('admin.blognoticias.creaposts');  //CREAR
    Route::get('posts/{post}', 'PostController@edit')->name('admin.blognoticias.editposts');    //EDITAR
    Route::post('posts', 'PostController@store')->name('admin.blognoticias.store');             //PUBLICAR
    Route::put('posts/{post}', 'PostController@update')->name('admin.blognoticias.update');     //UPDATE
    Route::get('posts/{post}/delete', 'PostController@destroy')->name('admin.blognoticias.delete');     //DELETE
    Route::post('posts/{post}/photos', 'PhotosBlogController@store')->name('admin.post.photos.store');     //LEER
    Route::delete('photo/{photo}', 'PhotosBlogController@destroy')->name('admin.photos.destroy');     //DELETE
    /**
     *Directorio
     */
    Route::get('directorio', 'DirectorioDoctorControler@index')->name('admin.directoriomedico.verdirectorio');
    Route::get('directorio/create', 'DirectorioDoctorControler@create')->name('admin.directoriomedico.createdirectorio');    //CREATE
    Route::post('directorio', 'DirectorioDoctorControler@store')->name('admin.directoriomedico.store');                     //PUBLICAR
    Route::get('directorio/{post}', 'DirectorioDoctorControler@edit')->name('admin.directoriomedico.editdirectorio');       //UPDATE 
    Route::put('directorio/{post}', 'DirectorioDoctorControler@update')->name('admin.directoriomedico.update');             //UPDATE
    Route::delete('directorio/{post}/delete', 'DirectorioDoctorControler@destroy')->name('admin.directoriomedico.delete');     //DELETE

    /**
     * Bolsa de trabajo
     */
    Route::get('bolsadetrabajo', 'BolsaTrabajoController@index')->name('admin.bolsadetrabajo.vertrabajo');
    Route::get('bolsadetrabajo/create', 'BolsaTrabajoController@create')->name('admin.bolsadetrabajo.createtrabajo');    //CREATE
    Route::post('bolsadetrabajo', 'BolsaTrabajoController@store')->name('admin.bolsadetrabajo.store');                  //PUBLICAR
    Route::get('bolsadetrabajo/{post}', 'BolsaTrabajoController@edit')->name('admin.bolsadetrabajo.edittrabajo');       //UPDATE 
    Route::put('bolsadetrabajo/{post}', 'BolsaTrabajoController@update')->name('admin.bolsadetrabajo.update');             //UPDATE
    Route::get('bolsadetrabajo/{post}/delete', 'BolsaTrabajoController@destroy')->name('admin.bolsadetrabajo.delete');     //DELETE
    /**
     * Eventos
     */
    Route::get('eventos', 'EventosController@index')->name('admin.eventos.vereventos');
    Route::get('eventos/create', 'EventosController@create')->name('admin.eventos.creareventos');    //CREATE
    Route::post('eventos', 'EventosController@store')->name('admin.eventos.store');                  //PUBLICAR
    Route::get('eventos/{post}', 'EventosController@edit')->name('admin.eventos.editareventos');       //UPDATE 
    Route::put('eventos/{post}', 'EventosController@update')->name('admin.eventos.update');             //UPDATE
    Route::get('eventos/{post}/delete', 'EventosController@destroy')->name('admin.eventos.delete');     //DELETE
    /**
     * Buscar pacientes
     */
    Route::get('buscarpacientes', 'BuscarPacienteController@index')->name('admin.buscarpacientes.verpacientes'); 
    Route::get('buscarpacientes/create', 'BuscarPacienteController@create')->name('admin.buscarpacientes.createpacientes');    //CREATE
    Route::post('buscarpacientes', 'BuscarPacienteController@store')->name('admin.buscarpacientes.store');                  //PUBLICAR
    Route::get('buscarpacientes/{post}', 'BuscarPacienteController@edit')->name('admin.buscarpacientes.editarpacientes');       //UPDATE 
    Route::put('buscarpacientes/{post}', 'BuscarPacienteController@update')->name('admin.buscarpacientes.update');             //UPDATE
    Route::get('buscarpacientes/{post}/delete', 'BuscarPacienteController@destroy')->name('admin.buscarpacientes.delete');     //DELETE


});