<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset = "utf-8">
    <title>Create a post</title>
    
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

    <h2 class="segment_header">Create a post</h2>
    <div class="textbox">
        <p>
            Please fill out the following fields to allow the website to show your post to interested users!
        </p>

        
            <form action="post.php"  method="post">

                
                
                    <label >Gamer Tag</label>
                    <input id="gamertag"  name="gamertag" type="text"  placeholder="enter gamertag" style="color:black;">
                    <br>
                    <br>
                
                
                    <label >Game </label>
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

                    <br>
                    <br>

                    <label>Description</label>
                    <textarea id="description" name="description" rows="10" cols="50">
                        What is your post?
                    </textarea>

                    <br>
                    <br>

                    <input type="submit" value="Submit" style="color:black;">

                
                
              
              
            </form>

            


      </div>

  </body>
  </html>