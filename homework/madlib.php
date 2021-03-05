<!DOCTYPE HTML
<body>
<div>
<form action="site.php" method="get">
    Color: <input type ="text" name = "color "><br/>
    plural noun: <input type="text" name="pluralnoun"> <br/>
    Celebrity: <input type="text" name="celebrity"><br/>
    <input type="submit" name="submit-btn" value="submit">
</form>

<br/><br/>
<?php
    $color=$_GET["color"];
    $pluralnoun = $_GET ["pluralnoun"];
    $celebrity = $_GET ["celebrity"];
    echo "Roses are $color <br/>";
    echo "$pluralnoun are blue <br/>";
    echo "I love $celebrity <br/>";

if(isset($_POST['submit'])){
    //tables will shown only after submitted

?>
<?php
// This is a single line comment because the mac shortcut wont work in php

#find way to hide words
</div>
</body>
</html>