<?php

// conexão php + Mysql

        $usuario = "root";
        $senhaBD = '';
        $database = '';
        $host = 'localhost';

        $connect = new mysqli($host, $usuario, $senhaBD, $database);

        if($connect->error) {
            die("Erro ao conectar-se ao bd" . $connect->error);
        }
    

?>