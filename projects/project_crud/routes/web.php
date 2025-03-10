<?php

use App\Http\Controllers\customers;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('customer.index');
// });

Route::get('customers/trash' ,[customers::class , 'trashData'])->name('customer.trash');
Route::get('customer/restore/{customer}' ,[customers::class , 'restore'])->name('customer.restore');
Route::delete('customer/delete/{customer}' ,[customers::class , 'delete'])->name('customer.delete');
Route::resource('customer' , customers::class);
