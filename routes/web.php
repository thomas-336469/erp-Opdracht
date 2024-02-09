<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConversationController;

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

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/customers', [CustomerController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('customers.index');
Route::resource('customers', CustomerController::class);

Route::resource('contacts', ContactController::class);
Route::get('/contacts/create/{client_id}', [ContactController::class, 'create'])->name('contacts.create');
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::patch('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::resource('conversations', ConversationController::class);
Route::get('/conversations/create/{client_id}', [ConversationController::class, 'create'])->name('conversations.create');
Route::get('/conversations/{conversation}/edit', [ConversationController::class, 'edit'])->name('conversations.edit');
Route::patch('/conversations/{conversation}', [ConversationController::class, 'update'])->name('conversations.update');
Route::delete('/conversations/{conversation}', [ConversationController::class, 'destroy'])->name('conversations.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
