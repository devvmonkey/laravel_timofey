<?php


Auth::routes();
Route::get('panel/add', 'PanelController@create');
Route::get('panel/{panel}/delete', [
    'as'   => 'panel.delete',
    'uses' => 'PanelController@destroy',
]);
Route::post('panel1/{panel}/update', [
    'as'   => 'panel1.update',
    'uses' => 'PanelController@update', 
]);

Route::get('user/{user}/delete', [
    'as'   => 'user.delete',
    'uses' => 'UserrController@destroy',
]);
Route::get('keyss/{keyss}/delete', [
    'as'   => 'keyss.delete',
    'uses' => 'SellerController@destroy',
]);

Route::post('user/{user}/update', [
    'as'   => 'user.update',
    'uses' => 'UserrController@update',
]);


Route::resource('/panel', 'PanelController');
Route::resource('/sellers', 'SellersController');
Route::resource('/home', 'SellerController');
Route::resource('/', 'RegController');
Route::resource('/add_panel', 'AddpannelController'); 
Route::resource('/create_key', 'CreatekeyController');
Route::resource('/key_generation', 'KeygenerationController');



function is_active_sorter($key, $direction = 'ASC')
{
    if (request('sortby') == $key && request('sortdir') == $direction) {
        return true;
    }

    return false;
}


