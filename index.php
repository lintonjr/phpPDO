<?php

// phpinfo();
try {
    $conn = new PDO("mysql:host=localhost;dbname=test_oo", "root", "root");

    // $query = "SELECT * FROM `products`";
    $query = "insert into `products` (`name`, `desc`) values ('eBook', 'Learn JS components')";
    $return = $conn->exec($query);
    print_r($return);

} catch (PDOException $e) {
    echo "error! Message: " . $e->getMessage() . " Error Code: " . $e->getCode();
}
