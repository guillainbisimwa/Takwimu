<?php
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $nom_paroisse = htmlentities(trim($_POST["nom_paroisse"]));
        $nom_sous_div = htmlentities(trim($_POST["nom_sous_div"]));
        if (empty($nom_sous_div))
        {
                
            apologize("Veiller entrer le nom de la sous division.");

        }
       	elseif (empty($nom_paroisse))
        {
                
            apologize("Veiller selectionner le nom de la paroisse.");

        }
        else {
        	//sous_div_paroisse
        	$rows = query("SELECT * FROM sous_div where nom_sous_div = ?",$nom_sous_div);

        	//success("diocese ajoutee avec succes");

        
        // if we found one paroisse, check 
	        if (count($rows) == 0)
	        {
	            if(query("INSERT INTO sous_div(nom_sous_div, belongs_to) values(?,?)", $nom_sous_div, $nom_paroisse)=== false)
	            {
	            	apologize("Une erreur est survenue");
	            }
	            else {
	            	success("Sous division ajoutee avec succes");
	            }
	        }
	        else{
	        	apologize("Cette sous division existe deja.");
	        }
	    }
        
    }
    else
    {
    	$table_sous_div = query("SELECT sous_div.nom_sous_div, paroisse2.nom_paroisse, coordination_sp.nom_coord_sp, diocese.nom_diocese FROM sous_div, paroisse2, coordination_sp, diocese WHERE sous_div.belongs_to = paroisse2.id AND paroisse2.belongs_to = coordination_sp.id AND coordination_sp.belongs_to = diocese.id
");
    	$table_paroisse = query("SELECT * FROM paroisse2 WHERE 1");
        $table_coord_sp = query("SELECT * FROM coordination_sp where 1");
        render("sous_division_templates.php", ["title" => "Sous division","table_coord_sp"=>$table_coord_sp, "table_paroisse"=>$table_paroisse,"table_sous_div"=>$table_sous_div]);
	}
?>