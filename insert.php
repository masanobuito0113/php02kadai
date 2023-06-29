<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$place = $_POST['place'];
// $images = $_FILES['images']['name'];
$food = $_POST['food'];
$comment = $_POST['comment'];

// $imagePath = "path/to/save/";
// // move_uploaded_file($images["tmp_name"], $imagePath);
// move_uploaded_file($_FILES['images']['tmp_name'], './upload/' . $images);

try{
    $pdo = new PDO('mysql:dbname=gs_kadai_php02;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("INSERT INTO php02_table(id, place, food, comment, date ) VALUES (NULL, :place, :food, :comment, sysdate())");
$stmt->bindValue(':place', $place, PDO::PARAM_STR);
$stmt->bindValue(':food', $food, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);

$status = $stmt->execute();

if($status === false){
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
}else{
    header('Location: index.php');

}

?>