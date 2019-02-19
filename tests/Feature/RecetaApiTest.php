<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecetaApiTest extends TestCase
{

  use RefreshDatabase;

  /** 
   * Se agregan los seeders
   *
   */
  public function setUp()
  {
    parent::setUp();
    $this->artisan('db:seed');
  }

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

    Storage::fake('avatars');
    $file = UploadedFile::fake()->image('imagen.jpg');

    $response = $this->json('POST', '/api/recetas', [
      'img_src' => $file,
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

  /**
   * Se evalua si se puede realizar la actualuzación de una receta
   *
   * @return void
   */
  public function testPuedoActualizarUnaReceta()
  { 

    Storage::fake('avatars');
    $file = UploadedFile::fake()->image('imagen.jpg');

    $response = $this->json('PUT', '/api/recetas/1/editar', [
      'img_src' => $file,
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

  /**
   * Se evalua si se puede eliminar una receta
   *
   * @return void
   */
  public function testPuedoEliminarUnaReceta()
  { 
    
  	$response = $this->json('DELETE', '/api/recetas/1/eliminar');
  	$response->assertStatus(200)->assertJson([
  		'success' => true
  	]);
  }

}