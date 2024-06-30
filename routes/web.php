<?php

use App\Livewire\Dashboard;
use App\Livewire\ForgotPassword;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::get('/register', Register::class)->name('register');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/dashboard', Dashboard::class)->name('dashboard');
