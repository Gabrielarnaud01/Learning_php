    <?php
    //Arquivo index responsável pela inicialização do sistema

    require_once 'sistema/configuracao.php';
    include_once 'Helpers.php';

    $url = 'http://unset.com';

    var_dump(validarUrl($url));
    echo '<br>';
    var_dump(validarUrlComFiltro($url));
