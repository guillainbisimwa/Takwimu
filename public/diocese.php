<?php
    // configuration
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
	            if(query("INSERT INTO diocese (nom_diocese) VALUES (?)", $nom_diocese)=== false)
	            {
	            	apologize("Une erreur est survenue");
	            }
	            else {
	            	success("diocese ajoutee avec succes");
	            }
	        }
	        else{
	        	apologize("Cette diocese existe deja.");
	        }
	    }
	}
    else
    {
    	$table_diocese = query("SELECT * FROM diocese WHERE 1");
    	//$table_diocese = "";
        render("diocese_templates.php", ["title" => "Diocèse","table_diocese" => $table_diocese]);
	}
?>