<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <title>проверка CI CD - ручной пайплайн для deploy на хостинг JINO через github</title>
    <link rel='icon' href='/favicon.ico'>
</head>
<body>
    Здравствуй МИР!!! <hr>
    
    <ul>
        <li>1 проверка связи через Github</li>
        <li>2 ci cd - Continuous Integration and Continuous Deployment</li>
        <li>3 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis deserunt quisquam aliquid dolores atque! Cum, quis asperiores! Quas commodi sed ratione autem obcaecati quis cupiditate excepturi vel sapiente, quo molestias.</li>
    </ul>

    <hr>
    <?php
    echo "Ваш IP-адрес: ".$_SERVER['REMOTE_ADDR']."<hr>\n";
    //
    // формируем таблицу Пифагора
    //
    echo "<hr><h1>Таблица умножения (Таблица Пифагора)</h1>\n";
    echo "<table>\n";
    for($i=1;$i<10;$i++){
        echo "<tr>\n";
        for($j=1;$j<10;$j++){
            echo "\t<td align='center'>".$i*$j."</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    #phpinfo();
    ?>
<h2>А вы знаете, кто её создал и когда, и как её учили в древности?</h2>
<p>
Итак, составителем таблицы легенда называет Пифагора (древнегреческий философ, математик и мистик), хотя давно установлено, что эта таблица к Пифагору никакого отношения не имеет, это название она получила уже в средние века.</p>
</body>
</html>