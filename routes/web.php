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

Route::get('/indexss', function () {
    return view('index');
});
Auth::routes();

/*
|
|
| VENDORS ROUTER
|
|
*/
 
#####   VENDOR'S LOGIN ROUTE  ######
Route::get('/login/vendor', 'Auth\LoginController@showVendorLoginForm')->name('login/vendor');
Route::post('/login/vendor', 'Auth\LoginController@vendorLogin');

######  VENDOR'S ROUTE DASHBOARD ROUTE ######

Route::get('/ven/dashboard','vendorDashController@index');
Route::get('/ven/offer','vendorDashController@index');
Route::get('/ven/offer/create','vendorDashController@offerCreate');
Route::get('/ven/offers','vendorDashController@allOffers');
Route::get('/ven/offer/{id}/edit','vendorDashController@editOffer');
Route::get('/ven/profile','vendorDashController@profile');

//Route::Post('/ven/offer/{id}/edit','vendorDashController@updateOffer');


/*
|
|
|EMAIL 
|
*/






// Route::get('/', function () {
//     return view('index');
// });
//Route::get('/','OffersController@front_index');
//Route::get('/offers/{slug}','OffersController@show_single');

//Route::post('/login','MemberController@login');


Route::get('/member/status/{status}','MemberController@status');
Route::get('/memberinfo/{id}','MemberController@show_dash');

Route::post('/add_vendor','VendorsController@store');
Route::post('/edit_vendor','VendorsController@update');

Route::get('/vendors/status/{status}','VendorsController@status');
Route::get('/vendorinfo/{id}','VendorsController@show_dash');

// location delete from vendor's form
Route::post('/delete_location','BusLocationController@destroy');
Route::post('/edit_location','BusLocationController@update');
Route::post('/searchlocation','BusLocationController@search');




Route::resource('member','MemberController');
Route::resource('vendor1','VendorController');
Route::resource('vendor','VendorsController');
Route::resource('category','CategoryController');
Route::resource('offer','OffersController');
Route::resource('listings','ListingsController');
Route::resource('ven','vendorDashController');


// Route::get('/admin', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@index')->name('/dashboard');


###################### FRONT END ROUTE   ###########################

//INTERFACE

Route::get('/','PublicController@index');
Route::get('/index', 'PublicController@index')->name('/index');
Route::get('/profile','PublicController@profile_page');
Route::get('/redeem-history','PublicController@redeem_history_page');
Route::get('/social-media','PublicController@social_link_page');
Route::get('/change-password','PublicController@changepassword_page');
Route::get('/favourite','PublicController@favourite_offers_page');
Route::get('/offers/{slug}','PublicController@show_single');

Route::post('/add_favourite','PublicController@favourite');
Route::post('/editprofile','PublicController@updateProfile');
Route::post('/editpassword','PublicController@changePassword');

// REDEEM
Route::get('/confirm-redeem','PublicController@confirm_page');
Route::get('/offer-redeemed','PublicController@redeemed_page');

// LOAD NOTIFICATION
Route::post('/fetch_notification','PublicController@unseenNotification');
Route::post('/view_notifications','PublicController@notification');
Route::post('/read_notification','PublicController@readNotification');
### mobile notification  view route
Route::get('/notification','PublicController@notification_mobile');



// LOGIN 

Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@adminLogin');

// MAILING
Route::get('/mail','PublicController@mail');
//Route::get('/account/{token}', 'PublicController@redeem_page');
// MEMBER
//Route::get('/account/{token}','MemberController@accountVerification');
Route::get('/account/{token}','MemberController@accountVerification');
Route::post('/account/{token}','MemberController@changePassword');

// VENDOR

//Route::get('/account/{token}','MemberController@accountVerification');
Route::get('/vendor/account/{token}','VendorsController@accountVerification');
Route::post('/vendor/account/{token}','VendorsController@changePassword');

##################### END FRONT ROUNTE #############################


//Route::view('/index', 'index');
//Route::get('/login','PublicController@login')->name('\login\admin');

// BACKEND ROUTE
//Route::get('/admin','OffersController@front_index');

    
    //Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('login');
    // Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
    // Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    // Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterFor

    // Route::post('/login', 'Auth\LoginController@adminLogin');
    // Route::post('/login/writer', 'Auth\LoginController@writerLogin');
    // Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    // Route::post('/register/writer', 'Auth\RegisterController@createWriter');


    // Route::view('/home', 'home')->middleware('auth');
   // Route::view('/admin', 'admins');
    // Route::view('/writer', 'writer');
