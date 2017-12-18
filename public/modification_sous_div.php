<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      /*nom_sous_div_mod
id_sous_div
id_paroisse*/
      $nom_sous_div_mod = htmlentities(trim($_POST["nom_sous_div_mod"]));
         $id_paroisse = htmlentities(trim($_POST["id_paroisse"]));
         $id_sous_div = htmlentities(trim($_POST["id_sous_div"]));
         //$_POST["id_coord_Sp"]
        if (empty($nom_sous_div_mod))
        {
                
            apologize("Veiller entrer le nom de la sous division.");

        }
        elseif (empty($id_paroisse))
        {
                
            apologize("Veiller selectionner le nom de la paroisse.");

        }
        else {
          //sous_div_paroisse
          $rows = query("SELECT * FROM sous_div where nom_sous_div = ? and belongs_to =?",$nom_sous_div_mod,$id_paroisse);

          //success("$nom_sous_div_mod, $id_paroisse ,$id_sous_div");

/*nom_coord_sp
id_diocese
id_coord_Sp*/
        
        // if we found one paroisse, check 
          if (count($rows) == 0)
          {
              if(query("UPDATE sous_div SET nom_sous_div= ?, belongs_to= ? WHERE id = ? ",$nom_sous_div_mod, $id_paroisse,$id_sous_div)=== false)
              {
                apologize("Une erreur est survenue");
              }
              else {
                success("Sous division modifiée avec succes");
              }
          }
          else{
            apologize("Cette Sous division existe deja.");
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
