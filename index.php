<?php

// phpinfo();
try {
    $conn = new PDO("mysql:host=localhost;dbname=test_oo", "root", "root");

    $query = "SELECT * FROM `products` where id=:id";
    // $query = "insert into `products` (`name`, `desc`) values ('eBook', 'Learn JS components')";
    // $stmt = $conn->query($query);
    // $list = $stmt->fetch(PDO::FETCH_ASSOC);
    // // echo $list[0]['name'];
    // print_r($list);

    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();

    print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

} catch (PDOException $e) {
    echo "error! Message: " . $e->getMessage() . " Error Code: " . $e->getCode();
}
