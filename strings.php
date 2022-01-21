<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    <title>   </title>
    </head>
    <body>

    <?php
    $phrase = "Academy Giraffe";
    $phrase[0] = "B";
    echo "Fifth year Academy <br>";
    echo "$phrase<br>";
    #strtolower Add Capital Letters to normal
    echo strtolower($phrase);
    #strtoupper Add Letters to Upper Case
    echo strtoupper($phrase);
    #String length
    echo strlen($phrase);#Prints 15
    #This is index []
    echo $phrase[0]; #Prints A
    echo $phrase[1]; #Prints c
    echo "Mike"[1]; #Prints i


    ?>


    </body>
</html>