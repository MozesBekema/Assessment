<?php
    try{
        $conn = new PDO('mysql:host=localhost;dbname=assessment_app',"assessment_glu", "SLBYsIRk7");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "error: " , $e->getMessage();
    }
?>
