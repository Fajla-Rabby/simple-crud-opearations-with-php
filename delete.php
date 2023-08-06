<?php
    include 'conn.php';

    $id = $_GET['id'];

    $query = "DELETE FROM `crudtable` WHERE id = $id "  ;

    mysqli_query($databaseConnection, $query);

    header('location: display.php');
?>
