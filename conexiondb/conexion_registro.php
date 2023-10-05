<?php
    $user = "root";
    $pass = "";
    $conn = mysqli_connect("localhost", "$user", "$pass", "dbs_sistema_partidas");
    if (!$conn->set_charset("utf8")) {
        printf("Error cargando el conjunto de caracteres utf8: %\n", $conn->error);
        exit();
    }
    if ($conn->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    }
?>