<?php
namespace App\Repositories;

use App\Repositories\Contracts\CategoriaRepository as RepositoryContract;
use App\Models\Categoria;


/*
En el repo, vamos a empezar por pedir que en su 
construcción nos pasen una instancia de Categoria.
*/
class CategoriaRepository implements RepositoryContract
{
	/** @var Categoria */
	protected $categoria;

	/**
	 * @param Categoria $categoria
	 */
	public function __construct(Categoria $categoria)
	{
		$this->categoria = $categoria;
	}

	/**
	 * @return Categoria[]
	 */
	public function all()
	{
		return Categoria::all();
	}

	/**
	 * @return Categoria[]
	 */
	public function withAllRelationships()
	{
		//return Categoria::with('director')->get();
		return Categoria::with('categoria')->latest()->get();
	}

	/**
	 * @param int $id
	 * @return Categoria
	 */
	public function find($id)
	{
		return Categoria::find($id);
	}

	/**
	 * @param array $data
	 */
	public function create($data)
	{
		// TODO: Implementar el código...
		return Categoria::create($data);
	}

	/**
	 * @param int $id
	 * @param array $data
	 */
	public function update($id, $data)
	{
		// TODO: Implementar el código...
		$receta = Categoria::find($id);
		$receta->update($data);
		return $receta;
	}

	/**
	 * @param int $id
	 */
	public function delete($id)
	{
		// TODO: Implementar el código...
	}
}