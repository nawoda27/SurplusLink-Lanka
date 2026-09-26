<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\NgoController;
use App\Http\Controllers\DeliveryPartnerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FoodListingController;
use App\Http\Controllers\FoodRequestController;
use App\Http\Controllers\BrowseFoodController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes - SurplusLink Lanka
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return match (auth()->user()->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'restaurant' => redirect()->route('restaurant.dashboard'),
        'ngo' => redirect()->route('ngo.dashboard'),
        'delivery_partner' => redirect()->route('delivery-partner.dashboard'),
        default => app(DashboardController::class)->customer(),
    };
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/users', [AdminController::class, 'users'])->name('users');
        Route::patch('/users/{id}/activate', [AdminController::class, 'activateUser'])->name('users.activate');
        Route::patch('/users/{id}/deactivate', [AdminController::class, 'deactivateUser'])->name('users.deactivate');
    });

/*
|--------------------------------------------------------------------------
| Restaurant Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified', 'role:restaurant'])
    ->prefix('restaurant')
    ->name('restaurant.')
    ->group(function () {
        Route::get('/dashboard', [RestaurantController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [RestaurantController::class, 'profile'])->name('profile');
        Route::patch('/profile', [RestaurantController::class, 'updateProfile'])->name('profile.update');

        Route::get('/food-listings', [FoodListingController::class, 'index'])->name('food-listings.index');
        Route::get('/food-listings/create', [FoodListingController::class, 'create'])->name('food-listings.create');
        Route::post('/food-listings', [FoodListingController::class, 'store'])->name('food-listings.store');
        Route::get('/food-listings/{id}/edit', [FoodListingController::class, 'edit'])->name('food-listings.edit');
        Route::put('/food-listings/{id}', [FoodListingController::class, 'update'])->name('food-listings.update');
        Route::delete('/food-listings/{id}', [FoodListingController::class, 'destroy'])->name('food-listings.destroy');

        Route::get('/food-requests', [FoodRequestController::class, 'index'])->name('food-requests.index');
        Route::patch('/food-requests/{id}/approve', [FoodRequestController::class, 'approve'])->name('food-requests.approve');
        Route::patch('/food-requests/{id}/reject', [FoodRequestController::class, 'reject'])->name('food-requests.reject');
    });

/*
|--------------------------------------------------------------------------
| NGO Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified', 'role:ngo'])
    ->prefix('ngo')
    ->name('ngo.')
    ->group(function () {
        Route::get('/dashboard', [NgoController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [NgoController::class, 'profile'])->name('profile');
        Route::patch('/profile', [NgoController::class, 'updateProfile'])->name('profile.update');
    });

/*
|--------------------------------------------------------------------------
| Delivery Partner Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified', 'role:delivery_partner'])
    ->prefix('delivery-partner')
    ->name('delivery-partner.')
    ->group(function () {
        Route::get('/dashboard', [DeliveryPartnerController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [DeliveryPartnerController::class, 'profile'])->name('profile');
        Route::patch('/profile', [DeliveryPartnerController::class, 'updateProfile'])->name('profile.update');

        Route::patch('/deliveries/{id}/accept', [DeliveryPartnerController::class, 'accept'])->name('deliveries.accept');
        Route::patch('/deliveries/{id}/in-transit', [DeliveryPartnerController::class, 'markInTransit'])->name('deliveries.in-transit');
        Route::patch('/deliveries/{id}/complete', [DeliveryPartnerController::class, 'markDelivered'])->name('deliveries.complete');
    });

/*
|--------------------------------------------------------------------------
| Customer / NGO Food Browsing Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/food-listings', [BrowseFoodController::class, 'index'])->name('food-listings.browse');
    Route::get('/food-listings/{foodListingId}/request', [BrowseFoodController::class, 'create'])->name('food-requests.create');
    Route::get('/my-requests', [FoodRequestController::class, 'myRequests'])->name('food-requests.my-requests');
    Route::post('/food-listings/{foodListingId}/requests', [FoodRequestController::class, 'store'])->name('food-requests.store');
});

/*
|--------------------------------------------------------------------------
| Notification Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::patch('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::patch('/notifications/read-all', [NotificationController::class, 'markAllAsRead'])->name('notifications.read-all');
});

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';