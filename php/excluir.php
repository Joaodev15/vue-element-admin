<?php 
    require('connect.php');
    
    $codigo = $_GET['codigo'];
    mysqli_query($conn, "DELETE FROM `agendamentos` WHERE `id` = '$codigo'");

    header('location:../php/consulta.php')
?>

