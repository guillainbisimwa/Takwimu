<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id = $_POST["n"];
        if (empty($id)) {
            apologize("Veiller selectionner un utilistaeur SVP". $id);
        }
        else {
            $new_password = crypt("naledi","naledi");
            if (query("UPDATE user SET password = ? WHERE id = ?",$new_password,$id) === false) {
                apologize("Une erreur est survenue");
            }
            else success("Initialistion avec succes");
        }
        
        
        
    }
    
?>