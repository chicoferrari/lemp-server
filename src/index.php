<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body {
                font-family: 'Courier New', Courier, monospace;
                font-size: larger;
            }
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <img src="https://media1.giphy.com/media/WS5wOB7zalrCm2LEAL/giphy.gif?cid=ecf05e47lf7nhcrf61pmq4002xyyu6lpds55j33b295k3kcr&rid=giphy.gif&ct=g" alt="Hello there" class="center">
        <?php
        $connection = new PDO('mysql:host=mysql;dbname=webdev;charset=utf8', 'root', 'root');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'webdev'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p class="center">There are no tables in database <code>webdev</code>.</p>';
        } else {
            echo '<p class="center">Database <code>webdev</code> contains the following tables:</p>';
            echo '<ul class="center">';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?>
    </body>
</html>