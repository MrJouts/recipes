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
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
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
      'nombre.required' => 'El nombre de la categoría no puede estar vacío.'
    ]);

    Categoria::create($inputData);

    return redirect()->route('categorias.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
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
      'nombre.required' => 'El nombre de la categoría no puede estar vacío.'
    ]);

    $inputData = $request->input();

    $categoria = Categoria::find($id);

    $categoria->update($inputData);

    return redirect()->route('categorias.index')
    ->with('status', 'La categoria <b>' . $categoria->nombre . '</b> fue editada exitosamente.');
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
}
