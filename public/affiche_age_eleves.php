<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        
    }
    else
    {
    	
        render("affiche_age_eleves_templates.php", ["title" => "Affiche age des élèves"]);
	}
?>