<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admins;
use App\Models\Subscribers;
//// intermediate

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/', [AdminController::class, 'All_properties'])->name('home');
//users 

Route::post('/book-property', [AdminController::class,'bookProperty'])->name('book.property');

Route::post('/subscribe', [AdminController::class, 'subscribers'])->name('subscribe');

Route::get('/subscribers', [AdminController::class, 'showSubscribers'])->name('subscribers');


Route::get('/availaible/all', [AdminController::class, 'All_Category_menu'])->name('see_all');
Route::get('/villas', [AdminController::class, 'showVillas'])->name('villas');
Route::get('/houses', [AdminController::class, 'showHouses'])->name('houses');
Route::get('/touring-vehicles', [AdminController::class, 'showTouringVehicles'])->name('touring_vehicles');
Route::get('/other-vehicles', [AdminController::class, 'showOtherVehicles'])->name('other_vehicles');

///// admin's only routes

Route::middleware('admin')->group(function () {

    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin');

    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [AdminController::class, 'NewPropertyshowRegistrationForm'])->name('register');

    Route::post('/register', [AdminController::class, 'registerProperty']);

    Route::get('/admin/register', [AdminController::class, 'NewAdminshowRegistrationForm'])->name('NewAdmin');

    Route::post('/admin/register', [AdminController::class, 'registerAdmin']);

    Route::get('/newContact', [AdminController::class, 'NewContactshowRegistrationForm'])->name('registerContact');

    Route::post('/newContact', [AdminController::class, 'RegisterContact']);

    Route::get('/VBContacts', [AdminController::class, 'AllContacts'])->name('contacts');

    Route::get('/booking/Tenants', [AdminController::class, 'Tenants'])->name('booking');

    Route::get('/admin/accounts', [AdminController::class, 'AllAdmin'])->name('admins');

    Route::match(['get', 'post'], '/confirm-order', [AdminController::class, 'save_order']);

    Route::get('/my_orders', [AdminController::class, 'Orders_user'])->name('orders_user');

    Route::put('/update-status/{orderId}/{status}', [AdminController::class, 'updateStatusTenants'])->name('update-status');

    Route::delete('/delete-property/{id}', [AdminController::class, 'deleteProperty'])->name('delete-property');

    Route::get('/RegisterContact',[AdminController::class, 'RegisterContact'])->name('RegisterContact');

    Route::put('/update-contact/{id}', [AdminController::class, 'updateContact'])->name('update-contact');

    Route::delete('/delete-contact/{id}', [AdminController::class, 'DeleteContact'])->name('delete-contact');

    Route::put('/update-property/{id}', [AdminController::class, 'updateProperty'])->name('update-property');

    Route::get('/notifications', function () {
        return view('admin.notifications');
    })->name('notifications');

    Route::put('/update-admin/{id}', [AdminController::class, 'updateAdmin'])->name('update-admin');

});


