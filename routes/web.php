<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

/*Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');*/

Route::controller(PageController::class)->group(function() {
    
    Route::get('/',             'home')->name('home');

    Route::get('blog',          'blog')->name('blog');

    Route::get('blog/{post:slug}',   'post')->name('post');

});

Route::get('buscar', function (Request $request) {
   //http://localhost/laravel9/larevel_prueba/public/buscar?query=php
    return $request->all();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//trabaja con todas las rutas menos con la ruta show
//php artisan route:list
//en la lista estaria los nombres para los metodos
Route::resource('posts', PostController::class)->except(['show']);

require __DIR__.'/auth.php';
