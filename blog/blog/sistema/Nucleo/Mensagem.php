<?php

class Mensagem
{
    //existe o public também
    private $css;
    private $texto;

    public function __toString()
    {
        return $this->renderizar();
    }


    public function sucesso(string $mensagem): Mensagem
    {
        $this->css = "alert alert-success";
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function erro(string $mensagem): Mensagem
    {
        $this->css = "alert alert-danger";
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }
    public function renderizar(): string
    {
        return "<div class=''{$this->css}'>{$this->texto}</div>";
    }

    private function filtrar(string $mensagem): string
    {
        return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
