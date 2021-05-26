<?php

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

Route::get('/login',   [
   App\Http\ControLlers\LoginController::class,
   'index'
]);

Route::get('/employees',   [
   App\Http\ControLlers\LoginController::class,
   'employees'
]);

Route::get('/table',   [
    App\Http\ControLlers\tableController::class,
    'index'
 ]);
 

 Route::get('/layout',   [
   App\Http\ControLlers\tableController::class,
   'layout'
]);


Route::get('/payslipview',   [
   App\Http\ControLlers\LoginController::class,
   'payslipview'
]);

Route::get('/payslip',   [
   App\Http\ControLlers\tableController::class,
   'payslip'
]);



Route::get('/loans',   [
   App\Http\ControLlers\tableController::class,
   'loans'
]);



Route::get('/deparment',   [
   App\Http\ControLlers\tableController::class,
   'deparment'
]);


Route::get('/position',   [
   App\Http\ControLlers\tableController::class,
   'position'
]);



Route::get('/leaves',   [
   App\Http\ControLlers\tableController::class,
   'leaves'
]);




Route::get('/deduction',   [
   App\Http\ControLlers\tableController::class,
   'deduction'
]);


Route::get('/timekeeping',   [
   App\Http\ControLlers\tableController::class,
   'timekeeping'
]);

Route::get('/form',   [
   App\Http\ControLlers\tableController::class,
   'form'
]);


Route::get('/view',   [
   App\Http\ControLlers\tableController::class,
   'view'
]);



Route::get('/create_form/department',   [
   App\Http\ControLlers\tableController::class,
   'create_form_department'
]);


Route::get('/create_form/employees',   [
   App\Http\ControLlers\tableController::class,
   'create_form_employees'
]);


Route::get('/create_form/leaves',   [
   App\Http\ControLlers\tableController::class,
   'create_form_leaves'
]);


Route::get('/create_form/loans',   [
   App\Http\ControLlers\tableController::class,
   'create_form_loans'
]);



Route::get('/create_form/deductions',   [
   App\Http\ControLlers\tableController::class,
   'create_form_deductions'
]);



Route::get('/create_form/payslip',   [
   App\Http\ControLlers\tableController::class,
   'create_form_payslip'
]);



Route::get('/create_form/timekeeping',   [
   App\Http\ControLlers\tableController::class,
   'create_form_timekeeping'
]);