<?php

class Produto
{
    private $nome;
    private $preco;

    function setNome($nome_produto)
    {
        $this->nome = $nome_produto;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setPreco($novo_preco)
    {
        $this->preco = $novo_preco;
    }

    function getPreco()
    {
        return $this->preco;
    }
}
