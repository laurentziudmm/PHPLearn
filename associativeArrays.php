<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    <title>   </title>
    </head>
    <body>

    <form action="associativeArrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
                        #key    #value
        $grades = array("Jimy"=>"A++", "Pam" => "C-", "Matei" => "B");
        $grades["Jimy"] = "F";
//        echo $grades["Jimy"]; #Prints A++

        echo $grades[$_POST["student"]];#Prints what you type in the box and submit

    ?>

    </body>
</html>