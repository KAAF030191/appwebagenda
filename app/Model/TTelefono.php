<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TTelefono extends Model
{
	protected $table='ttelefono';
	protected $primaryKey='idTelefono';
	public $incrementing=true;
	public $timestamps=true;

	public function tPersona()
	{
		return $this->belongsTo('App\Model\TPersona', 'idPersona');
	}
}
?>