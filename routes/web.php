<?php


Route::middleware('auth')->group(function () {

    //Labor
Route::view('Add_Labor','labor.create')->name('add_labor');
Route::get('editLabor/{id}','LaborController@edit');
Route::get('All_Labor','LaborController@index')->name('all_labor');

//Attendance
// Route::view('Attendance','attendance')->name('attendance');

Route::get('Attendance','LaborController@gotoattendance')->name('attendance');

//Wages wages
Route::get('Wages','WagesController@index')->name('wages');

//Account
Route::get('Account','AccountTypeController@index')->name('account');
Route::get('sub_account/{id?}','AccountTypeController@account_sub_type')->name('sub_account');
Route::get('View_Account/{id?}','ExpenceController@index')->name('view_account');


//Report
// Route::view('Attendance_Report','report.attendance')->name('attendance_report');
// Route::view('Wages_Report','report.wages')->name('wages_report');
//labor
Route::post('addLabor','LaborController@store');
Route::post('updateLabor/{id}','LaborController@update');
Route::get('deleteLabor/{id}','LaborController@destroy');


Route::post('/wagesAdd','WagesController@store');

Route::get('set_attendance','LaborController@set_attendance')->name('set_attendance');

Route::get('get_attendance','LaborController@get_attendance')->name('get_attendance');
Route::get('Wages_Report','LaborController@wages_report')->name('wages_report');
Route::get('filter_wages','LaborController@filter_wages')->name('filter_wages');


Route::get('Attendance_report','LaborController@attendance_report')->name('attendance_report');
Route::get('filter_attendance','LaborController@filter_attendance')->name('filter_attendance');


//account

Route::get('/pay_account/{id?}','AccountPaymentController@index');
Route::post('/addAccountSubType','AccountTypeController@storesubtype')->name('addAccountSubType');
Route::post('/editAccountSubType','AccountTypeController@editsubtype')->name('editAccountSubType');
Route::post('/addAccountType','AccountTypeController@store');
Route::post('/editAccountType/{id}','AccountTypeController@update');
Route::get('/deleteAccount/{id}','AccountTypeController@destroy');
Route::get('deleteAccountSub/{id?}','AccountTypeController@destroysub')->name('deleteAccountSub');
Route::post('/expenceAdd','ExpenceController@store');
Route::post('/Payamount/{id}','ExpenceController@update');
Route::get('/home', 'HomeController@index')->name('home');

    
});

Route::view('/','index')->name('index')->middleware('auth');



Auth::routes();


