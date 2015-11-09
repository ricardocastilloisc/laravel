<?php

namespace DirectorioOnline;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Escuela extends Model
{
	protected $table = "directorio";

	protected $fillable = ['nombre_unidad_administrativa','path','cct','telefono','celular','email','tipo_id'];

	public function setPathAttribute($path)
	{
		$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
		$name = Carbon::now()->second.$path->getClientOriginalName();
		\Storage::disk('local')->put($name, \File::get($path));
	}


	//aqui es donde se hace lo mas importante que es la consulta el 
	//join es para hace primero especifica 
	//segundo de donde se va comparar
	//el tercero es que operacion quieres
	//el cuarto es la comparacion
	//en el select es lo que uno quiere y que dato quieres que obtenga 
	//y el segundo es nada mas y menos que agrege el parametro
	////el ultimo que metodo quieres
	public static function Escuelas()
	{
		return DB::table('directorio')
			->join('tipo','tipo.id','=','directorio.tipo_id')
			->select('directorio.*','tipo.tipo')
			->orderBy('nombre_unidad_administrativa','ASC')
			->paginate(4);

	}
	public function scopeCCT($query, $cct)
    {
    	if(trim($cct) != "")
    	{
    		$query->join('tipo','tipo.id','=','directorio.tipo_id')->where('cct',"LIKE","%$cct%");
    	}
    	
    }

    public function scopeTIPO($query, $tipo)
    {
    	if(trim($tipo) != "")
    	{
    		$query->join('tipo','tipo.id','=','directorio.tipo_id')->where('tipo_id',$tipo);
    	}
    	
    }
    //
}