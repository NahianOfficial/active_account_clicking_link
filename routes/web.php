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
Route::get('/', function () {
    return "hello artisan";
});

*/
Route::get('/', function () {
    return "hello artisan check other route in web.php ";
});

Route::get('/login','MyAuth@ShowLogin');
Route::post('/Authlink','MyAuth@SentAuthLink');
Route::get('/Verify/{name}/{token}','MyAuth@VerifyLink');
Route::post('/loginVerify','MyAuth@VerifyLogin');
Route::get('/Logout/','MyAuth@logoutUser');



//user
Route::get('/User_Dashbord', 'UserController@ShowUserDashbord');
Route::get('/User_see_event', 'UserController@ShowUserEvent');

//Admin
Route::get('/Admin_Dashbord','AdminController@ShowAdminDashbord');
Route::get('/Admin_see_all_user','AdminController@ShowAdminAllUser');



