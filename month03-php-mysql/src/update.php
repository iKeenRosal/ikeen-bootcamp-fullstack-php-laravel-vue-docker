<?php
require "db.php";

$id = $_GET["id"];
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = :id");
$stmt->execute(["id" => $id]);
$student = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $stmt = $pdo->prepare("UPDATE students SET name = :name WHERE id = :id");
    $stmt->execute(["name" => $name, "id" => $id]);
    header("Location: list.php");
    exit;
}
?>

<form method="POST">
    <input type="text" name="name" value="<?= $student['name'] ?>" required>
    <button type="submit">Update</button>
</form>
