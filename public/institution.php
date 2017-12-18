<?php

	
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $data['file'] = $_FILES;
        $data['text'] = $_POST;

        
       
        $obj = $data['text'];
        $nom_inst="";
        $bp_inst = ""; 
        $s_a_inst= ""; 
        $adress_inst= ""; 
        $phone= "";
        $annee_sc = "";
           $arra = (array)($obj);
          foreach ($arra as $key2 => $value) {
            //echo $value."<br>";
            if ($key2 == "nom_inst") {
                $nom_inst = htmlentities(trim($value));
            }
            if ($key2 == "s_a_inst") {
                $s_a_inst = htmlentities(trim($value));
            }
            if ($key2 == "bp_inst") {
                $bp_inst = htmlentities(trim($value));
            }
            if ($key2 == "adress_inst") {
                $adress_inst = htmlentities(trim($value));
            }
            if ($key2 == "phone") {
                $phone = htmlentities(trim($value));
            }
            if ($key2 == "annee_sc") {
                $annee_sc = trim($value);
            }
            
          }
          //apologize($i);
          $obj2 = $data['file']['image'];
     
          $tmp_name = "";
          $name = "";
          $arra2 = (array)($obj2);
          foreach ($arra2 as $key => $value2) {
            //echo $key." =>". $value2 ." \n";

            if ($key == "tmp_name") {
              $tmp_name = $value2;
            }
            elseif ($key == "name") {
              $name = $value2;
            }
          }
          

            if (empty($nom_inst))
            {
               

                apologize("Veiller taper le nom de l'institution SVP.");

            }
             else if (empty($bp_inst))
            {
                
                apologize(" Veiller taper la boite postale de l'institution SVP.");

            }
            else if (empty($s_a_inst))
            {
               
                apologize(" Veiller taper le sigle ou abreviation de l'institution SVP.");
                
            }
           
            else if (empty($adress_inst))
            {
               
                apologize("Veiller taper l'adresse de l'institution SVP.");

            }
             else if (empty($phone))
            {
                
                apologize("Veiller taper le numero de l'institution SVP.");

            }
            else if (empty($annee_sc))
            {
                apologize("Veiller taper l'année scolaire SVP.");
            }


            
            else {
                $rows = query("SELECT * FROM institution");
                
                // if we found one or more than  institutions, check 
                if (count($rows) == 0)
                {
                    move_uploaded_file($tmp_name,"img/".$name);
                    if(query("INSERT INTO institution (`nom_institution`, `bp_institution`, `sigle_institution`, `adress_institution`, `phone_institution`, `logo_institution`,annee_sc) VALUES (?,?,?,?,?,?,?)", $nom_inst,$bp_inst,$s_a_inst,$adress_inst,$phone,$name,$annee_sc)=== false)
                    {
                       apologize("Une erreur est survenue");
                    }
                    else
                    {
                       success("Institution ajoutée avec succèss");
                    }
                }
                else apologize("Impossible d'ajouter deux institutions");
            }
    }
    else
    {
         $rows = query("SELECT * FROM institution WHERE 1");
         $nom_institution ="non définie";
         $bp_institution ="non définie";
         $s_a_institution = "non définie";

        // for each of institution's name
        foreach ($rows as $row) 
        {  
            $nom_institution = $row["nom_institution"];
            $s_a_institution =  $row["sigle_institution"];
        }
        $paroisse = query("SELECT * FROM paroisse ");
        $id_paroisse = [];
        $num = 0;
        $color = [];
        
        foreach ($paroisse as $p) 
        {
            $id_paroisse[] = $p["diocese_paroisse"];
            $num++;
            
        }

        render("institution_templates.php", ["title" => "Institution","nom_institution"=> $nom_institution,"bp_institution"=>$bp_institution,"s_a_institution"=>$s_a_institution, "id_paroisse" => $id_paroisse,"num" => $num,"rows"=> $rows]);
         

        //render("institution_templates.php", ["title" => "Institution"]);
	}
   
    

?>