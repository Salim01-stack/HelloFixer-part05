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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/products', function () {
 //   return view('products');
//});

Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);


use App\Http\Controllers\UserController;
Route::resource('/users', UserController::class);

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



// routes/web.php

// routes/web.php

use App\Http\Controllers\AboutUsController;

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

use App\Http\Controllers\FaqController;

Route::get('/faq', [FaqController::class, 'index1']);







Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['english', 'bangla'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});



// Admin Dashboard Route
Route::get('/admin/dashboard', function () {
    if (session('is_admin')) {
        return view('admin.dashboard');  // Load the admin dashboard view
    } else {
        return redirect()->route('login')->withErrors(['login_error' => 'Unauthorized access.']);
    }
})->name('admin.dashboard');



// Admin Dashboard Route
Route::get('/admin/dashboard', function () {
    if (session('is_admin')) {
        return view('admin.dashboard');  // Return the admin dashboard view
    } else {
        return redirect()->route('login')->withErrors(['login_error' => 'Unauthorized access.']);
    }
})->name('admin.dashboard');

// Admin Logout Route
Route::get('/admin/logout', function () {
    session()->forget('is_admin');  // Clear the admin session
    return redirect()->route('login');  // Redirect to the login page
})->name('admin.logout');


Route::get('/login', function () {
    return view('login');  // Replace with your login page view
})->name('login');


Route::get('/admin/logout', function () {
    session()->forget('is_admin');  // Clear the admin session
    return redirect('/');  // Redirect to the welcome page
})->name('admin.logout');

// Route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route for user login page
Route::get('/login', function () {
    return view('login');  // Make sure you have a 'login.blade.php' file
})->name('user.login');

// Route for admin logout
Route::get('/admin/logout', function () {
    session()->forget('is_admin');
    return redirect('/');  // Redirect to the welcome page
})->name('admin.logout');




// Route for profile page
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile.show');

// Route for updating profile
Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');



use App\Http\Controllers\ServiceController;
Route::get('/service1', [ServiceController::class, 'acService']);
Route::get('/service2', [ServiceController::class, 'TVService']);
Route::get('/service3', [ServiceController::class, 'waterpurifier']);
Route::get('/service4', [ServiceController::class, 'Carpenterservice']);
Route::get('/service5', [ServiceController::class, 'ElectricianService']);
Route::get('/service6', [ServiceController::class, 'Plumberservice']);
Route::get('/service7', [ServiceController::class, 'Inverterandbatteryservice']);
Route::get('/service8', [ServiceController::class, 'Car_repairingservice']);
Route::get('/service9', [ServiceController::class, 'CCTV_CameraService']);
Route::get('/service10', [ServiceController::class, 'CleaningService']);
Route::get('/service11', [ServiceController::class, 'InteriorDesign']);
Route::get('/service12', [ServiceController::class, 'WeldingService']);



