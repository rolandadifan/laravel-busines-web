<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//admin
Route::prefix('web/admin')->middleware(['auth'])->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //profile
    Route::get('/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::put('/profile', [AdminProfileController::class, 'update'])->name('admin.update');

    //category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/category', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    //news
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    //project
    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    Route::post('/project/image', [ProjectController::class, 'addImage'])->name('gallery.store');
    Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.edit');
    Route::put('/project/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::delete('/project/gallery/{id}', [ProjectController::class, 'destroyGallery'])->name('gallery.destroy');

    //contact
    Route::get('/soacial-media', [ContactController::class, 'social'])->name('contact.social');
    Route::put('/soacial-media', [ContactController::class, 'update_social'])->name('contact.social.update');
    Route::get('/conatact-info', [ContactController::class, 'contact'])->name('contact.index');
    Route::put('/conatact-info', [ContactController::class, 'update_contact'])->name('contact.update');

    //employee
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::post('/employe', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employe/{id}', [EmployeeController::class, 'show'])->name('employee.edit');
    Route::put('/employe/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/employe/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

    //menu
    Route::get('/about', [MenuController::class, 'index'])->name('about.index');
    Route::put('/about', [MenuController::class, 'update'])->name('about.update');
    Route::put('/about/update-image', [MenuController::class, 'update_image'])->name('about.update.image');
});

Auth::routes(['register' => false]);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//about
Route::get('/tentang-kami', [AboutController::class, 'about'])->name('client.about');

//project
Route::get('/project', [ProjectsController::class, 'project'])->name('client.project');
Route::get('/project-detail', [ProjectsController::class, 'detail'])->name('client.detail');

//news
Route::get('/berita', [NewController::class, 'news'])->name('client.news');
Route::get('/berita/{slug}', [NewController::class, 'detail'])->name('client.news.detail');

//contact
Route::get('/hubungi-kami', [ContactsController::class, 'contact'])->name('client.contact');

//home
Route::get('/', [HomeController::class, 'index']);

