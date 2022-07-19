<?php

// create connection link

$dbconnection = pg_connect("host=localhost dbname=GinderDB user=postgres password=calcium_82") or die ("connection did not work\n");

//test statement with if

if (!$dbconnection)
    {
        echo "connection error";
    }
//if error message..............

else {

    //firstname
    $firstname=$_POST['firstname'];


    //lastname
    $lastname=$_POST['lastname'];

    //email
    $email=$_POST['email'];

    //gender
    $gender=$_POST['gender'];

    //gamertag
    $gamertag=$_POST['gamertag'];

    //console
    $console=$_POST['console'];


    $skill=$_POST['skillLevels'];

    

    
    $query="INSERT INTO profile (firstname, lastname, email, gender, gamertag, console, skill) VALUES ('$firstname', '$lastname', '$email', '$gender', '$gamertag', '$console','$skill')";

    $result=pg_query($dbconnection,$query);

    header("Location: createprofile.html");
    
}

pg_close($dbconnection);



?>