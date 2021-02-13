<!DOCTYPE HTML>
<html>
<head>
    <title> Madlibz</title>
</head>

<body>
<div>
<form action="site.php" method="post">
    Color: <input type ="text" name = "color "/><br/>
    plural noun: <input type="text" name="pluralnoun"/><br/>
    Celebrity: <input type="text" name="celebrity"/><br/>
    <input type="submit" name="submit-btn" value="go"/>
</form>
</div>
<?php
if (isset($_POST['submit-btn'])) {
    $color = '';
    $pluralnoun = '';
    $celebrity = '';

    if(!empty($_POST['color'])){
        
    }
}
    $color=$_POST["color"];
    $pluralnoun = $_POST ["pluralnoun"];
    $celebrity = $_POST ["celebrity"];
    echo "Roses are $color <br/>";
    echo "$pluralnoun are blue <br/>";
    echo "I love $celebrity <br/>";

}
?>
<?php
// This is a single line comment because the mac shortcut wont work in php

#find way to hide words
</div>
</body>
</html>