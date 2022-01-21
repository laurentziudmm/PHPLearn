<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    <title>   </title>
    </head>
    <body>

    <form action="urlParameters.php" method="get">
        Password: <input type="password" name="password"><br>
        <input type="submit"><br>
    </form>
    <br><br>

    <?php
        echo $_GET["password"]
    ?>

    </body>
</html>