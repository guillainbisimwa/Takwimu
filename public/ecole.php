<?php

	
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
       
        /*
        nom_ecole
        matricule
        nivo_ecole
        c_banque
        nom_sous_div */

        $nom_ecole = htmlentities(trim($_POST["nom_ecole"]));
        $matricule = htmlentities(trim($_POST["matricule"]));
        $nivo_ecole = htmlentities(trim($_POST["nivo_ecole"]));
        $c_banque = htmlentities(trim($_POST["c_banque"]));
        $nom_sous_div = htmlentities(trim($_POST["nom_sous_div"]));
        $adress_exct = htmlentities(trim($_POST["adress_exct"]));
        $arrete_agr = htmlentities(trim($_POST["arrete_agr"]));
        $section_ecole2 = $_POST["section_ecole2"];
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
        /*else {
            //sous_div_paroisse
            $rows = query("SELECT * FROM ecole2 where nom_ecole = ?",$nom_ecole);
        
        // if we found one paroisse, check 
            if (count($rows) == 0)
            {
                if(query("INSERT INTO ecole2(nom_ecole,matricule, compte_bancaire, id_niveau,belongs_to,arrete_agr,adress_exact) values(?,?,?,?,?,?,?)",
                 $nom_ecole, $matricule,$c_banque,$nivo_ecole,$nom_sous_div,$arrete_agr,$adress_exct)=== false)
                {
                    apologize("Une erreur est survenue");
                }
                else {
                    success("Ecole ajoutee avec succes");
                }
            }
            else{
                apologize("Cette ecole existe deja.");
            }
        }*/
        else {
            //sous_div_paroisse
            $rows = query("SELECT * FROM ecole2 where nom_ecole = ?",$nom_ecole);
        
        // if we found one paroisse, check 
            if (count($rows) == 0 and $nivo_ecole =="Maternelle" )
            {
                if(query("INSERT INTO ecole2(nom_ecole,matricule, compte_bancaire, id_niveau,belongs_to,liste_class,arrete_agr,adress_exact) values(?,?,?,?,?,?,?,?)",
                 $nom_ecole, $matricule,$c_banque,$nivo_ecole,$nom_sous_div,"**1**2**3",$arrete_agr,$adress_exct)=== false)
                {
                    apologize("Une erreur est survenue");
                }
                else {
                    success("Ecole ajoutée avec succes");
                }
            }
            /*elseif{
                apologize("Cette ecole existe deja.");
            }*/

            elseif (count($rows) == 0  and $nivo_ecole== "Primaire" )
            {
                if(query("INSERT INTO ecole2(nom_ecole,matricule, compte_bancaire, id_niveau,belongs_to,liste_class,arrete_agr,adress_exact) values(?,?,?,?,?,?,?,?)",
                 $nom_ecole, $matricule,$c_banque,$nivo_ecole,$nom_sous_div,"**1**2**3**4**5**6",$arrete_agr,$adress_exct)=== false)
                {
                    apologize("Une erreur est survenue");
                }
                else {
                    success("Ecole ajoutée avec succes");
                }
            }
            /*else{
                apologize("Cette ecole existe deja.");
            }*/

            elseif (count($rows) == 0 and $nivo_ecole == "Secondaire")
            {
                if(query("INSERT INTO ecole2(nom_ecole,matricule, compte_bancaire, id_niveau,belongs_to,liste_class,liste_option,arrete_agr,adress_exact) values(?,?,?,?,?,?,?,?,?)",
                 $nom_ecole, $matricule,$c_banque,$nivo_ecole,$nom_sous_div,"**1**2**3**4**5**6",$section_ecole2,$arrete_agr,$adress_exct)=== false)
                {
                    apologize("Une erreur est survenue");
                }
                else {
                    success("Ecole ajoutée avec succes");
                }
            }
            else{
                apologize("Cette ecole existe déjà.");
            }
        }
        

            
    }
    else
    {
        //$table_ecole2 = query("SELECT ecole2.nom_ecole, sous_div.nom_sous_div, paroisse2.nom_paroisse, coordination_sp.nom_coord_sp, diocese.nom_diocese FROM ecole2, sous_div, paroisse2, coordination_sp, diocese WHERE ecole2.belongs_to = sous_div.id AND sous_div.belongs_to = paroisse2.id AND paroisse2.belongs_to = coordination_sp.id AND coordination_sp.belongs_to = diocese.id
//");
         $table_ecole2 = query("SELECT ecole2.*, sous_div.nom_sous_div, paroisse2.nom_paroisse, coordination_sp.nom_coord_sp, diocese.nom_diocese FROM ecole2, sous_div, paroisse2, coordination_sp, diocese WHERE ecole2.belongs_to = sous_div.id AND sous_div.belongs_to = paroisse2.id AND paroisse2.belongs_to = coordination_sp.id AND coordination_sp.belongs_to = diocese.id");
        //$table_sous_div = query("SELECT * FROM sous_div");
        $table_sous_div = query("SELECT sous_div.id, sous_div.nom_sous_div,paroisse2.nom_paroisse as n_p,coordination_sp.nom_coord_sp as c_sp FROM `sous_div`,paroisse2,coordination_sp WHERE sous_div.belongs_to = paroisse2.id and paroisse2.belongs_to = coordination_sp.id");

        $table_paroisse = query("SELECT * FROM paroisse2");
        $table_section = query("SELECT * FROM section WHERE 1");
       
        render("ecole_templates.php", ["title" => "Ecole","table_section"=>$table_section, "table_paroisse"=>$table_paroisse, "table_sous_div"=>$table_sous_div,"table_ecole2"=>$table_ecole2]);
	}
   
    

?>