<?php
//session_start();
	
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty(htmlentities(trim($_POST["login"]))))
        {
            apologize("Veiller taper votre Nom d'utilisateur SVP.");
        }
        else if (empty(htmlentities(trim($_POST["password"]))))
        {
            apologize("Veiller taper votre Mots de passe SVP.");
        }
        
        // query database for user
        $rows = query("SELECT * FROM user WHERE nom = ? and password = ?", htmlentities(trim($_POST["login"])),crypt(htmlentities(trim($_POST["password"])),"naledi") );
        
        
        // if we found user, check password
        if (count($rows) >= 1)
        {
            // first (and only) row
            $row = $rows[0];
            //echo crypt($_POST["password"],$row["password"]);

            // compare hash of user's input against hash that's in database
            if (crypt(htmlentities(trim($_POST["password"])), $row["password"]) == $row["password"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["current_session"] = $row["type_user"];
                $_SESSION["identite"] = $row["nom"]." ".$row["prenom"];
                $_SESSION["photo"] = $row["photo"];
                $_SESSION["id"] = $row["id"];
                $_SESSION["type_user"] = $row["type_user"];
                
                if ($row["type_user"] == "admin") {
                   
                }
                if ($row["type_user"] == "Conseiller d'enseignement") {
                     $_SESSION["paroisse"] = $row["belongs_to"];
                }
                if ($row["type_user"] == "Analyste") {
                    
                }
                
                
				
                //$_SESSION["type"] = $row["photo"];
                //$_SESSION["paroisse"] = $row["belongs_to"];
                //$_SESSION["nom_paroisse"] = $row["nom_paroisse"];
                

               $location = "../public/admin.php";
                //redirect("../public/admin.php");
                //apologize( $_SESSION["current_session"]);
                echo '<script>';
                echo 'window.location.replace(" '.$location.' ");';
               

                echo '</script>';

            }
        }

        // else apologize
        
        else apologize("Nom d'utilisateur ou mots de passe incorect");
    }
    else
    {
        render("login.php", ["title" => "Interface de connexion"]);
         //apologize("Invalid username and/or password.");
	}
   
    

?>