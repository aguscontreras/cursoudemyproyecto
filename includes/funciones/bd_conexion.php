<?php
    // $conn = new mysqli('sql10.freemysqlhosting.net:3306', 'sql10325113', 'ZppDQdpz2b', 'sql10325113');
    $conn = new mysqli('aguscontdev.ddns.net', 'gdlweb', 'Egws37851', 'gdlwebcamp');
    $conn->query("SET NAMES 'utf8' ");
    if ($conn->connect_error) {
        echo $error->$conn->connect_error;
    }
?>