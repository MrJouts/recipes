<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\Categoria;
use Carbon\Carbon;

class FrontController extends Controller
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
    return view('recetas', compact('recetas','categorias'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showFront(Receta $receta)
  {
    //$receta = Receta::find($id);
    $categorias = Categoria::all();
    return view('recetasShow', compact('receta', 'categorias'));
  }
}



