    <?php
    //Arquivo index responsável pela inicialização do sistema

    require_once 'sistema/configuracao.php';
    include_once 'Helpers.php';


    echo dataAtual();
    /*
    $meses = array();
    echo '<hr>';
    $meses2 = ['Janeiro', 'Fevereiro', 'j' => 'Março'];
    echo $meses2['j'];
    var_dump($meses2);
    echo '<hr>';
    var_dump($meses);

    echo '<hr>';
    var_dump($_SERVER);
    echo '<hr>';
    echo $_SERVER['HTTP_HOST'];

    echo '<hr>';
    foreach ($meses2 as $chave) {
        echo $chave . '<br>';
    }

    foreach ($meses2 as $chave => $valor) {
        echo $chave . '<br>';
    }
    */
