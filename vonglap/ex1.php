<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="ex1.css">
</head>
<body>
<div class="content4">
    <h1>giải câu đố bằng vòng lặp</h1>
    <div class="question">
        <p>yêu nhau cau sáu bổ ba</p>
        <p>ghét nhau cau sáu bổ ra làm mười</p>
        <p>mỗi người một miếng trăm người</p>
        <p>có người bảy quả hỏi người ghét yêu</p>
    </div>
    <div class="answer">
        <p>Đáp án</p>
        <ul>
            <?php
                for($x=1; $x<=16; $x++){
                    for($y=1; $y<=9; $y++){
                        if(3*$x + 10*$y ==100 && $x+$y==17){
                            echo "<li> $x người yêu nhau, $y người ghet nhau</li>";
                        }
                    }

                }
            ?>
        </ul>
    </div>
</div>
</body>
</html>
