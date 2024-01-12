<?php
$data = [
    ['Иванов', 'Математика', 5],
    ['Иванов', 'Математика', 4],
    ['Иванов', 'Математика', 5],
    ['Петров', 'Математика', 5],
    ['Сидоров', 'Физика', 4],
    ['Иванов', 'Физика', 4],
    ['Петров', 'ОБЖ', 4],
];
$students = array_unique(array_column($data, 0));
$items = array_unique(array_column($data, 1));
asort($students);
asort($items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <?php
                foreach ($items as $item) {
                    echo '<th>' . $item . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $student) {
                echo '<tr>';
                echo '<td>' . $student . '</td>';
                foreach ($items as $item) {
                    $sum = 0;
                    for ($i = 0; $i < count($data); $i++) {
                        if ($data[$i][0] == $student && $data[$i][1] == $item) {
                            $sum += $data[$i][2];
                        }
                    }
                    echo '<td>' . ($sum == 0 ? '' : $sum) . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>