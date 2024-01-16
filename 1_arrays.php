<?
include_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <?
            echo printItems();
            ?>
        </tr>
    </thead>
    <tbody>
        <?
        echo printStudents();
        ?>
    </tbody>
</table>
<?
include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';