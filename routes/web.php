<?php


use App\Http\Controllers\AspiranteController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\CitaController;
use App\Models\Aspirante;
use App\Models\Cita;
use App\Models\Solicitud;
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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
//use App\Http\Controllers\ConductoreController;
use App\Http\Controllers\Admin\driverController;
use App\Http\Controllers\Admin\UserController;




//Route::resources ('driver', driverController::class)->names('admin.driver');


Route::controller(driverController::class)->prefix('driver')->group(function(){

    Route::get('/ver','ver')->name('driver.ver');
    Route::get('/','index')->name('driver.index');
    Route::post('/','store')->name('driver.store');
    Route::get('/create','create')->name('driver.create');
    Route::get('/create','create')->name('aspiranteDriver.create');
    Route::get('/estado','create')->name('driver.createEstado');

    Route::get('/{driver}','edit')->name('driver.edit');
    Route::delete('/{driver}','destroy')->name('driver.destroy');
    Route::put('/{driver}','update')->name('driver.update');

    Route::get('/estado/{driver}','estado')->name('driver.estado');
    Route::put('/estado/{driver}','editEstado')->name('driver.editEstado');
    Route::get('/ver/{driver}','indexVer')->name('driver.indexVer');
    Route::get('/documento/{driver}','indexDocumento')->name('driver.indexDocumento');

});

Route::controller(AspiranteController::class)->prefix('aspirante')->group(function(){

    Route::get('/','index')->name('aspirante.index');
    Route::post('/','store')->name('aspirante.store');
    Route::get('/create','create')->name('aspirante.create');
    Route::get('/{aspirante}','edit')->name('aspirante.edit');
    Route::delete('/{aspirante}','destroy')->name('aspirante.destroy');
    Route::put('/{aspirante}','update')->name('aspirante.update');
    Route::get('/mostrar-archivo','AspiranteController@mostrarArchivo')->name('aspirante.mostrar');

});

Route::controller(SolicitudController::class)->prefix('solicitud')->group(function(){

    Route::get('/ver','ver')->name('solicitud.ver');
    Route::get('/','index')->name('solicitud.index');
    Route::post('/','store')->name('solicitud.store');
    Route::get('/create','create')->name('solicitud.create');
    Route::get('/{solicitud}','edit')->name('solicitud.edit');
    Route::delete('/{solicitud}','destroy')->name('solicitud.destroy');
    Route::put('/{solicitud}','update')->name('solicitud.update');


});

Route::controller(CitaController::class)->prefix('cita')->group(function(){

    Route::get('/','index')->name('cita.index');
    Route::get('/indexOperario','indexOperario')->name('cita.indexOperario');
    Route::post('/','store')->name('cita.store');
    Route::get('/create','create')->name('cita.create');
    Route::get('/{cita}','edit')->name('cita.edit');
    Route::delete('/{cita}','destroy')->name('cita.destroy');
    Route::put('/{cita}','update')->name('cita.update');


});



Route::resource('users', UserController::class)->only(['index','edit','update','destroy'])->names('admin.users');




Route::get("/documento/{documento}",function($documento){
    return view("admin.visualizadordocumento",compact("documento"));
})->name('documento.view');

Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');

    Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');

    Route::get('estado', function () {
        $aspirantes= Aspirante::paginate(5);
		return view('admin.aspirante.index',compact('aspirantes'));
	})->name('estado');

    Route::get('chat', function () {
        return view('pages.chat');
	})->name('chat');





	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});

//Route::resource('conductore',ConductoreController::class);

