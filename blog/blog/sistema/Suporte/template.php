<?php

namespace sistema\Suporte;

class Template
{
    private \Twig\Environment $twig;

    public function __construct(string $diretorio)
    {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
        $this->twig = new \Twig\Environment($loader);
    }

    //dados é um array basicamente aonde eu vou passar as informaçoes
    //view é o template html da pagina.
    public function renderizar(string $view, array $dados)
    {
        return $this->twig->render($view, $dados);
    }
}
