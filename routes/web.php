<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Route;

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
// frontend route
Route::get('/', [HomeController::class, 'home'])->name('home');
  //About router
Route::controller(AboutController::class)->group(function(){
    Route::get('/about', 'homeAbout')->name('home.about');
  
});
  //contact router
Route::controller(ContactController::class)->group(function(){
    Route::get('/contact', 'contact')->name('contact.me');
    Route::post('store/contact/message', 'storeContact')->name('store.contact.message');
  
});

//Portfolio router
Route::controller(PortfolioController::class)->group(function(){
    Route::get('/portfolio', 'homePortfolio')->name('home.portfolio');
    Route::get('/portfolio-detailes/{id}', 'portfolioDetailes')->name('portfolio.detailes');
  
});

//blog router
Route::controller(BlogController::class)->group(function(){
    Route::get('/blog/detailes/{id}', 'blogDetails')->name('details.blog');
    Route::get('/category/blog/{id}', 'categoryBlog')->name('category.post');
    Route::get('/all/blog/', 'allBlogHome')->name('all.blog.home');
  
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //AdminController all route
    Route::prefix('admin/')->controller(AdminController::class)->group(function(){
        Route::get('/', 'index')->name('dashboard');
        Route::get('logout', 'destroy')->name('admin.logout');
        Route::get('profile', 'profile')->name('admin.profile');
        Route::post('store/profile', 'storeProfile')->name('update.profile');
        Route::get('change/password', 'changePassword')->name('change.password');
        Route::post('update/password', 'updatePassword')->name('update.password');
    });

    //Home slide router
    Route::prefix('admin/')->controller(HomeSliderController::class)->group(function(){
        Route::get('home/slider', 'homeSlider')->name('home.slide');
        Route::post('update/slider', 'updateSlider')->name('update.slider');
    });

      //About router
      Route::prefix('admin/')->controller(AboutController::class)->group(function(){
        Route::get('about', 'aboutPage')->name('about.page');
        Route::post('update/about', 'updateAbout')->name('update.about');
        Route::get('about/multi/image', 'aboutMultiImage')->name('about.multi_image');
        Route::post('store/about/multi/image', 'storeAboutMultiImage')->name('store.about.multi_image');
        Route::get('all/multi/image', 'allMultiImage')->name('about.all.multi_image');
        Route::get('edit/multi/image/{id}', 'editMultiImage')->name('edit.multi.image');
        Route::post('update/multi/image/', 'updateMultiImage')->name('update.about.multi_image');
        Route::get('delete/multi/image/{id}', 'deleteMultiImage')->name('delete.multi.image');

    });

    //Portfolio router
    Route::prefix('admin/')->controller(PortfolioController::class)->group(function(){
        Route::get('portfolio', 'portfolioPage')->name('portfolio.page');
        Route::get('add/portfolio', 'addPortfolio')->name('add.portfolio');
        Route::post('store/portfolio', 'storePortfolio')->name('store.portfolio');
        Route::get('edit/portfolio/{id}', 'editPortfolio')->name('edit.portfolio');
        Route::post('update/portfolio', 'updatePortfolio')->name('update.portfolio');
        Route::get('delete/portfolio/{id}', 'deletePortfolio')->name('delete.portfolio');

    });

    //Blog caategory router
    Route::prefix('admin/')->controller(BlogCategoryController::class)->group(function(){
        Route::get('blog/category', 'allBlogCategory')->name('all.blog.category');
        Route::get('add/blog/category', 'addBlogCategory')->name('add.blog.category');
        Route::post('store/blog/category', 'storeBlogCategory')->name('store.blog.category');
        Route::get('edit/blog/category/{id}', 'editBlogCategory')->name('edit.blog.category');
        Route::post('update/blog/category/{id}', 'updateBlogCategory')->name('update.blog.category');
        Route::get('delete/blog/category/{id}', 'deleteBlogCategory')->name('delete.blog.category');

    });

    //Blog router
    Route::prefix('admin/')->controller(BlogController::class)->group(function(){
        Route::get('blog', 'allBlog')->name('all.blog');
        Route::get('add/blog', 'addBlog')->name('add.blog');
        Route::post('store/blog', 'storeBlog')->name('store.blog');
        Route::get('edit/blog/{id}', 'editBlog')->name('edit.blog');
        Route::post('update/blog/', 'updateBlog')->name('update.blog');
        Route::get('delete/blog/{id}', 'deleteBlog')->name('delete.blog');
    });

    //Footer router
    Route::prefix('admin/')->controller(FooterController::class)->group(function(){
        Route::get('footer', 'footerManage')->name('footer.manage');
        Route::post('update/footer', 'updateFooter')->name('update.footer');
    });

      //contact router
    Route::controller(ContactController::class)->group(function(){
        Route::get('contact/message', 'contactMessage')->name('contact.message');
        Route::get('contact/delete/{id}', 'contactDelete')->name('delete.contact');
    
    });


    
});


require __DIR__.'/auth.php';
