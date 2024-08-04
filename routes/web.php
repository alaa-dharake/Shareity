<?php

use App\Models\Dish;
use App\Models\Campaign;
use App\Services\DishSimilarity;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MealRequestController;
use App\Http\Controllers\Backend\ChefController;
use App\Http\Controllers\Backend\MealController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\CampaignRequestController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CampaignsController;
use App\Http\Controllers\Backend\FeedbacksController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

// Single Root Route


// Authentication Routes
Auth::routes(['verify' => true]);

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dishes', [DishController::class, 'index'])->name('dishes.index');
    Route::patch('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::get('/my-orders', [OrderController::class, 'index'])->name('my-orders');
    Route::delete('/my-orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::get('/profile-dishes', [ProfileController::class, 'index_dish']);
    Route::post('/profile', [ProfileController::class, 'changePassword']);
    Route::get('/user/profile', [UserController::class, 'userProfile'])->name('user.profile');
    Route::get('/chef/orders', [ChefController::class, 'showOrders'])->name('chef.orders');
    Route::get('/chef/ratings', [ChefController::class, 'showRatings'])->name('chef.ratings');
    Route::delete('/ratings/{rating}', [ChefController::class, 'destroy'])->name('ratings.destroy');
    Route::get('/user/get-cities/{state_id}', [UserController::class, 'getCitiesByState']);

   
});Route::middleware(['auth'])->group(function () {
    Route::get('/chefs/{chef}/request-meal', [MealRequestController::class, 'create'])->name('meal-requests.create');
    Route::get('/meal-requests', [MealRequestController::class, 'index'])->name('meal_requests.index');
    Route::post('/meal-requests', [MealRequestController::class, 'store'])->name('meal-requests.store');
    Route::get('/meal-requests/manage', [MealRequestController::class, 'manage'])->name('meal_requests.manage');
    Route::patch('/meal-requests/{mealRequest}', [MealRequestController::class, 'updateStatus'])->name('meal_requests.update_status');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/campaign-requests', [CampaignRequestController::class, 'index'])->name('campaign_requests.index');
    Route::post('/campaign-requests', [CampaignRequestController::class, 'store'])->name('campaign-requests.store');
    Route::get('/campaign-requests/manage', [CampaignRequestController::class, 'manage'])->name('campaign_requests.manage');
    Route::patch('/campaign-requests/{campaignRequest}', [CampaignRequestController::class, 'updateStatus'])->name('campaign_requests.update_status');
});


// Admin Routes
Route::middleware(['auth', 'is_admin'])->prefix('/admin')->name('admin.')->group(function () {
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::resource('campaigns', CampaignsController::class);
Route::get('feedback', [FeedbacksController::class, 'index'])->name('feedbacks.index');
Route::delete('feedback/{feedback}', [FeedbacksController::class, 'destroy'])->name('feedback.destroy');
Route::get('/users', [AdminController::class, 'getUsers']);
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::post('/submit-rating', [RatingController::class, 'submitRating'])->name('submit.rating');
Route::get('/api/getMealDistribution', [AdminController::class, 'getMealDistribution']);
Route::get('/api/donations-this-week', [AdminController::class, 'donationsThisWeek']);
Route::get('/admin/getMealsPerWeekDays', [AdminController::class, 'getMealsPerWeekDays']);
Route::get('/admin/getMealsPerMonth', [AdminController::class, 'getMealsPerMonth']);



    // Route::get('/', [HomeController::class, 'index']);
});
Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/meals-distribution', [AdminController::class, 'getMealsDistribution'])->name('admin.getMealsDistribution');

Route::delete('feedback/{feedback}', [FeedbacksController::class, 'destroy'])->name('feedback.destroy');

Route::get('/admin/monthly-meals-data', [AdminController::class, 'getMonthlyMealsData'])->name('admin.getMonthlyMealsData');

Route::get('/admin/weekly-donations', [AdminController::class, 'getWeeklyDonations']);



// Admin or Chef Routes
Route::middleware(['auth', 'admin_or_chef'])->group(function () {
    Route::get('/meals/create', [MealController::class, 'create'])->name('meals.create');
    Route::post('/meals/create', [MealController::class, 'store'])->name('meals.store');

    Route::put('/meals/{dish}', [MealController::class, 'update'])->name('meals.update');

    Route::get('/create-campaign', [CampaignsController::class, 'create'])->middleware(['verified']);
    Route::post('/create-campaign', [CampaignsController::class, 'store'])->name('campaigns.store')->middleware(['verified']);
    Route::get('/all-campaigns', [CampaignsController::class, 'campaigns_index'])->middleware(['verified']);
    Route::get('/my-campaigns', [CampaignsController::class, 'myCampaigns']);
    Route::get('/campaigns/{id}/edit', [CampaignsController::class, 'edit'])->name('campaigns.edit')->middleware(['verified']);
    Route::put('/campaigns/{id}', [CampaignsController::class, 'update'])->name('campaigns.update')->middleware(['verified']);
    Route::delete('campaigns/{campaign}', [CampaignsController::class, 'destroy'])->name('campaigns.destroy')->middleware(['verified']);
});

// User Routes
Route::middleware(['auth', 'is_user'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/edit-profile', [UserController::class, 'user_index'])->name('user.index');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
    Route::get('/chefs', [UserController::class, 'getChefs'])->name('users.chefs');
    Route::get('/chefs/{user}', [UserController::class, 'showChef'])->name('chefs.show');
    Route::delete('/user/destroy', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/view-state/{name}', [UserController::class, 'viewstate'])->name('states.view');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/cart', [DishController::class, 'cart']);
    Route::post('/checkout/session', [StripeController::class, 'session'])->name('checkout.session');
Route::get('/checkout/success', [StripeController::class, 'success'])->name('success');
Route::get('/checkout/cancel', [StripeController::class, 'checkout'])->name('checkout.cancel');
Route::patch('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/donation/session', [StripeController::class, 'createDonationSession'])->name('donation.session');
Route::get('/donation/success', [StripeController::class, 'donationSuccess'])->name('donation.success');
Route::get('/donation/cancel', [StripeController::class, 'donationCancel'])->name('donation.cancel');
Route::delete('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/addToCart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
// Dish Routes
Route::resource('dishes', DishController::class);
Route::get('/search-dishes', [DishController::class, 'search'])->name('search.dishes');
Route::get('/sort-by', [DishController::class, 'sort'])->name('sort.by');
Route::get('cart', [DishController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [DishController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [DishController::class, 'updateCart'])->name('update_cart');
Route::delete('remove-from-cart', [DishController::class, 'remove'])->name('remove_from_cart');



});
Route::post('/submit-rating', [RatingController::class, 'submitRating'])->name('submit.rating');
Route::get('/chefs/{chef}', [RatingController::class, 'showRatingForm'])->name('rate.chef');



// Donation Routes
Route::middleware('verified')->group(function () {
    Route::post('/create-donation/{id}', [DonationController::class, 'donate']);
    Route::get('/donate/{id}', [DonationController::class, 'makeDonation']);
    Route::get('/donations-response/{user_id}/{id}', [DonationController::class, 'donationResponse']);
    Route::get('/my-donations', [DonationController::class, 'myDonations']);
    Route::post('/my-donations', [DonationController::class, 'myDonations']);
});

Route::get('/make-donation/{id}', [DonationController::class, 'makeDonation'])->name('make-donation');
Route::post('/donate', [DonationController::class, 'donate'])->name('donate');
Route::get('/donation-response/{user_id}/{id}', [DonationController::class, 'donationResponse'])->name('donation-response');
Route::delete('/my-donations/{donation}', [DonationController::class, 'destroy'])->name('donations.destroy');

// Stripe Routes
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
    Route::post('/session', [StripeController::class, 'session'])->name('session');
    Route::get('/success', [StripeController::class, 'success'])->name('success');
    Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
    Route::get('/orders', [StripeController::class, 'orderHistory'])->name('orders.history');
});
Route::post('/create-donation-session', [StripeController::class, 'createDonationSession'])->name('create-donation-session');
Route::get('/donation-success/{campaign_id}', [StripeController::class, 'donationSuccess'])->name('donation.success');
Route::get('/donation-cancel/{campaign_id}', [StripeController::class, 'donationCancel'])->name('donation.cancel');

// Profile Routes
Route::middleware('verified')->group(function () {
    Route::get('user/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::post('/profile', [ProfileController::class, 'changePassword']);
});
Route::get('/profile-dishes', [ProfileController::class, 'index_dish']);

// Ratings Routes
Route::middleware('auth')->group(function () {
    Route::post('/dishes/{dish}/ratings', [RatingController::class, 'store'])->name('ratings.store');
});
// Route to delete a rating
Route::delete('/ratings/{rating}', [ChefController::class, 'destroy'])->name('ratings.destroy');
Route::get('/dishes/index', [DishController::class,'index']);
Route::get('/sort-dishes', [DishController::class, 'sortDishes'])->name('sort.dishes');
Route::get('/dishes/{dish}', [DishController::class, 'show'])->name('dishes.show');



Route::middleware(['auth'])->group(function () {
    Route::get('/chefs/{chef}/request-meal', [MealRequestController::class, 'create'])->name('meal-requests.create');
    Route::post('/meal-requests', [MealRequestController::class, 'store'])->name('meal-requests.store');
    Route::patch('/meal-requests/{meal_request}/accept', [MealRequestController::class, 'accept'])->name('meal-requests.accept');
    Route::patch('/meal-requests/{meal_request}/reject', [MealRequestController::class, 'reject'])->name('meal-requests.reject');
});

Route::resource('campaigns', CampaignsController::class)->middleware('verified');
Route::get('/create-campaign', [CampaignsController::class, 'create'])->name('campaigns.store')->middleware(['admin_or_chef', 'verified']);
Route::post('/create-campaign', [CampaignsController::class, 'store'])->name('campaigns.create')->middleware(['admin_or_chef', 'verified']);
Route::get('/all-campaigns', [CampaignsController::class, 'index'])->name('campaigns.index')->middleware(['admin_or_chef', 'verified']);
Route::get('/my-campaigns', [CampaignsController::class, 'myCampaigns'])->name('campaigns.myCampaigns')->middleware(['admin_or_chef']);


Route::get('/campaigns/{id}/edit', [CampaignsController::class, 'edit'])->name('campaigns.edit')->middleware(['admin_or_chef', 'verified']);
Route::put('/campaigns/{id}', [CampaignsController::class, 'update'])->name('campaigns.update')->middleware(['admin_or_chef', 'verified']);
Route::delete('campaigns/{campaign}', [CampaignsController::class, 'destroy'])->name('campaigns.destroy')->middleware(['admin_or_chef', 'verified']);
Route::post('/donate/{id}', [CampaignsController::class, 'donate'])->name('campaigns.donate');
Route::get('/campaigns', [CampaignController::class,'index']);
Route::post('/campaigns', [CampaignController::class,'index']);
Route::middleware(['auth', 'admin_or_chef'])->group(function () {

    // Index page route
    Route::get('/meals', [MealController::class, 'meal_index'])->name('meals.index');

    // Create route
    Route::get('/meals/create', [MealController::class, 'create'])->name('meals.create');
    
    // Store route
    Route::post('/meals', [MealController::class, 'store'])->name('meals.store');
    
    // Edit route
    Route::get('/meals/{id}/edit', [MealController::class, 'edit'])->name('dishes.edit');
    
    // Update route
    Route::put('/meals/{dish}', [MealController::class, 'update'])->name('meals.update');
    
    // Delete route
    Route::delete('/meals/{dish}', [MealController::class, 'destroy'])->name('dishes.destroy');
    // Route::post('/meals', [MealController::class, 'store'])->name('dishes.store');
});
Route::middleware(['auth', 'is_chef'])->group(function () {
    // Route::get('/home', [ChefController::class, 'index'])->name('chef.profile');
    Route::get('/edit-chef', [ChefController::class, 'chef_index'])->name('chef.index');
    Route::put('/chef/update', [ChefController::class, 'update'])->name('chef.update');
    Route::delete('/chef/destroy', [ChefController::class, 'destroy'])->name('chef.destroy');
});


Route::get('/change-password', [ResetPasswordController::class, 'showChangePasswordForm'])->name('change.password');
Route::post('/change-password', [ResetPasswordController::class, 'changePassword'])->name('change.password.post');
// Show form to request password reset link
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');

// Handle request to send password reset link
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Show form to reset password
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

// Handle reset password request
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');
Route::get('/security', function(){
    return view ('chef.security');
});
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');

Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');