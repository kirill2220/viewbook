<?php
require 'task6/task36.php';

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Заголовок</title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<h1>Заголовок</h1>
<!-- Выведите все книги -->
<?php
foreach ($result1 as $result)  {?>
Книга <?= $result['book']['name']?>, ее написал <?= $result['author']['fio']?> email <?= $result['author']['email']?></br>
<?php }?>

</body>
</html>
