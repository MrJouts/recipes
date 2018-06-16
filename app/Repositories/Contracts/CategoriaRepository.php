<?php
namespace App\Repositories\Contracts;

interface CategoriaRepository
{
	/**
	 * @return Categoria[]
	 */
	public function all();

	/**
	 * @return Categoria[]
	 */
	public function withAllRelationships();

	/**
	 * @param int $id
	 * @return Categoria
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