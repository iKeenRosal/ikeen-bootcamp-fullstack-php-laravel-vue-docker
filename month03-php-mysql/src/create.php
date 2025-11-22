<?php
require "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $stmt = $pdo->prepare("INSERT INTO students (name) VALUES (:name)");
    $stmt->execute(["name" => $name]);
    header("Location: list.php");
    exit;
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Student Name" required>
    <button type="submit">Add Student</button>
</form>
