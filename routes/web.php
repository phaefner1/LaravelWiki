<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

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

Route::middleware('auth')->group(function () {
    Route::get('/documents', [DocumentController::class, 'index']);
    Route::get('/documents/create', [DocumentController::class, 'create']);
    Route::post('/documents', [DocumentController::class, 'store']);
    Route::get('/documents/{document}', [DocumentController::class, 'show']);
    Route::delete('/documents/{document}', [DocumentController::class, 'destroy']);
    Route::get('/documents/{document}/edit', [DocumentController::class, 'edit']);
    Route::put('/documents/{document}', [DocumentController::class, 'update']);
});

Route::get('/', function () {
    if (auth()->check()) {
        $documents = auth()->user()->documents;
        return view('documents.index', ['documents' => $documents]);
    }
    return redirect('/login');
});

Route::get('/dashboard', function () {
    if (auth()->check()) {
        $documents = auth()->user()->documents;
        return view('documents.index', ['documents' => $documents]);
    }
    return redirect('/login');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
