<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\AdmController;

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/cekLogin', [AuthController::class, 'cekLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/kota/{id}', [SuperController::class, 'get_kota']);
// Route::middleware(['admin'])->group(function () {
// 	Route::get('/home', [AdmController::class, 'home']);
// });
Route::get('/tabellaporan', [AuthController::class, 'tabellaporan']);
Route::get('/usergrafik', [AuthController::class, 'usergrafik']);
Route::get('/cetakpdfgrafik', [SuperController::class, 'cetakpdfgrafik']);

Route::middleware(['super'])->group(function () {
	Route::get('/superadmin', [SuperController::class, 'home']);
	Route::get('/data_Alumni', [SuperController::class, 'data_Alumni']);
	Route::get('/grafik', [SuperController::class, 'grafik']);
	Route::get('/cetaklaporan', [SuperController::class, 'cetaklaporan']);
	Route::get('/kelola_akun', [SuperController::class, 'kelola_akun']);
	Route::get('/formAlumni', [SuperController::class, 'formAlumni']);
	Route::post('/insertalumni/superadmin', [SuperController::class, 'insertdata']);
	Route::get('/editalumni/{id}', [SuperController::class, 'editalumni']);
	Route::post('/updatealumni/superadmin', [SuperController::class, 'update']);
	Route::get('/deletealumni/{id}', [SuperController::class, 'deletedata']);
	Route::get('/deleteakun/{id}', [SuperController::class, 'deleteakun']);
	Route::get('/editakun/{id}', [SuperController::class, 'editakun']);
	Route::post('/updateakun', [SuperController::class, 'updateakun']);
	//	Route::get('/kota/{id}', [SuperController::class, 'get_kota']);
	Route::get('/register', [SuperController::class, 'register']);
	Route::post('/registrasi', [SuperController::class, 'registrasi']);
	Route::get('/cetakpdf', [SuperController::class, 'cetakpdf']);
	Route::get('/cetakpdfgrafik', [SuperController::class, 'cetakpdfgrafik']);
	Route::get('/graph', [SuperController::class, 'cetakgrafik']);
	Route::get('/cetakxlsx', [SuperController::class, 'cetakxlsx']);
});

Route::middleware(['admin'])->group(function () {
	Route::get('/home', [AdmController::class, 'home']);
	Route::get('/data_Alumni_admin', [AdmController::class, 'data_Alumni_admin']);
	Route::get('/grafikadmin', [AdmController::class, 'grafikadmin']);
	Route::get('/cetaklaporanadmin', [AdmController::class, 'cetaklaporanadmin']);
	Route::get('/formAlumniadmin', [AdmController::class, 'formAlumniadmin']);
	Route::get('/admkota/{id}', [AdmController::class, 'get_city']);
	Route::post('/insertalumni/admin', [AdmController::class, 'insertdata']);
	Route::get('/editalumni_admin/{id}', [AdmController::class, 'editalumni_admin']);
	Route::post('/updatealumni/admin', [AdmController::class, 'update']);
	Route::get('/deletealumni_admin/{id}', [AdmController::class, 'deletedata']);
	Route::get('/cetakpdf_admin', [SuperController::class, 'cetakpdf']);
	Route::get('/cetakxlsx_admin', [SuperController::class, 'cetakxlsx']);
});
