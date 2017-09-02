<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TPersona extends Model
{
	protected $table='tpersona';
	protected $primaryKey='idPersona';
	public $incrementing=true;
	public $timestamps=true;

	public function tTelefono()
	{
		return $this->hasMany('App\Model\TTelefono', 'idPersona');
	}
}
?>