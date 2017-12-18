<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
         $ecole ="";
          
      if(isset( $_POST["current_ecole"]))
      {
        $ecole = $_POST["current_ecole"];
      }
      elseif (isset($_POST["current_ecole"])) {
         $ecole = $_POST["current_ecole"];
      }

        $id_last_insert = query("SELECT * FROM ecole2 WHERE id = ?", $ecole);
        $id_last = $id_last_insert[0]["id"];
        $niveau = $id_last_insert[0]["id_niveau"];
        //success("BREE ".$niveau." ".$ecole);
        if (query("DELETE FROM nouveau_inscrit WHERE belongs_to = ?",$ecole) === false) {
            apologize("une erreur est survenue");
        }
        elseif (query("DELETE FROM promus WHERE belongs_to = ?",$ecole) === false) {
            apologize("une erreur est survenue");
        }
        elseif (query("DELETE FROM transfere WHERE belongs_to = ?",$ecole) === false) {
            apologize("une erreur est survenue");
        }
        elseif (query("DELETE FROM abandon WHERE belongs_to = ?",$ecole) === false) {
            apologize("une erreur est survenue");
        }
        elseif (query("DELETE FROM certifie_diplome WHERE belongs_to = ?",$ecole) === false) {
            apologize("une erreur est survenue");
        }
        else {

        $data['text'] = $_POST;
        $obj = $data['text'];
        $array = (array)($obj);
        $i = 0;
        $nouveau_inscrit="";
        $promus="";
        $transfere="";
        $abandon="";
        $certifie_diplome="";


        foreach ($array as $key2 => $value) {
            if ($i == 0 || $i == 1 ) {
                if ($key2 != "current_ecole") {
                    if ($value == "") {
                        $xp = 0;
                        $nouveau_inscrit = $nouveau_inscrit." 0,";
                    }
                    else $nouveau_inscrit = $nouveau_inscrit." ".$value.",";
                        
                }
            }
            elseif ($i == 2 || $i == 3 ) {
                if ($key2 != "current_ecole") {
                    if ($value == "") {
                        $xp = 0;
                        $promus = $promus." 0,";
                    }
                    else $promus = $promus." ".$value.",";
                        
                }
            }
            elseif ($i == 4 || $i == 5 ) {
                if ($key2 != "current_ecole") {
                    if ($value == "") {
                        $xp = 0;
                        $transfere = $transfere." 0,";
                    }
                    else $transfere = $transfere." ".$value.",";
                        
                }
            }
            elseif ($i == 6 || $i == 7 ) {
                if ($key2 != "current_ecole") {
                    if ($value == "") {
                        $xp = 0;
                        $abandon = $abandon." 0,";
                    }
                    else $abandon = $abandon." ".$value.",";
                        
                }
            }
            elseif ($i == 8 || $i == 9 ) {
                if ($key2 != "current_ecole") {
                    if ($value == "") {
                        $xp = 0;
                        $certifie_diplome = $certifie_diplome." 0,";
                    }
                    else $certifie_diplome = $certifie_diplome." ".$value.",";
                        
                }
            }
            $i++;
        }
       /* echo "$nouveau_inscrit $id_last";
        echo "$promus $id_last";
        echo "$transfere $id_last";
        echo "$abandon $id_last";
        echo "$certifie_diplome $id_last";*/
        //INSERT INTO `nouveau_inscrit`( `effectif_F`, `effectif_G`, `belongs_to`)

        if (query("INSERT INTO `nouveau_inscrit`( `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ($nouveau_inscrit $id_last)") === false) {
             apologize("Une erreur est survenue");
          }
         if (query("INSERT INTO `promus`( `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ($promus $id_last)") === false) {
             apologize("Une erreur est survenue");
          }
          if (query("INSERT INTO `transfere`( `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ($transfere $id_last)") === false) {
             apologize("Une erreur est survenue");
          }
          if (query("INSERT INTO `abandon`( `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ($abandon $id_last)") === false) {
             apologize("Une erreur est survenue");
          }
          if (query("INSERT INTO `certifie_diplome`( `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ($certifie_diplome $id_last)") === false) {
             apologize("Une erreur est survenue");
          }
          else {
            success("Mouvement modifié avec success");
          }
        }
        
    }
    else
    {
    	
        render("mouvement_eleves_templates.php", ["title" => "Mouvement des élèves"]);
	}
?>