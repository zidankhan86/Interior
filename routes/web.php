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
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LeaveCommentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TrandingBlogController;
use App\Http\Controllers\ChangePasswordController;
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

//Auth
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/store',[AuthController::class,'store'])->name('store');

//Register
Route::get('/registration',[RegistrationController::class,'index'])->name('registration');
Route::post('/registration/store',[RegistrationController::class,'store'])->name('registration.store');


Route::group(['middleware'=>'auth'],function(){
//Frontend

//Pages
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact-store',[ContactController::class,'store'])->name('contact.store');
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/trendingBlog/{id}',[TrandingBlogController::class,'index'])->name('trending');
Route::get('/search',[BlogController::class,'search'])->name('blog.search');
Route::post('/likes/{id}',[LikeController::class,'like'])->name('blog.like');
Route::post('/blog-comment',[LeaveCommentController::class,'store'])->name('blog.comment.store');
Route::get('/blog-view/{id}',[BlogController::class,'show'])->name('blog.view');
Route::get('/social-media-share/{id}', [SocialShareButtonsController::class,'ShareWidget'])->name('social-media-share');
//Post comment and reply
Route::post('/post-comment',[CommentController::class,'store'])->name('comments.store');
Route::get('/reply/{id}',[CommentController::class,'index'])->name('reply');
//News letter
Route::post('/subscribe', [NewsletterSubscriptionController::class, 'store'])->name('subscribe');
//Backend

//Middleware
Route::group(['middleware'=>'auth','prefix'=>'app'],function(){

//Pages
Route::get('/',[HomeController::class,'index'])->name('app');
Route::get('/logout',[TestController::class,'logout'])->name('logout');
Route::get('/form',[TestController::class,'form'])->name('form');
Route::get('/setting',[SettingController::class,'index'])->name('setting');
Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change.password');
Route::post('/update-password/{id}',[ChangePasswordController::class,'update'])->name('update.password');
Route::get('/user-list',[AuthController::class,'list'])->name('user.list');
Route::get('/category-list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category-form',[CategoryController::class,'create'])->name('category.form');
Route::get('/blog-list',[BlogController::class,'list'])->name('blog.list');
Route::get('/blog-form',[BlogController::class,'form'])->name('blog.form');

//profile
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
//post
Route::post('/registration/update{id}',[RegistrationController::class,'update'])->name('registration.update');
Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');
Route::post('/blog-store',[BlogController::class,'store'])->name('blog.store');
Route::post('/hash-tag',[BlogController::class,'ashTagStore'])->name('hash.tag.store');


});
});
