<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;

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

Route::group(['middleware' => ['role:super-admin|admin']], function() {

    Route::resource('permissions', PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

    Route::resource('users', UserController::class);
    Route::get('users/{userId}/delete', [UserController::class, 'destroy']);

});
Route::resource('dashboard/books',AdminController::class)->middleware('admin');
Route::resource('roles', RoleController::class);

Route::get('login-form',[AdminController::class,'login_form'])->name('login.form');
Route::post('login-functionality',[AdminController::class,'login_functionality'])->name('login.functionality');
Route::group(['middleware'=>'admin'],function(){
    Route::get('logout',[AdminController::class,'logout'])->name('logout');
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
   
});

Route::get('addMainBook',[AdminController::class,'add_main_book'])->name('admin.add.mainBook');
Route::get('addSubBook',[AdminController::class,'add_sub_book'])->name('admin.add.subBook');
Route::get('addBook',[AdminController::class,'add_book'])->name('admin.add.Book');

require __DIR__.'/auth.php';
