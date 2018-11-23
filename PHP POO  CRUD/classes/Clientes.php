<?php

require_once 'crud.php';

class Clientes extends Crud{

	protected $table = 'clientes_pdo';
	private $nome;
	private $pessoa;
	private $cpf;
	private $cnpj;
	private $endereco;

	// GETS AND SETTERS CLASSES

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPessoa()
    {
        return $this->pessoa;
    }


    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

  
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    // FIM GETS AND SETTERS CLASSES 

    //-----------------------------------//

    // FUNÇÃO INSERIR PARA O BANCO DE DADOS

    public function insert(){
    	$sql = "INSERT INTO $this->table (nome, pessoa, cpf, cnpj, endereco) VALUES (:nome, :pessoa, :cpf, :cnpj, :endereco)";
    	$stmt = DB::prepare($sql);
    	$stmt->bindParam(':nome', $this->nome);
    	$stmt->bindParam(':pessoa', $this->pessoa);
    	$stmt->bindParam(':cpf', $this->cpf);
    	$stmt->bindParam(':cnpj', $this->cnpj);
    	$stmt->bindParam(':endereco', $this->endereco);
    	return $stmt->execute();

    }

    // FIM FUNÇÃO INSERIR PARA O BANCO DE DADOS

    //-----------------------------------//

    // FUNÇAO ATUALIZAR OS DADOS
    public function update($id){

    	$sql = "UPDATE $this->table SET nome = :nome, pessoa = :pessoa, cpf = :cpf, cnpj = :cnpj, endereco = :endereco WHERE id = :id";
    	$stmt = DB::prepare($sql);
    	$stmt->bindParam(':nome', $this->nome);
    	$stmt->bindParam(':pessoa', $this->pessoa);
    	$stmt->bindParam(':cpf', $this->cpf);
    	$stmt->bindParam(':cnpj', $this->cnpj);
    	$stmt->bindParam(':endereco', $this->endereco);
    	$stmt->bindParam(':id', $id);
    	return $stmt->execute();
    }

    // FIM FUNÇAO ATUALIZAR OS DADOS

    //-----------------------------------//
    
    
   public function ordenar($id){
    $sql = "SELECT * FROM $this->table ORDER BY id = :id ASC";
    $stmt = DB::prepare($sql);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();

   }
}

