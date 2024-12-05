<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\Auth\ForgotPasswordController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\InsuranceCategoryController;
use App\Http\Controllers\InsuranceProductController;
use App\Http\Controllers\FrontendController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@redirectAdmin')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RolesController::class);
    Route::resource('admins', AdminsController::class);

    // Login Routes.
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login/submit', [LoginController::class, 'login'])->name('login.submit');

    // Logout Routes.
    Route::post('/logout/submit', [LoginController::class, 'logout'])->name('logout.submit');

    // Forget Password Routes.
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/reset/submit', [ForgotPasswordController::class, 'reset'])->name('password.update');
})->middleware('auth:admin');



Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forget-password', [AuthController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('forget-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 

Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');


/*
|--------------------------------------------------------------------------
| Insurance Plans
|--------------------------------------------------------------------------
|
| 250+ Plans Compared: Users can compare a wide variety of insurance products across multiple categories, 
| such as health insurance, life insurance, car insurance, two-wheeler insurance, and more.
|
*/

    // Insurance Plans category

Route::get('/insurance-categories', [InsuranceCategoryController::class, 'index'])->name('health.insurance_categories.index');
Route::get('/insurance_categories/create', [InsuranceCategoryController::class, 'create'])->name('health.insurance_categories.create');
Route::post('/insurance_categories', [InsuranceCategoryController::class, 'store'])->name('insurance_categories.store');       // Store the new category
Route::get('/insurance_categories/{id}/edit', [InsuranceCategoryController::class, 'edit'])->name('health.insurance_categories.edit'); // Show form to edit an existing category
Route::put('/{id}', [InsuranceCategoryController::class, 'update'])->name('health.insurance_categories.update');  // Update an existing category
Route::delete('/insurance-categories/{id}', [InsuranceCategoryController::class, 'destroy'])->name('health.insurance_categories.destroy');
    
// Insurance Plans Product

Route::resource('insurance_products', InsuranceProductController::class);
Route::resource('insurance_subcategory', CategoryController::class);
Route::get('/insurance_subcategory', [CategoryController::class, 'index'])->name('health.insurance_subcategory.index');
Route::get('/insurance_subcategory/create', [CategoryController::class, 'create'])->name('health.insurance_subcategory.create');
Route::post('/insurance_subcategory', [CategoryController::class, 'store'])->name('insurance_subcategory.store');       // Store the new category
Route::get('/insurance_subcategory/{id}/edit', [CategoryController::class, 'edit'])->name('health.insurance_subcategory.edit'); // Show form to edit an existing category
Route::put('/{id}', [CategoryController::class, 'update'])->name('health.insurance_subcategory.update');  // Update an existing category
Route::delete('/insurance_subcategory/{id}', [CategoryController::class, 'destroy'])->name('health.insurance_subcategory.destroy');
   


Route::get('/insurance_products', [InsuranceProductController::class, 'index'])->name('health.insurance_products.index');
Route::get('/create', [InsuranceProductController::class, 'create'])->name('health.insurance_products.create'); // Show form to create a new category
Route::post('/insurance_products', [InsuranceProductController::class, 'store'])->name('insurance_products.store');       // Store the new category
Route::get('/insurance_products/{id}/edit', [InsuranceProductController::class, 'edit'])->name('health.insurance_products.edit'); // Show form to edit an existing category
Route::put('/insurance_products/{id}', [InsuranceProductController::class, 'update'])->name('health.insurance_products.update');
Route::delete('/insurance_products/{id}', [InsuranceProductController::class, 'destroy'])->name('health.insurance_products.destroy');
   

// Plan features

Route::get('/frontend/index', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/frontend/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/frontend/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/frontend/product', [FrontendController::class, 'product'])->name('frontend.product');
Route::post('/contact/send', [FrontendController::class, 'send'])->name('contact.store');


Route::get('/frontend/Proposer', [FrontendController::class, 'Proposer'])->name('frontend.Proposer');

