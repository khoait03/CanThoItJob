<?php


use App\Http\Controllers\Client\Auth\AuthController;
use App\Http\Controllers\Client\Auth\FacebookController;
use App\Http\Controllers\Client\Candidate\AuthController as AuthCandidateController;
use App\Http\Controllers\Client\Employer\EmployerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/ung-vien/dang-nhap', [AuthCandidateController::class, 'login'])->name('candidate.login');
Route::post('/ung-vien/dang-nhap', [AuthCandidateController::class, 'handleLogin'])->name('candidate.login.post');
Route::get('/ung-vien/dang-xuat', [AuthCandidateController::class, 'logout'])->name('candidate.logout');

Route::get('/ung-vien/dang-ky', [AuthCandidateController::class, 'register'])->name('candidate.register');
Route::post('/ung-vien/dang-ky', [AuthCandidateController::class, 'handleRegister'])->name('candidate.register.post');

Route::get('/tai-khoan/xac-thuc/{token}', [AuthCandidateController::class, 'verify'])->name('candidate.verify-email');

Route::get('/nha-tuyen-dung/dang-nhap', [EmployerController::class, 'login'])->name('employer.login');
Route::get('/nha-tuyen-dung/dang-ky', [EmployerController::class, 'register'])->name('employer.register');

Route::get('dat-lai-mat-khau', [AuthController::class, 'reset'])->name('reset');
Route::post('dat-lai-mat-khau', [AuthController::class, 'sendResetLink'])->name('sendResetLink');
Route::get('tao-moi-mat-khau/{token}', [AuthController::class, 'newPass'])->name('newPass');
Route::post('tao-moi-mat-khau/{token}', [AuthController::class, 'resetPassword'])->name('resetPassword');

Route::get('nhap-otp', [AuthController::class, 'otp'])->name('OTP');

Route::get('login/facebook', [FacebookController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

Route::get('auth/google', [AuthCandidateController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [AuthCandidateController::class, 'handleGoogleCallback']);

