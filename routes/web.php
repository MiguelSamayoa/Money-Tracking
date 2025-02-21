<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Livewire\Welcome;

Route::get('/', Welcome::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/change-language', function (Request $request) {
    $locale = $request->input('locale');
    Session::put('locale', $locale);
    App::setLocale($locale);
    return redirect()->back();
})->name('changeLang');
