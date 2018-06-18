<?php
namespace App\Repositories;

use App\Repositories\Contracts\RecetaRepository as RepositoryContract;
use App\Models\Receta;


/*
En el repo, vamos a empezar por pedir que en su 
construcción nos pasen una instancia de Receta.
*/
class RecetaRepository implements RepositoryContract
{
	/** @var Receta */
	protected $receta;

	/**
	 * @param Receta $receta
	 */
	public function __construct(Receta $receta)
	{
		$this->receta = $receta;
	}

	/**
	 * @return Receta[]
	 */
	public function all()
	{
		return Receta::all();
	}

	/**
	 * @return Receta[]
	 */
	public function withAllRelationships()
	{
		//return Receta::with('director')->get();
		return Receta::with('categoria', 'usuario')->latest()->get();
	}

	/**
	 * @param int $id
	 * @return Receta
	 */
	public function find($id)
	{
		return Receta::find($id);
	}

	/**
	 * @param array $data
	 */
	public function create($data)
	{
		// TODO: Implementar el código...
		return Receta::create($data);
	}

	/**
	 * @param int $id
	 * @param array $data
	 */
	public function update($id, $data)
	{
		// TODO: Implementar el código...
		$receta = Receta::find($id);
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