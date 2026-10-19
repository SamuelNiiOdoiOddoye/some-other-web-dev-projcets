<?php
echo "<h2>MySQL Connection Test</h2>";

// Test with exact same settings as phpMyAdmin
$host = '127.0.0.1';
$port = 3306;
$user = 'root';
$pass = '';

echo "Connecting to $host:$port as $user...<br>";

$start = microtime(true);
$link = @mysqli_connect($host, $user, $pass, '', $port);
$end = microtime(true);

if ($link) {
    echo "✅ SUCCESS! Connection took " . round(($end - $start) * 1000, 2) . "ms<br>";
    echo "Server version: " . mysqli_get_server_info($link) . "<br>";
    echo "Host info: " . mysqli_get_host_info($link) . "<br>";
    mysqli_close($link);
} else {
    echo "❌ FAILED: " . mysqli_connect_error() . "<br>";
    echo "Error no: " . mysqli_connect_errno() . "<br>";
}
