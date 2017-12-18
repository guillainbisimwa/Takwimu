<?php 
    
    if(isset($_SESSION['current_session'])){
        if($_SESSION['current_session'] == "Analyste")
        {
            //header("Location: " . "logout.php");
        }
        if ($_SESSION['current_session'] == "Conseiller d'enseignement") {
             header("Location: " . "logout.php");   
         } 
        
    }
    else  header("Location: " . "logout.php");
    
?>
<header id="header" class="clearfix" data-ma-theme="blue">
            <ul class="h-inner">
                <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>

                <li class="hidden-xs">
                    <a href="index.html" class="m-l-10">
                        <img src="img/demo/logo.png" alt="">
                    </a>
                </li>

                <li class="pull-right">
                    <ul class="hi-menu">

                        <li data-ma-action="search-open">
                            <a href="#"><i class="him-icon zmdi zmdi-search"></i></a>
                        </li>

                        
                        
                        
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="#"><i class="him-icon zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu dm-icon pull-right">
                                <li class="skin-switch hidden-xs">
                                    <span class="ss-skin bgm-lightblue" data-ma-action="change-skin" data-ma-skin="lightblue"></span>
                                    <span class="ss-skin bgm-bluegray" data-ma-action="change-skin" data-ma-skin="bluegray"></span>
                                    <span class="ss-skin bgm-cyan" data-ma-action="change-skin" data-ma-skin="cyan"></span>
                                    <span class="ss-skin bgm-teal" data-ma-action="change-skin" data-ma-skin="teal"></span>
                                    <span class="ss-skin bgm-orange" data-ma-action="change-skin" data-ma-skin="orange"></span>
                                    <span class="ss-skin bgm-blue" data-ma-action="change-skin" data-sma-kin="blue"></span>
                                </li>
                                <li class="divider hidden-xs"></li>
                                <li class="hidden-xs">
                                    <a data-ma-action="fullscreen" href="#"><i class="zmdi zmdi-fullscreen"></i> Plein ecran</a>
                                </li>
                                <li>
                                    <a data-ma-action="clear-localstorage" href="#"><i class="zmdi zmdi-delete"></i>Effacer les fichiers locaux</a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-account"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="logout.php"><i class="zmdi zmdi-settings text-danger"></i>Deconnection</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
            </ul>

            <!-- Top Search Content -->
            <div class="h-search-wrap">
                <div class="hsw-inner">
                    <i class="hsw-close zmdi zmdi-arrow-left" data-ma-action="search-close"></i>
                    <input type="text">
                </div>
            </div>
        </header>
<section id="main">
    <aside id="sidebar" class="sidebar c-overflow">
        <div class="s-profile">
            <a href="#" data-ma-action="profile-menu-toggle">
                <div class="sp-pic">

<?php if(isset($_SESSION['photo'])): 
                                //echo $_SESSION['identite'];
								echo '<img src="img/'.$_SESSION['photo'].'" alt="">';
                             ?>
							 <?php else: ?>
                        <!--b style="color:red" > echec: votre session n existe pas </b><br-->
                            
                           <img src="img/logo.png" alt="">
                        
                    <?php endif; ?>
                </div>
                        <div class="sp-info">
                            
                           
                            
                             <?php if(isset($_SESSION['identite'])): 
                                echo $_SESSION['identite'];
                             ?>
                
                            
                        
                         <?php else: ?>
                        <!--b style="color:red" > echec: votre session n existe pas </b><br-->
                            
                           <b class="text-danger">Utilisateur inconnue</b>
                        
                    <?php endif; ?>
                            

                            <i class="zmdi zmdi-face"></i>
                        </div>
                    </a>

                    
                </div>

                <ul class="main-menu">
                    <li><a href="admin.php"><i class="zmdi zmdi-home"></i> Acceuil</a></li>
<?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin"): ?>
                    <li class="sub-menu ">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-settings"></i> Configurations</a>

                        <ul>
                            <li ><a  href="institution.php">Institution</a></li>
                            <li ><a href="diocese.php">Diocèse</a></li>
                            <li><a href="coordination_sp.php">Coordination sous provinciale</a></li>
                            <li><a href="paroisse.php">Sous division</a></li>
                            <li><a href="sous_division.php">Paroisse</a></li>
                            <li><a href="ecole.php">Ecole</a></li>
							<li><a href="utilisateur.php">Utilisateur</a></li> <li ><a href="section_option.php">Section / Option</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                  <?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin" || $_SESSION['current_session'] == "Conseiller d'enseignement" ): ?>  
                      <li class=" sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-blur-linear"></i> Affecter les indicateurs</a>
                        <ul>
                            <li><a class=""  href="effectif_age_sex.php">Effectifs (Age/Sexe)</a></li>
                            <li><a  href="structure_org.php">Structures organisées</a></li>
                            <li><a  href="structure_aut.php">Structures autorisées</a></li>
                            <li><a href="age_des_eleves.php">Age des élèves</a></li>
                            <li><a  href="redoublant_par_sex.php">Redoublants par sexe</a></li>
                            <li><a  href="mouvement_eleves.php">Mouvement des élèves </a></li>
                        </ul>
                    </li>
<?php endif; ?>
<?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin"|| $_SESSION['current_session'] == "Analyste"): ?>
                     <li class=" sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-format-list-bulleted"></i>Affichage des résultats</a>

                        <ul>
                            <li><a href="affiche_releve_stat_eff.php">Relevé statistiques des structures et effectifs scolaires </a></li>
                            <li><a  href="affiche_synthese_de_la_rep.php">Synthèse de la répartition des élèves du secondaire par option</a></li>

                            
                        </ul>
                    </li>
                     <li class="active sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-account"></i>Gestion du personnel</a>

                        <ul>
                            <?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin" || $_SESSION['current_session'] == "Conseiller d'enseignement" ): ?><li><a class="" href="gestion_personnel.php">Enregistrer et afficher le personnel </a></li><?php endif; ?>
                            <li><a class="" href="qualification_personnel.php">Qualification du personnel </a></li>
                             <li><a class="" href="anciennete_personnel.php">Ancienetté dans le grade du personnel </a></li>
                             <li><a class="" href="grade_echelon.php">Grade et echelon du personnel et enseignants du sécondaire</a></li>
                             <li><a class="" href="mise_en_place.php">Mise en place du personnel</a></li>
                              <li><a class="active" href="personnel_par_sex.php">Personnel administratif, enseignant et ouvrier par sèxe</a></li>
                            
                            
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </aside>
            <section id="content">
                <div class="container">
                    <div class="block-header">
                       
                       

                    </div>

                    <div class="card">
                    
                    <?php if(isset($_SESSION['current_session'])): ?>
                        <div id="todo1" class="card">
                            <div class="card-header bgm-bluegray ch-alt m-b-20 ">
                               <h2 class="text-uppercase" >
                               
                                
                                    PERSONNEL ADMINISTRATIF, ENSEIGNANTS ET OUVRIER PAR SEXE

                       
                    </h2>

                               
								<div class="row">
                                            <!-- <div class="col-sm-9">
                                            <select id="select_ecole" data-live-search="true" class="selectpicker"  title="Selectionner une Paroisse"  tabindex="-98"  >
                                         
                                        <?php 
                                         $sous_d = query("SELECT * FROM coordination_sp");

                                        foreach($sous_d as $niv){
                                            $nom_sous_d = $niv["nom_coord_sp"];
                                            $id_sd = $niv["id"];
											$id_belongs_sd = $niv["id"];

                                            echo("<optgroup label='Coordination SOUS PROVINCIALE DE $nom_sous_d'>");
        
                                            //retouver la paroisse
                                            $nom_p_req = query("SELECT * FROM paroisse2 WHERE belongs_to = ?",$id_belongs_sd);
                                            foreach ($nom_p_req as $paroisse_found) {
                                                $id_paroisse= $paroisse_found["id"];

                                                echo("<option  value='$id_paroisse'>" .strtoupper("Paroisse ".$paroisse_found["nom_paroisse"]) ."</option>");
                                            }
                                            
                                             
                                             echo "</optgroup>";

										}
                                        
								
                                    ?>  
                                    </select>
                                    
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="select_ecole_btn_personnel_p_sex" class="btn btn-primary">Confirmer</button>
                                    </div> -->
                                      
                                        </div>
                                <ul class="actions">
                                        <li>
                                            <a href="#">
                                                <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="zmdi zmdi-print print_tab"></i>
                                            </a>
                                        </li>
                                        
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                           
                                        </li>
                                    </ul>
                            </div>

                            <div class="card-body ">
                                

                                <div class="list-group">
                                    <div class="list-group-item media tab_padding">
                                     <div class="col-sm-">
                                    
                                    <div class="table-responsive1 tableau_scroll" >
                                    
                                   
                

                   <div id="tableau_cl">

                   <!-- <div class='center_naledi hidden'>
                   <?php
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

                                    ?>
                        <span class='titre_print text-uppercase'>1PERSONNEL ADMINISTRATIF, ENSEIGNANTS ET OUVRIER PAR SEXE</span><br>
                        PAROISSE DE: <span class='text-uppercase'>yyyyyy</span>, 
                         SOUS DIVISION DE: <span class='text-uppercase'>xxxxxx</span><br>
                        ANNEE SCOLAIRE 2016-2017
                    </div> -->



                    <?php
                     
      $nom_coord_sp = "xxxxx";
      //$nom_sous_div = $tab_paroisse[0]["nom_sous_div"];
      $nom_paroisse = "yyyy";
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

                                    /* PAROISSE : <b class='text-uppercase'>$nom_paroisse</b>, 
                        
                         COORDINATION SOUS PROVINCIALE : <b class='text-uppercase'>$nom_coord_sp</b><br>
                        ANNEE SCOLAIRE 2016-2017*/
                        echo "<span class='titre_print text-uppercase'>PERSONNEL ADMINISTRATIF, ENSEIGNANTS ET OUVRIER PAR SEXE</span><br>
                       
                    </div>";
                     echo "<table id='affiche_relev_stat_table'  class='naledi_yellow11  table-bordered table-hover table-responsive pointInputTable table-condensed ' >
                        <thead>
                            <tr class='warning'>
                                <th rowspan='3'> N° </th>
                                <th rowspan='3'>PAROISSE</th>
                             
                                <th rowspan='3'> NIVEAU</th>
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
                                <th class='tr'>TOT </th>
                                <th >H </th>
                                <th >F </th>
                                <th class='tr'>TOT </th>
                                <th >H </th>
                                <th >F </th>
                                <th class='tr'>TOT </th>
                                <th >H</th>
                                <th >F </th>
                                <th class='tr'>TOT </th>                  
                            </tr>
                            
                            <tbody class='naledi_yellow1'>";

                            

                            $nbr =1;
                            $id_pp =0;
                            $test_mat = 0;
                            $test_mat1 = 0;
                            $test_pri = 0;
                            $test_sec = 0;

                            $_total_gen_tot_eff_G = 0; 
                            $_total_gen_tot_eff_F = 0; 
                            $_total_gen_tot_eff_GF = 0; 

                            $_total_gen_str_org = 0; 
                            $_total_gen_str_aut = 0; 

                            $_total_gen_persnel_adm_h = 0; 
                            $_total_gen_persnel_adm_f = 0; 
                            $_total_gen_persnel_adm_hf = 0; 
                            $_total_gen_persnel_ens_h = 0; 
                            $_total_gen_persnel_ens_f = 0; 
                            $_total_gen_persnel_ens_hf = 0; 
                            $_total_gen_persnel_ouv_h = 0; 
                            $_total_gen_persnel_ouv_f = 0; 
                            $_total_gen_persnel_ouv_hf = 0;

                            //TOTAUX GENERAUX
                            /*$_total_gen_str_org_mat = 0; 
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
*/
                            /*$_total_gen_str_org_pri = 0; 
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
                            $_total_gen_persnel_ouv_hf = 0;*/ 


                            //$tab_select_ecole = query("SELECT ecole2.*, sous_div.nom_sous_div,sous_div.id  FROM `ecole2`,sous_div WHERE ecole2.belongs_to = sous_div.id ORDER by ecole2.id_niveau ASC");
                            $tab_paroisse2 = query("SELECT * FROM sous_div");
                        foreach ($tab_paroisse2 as $paroisse2_) {
                            $tab_select_ecole = query("SELECT * from ecole2 WHERE belongs_to = ? ",$paroisse2_["id"]);
                            $nbr_mat = 0; 
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

                            
                            
                            

                            foreach ($tab_select_ecole as $ecole) {
                              $id_ecole = $ecole["id"];

                              $nom_sous_div =$paroisse2_["nom_sous_div"];
                              //$nbr = 1;
                              $matricule = $paroisse2_["nom_sous_div"];
                              $nom_ecole = $ecole["nom_ecole"];

                             
                              //echo count(query("SELECT * FROM ecole2 WHERE belongs_to = ? and id_niveau = ?",$paroisse2_["id"], "Maternelle"));
                              //echo "<br>".$ecole["id_niveau"].$paroisse2_["nom_sous_div"]."<br><br>";

                              if ($ecole["id_niveau"] == "Maternelle") {
                                $nbr_mat++;


                           //if (count(query("SELECT * FROM ecole2 WHERE belongs_to = ? and id_niveau = ?",$paroisse2_["id"], "Maternelle")) > 0) {
                           //if (count(query("SELECT * FROM ecole2 WHERE belongs_to = ? and id_niveau = ?",$paroisse2_["id"], "Maternelle")) > 0) {
                                
                                //CALCUL NBRE CLASS ORG MATERNELLE
                              $tab_str_org1 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "1");
                              $tab_str_org2 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "2");
                              $tab_str_org3 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "3");
                             /*$tab_str_org4 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "4");
                              $tab_str_org5 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "5");
                              $tab_str_org6 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_ecole, "6");*/
                              $str_org1 = 0;
                              $str_org2 = 0;
                              $str_org3 = 0;
                             /* $str_org4 = 0;
                              $str_org5 = 0;
                              $str_org6 = 0;*/


                              /*if(count($tab_str_org1)>0 and count($tab_str_org2)>0 and count($tab_str_org3)>0)
                              {
                                $str_org1 = $tab_str_org1[0]["nbr_structure"];
                                $str_org2 = $tab_str_org2[0]["nbr_structure"];
                                $str_org3 = $tab_str_org3[0]["nbr_structure"];
                              }*/
                              if (count($tab_str_org1)>0) {
                                  $str_org1 = $tab_str_org1[0]["nbr_structure"];
                              }
                              if (count($tab_str_org2)>0) {
                                  $str_org2 = $tab_str_org2[0]["nbr_structure"];
                              }
                              if (count($tab_str_org3)>0) {
                                  $str_org3 = $tab_str_org3[0]["nbr_structure"];
                              }
                              
                              $str_org = $str_org1+$str_org2+$str_org3/*+$str_org4+$str_org5+$str_org6*/;


                              //total general
                              $_total_gen_str_org_mat = $_total_gen_str_org_mat + $str_org;
                             // echo $_total_gen_str_org_mat."<br>";

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


                               /* if(count($tab_str_aut1)>0 and count($tab_str_aut2)>0 and count($tab_str_aut3)>0 )
                                {
                                    $str_aut1 = $tab_str_aut1[0]["nbr_structure"];

                                  $str_aut2 = $tab_str_aut2[0]["nbr_structure"];
                                  $str_aut3 = $tab_str_aut3[0]["nbr_structure"];
                                }*/
                                if (count($tab_str_aut1)>0 ) {
                                    $str_aut1 = $tab_str_aut1[0]["nbr_structure"];
                                }
                                if (count($tab_str_aut2)>0 ) {
                                    $str_aut2 = $tab_str_aut2[0]["nbr_structure"];
                                }
                                if (count($tab_str_aut3)>0 ) {
                                    $str_aut3 = $tab_str_aut3[0]["nbr_structure"];
                                }
                               /* if(count($tab_str_aut4)>0 and count($tab_str_aut5)>0 and count($tab_str_aut6)>0 )
                                {
                                  $str_aut4 = $tab_str_aut4[0]["nbr_structure"];
                                  $str_aut5 = $tab_str_aut5[0]["nbr_structure"];
                                  $str_aut6 = $tab_str_aut6[0]["nbr_structure"];
                                }*/
                                $str_aut = $str_aut1+$str_aut2+$str_aut3/*+$str_aut4+$str_aut5+$str_aut6*/;
                                
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

                                $tab_personel_adm_h = query("SELECT count(*) as nbr FROM `personnel` WHERE ( `grade_act_p` like '14%') and ecole_affect =? and sex_p = '01' ",$id_ecole);
                                /*`grade_act_p` like '13%' or
                                `grade_act_p` like '13%' or*/

                                $tab_personel_adm_f = query("SELECT count(*) as nbr FROM `personnel` WHERE ( `grade_act_p` like '14%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $tab_personel_ens_h = query("SELECT count(*) as nbr FROM `personnel` WHERE ( `grade_act_p` like '31%' ) and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_ens_f = query("SELECT count(*) as nbr FROM `personnel` WHERE ( `grade_act_p` like '31%' ) and ecole_affect =? and sex_p = '02' ",$id_ecole);
                                /*`grade_act_p` like '21%' or `grade_act_p` like '22%' or
`grade_act_p` like '21%' or `grade_act_p` like '22%' or
or `grade_act_p` like '32%'
or `grade_act_p` like '32%'*/

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

                                    //break;
                                    $test_mat = 1;
                                    $nbr++;
                                    //continue;
                              }
                             
                             /* if($test_mat1 == 1){
                               
                                    $test_mat1++;
                              }*/
                              
                              if ($test_mat == 1 ) {
                                
                                   /* $id_pp++;
                                 echo "<tr>
                                        <td>$id_pp</td>
                                        <td>$matricule</td>
                                       
                                        <td>MATERNELLE</td>
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
                                       
                                    </tr>"; */
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


                              if(count($tab_str_org1)>0 and count($tab_str_org2)>0 and count($tab_str_org3)>0 AND count($tab_str_org4)>0 and count($tab_str_org5)>0 and count($tab_str_org6)>0 )
                              {
                                $str_org1 = $tab_str_org1[0]["nbr_structure"];
                                $str_org2 = $tab_str_org2[0]["nbr_structure"];
                                $str_org3 = $tab_str_org3[0]["nbr_structure"];
                                $str_org4 = $tab_str_org4[0]["nbr_structure"];
                                $str_org5 = $tab_str_org5[0]["nbr_structure"];
                                $str_org6 = $tab_str_org6[0]["nbr_structure"];
                              }
                             /* elseif(count($tab_str_org4)>0 and count($tab_str_org5)>0 and count($tab_str_org6)>0 )
                              {
                                $str_org4 = $tab_str_org4[0]["nbr_structure"];
                                $str_org5 = $tab_str_org5[0]["nbr_structure"];
                                $str_org6 = $tab_str_org6[0]["nbr_structure"];
                              }*/
                             /* else {
                                $str_org1 = 0;
                                $str_org2 = 0;
                                $str_org3 = 0;
                                $str_org4 = 0;
                                $str_org5 = 0;
                                $str_org6 = 0;
                              }*/
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


                                if(count($tab_str_aut1)>0 and count($tab_str_aut2)>0 and count($tab_str_aut3)>0 AND count($tab_str_aut4)>0 and count($tab_str_aut5)>0 and count($tab_str_aut6)>0)
                                {
                                  $str_aut1 = $tab_str_aut1[0]["nbr_structure"];
                                  $str_aut2 = $tab_str_aut2[0]["nbr_structure"];
                                  $str_aut3 = $tab_str_aut3[0]["nbr_structure"];
                                    $str_aut4 = $tab_str_aut4[0]["nbr_structure"];
                                  $str_aut5 = $tab_str_aut5[0]["nbr_structure"];
                                  $str_aut6 = $tab_str_aut6[0]["nbr_structure"];
                                }
                               /* if(count($tab_str_aut4)>0 and count($tab_str_aut5)>0 and count($tab_str_aut6)>0 )
                                {
                                  $str_aut4 = $tab_str_aut4[0]["nbr_structure"];
                                  $str_aut5 = $tab_str_aut5[0]["nbr_structure"];
                                  $str_aut6 = $tab_str_aut6[0]["nbr_structure"];
                                }*/
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

                                $tab_personel_adm_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '14%' or `grade_act_p` like '21%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_adm_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '14%' or `grade_act_p` like '21%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

                                $tab_personel_ens_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '31%') and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_ens_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '31%') and ecole_affect =? and sex_p = '02' ",$id_ecole);

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

                                


                                    $nbr++;
                              $test_pri = 1;
                                   // continue;
                              }
                              
                              if ($test_pri == 1 ) {
                               // $id_pp++;
                               /* echo "<tr>
                                       <td>$id_pp</td>
                                        <td>$matricule</td>
                                       
                                        <td>PRIMAIRE</td>

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
                                       
                                    </tr>"; */
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


                              if(count($tab_str_org1)>0 and count($tab_str_org2)>0 and count($tab_str_org3)>0 AND count($tab_str_org4)>0 and count($tab_str_org5)>0 and count($tab_str_org6)>0 )
                              {
                                $str_org1 = $tab_str_org1[0]["nbr_structure"];
                                $str_org2 = $tab_str_org2[0]["nbr_structure"];
                                $str_org3 = $tab_str_org3[0]["nbr_structure"];
                                 $str_org4 = $tab_str_org4[0]["nbr_structure"];
                                $str_org5 = $tab_str_org5[0]["nbr_structure"];
                                $str_org6 = $tab_str_org6[0]["nbr_structure"];
                              }
                             /* if(count($tab_str_org4)>0 and count($tab_str_org5)>0 and count($tab_str_org6)>0 )
                              {
                                $str_org4 = $tab_str_org4[0]["nbr_structure"];
                                $str_org5 = $tab_str_org5[0]["nbr_structure"];
                                $str_org6 = $tab_str_org6[0]["nbr_structure"];
                              }*/
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


                                if(count($tab_str_aut1)>0 and count($tab_str_aut2)>0 and count($tab_str_aut3)>0 AND count($tab_str_aut4)>0 and count($tab_str_aut5)>0 and count($tab_str_aut6)>0  )
                                {
                                  $str_aut1 = $tab_str_aut1[0]["nbr_structure"];
                                  $str_aut2 = $tab_str_aut2[0]["nbr_structure"];
                                  $str_aut3 = $tab_str_aut3[0]["nbr_structure"];
                                  
                                  $str_aut4 = $tab_str_aut4[0]["nbr_structure"];
                                  $str_aut5 = $tab_str_aut5[0]["nbr_structure"];
                                  $str_aut6 = $tab_str_aut6[0]["nbr_structure"];
                                }
                               /* if(count($tab_str_aut4)>0 and count($tab_str_aut5)>0 and count($tab_str_aut6)>0 )
                                {
                                  $str_aut4 = $tab_str_aut4[0]["nbr_structure"];
                                  $str_aut5 = $tab_str_aut5[0]["nbr_structure"];
                                  $str_aut6 = $tab_str_aut6[0]["nbr_structure"];
                                }*/
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

                                $tab_personel_ens_h = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '21%' or `grade_act_p` like '22%' ) and ecole_affect =? and sex_p = '01' ",$id_ecole);

                                $tab_personel_ens_f = query("SELECT count(*) as nbr FROM `personnel` WHERE (`grade_act_p` like '21%' or `grade_act_p` like '22%' ) and ecole_affect =? and sex_p = '02' ",$id_ecole);

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

                                


                               
                                  $test_sec = 1;
                                  $nbr++;
                                    //continue;
                              }
                               
                              

                              
                            //FIN ECOLE 
                            }
                            //echo  $nbr_mat."<br>";
                             $id_pp++;
                                echo "<tr>
                                        <td rowspan='3'>$id_pp</td>
                                        <td <td rowspan='3'>$matricule</td>
                                        <td>MATERNELLE</td>
                                        <td>$_total_gen_str_aut_mat</td>
                                        <td>$_total_gen_str_org_mat</td>
                                        <td>$_total_gen_tot_eff_G_mat</td>
                                        <td>$_total_gen_tot_eff_F_mat</td>
                                        <td class='tr'>$_total_gen_tot_eff_GF_mat</td>
                                        <td>$_total_gen_persnel_adm_h_mat</td>
                                        <td>$_total_gen_persnel_adm_f_mat</td>
                                        <td class='tr'>$_total_gen_persnel_adm_hf_mat</td>
                                        <td>$_total_gen_persnel_ens_h_mat</td>
                                        <td>$_total_gen_persnel_ens_f_mat</td>
                                        <td class='tr'>$_total_gen_persnel_ens_hf_mat</td>
                                        <td>$_total_gen_persnel_ouv_h_mat</td>
                                        <td>$_total_gen_persnel_ouv_f_mat</td>
                                        <td class='tr'>$_total_gen_persnel_ouv_hf_mat</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>"; 

                                echo "<tr>
                                        
                                        
                                       
                                        <td>PRIMAIRE</td>
                                        <td>$_total_gen_str_aut_pri</td>
                                        <td>$_total_gen_str_org_pri</td>
                                        <td>$_total_gen_tot_eff_G_pri</td>
                                        <td>$_total_gen_tot_eff_F_pri</td>
                                        <td class='tr'>$_total_gen_tot_eff_GF_pri</td>
                                        <td>$_total_gen_persnel_adm_h_pri</td>
                                        <td>$_total_gen_persnel_adm_f_pri</td>
                                        <td class='tr'>$_total_gen_persnel_adm_hf_pri</td>
                                        <td>$_total_gen_persnel_ens_h_pri</td>
                                        <td>$_total_gen_persnel_ens_f_pri</td>
                                        <td class='tr'>$_total_gen_persnel_ens_hf_pri</td>
                                        <td>$_total_gen_persnel_ouv_h_pri</td>
                                        <td>$_total_gen_persnel_ouv_f_pri</td>
                                        <td class='tr'>$_total_gen_persnel_ouv_hf_pri</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>"; 
                                  
                                echo "<tr>
                                        
                                        
                                       
                                       
                                        <td>SECONDAIRE</td>
                                        <td>$_total_gen_str_aut_sec</td>
                                        <td>$_total_gen_str_org_sec</td>
                                        <td>$_total_gen_tot_eff_G_sec</td>
                                        <td>$_total_gen_tot_eff_F_sec</td>
                                        <td class='tr'>$_total_gen_tot_eff_GF_sec</td>
                                        <td>$_total_gen_persnel_adm_h_sec</td>
                                        <td>$_total_gen_persnel_adm_f_sec</td>
                                        <td class='tr'>$_total_gen_persnel_adm_hf_sec</td>
                                        <td>$_total_gen_persnel_ens_h_sec</td>
                                        <td>$_total_gen_persnel_ens_f_sec</td>
                                        <td class='tr'>$_total_gen_persnel_ens_hf_sec</td>
                                        <td>$_total_gen_persnel_ouv_h_sec</td>
                                        <td>$_total_gen_persnel_ouv_f_sec</td>
                                        <td class='tr'>$_total_gen_persnel_ouv_hf_sec</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>"; 
                            $_total_gen_str_aut = $_total_gen_str_aut+ $_total_gen_str_aut_mat+$_total_gen_str_aut_pri+$_total_gen_str_aut_sec;
                            $_total_gen_str_org = $_total_gen_str_org+ $_total_gen_str_org_mat+$_total_gen_str_org_pri+$_total_gen_str_org_sec;
                            $_total_gen_tot_eff_G = $_total_gen_tot_eff_G+ $_total_gen_tot_eff_G_mat+$_total_gen_tot_eff_G_pri+$_total_gen_tot_eff_G_sec;
                            $_total_gen_tot_eff_F = $_total_gen_tot_eff_F+ $_total_gen_tot_eff_F_mat+$_total_gen_tot_eff_F_pri+$_total_gen_tot_eff_F_sec;
                            $_total_gen_tot_eff_GF = $_total_gen_tot_eff_GF+ $_total_gen_tot_eff_GF_mat+$_total_gen_tot_eff_GF_pri+$_total_gen_tot_eff_GF_sec;
                            $_total_gen_persnel_adm_h = $_total_gen_persnel_adm_h+ $_total_gen_persnel_adm_h_mat+$_total_gen_persnel_adm_h_pri+$_total_gen_persnel_adm_h_sec;
                            $_total_gen_persnel_adm_f = $_total_gen_persnel_adm_f+ $_total_gen_persnel_adm_f_mat+$_total_gen_persnel_adm_f_pri+$_total_gen_persnel_adm_f_sec;
                            $_total_gen_persnel_adm_hf = $_total_gen_persnel_adm_hf+ $_total_gen_persnel_adm_hf_mat+$_total_gen_persnel_adm_hf_pri+$_total_gen_persnel_adm_hf_sec;
                            $_total_gen_persnel_ens_h = $_total_gen_persnel_ens_h+ $_total_gen_persnel_ens_h_mat+$_total_gen_persnel_ens_h_pri+$_total_gen_persnel_ens_h_sec;
                            $_total_gen_persnel_ens_f = $_total_gen_persnel_ens_f+ $_total_gen_persnel_ens_f_mat+$_total_gen_persnel_ens_f_pri+$_total_gen_persnel_ens_f_sec;
                            $_total_gen_persnel_ens_hf = $_total_gen_persnel_ens_hf+ $_total_gen_persnel_ens_hf_mat+$_total_gen_persnel_ens_hf_pri+$_total_gen_persnel_ens_hf_sec;
                            $_total_gen_persnel_ouv_h = $_total_gen_persnel_ouv_h+ $_total_gen_persnel_ouv_h_mat+$_total_gen_persnel_ouv_h_pri+$_total_gen_persnel_ouv_h_sec;
                            $_total_gen_persnel_ouv_f = $_total_gen_persnel_ouv_f+ $_total_gen_persnel_ouv_f_mat+$_total_gen_persnel_ouv_f_pri+$_total_gen_persnel_ouv_f_sec;
                            $_total_gen_persnel_ouv_hf = $_total_gen_persnel_ouv_hf+ $_total_gen_persnel_ouv_hf_mat+$_total_gen_persnel_ouv_hf_pri+$_total_gen_persnel_ouv_hf_sec;

                                    
                        //FIN PAROISSE
                        }
                            if ($test_sec == 1 ) {
                               // $id_pp++;
                               /* echo "<tr>
                                        <td>$id_pp</td>
                                        <td>$matricule</td>
                                        
                                        <td>SECONDAIRE</td>

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
                                       
                                    </tr>"; */
                                    $test_sec++;
                              }

                           
                           
                            
                                
                                for ($i=0; $i <1 ; $i++) { 
                                    echo "<tr class='tr'>
                                        
                                        <td colspan='3'>TOTAL GENERAL</td>
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
                        
                        ?>
                       
                   </div>




                                </div>

                                     </div>
                                    </div>

                                   

                                    

                                    
                                </div>
                            </div>
                        </div>
                
                        
                        
                        
                        
                    <?php else: ?>
                        <!--b style="color:red" > echec: votre session n existe pas </b><br-->
                            
                            
                            <div class="jumbotron text-center">
                            
                             <h1 class="">DESOLEE, VOUS N'AVEZ PAS LE DROIT D'ACCEDER A CETTE PAGE</h1>
                            <h2 class="text-danger "><a href="index.php"><span class="text-danger">VEILLER VOUS CONNECTER</span></a> </h2>
                        
                        </div>
                        
                    <?php endif; ?>
                    
                        
                    </div>


                </div>
            </section>
        </section>
        
        <footer id="footer">
            Copyright &copy; 2017 Naledi Services
            
            <ul class="f-menu">
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Configurations</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Aide</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Veiller patienter...</p>
            </div>
        </div>