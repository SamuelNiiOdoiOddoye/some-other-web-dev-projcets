<?php

// a condition to avoid direct access to this file without submitting the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['first_name'], $_POST['last_name'], $_POST['other_names'], $_POST['username'], $_POST['pwd'], $_POST['email'])) {
        die("All fields are required.");
    }
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $other_names = $_POST['other_names'];
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        require_once 'dbh-inc.php';
        /** @var PDO $pdo */

        $query = "INSERT INTO users_test_table (first_name, last_name, other_names, username, pwd, email) VALUES (:first_name, :last_name, :other_names, :username, :pwd, :email)";

        $stmt = $pdo->prepare($query);
        /** @var PDOStatement $stmt */

        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":other_names", $other_names);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

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
