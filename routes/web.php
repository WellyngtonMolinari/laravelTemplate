<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioCategoryController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;

// Route::get('/', function () {
//     return view('frontend.index');
// }); 

  
Route::controller(DemoController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');


    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('cotact.page');
});


 // Admin All Route 
Route::middleware(['auth'])->group(function () {
     

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
     
});

});


 // Home Slide All Route 
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
   Route::post('/update/slider', 'UpdateSlider')->name('update.slider');

   Route::post('/store/carousel', 'StoreCarousel')->name('store.carousel');

   Route::get('/all/carousel', 'AllCarousel')->name('all.carousel');
   Route::get('/add/carousel', 'AddCarousel')->name('add.carousel');
   Route::get('/edit/carousel/{id}', 'EditCarousel')->name('edit.carousel');

   Route::post('/update/carousel', 'UpdateCarousel')->name('update.carousel');
  Route::get('/delete/carousel/{id}', 'DeleteCarousel')->name('delete.carousel');
     
});

 // About Page All Route 
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about', 'HomeAbout')->name('home.about');

    
     
});

// Portfolio Category All Routes 
Route::controller(PortfolioCategoryController::class)->group(function () {
    Route::get('/all/portfolio/category', 'AllPortfolioCategory')->name('all.portfolio.category');
    Route::get('/add/portfolio/category', 'AddPortfolioCategory')->name('add.portfolio.category');

    Route::post('/store/portfolio/category', 'StorePortfolioCategory')->name('store.portfolio.category');

    Route::get('/edit/portfolio/category/{id}', 'EditPortfolioCategory')->name('edit.portfolio.category');

     Route::post('/update/portfolio/category/{id}', 'UpdatePortfolioCategory')->name('update.portfolio.category');

     Route::get('/delete/portfolio/category/{id}', 'DeletePortfolioCategory')->name('delete.portfolio.category');     
     
});



 // Porfolio All Route 
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio');
    Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');
    Route::post('/store/portfolio', 'StorePortfolio')->name('store.protfolio');
    Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
    Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.protfolio');
     Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');

     Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');

     Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');

      
    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');

    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
    Route::get('/add/multi/image', 'AddMultiImage')->name('add.multi.image');
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');

    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
   Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
});
 



 // Blog Category All Routes 
Route::controller(BlogCategoryController::class)->group(function () {
    Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');

    Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');

    Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');

     Route::post('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');

     Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');     
     
});



 // Blog All Route 
Route::controller(BlogController::class)->group(function () {
    Route::get('/all/blog', 'AllBlog')->name('all.blog');
    Route::get('/add/blog', 'AddBlog')->name('add.blog');
    Route::post('/store/blog', 'StoreBlog')->name('store.blog');
    Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
    Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');

    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}', 'CategoryBlog')->name('category.blog');
    
    Route::get('/blog', 'HomeBlog')->name('home.blog');
     
});


 // Footer All Route 
Route::controller(FooterController::class)->group(function () {
    Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
    Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
    Route::get('/support/documentation', 'DocumentationController')->name('support.documentation');
   
    Route::get('/terms', 'TermsController')->name('terms.index');
    Route::get('/privacy', 'PrivacyController')->name('privacy.index');
     
});



 // Contact All Route 
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'Contact')->name('contact.me');
    Route::post('/store/message', 'StoreMessage')->name('store.message');
    Route::get('/contact/message', 'ContactMessage')->name('contact.message');   
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
   
     
});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::get('/contact', function () {
//     return view('contact');
// });