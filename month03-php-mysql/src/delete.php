<?php
require "db.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("DELETE FROM students WHERE id = :id");
$stmt->execute(["id" => $id]);

header("Location: list.php");
exit;
