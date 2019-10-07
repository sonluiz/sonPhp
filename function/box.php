<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <?php
            function createBox($valu){
                $result = '<div style="width: 200px; height: 50px">';
                $result .=' <p>'.$valu.'<span>(200*50px)</span></p>';
                $result .= '</div>';
                return $result;
            }

            $boxA = createBox("BOX A");
            $boxb = createBox("BOXB");
            echo $boxA;
            echo $boxb;
        ?>
    </div>

</body>
</html>
