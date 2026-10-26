<?php
$passwords = ['Asaixc981723!', ''];
$hosts = ['127.0.0.1', 'localhost'];
$ports = [3306, 3307];

foreach ($ports as $port) {
    foreach ($hosts as $h) {
        foreach ($passwords as $p) {
            try {
                $pdo = new PDO("mysql:host=$h;port=$port", 'root', $p);
                echo "SUCCESS: host=$h, port=$port, password=" . ($p === '' ? '(empty)' : $p) . "\n";
            } catch (Exception $e) {
                echo "FAIL: host=$h, port=$port, password=" . ($p === '' ? '(empty)' : $p) . " -> " . $e->getMessage() . "\n";
            }
        }
    }
}
