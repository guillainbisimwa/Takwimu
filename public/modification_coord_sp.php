<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $id_diocese = htmlentities(trim($_POST["id_diocese"]));
         $nom_coord_sp = htmlentities(trim($_POST["nom_coord_sp"]));
         //$_POST["id_coord_Sp"]
        if (empty($nom_coord_sp))
        {
                
            apologize("Veiller entrer le nom Coordination sous provinciale.");

        }
        elseif (empty($id_diocese))
        {
                
            apologize("Veiller selectionner le nom de la diocese svp.");

        }
        else {
          //sous_div_paroisse
          $rows = query("SELECT * FROM coordination_sp where nom_coord_sp = ? and belongs_to =?",$nom_coord_sp,$id_diocese);

          //success("$nom_coord_sp, $nom_diocese");

/*nom_coord_sp
id_diocese
id_coord_Sp*/
        
        // if we found one paroisse, check 
          if (count($rows) == 0)
          {
              if(query("UPDATE coordination_sp SET nom_coord_sp= ?, belongs_to= ? WHERE id = ? ",$nom_coord_sp, $id_diocese,$_POST["id_coord_Sp"])=== false)
              {
                apologize("Une erreur est survenue");
              }
              else {
                success("Coordination sous provinciale modifiée avec succes");
              }
          }
          else{
            apologize("Cette Coordination sous provinciale existe deja.");
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
