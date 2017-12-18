<?php
    //configuration
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
        $nom_inst_old = "";
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
            if ($key2 == "nom_inst_old") {
                $nom_inst_old = trim($value);
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
              //$date_notif=date('Y-m-dH:i:s');
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

              //success("$nom_inst, $nom_inst_old , $name");
              if ($name == "") {
                if (query("UPDATE `institution` SET `nom_institution`=?,
                  `bp_institution`=?,`sigle_institution`=?,`adress_institution`=?,
                  `phone_institution`=?,`annee_sc`=? WHERE id=?",$nom_inst,$bp_inst,$s_a_inst,$adress_inst,$phone,$annee_sc,$nom_inst_old
                  ) === false)
                {
                  apologize("Impossible de modifier");
                }
                else success("Modfication reussi avec succes");
              }
               elseif ($name != "") {
                move_uploaded_file($tmp_name,"img/".$name);
                if (query("UPDATE `institution` SET `nom_institution`=?,
                  `bp_institution`=?,`sigle_institution`=?,`adress_institution`=?,
                  `phone_institution`=?,`annee_sc`=?, logo_institution=? WHERE id=?",$nom_inst,$bp_inst,$s_a_inst,$adress_inst,$phone,$annee_sc,$name,$nom_inst_old
                  ) === false)
                {
                  apologize("Impossible de modifier");
                }
                else success("Modfication reussi avec succes");
              }

              //$rows = query("SELECT * FROM institution WHERE nom_institution = ?  ",$nom_inst_old);
                
                // if we found one or more than  institutions, check 
                /*if (count($rows) == 0)
                {
                    move_uploaded_file($tmp_name,"img/".$name);
                    if(query("INSERT INTO institution (`nom_institution`, `bp_institution`, `sigle_institution`,
                     `adress_institution`, `phone_institution`, `logo_institution`,annee_sc) VALUES (?,?,?,?,?,?,?)", 
                     $nom_inst,$bp_inst,$s_a_inst,$adress_inst,$phone,$name,$annee_sc)=== false)
                    {
                       apologize("Une erreur est survenue");
                    }
                    else
                    {
                       success("Institution ajoutée avec succèss");
                    }
                }
                else apologize("Impossible d'ajouter deux institutions");*/
            }
      echo '<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>';
      echo '<script src="js/load.js"></script>';
    }
    else
    {
	     render("acceuil_admin.php", ["title" => "Administration"]);
	}
?>
