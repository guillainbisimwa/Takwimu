<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
      $nom_ecole = $_POST["n"];
      //EFFECTIF DE LA CALSSE DE L4ENSEIGNANT 
      //$eff_class_ens = 0;
      //echo $nom_ecole;
      $table_ecole = query("SELECT * FROM ecole2  WHERE nom_ecole = ?",$_POST["n"]);
      $id_ecole = $table_ecole[0]["id"];
      $liste_option = $table_ecole[0]["liste_option"];
      
      @$tab_option = split("[**]+", $liste_option);
      $sec_opt ="";
      foreach ($tab_option as $value) {
        if ($value != "") {
        //echo $ii ." ".$value." <br>";
          $table_option = query("SELECT * FROM option WHERE nom_option = ?", $value);
          $id_option = $table_option[0]["belongs_to"];

          $table_section = query("SELECT * FROM section WHERE id = ?", $id_option);
          $nom_section = $table_section[0]["nom_section"];
          $sec_opt = strtoupper($nom_section." ".$value.",".$sec_opt);
        }
      }

      $table_ecole2 = query("SELECT ecole2.*, sous_div.nom_sous_div, paroisse2.nom_paroisse, coordination_sp.nom_coord_sp, diocese.nom_diocese FROM ecole2, sous_div, paroisse2, coordination_sp, diocese WHERE ecole2.id = ? and ecole2.belongs_to = sous_div.id AND sous_div.belongs_to = paroisse2.id AND paroisse2.belongs_to = coordination_sp.id AND coordination_sp.belongs_to = diocese.id",$id_ecole);
      
      //echo $table_ecole2[0]["nom_ecole"]."<br>".$table_ecole2[0]["nom_paroisse"]."<br>".$table_ecole2[0]["nom_sous_div"]."<br>".$table_ecole2[0]["nom_coord_sp"]."<br>";

      $_nom_ecole = strtoupper($table_ecole2[0]["nom_ecole"]);
      $_matricule = strtoupper($table_ecole2[0]["matricule"]);
      $_compte_bancaire = strtoupper($table_ecole2[0]["compte_bancaire"]);
      $_nom_sous_div = strtoupper($table_ecole2[0]["nom_sous_div"]);
      $_arrete_agr = strtoupper($table_ecole2[0]["arrete_agr"]);
      $_adress_exact = strtoupper($table_ecole2[0]["adress_exact"]);
      $_nom_paroisse = strtoupper($table_ecole2[0]["nom_paroisse"]);
      $_nom_coord_sp = strtoupper($table_ecole2[0]["nom_coord_sp"]);
      $_id_niveau = strtoupper($table_ecole2[0]["id_niveau"]);

      //structure org
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

      //effectif fille et effectif garcon
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

      //TOTAUX
      $tot_eff_G = 0;
      $tot_eff_F = 0;
      $tot_eff_GF = 0;
      


      if ($_id_niveau == "MATERNELLE") {
        $tab_ecole_mat=query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class =?",$id_ecole,"1");
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

      }
      elseif ($_id_niveau == "PRIMAIRE") {
        //primaire
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
    }
    elseif ($_id_niveau == "SECONDAIRE") {
       //SECONDAIRE
      $tab_ecole_sec = query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"1");
      $tab_ecole_sec2 = query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ?",$id_ecole,"2");

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

    //efectif de la calsse de lk enseignat
    //eff_class_ens



    

      



      $ii = 1;
      echo '<div id="ecolecl_form" class="row p-10">';
       $limite_ligne = 1;
       //echo '<h3 class="p-20 center_naledi">Section: '.$nom_section.', Option: '.$value.'</h3>';
       //N° MINEPSP/CAB/MIN/501/686/95 du 16/03/1995
       $table_personnel_en_place = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ?",$id_ecole);



                       echo "<table id='affiche_relev_stat_table'  class='naledi_yellow table-hover table-bordered  table-responsive pointInputTable table-condensed' >
                        <thead>
                            <tr class='warning'>
                                    <th colspan='3' rowspan='9'>
                                        PROVINCE DU NORD KIVU<br>
                                        COORDINATION SP: $_nom_coord_sp<br>
                                        S/DIVISION DE $_nom_sous_div<br>
                                        TER. D'IMPLANTATION: $_nom_sous_div<br>
                                        MODE DE GESTION: CONVENTIONNE CATHOLIQUE<br>
                                        COMPTE BANCAIRE N° $_compte_bancaire<br>
                                        BANQUE BCDC<br>
                                        SIEGE GOMA<br>
                                        DIOCESE DE GOMA


                                    </th>
                                    <th>ANNEE ETUDE</th>
                                    <th colspan='2'>NBRE CLASSE</th>
                                    <th colspan='3'>ELEVES</th>
                                    <th colspan='10' rowspan='9'>
                                        ECOLE: $_nom_ecole<br>
                                        ARRETE D'AGREMENT: $_arrete_agr <br>
                                        NIVEAU: $_id_niveau" .
                                        ($_id_niveau == "SECONDAIRE" ? " OPTION $sec_opt" : '' ).
                                        "<br>
                                        MATRICULE: $_matricule<br>
                                        ADRESSE EXACTE: PAROISSE DE $_nom_paroisse / $_adress_exact<br>
                                        ELEVES INTERNES:<br>
                                        PERSONNEL AUTORISE:".$table_personnel_en_place[0]["nbr"]."<br>
                                        PERSONNEL EN PLACE: <br>


                                    </th>
                                  
                                    
                                    
                                    

                            </tr>
                            
                            <tr class='warning'>
                                <th></th>
                                <th>AUTOR</th>
                                <th>ORGAN</th>
                                <th>G</th>
                                <th>F</th>
                                <th class='tr'>TOT</th>
                            </tr>
                            <tr class='warning'>
                                <th>1è</th>
                                <th>$str_org1</th>
                                <th>$str_aut1</th>
                                <th>$eff_G1</th>
                                <th>$eff_F1</th>
                                <th class='tr'>$eff_GF1</th>
                            </tr>
                            <tr class='warning'>
                                <th>2è</th>
                                <th>$str_org2</th>
                                <th>$str_aut2</th>
                                <th>$eff_G2</th>
                                <th>$eff_F2</th>
                                <th class='tr'>$eff_GF2</th>
                            </tr>
                            <tr class='warning'>
                                <th>3è</th>
                                <th>$str_org3</th>
                                <th>$str_aut3</th>
                                <th>$eff_G3</th>
                                <th>$eff_F3</th>
                                <th class='tr'>$eff_GF3</th>
                            </tr>
                            <tr class='warning'>
                                <th>4è</th>
                                <th>$str_org4</th>
                                <th>$str_aut4</th>
                                <th>$eff_G4</th>
                                <th>$eff_F4</th>
                                <th class='tr'>$eff_GF4</th>
                            </tr>
                            <tr class='warning'>
                                <th>5è</th>
                                <th>$str_org5</th>
                                <th>$str_aut5</th>
                                <th>$eff_G5</th>
                                <th>$eff_F5</th>
                                <th class='tr'>$eff_GF5</th>
                            </tr>
                            <tr class='warning'>
                                <th>6è</th>
                                <th>$str_org6</th>
                                <th>$str_aut6</th>
                                <th>$eff_G6</th>
                                <th>$eff_F6</th>
                                <th class='tr'>$eff_GF6</th>
                            </tr>
                            <tr class='warning tr'>
                                <th>TOT</th>
                                <th>$str_org</th>
                                <th>$str_aut</th>
                                <th>$tot_eff_G</th>
                                <th>$tot_eff_F</th>
                                <th>$tot_eff_GF</th>
                            </tr>

                            
                        </thead>
                            <tbody>
                                <tr>
                                    <td>N°</td>
                                    <td>MATRICULE</td>
                                    <td>NOM_ET_POSTNOM</td>
                                    <td>NAT</td>
                                    <td>DATE NAIS</td>
                                    <td>QUAL DIP</td>
                                    <td>DATE DIP</td>
                                    <td>DATE ENG</td>
                                    <td>DATE PROM</td>
                                    <td>AN PREST</td>
                                    <td>GRADE ACT</td>
                                    <td>GRADE ANC</td>
                                    <td>SEXE</td>
                                    <td>SIFA</td>
                                    <td>CONF</td>
                                    <td>FONCT</td>
                                    <td>CLASS</td>
                                    <td>EFF</td>
                                    <td>SIGN</td>
                                </tr>";
                                $table_personnel = query("SELECT *,DATE_FORMAT(date_nais_p, '%d-%m-%Y') as date_nais_p2, DATE_FORMAT(date_dip, '%Y') as date_dip2, DATE_FORMAT(date_pro_p, '%Y') as date_pro_p2, DATE_FORMAT(date_eng_p, '%d-%m-%Y') as date_eng_p2   FROM personnel WHERE ecole_affect = ?",$id_ecole);



                                    $nbr_p = 0;
                                    foreach ($table_personnel as $row_p) 
                                    {
                                      $eff_class_ens = 0;
                                      if ($row_p["id_class"] == 1) {
                                        $eff_class_ens = $eff_GF1;
                                      }
                                      elseif ($row_p["id_class"] == 2) {
                                        $eff_class_ens = $eff_GF2;
                                      }
                                      elseif ($row_p["id_class"] == 3) {
                                        $eff_class_ens = $eff_GF3;
                                      }
                                      elseif ($row_p["id_class"] == 4) {
                                        $eff_class_ens = $eff_GF4;
                                      }
                                      elseif ($row_p["id_class"] == 5) {
                                        $eff_class_ens = $eff_GF5;
                                      }
                                      elseif ($row_p["id_class"] == 6) {
                                        $eff_class_ens = $eff_GF6;
                                      }
                                      $nbr_p++;
                                    echo "<tr>
                                      <td>$nbr_p</td>
                                      <td>".$row_p["matricule_p"]."</td>
                                      <td>".$row_p["nom_p"]."</td>
                                      <td>".$row_p["nat_p"]."</td>
                                      <td>".$row_p["date_nais_p2"]."</td>
                                      <td>".$row_p["qualdip_p"]."</td>
                                      <td>".$row_p["date_dip2"]."</td>
                                      <td>".$row_p["date_eng_p2"]."</td>
                                      <td>".($row_p["date_pro_p2"] == "0000"? '': $row_p["date_pro_p2"] )."</td>
                                      <td>".$row_p["annee_pre_p"]."</td>
                                      <td>".$row_p["grade_act_p"]."</td>
                                      <td>".$row_p["grade_anc_p"]."</td>
                                      <td>".$row_p["sex_p"]."</td>
                                      <td>".$row_p["sifa_p"]."</td>
                                      <td>".$row_p["conf_p"]."</td>
                                      <td>".$row_p["fonct_p"]."</td>
                                      <td>".($row_p["id_class"] == "0"? '-': $row_p["id_class"].'è' )."</td>
                                      <td>".($eff_class_ens == "0"? '-': $eff_class_ens )."</td>
                                      <td></td>
                                    </tr>";

                                    }

                              
                                /*for ($i=0; $i < 10; $i++) { 
                                echo '<tr>
                                    <td>0</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                    <td>s</td>
                                </tr>';
                                }*/
                                
                            echo"</tbody>
                        </table>
                        </div>";


        
    }
    else
    {
		$table_niveau = query("SELECT * FROM niveau WHERE 1");
        render("mise_en_place_templates.php", ["title" => "Mise en place du personnel","table_niveau"=>$table_niveau]);
	}
?>