<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
<a href="http://khk.ee/" onclick="return confirm('Tere maailm')">Tere maailm</a>
<!-- 4.ylesanne -->

<a href="http://facebook.com" onclick="myFunction();return false">J��me siia</a>
<script>
    function myFunction() {
        alert("J��me siia");

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
<!-- 7.ylesanne -->
<span class="buttons">
<button id="Blue">yellow</button>
<button id="Red">purple</button>
<button id="Green">green</button>
    </span>
<!-- <script>
   $('#Red').click(function () {
       $('body').css('backgroundColor', $('#Red').text());
   });
   $('#Blue').click(function () {
       $('body').css('backgroundColor', $('#Blue').text());
   });
   $('#Green').click(function () {
       $('body').css('backgroundColor', $('#Green').text());
   });
</script> -->
<br>
<!-- 8.ylesanne -->
<script>
    $('#Blue').click(function () {
        $('body').css("background-color", "Blue");
        $('body').css('backgroundColor', $('#Blue').text());
    });
    $('#Green').click(function () {
        $('body').css("background-color", "Green");
        $('body').css('backgroundColor', $('#Green').text());
    });
    $('#Red').click(function () {
        $('body').css("background-color", "Red");
        $('body').css('backgroundColor', $('#Red').text());
    });
</script>
<!-- 9.ylesanne -->
<script>
    $(document).ready(function () {
        $(document).on("contextmenu", function (e) {
            if (e.target.nodeName != "INPUT" && e.target.nodeName != "TEXTAREA")
                e.preventDefault();
        });
    });
</script>
<!-- 10.ylesanne -->
<br>
<button id="klops">Luba parem kl�ps</button>
<script>
    $("#klops").click(function () {
        -$(document).unbind();

    });
</script>
<br>
<!-- 11.ylesanne -->
<br>
<script>
    $(document).ready(function () {
        $("#kasss").click(function () {
            $("#imgkass").toggle();
        });
    });
</script>
<img id="imgkass" src="kass.jpg" height="150" width="150">
<br>
<button id="kasss">Peida/n�ita kassi pilti</button>


</body>
</html>