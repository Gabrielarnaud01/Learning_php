    <?php
    //Arquivo index responsável pela inicialização do sistema

    require_once 'sistema/configuracao.php';
    include_once 'Helpers.php';
    include './sistema/Nucleo/Mensagem.php';

    $msg = new Mensagem();
    echo '<hr>';
    echo $msg->texto = 'texto de teste';
    echo '<hr>';
    var_dump($msg);
