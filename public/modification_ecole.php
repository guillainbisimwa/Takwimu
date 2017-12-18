<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     /* nom_ecole_mod
matricule_mod
arrete_agr_mod
adress_exct_mod
c_banque_mod
nom_sous_div_mod
nivo_ecole_mod
section_ecole_mod*/

        $id_ecole = htmlentities(trim($_POST["id_ecole_mod"]));
        $nom_ecole = htmlentities(trim($_POST["nom_ecole_mod"]));
        $matricule = htmlentities(trim($_POST["matricule_mod"]));
        $nivo_ecole = htmlentities(trim($_POST["nivo_ecole_mod"]));
        $c_banque = htmlentities(trim($_POST["c_banque_mod"]));
        $nom_sous_div = htmlentities(trim($_POST["nom_sous_div_mod"]));
        $adress_exct = htmlentities(trim($_POST["adress_exct_mod"]));
        $arrete_agr = htmlentities(trim($_POST["arrete_agr_mod"]));
        $section_ecole2 = $_POST["section_ecole_mod"];

        $sect = "";
        if($section_ecole2 != null){
          foreach ($section_ecole2 as $value) {
            $sect = $sect."**".$value;
          }
        }
        
        if (empty($nom_ecole))
        {    
            apologize("Veiller entrer le nom l'ecole.");
        }
        elseif (empty($matricule))
        {
           apologize("Veiller entrer le matricule.");
        }
         elseif (empty($c_banque))
        {
           apologize("Veiller entrer le compte bancaire.");
        }
        elseif (empty($nivo_ecole))
        {       
            apologize("Veiller selectionner le niveau.");
        }
         elseif (empty($nom_sous_div))
        {       
            apologize("Veiller selectionner la sous division.");
        }
        elseif ($nivo_ecole == "Secondaire" and empty($section_ecole2)) {
            apologize("Veiller selectionner les sections / options.");
        }

         elseif (empty($arrete_agr))
        {       
            apologize("Veiller l'arreté d'agreement.");
        }
         elseif (empty($adress_exct))
        {       
            apologize("Veiller entrer l'adress exact.");
        }
         else {
            //sous_div_paroisse
            $rows = query("SELECT * FROM ecole2 where nom_ecole = ?",$nom_ecole);
        
        // if we found one paroisse, check 
            if ( $nivo_ecole =="Maternelle" )
            {
                if(query("UPDATE ecole2 SET nom_ecole = ?,matricule = ?, compte_bancaire = ?, id_niveau = ?,belongs_to = ?,liste_class = ?,arrete_agr = ?,adress_exact = ?,liste_option = ? WHERE id = ?",
                 $nom_ecole, $matricule,$c_banque,$nivo_ecole,$nom_sous_div,"**1**2**3",$arrete_agr,$adress_exct,"",$id_ecole)=== false)
                {
                    apologize("Une erreur est survenue");
                }
                else {
                    success("Ecole modifiée avec succes");
                }
            }
            

            elseif ( $nivo_ecole== "Primaire" )
            {
                if(query("UPDATE ecole2 SET nom_ecole = ?,matricule = ?, compte_bancaire = ?, id_niveau = ?,belongs_to = ?,liste_class = ?,arrete_agr = ?,adress_exact = ?,liste_option = ? WHERE id = ?",
                 $nom_ecole, $matricule,$c_banque,$nivo_ecole,$nom_sous_div,"**1**2**3**4**5**6",$arrete_agr,$adress_exct,"",$id_ecole)=== false)
                {
                    apologize("Une erreur est survenue");
                }
                else {
                    success("Ecole modifiée avec succes");
                }
            }
            /*else{
                apologize("Cette ecole existe deja.");
            }*/

            elseif ( $nivo_ecole == "Secondaire")
            {
                if(query("UPDATE ecole2 SET nom_ecole = ?, matricule = ?, compte_bancaire = ?, id_niveau = ?,belongs_to = ?,liste_class = ?,liste_option = ?,arrete_agr = ?,adress_exact = ? WHERE id = ?",
                 $nom_ecole, $matricule,$c_banque,$nivo_ecole,$nom_sous_div,"**1**2**3**4**5**6",$sect,$arrete_agr,$adress_exct,$id_ecole)=== false)
                {
                    apologize("Une erreur est survenue");
                }
                else {
                    success("Ecole modifiée avec succes");
                }
            }
            else{
                apologize("Cette ecole existe déjà.");
            }
        }

        //success("$id_ecole $nom_ecole, $matricule,$nivo_ecole,$c_banque,$nom_sous_div,$adress_exct,$arrete_agr,$sect");

      
      
      echo '<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>';
      echo '<script src="js/load.js"></script>';
    }
    else
    {
	     render("acceuil_admin.php", ["title" => "Administration"]);
	}
?>
