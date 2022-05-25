<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Database\Schema\Blueprint;
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

 Route::get('/', function () {
     
    
  return view('users');
//     $myItem = \Config::get('database.connections');
//     echo '<pre>';
//  var_dump($myItem);
//  echo '</pre>';
 });






//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');


//Route::get('/redirect', [homeController::class, 'redirect']);

//Route::get('/', [homeController::class, 'index']);