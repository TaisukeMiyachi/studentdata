<?php 
///テキスト/////////////////////////////////////////////////////////////////////
///テキストデータ取得
if(!empty($_POST)){
    $grade = $_POST["grade"];
    $class = $_POST["class"];
    $student_number = $_POST["student_number"];
    $student_name = $_POST["student_name"];
///テキストデータまとめ
    $text_data = "{$grade} {$class} {$student_number} {$student_name}";
}

///画像/////////////////////////////////////////////////////////////////////
///写真データ取得
if(!empty($_FILES["up_image"])){
    $img_name = $_FILES["up_image"]["name"];
    $img_type = $_FILES["up_image"]["type"];
    $img_tmp = $_FILES["up_image"]["tmp_name"];


///写真データまとめ
$img_data = "{$img_name} {$img_type}";

///写真をローカルフォルダへ移す
$uploaded_path = "images_after/".$img_name;

$result = move_uploaded_file($_FILES['up_image']['tmp_name'],$uploaded_path);

$img_path = $uploaded_path;
};



///テキスト・画像データ統合/////////////////////////////////////////////////////
$write_data = "{$text_data} {$img_data} \n";

///保存用ファイル作成
$file = fopen("data/database.txt", "a");

///ファイルをロック
flock($file, LOCK_EX);

///データ書き込み
fwrite($file, $write_data);

///ファイルをアンロック
flock($file, LOCK_UN);

///ファイルを閉じる
fclose($file);




///input画面へ戻る
header("Location:input.php");
exit();

