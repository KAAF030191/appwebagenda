<?php
Route::get('persona/vertodo', 'PersonaController@actionVerTodo');
Route::match(['get', 'post'], 'persona/insertar', 'PersonaController@actionInsertar');
Route::get('persona/eliminar/{idPersona}', 'PersonaController@actionEliminar');
Route::get('persona/editar/{idPersona}', 'PersonaController@actionEditar');
Route::post('persona/editar', 'PersonaController@actionEditar');

Route::get('telefono/insertar/{idPersona}', 'TelefonoController@actionInsertar');
?>