<?php
//各テキストデータ取得
if(!empty($_POST)){
    $grade = $_POST["grade"];
    $class = $_POST["class"];
    $student_number = $_POST["student_number"];
    $student_name = $_POST["student_name"];

//テキストデータまとめ
    $text_data = "{$grade} {$class} {$student_number} {$student_name}";
}
//写真データ取得
if(!empty($_FILES)){
    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type'];
    $img_content = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];

//写真データまとめ
    $img_data = "{$img_name} {$img_type} {$img_content} {$img_size}";
}
//書き込みデータ
$write_data = "{$text_data} {$img_data}\n";

//保存用txtファイル作成
$file = fopen("data/database.txt", "a");

//ファイルをロック
flock($file, LOCK_EX);

//データを書き込む
fwrite($file,$write_data);

//ファイルをアンロック
flock($file, LOCK_UN);

//ファイルを閉じる
fclose($file);


///////////// . 画 . 像 . /////////////////////////////////////////
//image_after（ローカルフォルダ）に移す
$uploaded_path = "images_after/".$img_name;

$result = move_uploaded_file($_FILES['image']['tmp_name'],$uploaded_path);

$img_path = $uploaded_path;
//入力画面に戻る
header("Location:input.php");
// exit();





   