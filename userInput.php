<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    <title>   </title>
    </head>
    <body>

    <form action="userInput.php" method="get">
        Name:     <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
        Email:    <input type="text" name="email"><br>
        Age:    <input type="number" name="age"><br>
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["username"]?><br>
    Your password is <?php echo $_GET["password"]?><br>
    Your email is <?php echo $_GET["email"]?><br>
    Your age is <?php echo $_GET["age"]?><br>

    </body>
</html>