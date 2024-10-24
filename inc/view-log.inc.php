<?php
if (file_exists(PATH_LOG)) {
    $logEntries = file(PATH_LOG, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo "<ul>";
    foreach ($logEntries as $entry) {
        list($dt, $page, $ref) = explode('|', $entry);
        $formattedDate = date('d-m-Y H:i:s', $dt);
        echo "<li>$formattedDate - $page -> $ref</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Файл журнала не найден.</p>";
}
?>