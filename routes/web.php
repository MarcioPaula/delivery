<?php

//use App\Http\Controllers\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FretesController;
use App\Http\Controllers\PromocoesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagamentosController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;

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
    Route::get('produtos', function () { return view('pages.produtos.produtos'); });

    //Rotas Usuarios
    Route::get('/usuarios', [UsuarioController::class, 'index']);
    Route::get('/usuarios/delete{id}', [UsuarioController::class, 'deletar'])->name('usuario.delete');
    Route::post('/usuarios/add', [UsuarioController::class, 'adicionar'])->name('usuario.add');
    Route::post('/usuarios/edit{id}', [UsuarioController::class, 'editar'])->name('usuario.editar');

    //Rotas Categorias
    Route::get('/categorias', [CategoriaController::class, 'index']);
    Route::get('/categorias/delete{id}', [CategoriaController::class, 'deletar'])->name('categoria.delete');
    Route::post('/categorias/add', [CategoriaController::class, 'adicionar'])->name('categoria.add');
    Route::post('/categorias/edit{id}', [CategoriaController::class, 'editar'])->name('categoria.editar');

    //Rotas Pagamentos
    Route::get('/pagamentos', [PagamentosController::class, 'index'])->name('pagamentos');

    //Rotas Promoções
    Route::get('/promocoes', [PromocoesController::class,'index']);
    Route::get('/promocoes/delete{id}', [PromocoesController::class,'deletar'])->name('promocoes.delete');
    Route::post('/promocoes/add', [PromocoesController::class,'adicionar'])->name('promocoes.add');
    Route::post('/promocoes/edit{id}', [PromocoesController::class,'editar'])->name('promocoes.editar');

    //Rotas de Fretes
    Route::get('/fretes', [FretesController::class,'index']);
    Route::get('/fretes/delete/{id}', [FretesController::class, 'deletar'])->name('fretes.delete');
    Route::post('/fretes/add', [FretesController::class,'adicionar'])->name('fretes.add');
    Route::post('/fretes/edit/{id}', [FretesController::class, 'editar'])->name('fretes.editar');

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
