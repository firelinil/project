<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SELECT-UPDATE</title>
    <style>
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
    </style>
</head>
<body>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "projectbd";
 
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $sql = "SELECT id_user, user, phone, comments FROM mytable";
    // Подготовка запроса
    $statement = $db->prepare($sql);
    // Выполняем запрос
    $statement->execute();
    // Получаем массив строк 
    $result_array = $statement->fetchAll();
 
    echo "<table><tr><th>ID</th><th>user</th><th>phone</th><th>comments</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["id_user"]  . "</td>";
        echo "<td>" . $result_row["user"]    . "</td>";
        echo "<td>" . $result_row["phone"]   . "</td>";
        echo "<td>" . $result_row["comments"]   . "</td>";
        echo "</tr>";
    }
    echo "</table>"; 
}
 
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}

$db = null;
?> 
    <h2>Обновление данных</h2>
    <form action="update.php" method="POST">
        <div>
            <label for="id_user">ID заказчика в БД:</label>
            <input type="number" id="id" name="id_user" required>
        </div>
        <br>
        <div>
            <label for="user">Имя заказчика:</label>
            <input type="text" id="user" name="user">
        </div>
        <br>
        <div>
            <label for="phone">Телефон для связи:</label>
            <input type="number" id="phone" name="phone">
        </div>
        <br>
        <div>
            <label for="comments">Комментарии:</label>
            <input type="text" id="comments" name="comments">
        </div>
        <br>
        <input type="submit" value="Обновить запись">
    </form>
</body>
</html>