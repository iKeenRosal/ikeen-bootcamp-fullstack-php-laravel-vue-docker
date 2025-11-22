<?php
require "db.php";

$students = $pdo->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Students</h2>
<a href="create.php">Add Student</a>

<ul>
<?php foreach ($students as $student): ?>
    <li>
        <?= $student["id"] ?> - <?= $student["name"] ?>
        | <a href="update.php?id=<?= $student['id'] ?>">Edit</a>
        | <a href="delete.php?id=<?= $student['id'] ?>">Delete</a>
    </li>
<?php endforeach; ?>
</ul>
