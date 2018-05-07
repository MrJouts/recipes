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
  //protected $fillable = ['nombre', 'genero', 'precio', 'anio_estreno'];
  protected $guarded = [];

  /** @var array Las reglas de la validación. */
  public static $rules = [
    'titulo' => 'required|min:3',
    'ingredientes' => 'required',
    'preparacion' => 'required',
  ];

  public function categoria()
  {
    return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
  } 
}