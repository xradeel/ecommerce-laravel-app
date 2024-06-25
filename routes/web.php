<?php

use App\Http\Controllers\backend\AdminCategoryController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminPersona;
use App\Http\Controllers\backend\AdminPersonaController;
use App\Http\Controllers\backend\AdminProductController;
use App\Http\Controllers\backend\AdminTeamMemberController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AccountController;
use App\Http\Controllers\frontend\BlogPostController;
use App\Http\Controllers\frontend\BlogsGridController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\MemberController;
use App\Http\Controllers\frontend\NotFoundController;
use App\Http\Controllers\frontend\PersonaController;
use App\Http\Controllers\frontend\PrivacyPolicyController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ProductTwoController;
use App\Http\Controllers\frontend\PurchaseGuideController;
use App\Http\Controllers\frontend\ShopFullWidth;
use App\Http\Controllers\frontend\ShopGridLeftContoller;
use App\Http\Controllers\frontend\TermsConditionController;
use Illuminate\Support\Facades\Route;


//frontend routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product-d', [ProductTwoController::class, 'index']);
Route::get('/shop-left', [ShopGridLeftContoller::class, 'index']);
Route::get('/shop-full', [ShopFullWidth::class, 'index']);
Route::get('/persona', [PersonaController::class, 'index']);
Route::get('/members', [MemberController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::get('/not-found', [NotFoundController::class, 'index']);
Route::get('/blogs', [BlogsGridController::class, 'index']);
Route::get('/blog-post', [BlogPostController::class, 'index']);
Route::get('/purchase-guide', [PurchaseGuideController::class, 'index']);
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index']);
Route::get('/terms', [TermsConditionController::class, 'index']);

Route::get('/product/{accesstoken}', [ProductController::class, 'show'])->name('product.show');



// backend routes
Route::get('/admin', [AdminHomeController::class, 'index']);
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('backend.login');
Route::get('/admin/login', function () {
    if (session()->has('email')) {
        return redirect('/admin');
    } else {
        return view('backend.admin-login');
    }
});
Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);
Route::get('/admin/register', [AdminLoginController::class, 'register']);




//persona routes
Route::group(['prefix' => '/persona'], function () {
    Route::post('add', [AdminPersonaController::class, 'addPersona']);
    Route::get('add', [AdminPersonaController::class, 'personaForm']);
    Route::delete('{id}', [AdminPersonaController::class, 'deletePersona'])->name('persona.delete');
    Route::get('list', [AdminPersonaController::class, 'index']);
    Route::get('{id}/edit', [AdminPersonaController::class, 'edit'])->name('persona.edit');
    Route::put('{id}', [AdminPersonaController::class, 'update'])->name('persona.update');
});

//team member routes
Route::group(['prefix' => '/member'], function () {
    Route::post('add', [AdminTeamMemberController::class, 'addMember']);
    Route::get('add', [AdminTeamMemberController::class, 'memberForm']);
    Route::delete('{id}', [AdminTeamMemberController::class, 'destroy'])->name('member.destroy');
    Route::get('{id}/edit', [AdminTeamMemberController::class, 'edit'])->name('member.edit');
    Route::put('{id}', [AdminTeamMemberController::class, 'update'])->name('member.update');
});
Route::get('/team/list', [AdminTeamMemberController::class, 'index'])->name('team.list');


Route::get('/categories/list', [AdminCategoryController::class, 'index']);


//product handle
Route::group(['prefix' => '/products'], function () {
    Route::get('list', [AdminProductController::class, 'index'])->name('products.list');
    Route::get('add', [AdminProductController::class, 'addProduct']);
    Route::post('add', [AdminProductController::class, 'store'])->name('products.add');
    Route::delete('{id}', [AdminProductController::class, 'destroy'])->name('product.destroy');
    Route::get('{id}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
    Route::put('{id}', [AdminProductController::class, 'update'])->name('products.update');
});
