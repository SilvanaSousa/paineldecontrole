<?php

function conectar(){
    $dbname = 'sistemabootstrap';
    $user = 'root';
    $password = '';
    $host = 'localhost';
    return new PDO ('mysql:dbname='.$dbname.';host='.$host, $user, $password);
}

?>