<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>


<form action="index.php?" method="get">
    <input name="page">
    <input type="submit">
</form>

<?php

if (isset($_GET['page'])) {
        require $_GET['page'] . '.php';
    }
$page = (!empty($_GET['page']) ? $_GET['page'] : 'home');

require($page . '.php')
?>