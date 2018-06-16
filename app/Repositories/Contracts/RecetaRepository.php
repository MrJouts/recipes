<?php
namespace App\Repositories\Contracts;

interface RecetaRepository
{
	/**
	 * @return Receta[]
	 */
	public function all();

	/**
	 * @return Receta[]
	 */
	public function withAllRelationships();

	/**
	 * @param int $id
	 * @return Receta
	 */
	public function find($id);

	/**
	 * @param array $data
	 */
	public function create($data);

	/**
	 * @param int $id
	 * @param array $data
	 */
	public function update($id, $data);

	/**
	 * @param int $id
	 */
	public function delete($id);
}