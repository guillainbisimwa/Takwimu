<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        
    }
    else
    {
    	
        render("affiche_releve_stat_eff_templates.php", ["title" => "Relevé statistiques des structures et effectifs scolaires"]);
	}
?>