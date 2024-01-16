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

function printStudents()
{
    global $data;
    $students = array_unique(array_column($data, 0));
    $content = '';
    $items = getItems();
    asort($students);
    foreach ($students as $student) {
        $content .= '<tr>';
        $content .= '<td>' . htmlspecialchars($student) . '</td>';
        foreach ($items as $item) {
            $sum = 0;
            for ($i = 0; $i < count($data); $i++) {
                if ($data[$i][0] == $student && $data[$i][1] == $item) {
                    $sum += $data[$i][2];
                }
            }
            $content .= '<td>' . htmlspecialchars(($sum == 0 ? '' : $sum)) . '</td>';
        }
        $content .= '</tr>';
    }
    return $content;
}

function getItems()
{
    global $data;
    $items = array_unique(array_column($data, 1));
    asort($items);
    return $items;
}

function printItems()
{
    $items = getItems();
    $content = '';
    foreach ($items as $item) {
        $content .= '<th>' . htmlspecialchars($item) . '</th>';
    }
    return $content;
}