<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'gravadora_teste';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error){
        die("Erro conexão" . $conn->connect_error);
    }   else {
        echo "Funcionou <br/>";
    }