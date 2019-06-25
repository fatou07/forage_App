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
    return view('welcome');
});

Route::get('/test', function () {
    return view('layout.form');
});
Route::get('/test1', function () {
    return "HELLO";
});
Auth::routes();
Route::get('/clients/selectvillage', function () {

return view('clients.selectvillage');})->name('clients.selectvillage');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clients/list', 'ClientController@list')->name('clients.list');
Route::resource('clients', 'ClientController');
Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::resource('/clients', 'ClientController');

Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::resource('villages', 'VillageController');

Route::get('/factures/list', 'FactureController@list')->name('factures.list');
Route::resource('factures', 'FactureController');
Route::get('/factures/create', 'FactureController@create')->name('factures.create');
Route::resource('factures', 'FactureController');

Route::get('/reglements/list', 'ReglementController@list')->name('reglements.list');
Route::resource('reglements', 'ReglementController');
Route::get('/reglements/create', 'ReglementController@create')->name('reglements.create');
Route::resource('reglements', 'ReglementController');

Route::get('/abonnements/list', 'AbonnementController@index')->name('abonnements.list');
Route::resource('abonnements', 'AbonnementController');
Route::get('/abonnements/create', 'AbonnementController@create')->name('abonnements.create');
Route::resource('abonnements', 'AbonnementController');
Route::get('/abonnements/show', 'AbonnementController@show')->name('abonnements.show');
Route::resource('abonnements', 'AbonnementController');
Route::get('/abonnements/selectclient', function () {

    return view('abonnements.selectclient');})->name('abonnements.selectclient');
    Route::get('/abonnements/selectcompteur', function () {

        return view('abonnements.selectcompteur');})->name('abonnements.selectcompteur');
    
    

Route::get('/users/list', 'UserController@list')->name('users.list');
Route::resource('users', 'UserController');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::resource('users', 'UserController');

Route::get('/consommations/list/{abonnements}', 'ConsommationController@list')->name('consommations.list');
Route::resource('consommations', 'ConsommationController');
Route::get('/consommations/create', 'ConsommationController@create')->name('consommations.create');
Route::resource('consommations', 'ConsommationController');
 
Route::get('/administrateurs/list', 'AdministrateurController@list')->name('administrateurs.list');
Route::resource('administrateurs', 'AdministrateurController');

Route::get('/comptables/list', 'ComptableController@list')->name('comptables.list');
Route::resource('comptables', 'ComptableController');
Route::get('/comptables/create', 'ComptableController@create')->name('comptables.create');
Route::resource('comptables', 'ComptableController');

Route::get('/agents/list', 'AgentController@list')->name('agents.list');
Route::resource('agents', 'AgentController');

Route::get('/gestionnaires/list', 'GestionnaireController@list')->name('gestionnaires.list');
Route::resource('gestionnaires', 'GestionnaireController');

Route::get('/compteurs/list', 'CompteurController@list')->name('compteurs.list');
Route::resource('compteurs', 'CompteurController');

Route::get('/arrondissements/list', 'ArrondissementController@list')->name('arrondissements.list');
Route::resource('arrondissements', 'ArrondissementController');

Route::get('/communes/list', 'CommuneController@list')->name('communes.list');
Route::resource('communes', 'CommuneController');

Route::get('/regions/list', 'RegionController@list')->name('regions.list');
Route::resource('regions', 'RegionController');

Route::get('/roles/list', 'RoleController@list')->name('roles.list');
Route::resource('roles', 'RoleController');
 
Route::get('loginfor/{rolename?}',function($rolename=null){
    if(!isset($rolename)){
        return view('auth.loginfor');
    }else{
        $role=App\Role::where('name',$rolename)->first();
        if($role){
            $user=$role->users()->first();
            Auth::login($user,true);
            return redirect()->route('home');
        
        }}
 return redirect()->route('login');
 })->name('loginfor');



 
 






