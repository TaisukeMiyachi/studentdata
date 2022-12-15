<?php


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    <h1>生徒情報登録</h1>
<fieldset>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <div>
            学年： <input type="text" name="grade">
        </div>
        <div>
            組： <input type="text" name="class">
        </div>
        <div>
            番号： <input type="text" name="student_number">
        </div>
        <div>
            名前： <input type="text" name="student_name">
        </div>
        <div>
            写真： <input type="file" name="image" required >
        </div>
        
        <button type="submit" class="btn btn-primary">登録</button>
    </form>
</fieldset>
<a href = "datatext.php">登録生徒一覧</a>
</body>
</html>