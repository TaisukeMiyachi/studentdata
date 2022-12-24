<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        
        #kind{
            display: flex;
            /* justify-content: center;
            align-items: center; */
            flex-direction : column;
        }
        #input_area{
            display: flex;
            justify-content: center;
            align-items: top;
        }
        h1{
            display: flex;
            justify-content: center;
        }
        #grade{
            display: flex;
            justify-content: center;
            align-items: center;            
        }
        #grade,
        #class,
        #student_number,
        #student_name{
            /* width:300px; */
            display: flex;
            justify-content: center;
            align-items: center; 
        }
        h2{
            width:100px;
        }
        #button{
            margin-left:850px;
        }
        #transform{
            margin-left:1000px;
        }
        #area_right{
            display: flex;
            flex-direction:column;
            margin-left:20px;
        }
        #area_all{
           display: flex;
            justify-content: center;
            align-items: center; 
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>登録画面</h1>
    <form action="create.php" method="POST"  enctype="multipart/form-data">
        <div id="area_all">
            <div id="area_left">
                <div id="input_area">
                    <div id="kind">
                        <div id="grade">
                            <h2> 学年 : </h2>
                            <div><input type="number" name="grade"></div>
                        </div>
                        <div id="class">
                            <h2> 組 : </h2>
                            <div><input type="number" name="class"></div>
                        </div>
                        <div id="student_number">
                            <h2> 番号 : </h2>
                            <div><input type="number" name="student_number"></div>
                        </div>
                        <div id="student_name">
                            <h2> 名前 : </h2>
                            <div><input type="text" name="student_name"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="area_right">
                <h2> 写真 </h2>
                <div><input type="file" name="up_image" required ></div>    
            </div>
        </div>
        <div id="button">
            <button type="submit" class="btn">登録</button>    
        </div>
    </form>
    <div id="transform">
    <a href="database.php">登録生徒一覧</a>
    </div>
</body>
</html>