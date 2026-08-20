<?php

use App\Http\Controllers\AddAdminController;
use App\Http\Controllers\AdminAttendanceController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminEmployeeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminSetupPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\SetupPasswordController;
use App\Http\Controllers\SlashController;
use App\Http\Controllers\StaffDashboardController;
use App\Http\Controllers\StaffEditController;
use App\Http\Controllers\StaffIdController;
use App\Http\Controllers\StaffRegistryController;
use App\Http\Controllers\StaffSettingController;
use App\Http\Controllers\ViewDetailsController;
use App\Http\Controllers\ViewEmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SlashController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/user-login', [LoginController::class, 'login'])->name('user-login');
Route::post('/user-login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/admin-login', [AdminLoginController::class, 'login'])->name('login');
Route::post('/admin-login', [AdminLoginController::class, 'authenticate'])->name('admin-login.authenticate');

Route::get('forgot-password', [PasswordController::class, 'forgotPassword'])->name('password.request');
Route::post('forgot-password', [PasswordController::class, 'sendLink'])->name('password.email');

Route::get('reset-password/{token}', [PasswordController::class, 'resetForm'])->name('password.reset');
Route::post('reset-password', [PasswordController::class, 'updatePassword'])->name('password.update');

Route::get('/check-email', [PasswordController::class, 'email'])->name('password.check');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/admin-logout', [AdminLoginController::class, 'logout'])->name('admin.logout');



Route::middleware(['auth', 'can:admin-only'])->group(function () {
    
    Route::resource('admin-employee', AdminEmployeeController::class);
    Route::resource('view-details', ViewDetailsController::class);
    Route::resource('view-employee', ViewEmployeeController::class);
    Route::resource('admin-dashboard', AdminDashboardController::class);
    Route::resource('admin-attendance', AdminAttendanceController::class);
    Route::resource('admin-setting', AdminSettingController::class);
    Route::get('/add-admin', [AddAdminController::class, 'index'])->name('index.add');
    Route::post('/add-admin', [AddAdminController::class, 'store'])->name('admin.store');
    Route::get('/security-options', [SecurityController::class, 'index'])->name('security.index');
    Route::put('/security-options/password', [SecurityController::class, 'updatePassword'])->name('security.update');



    
});
//Route::put('/admin-setting/password', [AdminSettingController::class, 'updatePassword'])->name('admin-setting.update-password')->middleware('auth');
//Route::get('/admin-setting/security', [AdminSettingController::class, 'security'])->name('admin-setting-security')->middleware('auth');

Route::get('/staff-dashboard', [StaffDashboardController::class,'index'])->name('index.staff')->middleware('auth');
Route::post('/staff-dashboard/clock-in', [StaffDashboardController::class, 'clockIn'])->name('clock.in')->middleware('auth');
Route::post('/staff-dashboard/clock-out', [StaffDashboardController::class, 'clockOut'])->name('clock.out')->middleware('auth');



Route::get('/staff-id', [StaffIdController::class,'front'])->name('index.frontId')->middleware('auth');
Route::get('/staff-id/{user}', [StaffIdController::class, 'show'])->name('staff.id')->middleware('auth');
//Route::get('/staff-id/back', [StaffIdController::class,'back'])->name('index.backId')->middleware('auth');

//Route::get('/staff-info', [StaffInfoController::class,'index'])->name('staff-info')->middleware('auth');

Route::resource('staff-edit', StaffEditController::class)->middleware('auth');
Route::put('/staff/avatar', [StaffEditController::class, 'updateAvatar'])->name('avatar-update')->middleware('auth');

Route::resource('staff-setting', StaffSettingController::class)->middleware('auth');

Route::get('/staff-registry', [StaffRegistryController::class, 'index'])->name('index.registry')->middleware('auth');

Route::get('/setup-password/{id}', [SetupPasswordController::class, 'showSetupForm'])->name('password.setup')->middleware('signed'); 
Route::post('/setup-password/{id}', [SetupPasswordController::class, 'updatePassword'])->name('password.update-setup');

Route::get('/admin/setup-password/{id}', [AdminSetupPasswordController::class, 'showSetupForm'])->name('admin.password.setup')->middleware('signed');
Route::post('/admin/setup-password/{id}', [AdminSetupPasswordController::class, 'updatePassword'])->name('admin.password.update-setup');




Route::get('/staff/download-qr', [QrCodeController::class, 'downloadPrintableQr'])->name('qr.download')->middleware('auth');
Route::get('/attendance/verify', [QrCodeController::class, 'verifyScannedCode'])->name('qr.verify-scan')->middleware('auth');
//Route::get('/staff-dashboard', [ClockInController::class, 'index'])->name('staff-dashboard.index');

// 2. Route to handle the button form submissions
//Route::post('/attendance/store', [ClockInController::class, 'store'])->name('attendance.store');