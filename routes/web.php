<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HashtagController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\LeaveCommentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TrandingBlogController;
use App\Http\Controllers\PortfolioTypeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\frontend\ProjectController;
use App\Http\Controllers\SocialMediaShareController;
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Controllers\NewsletterSubscriptionController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Landing Page
Route::get('/',[FrontendHomeController::class,'index'])->name('home');
Route::get('/commercial',[ServiceController::class,'commercial'])->name('commercial');
Route::get('/architect',[ServiceController::class,'architect'])->name('architect');
Route::get('/residential',[ServiceController::class,'residential'])->name('residential');
Route::get('/how-we-work',[ServiceController::class,'howWeWork'])->name('how.we.work');

//Auth
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/store',[AuthController::class,'store'])->name('store');

//Register
Route::get('/registration',[RegistrationController::class,'index'])->name('registration');
Route::post('/registration/store',[RegistrationController::class,'store'])->name('registration.store');
//Pages
Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio.page');
Route::get('/project/details/{id}',[PortfolioController::class,'portfolio_details'])->name('portfolio.details');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/delete/{id}',[AboutController::class,'delete'])->name('delete.employee');
Route::get('/services',[ServiceController::class,'index'])->name('services');
Route::get('/blog-page',[BlogController::class,'index'])->name('blog');
Route::get('/category-wise-blog/{id}',[CategoryController::class,'CategoryWiseBlog'])->name('cat.wise.blog');
Route::get('/trendingBlog/{id}',[TrandingBlogController::class,'index'])->name('trending');
Route::get('/search',[BlogController::class,'search'])->name('blog.search');
Route::post('/blog-comment',[LeaveCommentController::class,'store'])->name('blog.comment.store');
Route::get('/blog-view/{id}',[BlogController::class,'show'])->name('blog.view');

Route::get('/social-media-share/{id}', [SocialShareButtonsController::class,'ShareWidget'])->name('social-media-share');
//Post comment and reply
Route::post('/post-comment',[CommentController::class,'store'])->name('comments.store');
Route::get('/reply/{id}',[CommentController::class,'index'])->name('reply');

Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact-store',[ContactController::class,'store'])->name('contact.store');


Route::group(['middleware'=>'auth'],function(){
Route::get('/category',[CategoryController::class,'index'])->name('category');



//Middleware
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    // Backend
    // Pages
    Route::resource('portfolio', PortfolioController::class);
    Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'delete'])->name('portfolio.delete');
    Route::resource('portfolioType', PortfolioTypeController::class);
    Route::get('/portfolio-type/delete/{id}', [PortfolioTypeController::class, 'delete'])->name('portfolioType.delete');

    // Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('app');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('change.password');
    Route::post('/update-password/{id}', [ChangePasswordController::class, 'update'])->name('update.password');

    // User Management
    Route::get('/user-list', [UserController::class, 'list'])->name('user.list');

    // Category Management
    Route::get('/category-list', [CategoryController::class, 'list'])->name('category.list');
    Route::get('/category-form', [CategoryController::class, 'create'])->name('category.form');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    // Blog Management
    Route::get('/blog-list', [BlogController::class, 'list'])->name('blog.list');
    Route::get('/blog-form', [BlogController::class, 'form'])->name('blog.form');
    Route::post('/blog-store', [BlogController::class, 'store'])->name('blog.store');
    Route::post('/hash-tag', [BlogController::class, 'ashTagStore'])->name('hash.tag.store');
    Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');


    // About Section
    Route::get('about/list', [AboutController::class, 'list'])->name('about.list');
    Route::get('about/step1', [AboutController::class, 'showStep1'])->name('about.form');
    Route::get('about/brand', [AboutController::class, 'brand'])->name('about.brand');
    Route::get('about/employee', [AboutController::class, 'employee'])->name('about.employee');
    Route::post('about/step1', [AboutController::class, 'store'])->name('about.store');
    Route::post('about/employee', [AboutController::class, 'employee_store'])->name('employee.store');
    Route::post('about/brand', [AboutController::class, 'brand_store'])->name('brand.store');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // Registration
    Route::post('/registration/update{id}', [RegistrationController::class, 'update'])->name('registration.update');

    // Contact Management
    Route::get('/contact-list', [ContactController::class, 'contactlist'])->name('contact.list');
    Route::get('/contact-view/{id}', [ContactController::class, 'contactview'])->name('contact.view');
});
});
