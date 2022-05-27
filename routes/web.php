<?php

use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\Vechicle\CompanyVechicleController;
use App\Http\Controllers\Vechicle\IndividualVechicleController;
use App\Http\Controllers\Vechicle\AdminVechicleController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IndividualController;



//ADMIN CONTROLLERS
   ///FOR COMPANY
use App\Http\Controllers\Admin\Company\UserController;
use App\Http\Controllers\Admin\Company\DocumentController;
use App\Http\Controllers\Admin\Company\ServiceController;
use App\Http\Controllers\Admin\Company\VechicleController;

//FOR INDIVIDUALS
use App\Http\Controllers\Admin\Individual\UsersController;
use App\Http\Controllers\Admin\Individual\VechiclesController;
use App\Http\Controllers\Admin\Individual\DocumentsController;
use App\Http\Controllers\Admin\Individual\ServicesController;


use App\Http\Controllers\FileController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


    //Password Forgotten/Reset Urls
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



'Auth'::routes();

//company dashboard urls
    Route::prefix('company')->group(function () {

                                 //Basic Urls
        Route::get('login',  [CompanyController::class,'login'])->name('company.login');
        Route::get('register', [CompanyController::class, 'register'])->name('company.register');
        Route::post('register', [CompanyController::class, 'storeUser']);
        Route::post('login', [CompanyController::class,'authenticate']);
        Route::get('home', [CompanyController::class, 'home'])->name('company.dashboard')->middleware('auth');
        Route::get('logout', [CompanyController::class,'logout'])->name('company.logout');
                                 //End Basic urls

        //Profile urls
Route::get('profile', [CompanyController::class, 'profile'])->name('company.profile')->middleware('auth');
Route::any('profile/edit/{id}', [CompanyController::class, 'companyvalidation'])->name('profile.edit_validation')->middleware('auth');
        //services urls
Route::get('main', [CompanyController::class, 'main'])->name('company.main')->middleware('auth');
Route::get('repair', [CompanyController::class, 'repair'])->name('company.repair')->middleware('auth');
        //Document urls
Route::get('invoice', [CompanyController::class, 'invoice'])->name('company.invoice')->middleware('auth');
Route::get('invoice-download', [CompanyController::class, 'downloadinvoice'])->name('company.download.invoice')->middleware('auth');
Route::get('diagnostics', [CompanyController::class, 'diagnostics'])->name('company.diagnostics')->middleware('auth');
Route::get('diagnostics-download', [CompanyController::class, 'downloaddiagnostics'])->name('company.download.diagnostics')->middleware('auth');

        //vechicles url
Route::resource('vechicle',CompanyVechicleController::class)->middleware('auth');

});







//Indivdual Urls
Route::prefix('individual')->group(function () {

                         //Basic Urls
    Route::get('register', [IndividualController::class, 'register'])->name('individual.register');
    Route::post('register', [IndividualController::class,'storeUser']);
    Route::get('login', [IndividualController::class,'login'])->name('individual.login');
    Route::post('login', [IndividualController::class,'authenticate']);
    Route::get('logout', [IndividualController::class,'logout'])->name('individual.logout');
    Route::get('home', [IndividualController::class, 'home'])->name('individual.dashboard')->middleware('auth');
                         //End Basic urls

    //profile urls
Route::get('profile', [IndividualController::class, 'profile'])->name('individual.profile')->middleware('auth');
Route::any('profile/edit/{id}', [IndividualController::class, 'individualvalidation'])->name('profile.edit_validations')->middleware('auth');
    //services urls
 Route::get('main', [IndividualController::class, 'mains'])->name('individual.main')->middleware('auth');
Route::get('repair', [IndividualController::class, 'repairs'])->name('individual.repair')->middleware('auth');
    //Document urls
Route::get('invoice', [IndividualController::class, 'invoices'])->name('individual.invoice')->middleware('auth');
Route::get('invoice-download', [IndividualController::class, 'downloadinvoice'])->name('individual.download.invoice')->middleware('auth');
Route::get('diagnostics', [IndividualController::class, 'diagnosticss'])->name('individual.diagnostics')->middleware('auth');
Route::get('diagnostics-download', [IndividualController::class, 'downloaddiagnostics'])->name('individual.download.diagnostics')->middleware('auth');

        //vechicles url
Route::resource('vechicles',IndividualVechicleController::class)->middleware('auth');
});








//Admin Urls
Route::prefix('admin')->group(function () {
    //ADMIN COMPANY URLS
 Route::resource('admin-vechicle',AdminVechicleController::class)->middleware('auth');
 Route::resource('document',DocumentController::class)->middleware('auth');
 Route::resource('user',UserController::class)->middleware('auth');
 Route::resource('vechicle-ac',VechicleController::class)->middleware('auth');
 Route::resource('service',ServiceController::class)->middleware('auth');

   //ADMIN INDIVIDUAL URLS
Route::resource('users',UsersController::class)->middleware('auth');
Route::resource('documents',DocumentsController::class)->middleware('auth');
Route::resource('vechicle-ic',VechiclesController::class)->middleware('auth');
Route::resource('services',ServicesController::class)->middleware('auth');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






//ADMIN SECTION
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USED THIS FOR A TEST
Route::get('download-file', [App\Http\Controllers\HomeController::class, 'downloadFile'])->name('download');

