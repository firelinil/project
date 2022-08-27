<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "projectbd";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $user_id = $_POST['id_user'];
    $user_name = $_POST['user'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];
       
    $update_columns = array();
    if(trim($user_name) !== "")   { $update_columns[] = "user = :user"; }
    if(trim($phone) !== "")  { $update_columns[] = "phone = :phone"; }
    if(trim($comments) !== "")   { $update_columns[] = "comments = :comments"; }
   
    
    if(sizeof($update_columns) > 0){

        $sql = "UPDATE mytable SET " . implode(", ", $update_columns) . " WHERE id_user=:id_user";
        
        // echo $sql;
        
        $statement = $db->prepare($sql);
 
        $statement->bindParam(":id_user", $user_id);
        if(trim($user_name) !== ""){
            $statement->bindParam(":user", $user_name);
        }
        if(trim($phone) !== ""){
            $statement->bindParam(":phone", $phone);
        }
        if(trim($comments) !== ""){
            $statement->bindParam(":comments", $comments);
        }
                
        $statement->execute();
    
        echo "Запись c ID: " . $user_id . " успешно обновлена!";
    }
}
 
catch(PDOException $e) {
    echo "Ошибка при обновлении: " . $e->getMessage();
}
 
$db = null;
?>