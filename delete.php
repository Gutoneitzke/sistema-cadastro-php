<?php
    include_once("config.php");

    $id = $_GET['id'];

    $result = mysqli_query($conexao, "DELETE FROM usuarios WHERE id=$id");

    header("Location:index.php");
?>