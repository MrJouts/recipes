<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\Categoria;
use App\Models\Comentario;
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
    $recetas = Receta::with('categoria')->latest()->get();
    return view('recetas', compact('recetas'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showFrontRecetas($receta)
  {
    $receta = Receta::find($receta);

    return view('recetasShow', compact('receta'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showFrontHome(Receta $receta)
  {
    $ultimasRecetas = Receta::with('categoria')->latest()->take(3)->get();
    $recetasPopulares = Receta::with('categoria')->first()->take(4)->get();
    $recetaDelDia = Receta::with('categoria')->find(9);
    $categorias = Categoria::all();

    return view('home', compact('ultimasRecetas', 'recetasPopulares', 'recetaDelDia', 'categorias'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function footer(Receta $receta)
  {
    $ultimasRecetas = Receta::with('categoria')->latest()->take(3)->get();
    $recetasPopulares = Receta::with('categoria')->first()->take(4)->get();
    $recetaDelDia = Receta::with('categoria')->find(9);
    $categorias = Categoria::all();

    return view('home', compact('ultimasRecetas', 'recetasPopulares', 'recetaDelDia', 'categorias'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function comments(Receta $receta)
  {

  }
}