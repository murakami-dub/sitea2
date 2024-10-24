<?php
// Инициализация переменной для подсчета посещений
$visitCounter = 0;

// Проверка, пришли ли куки visitCounter
if (isset($_COOKIE['visitCounter'])) {
    $visitCounter = (int)$_COOKIE['visitCounter'];
}

// Увеличиваем счетчик на единицу
$visitCounter++;

// Инициализация переменной для последнего посещения
$lastVisit = "";

// Проверка, пришли ли куки lastVisit
if (isset($_COOKIE['lastVisit'])) {
    $lastVisit = date('d-m-Y H:i:s', $_COOKIE['lastVisit']);
}

// Условие для установки куки только один раз в день
if (empty($_COOKIE['lastVisit']) || date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
    // Устанавливаем обновленные куки
    setcookie('visitCounter', $visitCounter, time() + 3600 * 24 * 365); // Куки на год
    setcookie('lastVisit', time(), time() + 3600 * 24 * 365); // Куки на год
}
?>
