<?php
    $nombre_temporal-$_FILES['capas_nuevas']['tmp_name'];
    $nombre=$_FILES['capas_nuevas']['name'];
    move_uploaded_file($nombre_temporal,'capas_nuevas/'.$nombre);
?>