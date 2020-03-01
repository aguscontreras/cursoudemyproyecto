<?php
    $conn = new mysqli('localhost', 'id12774087_gdlweb', 'Egws37851', 'id12774087_gdlwebcamp');
    $conn->query("SET NAMES 'utf8' ");
    if ($conn->connect_error) {
        echo $error->$conn->connect_error;
    }
?>