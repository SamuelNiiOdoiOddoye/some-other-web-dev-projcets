<?php

// a condition to avoid direct access to this file without submitting the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['username'], $_POST['pwd'])) {
        die("Username and password are required.");
    }
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once 'dbh-inc.php';
        /** @var PDO $pdo */

        $query = "DELETE FROM  users_test_table WHERE username = :username AND pwd = :pwd;";

        $stmt = $pdo->prepare($query);
        /** @var PDOStatement $stmt */

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
