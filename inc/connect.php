<?php
    try{
        $conn = new PDO('mysql:host=127.0.0.1;dbname=assessment',"root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch(PDOException $e) {
        echo "error: " , $e->getMessage();
    }
?>