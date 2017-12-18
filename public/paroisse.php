<?php
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nom_paroisse = htmlentities(trim($_POST["nom_paroisse"]));
        $nom_coord_sp = htmlentities(trim($_POST["nom_coord_sp"]));
        if (empty($nom_coord_sp))
        {
                
            apologize("Veiller entrer le nom de la paroisse.");

        }
       	elseif (empty($nom_paroisse))
        {
                
            apologize("Veiller selectionner le nom de la Coordination sous provinciale.");

        }
        else {
        	//sous_div_paroisse
        	$rows = query("SELECT * FROM paroisse2 where nom_paroisse = ?",$nom_paroisse);

        	//success("diocese ajoutee avec succes");

        
        // if we found one paroisse, check 
	        if (count($rows) == 0)
	        {
	            if(query("INSERT INTO paroisse2(nom_paroisse, belongs_to) values(?,?)", $nom_paroisse, $nom_coord_sp)=== false)
	            {
	            	apologize("Une erreur est survenue");
	            }
	            else {
	            	success("Paroisse ajoutee avec succes");
	            }
	        }
	        else{
	        	apologize("Cette Paroisse existe deja.");
	        }
	    }
        
        
    }
    else
    {
    	
    	$table_paroisse = query("SELECT paroisse2.nom_paroisse, coordination_sp.nom_coord_sp, diocese.nom_diocese FROM paroisse2, coordination_sp, diocese WHERE paroisse2.belongs_to = coordination_sp.id AND coordination_sp.belongs_to = diocese.id
");

        $table_coord_sp = query("SELECT * FROM coordination_sp WHERE 1");
    	$table_diocese = query("SELECT * FROM diocese WHERE 1");

        render("paroisse_templates.php", ["title" => "Paroisse","table_diocese"=>$table_diocese,"table_coord_sp"=> $table_coord_sp,"table_paroisse"=> $table_paroisse]);
	}
?>

