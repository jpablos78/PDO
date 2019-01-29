
<?php

echo 'PDO';

print_r(PDO::getAvailableDrivers());

//phpinfo();

echo '<br>';

try {
    $server = 'localhost';
    $user = 'sa';
    $password = 'solsa';
    $dbname = 'WebPedidoss';

    $dsn = "mysql:host=localhost;dbname=$dbname";
    $odbc="odbc:Driver={SQL Server};Server=$server;Database=$dbname;";

    //$dbh = new PDO($dsn, $user, $password);
    $dbh = new PDO($odbc, $user, $password);
} catch (PDOException $e) {
    echo utf8_encode($e->getMessage());
}
?>
 
