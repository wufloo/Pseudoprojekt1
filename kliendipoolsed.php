<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pseudoprojekt</title>
    <script src="jquery-1.11.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="http://code.jquery.com/jquery-latest.js"></script>
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

<a href="http://facebook.com" onclick="myFunction();return false" >Jääme siia</a>
<script>
    function myFunction() {
        alert("Jääme siia");

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
