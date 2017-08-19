<?php


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin_template');
});*/


Route::get('/persona/vertodo/','PersonaController@actionVerTodo');
Route::match(['get', 'post'],'/persona/insertar/','PersonaController@actionInsertar');
?>
