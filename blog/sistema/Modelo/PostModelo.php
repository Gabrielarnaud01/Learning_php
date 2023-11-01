<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

class PostModelo
{
    public function ler(int $id = null): array
    {
        $where = ($id ? "WHERE id = {$id}" : '');

        $query = "SELECT * FROM posts {$where} ";
        //$query = "SELECT titulo,texto FROM posts "; voce pode escolher qual dado vai pegar.
        //$query = "SELECT * FROM posts WHERE id=3 AND status = 1 OR status = 0";
        //$query = "SELECT * FROM posts LIMIT 2 OFFSET 2";
        $stmt =  Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
}
