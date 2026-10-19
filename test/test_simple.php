<?php
// Simple MySQL test
echo "<h1>MySQL Connection Test</h1>";

try {
    $link = new mysqli("localhost", "root", "", "", 3306);
    
    if ($link->connect_error) {
        echo "❌ Connection failed: " . $link->connect_error;
    } else {
        echo "✅ Connected successfully!<br>";
        echo "MySQL version: " . $link->server_version;
        $link->close();
    }
} catch (Exception $e) {
    echo "❌ Exception: " . $e->getMessage();
}
?>