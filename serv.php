<?php
    header('Content-Type: application/json; charset=utf-8');
    try {
        $pdo = new PDO('mysql:dbname=projectbd; host=localhost', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
    if(!empty($_POST['name']) && !empty($_POST['phone'])){
        $sql = ("INSERT INTO `mytable`(`user`, `phone`) VALUES(?,?)");
        $query = $pdo->prepare($sql);
        $query->execute([$_POST['name'], $_POST['phone']]);
        $data = ['name' => $_POST['name'], 'phone' => $_POST['phone'],'res'=>'all is OK'];
        echo json_encode($data);
    } else {
        echo json_encode(['res'=>'ooops...']);
    }
?>
