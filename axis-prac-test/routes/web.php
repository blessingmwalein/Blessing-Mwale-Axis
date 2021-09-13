<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\MemberController;
use App\Models\Insurance;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/employee-login', function () {
    return view('welcome');
})->name('login');



    Route::post('/employee-login', [EmployeeController::class, 'login'])->name('login');
    Route::post('/member-create', [MemberController::class, 'store'])->name('member-create');
    Route::post('/insurance-create', [InsuranceController::class, 'store'])->name('insurance-create');
    Route::post('/insurance-member-create', [InsuranceController::class, 'member'])->name('insurance-member-create');

    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');
    Route::get('/members/create', function () {
        return view('admin.members.create');
    });
    Route::get('insurance/create', function () {
        return view('admin.insurance.create');
    });
    Route::get('member/insurances', function () {
        return view('admin.insurance.create');
    });
    Route::get('/member/insurances', [InsuranceController::class, 'memberInsurances']);

    Route::get('/insurance/member/create', function () {
        return view('admin.insurance.add-member', ['members'=> Member::all(), 'insurances'=> Insurance::all()]);
    });

    Route::get('/members', [MemberController::class, 'index']);
    Route::get('/insurance', [InsuranceController::class, 'index']);
    Route::get('/logout', [EmployeeController::class, 'doLogout'])->name('logout');
