<?php
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
         $nom_diocese = htmlentities(trim($_POST["nom_diocese"]));
         $nom_coord_sp = htmlentities(trim($_POST["nom_coord_sp"]));
        if (empty($nom_coord_sp))
        {
                
            apologize("Veiller entrer le nom Coordination sous provinciale.");

        }
       	elseif (empty($nom_diocese))
        {
                
            apologize("Veiller selectionner le nom de la diocese svp.");

        }
        else {
        	//sous_div_paroisse
        	$rows = query("SELECT * FROM coordination_sp where nom_coord_sp = ?",$nom_coord_sp);

        	//success("diocese ajoutee avec succes");

        
        // if we found one paroisse, check 
	        if (count($rows) == 0)
	        {
	            if(query("INSERT INTO coordination_sp(nom_coord_sp, belongs_to) values(?,?)",$nom_coord_sp, $nom_diocese)=== false)
	            {
	            	apologize("Une erreur est survenue");
	            }
	            else {
	            	success("Coordination sous provinciale ajoutee avec succes");
	            }
	        }
	        else{
	        	apologize("Cette Coordination sous provinciale existe deja.");
	        }
	    }
        
    }
    else
    {
    	$table_coord_sp = query("SELECT coordination_sp.nom_coord_sp, diocese.nom_diocese FROM diocese,coordination_sp WHERE diocese.id = coordination_sp.belongs_to
");
    	$table_diocese = query("SELECT * FROM diocese WHERE 1");

        render("coordination_sp_templates.php", ["title" => "Coordination sous provinciale","table_coord_sp"=>$table_coord_sp
        	,"table_diocese" => $table_diocese]);
	}
?>