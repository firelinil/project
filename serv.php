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

    
    /*try {
        $pdo = new PDO('mysql:dbname=projectbd; host=localhost', 'root', '');
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    
    include 'config.php';
$name = $_POST['name'];
$phone = $_POST['phone'];


if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `mytable`(`name`, `phone`) VALUES(?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$name, $phone]);
	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';	
}else{
	echo 'error';
}*/
?>