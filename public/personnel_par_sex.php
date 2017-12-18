<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
      $id_paroisse = $_POST["n"];

      $tab_paroisse = query("SELECT paroisse2.id, paroisse2.nom_paroisse, sous_div.nom_sous_div, coordination_sp.nom_coord_sp FROM `paroisse2`,sous_div,coordination_sp WHERE paroisse2.id = sous_div.belongs_to and paroisse2.belongs_to = coordination_sp.id and paroisse2.id = ?", $id_paroisse);
      $nom_coord_sp = $tab_paroisse[0]["nom_coord_sp"];
      //$nom_sous_div = $tab_paroisse[0]["nom_sous_div"];
      $nom_paroisse = $tab_paroisse[0]["nom_paroisse"];
      //echo $nom_ecole; /*SOUS DIVISION : <b class='text-uppercase'>$nom_sous_div</b><br>*/

      echo "<div class='center_naledi'>";

                                        $inst = query("SELECT * FROM institution ");
                                        if (count($inst) > 0) {
                                            $titre = strtoupper($inst[0]["nom_institution"]);
                                            $bp = strtoupper($inst[0]["bp_institution"]);
                                            $logo = $inst[0]["logo_institution"];
                                            $as = $inst[0]["annee_sc"];
                                            echo "<div class='entete hidden'><div><img src='img/$logo' class='center_naledi'>
        <span class='titrelogo'> $titre</span>
            <span class='center_naledi'>$bp <br><br></span></div></div>";
                                        }

                                    
                        echo "<span class='titre_print text-uppercase'>PERSONNEL ADMINISTRATIF, ENSEIGNANTS ET OUVRIER PAR SEXE</span><br>
                        PAROISSE : <b class='text-uppercase'>$nom_paroisse</b>, 
                        
                         COORDINATION SOUS PROVINCIALE : <b class='text-uppercase'>$nom_coord_sp</b><br>
                        ANNEE SCOLAIRE 2016-2017
                    </div>
                        <table id='affiche_relev_stat_table'  class='naledi_yellow11  table-bordered  table-responsive pointInputTable table-condensed ' >
                        <thead>
                            <tr class='warning'>
                                <th rowspan='3'> N° </th>
                                <th rowspan='3'>Matricule</th>
                                <th rowspan='3' >Terr </th>
                                <th rowspan='3' >SOUS DIVISION </th>
                                <th rowspan='3'>Ecole </th>
                                <th colspan='2' rowspan='2'>CLASSE </th>
                                <th colspan='3'  rowspan='2'>EFF/ELEVES</th>
                                
                                <th colspan='9'>EFFECTIFS DU PERSONNEL </th>
                                <th colspan='5'>OBSERV </th>
                                         
                            </tr>
                             <tr class='warning'>
                               
                                <th colspan='3'>ADMINISTRATIF</th>
                                <th colspan='3'>ENSEIGNANT</th>
                                <th colspan='3'>OUVRIER</th>
                                <th rowspan='2'>AM</th>
                                <th rowspan='2'>AR-NM</th>
                                <th rowspan='2'>AO-NM</th>
                                <th rowspan='2'>ONA</th>
                                <th rowspan='2'>ANO</th>
                                
                                 
                                              
                            </tr>
                             <tr class='warning'>
                               
                                <th >AGR </th>
                                <th >ORG </th>
                                <th >G </th>
                                <th >F </th>
                                <th >TOT </th>
                                <th >H </th>
                                <th >F </th>
                                <th >TOT </th>
                                <th >H </th>
                                <th >F </th>
                                <th >TOT </th>
                                <th >H</th>
                                <th >F </th>
                                <th >TOT </th>                  
                            </tr>
                            
                            <tbody class='naledi_yellow1'>";

                            $tab_select_ecole = query("SELECT ecole2.*, sous_div.nom_sous_div , paroisse2.nom_paroisse FROM `ecole2`,paroisse2,sous_div WHERE ecole2.belongs_to = sous_div.id and sous_div.belongs_to = paroisse2.id and paroisse2.id = ? ORDER by ecole2.id_niveau ASC",$id_paroisse);

                            $nbr =1;
                            $test_mat = 0;
                            $test_pri = 0;
                            $test_sec = 0;

                            //TOTAUX GENERAUX
                            $_total_gen_str_org_mat = 0; 
                            $_total_gen_str_aut_mat = 0; 
                            $_total_gen_tot_eff_G_mat = 0; 
                            $_total_gen_tot_eff_F_mat = 0; 
                            $_total_gen_tot_eff_GF_mat = 0; 
                            $_total_gen_persnel_adm_h_mat = 0; 
                            $_total_gen_persnel_adm_f_mat = 0; 
                            $_total_gen_persnel_adm_hf_mat = 0; 
                            $_total_gen_persnel_ens_h_mat = 0; 
                            $_total_gen_persnel_ens_f_mat = 0; 
                            $_total_gen_persnel_ens_hf_mat = 0; 
                            $_total_gen_persnel_ouv_h_mat = 0; 
                            $_total_gen_persnel_ouv_f_mat = 0; 
                            $_total_gen_persnel_ouv_hf_mat = 0; 

                            $_total_gen_str_org_pri = 0; 
                            $_total_gen_str_aut_pri = 0; 
                            $_total_gen_tot_eff_G_pri = 0; 
                            $_total_gen_tot_eff_F_pri = 0; 
                            $_total_gen_tot_eff_GF_pri = 0; 
                            $_total_gen_persnel_adm_h_pri = 0; 
                            $_total_gen_persnel_adm_f_pri = 0; 
                            $_total_gen_persnel_adm_hf_pri = 0; 
                            $_total_gen_persnel_ens_h_pri = 0; 
                            $_total_gen_persnel_ens_f_pri = 0; 
                            $_total_gen_persnel_ens_hf_pri = 0; 
                            $_total_gen_persnel_ouv_h_pri = 0; 
                            $_total_gen_persnel_ouv_f_pri = 0; 
                            $_total_gen_persnel_ouv_hf_pri = 0; 


                            $_total_gen_str_org_sec = 0; 
                            $_total_gen_str_aut_sec = 0; 
                            $_total_gen_tot_eff_G_sec = 0; 
                            $_total_gen_tot_eff_F_sec = 0; 
                            $_total_gen_tot_eff_GF_sec = 0; 
                            $_total_gen_persnel_adm_h_sec = 0; 
                            $_total_gen_persnel_adm_f_sec = 0; 
                            $_total_gen_persnel_adm_hf_sec = 0; 
                            $_total_gen_persnel_ens_h_sec = 0; 
                            $_total_gen_persnel_ens_f_sec = 0; 
                            $_total_gen_persnel_ens_hf_sec = 0; 
                            $_total_gen_persnel_ouv_h_sec = 0; 
                            $_total_gen_persnel_ouv_f_sec = 0; 
                            $_total_gen_persnel_ouv_hf_sec = 0; 

                            $_total_gen_str_org = 0; 
                            $_total_gen_str_aut = 0; 
                            $_total_gen_tot_eff_G = 0; 
                            $_total_gen_tot_eff_F = 0; 
                            $_total_gen_tot_eff_GF = 0; 
                            $_total_gen_persnel_adm_h = 0; 
                            $_total_gen_persnel_adm_f = 0; 
                            $_total_gen_persnel_adm_hf = 0; 
                            $_total_gen_persnel_ens_h = 0; 
                            $_total_gen_persnel_ens_f = 0; 
                            $_total_gen_persnel_ens_hf = 0; 
                            $_total_gen_persnel_ouv_h = 0; 
                            $_total_gen_persnel_ouv_f = 0; 
                            $_total_gen_persnel_ouv_hf = 0; 


                            foreach ($tab_select_ecole as $ecole) {

                              $id_ecole = $ecole["id"];


                              $nom_sous_div =$ecole["nom_sous_div"];
                              //$nbr = 1;
                              $matricule = $ecole["matricule"];
                              $nom_ecole = $ecole["nom_ecole"];
                              if ($ecole["id_niveau"] == "Maternelle") {


                                //CALCUL NBRE CLASS ORG MATERNELLE
                              $tab_str_org1 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "1");
                              $tab_str_org2 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "2");
                              $tab_str_org3 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "3");
                              $tab_str_org4 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "4");
                              $tab_str_org5 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "5");
                              $tab_str_org6 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "6");
                              $str_org1 = 0;
                              $str_org2 = 0;
                              $str_org3 = 0;
                              $str_org4 = 0;
                              $str_org5 = 0;
                              $str_org6 = 0;


                              if(count($tab_str_org1)>0 and count($tab_str_org2)>0 and count($tab_str_org3)>0 )
                              {
                                $str_org1 = $tab_str_org1[0]["nbr_structure"];
                                $str_org2 = $tab_str_org2[0]["nbr_structure"];
                                $str_org3 = $tab_str_org3[0]["nbr_structure"];
                              }
                              if(count($tab_str_org4)>0 and count($tab_str_org5)>0 and count($tab_str_org6)>0 )
                              {
                                $str_org4 = $tab_str_org4[0]["nbr_structure"];
                                $str_org5 = $tab_str_org5[0]["nbr_structure"];
                                $str_org6 = $tab_str_org6[0]["nbr_structure"];
                              }
                              $str_org = $str_org1+$str_org2+$str_org3+$str_org4+$str_org5+$str_org6;

                              //total general
                              $_total_gen_str_org_mat = $_total_gen_str_org_mat + $str_org;

                              //structure aut
                                $tab_str_aut1 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "1");
                                $tab_str_aut2 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "2");
                                $tab_str_aut3 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "3");
                                $tab_str_aut4 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "4");
                                $tab_str_aut5 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "5");
                                $tab_str_aut6 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "6");
                                $str_aut1 = 0;
                                $str_aut2 = 0;
                                $str_aut3 = 0;
                                $str_aut4 = 0;
                                $str_aut5 = 0;
                                $str_aut6 = 0;


                                if(count($tab_str_aut1)>0 and count($tab_str_aut2)>0 and count($tab_str_aut3)>0 )
                                {
                                  $str_aut1 = $tab_str_aut1[0]["nbr_structure"];
                                  $str_aut2 = $tab_str_aut2[0]["nbr_structure"];
                                  $str_aut3 = $tab_str_aut3[0]["nbr_structure"];
                                }
                                if(count($tab_str_aut4)>0 and count($tab_str_aut5)>0 and count($tab_str_aut6)>0 )
                                {
                                  $str_aut4 = $tab_str_aut4[0]["nbr_structure"];
                                  $str_aut5 = $tab_str_aut5[0]["nbr_structure"];
                                  $str_aut6 = $tab_str_aut6[0]["nbr_structure"];
                                }
                                $str_aut = $str_aut1+$str_aut2+$str_aut3+$str_aut4+$str_aut5+$str_aut6;
                                
                                //total general
                                $_total_gen_str_aut_mat = $_total_gen_str_aut_mat + $str_aut;

                                //effectif eleves
                                $eff_G1 = 0;
                                $eff_F1 = 0;
                                $eff_G2 = 0;
                                $eff_F2 = 0;
                                $eff_G3 = 0;
                                $eff_F3 = 0;
                                

                                $eff_GF1 = 0;
                                $eff_GF2 = 0;
                                $eff_GF3 = 0;

      $tab_ecole_mat =query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class =?",$id_ecole,"1");
      $tab_ecole_mat2=query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class =?",$id_ecole,"2");
      $tab_ecole_mat3=query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class =?",$id_ecole,"3");

      if(count($tab_ecole_mat) == 1 && count($tab_ecole_mat2) == 1 && count($tab_ecole_mat3) == 1){
        $eff_F1 =  $tab_ecole_mat[0]["age_6ansF"]+$tab_ecole_mat[0]["age_6F"]+$tab_ecole_mat[0]["age_7a10ansF"];
        $eff_G1 = $tab_ecole_mat[0]["age_6ansG"]+$tab_ecole_mat[0]["age_6G"]+$tab_ecole_mat[0]["age_7a10ansG"];
        $eff_F2 = $tab_ecole_mat2[0]["age_6ansF"]+$tab_ecole_mat2[0]["age_6F"]+$tab_ecole_mat2[0]["age_7a10ansF"];
        $eff_G2 = $tab_ecole_mat2[0]["age_6ansG"]+$tab_ecole_mat2[0]["age_6G"]+$tab_ecole_mat2[0]["age_7a10ansG"];
        $eff_F3 =$tab_ecole_mat3[0]["age_6ansF"]+$tab_ecole_mat3[0]["age_6F"]+$tab_ecole_mat3[0]["age_7a10ansF"];
        $eff_G3 = $tab_ecole_mat3[0]["age_6ansG"]+$tab_ecole_mat3[0]["age_6G"]+$tab_ecole_mat3[0]["age_7a10ansG"];

       }
                                $eff_GF1 = $eff_F1 + $eff_G1;
                                $eff_GF2 = $eff_F2 + $eff_G2;
                                $eff_GF3 = $eff_F3 + $eff_G3;
                                

                                //TOTAUX SOMMATION
                                $tot_eff_G = $eff_G1 + $eff_G2 + $eff_G3 ;
                                $tot_eff_F = $eff_F1 + $eff_F2 + $eff_F3  ;
                                $tot_eff_GF = $eff_GF1 + $eff_GF2 + $eff_GF3 ;

                                //totaux effectifs
                                $_total_gen_tot_eff_F_mat = $_total_gen_tot_eff_F_mat + $tot_eff_F;
                                $_total_gen_tot_eff_G_mat = $_total_gen_tot_eff_G_mat + $tot_eff_G;
                                $_total_gen_tot_eff_GF_mat = $_total_gen_tot_eff_GF_mat + $tot_eff_GF;

                              //personneel
                                $persnel_adm_h = 0;
                                $persnel_adm_f = 0;
                                $persnel_adm_hf= 0;

                                $persnel_ens_h = 0;
                                $persnel_ens_f = 0;
                                $persnel_ens_hf= 0;

                                $persnel_ouv_h = 0;
                                $persnel_ouv_f = 0;
                                $persnel_ouv_hf= 0;

                                $tab_personel_adm_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '13%' or `grade_act_p` like '14%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_adm_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '13%' or `grade_act_p` like '14%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $tab_personel_ens_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '21%' or `grade_act_p` like '22%' or `grade_act_p` like '31%' or `grade_act_p` like '32%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_ens_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '21%' or `grade_act_p` like '22%' or `grade_act_p` like '31%' or `grade_act_p` like '32%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $tab_personel_ouv_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '33%' or `grade_act_p` like '34%' or `grade_act_p` like '35%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                 $tab_personel_ouv_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '33%' or `grade_act_p` like '34%' or `grade_act_p` like '35%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $persnel_adm_h = $tab_personel_adm_h[0]["nbr"];
                                $persnel_adm_f = $tab_personel_adm_f[0]["nbr"];
                                $persnel_adm_hf= $persnel_adm_h+$persnel_adm_f;

                                $persnel_ens_h = $tab_personel_ens_h[0]["nbr"];
                                $persnel_ens_f = $tab_personel_ens_f[0]["nbr"];
                                $persnel_ens_hf= $persnel_ens_h+$persnel_ens_f;

                                $persnel_ouv_h = $tab_personel_ouv_h[0]["nbr"];
                                $persnel_ouv_f = $tab_personel_ouv_f[0]["nbr"];
                                $persnel_ouv_hf= $persnel_ouv_h+$persnel_ouv_f;

                                //totaux personnels
                                $_total_gen_persnel_adm_f_mat = $_total_gen_persnel_adm_f_mat + $persnel_adm_f;
                                $_total_gen_persnel_adm_h_mat = $_total_gen_persnel_adm_h_mat + $persnel_adm_h;
                                $_total_gen_persnel_adm_hf_mat = $_total_gen_persnel_adm_hf_mat + $persnel_adm_hf;

                                $_total_gen_persnel_ens_f_mat = $_total_gen_persnel_ens_f_mat + $persnel_ens_f;
                                $_total_gen_persnel_ens_h_mat = $_total_gen_persnel_ens_h_mat + $persnel_ens_h;
                                $_total_gen_persnel_ens_hf_mat = $_total_gen_persnel_ens_hf_mat + $persnel_ens_hf;


                                $_total_gen_persnel_ouv_f_mat = $_total_gen_persnel_ouv_f_mat + $persnel_ouv_f;
                                $_total_gen_persnel_ouv_h_mat = $_total_gen_persnel_ouv_h_mat + $persnel_ouv_h;
                                $_total_gen_persnel_ouv_hf_mat = $_total_gen_persnel_ouv_hf_mat + $persnel_ouv_hf;

                               


                                


                                 echo "<tr>
                                        <td>$nbr</td>
                                        <td>$matricule</td>
                                        <td></td>
                                        <td>$nom_sous_div</td>
                                        <td>$nom_ecole</td>
                                        <td>$str_aut</td>
                                        <td>$str_org</td>
                                        <td>$tot_eff_G</td>
                                        <td>$tot_eff_F</td>
                                        <td>$tot_eff_GF</td>
                                        <td>$persnel_adm_h</td>
                                        <td>$persnel_adm_f</td>
                                        <td>$persnel_adm_hf</td>
                                        <td>$persnel_ens_h</td>
                                        <td>$persnel_ens_f</td>
                                        <td>$persnel_ens_hf</td>
                                        <td>$persnel_ouv_h</td>
                                        <td>$persnel_ouv_f</td>
                                        <td>$persnel_ouv_hf</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>";
                                    //break;
                                    $test_mat = 1;
                                    $nbr++;
                                    continue;
                              }
                              
                              if ($test_mat == 1 ) {
                                 echo "<tr class='tr'>
                                        <td colspan='5'>SOUS TOTAL MATERNELLE</td>
                                        <td>$_total_gen_str_aut_mat</td>
                                        <td>$_total_gen_str_org_mat</td>
                                        <td>$_total_gen_tot_eff_G_mat</td>
                                        <td>$_total_gen_tot_eff_F_mat</td>
                                        <td>$_total_gen_tot_eff_GF_mat</td>
                                        <td>$_total_gen_persnel_adm_h_mat</td>
                                        <td>$_total_gen_persnel_adm_f_mat</td>
                                        <td>$_total_gen_persnel_adm_hf_mat</td>
                                        <td>$_total_gen_persnel_ens_h_mat</td>
                                        <td>$_total_gen_persnel_ens_f_mat</td>
                                        <td>$_total_gen_persnel_ens_hf_mat</td>
                                        <td>$_total_gen_persnel_ouv_h_mat</td>
                                        <td>$_total_gen_persnel_ouv_f_mat</td>
                                        <td>$_total_gen_persnel_ouv_hf_mat</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>"; 
                                    $nbr = 1;
                                    $test_mat++;
                              }
                              

                              if ($ecole["id_niveau"] == "Primaire") {
                                //CALCUL NBRE CLASS ORG MATERNELLE
                              $tab_str_org1 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "1");
                              $tab_str_org2 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "2");
                              $tab_str_org3 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "3");
                              $tab_str_org4 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "4");
                              $tab_str_org5 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "5");
                              $tab_str_org6 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "6");
                              $str_org1 = 0;
                              $str_org2 = 0;
                              $str_org3 = 0;
                              $str_org4 = 0;
                              $str_org5 = 0;
                              $str_org6 = 0;


                              if(count($tab_str_org1)>0 and count($tab_str_org2)>0 and count($tab_str_org3)>0 )
                              {
                                $str_org1 = $tab_str_org1[0]["nbr_structure"];
                                $str_org2 = $tab_str_org2[0]["nbr_structure"];
                                $str_org3 = $tab_str_org3[0]["nbr_structure"];
                              }
                              if(count($tab_str_org4)>0 and count($tab_str_org5)>0 and count($tab_str_org6)>0 )
                              {
                                $str_org4 = $tab_str_org4[0]["nbr_structure"];
                                $str_org5 = $tab_str_org5[0]["nbr_structure"];
                                $str_org6 = $tab_str_org6[0]["nbr_structure"];
                              }
                              $str_org = $str_org1+$str_org2+$str_org3+$str_org4+$str_org5+$str_org6;

                              //total general
                              $_total_gen_str_org_pri = $_total_gen_str_org_pri + $str_org;

                              //structure aut
                                $tab_str_aut1 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "1");
                                $tab_str_aut2 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "2");
                                $tab_str_aut3 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "3");
                                $tab_str_aut4 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "4");
                                $tab_str_aut5 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "5");
                                $tab_str_aut6 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "6");
                                $str_aut1 = 0;
                                $str_aut2 = 0;
                                $str_aut3 = 0;
                                $str_aut4 = 0;
                                $str_aut5 = 0;
                                $str_aut6 = 0;


                                if(count($tab_str_aut1)>0 and count($tab_str_aut2)>0 and count($tab_str_aut3)>0 )
                                {
                                  $str_aut1 = $tab_str_aut1[0]["nbr_structure"];
                                  $str_aut2 = $tab_str_aut2[0]["nbr_structure"];
                                  $str_aut3 = $tab_str_aut3[0]["nbr_structure"];
                                }
                                if(count($tab_str_aut4)>0 and count($tab_str_aut5)>0 and count($tab_str_aut6)>0 )
                                {
                                  $str_aut4 = $tab_str_aut4[0]["nbr_structure"];
                                  $str_aut5 = $tab_str_aut5[0]["nbr_structure"];
                                  $str_aut6 = $tab_str_aut6[0]["nbr_structure"];
                                }
                                $str_aut = $str_aut1+$str_aut2+$str_aut3+$str_aut4+$str_aut5+$str_aut6;

                                 //total general
                                $_total_gen_str_aut_pri = $_total_gen_str_aut_pri + $str_aut;

                                //effectif eleves
                                $eff_G1 = 0;
                                $eff_F1 = 0;
                                $eff_G2 = 0;
                                $eff_F2 = 0;
                                $eff_G3 = 0;
                                $eff_F3 = 0;
                                $eff_G4 = 0;
                                $eff_F4 = 0;
                                $eff_G5 = 0;
                                $eff_F5 = 0;
                                $eff_G6 = 0;
                                $eff_F6 = 0;

                                $eff_GF1 = 0;
                                $eff_GF2 = 0;
                                $eff_GF3 = 0;
                                $eff_GF4 = 0;
                                $eff_GF5 = 0;
                                $eff_GF6 = 0;

      $tab_ecole_pri = query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"1");
      $tab_ecole_pri2 = query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"2");
      $tab_ecole_pri3= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"3");
      $tab_ecole_pri4= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"4");
      $tab_ecole_pri5= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"5");
      $tab_ecole_pri6= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"6");

      if (count($tab_ecole_pri) == 1 && count($tab_ecole_pri2) == 1 && count($tab_ecole_pri3) == 1 && count($tab_ecole_pri4) == 1 && count($tab_ecole_pri5) == 1 && count($tab_ecole_pri6) == 1) {
                                            # code...
        $eff_F1 =  $tab_ecole_pri[0]["age_6ansF"] + $tab_ecole_pri[0]["age_6F"] +$tab_ecole_pri[0]["age_7a10ansF"] + $tab_ecole_pri[0]["age_11ansF"]+$tab_ecole_pri[0]["age_plus11ansF"];

        $eff_G1 =$tab_ecole_pri[0]["age_6ansG"] + $tab_ecole_pri[0]["age_6G"] +$tab_ecole_pri[0]["age_7a10ansG"] + $tab_ecole_pri[0]["age_11ansG"]+$tab_ecole_pri[0]["age_plus11ansG"];

        $eff_F2 =$tab_ecole_pri2[0]["age_6ansF"] + $tab_ecole_pri2[0]["age_6F"] +$tab_ecole_pri2[0]["age_7a10ansF"] + $tab_ecole_pri2[0]["age_11ansF"]+$tab_ecole_pri2[0]["age_plus11ansF"];

        $eff_G2 =$tab_ecole_pri2[0]["age_6ansG"] + $tab_ecole_pri2[0]["age_6G"] +$tab_ecole_pri2[0]["age_7a10ansG"] + $tab_ecole_pri2[0]["age_11ansG"]+$tab_ecole_pri2[0]["age_plus11ansG"];

         $eff_F3 = $tab_ecole_pri3[0]["age_6ansF"] + $tab_ecole_pri3[0]["age_6F"] +$tab_ecole_pri3[0]["age_7a10ansF"] + $tab_ecole_pri3[0]["age_11ansF"]+$tab_ecole_pri3[0]["age_plus11ansF"];

        $eff_G3 =$tab_ecole_pri3[0]["age_6ansG"] + $tab_ecole_pri3[0]["age_6G"] +$tab_ecole_pri3[0]["age_7a10ansG"] + $tab_ecole_pri3[0]["age_11ansG"]+$tab_ecole_pri3[0]["age_plus11ansG"];

        $eff_F4 =$tab_ecole_pri4[0]["age_6ansF"] + $tab_ecole_pri4[0]["age_6F"] +$tab_ecole_pri4[0]["age_7a10ansF"] + $tab_ecole_pri4[0]["age_11ansF"]+$tab_ecole_pri4[0]["age_plus11ansF"];

        $eff_G4 =$tab_ecole_pri4[0]["age_6ansG"] + $tab_ecole_pri4[0]["age_6G"] +$tab_ecole_pri4[0]["age_7a10ansG"] + $tab_ecole_pri4[0]["age_11ansG"]+$tab_ecole_pri4[0]["age_plus11ansG"];

        $eff_F5 = $tab_ecole_pri5[0]["age_6ansF"] + $tab_ecole_pri5[0]["age_6F"] +$tab_ecole_pri5[0]["age_7a10ansF"] + $tab_ecole_pri5[0]["age_11ansF"]+$tab_ecole_pri5[0]["age_plus11ansF"];

        $eff_G5 =$tab_ecole_pri5[0]["age_6ansG"] + $tab_ecole_pri5[0]["age_6G"] +$tab_ecole_pri5[0]["age_7a10ansG"] + $tab_ecole_pri5[0]["age_11ansG"]+$tab_ecole_pri5[0]["age_plus11ansG"];

        $eff_F6 =$tab_ecole_pri6[0]["age_6ansF"] + $tab_ecole_pri6[0]["age_6F"] +$tab_ecole_pri6[0]["age_7a10ansF"] + $tab_ecole_pri6[0]["age_11ansF"]+$tab_ecole_pri6[0]["age_plus11ansF"];

        $eff_G6 =$tab_ecole_pri6[0]["age_6ansG"] + $tab_ecole_pri6[0]["age_6G"] +$tab_ecole_pri6[0]["age_7a10ansG"] + $tab_ecole_pri6[0]["age_11ansG"]+$tab_ecole_pri6[0]["age_plus11ansG"];
      }
                                $eff_GF1 = $eff_F1 + $eff_G1;
                                $eff_GF2 = $eff_F2 + $eff_G2;
                                $eff_GF3 = $eff_F3 + $eff_G3;
                                $eff_GF4 = $eff_F4 + $eff_G4;
                                $eff_GF5 = $eff_F5 + $eff_G5;
                                $eff_GF6 = $eff_F6 + $eff_G6;

                                //TOTAUX SOMMATION
                                $tot_eff_G = $eff_G1 + $eff_G2 + $eff_G3 + $eff_G4 + $eff_G5 +$eff_G6 ;
                                $tot_eff_F = $eff_F1 + $eff_F2 + $eff_F3 + $eff_F4 + $eff_F5 +$eff_F6 ;
                                $tot_eff_GF = $eff_GF1 + $eff_GF2 + $eff_GF3 + $eff_GF4 + $eff_GF5 +$eff_GF6 ;

                                //totaux effectifs
                                $_total_gen_tot_eff_F_pri = $_total_gen_tot_eff_F_pri + $tot_eff_F;
                                $_total_gen_tot_eff_G_pri = $_total_gen_tot_eff_G_pri + $tot_eff_G;
                                $_total_gen_tot_eff_GF_pri = $_total_gen_tot_eff_GF_pri + $tot_eff_GF;
                                
                                //personneel
                                $persnel_adm_h = 0;
                                $persnel_adm_f = 0;
                                $persnel_adm_hf= 0;

                                $persnel_ens_h = 0;
                                $persnel_ens_f = 0;
                                $persnel_ens_hf= 0;

                                $persnel_ouv_h = 0;
                                $persnel_ouv_f = 0;
                                $persnel_ouv_hf= 0;

                                $tab_personel_adm_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '13%' or `grade_act_p` like '14%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_adm_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '13%' or `grade_act_p` like '14%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $tab_personel_ens_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '21%' or `grade_act_p` like '22%' or `grade_act_p` like '31%' or `grade_act_p` like '32%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_ens_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '21%' or `grade_act_p` like '22%' or `grade_act_p` like '31%' or `grade_act_p` like '32%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $tab_personel_ouv_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '33%' or `grade_act_p` like '34%' or `grade_act_p` like '35%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                 $tab_personel_ouv_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '33%' or `grade_act_p` like '34%' or `grade_act_p` like '35%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $persnel_adm_h = $tab_personel_adm_h[0]["nbr"];
                                $persnel_adm_f = $tab_personel_adm_f[0]["nbr"];
                                $persnel_adm_hf= $persnel_adm_h+$persnel_adm_f;

                                $persnel_ens_h = $tab_personel_ens_h[0]["nbr"];
                                $persnel_ens_f = $tab_personel_ens_f[0]["nbr"];
                                $persnel_ens_hf= $persnel_ens_h+$persnel_ens_f;

                                $persnel_ouv_h = $tab_personel_ouv_h[0]["nbr"];
                                $persnel_ouv_f = $tab_personel_ouv_f[0]["nbr"];
                                $persnel_ouv_hf= $persnel_ouv_h+$persnel_ouv_f;

                                //totaux personnels
                                $_total_gen_persnel_adm_f_pri = $_total_gen_persnel_adm_f_pri + $persnel_adm_f;
                                $_total_gen_persnel_adm_h_pri = $_total_gen_persnel_adm_h_pri + $persnel_adm_h;
                                $_total_gen_persnel_adm_hf_pri = $_total_gen_persnel_adm_hf_pri + $persnel_adm_hf;

                                $_total_gen_persnel_ens_f_pri = $_total_gen_persnel_ens_f_pri + $persnel_ens_f;
                                $_total_gen_persnel_ens_h_pri = $_total_gen_persnel_ens_h_pri + $persnel_ens_h;
                                $_total_gen_persnel_ens_hf_pri = $_total_gen_persnel_ens_hf_pri + $persnel_ens_hf;


                                $_total_gen_persnel_ouv_f_pri = $_total_gen_persnel_ouv_f_pri + $persnel_ouv_f;
                                $_total_gen_persnel_ouv_h_pri = $_total_gen_persnel_ouv_h_pri + $persnel_ouv_h;
                                $_total_gen_persnel_ouv_hf_pri = $_total_gen_persnel_ouv_hf_pri + $persnel_ouv_hf;

                                


                                 echo "<tr>
                                        <td>$nbr</td>
                                        <td>$matricule</td>
                                        <td></td>
                                        <td>$nom_sous_div</td>
                                        <td>$nom_ecole</td>
                                        <td>$str_aut</td>
                                        <td>$str_org</td>
                                        <td>$tot_eff_G</td>
                                        <td>$tot_eff_F</td>
                                        <td>$tot_eff_GF</td>
                                        <td>$persnel_adm_h</td>
                                        <td>$persnel_adm_f</td>
                                        <td>$persnel_adm_hf</td>
                                        <td>$persnel_ens_h</td>
                                        <td>$persnel_ens_f</td>
                                        <td>$persnel_ens_hf</td>
                                        <td>$persnel_ouv_h</td>
                                        <td>$persnel_ouv_f</td>
                                        <td>$persnel_ouv_hf</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>";
                                    $nbr++;
                              $test_pri = 1;
                                    continue;
                              }
                              
                              if ($test_pri == 1 ) {
                                echo "<tr class='tr'>
                                        <td colspan='5'>SOUS TOTAL PRIMAIRE</td>
                                         <td>$_total_gen_str_aut_pri</td>
                                        <td>$_total_gen_str_org_pri</td>
                                        <td>$_total_gen_tot_eff_G_pri</td>
                                        <td>$_total_gen_tot_eff_F_pri</td>
                                        <td>$_total_gen_tot_eff_GF_pri</td>
                                        <td>$_total_gen_persnel_adm_h_pri</td>
                                        <td>$_total_gen_persnel_adm_f_pri</td>
                                        <td>$_total_gen_persnel_adm_hf_pri</td>
                                        <td>$_total_gen_persnel_ens_h_pri</td>
                                        <td>$_total_gen_persnel_ens_f_pri</td>
                                        <td>$_total_gen_persnel_ens_hf_pri</td>
                                        <td>$_total_gen_persnel_ouv_h_pri</td>
                                        <td>$_total_gen_persnel_ouv_f_pri</td>
                                        <td>$_total_gen_persnel_ouv_hf_pri</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>"; 
                                    $nbr = 1;
                                     $test_pri++;
                              }
                             

                              if ($ecole["id_niveau"] == "Secondaire") {
                                 //CALCUL NBRE CLASS ORG MATERNELLE
                              $tab_str_org1 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "1");
                              $tab_str_org2 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "2");
                              $tab_str_org3 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "3");
                              $tab_str_org4 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "4");
                              $tab_str_org5 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "5");
                              $tab_str_org6 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "6");
                              $str_org1 = 0;
                              $str_org2 = 0;
                              $str_org3 = 0;
                              $str_org4 = 0;
                              $str_org5 = 0;
                              $str_org6 = 0;


                              if(count($tab_str_org1)>0 and count($tab_str_org2)>0 and count($tab_str_org3)>0 )
                              {
                                $str_org1 = $tab_str_org1[0]["nbr_structure"];
                                $str_org2 = $tab_str_org2[0]["nbr_structure"];
                                $str_org3 = $tab_str_org3[0]["nbr_structure"];
                              }
                              if(count($tab_str_org4)>0 and count($tab_str_org5)>0 and count($tab_str_org6)>0 )
                              {
                                $str_org4 = $tab_str_org4[0]["nbr_structure"];
                                $str_org5 = $tab_str_org5[0]["nbr_structure"];
                                $str_org6 = $tab_str_org6[0]["nbr_structure"];
                              }
                              $str_org = $str_org1+$str_org2+$str_org3+$str_org4+$str_org5+$str_org6;

                               //total general
                                $_total_gen_str_org_sec = $_total_gen_str_org_sec + $str_org;

                              //structure aut
                                $tab_str_aut1 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "1");
                                $tab_str_aut2 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "2");
                                $tab_str_aut3 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "3");
                                $tab_str_aut4 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "4");
                                $tab_str_aut5 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "5");
                                $tab_str_aut6 = query("SELECT * FROM `structure_autorisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "6");
                                $str_aut1 = 0;
                                $str_aut2 = 0;
                                $str_aut3 = 0;
                                $str_aut4 = 0;
                                $str_aut5 = 0;
                                $str_aut6 = 0;


                                if(count($tab_str_aut1)>0 and count($tab_str_aut2)>0 and count($tab_str_aut3)>0 )
                                {
                                  $str_aut1 = $tab_str_aut1[0]["nbr_structure"];
                                  $str_aut2 = $tab_str_aut2[0]["nbr_structure"];
                                  $str_aut3 = $tab_str_aut3[0]["nbr_structure"];
                                }
                                if(count($tab_str_aut4)>0 and count($tab_str_aut5)>0 and count($tab_str_aut6)>0 )
                                {
                                  $str_aut4 = $tab_str_aut4[0]["nbr_structure"];
                                  $str_aut5 = $tab_str_aut5[0]["nbr_structure"];
                                  $str_aut6 = $tab_str_aut6[0]["nbr_structure"];
                                }
                                $str_aut = $str_aut1+$str_aut2+$str_aut3+$str_aut4+$str_aut5+$str_aut6;

                                 //total general
                                $_total_gen_str_aut_sec = $_total_gen_str_aut_sec + $str_aut;

                                //effectif eleves
                                $eff_G1 = 0;
                                $eff_F1 = 0;
                                $eff_G2 = 0;
                                $eff_F2 = 0;
                                $eff_G3 = 0;
                                $eff_F3 = 0;
                                $eff_G4 = 0;
                                $eff_F4 = 0;
                                $eff_G5 = 0;
                                $eff_F5 = 0;
                                $eff_G6 = 0;
                                $eff_F6 = 0;

                                $eff_GF1 = 0;
                                $eff_GF2 = 0;
                                $eff_GF3 = 0;
                                $eff_GF4 = 0;
                                $eff_GF5 = 0;
                                $eff_GF6 = 0;

    $tab_ecole_sec=query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"1");
    $tab_ecole_sec2=query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"2");

      if ((count($tab_ecole_sec) == 1 && count($tab_ecole_sec2) == 1 )) {                                 
          $eff_F1 =$tab_ecole_sec[0]["effectif_F"];
          $eff_G1=$tab_ecole_sec[0]["effectif_G"];

          $eff_F2 =$tab_ecole_sec2[0]["effectif_F"];
          $eff_G2=$tab_ecole_sec2[0]["effectif_G"];
        }
        //recursivite des section
      $liste_section = query("SELECT DISTINCT `option` FROM `classe_secondaire_cl` WHERE `id_ecole` = ?",$id_ecole);
      if (count($liste_section) > 0) {
        foreach ($liste_section as $option) {
            $tab_cl_3 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$id_ecole, "3" , $option["option"]);
            $tab_cl_4 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$id_ecole, "4" , $option["option"]);
            $tab_cl_5 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$id_ecole, "5" , $option["option"]);
            $tab_cl_6 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ?) ",$id_ecole, "6" , $option["option"]);

            if(count($tab_cl_3) == 1 && count($tab_cl_4) == 1 && count($tab_cl_5) == 1 && count($tab_cl_6) == 1)
            {
                                       
                $eff_F3 =  $eff_F3 +$tab_cl_3[0]["effectif_F"];
                $eff_G3 = $eff_G3+  $tab_cl_3[0]["effectif_G"];

                $eff_F4 =  $eff_F4 +$tab_cl_4[0]["effectif_F"];
                $eff_G4 = $eff_G4+  $tab_cl_4[0]["effectif_G"];

                $eff_F5 =  $eff_F5 +$tab_cl_5[0]["effectif_F"];
                $eff_G5 = $eff_G5+  $tab_cl_5[0]["effectif_G"];

                $eff_F6 =  $eff_F6 +$tab_cl_6[0]["effectif_F"];
                $eff_G6 = $eff_G6+  $tab_cl_6[0]["effectif_G"];
              }
            }
          }
                                $eff_GF1 = $eff_F1 + $eff_G1;
                                $eff_GF2 = $eff_F2 + $eff_G2;
                                $eff_GF3 = $eff_F3 + $eff_G3;
                                $eff_GF4 = $eff_F4 + $eff_G4;
                                $eff_GF5 = $eff_F5 + $eff_G5;
                                $eff_GF6 = $eff_F6 + $eff_G6;

                                //TOTAUX SOMMATION
                                $tot_eff_G = $eff_G1 + $eff_G2 + $eff_G3 + $eff_G4 + $eff_G5 +$eff_G6 ;
                                $tot_eff_F = $eff_F1 + $eff_F2 + $eff_F3 + $eff_F4 + $eff_F5 +$eff_F6 ;
                                $tot_eff_GF = $eff_GF1 + $eff_GF2 + $eff_GF3 + $eff_GF4 + $eff_GF5 +$eff_GF6 ;

                                //totaux effectifs
                                $_total_gen_tot_eff_F_sec = $_total_gen_tot_eff_F_sec + $tot_eff_F;
                                $_total_gen_tot_eff_G_sec = $_total_gen_tot_eff_G_sec + $tot_eff_G;
                                $_total_gen_tot_eff_GF_sec = $_total_gen_tot_eff_GF_sec + $tot_eff_GF;


                                //personneel
                                $persnel_adm_h = 0;
                                $persnel_adm_f = 0;
                                $persnel_adm_hf= 0;

                                $persnel_ens_h = 0;
                                $persnel_ens_f = 0;
                                $persnel_ens_hf= 0;

                                $persnel_ouv_h = 0;
                                $persnel_ouv_f = 0;
                                $persnel_ouv_hf= 0;

                                $tab_personel_adm_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '13%' or `grade_act_p` like '14%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_adm_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '13%' or `grade_act_p` like '14%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $tab_personel_ens_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '21%' or `grade_act_p` like '22%' or `grade_act_p` like '31%' or `grade_act_p` like '32%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_ens_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '21%' or `grade_act_p` like '22%' or `grade_act_p` like '31%' or `grade_act_p` like '32%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $tab_personel_ouv_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '33%' or `grade_act_p` like '34%' or `grade_act_p` like '35%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                 $tab_personel_ouv_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '33%' or `grade_act_p` like '34%' or `grade_act_p` like '35%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $persnel_adm_h = $tab_personel_adm_h[0]["nbr"];
                                $persnel_adm_f = $tab_personel_adm_f[0]["nbr"];
                                $persnel_adm_hf= $persnel_adm_h+$persnel_adm_f;

                                $persnel_ens_h = $tab_personel_ens_h[0]["nbr"];
                                $persnel_ens_f = $tab_personel_ens_f[0]["nbr"];
                                $persnel_ens_hf= $persnel_ens_h+$persnel_ens_f;

                                $persnel_ouv_h = $tab_personel_ouv_h[0]["nbr"];
                                $persnel_ouv_f = $tab_personel_ouv_f[0]["nbr"];
                                $persnel_ouv_hf= $persnel_ouv_h+$persnel_ouv_f;

                                //totaux personnels
                                $_total_gen_persnel_adm_f_sec = $_total_gen_persnel_adm_f_sec + $persnel_adm_f;
                                $_total_gen_persnel_adm_h_sec = $_total_gen_persnel_adm_h_sec + $persnel_adm_h;
                                $_total_gen_persnel_adm_hf_sec = $_total_gen_persnel_adm_hf_sec + $persnel_adm_hf;

                                $_total_gen_persnel_ens_f_sec = $_total_gen_persnel_ens_f_sec + $persnel_ens_f;
                                $_total_gen_persnel_ens_h_sec = $_total_gen_persnel_ens_h_sec + $persnel_ens_h;
                                $_total_gen_persnel_ens_hf_sec = $_total_gen_persnel_ens_hf_sec + $persnel_ens_hf;


                                $_total_gen_persnel_ouv_f_sec = $_total_gen_persnel_ouv_f_sec + $persnel_ouv_f;
                                $_total_gen_persnel_ouv_h_sec = $_total_gen_persnel_ouv_h_sec + $persnel_ouv_h;
                                $_total_gen_persnel_ouv_hf_sec = $_total_gen_persnel_ouv_hf_sec + $persnel_ouv_hf;

                                


                                 echo "<tr>
                                        <td>$nbr</td>
                                        <td>$matricule</td>
                                        <td></td>
                                        <td>$nom_sous_div</td>
                                        <td>$nom_ecole</td>
                                        <td>$str_aut</td>
                                        <td>$str_org</td>
                                        <td>$tot_eff_G</td>
                                        <td>$tot_eff_F</td>
                                        <td>$tot_eff_GF</td>
                                        <td>$persnel_adm_h</td>
                                        <td>$persnel_adm_f</td>
                                        <td>$persnel_adm_hf</td>
                                        <td>$persnel_ens_h</td>
                                        <td>$persnel_ens_f</td>
                                        <td>$persnel_ens_hf</td>
                                        <td>$persnel_ouv_h</td>
                                        <td>$persnel_ouv_f</td>
                                        <td>$persnel_ouv_hf</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>";
                                  $test_sec = 1;
                                  $nbr++;
                                    continue;
                              }
                               
                              

                             
                             
                            }
                            if ($test_sec == 1 ) {
                                echo "<tr class='tr'>
                                        <td colspan='5'>SOUS TOTAL SECONDIARE</td>
                                         <td>$_total_gen_str_aut_sec</td>
                                        <td>$_total_gen_str_org_sec</td>
                                        <td>$_total_gen_tot_eff_G_sec</td>
                                        <td>$_total_gen_tot_eff_F_sec</td>
                                        <td>$_total_gen_tot_eff_GF_sec</td>
                                        <td>$_total_gen_persnel_adm_h_sec</td>
                                        <td>$_total_gen_persnel_adm_f_sec</td>
                                        <td>$_total_gen_persnel_adm_hf_sec</td>
                                        <td>$_total_gen_persnel_ens_h_sec</td>
                                        <td>$_total_gen_persnel_ens_f_sec</td>
                                        <td>$_total_gen_persnel_ens_hf_sec</td>
                                        <td>$_total_gen_persnel_ouv_h_sec</td>
                                        <td>$_total_gen_persnel_ouv_f_sec</td>
                                        <td>$_total_gen_persnel_ouv_hf_sec</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>"; 
                                    $test_sec++;
                              }

                            $_total_gen_str_aut = $_total_gen_str_aut_mat+$_total_gen_str_aut_pri+$_total_gen_str_aut_sec;
                            $_total_gen_str_org = $_total_gen_str_org_mat+$_total_gen_str_org_pri+$_total_gen_str_org_sec;
                            $_total_gen_tot_eff_G = $_total_gen_tot_eff_G_mat+$_total_gen_tot_eff_G_pri+$_total_gen_tot_eff_G_sec;
                            $_total_gen_tot_eff_F = $_total_gen_tot_eff_F_mat+$_total_gen_tot_eff_F_pri+$_total_gen_tot_eff_F_sec;
                            $_total_gen_tot_eff_GF = $_total_gen_tot_eff_GF_mat+$_total_gen_tot_eff_GF_pri+$_total_gen_tot_eff_GF_sec;
                            $_total_gen_persnel_adm_h = $_total_gen_persnel_adm_h_mat+$_total_gen_persnel_adm_h_pri+$_total_gen_persnel_adm_h_sec;
                            $_total_gen_persnel_adm_f = $_total_gen_persnel_adm_f_mat+$_total_gen_persnel_adm_f_pri+$_total_gen_persnel_adm_f_sec;
                            $_total_gen_persnel_adm_hf = $_total_gen_persnel_adm_hf_mat+$_total_gen_persnel_adm_hf_pri+$_total_gen_persnel_adm_hf_sec;
                            $_total_gen_persnel_ens_h = $_total_gen_persnel_ens_h_mat+$_total_gen_persnel_ens_h_pri+$_total_gen_persnel_ens_h_sec;
                            $_total_gen_persnel_ens_f = $_total_gen_persnel_ens_f_mat+$_total_gen_persnel_ens_f_pri+$_total_gen_persnel_ens_f_sec;
                            $_total_gen_persnel_ens_hf = $_total_gen_persnel_ens_hf_mat+$_total_gen_persnel_ens_hf_pri+$_total_gen_persnel_ens_hf_sec;
                            $_total_gen_persnel_ouv_h = $_total_gen_persnel_ouv_h_mat+$_total_gen_persnel_ouv_h_pri+$_total_gen_persnel_ouv_h_sec;
                            $_total_gen_persnel_ouv_f = $_total_gen_persnel_ouv_f_mat+$_total_gen_persnel_ouv_f_pri+$_total_gen_persnel_ouv_f_sec;
                            $_total_gen_persnel_ouv_hf = $_total_gen_persnel_ouv_hf_mat+$_total_gen_persnel_ouv_hf_pri+$_total_gen_persnel_ouv_hf_sec;
                           
                            
                                
                                for ($i=0; $i <1 ; $i++) { 
                                    echo "<tr class='tr'>
                                        
                                        <td colspan='5'>TOTAL GENERAL</td>
                                        <td>$_total_gen_str_aut</td>
                                        <td>$_total_gen_str_org</td>
                                        <td>$_total_gen_tot_eff_G</td>
                                        <td>$_total_gen_tot_eff_F</td>
                                        <td>$_total_gen_tot_eff_GF</td>
                                        <td>$_total_gen_persnel_adm_h</td>
                                        <td>$_total_gen_persnel_adm_f</td>
                                        <td>$_total_gen_persnel_adm_hf</td>
                                        <td>$_total_gen_persnel_ens_h</td>
                                        <td>$_total_gen_persnel_ens_f</td>
                                        <td>$_total_gen_persnel_ens_hf</td>
                                        <td>$_total_gen_persnel_ouv_h</td>
                                        <td>$_total_gen_persnel_ouv_f</td>
                                        <td>$_total_gen_persnel_ouv_hf</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>";
                                    
                                }
                                
                            echo "</tbody>
                        </table>";
     
      

        
    }
    else
    {
		$table_niveau = query("SELECT * FROM niveau WHERE 1");
        render("personnel_par_sex_templates.php", ["title" => "Personnel administratif, enseignants et ouvrier par sèxe","table_niveau"=>$table_niveau]);
	}
?>