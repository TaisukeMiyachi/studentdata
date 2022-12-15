<?php
//生徒情報取得 ⇨ htmlへpushする用の<tr><td></td></tr>作成
//連想配列作成
$student_str = "";
$student_array = [];

$file = fopen("data/database.txt", "r");

flock($file, LOCK_EX);

if($file){
    while($line = fgets($file)){
        $student_str .= "<tr><td>{$line}</td></tr>";
        $student_array[] = [
            "grade" => explode(" ",$line)[0],
            "class" => explode(" ",$line)[1],
            "student_number" => explode(" ",$line)[2],
            "student_name" => explode(" ",$line)[3],
            "img_name" => explode(" ",$line)[4],
            "img_type" => explode(" ",$line)[5],
            "img_content" => explode(" ",$line)[6],
            "img_size" => str_replace("\n", " ", explode(" ",$line)[7]),            
        ];    
              
    }
}

flock($file, LOCK_UN);
fclose($file);

//クラスごとに分ける
$class1_1 = [];
$class1_2 = [];
$class1_3 = [];
$class2_1 = [];
$class2_2 = [];
$class2_3 = [];
$class3_1 = [];
$class3_2 = [];
$class3_3 = [];


for($i=0;$i<count($student_array); $i++){
    if($student_array[$i]["grade"]==="1" && $student_array[$i]["class"]==="1"){
        $class1_1[] = $student_array[$i];
    }elseif($student_array[$i]["grade"]==="1" && $student_array[$i]["class"]==="2"){
        $class1_2[] = $student_array[$i];
    }elseif($student_array[$i]["grade"]==="1" && $student_array[$i]["class"]==="3"){
        $class1_3[] = $student_array[$i];
    }elseif($student_array[$i]["grade"]==="2" && $student_array[$i]["class"]==="1"){
        $class2_1[] = $student_array[$i];
    }elseif($student_array[$i]["grade"]==="2" && $student_array[$i]["class"]==="2"){
        $class2_2[] = $student_array[$i];
    }elseif($student_array[$i]["grade"]==="2" && $student_array[$i]["class"]==="3"){
        $class2_3[] = $student_array[$i];
    }elseif($student_array[$i]["grade"]==="3" && $student_array[$i]["class"]==="1"){
        $class3_1[] = $student_array[$i];
    }elseif($student_array[$i]["grade"]==="3" && $student_array[$i]["class"]==="2"){
        $class3_2[] = $student_array[$i];
    }elseif($student_array[$i]["grade"]==="3" && $student_array[$i]["class"]==="3"){
        $class3_3[] = $student_array[$i];
    };
}

//各クラス内で番号順に並び替える
if($class1_1){
foreach($class1_1 as $key => $value){
    $sort_keys1_1[$key] = $value["student_number"];
}
array_multisort($sort_keys1_1, SORT_ASC, $class1_1);
}
if($class1_2){
foreach($class1_2 as $key => $value){
    $sort_keys1_2[$key] = $value["student_number"];
}
array_multisort($sort_keys1_2, SORT_ASC, $class1_2);
}
if($class1_3){
foreach($class1_3 as $key => $value){
    $sort_keys1_3[$key] = $value["student_number"];
}
array_multisort($sort_keys1_3, SORT_ASC, $class1_3);
}
if($class2_1){
foreach($class2_1 as $key => $value){
    $sort_keys2_1[$key] = $value["student_number"];
}
array_multisort($sort_keys2_1, SORT_ASC, $class1_1);
}
if($class2_2){
foreach($class2_2 as $key => $value){
    $sort_keys2_2[$key] = $value["student_number"];
}
array_multisort($sort_keys, SORT_ASC, $class2_2);
}
if($class2_3){
foreach($class2_3 as $key => $value){
    $sort_keys2_3[$key] = $value["student_number"];
}
array_multisort($sort_keys, SORT_ASC, $class2_3);
}
if($class3_1){
    foreach($class3_1 as $key => $value){
    $sort_keys3_1[$key] = $value["student_number"];
}
array_multisort($sort_keys, SORT_ASC, $class3_1);
}
if($class3_2){
foreach($class3_2 as $key => $value){
    $sort_keys3_2[$key] = $value["student_number"];
}
array_multisort($sort_keys, SORT_ASC, $class3_2);
}
if($class3_3){
foreach($class3_3 as $key => $value){
    $sort_keys3_3[$key] = $value["student_number"];
}
array_multisort($sort_keys, SORT_ASC, $class3_3);
}

//表示用のタグ作成
$inputed1_1="";
if($class1_1){
    for($i=0 ; $i < count($class1_1) ; $i++){
        $inputed1_1 .= "<tr><td>{$class1_1[$i]["student_number"]}{$class1_1[$i]["student_name"]}</td></tr> ";
}
}
$inputed1_2="";
if($class1_2){
    for($i=0 ; $i < count($class1_2) ; $i++){
        $inputed1_2 .= "<tr><td>{$class1_2[$i]["student_number"]}{$class1_2[$i]["student_name"]}</td></tr>";
}
}
$inputed1_3="";
if($class1_3){
    for($i=0 ; $i < count($class1_3) ; $i++){
        $inputed1_3 .= "<tr><td>{$class1_3[$i]["student_number"]}{$class1_3[$i]["student_name"]}</td></tr>";
}
}$inputed2_1="";
if($class2_1){
    for($i=0 ; $i < count($class2_1) ; $i++){
        $inputed2_1 .= "<tr><td>{$class2_1[$i]["student_number"]}{$class2_1[$i]["student_name"]}</td></tr>";
}
}$inputed2_2="";
if($class2_2){
    for($i=0 ; $i < count($class2_2) ; $i++){
        $inputed2_2 .= "<tr><td>{$class2_2[$i]["student_number"]}{$class2_2[$i]["student_name"]}</td></tr>";
}
}$inputed2_3="";
if($class2_3){
    for($i=0 ; $i < count($class2_3) ; $i++){
        $inputed2_3 .= "<tr><td>{$class2_3[$i]["student_number"]}{$class2_3[$i]["student_name"]}</td></tr>";
}
}$inputed3_1="";
if($class3_1){
    for($i=0 ; $i < count($class3_1) ; $i++){
        $inputed3_1 .= "<tr><td>{$class3_1[$i]["student_number"]}{$class3_1[$i]["student_name"]}</td></tr>";
}
}$inputed3_2="";
if($class3_2){
    for($i=0 ; $i < count($class3_2) ; $i++){
        $inputed3_2 .= "<tr><td>{$class3_2[$i]["student_number"]}{$class3_2[$i]["student_name"]}</td></tr>";
}
}$inputed3_3="";
if($class3_3){
    for($i=0 ; $i < count($class3_3) ; $i++){
        $inputed3_3 .= "<tr><td>{$class3_3[$i]["student_number"]}{$class3_3[$i]["student_name"]}</td></tr>";
}
}

/////////////////////////////// . 画 . 像 . ////////////////////////////////////////////////////////////
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>Document</title>
</head>
<body>
<h1>登録生徒一覧</h1>

<a href = "input.php">登録画面</a>
<fieldset>
<div id="grade1">
    <div id="class1_1">
        <table>
            <thead><h2>1年1組</h2></thead>
            <tbody>
                <?= $inputed1_1 ?>
            </tbody>
        </table>
    </div>
    <div id="class1_2">
        <table>
            <thead><h2>1年2組</h2></thead>
            <tbody>
                <?= $inputed1_2 ?>
            </tbody>
        </table>
    </div>
    <div id="class1_3">
        <table>
            <thead><h2>1年3組</h2></thead>
            <tbody>
                <?= $inputed1_3 ?>
            </tbody>
        </table>
    </div>
</div>
<div id="grade2">
    <div id="class2_1">
        <table>
            <thead><h2>2年1組</h2></thead>
            <tbody>
                <?= $inputed2_1 ?>
            </tbody>
        </table>
    </div>
    <div id="class2_2">
        <table>
            <thead><h2>2年2組</h2></thead>
            <tbody>
                <?= $inputed2_2 ?>
            </tbody>
        </table>
    </div>
    <div id="class2_3">
        <table>
            <thead><h2>2年3組</h2></thead>
            <tbody>
                <?= $inputed2_3 ?>
            </tbody>
        </table>
    </div>
</div>
<div id="grade3">
    <div id="class3_1">
    <table id="class3_1">
        <thead><h2>3年1組</h2></thead>
        <tbody>
            <?= $inputed3_1 ?>
        </tbody>
    </table>
    </div>
    <div id="class3_2">
        <table>
            <thead><h2>3年2組</h2></thead>
            <tbody>
                <?= $inputed3_2 ?>
            </tbody>
        </table>
    </div>
    <div id="class3_3">
        <table>
            <thead><h2>3年3組</h2></thead>
            <tbody>
                <?= $inputed3_3 ?>
            </tbody>
        </table>
    </div>
</div>
</fieldset>
<script>

</script>
</body>
</html>