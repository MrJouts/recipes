<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
  /** @var string El nombre de la tabla */
  protected $table = "recetas";

  /** @var string El nombre de la PK */
  protected $primaryKey = "id_receta";

  /** @var array Los campos que se pueden cargar de manera masiva. */
  protected $fillable = ['img_src', 'titulo', 'preparacion', 'ingredientes', 'id_categoria'];
  //protected $guarded = [];

  /** @var array Las reglas de la validación. */
  public static $rules = [
    'titulo' => 'required|min:3',
    'img_src' => 'sometimes|image',
    'ingredientes' => 'required',
    'preparacion' => 'required',
  ];

  /** @var array Las reglas de la validación. */
  public static $rules_edit = [
    'titulo' => 'required|min:3',
    'img_src' => 'sometimes|image',
    'ingredientes' => 'required',
    'preparacion' => 'required',
  ];

  public function categoria()
  {
    return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
  } 

  public function comentarios()
  {
    return $this->hasMany(Comentario::class, 'id_receta', 'id_receta');
  } 

  public function agregarComentario($comentario) {
    $this->comentarios()->create(compact('comentario'));
  }
}