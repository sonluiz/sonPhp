<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATM</title>
    <style>
        .content {
            width: 700px;
            height: 400px;
            border: 2px solid #9A9A9A;
            background: #E6E6E6;
            margin: 20px auto;
        }

        .content .info {
            height: 150px;
            padding: 0px;
        }
        .content .info img {
            margin: 10px;
            float: left;
            border-radius: 5px;
        }

        .content .info h1 {
            color: red;
            margin: 0px;
            padding-left: 275px;
        }

        .content .info p {
            font-size: 18px;
        }

        .content .info input {
            height: 30px;
        }

        .content .info input[type='text'] {
            width: 300px;
            font-size: 18px;
        }

        .content .info input[type='submit'] {
            width: 100px;
            font-size: 18px;
            border-radius: 5px;
            height: 34px;
        }

        .clr {
            clear:both;
        }

        .result div p {
            display: inline-table;
            font-size: 18px;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 5px;
        }
        .result div p.col1{
            width: 200px;
            text-align: left;
        }
        .result div p.col2{
            width: 200px;
            text-align: center;
        }
        .result div p.col3{
            width: 200px;
            text-align: right;
        }
        .result {
            padding: 10px;
        }

        .result p.total {
            text-align: right;
            font-size: 20px;
            font-weight: bold;
            color: #3879D9;
        }
    </style>
</head>
<body>
<div class="content">
    <?php
        $money='';
        if (isset($_POST['money'])){
            $money = $_POST['money'];
            $tongtien = $_POST['money'];
        }
    ?>
    <div class="info">
        <img src="" alt="atm">
        <h1>Mô phỏng máy ATM</h1>
        <form action="#" method="post">
            <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
            <input type="text" name="money" value="<?php echo $money;?>">
            <input type="submit" value="Rút tiền">
        </form>
    </div>
    <div class="clr"></div>
    <div class="result">
        <div class="normal">
            <p class="col1">Mệnh giá</p>
            <p class="col2">Số lượng</p>
            <p class="col3">Thành tiền</p>
        </div>
        <div class="clr">
            <?php
                define('motnghin',1000);
                define('hainghin',2000);
                define('namnghin',5000);
                define('muoinghin',10000);
                define('haimuoinghin',20000);
                define('nammuoinghin',50000);
                define('mottramnghin',100000);
                define('haitramnghin',200000);
                define('namtramnghin',500000);
                define('mottrieu',1000000);
                $mottrieu=0;
                $namtramnghin=0;
                $haitramnghin=0;
                $mottramnghin=0;
                $nammuoinghin=0;
                $haimuoinghin=0;
                $muoinghin=0;
                $namnghin=0;
            ?>
        </div>

        <div class="normal">
            <?php
                if (is_numeric($money) && $money>motnghin){
                    while (mottrieu<=$money){
                        $mottrieu++;
                        $money = $money-mottrieu;
                    }
                    while (namtramnghin<=$money){
                        $namtramnghin++;
                        $money = $money-namtramnghin;
                    }
                    while (haitramnghin<=$money){
                        $haitramnghin++;
                        $money = $money-haitramnghin;
                    }

                }
                if ($mottrieu>=0){
                    echo ' <p class="col1">'.mottrieu.'</p>
                            <p class="col2">'.$mottrieu.'</p>
                            <p class="col3">'.mottrieu*$mottrieu.'</p>';
                }
                if ($namtramnghin>=0){
                    echo ' <p class="col1">'.namtramnghin.'</p>
                                <p class="col2">'.$namtramnghin.'</p>
                                <p class="col3">'.namtramnghin*$namtramnghin.'</p>';
                }
                if ($haitramnghin>=0){
                    echo ' <p class="col1">'.haitramnghin.'</p>
                                <p class="col2">'.$haitramnghin.'</p>
                                <p class="col3">'.haitramnghin*$haitramnghin.'</p>';
                }

            ?>

        </div>
        <div class="clr"></div>

<!--        <div class="normal">-->
<!--            <p class="col1">200.000</p>-->
<!--            <p class="col2">2</p>-->
<!--            <p class="col3">400.000</p>-->
<!--        </div>-->
        <hr>
        <?php
         echo '<p class="total">Tổng tiền: '.$tongtien.'</p>'
        ?>

    </div><!-- .result -->
</div>
</body>
</html>
