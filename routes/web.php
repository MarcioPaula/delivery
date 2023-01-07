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

//use App\Http\Controllers\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FretesController;
use App\Http\Controllers\PromocoesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagamentosController;

Route::get('/login', function () {
    return view('pages.user-pages.login');
})->name('login');

Route::get('/', function () {
    return view('pages.user-pages.login');
})->name('login');

Route::post('/login/auth', [LoginController::class, 'login'])->name('login.auth');

Route::group(['middleware' => 'auth'], function () {

    Route::post('/usuarios/add', [DashboardController::class, 'adicionar'])->name('usuarios.add');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout.login');
    Route::get('/conectar', function () { return view('pages.conectar.conectar'); })->name('conectar.home');
    Route::get('pedidos', function () { return view('pages.pedidos.pedidos'); });
    Route::get('dashboard', function () { return view('pages.dashboard.dashboard'); });
    Route::get('usuarios', function () { return view('pages.usuarios.usuarios'); })->name('usuario.add');
    Route::get('produtos', function () { return view('pages.produtos.produtos'); });
    Route::get('categorias', function () { return view('pages.categoria.categorias'); });

    //Rotas Pagamentos
    Route::get('/pagamentos', [PagamentosController::class, 'index'])->name('pagamentos');

    //Rotas Promoções
    Route::get('/promocoes', [PromocoesController::class,'index']);
    Route::post('/promocoes/add', [PromocoesController::class,'adicionar'])->name('promocoes.add');
    Route::post('/promocoes/edit{id}', [PromocoesController::class,'editar'])->name('promocoes.editar');
    Route::post('/promocoes/delete{id}', [PromocoesController::class,'deletar'])->name('promocoes.delete');

    //Rotas de Fretes
    Route::get('/fretes', [FretesController::class,'index']);
    Route::post('/fretes/add', [FretesController::class,'adicionar'])->name('fretes.add');
    Route::post('/fretes/edit/{id}', [FretesController::class, 'editar'])->name('fretes.editar');
    Route::get('/fretes/delete/{id}', [FretesController::class, 'deletar'])->name('fretes.delete');

    Route::get('/suporte', [ContactController::class,'index'])->name('pages.usuario.usuario');
    Route::post('/suporte', [ContactController::class,'store'])->name('pages.usuario.usuario');

// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error-pages.error-404');
})->where('page','.*');

});
