<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "comentarios";

	/** @var string El nombre de la PK */
	protected $primaryKey = "id_comentario";

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = ['comentario', 'id_receta', 'id_usuario'];

  /** @var array Las reglas de la validación. */
  public static $rules = [
    'comentario' => 'required|min:3'
  ];

	public function receta()
	{
		return $this->belongsTo(Receta::class, 'id_receta', 'id_receta');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
	}
}
