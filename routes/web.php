<?php
Route::get('persona/vertodo','PersonaController@actionvertodo');

//Route::get('persona/insertar', 'PersonaController@actionInsertar');
//Route::get('persona/insertar', 'PersonaController@actionInsertar');

Route::match(['get','post'],'persona/insertar', 'PersonaController@actionInsertar');
?>
