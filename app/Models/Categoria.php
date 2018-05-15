<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "categorias";

	/** @var string El nombre de la PK */
	protected $primaryKey = "id_categoria";

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = ['nombre'];

	/** @var array Las reglas de la validación. */
	public static $rules = [
		'nombre' => 'required|min:2'
	];

	public function recetas()
	{
		return $this->hasMany(Receta::class, 'id_categoria', 'id_categoria');
	}
}
