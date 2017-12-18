<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     /* nom_paroisse_mod
id_paroisse
id_coord_sp*/
      $nom_paroisse_mod = htmlentities(trim($_POST["nom_paroisse_mod"]));
         $id_coord_sp = htmlentities(trim($_POST["id_coord_sp"]));
         $id_paroisse = htmlentities(trim($_POST["id_paroisse"]));
         //$_POST["id_coord_Sp"]
        if (empty($nom_paroisse_mod))
        {
                
            apologize("Veiller entrer le nom de la paroisse.");

        }
        elseif (empty($id_coord_sp))
        {
                
            apologize("Veiller selectionner la coordination sous provinciale.");

        }
        else {
          //sous_div_paroisse
          $rows = query("SELECT * FROM paroisse2 where nom_paroisse = ? and belongs_to =?",$nom_paroisse_mod,$id_coord_sp);

          //success("$nom_paroisse_mod, $id_coord_sp $id_paroisse)");


        
        // if we found one paroisse, check 
          if (count($rows) == 0)
          {
              if(query("UPDATE paroisse2 SET nom_paroisse= ?, belongs_to= ? WHERE id = ? ",$nom_paroisse_mod, $id_coord_sp,$id_paroisse)=== false)
              {
                apologize("Une erreur est survenue");
              }
              else {
                success("Paroisse modifiée avec succes");
              }
          }
          else{
            apologize("Cette paroisse existe deja.");
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
