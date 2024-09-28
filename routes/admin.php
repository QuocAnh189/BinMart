<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

require __DIR__.'/admin/about.route.php';
require __DIR__.'/admin/admin.route.php';
require __DIR__.'/admin/advertisement.route.php';
require __DIR__.'/admin/blog.route.php';
require __DIR__.'/admin/brand.route.php';
require __DIR__.'/admin/category.route.php';
require __DIR__.'/admin/coupon.route.php';
require __DIR__.'/admin/customer.route.php';
require __DIR__.'/admin/flash-sale.route.php';
require __DIR__.'/admin/footer.route.php';
require __DIR__.'/admin/home-page-setting.route.php';
require __DIR__.'/admin/message.route.php';
require __DIR__.'/admin/order.route.php';
require __DIR__.'/admin/payment-setting.route.php';
require __DIR__.'/admin/product.route.php';
require __DIR__.'/admin/product-image-gallery.route.php';
require __DIR__.'/admin/product-variant.route.php';
require __DIR__.'/admin/product-variant-item.route.php';
require __DIR__.'/admin/profile.route.php';
require __DIR__.'/admin/review.route.php';
require __DIR__.'/admin/seller-product.route.php';
require __DIR__.'/admin/settings.route.php';
require __DIR__.'/admin/shipping.route.php';
require __DIR__.'/admin/slider.route.php';
require __DIR__.'/admin/subscribers.route.php';
require __DIR__.'/admin/terms-and-conditions.route.php';
require __DIR__.'/admin/transaction.route.php';
require __DIR__.'/admin/user.route.php';
require __DIR__.'/admin/vendor.route.php';
require __DIR__.'/admin/vendor-request.route.php';
require __DIR__.'/admin/withdraw.route.php';
