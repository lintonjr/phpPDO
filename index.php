<?php

// phpinfo();
try {
    $conn = new PDO("mysql:host=localhost;dbname=test_oo", "root", "root");

    $query = "SELECT * FROM `products`";
    // $query = "insert into `products` (`name`, `desc`) values ('eBook', 'Learn JS components')";
    $stmt = $conn->query($query);
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo $list[0]['name'];
    print_r($list);

} catch (PDOException $e) {
    echo "error! Message: " . $e->getMessage() . " Error Code: " . $e->getCode();
}
