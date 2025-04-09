<?php

class Tenis {
    private $nome_tenis;
    private $preco;

    public function __construct($nome_tenis, $preco) {
        $this->nome_t = $nome_tenis;
        $this->preco = $preco;
    }

    public function getNome_tenis() {
        return $this->nome_t;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setNome_tenis($nome_tenis) {
        $this->nome_t = $nome_tenis;
    }

    public function setPreco($preco) {
        $this->senha = $preco;
    }
}
?>