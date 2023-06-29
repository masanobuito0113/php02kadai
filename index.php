<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
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
        <form method="post" action="insert.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="start">日付:</label>
                <input type="date" name="day" value="today" min="2000-01-01" max="2040-12-31">
            </div>
            <div class="mb-3">
                <label for="" class="">出かけた場所:</label>
                <input class="w-50" type="text" name="place">
            </div>
            <div class="mb-3">
                <label for="" class="">食べたもの:</label>
                <input class="w-50" type="text" name="food">
            </div>
            <div class="mb-1">
                <label for="" class="">コメント:</label>
                <textarea class="w-50" id="comment" name="comment" rows=" 3"></textarea>
            </div>
            <br>
            <div>

                <div class="form-group">
                    <input type="file" name="images" accept="image/*">
                    <!-- <input type="submit" class="btn btn-primary bg-dark"> -->
                </div>

            </div>
            <div class=" mb-1">
                <button type=" submit" class="btn btn-primary">Submit</button>
            </div>
        </form>



    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
    function submitForm() {
        window.location.href = 'select.php';
        return false;
    }
    </script>
</body>

</html>