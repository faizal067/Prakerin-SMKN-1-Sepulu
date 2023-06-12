<?php

use App\Models\Laporan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LokalController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DaftarAdminController;
use App\Http\Controllers\LogbookHomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    Route::middleware('role:admin,operator')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        // positions
        Route::resource('/positions', PositionController::class)->only(['index', 'create']);
        Route::get('/positions/edit', [PositionController::class, 'edit'])->name('positions.edit');
        // employees
        Route::resource('/employees', EmployeeController::class)->only(['index', 'create']);
        Route::get('/employees/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
        // daftar prakerin
        Route::resource('/daftars', DaftarAdminController::class)->only(['index']);
        Route::post('/daftars/{id}/status',[DaftarAdminController::class, 'acceptDaftar'])->name('daftars.acceptDaftar');
        Route::post('/daftars/{id}/tampil',[DaftarAdminController::class, 'detail'])->name('daftars.tampil');
        Route::post('/daftars/{id}/not-status',[DaftarAdminController::class, 'notacceptDaftar'])->name('daftars.notacceptDaftar');
        //export PDF Daftar siswa
        Route::get('/daftars/exportpdfdaftar',[DaftarAdminController::class, 'exportpdfdaftar'])->name('exportpdfdaftar');
        Route::get('/daftars/suratpdf',[DaftarAdminController::class, 'suratpdf'])->name('suratpdf');

        // Industri
        Route::resource('/industris', IndustriController::class)->only(['index', 'create']);
        Route::get('/industris/edit', [IndustriController::class, 'edit'])->name('industris.edit');
        // holidays (hari libur)
        Route::resource('/holidays', HolidayController::class)->only(['index', 'create']);
        Route::get('/holidays/edit', [HolidayController::class, 'edit'])->name('holidays.edit');
        // attendances (absensi)
        Route::resource('/attendances', AttendanceController::class)->only(['index', 'create']);
        Route::get('/attendances/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');

        Route::resource('/logbooks', LogbookController::class)->only(['index']);
        Route::post('/logbooks/{id}/status',[LogbookController::class, 'acceptLogbook'])->name('logbooks.acceptLogbook');
        Route::post('/logbooks/{id}/tampil',[LogbookController::class, 'detail'])->name('logbooks.tampil');
        Route::post('/logbooks/{id}/not-status',[LogbookController::class, 'notacceptLogbook'])->name('logbooks.notacceptLogbook');
        //export PDF Logbook siswa
        Route::get('/logbooks/exportpdflogbook',[LogbookController::class, 'exportpdflogbook'])->name('exportpdflogbook');

        // presences (kehadiran)
        Route::resource('/presences', PresenceController::class)->only(['index']);
        Route::get('/presences/qrcode', [PresenceController::class, 'showQrcode'])->name('presences.qrcode');
        Route::get('/presences/qrcode/download-pdf', [PresenceController::class, 'downloadQrCodePDF'])->name('presences.qrcode.download-pdf');
        Route::get('/presences/{attendance}', [PresenceController::class, 'show'])->name('presences.show');
        // not present data
        Route::get('/presences/{attendance}/not-present', [PresenceController::class, 'notPresent'])->name('presences.not-present');
        Route::post('/presences/{attendance}/not-present', [PresenceController::class, 'notPresent']);
        // present (url untuk menambahkan/mengubah user yang tidak hadir menjadi hadir)
        Route::post('/presences/{attendance}/present', [PresenceController::class, 'presentUser'])->name('presences.present');
        Route::post('/presences/{attendance}/acceptPermission', [PresenceController::class, 'acceptPermission'])->name('presences.acceptPermission');
        // employees permissions
        Route::get('/presences/{attendance}/permissions', [PresenceController::class, 'permissions'])->name('presences.permissions');

    });

    Route::middleware('role:user')->name('home.')->group(function () {
        Route::get('/siswa', [HomeController::class, 'index'])->name('index');
        // desctination after scan qrcode
        Route::post('/absensi/qrcode', [HomeController::class, 'sendEnterPresenceUsingQRCode'])->name('sendEnterPresenceUsingQRCode');
        Route::post('/absensi/qrcode/out', [HomeController::class, 'sendOutPresenceUsingQRCode'])->name('sendOutPresenceUsingQRCode');

        Route::get('/absensi/{attendance}', [HomeController::class, 'show'])->name('show');
        Route::get('/absensi/{attendance}/permission', [HomeController::class, 'permission'])->name('permission');

        Route::get('/home/logbook', [LogbookHomeController::class, 'index2'])->name('logbook');
        Route::get('/home/rubah/create', [LogbookHomeController::class, 'create'])->name('create');

        Route::get('/home/rubah/edit/{id}', [LogbookHomeController::class, 'edit'])->name('edit');
        Route::post('/insertlogbook',[LogbookHomeController::class, 'insertlogbook'])->name('insertlogbook');
        Route::post('/updatelogbook/{id}',[LogbookHomeController::class, 'updatelogbook'])->name('updatelogbook');
        Route::get('/deletelogbook/{id}',[LogbookHomeController::class, 'deletelogbook'])->name('deletelogbook');
        Route::get('/home/logbook/status/{id}',[LogbookHomeController::class, 'status'])->name('status');
         //export PDF Logbook siswa
         Route::get('/exportpdflogbook',[LogbookHomeController::class, 'exportpdflogbook'])->name('exportpdflogbook');

        Route::get('/home/daftar', [DaftarController::class, 'index4'])->name('daftar');
        Route::get('/home/daftar/create', [DaftarController::class, 'create'])->name('create');

        Route::get('/home/rubah/edit/{id}', [DaftarController::class, 'edit'])->name('edit');
        Route::post('/insertdaftar',[DaftarController::class, 'insertdaftar'])->name('insertdaftar');
        Route::post('/updatedaftar/{id}',[DaftarkController::class, 'updatedaftark'])->name('updatedaftar');
        Route::get('/deletedaftar/{id}',[DaftarController::class, 'deletedaftar'])->name('deletedaftar');
        Route::get('/home/logbook/status/{id}',[DaftarController::class, 'accept'])->name('accept');
    });

    Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::middleware('guest')->group(function () {
    // auth
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});
Route::get('/', [LandingController::class, 'index1'])->name('index1');
Route::get('/tampilkan', [DetailController::class, 'lihat'])->name('tampilkan.lihat');
Route::get('/tampilkan/tam/{id}', [DetailController::class, 'detail'])->name('tampilkan.tam');

