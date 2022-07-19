<?php
class Profile {

    public $firstname;
    public $lastname;
    public $email;
    public $gender;
    public $gamertag;
    public $console;
    public $skill;

    public function __construct($firstname, $lastname, $email, $gender, $gamertag, $console, $skill, $description) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->gender = $gender;
        $this->gamertag = $gamertag;
        $this->console = $console;
        $this->skill = $skill;
        $this->description = $description;
    }

    public static function processData($data) {
        $newUser = new Profile(
        isset($data["firstname"]) ? $data["firstname"] : null,
        isset($data["lastname"]) ? $data["lastname"] : null,
        isset($data["email"]) ? $data["email"] : null,
        isset($data["gender"]) ? $data["gender"] : null,
        isset($data["gamertag"]) ? $data["gamertag"] : null,
        isset($data["console"]) ? $data["console"] : null,
        isset($data["skill"]) ? $data["skill"] : null,
        isset($data["description"]) ? $data["description"] : null
      );

        return $newUser;
    }

    public function save($db) {
        $query = "INSERT INTO profile (fname, lname, email, gender, gtag, console, skill, description) VALUES ('$this->firstname', '$this->lastname', '$this->email', '$this->gender', '$this->gamertag', '$this->console','$this->skill', '$this->description')";
        if ($db->query($query)) {
            return true;
        } 
        return false;
    }

}


$profile = Profile::processData($_POST);

if (!empty($_POST)) {
    $db = new mysqli("localhost", "root", "", "Ginder");
    $ok = $profile->save($db);
    $db->close();
    if ($ok) {
        header("Location: homepage.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script type="text/javascript" src="simulation.js"></script>
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
        
        
        
       
        <h2 class="profile-title">Enter your Profile Information</h2>
        <div class="create-profile">
                

                <br>

                <form id="form" class="profile-form" method="POST" >


                    <div class="personalInfo">



                        <div class="names"> 

                        <div class="pInfo">
                            <label class="info">First Name</label>
                            <input id="firstname" name="firstname" type="text" placeholder="Your First name">
                            <br>
                        </div>

                        
                        <br>

                        <div class="pInfo">
                            <label class="info">Last Name</label>
                            <input id="lastname" name="lastname" type="text" placeholder="Your Last name">
                            <br>
                        </div>

                        <br>

                        <div class="pInfo">
                            <label class="info">Email</label>
                            <input id="email" name="email" type="text" placeholder="Enter Email">
                            <br>
                        </div>

                        <br>
                        

                        </div>

                        <div class="pInfo">
                            <label class="info">Gender</label><br>

                                <input type="radio" id="male" name="gender" value="Male">
                                <label for="male">Male</label>
                                <br>

                                <input type="radio" id="female" name="gender" value="Female">
                                <label for="female">Female</label>
                                <br>

                                <input type="radio" id="other" name="gender" value="Other">
                                <label for="other">Other</label>
                                <br>

                        </div>


                    </div>

                    
                    <br>

                    <div class="gamingInfo">

                        <div class="gInfo">
                            <label class="info">Gamer Tag</label>
                            <input id="gamertag"  name="gamertag" type="text" placeholder="create your Gamer Tag">
                            <br>
                        </div>

                        
                        <br>
                        <div class="gInfo">
                            <label class="info">Console</label>
                            <input id="console" name="console" type="text" placeholder=" preffered console">
                            <br>
                        </div>
                        
                        
                        <br>

                        <div class="gInfo">

                        <label class="info">Choose skill Level</label>
                        <select name="skill" id="skill">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>

                        </div>



                        <br>

                        <div class="gInfo">
                        <label class="info">Desciption </label><br>
                        <textarea name="description" id="description" cols="30" rows="5">Additional Information</textarea>
                        <br> 
                        </div>
                    
                    </div>
                    
                    <br>

                    <input type="submit" value="Submit">

                    

                </form>

        </div>


        

    </body>
</html>