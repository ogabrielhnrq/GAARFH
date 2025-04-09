<?php

class Cliente {
    private $nome;
    private $email;
    private $endereco;
    private $cidade;
    private $senha;

    public function __construct($nome, $email, $endereco, $cidade, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
}
?>