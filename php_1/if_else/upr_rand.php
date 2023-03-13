<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h3>Показ изображений</h3>
    <?php
    $pic = rand(1,6);
    echo "Вы выиграли изображение ".$pic."<br><br><img src=\"pic$pic.jpg\">";
    ?>
    <p>Обновите страницу, чтобы начать сначала</p>
</body>
</html>