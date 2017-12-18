<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        
    }
    else
    {
    	
        render("anciennete_personnel_templates.php", ["title" => "Ancieneté dans le grade personnel"]);
	}
?>