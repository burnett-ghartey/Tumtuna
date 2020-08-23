<?php
use App\User;
use App\Post;


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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



// Route::group(['middleware'=>['activeUser']], function(){
//     Route::get('/admin', 'AdminController@index')->name('admin');
//     Route::resource('/admin/posts', 'AdminPostsController');
    
// });


Route::group(['middleware'=>['admin', 'activeUser']], function(){
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::resource('/admin/users', 'AdminUsersController');
    Route::resource('/admin/categories', 'AdminCategoriesController');
    Route::resource('/admin/reviews', 'AdminReviewsController');    
});
Route::group(['middleware'=>['postUser']], function(){
    Route::resource('/post-a-job', 'PostJobController');
});

Route::get('/profile-details/{id}', 'PagesController@show')->name('viewpost');

 
Route::resource('/postreview', 'PostReviewController');
 

Route::resource('/profile', 'GuestProfileController');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/search', 'PagesController@search');
Route::POST('/search/filter','PagesController@filter');
Route::POST('/support', 'ContactController@sendMessage');

Route::get('/carpentry', function(){
    return view('pages.services.carpentry');
});
Route::get('/painting', function(){
    return view('pages.services.painting');
});
Route::get('/electrician', function(){
        return view('pages.services.electrician');
});
Route::get('/plumbing', function(){
    return view('pages.services.plumbing');
});

Route::post('loadmoredata', 'PagesController@loadmoredata');






