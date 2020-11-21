<?php
Route::get('/ventes/detail', ['as' => 'ventes.pdf', 'uses' => 'VentesController@orderPdf']);
 
Route::get('system-management/dynamic_pdf', 'DynamicPDFController@index');

Route::get('system-management/dynamic_pdf/pdf', 'DynamicPDFController@pdf');
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/article', 'listeArController@index');
Route::get('/categorie', 'listeCatController@index');
Route::get('/dashboard', 'DashboardController@index');
// Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::get('/profile', 'ProfileController@index');
 

Route::resource('Fournisseur-management', 'FournisseurManagementController');

 
Route::resource('user-management', 'UserManagementController');

Route::resource('employee-management', 'EmployeeManagementController');
 

Route::resource('system-management/categorie', 'CategorieController');
 
 Route::resource('system-management/produit', 'ProduitController');
 

Route::resource('system-management/achats', 'AchatsController');
Route::resource('system-management/achats1', 'AchatsController1');
Route::resource('system-management/ventes', 'VentesController');
 
Route::resource('system-management/ventes', 'VentesController');
 
Route::get('system-management/report', 'ReportController@index');
Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');



Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');

Route::get('avatars/{name}', 'EmployeeManagementController@load');

Route::get('/mailbox', function () {
    return view('mailbox');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/welcome', function () {
    return view('welcome');
});
 
Route::resource('system-management/ventes1', 'VentesController1');
Route::post('system-management/ventes1/search', 'VentesController1@search')->name('ventes1.search');

Route::get(' system-mgmt/country/detail ', function () {
   // return view('exemple');
	$pdf = PDF::loadview('system-mgmt/country/detail');
	return $pdf->download('detail.pdf');
});
Route::get('/exemple', function () {
   // return view('exemple');
	$pdf = PDF::loadview('exemple');
	return $pdf->download('exemple.pdf');
});

 
Route::get('/invoice/{id}', 'InvoiceController@index');
 
 Route::post('/invoice/{id}', 'InvoiceController@exportPDF')->name('invoice.pdf');

Route::post('/invoiceVentes/{id}', 'InvoiceVentesController@exportPDF')->name('invoiceVentes.pdf');

 




Route::get('/detail', 'DetailController@index');
Route::post('/detail', 'DetailController@exportExcel')->name('detail.excel');
Route::post('/detail', 'DetailController@exportPDF')->name('detail.pdf'); 