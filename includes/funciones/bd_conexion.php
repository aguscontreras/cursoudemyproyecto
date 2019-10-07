<?php
    $conn = new mysqli('192.168.1.12', 'gdlweb', 'Egws37851', 'gdlwebcamp');
    if ($conn->connect_error) {
        echo $error->$conn->connect_error;
    }
?>