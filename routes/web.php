<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuoerAdminController;
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



Route::get('/super-admin/dashboard/1',[SuoerAdminController::class,'index'])->name('dashboards.superadmindashboard.create');
Route::post('/super-admin/dashboard/store',[SuoerAdminController::class,'store'])->name('dashboards.superadmindashboard.post');
Route::get('/super-admin/dashboard/read',[SuoerAdminController::class,'show'])->name('dashboards.superadmindashboard.read');
Route::post('/super-admin/dashboard/edit',[SuoerAdminController::class,'edit'])->name('dashboards.superadmindashboard.edit');
Route::post('/super-admin/dashboard/update',[SuoerAdminController::class,'update'])->name('dashboards.superadmindashboard.update');
Route::post('/super-admin/dashboard/delete',[SuoerAdminController::class,'destroy'])->name('dashboards.superadmindashboard.delete');


Route::get('/2',[AdminController::class,'index'])->name('dashboards.admindashboard.create');
Route::post('/admin/dashboard/store',[AdminController::class,'store'])->name('dashboards.admindashboard.post');
Route::get('//admin/dashboard',[AdminController::class,'show'])->name('dashboards.admindashboard.read');
Route::post('/admin/dashboard/edit',[AdminController::class,'edit'])->name('dashboards.admindashboard.edit');
Route::post('/admin/dashboard/update',[AdminController::class,'update'])->name('dashboards.admindashboard.update');
Route::post('/admin/dashboard/delete',[AdminController::class,'destroy'])->name('dashboards.admindashboard.delete');




Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/signup', [AuthController::class, 'showSignup']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/user/dashboard', function () {
    return view('dashboards.user');
})->middleware('auth');

Route::get('/admin/dashboard', function () {
    return view('dashboards.admindashboard.create');
})->middleware('auth');

Route::get('/super-admin/dashboard', function () {
    return view('dashboards.superadmindashboard.create');
})->middleware('auth');