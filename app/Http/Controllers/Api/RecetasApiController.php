<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Receta;
use App\Models\Categoria;
use App\Models\Comentario;
use Carbon\Carbon;
use App\Repositories\Contracts\RecetaRepository;
use Illuminate\Support\Facades\Input;
use Storage;
use Session;

class RecetasApiController extends Controller
{

  /** @var RecetaRepository */
  protected $repoReceta;

  /**
   * Trae el repositorio de recetas
   *
   * @param RecetaRepository $repoReceta
   */
  public function __construct(RecetaRepository $repoReceta)
  {
    $this->repoReceta = $repoReceta;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $recetas = $this->repoReceta->withAllRelationships();
    return response()->json($recetas);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $inputData = $request->all();

    $request->validate(Receta::$rules, [
      'titulo.required' => 'El título de la receta no puede estar vacío.',
      'titulo.min' => 'El título de la receta debe tener al menos :min caracteres.',
      'img_src.required' => 'Debés ingresar una imagen de tu receta',
      'ingredientes.required' => 'Debés ingresar los ingredientes',
      'preparacion.required' => 'Debés ingresar la preparación'
    ]);

    if($request->hasFile('img_src')) {
      $filepath = $request->file('img_src')->store('img');
      $inputData['img_src'] = $filepath;
    }
    else {
      $inputData['img_src'] = 'test.jpg';
    }

    if (!isset($inputData['id_categoria'])) {
      $inputData['id_categoria'] = 1;
    }

    if (!isset($inputData['id_usuario'])) {
      $inputData['id_usuario'] = 1;
    }

    $nuevaReceta = Receta::create($inputData);

    return response()->json([
      'success' => true,
      'message' => 'receta creada',
      'datos' => $nuevaReceta
    ]);    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($receta)
  {
    $receta = $this->repoReceta->find($receta);
    $receta->usuario;
    $receta->comentarios;

    return response()->json($receta);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {

    $request->validate(Receta::$rules_edit, [
      'titulo.required' => 'El título de la receta no puede estar vacío.',
      'titulo.min' => 'El título de la receta debe tener al menos :min caracteres.',
      'ingredientes.required' => 'Debés ingresar los ingredientes',
      'preparacion.required' => 'Debés ingresar la preparación'
    ]);

    $inputData = $request->input();

    $receta = Receta::find($id);

    if($request->hasFile('img_src')) {
      $imagenActual = $receta->img_src;
      $filepath = $request->file('img_src')->store('img');
      $inputData['img_src'] = $filepath;
    }

    $receta->update($inputData);

    $recetaUpdate = Receta::find($id);

    // Borramos la imagen luego del update.
    if(isset($imagenActual) && !empty($imagenActual)) {
      Storage::delete($imagenActual);
    }

    return response()->json([
      'success' => true,
      'message' => 'receta actualizada',
      'datos' => $recetaUpdate
    ]);

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {

    $receta = Receta::find($id);

    $imagen = $receta->img_src;
    if ($imagen) {
      Storage::delete($imagen);
    }

    $receta->delete();

    return response()->json([
      'success' => true,
      'message' => 'receta eliminada',
      'datos' => $receta
    ]);
  }
}
