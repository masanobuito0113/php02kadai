<?php

try{
    $pdo = new PDO('mysql:dbname=gs_kadai_php02;charset=utf8;host=localhost','root','');    
}catch (PDOException $e) {
    exit('DBConnectError'.$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM php02_table");
$status = $stmt->execute();

$view="";
if ($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= "<p>";
        $view .= ($result['date']) . ':' .  ($result['place']) . '/' . ($result['food']) . '/' . ($result['comment']) ;
        $view .= "<p>";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>表示</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    div {
        padding: 10px;
        font-size: 16px;
    }
    </style>
</head>

<body>


    <main>
        <h1 class="mt-3 mx-3">OMOHIDE ARCHIVE</h1>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-1 mb-1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4"
                aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="select.php">OMOHIDE一覧</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">新しく登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">お問い合わせ(停止中)</a>
                </li>
            </ul>
            </div>
        </nav>
        <div class="container jumbotron "><?= $view ?></div>

        <a class="navbar-brand" href="index.php">データ登録へもどる</a>

</body>

</html>