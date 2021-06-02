<?php

    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'projeto-login';
    $conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

    // if($conexao->connect_errno){
    //     echo "Erro";
    // } else{
    //     echo "Conexão efetuada com sucesso";
    // }


?>