<?php

use Illuminate\Support\Facades\Route;

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
Route::get("/","PagesController@index");
Route::get("/add-dog","PagesController@add_dogview");
Route::get("/dog-records","PagesController@dog_recordsview");
Route::get("/pedigree/{id}","PagesController@pedigree");
Route::post("/add-dog","PagesController@add_dog");
Route::get("/delete-dog/{id}","PagesController@delete_dog");
Route::get("/edit-dog/{id}","PagesController@edit_dogview");
Route::get("/view/{id}","PagesController@view_dog");
Route::post("/upload_img","PagesController@upload_img");
Route::post("/health-records","PagesController@health_records");
Route::post("/dna-results","PagesController@dna_results");
Route::post("/show-results","PagesController@show_results");
Route::post("/edit-dog","PagesController@edit_dog");

Route::get("/add-litter","PagesController@add_litterview");
Route::get("/litter-records","PagesController@litter_recordsview");
Route::get("/register-new-litter","PagesController@register_new_litter");
Route::get("/litter-view/{id}","PagesController@litter_view");
Route::get("/litter-sell/{id}","PagesController@litter_sell");
Route::get("/litter-delete/{id}","PagesController@litter_delete");
Route::get("/add-puppies/{id}","PagesController@add_puppiesview");
Route::get("/edit-puppy/{id}","PagesController@edit_puppiesview");
Route::get("/delete-puppy/{id}","PagesController@delete_puppies");
Route::get("/litters-puppies/{id}","PagesController@litters_puppies");
Route::get("/litters-puppy/{id}","PagesController@litters_puppy");

Route::post("/add-puppies","PagesController@add_puppies");
Route::post("/litter-sell","PagesController@litter_sell_post");
Route::post("/add-litter","PagesController@add_litter");

Route::get("/change-of-ownership","PagesController@change_of_ownershipview");
Route::get("/stud-enquiries","PagesController@stud_enquiriesview");
Route::get("/litter-enquiries","PagesController@litter_enquiriesview");

Route::get("/add-breed","PagesController@add_breedview");
Route::get("/breed-records","PagesController@breed_recordsview");
Route::get("/update-breed/{id}/{name}","PagesController@breed_updateview");
Route::get("/delete-breed/{id}","PagesController@breed_delete");

Route::post("/add-breed","PagesController@add_breed");
Route::post("/update-breed","PagesController@breed_update");

Route::get("/profile","PagesController@profileview");
Route::get("/change-password","PagesController@changeview");
Route::get("/edit-profile","PagesController@edit_profileview");
Route::post("/change-password","PagesController@changepassword");

//Admin
Route::get("/user-records","AdminController@user_recordsview");
Route::get("/userrecordshow","AdminController@userrecordshow");
Route::get("/delete-user/{id}","AdminController@delete_usersview");

Route::get("/add-dam","AdminController@add_damview");
Route::post("/add-dam","AdminController@add_dam");

Route::get("/add-sire","AdminController@add_sireview");
Route::post("/add-sire","AdminController@add_sire");

// Route::get("/registration","PagesController@registrationview");

Auth::routes();

Route::post("/register","PagesController@register");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
