<?php

declare(strict_types=1);

class Cidade
{
    private ?int $id = null;
    private string $nome;
    private string $estado;

    public function __construct(string $nome, string $estado)
    {
        $this->setNome($nome);
        $this->setEstado($estado);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setId(int $id): void
    {
        if ($this->id !== null) {
            throw new Exception('O id da cidade já foi definido e não pode ser alterado.');
        }
        $this->id = $id;
    }

    public function setNome(string $nome): void
    {
        $nome = trim($nome);
        if ($nome === '') {
            throw new Exception('O nome da cidade é obrigatório.');
        }
        $this->nome = $nome;
    }

    public function setEstado(string $estado): void
    {
        $estado = strtoupper(trim($estado));
        if (strlen($estado) !== 2 || !ctype_alpha($estado)) {
            throw new Exception('O estado deve ser a sigla com exatamente 2 letras (ex.: SP, RJ).');
        }
        $this->estado = $estado;
    }
}
