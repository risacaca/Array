<?php
//pengulanagn php
//for /foreach
$angka = [11, 46, 7, 8, 67, 168];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Latihan Pengulangan Foreach</title>
        <style>
            div{
                width: 50px;
                height: 50px;
                background-color: skyblue;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left;
            }
        </style>
</head>
<body>
    <?php foreach ( $angka as $key) : ?>
        <div><?= $key; ?></div>
    <?php endforeach; ?>
</body>
</html>