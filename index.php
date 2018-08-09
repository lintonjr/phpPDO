<?php

// phpinfo();
try {
    $conn = new PDO("mysql:host=localhost;dbname=test_oo", "root", "root");
} catch (PDOException $e) {
    echo "error! Message: " . $e->getMessage() . " Error Code: " . $e->getCode();
}
