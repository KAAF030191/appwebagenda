<?php
Route::get('persona/vertodo', 'PersonaController@actionVerTodo');
Route::match(['get', 'post'], 'persona/insertar', 'PersonaController@actionInsertar');
?>