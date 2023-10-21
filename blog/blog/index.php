    <?php
    //Arquivo index responsável pela inicialização do sistema

    require_once 'sistema/configuracao.php';
    include_once 'Helpers.php';

    var_dump($_SERVER);
    echo "<br>";
    var_dump(localhost());
    echo "<br>";
    echo url('/novas');
