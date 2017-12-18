<?php

	
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //render("acceuil_admin.php", ["title" => "Administration"]);
        
    }
    else
    {
        render("acceuil_admin.php", ["title" => "Administration"]);
	}
   
    

?>