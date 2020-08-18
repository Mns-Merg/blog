<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\User;

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
    return view('welcome');
});


//Crud Application



Route::group(['middleware'=>'web'], function(){

    Route::resource('/posts', 'PostsController');

    Route::get('dates', function(){

        $date = new DateTime('+1 week');

        echo $date->format('m-d-Y');

        echo "<br>";

        echo "asdasdasdas0";

        echo Carbon::now()->subMonths(5)->diffForHumans();




    });


    Route::get('/getname', function(){

        $user = User::find(1);

        echo $user->name;

    });

    Route::get('/setname', function(){

        $user = User::find(1);

        $user->name = "william";

        $user->save();

    });

    

});

