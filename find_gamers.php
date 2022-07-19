<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="site_header">
    <h1>G.inder</h1> 
        <hr>
        <ul>
            <li><a href="homepage.html">Home</a></li>
            <li><a href="find_gamers.php">Find Gamers</a></li>
            <li><a href="createprofile.php">Create Profile</a></li>
            <li><a href="report.php">Report a Problem</a></li>
            <li><a href="create_post.php">Create a post</a></li>
        </ul>
  </div>

  <h2 class="segment_header">Search for User</h2>
  <div class="textbox">
    
    

    <form action="find_gamers.php"  method="post">


          
        <label >Gamer Tag</label>
        <input id="gamertag"  name="gamertag" type="text"  placeholder="enter gamertag" style="color:black;">
        <br>
        <br>
    
        <div class="visibility" style="display: none;">
    
          <label >Gamer </label>
          <input type="text" id="game" name="game" style="color:black;"><br><br>

          <label>Console</label>
          <input id="console" name="console" type="text" placeholder=" preffered console" style="color:black;">
          <br>

          <label for="skillLevel">Choose skill Level</label>
          <select name="skillLevels" id="skillLevels">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
          </select>

        </div>

        <br>
        

        <input type="submit" value="Submit" style="color:black;">

  

    </form>







  </div>


  <br>
  <br>
  
  <br>
  <br><br>
  <br><br>



  <div class="textbox">
    
        
    <?php

  if(isset($_POST)){

    $dbconnection = pg_connect("host=localhost dbname=GinderDB user=postgres password=calcium_82") or die ("connection did not work\n");


    if (!$dbconnection)
        {
            echo "connection error";
        }

        else 
        {
        //gamertag
        $gamertag=$_POST['gamertag'];

        //gamer
        $game=$_POST['game'];


        //console
        $console=$_POST['console'];

        //skillLevels
        $skill=$_POST['skillLevels'];

        // run a test query 

        $result=pg_query($dbconnection, "select * from gamerposts WHERE gamertag='$gamertag'");

        while ($row= pg_fetch_object($result))
        {
            


            //print "<br/>".$row->gamertag." ".$row->description;
            
            print "<h3> Gamer Tag: " . $row->gamertag . "</h3>";

            print "<h3> Game: " . $row->game . "</h3>";

            print "<h3> Console: " . $row->console . "</h3>";

            print "<h3> Skill Level: " . $row->skill . "</h3>";

            print "<h3> Post: " . $row->description . "</h3>";




            
            //print "<p>Rank: </p>";



        }


        }


    pg_close($dbconnection);


      }

      else {
        return;
    }


    ?>

</div>




</body>
</html>