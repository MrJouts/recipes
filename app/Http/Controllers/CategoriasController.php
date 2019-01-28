<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categorias = Categoria::latest()->get();
    return view('cpanel.categorias.index', compact('categorias'));
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
    $request->validate(Categoria::$rules, [
      'nombre.required' => 'El nombre de la categoría no puede estar vacío.',
      'nombre.min' => 'El nombre de la categoría debe tener al menos :min caracteres.'
    ]);
    Categoria::create($inputData);

    return redirect()->route('categorias.index');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $categoria = Categoria::find($id);

    return view( 
      'cpanel.categorias.edit', 
      compact('categoria')
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
    $request->validate(Categoria::$rules, [
      'nombre.required' => 'El nombre de la categoría no puede estar vacío.',
      'nombre.min' => 'El nombre de la categoría debe tener al menos :min caracteres.'
    ]);

    $inputData = $request->input();
    $categoria = Categoria::find($id);
    $categoria->update($inputData);

    return redirect()->route('categorias.index')
    ->with('status', 'La categoria <b>' . $categoria->nombre . '</b> fue editada exitosamente.');
  }

  /**
   * Confirm removing the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function confirmDestroy($id)
  {
    $categoria = Categoria::find($id);

    return view('cpanel.categorias.confirm-destroy', compact('categoria'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $categoria = Categoria::find($id);
    $categoria->delete();
    
    return redirect()->route('categorias.index')
    ->with('status', 'La categoria <b>' . $categoria->nombre . '</b> fue eliminada exitosamente.');
  }
}
