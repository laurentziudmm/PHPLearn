<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    <title>   </title>
    </head>
    <body>
    <?php
        $friends = array("Kevin", "Karen","Oscar", "Laurentiu", "Raluca");
                            #0      #1      #2          #3          #4
        echo $friends[0]; #Prints Kevin
        echo $friends[1]; #Prints Karen
        $friends[1] = "Katie";
        echo $friends[1]; #Prints Katie
        $friends[1] = 400;
        echo $friends[1]; #Prints 400
        $friends[5] = "Angela"; #Add Angela to array on position 5
        echo $friends[5]; #Prints Angela
        echo count ($friends); # PRints 6 elements on the array
    ?>

    </body>
</html>