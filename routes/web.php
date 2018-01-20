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


/*user pages*/
Route::group(['middleware'=>'roles','roles'=>['user','admin','doctor']],function (){
    Route::get('/profile/{id}','PagesController@getProfile');
    Route::post('/typeQuestion','PagesController@typeQuestion');
    Route::post('/replay','PagesController@replay');
    Route::post('/addBooking','PagesController@addBooking');
    Route::post('/addRate','PagesController@addRate');



});
/*doctor pages*/
Route::group(['middleware'=>'roles','roles'=>['doctor']],function (){

        Route::post('/editProfile','PagesController@editProfile');
        Route::post('/editCareer','PagesController@editCareer');
        Route::post('/addEdu','PagesController@addEdu');
        Route::post('/addCert','PagesController@addCert');
        Route::post('/editPic','PagesController@editPic');


});
/*advertiser pages*/
Route::group(['middleware'=>'roles','roles'=>['advertiser']],function (){

    Route::get('/adControl','advertiserController@getAdvertisement');
    Route::post('/addAd','advertiserController@addAd');
    Route::get('/deleteAd/{id}','advertiserController@deleteAd');
    Route::post('/modifyAd','advertiserController@modifyAd');
    Route::post('/sendFeed','advertiserController@sendFeed');
});
/*admin pages*/
Route::group(['middleware'=>'roles','roles'=>['admin']],function (){

    Route::post('/companyEdit','AdminController@companyEdit');
    Route::post('/devEdit','AdminController@devEdit');
    Route::post('/addCarousal','AdminController@addCarousal');
    Route::get('/removeCarousal/{id}','AdminController@removeCarousal');
    Route::post('/addDepartment','AdminController@addDepartment');
    Route::get('/control',"AdminController@getPage");
    Route::get('/removeUser/{id}',"AdminController@removeUser");
    Route::post('/changeRole',"AdminController@changeRole");
    Route::get('/RemoveQ/{id}',"AdminController@RemoveQ");




});
/*public route*/

Route::get('/','PagesController@getAll');
Route::post('/register','PagesController@register');
Route::post('/login','SessionController@check');
Route::get('/logout','SessionController@destroy');
Route::post('/search','PagesController@search');
Route::get('/search','PagesController@getSearch');
Route::get('/dept/{id}','PagesController@dept');
Route::get('/question/{id}','PagesController@getQuestion');
Route::get('/verify/{id}','PagesController@verify');


Route::get('/access',function (){

    return view('access');
});


