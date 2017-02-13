<?php

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
    return view('login');
});


Auth::routes();

Route::resource('med','medicamentoController');
//Route::resource('nerds', 'NerdController');

Route::get('alunos/xlsx',['uses'=>'alunosController@exportar', 'as' => 'alunos.xlsx']);
Route::get('alunos/pdf',['uses'=>'alunosController@alunopdf', 'as' => 'alunos.pdf']);
Route::post('alunos/cep', 'alunosController@cep');
/** Route::post('/cep', function(Request $request){
    $cep = $request;
    return 'Success! ajax in laravel 5';
});  */
Route::group(['middleware'=>['web']],function(){
    Route::resource('alunos','alunosController');

});

//Route::get('/alunos/create','alunosConroller@create');
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\\LoginController@logout');

Route::group(['middleware' => ['web']], function() {
    Route::resource('medicamento','medicamentoController');
});

Route::get('/getPDF','PDFController@getPDF');
Route::get('/export','medicamentoController@exportar');
Route::get('/medindex','medicamentoController@index');
Route::get('/cadmed','medicamentoController@create');
Route::post('/storemed','medicamentoController@store');



Route::get('/charts', function()
{
    return View::make('mcharts');
});

Route::get('/tables', function()
{
    return View::make('table');
});

Route::get('/forms', function()
{
    return View::make('form');
});

Route::get('/grid', function()
{
    return View::make('grid');
});

Route::get('/buttons', function()
{
    return View::make('buttons');
});


Route::get('/icons', function()
{
    return View::make('icons');
});

Route::get('/panels', function()
{
    return View::make('panel');
});

Route::get('/typography', function()
{
    return View::make('typography');
});

Route::get('/notifications', function()
{
    return View::make('notifications');
});

Route::get('/blank', function()
{
    return View::make('blank');
});

Route::get('/login', function()
{
    return View::make('login');
});

Route::get('/documentation', function()
{
    return View::make('documentation');
});
