<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\TagController;
use App\Models\Article;
use PhpParser\Builder\Function_;

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


//Страницы приложения
Route::middleware(['locale'])->group(Function(){
    Route::get('/', [HomeController::class, 'homePage'])->name('home');
    Route::get('blog/{categorySlug}',[HomeController::class, 'blogPage'])->name('blog.category');
    Route::get('blog/{categorySlug}/{articleSlug}',[HomeController::class, 'articlePage'])->name('blog.article');
    Route::post('blog/{article}/add-coment', [CommentController::class, 'store'])->name('blog.article.add-comment');


    Route::middleware(['guest'])->group(function(){
        Route::get('register', [AuthController::class, 'registerPage'])->name('register');
        Route::post('register', [AuthController::class, 'register'])->name('register.store');
        Route::get('login', [AuthController::class, 'loginPage'])->name('login');
        Route::post('login', [AuthController::class, 'login'])->name('login.auth');
    });



    //Страници Админ-панели
    Route::prefix('admin')->middleware('auth','admin')->group(function(){
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin');
    //CRUD для категорий
     Route::prefix('blog-categories')->group(function(){
        Route::get('/',[CategoryController::class,'allCategories'])->name('blog.categories');
        Route::get('create', [CategoryController::class,'createCategory'])->name('blog.categories.create');
        Route::post('create',[CategoryController::class, 'storeCategory'])->name('blog.categories.store');
        Route::get('{category}/edit',[CategoryController::class, 'editCategory'])->name('blog.categories.edit');
        Route::put('{category}/edit',[CategoryController::class, 'updateCategory'])->name('blog.categories.update');
        Route::delete('{category}',[CategoryController::class,'deleteCategory'])->name('blog.categories.delete');

    });
    //CRUD для Тег
    Route::resource('tags',TagController::class);

    //CRUD для Новостей
    Route::resource('articles',ArticleController::class);
    Route::get('articles/{article}/remove.image', [ArticleController::class, 'removeImage'])->name('admin.articles.remove-img');
    });

    //CRUD для ролей

    Route::get('roles', [RolePermissionController::class, 'rolesPage'])->name('admin.roles');
});

 Route::get('change-locale/{locale}', [HomeController::class , 'changelocale'])->name('app.change-locale');






