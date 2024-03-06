<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganisateurController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// ------------------------------------------------------------------------------------------------------------------
Route::get('/organisateur/dashboard', [OrganisateurController::class, 'index'])->name('Organisateur');
Route::get('/organisateur/MesEvenements', [EventController::class, 'index'])->name('Organisateur.evenement');
Route::post('/organisateur/AjouterEvent', [EventController::class, 'store'])->name('add.evenement');
Route::put('/organisateur/UpdateEvent/{event}', [EventController::class, 'update'])->name('update.evenement');
Route::delete('/organisateur/DeleteEvent/{event}', [EventController::class, 'destroy'])->name('delete.evenement');

// ------------------------------------------------------------------------------------------------------------------

// ---------------------------------------------------------------------------------------------------------------------------------
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('Admin');
Route::get('/admin/Evenement', [AdminController::class, 'eventIndex'])->name('Admin.events');
Route::get('/admin/Utilisateurs', [AdminController::class, 'usersIndex'])->name('Admin.users');
Route::get('/admin/Categories', [CategorieController::class, 'index'])->name('Admin.categorie');
route::post('/admin/Categories', [CategorieController::class, 'store'])->name('insert.categories');
route::put('/admin/Categories/{categorie} ', [CategorieController::class, 'update'])->name('update.categories');
route::delete('/admin/Categories/{categorie}', [CategorieController::class, 'destroy'])->name('delete.categories');
route::post('/admin/Utilisateurs/{user}',[AdminController::class,'blockAccess'])->name('admin.access');
route::post('/admin/Evenement/{eventId}',[AdminController::class,'publication'])->name('admin.pub');

// --------------------------------------------------------%-------------------------------------------------------------------------

Route::get('/client/home', [ClientController::class, 'index'])->name('Client');



require __DIR__.'/auth.php';
