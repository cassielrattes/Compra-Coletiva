<?php

class Produto
{
    private $nome;
    private $preco;
    private $foto;
    private $qtdecoletiva;
    private $precocoletiva;
    private $id;

    function setId($id_produto)
    {
        $this->id = $id_produto;
    }

    function getId()
    {
        return $this->id;
    }

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

    function setFoto($novo_foto)
    {
        $this->foto = $novo_foto;
    }

    function getFoto()
    {
        return $this->foto;
    }
}
