<?php
    $connection = new mysqli("127.0.0.1", "shironeko", "4Y6eDA484LIxorHI", "crud");
    if(!$connection) {
        echo "Connection error";
        exit();
    }