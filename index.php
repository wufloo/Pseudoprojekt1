<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>


<form action="?">
    <input name="page">
    <input type="submit">
</form>

<?php

if (isset($_GET['page'])) {
    require $_GET['page'] . '.php';
}
?>