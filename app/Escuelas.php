<?php

namespace DirectorioOnline;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Escuelas extends Model
{
	protected $table = "directorio";

	protected $fillable = ['nombre_unidad_administrativa','path','cct','telefono','celular','email','tipo_id'];

	public function setPathAttribute($path)
	{
		$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
		$name = Carbon::now()->second.$path->getClientOriginalName();
		\Storage::disk('local')->put($name, \File::get($path));
	}
    //
}
