<?php

require_once UTILS_PATH . '/envSetter.util.php';

$host = "host.docker.internal"; 
$port = "5112";
$username = "kirkgriffin";
$password = "kiseryota@07";
$dbname = "meetingDatabase";

$conn_string = "host=$host port=$port dbname=$dbname user=$username password=$password";

$dbconn = pg_connect($conn_string);

if (!$dbconn) {
    echo "❌ Connection Failed: ", pg_last_error() . "  <br>";
    exit();
} else {
    echo "✔️ PostgreSQL Connection  <br>";
    pg_close($dbconn);
}
