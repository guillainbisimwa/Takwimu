<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        
    }
    else
    {
    	
        render("grade_echelon_templates.php", ["title" => "Grade et echelon du personnel"]);
	}
?>