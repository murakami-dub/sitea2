<?php
define('PATH_LOG', 'log/path.log'); 
include 'inc/log.inc.php';
?>
<?php
if (isset($_GET['id']) && $_GET['id'] === 'log') {
    include 'inc/view-log.inc.php';
    exit;
}
?>
<?php
include 'inc/cookie.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать</title>
</head>
<body>
  <h1>
    <?php
    if ($visitCounter == 2) {
      echo "Спасибо, что зашли на огонек!";
    } else {
      echo "Вы зашли к нам $visitCounter раз.<br>";
      echo "Последнее посещение: $lastVisit";
    }
    ?>
    </h1>
  </body>
</html>

<?php 
  include 'inc/headers.inc.php'; 
?>
<!DOCTYPE html>
<html>

<head>
  <title>
    <?=$title?>
  </title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="inc/style.css" />
</head>

<body>



  <div id="content">
    <!-- Заголовок -->
    <h1><?= $header?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php 
      include 'inc/routing.inc.php'; 
    ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='index.php?id=contact'>Контакты</a>
      </li>
      <li><a href='index.php?id=about'>О нас</a>
      </li>
      <li><a href='index.php?id=info'>Информация</a>
      </li>
      <li><a href='index.php?id=gbook'>Гостевая книга</a>
      </li>
      <li><a href='index.php?id=log'>Журнал посещений</a>
    </li>
    </ul>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер-мега сайт, 2000 &ndash; <?= date('Y')?>
      <!-- Нижняя часть страницы -->
  </div>
</body>

</html>