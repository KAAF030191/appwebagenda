<?php

//Persona
Route::get('persona/vertodo', 'PersonaController@actionVerTodo');
//Route::get('persona/insertar', 'PersonaController@actionInsertar');

Route::match(['get', 'post'], 'persona/insertar', 'PersonaController@actionInsertar');

Route::get('persona/eliminar/{idPersona}', 'PersonaController@actionEliminar');

Route::get('persona/editar/{idPersona}', 'PersonaController@actionEditar');

Route::post('persona/editar', 'PersonaController@actionEditar');

//Telefono

Route::get('telefono/vertodo', 'TelefonoController@actionVerTodo');

Route::get('telefono/insertar/{idPersona}', 'TelefonoController@actionInsertar');

Route::post('telefono/insertar', 'TelefonoController@actionInsertar');

?>
