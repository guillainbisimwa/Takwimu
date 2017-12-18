<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $nom_diocese = htmlentities(trim($_POST["nom_diocese"]));
        if (empty($nom_diocese))
        {
                
            apologize("Veiller entrer le nom de la diocese svp.");

        }
        else {
          $rows = query("SELECT * FROM diocese where nom_diocese = ?",$nom_diocese);
        
        // if we found one paroisse, check 
          if (count($rows) == 0)
          {
          if ($_POST["id"] != "" )
          {
              if(query("UPDATE `diocese` SET `nom_diocese`=? WHERE id = ?", $nom_diocese,$_POST["id"])=== false)
              {
                apologize("Une erreur est survenue");
              }
              else {
                success("Diocese modifiée avec succès");
              }
          }
          else{
            apologize("Veiller selectioner la diocese svp.");
          }
        }
        else{
            apologize("Cette diocese existe deja.");
          }
      }
      
      echo '<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>';
      echo '<script src="js/load.js"></script>';
    }
    else
    {
	     render("acceuil_admin.php", ["title" => "Administration"]);
	}
?>
