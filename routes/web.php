<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
 |Route::get Consulta
 |Route::post Guardar
 |Route::delete Eliminar
 |Route::put Actualizar
*/
Route::get('/', function () {
    //return view('welcome');
    return view("home");
});

Route::get('blog', function () {
  
    $posts = [
        ['id'=> 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id'=> 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $posts]);
});

Route::get('blog/{slug}', function ($slug) {
    //return view('welcome');
    //return "Listado de publicaciones: " . $slug;

    $post = $slug;

    return view('post', ['post' => $post]);
});

Route::get('buscar', function (Request $request) {
   //http://localhost/laravel9/larevel_prueba/public/buscar?query=php
    return $request->all();
});