<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /** @var string El nombre de la tabla */
    protected $table = "users";

  public function recetas()
  {
    return $this->hasMany(Receta::class, 'id_usuario', 'id' );
  }

  public function comentarios()
  {
    return $this->hasMany(Comentario::class, 'id_usuario', 'id');
  }
}
