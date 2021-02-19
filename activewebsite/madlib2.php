<!DOCTYPE html>
<html> 
    <body>
    <h1> Mad Libs </h1>

        <?php 
        echo "my first PHP script!";
        ?>
<!--is this a note?-->

<div> 
<form>
<!-- Madlib  -->
 <form action="site.php" method="GET"> 
    <label for="adj"> adjective</label><br/>
    <input type="text" id="adj" name="adj"><br/>
    <label for="noun"> noun </label><br/>
    <input type="text" id="noun" name="noun">
    <label for="person"> person </label><br/>
    <input type="text" id="person" name="person">
</form>
</div>      
    </body>
</html>