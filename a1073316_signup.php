<!DOCTYPE html>
<html lang="en">
<style>
    div{
        margin:0px auto;
    }
    .wrapped{
        width:700px;
        height:1200px;
        border:1px solid #dadada;
        text-align:center;
        margin:0px auto;
    }
    .a1{
        width: 650px;
        height: 100px;
        line-height:100px;
        background-color: #385F71;
    }
    .a2{
        width: 650px;
        height: 950px;
        background-color: #F5F0F6;
    }
    .content{
        width:650px;
        height:700px;
        padding-top:20px;
    }
    .a3{
        width: 650px;
        height: 100px;
        line-height:100px;
        background-color: #629460;
    }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IM Sign Up Form</title>
</head>
<body>

    <div class=wrapped> 
        <div class=a1><h1><font color="white">IM Sign Up Form</font></h1></div>
        <div class=a2>
            <div class=content>
                <form action="submit.php" method="POST">
                    <p>姓名<input type="text" placeholder="english only" name="username"></p>
                    <p>身分證字號<input type="password" name="pwd"></p>
                    <p>性別<input type="radio" name="gender" value="M">Male<input type="radio" name="gender" value="F">female</p>
                    <p>請上傳檔案<input type="file"></p>
                    <p><img src="https://static.wixstatic.com/media/06dfca_3235894057024b54b8833007b65a8edc~mv2_d_2480_1433_s_2.jpg" alt="" width="300px" height="auto"></p>
                    <p>填寫你的衣服版型及件數<input type="picture"></p>
                    <p>營服顏色偏好<input type="color"></p>
                    <p>一天餐費<input type="range" min="0" max="200"></p>
                    <p>生日<input type="date"></p>
                    <p>電子信箱<input type="email"></p>
                    <p>個性特質
                    <input type="checkbox" name="int1" value="happy" checked>樂觀
                    <input type="checkbox" name="int2" value="inside">內向
                    <input type="checkbox" name="int3" value="good">積極
                    <input type="checkbox" name="int4" value="outside">外向
                    <input type="checkbox" name="int5" value="soso">消極
                    </p>

                    <p>居住城市<select name="city" id="" mutiple>
                    <option value="taipei">taipei</option>
                    <option value="kaohsiung" selected>kaohsiung</option>
                    <option value="tainan">tainan</option>
                    <option value="taichung">taichung</option>
                    </select></p>

                    <p>建議</p>
                    <p><textarea name="suggest" id="" cols="50" rows="7"></textarea></p>

                    <input type="submit"><input type="reset" value="Clear"><br/>
                </form>
            </div>
        </div>
        <div class=a3>
            <p>連絡電話:XXXX-XXX-XXX</p>
        </div>
    </div>
</body>
</html>