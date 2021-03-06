<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('recetas', function (Blueprint $table) {
      $table->increments('id_receta');
      $table->string('img_src')->nullable();
      $table->string('titulo', 100);
      $table->text('preparacion');
      $table->text('ingredientes');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('recetas');
  }
}
