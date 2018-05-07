<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\Categoria;
use Carbon\Carbon;


class RecetasController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    Carbon::setLocale('es');
    $recetas = Receta::with('categoria')->latest()->get();
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
        'ingredientes.required' => 'Debés ingresar los ingredientes',
        'preparacion.required' => 'Debés ingresar la preparación'
    ]);

    Receta::create($inputData);

    return redirect()->route('recetas.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    return view('cpanel.recetas.show');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
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
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

  /**
   * Display a listing of the resource frontend
   *
   * @return \Illuminate\Http\Response
   */
  public function index_front()
  {
    $categorias = Categoria::all();
    return view('recetas', compact('categorias'));
  }
}
