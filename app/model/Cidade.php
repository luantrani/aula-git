<?php

class Cidade
{
    private $id;
    private $nome;
    private $estado;

public function __cosntruct(string $nome, string $estado)
{
    $this->setnome($nome);
    $this->setestado($estado);
}

public function __construct($nome, $estado)
{
    $this->setnome($nome);
    $this->setestado($estado);

}
public function getid(): ?int
{
    return $this->id;
}
public function getnome(): string
{
    return $this->nome;
}
public function getestado(): string
{
    return $this->estado;
}
public function setid(int $id)
{ 
    if ($this->id === null) {
    $this->id = (int) $id;
}
 }
public function setnome(string $nome)
{
    $nome = trim($nome);
        
    if (empty($nome)){ 
         throw new Exception("o nome da cidade é obrigatorio.");
        $this->nome=$nome;
    }
}
public function setestado(string $estado)
{
  $estado = strtoupper (trim($estado));
  if (strlen($estado) !== 2) {
    throw new Exception("o estado deve conter exatamente 2 letras.");
  }
  $this->estado = $estado;
}


}