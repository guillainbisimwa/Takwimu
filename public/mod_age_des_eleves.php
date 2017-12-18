<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $ecole ="";
          
      if(isset( $_POST["current_ecole_structure"]))
      {
        $ecole = $_POST["current_ecole_structure"];
      }
      elseif (isset($_POST["current_ecole_structure2"])) {
         $ecole = $_POST["current_ecole_structure2"];
      }

        $id_last_insert = query("SELECT * FROM ecole2 WHERE id = ?", $ecole);
        $id_last = $id_last_insert[0]["id"];
        $niveau = $id_last_insert[0]["id_niveau"];

        //success("$ecole , $niveau");
        if (query("DELETE FROM age_eleves WHERE belongs_to = ?",$ecole) === false) {
            apologize("Une erreur est survenue");
        }
        else {
       
        $data['text'] = $_POST;
        $values="";
        

        if ($niveau == "Maternelle") {
            $obj = $data['text'];
            $array = (array)($obj);
            foreach ($array as $key => $value) {
                
                if ($key != "current_ecole_structure2") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $values= $values .", 0";
                    }
                    else
                    $values= $values .",". $value;
                }
            }
            for ($i=0; $i < 14; $i++) { 
                //echo "<br> 0";
                 $values= $values .", 0 ";
            }
        }
        if ($niveau == "Primaire") {

            $obj = $data['text'];
            $array = (array)($obj);
            foreach ($array as $key => $value) {
                if ($key != "current_ecole_structure2") {
                    if ($value == "") {
                        $values= $values .", 0";
                    }
                    else
                    $values= $values .",". $value;
                }
            }
            for ($i=0; $i < 3; $i++) { 
                $values= $values .", 0 ";
            }
            
        }
        if ($niveau == "Secondaire") {
            for ($i=0; $i < 5; $i++) { 
                $values= $values .", 0 ";
            }
            $obj = $data['text'];
            $array = (array)($obj);
            foreach ($array as $key => $value) {
                if ($key != "current_ecole_structure2") {
                   if ($value == "") {
                        $values= $values .", 0";
                    }
                    else
                    $values= $values .",". $value;
                }
            }
            
        }
        if(query("INSERT INTO `age_eleves`( `belongs_to`, `5ans`, `6ans`, `7ans`, `8ans`, `9ans`, `10ans`, `11ans`, `12ans`,
        `13ans`, `14ans`, `15ans`, `16ans`, `17ans`, `18ans`, `19ans`, `20ans`, `20plusans`) 
        VALUES ($id_last $values)") === false ){
            apologize("Une erreur est survenue");
        }
        else {
            success("Age des élèves modifié avec succès");
        }
   /* echo "INSERT INTO `age_eleves`( `belongs_to`, `5ans`, `6ans`, `7ans`, `8ans`, `9ans`, `10ans`, `11ans`, `12ans`,
        `13ans`, `14ans`, `15ans`, `16ans`, `17ans`, `18ans`, `19ans`, `20ans`, `20plusans`) 
        VALUES ($id_last $values);";
        //echo $values;*/
        }
        
    }
    else
    {
    	
        render("age_des_eleves_templates.php", ["title" => "Age des élèves"]);
	}
?>