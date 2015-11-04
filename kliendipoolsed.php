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
<!--- 5.ylesanne --->
<p>
    <img alt="" src="kass.jpg"
         style="height: 150px; width: 150px" id="imgClickAndChange" onclick="changeImage()"/>
</p>
<script language="javascript">
    function changeImage() {

        if (document.getElementById("imgClickAndChange").src == "kass.jpg") {
            document.getElementById("imgClickAndChange").src = "koer.jpg";
        }
        else {
            document.getElementById("imgClickAndChange").src = "koer.jpg";
        }
    }
</script>
<!--- 6.ylesanne --->
<div><img id="kass" src="kass.jpg" height="150" width="150"></div>
<script>
    $(document).ready(function () {
        $("#kass").click(function () {
            $(this).replaceWith('<img src="koer.jpg" height="150" width="150">');
        });

    });
</script>
<br>
</body>
</html>
<?php
