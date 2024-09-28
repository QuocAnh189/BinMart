<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\FlashSaleController;
use App\Http\Controllers\Frontend\FrontendProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsletterController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\ProductTrackController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\UserAddressController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserMessageController;
use App\Http\Controllers\Frontend\UserOrderController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\UserVendorRequestController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/** Vendor page routes */
Route::get('vendor', [HomeController::class, 'vendor'])->name('vendor');
Route::get('vendor-product/{id}', [HomeController::class, 'vendor_products'])->name('vendor.products');

/** Flash-sale routes */
Route::get('flash-sale', [FlashSaleController::class, 'flash_sale'])->name('flash-sale');

/** Product routes */
Route::get('products', [FrontendProductController::class, 'index'])->name('products');
Route::get('product-detail/{slug}', [FrontendProductController::class, 'show_product'])->name('product-detail');
Route::get('change-product-list-view', [FrontendProductController::class, 'change_list_view'])->name('change-product-list-view');

/** Newsletter routes */
Route::post('newsletter-request', [NewsletterController::class, 'newsLetterRequest'])->name('newsletter-request');
Route::get('newsletter-verify/{token}', [NewsletterController::class, 'newsLetterEmailVerify'])->name('newsletter-verify');

/** About route */
Route::get('about', [PageController::class, 'about'])->name('about');

/** Terms and conditions page route */
Route::get('terms-and-conditions', [PageController::class, 'terms_and_condition'])->name('terms-and-conditions');

/** Contact routes */
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::post('contact', [PageController::class, 'handle_contact_form'])->name('handle-contact-form');

/** Product track route */
Route::get('product-tracking', [ProductTrackController::class, 'product_tracking'])->name('product-tracking');

/** Blog routes */
Route::get('blog', [BlogController::class, 'blog'])->name('blog');
Route::get('blog-details/{slug}', [BlogController::class, 'blog_details'])->name('blog-details');

/** Product routes modal route */
Route::get('show-product-modal/{id}', [HomeController::class, 'show_product_modal'])->name('show-product-modal');

/** Add product in wishlist route */
Route::get('wishlist/add-product', [WishlistController::class, 'add_to_wishlist'])->name('wishlist.store');

/** Cart route */
Route::post('add-to-cart', [CartController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('cart-details', [CartController::class, 'cart_details'])->name('cart-details');
Route::post('cart/update-quantity', [CartController::class, 'update_product_qty'])->name('cart.update-quantity');
Route::get('clear-cart', [CartController::class, 'clear_cart'])->name('clear.cart');
Route::get('cart/remove-product/{rowId}', [CartController::class, 'remove_product'])->name('cart.remove-product');
Route::get('cart-count', [CartController::class, 'get_cart_count'])->name('cart-count');
Route::get('cart-products', [CartController::class, 'get_cart_products'])->name('cart-products');
Route::post('cart/remove-sidebar-product', [CartController::class, 'remove_sidebar_product'])->name('cart.remove-sidebar-product');
Route::get('cart/sidebar-product-total', [CartController::class, 'cart_total'])->name('cart.sidebar-product-total');

//Coupon route
/** Coupon route */
Route::get('apply-coupon', [CartController::class, 'applyCoupon'])->name('apply-coupon');
Route::get('coupon-calculation', [CartController::class, 'couponCalculation'])->name('coupon-calculation');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function ($str) {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserProfileController::class, 'index'])->name('profile');
    Route::put('profile', [UserProfileController::class, 'update_profile'])->name('profile.update');
    Route::post('profile', [UserProfileController::class, 'update_password'])->name('profile.update.password');

    /** Message Route */
    Route::get('messages', [UserMessageController::class, 'index'])->name('messages.index');
    Route::post('send-message', [UserMessageController::class, 'send_message'])->name('send-message');
    Route::get('get-messages', [UserMessageController::class, 'get_message'])->name('get-messages');

    /** User Address Route */
    Route::resource('address', UserAddressController::class);

    /** Order Routes */
    Route::get('orders', [UserOrderController::class, 'index'])->name('orders.index');
    Route::get('orders/show/{id}', [UserOrderController::class, 'show'])->name('orders.show');

    /** Wishlist routes */
    Route::get('wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::get('wishlist/remove-product/{id}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');

    Route::get('reviews', [ReviewController::class, 'index'])->name('review.index');

    /** Vendor request route */
    Route::get('vendor-request', [UserVendorRequestController::class, 'index'])->name('vendor-request.index');
    Route::post('vendor-request', [UserVendorRequestController::class, 'create'])->name('vendor-request.create');

    /** product review routes */
    Route::post('review', [ReviewController::class, 'create'])->name('review.create');

    /** blog comment routes */
    Route::post('blog-comment', [BlogController::class, 'comment'])->name('blog-comment');

    /** Checkout routes */
    Route::get('checkout', [CheckOutController::class, 'index'])->name('checkout');
    Route::post('checkout/address-create', [CheckOutController::class, 'create_address'])->name('checkout.address.create');
    Route::post('checkout/form-submit', [CheckOutController::class, 'checkout_form_submit'])->name('checkout.form-submit');

    /** Payment Routes */
    Route::get('payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('payment-success', [PaymentController::class, 'payment_success'])->name('payment.success');

    /** Paypal routes */
    Route::get('paypal/payment', [PaymentController::class, 'pay_with_paypal'])->name('paypal.payment');
    Route::get('paypal/success', [PaymentController::class, 'paypal_success'])->name('paypal.success');
    Route::get('paypal/cancel', [PaymentController::class, 'paypal_cancel'])->name('paypal.cancel');

    /** Stripe routes */
    Route::post('stripe/payment', [PaymentController::class, 'pay_with_stripe'])->name('stripe.payment');

    /** Razorpay routes */
    Route::post('razorpay/payment', [PaymentController::class, 'pay_with_razorpay'])->name('razorpay.payment');

    /** Cod routes */
    Route::get('cod/payment', [PaymentController::class, 'pay_with_code'])->name('cod.payment');
});
