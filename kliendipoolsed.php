<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--- 2.ylesanne --->
<button onclick="myFunctioni()">Tere maailm</button>
<script>
    function myFunctioni() {
        alert("Tere maailm");
    }
</script>
<!--- 3.ylesanne --->
<a href="http://khk.ee/" onclick="return confirm('Tere maailm')" >Tere maailm</a>
<!-- 4.ylesanne -->

<a href="http://facebook.com" onclick="myFunction();return false" >J‰‰me siia</a>
<script>
    function myFunction() {
        alert("J‰‰me siia");

    }

</script>

</body>
</html>