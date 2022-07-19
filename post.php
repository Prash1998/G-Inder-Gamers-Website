<?php

// create connection link

$dbconnection = pg_connect("host=localhost dbname=GinderDB user=postgres password=calcium_82") or die ("connection did not work\n");


if (!$dbconnection)
    {
        echo "connection error";
    }



else {

    //gamertag
    $gamertag=$_POST['gamertag'];

    //gamer
    $game=$_POST['game'];


    //console
    $console=$_POST['console'];

    //skillLevels
    $skill=$_POST['skillLevels'];

    //description
    $description=$_POST['description'];


    $query= "INSERT INTO gamerposts (gamertag, game, console, skill, description) VALUES ('$gamertag', '$game', '$console', '$skill', '$description')";

    $result=pg_query($dbconnection,$query);

    header("Location: create_post.html");

    }




pg_close($dbconnection);


?>