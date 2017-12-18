<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        
    }
    else
    {
    	
        render("affiche_synthese_de_la_rep_templates.php", ["title" => "Synthèse de la répartition des élèves du secondaire par option"]);
	}
?>