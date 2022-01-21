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
    echo "<br>";
    #strtoupper Add Letters to Upper Case
    echo strtoupper($phrase);
    echo "<br>";
    #String length
    echo strlen($phrase);#Prints 15
    echo "<br>";
    #This is index []
    echo $phrase[0]; #Prints A
    echo $phrase[1]; #Prints c
    echo "Mike"[1]; #Prints i
    echo "<br>";
    echo "<hr>";
    echo "<br>";

    $phrase = "Hi Academy";
    echo str_replace("Hi","Panda",$phrase);
    echo "<br>";
    echo $phrase;
    echo "<br>";
    echo substr($phrase, 3); #Prints Academy
    echo "<br>";
    echo substr($phrase, 3,3); #Prints Aca

    ?>


    </body>
</html>