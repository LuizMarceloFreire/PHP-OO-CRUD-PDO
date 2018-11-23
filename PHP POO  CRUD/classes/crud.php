<?php


require_once 'DB.php';

abstract class Crud extends DB{

	protected $table;

	abstract public function insert();
	abstract public function update($id);
	
	// FUNÇÃO MOSTRAR APENAS ID SELECIONADO
	public function find($id){
		$sql = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}
	//FIM FUNÇÃO MOSTRAR APENAS ID SELECIONADO

	//-----------------------------------//

	// FUNÇÃO PARA MOSTRAR TODOS OS DADOS

	public function findAll(){
		$sql = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	// FIM FUNÇÃO PARA MOSTRAR TODOS OS DADOS

	//-----------------------------------//

	//FUNÇÃO DELETAR CLIENTE

	public function delete($id){
		$sql = "DELETE FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
	}

	//FIM FUNÇÃO DELETAR CLIENTE
}