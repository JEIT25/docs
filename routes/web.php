<?php
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-pdf', [AttendanceController::class, 'generatePDF']);