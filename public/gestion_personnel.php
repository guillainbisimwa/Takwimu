<?php

	
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        
        $matricule_p = htmlentities(trim($_POST["matricule_p"]));
        $nom_p = htmlentities(trim($_POST["nom_p"]));

        $date_nais_p = $_POST["date_nais_p"];

        //$mysqltime = date ("Y-m-d H:i:s", $phptime);
        $sex_p = htmlentities(trim($_POST["sex_p"]));
        $date_eng_p = htmlentities(trim($_POST["date_eng_p"]));
        $nat_p = htmlentities(trim($_POST["nat_p"])); 
        $class_p = htmlentities(trim($_POST["class_p"])); 
        //class_p
        $sifa_p  = htmlentities(trim($_POST["sifa_p"]));
        $conf_p = htmlentities(trim($_POST["conf_p"]));
        $date_dip = htmlentities(trim($_POST["date_dip"]));
        $qualdip_p = htmlentities(trim($_POST["qualdip_p"]));
        $date_pro_p = htmlentities(trim($_POST["date_pro_p"]));
        $grade_anc_p = htmlentities(trim($_POST["grade_anc_p"]));
        $grade_act_p = htmlentities(trim($_POST["grade_act_p"]));
        $annee_pre_p = $_POST["annee_pre_p"]."";
        $fonct_p = htmlentities(trim($_POST["fonct_p"]));
        $select_ecole_affecter = htmlentities(trim($_POST["select_ecole_affecter"]));

        if(empty($matricule_p) ||
        empty($nom_p)||
        empty($date_nais_p)||
        empty($sex_p)||
        empty($date_eng_p)||
        empty($nat_p)||
        empty($sifa_p)||
        empty($conf_p)||
        empty($date_dip)||
        empty($qualdip_p)||
        /*empty($date_pro_p)||*/
        empty($grade_anc_p)||
        empty($grade_act_p)||
        
        empty($fonct_p)||
        empty($select_ecole_affecter))
        {
           apologize("Veiller completer tous les champs SVP.".$annee_pre_p);
        }
        else {
            if (empty($class_p)) {
                $class_p = 0;
            }
            $rows = query("SELECT * FROM personnel where matricule_p = ? and nom_p = ?",$matricule_p, $nom_p);
        
        // if we didnt find  a personel , check 
            if (count($rows) == 0 )
            {
                if (query("INSERT INTO `personnel`( `matricule_p`, `nom_p`, `date_nais_p`, `sex_p`, `date_eng_p`, `nat_p`, `sifa_p`, `conf_p`, `date_dip`, `qualdip_p`, `date_pro_p`, `grade_anc_p`, `grade_act_p`, `annee_pre_p`, `fonct_p`, `ecole_affect`, id_class) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
                    $matricule_p,$nom_p,$date_nais_p,$sex_p,$date_eng_p,$nat_p,$sifa_p,$conf_p,$date_dip,$qualdip_p,$date_pro_p,$grade_anc_p,$grade_act_p,$annee_pre_p,$fonct_p,$select_ecole_affecter,$class_p) === false) {
                    apologize("Une erreur s'est produite."); 
                }
                else {
                    success("Personnel enregistré et affecté");
                }
            }
            else {
               apologize("Ce personnel existe déjà."); 
            }


            /*echo "$matricule_p<br>
$nom_p<br>
$date_nais_p<br>
$sex_p<br>
$date_eng_p<br>
$nat_p<br>
$sifa_p<br>
$conf_p<br>
$date_dip<br>
$qualdip_p<br>
$date_pro_p<br>
$grade_anc_p<br>
$grade_act_p<br>
$annee_pre_p<br>
$fonct_p<br>
$select_ecole_affecter<br>";*/
        }
        
       
       
        
    }
    else
    {
        $table_paroisse = query("SELECT * FROM paroisse");

        render("gestion_personnel_templates.php", ["title" => "Gestion du personnel","table_paroisse" => $table_paroisse]);
	}
   
    

?>