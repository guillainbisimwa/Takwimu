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

        $id_last_insert = query("SELECT * FROM ecole2 WHERE nom_ecole = ?", $ecole);
        $id_last = $id_last_insert[0]["id"];
        $niveau = $id_last_insert[0]["id_niveau"];
        //success("BREE ".$niveau." ".$id_last);
        //apologize("Une erreur est survenue");
        //Primaire Maternelle Secondaire
       /* $age5ans = 0;
        $age6ans= 0;
        $age7ans= 0;
        $age8ans= 0;
        $age9ans= 0;
        $age10ans= 0;
        $age11ans= 0;
        $age12ans= 0;
        $age13ans= 0;
        $age14ans= 0;
        $age15ans= 0;
        $age16ans= 0;
        $age17ans= 0;
        $age18ans= 0;
        $age19ans= 0;
        $age20ans= 0;
        $age20plusans= 0;*/

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
            success("Age des élèves enregistré avec succès");
        }
   /* echo "INSERT INTO `age_eleves`( `belongs_to`, `5ans`, `6ans`, `7ans`, `8ans`, `9ans`, `10ans`, `11ans`, `12ans`,
        `13ans`, `14ans`, `15ans`, `16ans`, `17ans`, `18ans`, `19ans`, `20ans`, `20plusans`) 
        VALUES ($id_last $values);";
        //echo $values;*/
        
        
    }
    else
    {
    	
        render("age_des_eleves_templates.php", ["title" => "Age des élèves"]);
	}
?>