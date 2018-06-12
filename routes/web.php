<?php
use Illuminate\Support\Facades\Input;
use App\Fees;
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
    return view('94391/Home');
});


Route::get('94391/student','projectcontroller@student');
Route::get('94391/fees','projectcontroller@fees');
Route::post('store','StudentController@store');
Route::post('save','FeesController@store');

Route::get('94391/search','FeesController@searchOne');
Route::get('94391/onePayments','projectcontroller@onepayment');


Route::get('94391/payments','FeesController@index');

Route::post('94391/search',function (){

        $search = Input::get ( 'searchstudent_number' );
        $user = Fees::where('student_number','LIKE','%'.$search.'%')->get();
        if(count($user) > 0)
            return view('94391.onePayements')->withDetails($user)->withQuery ( $search );
        else return view ('home')->withMessage('No Details found. Try to search again !');

    });


