<?php
require_once 'database.php';
$connection = Database::getConnection();
print_r($connection);
?>