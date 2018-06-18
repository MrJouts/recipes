<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\Categoria;
use App\Models\Comentario;
use Carbon\Carbon;
use App\Repositories\Contracts\RecetaRepository;
use Illuminate\Support\Facades\Input;
use Storage;

class RecetasController extends Controller
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
    //$recetas = Receta::with('categoria')->latest()->get();
    $recetas = $this->repoReceta->withAllRelationships();

    return view('cpanel.recetas.index', compact('recetas'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categorias = Categoria::all();
    //$categorias = $this->repoCategoria->all();

    return view('cpanel.recetas.create', compact('categorias'));
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

    $inputData['id_usuario'] = auth()->id();

    Receta::create($inputData);

    return redirect()->route('recetas.index')
      ->with(
        [
          'status' => 'La receta <b>' . $inputData['titulo'] . '</b> fue creada exitosamente.',
          'class' => 'success'
        ]
      );

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($receta)
  {
    //$receta = Receta::find($id);
    $receta = $this->repoReceta->find($receta);

    return view('cpanel.recetas.show', compact('receta'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $receta = Receta::find($id);
    $categorias = Categoria::all();

    return view(
      'cpanel.recetas.edit',
      compact('receta', 'categorias')
    );
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

    // Borramos la imagen luego del update.
    if(isset($imagenActual) && !empty($imagenActual)) {
      Storage::delete($imagenActual);
    }

    return redirect()->route('recetas.index')
      ->with(
        [
          'status' => 'La receta <b>' . $receta->titulo . '</b> fue editada exitosamente.',
          'class' => 'warning'
        ]
      );

  }

  /**
   * Confirm removing the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function confirmDestroy($id)
  {
    $receta = Receta::find($id);

    return view('cpanel.recetas.confirm-destroy', compact('receta'));
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

    return redirect()->route('recetas.index')
      ->with(
        [
          'status' => 'La receta <b>' . $receta->titulo . '</b> fue eliminada exitosamente.',
          'class' => 'danger'
        ]
      );

  }

}
