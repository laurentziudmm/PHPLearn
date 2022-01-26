<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    <title>   </title>
    </head>
    <body>

    <form action="checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        Cherry: <input type="checkbox" name="fruits[]" value="cherry's"><br>
        Juice: <input type="checkbox" name="fruits[]" value="juice"><br>
        Wine: <input type="checkbox" name="fruits[]" value="wine"><br>
        Bread: <input type="checkbox" name="fruits[]" value="breads"><br>
        <input type="submit">

    </form>

    <?php

        # Prints only the selected position from array
        $fruits = $_POST["fruits"];
        echo $fruits[0] . "<br>";
        echo "-------------------------------- <br>";
        #Prints all positions from array
        foreach($fruits = $_POST["fruits"] as $value) {
        echo $value . "<br>";
        }

    ?>

    </body>
</html>