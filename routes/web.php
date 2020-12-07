<?php

use App\Http\Livewire\Coba;
use App\Http\Livewire\TeamEvent;
use App\Http\Livewire\TeamIndex;
use App\Http\Livewire\Tes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Auth::routes();

Route::get('rules', function () {
    return view('livewire.rules');
})->name('rules');

Route::get('schedule', function () {
    return view('livewire.schedule');
})->name('schedule');

Route::get('teams', function () {
    return view('livewire.teams');
})->name('teams');



Route::group(['middleware' => 'auth'], function () {
    Route::get('daftar-event', function () {
        $teams = App\Models\TeamEvent::where('user_id', Auth::id())->get();
        return view('daftarevent', compact('teams'));
    })->name('daftar-event');

    Route::get('team-terdaftar/{id}', TeamIndex::class);

    Route::get('players-event', function () {
        return view('players-event');
    })->name('players-event');

    Route::get('verify', function () {
        $teams = App\Models\TeamEvent::where('user_id', Auth::id())->get();
        return view('verify', compact('teams'));
    })->name('verify');

    Route::get('dashboard/admin', function () {
        if(Auth::id() == 1){
            return view('admin');
        } else {
            return redirect('/');
        }
    })->name('dashboard-admin');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
