<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    <title>   </title>
    </head>
    <body>

    <form action="urlParameters.php" method="get">
        Name: <input type="text" name="name"><br>
        <input type="submit"><br>
    </form>
    <br><br>

    <?php
        echo $_GET["name"]
    ?>

    </body>
</html>