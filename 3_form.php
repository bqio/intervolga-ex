<?php
$mysqli = new mysqli("localhost", "root", "", "test");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $author = trim($_POST['author']);
    $comment = trim($_POST['comment']);

    $stmt = $mysqli->prepare("INSERT INTO comments(author, text) VALUES (?, ?)");
    $stmt->bind_param("ss", $author, $comment);

    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>

<body>
    <h2>Добавить комментарий</h2>
    <form method="POST">
        <input name="author" type="text" placeholder="Автор">
        <input name="comment" type="text" placeholder="Комментарий">
        <input type="submit" value="Отправить">
    </form>
    <h2>Комментарии</h2>
    <?php
    $result = $mysqli->query("SELECT * FROM comments");

    foreach ($result as $row) {
        echo '<p><b>' . $row['author'] . '</b></p>';
        echo '<p>' . $row['text'] . '</p>';
    }
    ?>
</body>

</html>