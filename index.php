<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Здравствуй МИР!!! <hr>

    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
    </ul>

    <hr>
    <?php
    echo $_SERVER['REMOTE_ADDR']."<hr>\n";
    phpinfo();
    #
    ?>
</body>
</html>