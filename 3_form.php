<?
include_once $_SERVER['DOCUMENT_ROOT'] . '/add_comments.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<h2>Добавить комментарий</h2>
<form method="POST">
    <input name="author" type="text" placeholder="Автор">
    <input name="comment" type="text" placeholder="Комментарий">
    <input type="submit" value="Отправить">
</form>
<h2>Комментарии</h2>
<?
echo printComments();
include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>