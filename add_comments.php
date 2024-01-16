<?
$mysqli = new mysqli("localhost", "root", "", "test");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $author = trim($_POST['author']);
    $comment = trim($_POST['comment']);

    $stmt = $mysqli->prepare("INSERT INTO comments(author, text) VALUES (?, ?)");
    $stmt->bind_param("ss", $author, $comment);

    $stmt->execute();
}

function printComments()
{
    global $mysqli;
    $content = '';
    $result = $mysqli->query("SELECT * FROM comments");

    foreach ($result as $row) {
        $content .= '<p><b>' . htmlspecialchars($row['author']) . '</b></p>';
        $content .= '<p>' . htmlspecialchars($row['text']) . '</p>';
    }

    return $content;
}