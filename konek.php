<?php
$host = "dhenserver.database.windows.net";
    $user = "akubos";
    $pass = "daybyday0871#";
    $db = "member";
    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }
?>
