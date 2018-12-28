<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecetaApiTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function testExample()
  {
  	$this->assertTrue(true);
  } 

  /**
   * Se evalua si se pueden leer todas las recetas.
   *
   * @return void
   */
  public function testTraerTodasLasRecetas()
  {
  	$response = $this->json('GET', '/api/recetas');
  	$response->assertStatus(200)->assertJsonCount(10);
  }

  /**
   * Se evalua si se puede leer la receta "Crema helada de menta con chocolate".
   *
   * @return void
   */
  public function testTraerLaRecetaCremaHeladaDeMentaConChocolate()
  {
  	$response = $this->json('GET', '/api/recetas');
  	$response->assertStatus(200)->assertJsonFragment([
  		'titulo' => 'Crema helada de menta con chocolate'
  	]);
  }

  /**
   * Se evalua si se puede leer la receta con el ID 1.
   *
   * @return void
   */
  public function testTraerLaRecetaConId1()
  {
  	$response = $this->json('GET', '/api/recetas');
  	$response->assertStatus(200)->assertJsonFragment([
  		'id_receta' => 1
  	]);
  }

  /**
   * Se evalua si se puede realizar la carga de una receta
   *
   * @return void
   */
  public function testPuedoCrearUnaNuevaReceta()
  {
  	$response = $this->json('POST', '/api/recetas'. [
  		'img_src' => null,
  		'titulo' => 'test',
  		'preparacion' => 'preparacion test',
  		'ingredientes' => 'ingredientes test',
  		'id_categoria' => 1,
  		'id_usuario' => 1
  	]);


  	$response->assertStatus(200)->assertJson([
  		'success' => true
  	]);
  }

}
