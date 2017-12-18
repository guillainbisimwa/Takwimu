<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        
    }
    else
    {
    	
        render("affiche_redoublant_mouvement_eleves_templates.php", ["title" => "Affiche rédoublant"]);
	}
?>