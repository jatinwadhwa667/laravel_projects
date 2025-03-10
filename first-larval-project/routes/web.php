<?php

use App\Http\Controllers\contactForm;
use App\Http\Controllers\fileUpload;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\normalController;
use App\Http\Controllers\resourcefulController;
use App\Http\Controllers\singleactionController;
use App\Models\MyBlog;



/* Define a route parameter and pass an ID as a named parameter. 
   If multiple parameters are needed, define them accordingly. */

// Route::get('/testingsite/{id}', function ($id) {

//     return "test user id = " . $id;
// })->name('testsitename');



/** Route Grouping */

// Route::group(['prefix' => 'root'], function () {
//     Route::get('/myview', function () {
//         return view('MyView');
//     })->name('MyTestView');

//     Route::get('/about', function () {
//         return view('about');
//     })->name('MyAboutView');
// });



/** Different types of route methods include: POST, PUT, PATCH, DELETE */

// Route::post('/testpost',function()
// {
//     return 'this is post request';

// });


// Route::get('/bladeparemter', function()
// {
//     $boo1 = "textbook";
//     $bookdata = ['textbook2','textbook3','textbook4'];
//     return view('firstblade',['book1'=>$boo1 , 'bookdata'=>$bookdata]);
// });


/**Start Extends topic in Blade. */

// Route::get('/homepage',function()
// {

//     return view('home');
// });


// Route::get('/aboutpage',function()
// {

//     return view('about');
// });


/** nomal way to defined controller */
// Route::get('/homepage', [normalController::class , 'homepage']);


// /** single action controller */
// Route::get('/aboutpage', singleactionController::class);


// /** resourceful controller */

// Route::resource('/blog',resourcefulController::class);



// Route::get('/myblog' ,function()
// {
//     $job = MyBlog::all();

//     dd($job);

// });

/** End Extends topic in Blade. */

/** Fallbacks are used to handle cases where no route is found, showing an error as an override. and use alwas in bottom*/

// Route::fallback(function(){
//     return 'file not found';
// });


/***
 * 
 *  Practise
 */
/** How to defined Route */
// Route::get('/myabout', function () {
//     return view('about');
// });

// /** Parameter Route */

// Route::get('paremeter/{id}', function ($ids) {
//     return view('paramertView');
// });

// /** name Route */
// Route::get('/myabout', function () {
//     return view('about');
// })->name('namedfile.file');


// Route::get('home', function () {
//     return view('firstblade');
// });


// /** Name Parmeter Route*/
// Route::get('/myabout1/{id?}/{master?}', function ($id = null, $master = null) {
//     return view('paramertView', ['id' => $id, 'master' => $master]);
// })->name('nameparameter');


// /** Route grouping  */

// Route::group(["prefix" =>"book"], function () {

//     Route::get('/test1', function () {
//         return view('firstblade');
//     });

//     Route::get('/test2', function () {
//         return view('about');
//     });
// });

// /** route grouing with name parmeter*/

// Route::group(["prefix" =>"book" , 'as' => 'book.'], function () {

//     Route::get('/test1', function () {
//         return view('firstblade');
//     })->name('test1');

//     Route::get('/test2', function () {
//         return view('about');
//     })->name('test2');
// });

// /** fallback Route*/





Route::get('/contactform', [contactForm::class, 'viewForm'])->name('index.form');
Route::post('/contact', [contactForm::class, 'submitform'])->name('index.submit');

Route::get('/fileupload', [fileUpload::class, 'index'])->name('index.fileupload');
Route::post('/fileupload', [fileUpload::class, 'fileStore'])->name('index.filestore');
Route::get('/fileuploads', [fileUpload::class, 'downloadfile'])->name('index.downloadfile');

Route::fallback(function () {
    return view('error');
});
