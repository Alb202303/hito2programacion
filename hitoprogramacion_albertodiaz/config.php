<?php
 
try {
    $connection = new PDO('mysql:host=localhost;dbname=basehito2', 'root');
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>