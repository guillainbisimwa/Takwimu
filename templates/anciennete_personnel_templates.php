<?php 
    
    if(isset($_SESSION['current_session'])){
        if($_SESSION['current_session'] == "Analyste")
        {
            
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
                    <a href="index.php" class="m-l-10">
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
                    <?php endif; ?><?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin" || $_SESSION['current_session'] == "Conseiller d'enseignement" ): ?>
                      <li class=" sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-blur-linear"></i> Affecter les indicateurs</a>
                        <ul>
                            <li><a  href="effectif_age_sex.php">Effectifs (Age/Sexe)</a></li>
                            <li><a  href="structure_org.php">Structures organisées</a></li>
                            <li><a  href="structure_aut.php">Structures autorisées</a></li>
                            <li><a  href="age_des_eleves.php">Age des élèves</a></li>
                            <li><a  href="redoublant_par_sex.php">Redoublants par sexe</a></li>
                            <li><a  href="mouvement_eleves.php">Mouvement des élèves </a></li>
                        </ul>
                    </li><?php endif; ?>
                    <?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin"|| $_SESSION['current_session'] == "Analyste"): ?>
                     <li class=" sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-format-list-bulleted
"></i>Affichage des résultats</a>

                        <ul>
                            <li><a href="affiche_releve_stat_eff.php">Relevé statistiques des structures et effectifs scolaires </a></li>
                            <li><a  href="affiche_synthese_de_la_rep.php">Synthèse de la répartition des élèves du secondaire par option</a></li>

                            
                        </ul>
                    </li>
                     <li class="active sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-account"></i>Gestion du personnel</a>

                        <ul><?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin" || $_SESSION['current_session'] == "Conseiller d'enseignement" ): ?>
                            <li><a class="" href="gestion_personnel.php">Enregistrer et afficher le personnel </a></li><?php endif; ?>
                             

                              <li><a class="" href="qualification_personnel.php">Qualification du personnel </a></li>
                             <li><a class="active" href="anciennete_personnel.php">Ancienetté dans le grade du personnel </a></li>
                             <li><a class="" href="grade_echelon.php">Grade et echelon du personnel et enseignants du sécondaire</a></li>
                             <li><a class="" href="mise_en_place.php">Mise en place du personnel</a></li> 
                             <li><a class="" href="personnel_par_sex.php">Personnel administratif, enseignant et ouvrier par sèxe</a></li>
                            
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
                            <div class="card-header bgm-bluegray ch-alt m-b-20">
                                <h2 class="text-uppercase">ANCIENNETE DANS LE GRADE DU PERSONNEL</h2>
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
                                        
                                        <!-- <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                           
                                        </li> -->
                                    </ul>
                            </div>

                            <div class="card-body ">
                               

                                <div class="list-group">
                                    <div class="list-group-item media">
                                     <div class="col-sm-12 tableau_scroll tableau_tri_coord_sp" style="display: none1;">
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
                                    <div class='center_naledi'>
                        <span class='titre_print'>ANCIENNETE DANS LE GRADE DU PERSONNEL DE L'ANNEE 2017-2018</span><br>

                    </div>
                    <table id="affiche_relev_stat_table"  class="table-hover naledi_yellow  table-bordered  table-responsive pointInputTable table-condensed">
                        <thead>
                            <tr class="warning">
                                <th > N° </th>
                                <th >PAROISSE</th>
                                <th >NIVEAU </th>
                                <th >0 - 4 ans</th>
                                <th >5 - 9 ans </th>
                                <th >10 - 14 ans</th>
                                <th >15 - 19 ans</th>
                                <th >20 - 24 ans  </th>
                                <th >25 - 29 ans </th>
                                <th >30 - 34 ans </th>
                                <th >35 - 39 ans </th>
                                <th >40 - 44 ans </th>
                                <th >Plus de 45 ans</th>
                                <th>TOTAL </th>
                                
                                              
                            </tr>
                             
                            
                        </thead>
                        <tbody>
                        
                                
                                
                                <?php

                                $_00_04_tot_mat = 0;
                                $_05_09_tot_mat = 0;
                                $_10_14_tot_mat = 0;
                                $_15_19_tot_mat = 0;
                                $_20_24_tot_mat = 0;
                                $_25_29_tot_mat = 0;
                                $_30_34_tot_mat = 0;
                                $_35_39_tot_mat = 0;
                                $_40_44_tot_mat = 0;
                                $_Plus45_tot_mat = 0;

                                $_00_04_tot_pri = 0;
                                $_05_09_tot_pri = 0;
                                $_10_14_tot_pri = 0;
                                $_15_19_tot_pri = 0;
                                $_20_24_tot_pri = 0;
                                $_25_29_tot_pri = 0;
                                $_30_34_tot_pri = 0;
                                $_35_39_tot_pri = 0;
                                $_40_44_tot_pri = 0;
                                $_Plus45_tot_pri = 0;

                                $_00_04_tot_sec = 0;
                                $_05_09_tot_sec = 0;
                                $_10_14_tot_sec = 0;
                                $_15_19_tot_sec = 0;
                                $_20_24_tot_sec = 0;
                                $_25_29_tot_sec = 0;
                                $_30_34_tot_sec = 0;
                                $_35_39_tot_sec = 0;
                                $_40_44_tot_sec = 0;
                                $_Plus45_tot_sec = 0; 

                                //totaux general
                                 $_00_04_tot = 0;
                                 $_05_09_tot = 0;
                                 $_10_14_tot = 0;
                                 $_15_19_tot = 0;
                                 $_20_24_tot = 0;
                                 $_25_29_tot = 0;
                                 $_30_34_tot = 0;
                                 $_35_39_tot = 0;
                                 $_40_44_tot = 0;
                                $_Plus45_tot = 0;

                                $tot_gen_mat = 0;
                                $tot_gen_pri = 0;
                                $tot_gen_sec = 0;

                                $tot_general= 0;

                                $id_pp = 0;

                                $tab_paroisse = query("SELECT * FROM sous_div");
                            $num=1;
                            foreach ($tab_paroisse as $paroisse) {
                                $_00_04_mat = 0;
                                $_05_09_mat = 0;
                                $_10_14_mat = 0;
                                $_15_19_mat = 0;
                                $_20_24_mat = 0;
                                $_25_29_mat = 0;
                                $_30_34_mat = 0;
                                $_35_39_mat = 0;
                                $_40_44_mat = 0;
                                $_Plus45_mat = 0;

                                $_00_04_pri = 0;
                                $_05_09_pri = 0;
                                $_10_14_pri = 0;
                                $_15_19_pri = 0;
                                $_20_24_pri = 0;
                                $_25_29_pri = 0;
                                $_30_34_pri = 0;
                                $_35_39_pri = 0;
                                $_40_44_pri = 0;
                                $_Plus45_pri = 0;

                                $_00_04_sec = 0;
                                $_05_09_sec = 0;
                                $_10_14_sec = 0;
                                $_15_19_sec = 0;
                                $_20_24_sec = 0;
                                $_25_29_sec = 0;
                                $_30_34_sec = 0;
                                $_35_39_sec = 0;
                                $_40_44_sec = 0;
                                $_Plus45_sec = 0; 

                                $tot_mat = 0;
                                $tot_pri = 0;
                                $tot_sec = 0;





                               
                                
                                
                                $id_p = $paroisse["id"];
                                $nom_p = $paroisse["nom_sous_div"];
                                $nbr_ecol_mat = 0;
                                

                               // $tab_sous_div = query("SELECT * FROM sous_div where belongs_to = ?",$id_p);
                                //foreach ($tab_sous_div as $sd) {
                                    //$id_sd = $sd["id"];
                                   

                                    $tab_ecole = query("SELECT * FROM ecole2 where belongs_to = ? ", $id_p);
                                    foreach ($tab_ecole as $tb_ec) {
                                        //$nbr_personl = query("SELECT COUNT(*) AS nbr FROM personnel WHERE ecole_affect = ?",$tb_ec["id"]);

                                        if ($tb_ec["id"] >0) {
                                           
                                            if ($tb_ec["id_niveau"] == "Maternelle") {
                                                $nbr_personl_00_04 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p >= 0 and annee_pre_p < 5 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_05_09 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 4 and annee_pre_p < 10 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_10_1 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 9 and annee_pre_p < 15 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_15_19 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 14 and annee_pre_p < 20 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_20_24 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 19 and annee_pre_p < 25 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_25_29 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 24 and annee_pre_p < 30 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_30_34 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 29 and annee_pre_p < 35 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_35_39 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 34  and annee_pre_p < 40 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_40_44 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 39 and annee_pre_p < 45 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_Plus45 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 44 and ecole_affect = ?",$tb_ec["id"]);

                                                  $_00_04_mat = $nbr_personl_00_04[0]["nbr"] + $_00_04_mat ;
                                                  $_05_09_mat = $nbr_personl_05_09[0]["nbr"] + $_05_09_mat ;
                                                  $_10_14_mat = $nbr_personl_10_1[0]["nbr"] + $_10_14_mat ;
                                                  $_15_19_mat = $nbr_personl_15_19[0]["nbr"] + $_15_19_mat ;
                                                  $_20_24_mat = $nbr_personl_20_24[0]["nbr"] + $_20_24_mat ;
                                                  $_25_29_mat = $nbr_personl_25_29[0]["nbr"] + $_25_29_mat ;
                                                  $_30_34_mat = $nbr_personl_30_34[0]["nbr"] + $_30_34_mat ;
                                                  $_35_39_mat = $nbr_personl_35_39[0]["nbr"] + $_35_39_mat ;
                                                  $_40_44_mat = $nbr_personl_40_44[0]["nbr"] + $_40_44_mat ;
                                                  $_Plus45_mat = $nbr_personl_Plus45[0]["nbr"] + $_Plus45_mat;

                                                    $_00_04_tot_mat =$_00_04_tot_mat + $nbr_personl_00_04[0]["nbr"];
                                                    $_05_09_tot_mat =$_05_09_tot_mat + $nbr_personl_05_09[0]["nbr"];
                                                    $_10_14_tot_mat =$_10_14_tot_mat + $nbr_personl_10_1[0]["nbr"];
                                                    $_15_19_tot_mat =$_15_19_tot_mat + $nbr_personl_15_19[0]["nbr"];
                                                    $_20_24_tot_mat =$_20_24_tot_mat + $nbr_personl_20_24[0]["nbr"];
                                                    $_25_29_tot_mat =$_25_29_tot_mat + $nbr_personl_25_29[0]["nbr"];
                                                    $_30_34_tot_mat =$_30_34_tot_mat + $nbr_personl_30_34[0]["nbr"];
                                                    $_35_39_tot_mat =$_35_39_tot_mat + $nbr_personl_35_39[0]["nbr"];
                                                    $_40_44_tot_mat =$_40_44_tot_mat + $nbr_personl_40_44[0]["nbr"];
                                                    $_Plus45_tot_mat =$_Plus45_tot_mat + $nbr_personl_Plus45[0]["nbr"] ;

                                                    //totaux droits
                                                    $tot_mat = $_00_04_mat+$_05_09_mat+$_10_14_mat +$_15_19_mat+$_20_24_mat+$_25_29_mat+$_30_34_mat+$_35_39_mat+$_40_44_mat+$_Plus45_mat;

                                                   /* $tot_gen_mat = $tot_gen_mat + $tot_mat;*/





                                                 
                                            }
                                            //SELECT * FROM `personnel` WHERE `annee_pre_p`>= 0 and annee_pre_p < 5 and ecole_affect = 1


                                            elseif ($tb_ec["id_niveau"] == "Primaire") {

                                                $nbr_personl_00_04 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p >= 0 and annee_pre_p < 5 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_05_09 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 4 and annee_pre_p < 10 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_10_1 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 9 and annee_pre_p < 15 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_15_19 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 14 and annee_pre_p < 20 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_20_24 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 19 and annee_pre_p < 25 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_25_29 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 24 and annee_pre_p < 30 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_30_34 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 29 and annee_pre_p < 35 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_35_39 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 34  and annee_pre_p < 40 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_40_44 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 39 and annee_pre_p < 45 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_Plus45 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 44 and ecole_affect = ?",$tb_ec["id"]);

                                                  $_00_04_pri = $nbr_personl_00_04[0]["nbr"] + $_00_04_pri ;
                                                  $_05_09_pri = $nbr_personl_05_09[0]["nbr"] + $_05_09_pri ;
                                                  $_10_14_pri =  $nbr_personl_10_1[0]["nbr"] + $_10_14_pri ;
                                                  $_15_19_pri = $nbr_personl_15_19[0]["nbr"] + $_15_19_pri ;
                                                  $_20_24_pri = $nbr_personl_20_24[0]["nbr"] + $_20_24_pri ;
                                                  $_25_29_pri = $nbr_personl_25_29[0]["nbr"] + $_25_29_pri ;
                                                  $_30_34_pri = $nbr_personl_30_34[0]["nbr"] + $_30_34_pri ;
                                                  $_35_39_pri = $nbr_personl_35_39[0]["nbr"] + $_35_39_pri ;
                                                  $_40_44_pri = $nbr_personl_40_44[0]["nbr"] + $_40_44_pri ;
                                                  $_Plus45_pri = $nbr_personl_Plus45[0]["nbr"] + $_Plus45_pri;

                                                    $_00_04_tot_pri =$_00_04_tot_pri +  $nbr_personl_00_04[0]["nbr"] ;
                                                    $_05_09_tot_pri =$_05_09_tot_pri +  $nbr_personl_05_09[0]["nbr"] ;
                                                    $_10_14_tot_pri =$_10_14_tot_pri +   $nbr_personl_10_1[0]["nbr"] ;
                                                    $_15_19_tot_pri =$_15_19_tot_pri +  $nbr_personl_15_19[0]["nbr"] ;
                                                    $_20_24_tot_pri =$_20_24_tot_pri +  $nbr_personl_20_24[0]["nbr"] ;
                                                    $_25_29_tot_pri =$_25_29_tot_pri +  $nbr_personl_25_29[0]["nbr"] ;
                                                    $_30_34_tot_pri =$_30_34_tot_pri +  $nbr_personl_30_34[0]["nbr"] ;
                                                    $_35_39_tot_pri =$_35_39_tot_pri +  $nbr_personl_35_39[0]["nbr"] ;
                                                    $_40_44_tot_pri =$_40_44_tot_pri +  $nbr_personl_40_44[0]["nbr"] ;
                                                    $_Plus45_tot_pri =$_Plus45_tot_pri +  $nbr_personl_Plus45[0]["nbr"] ;

                                                    //totaux droits
                                                    $tot_pri = $_00_04_pri+$_05_09_pri+$_10_14_pri +$_15_19_pri+$_20_24_pri+$_25_29_pri+$_30_34_pri+$_35_39_pri+$_40_44_pri+$_Plus45_pri;

                                                    /*$tot_gen_pri = $tot_gen_pri + $tot_pri;*/

                                            }
                                            elseif ($tb_ec["id_niveau"] == "Secondaire") {
                                                    $nbr_personl_00_04 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p >= 0 and annee_pre_p < 5 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_05_09 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 4 and annee_pre_p < 10 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_10_1 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 9 and annee_pre_p < 15 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_15_19 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 14 and annee_pre_p < 20 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_20_24 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 19 and annee_pre_p < 25 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_25_29 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 24 and annee_pre_p < 30 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_30_34 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 29 and annee_pre_p < 35 and ecole_affect = ?",$tb_ec["id"]);

                                                 $nbr_personl_35_39 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 34  and annee_pre_p < 40 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_40_44 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 39 and annee_pre_p < 45 and ecole_affect = ?",$tb_ec["id"]);

                                                  $nbr_personl_Plus45 = query("SELECT COUNT(*) AS nbr FROM personnel WHERE annee_pre_p > 44 and ecole_affect = ?",$tb_ec["id"]);

                                                  $_00_04_sec = $nbr_personl_00_04[0]["nbr"] + $_00_04_sec ;
                                                  $_05_09_sec = $nbr_personl_05_09[0]["nbr"] + $_05_09_sec ;
                                                  $_10_14_sec =  $nbr_personl_10_1[0]["nbr"] + $_10_14_sec ;
                                                  $_15_19_sec = $nbr_personl_15_19[0]["nbr"] + $_15_19_sec ;
                                                  $_20_24_sec = $nbr_personl_20_24[0]["nbr"] + $_20_24_sec ;
                                                  $_25_29_sec = $nbr_personl_25_29[0]["nbr"] + $_25_29_sec ;
                                                  $_30_34_sec = $nbr_personl_30_34[0]["nbr"] + $_30_34_sec ;
                                                  $_35_39_sec = $nbr_personl_35_39[0]["nbr"] + $_35_39_sec ;
                                                  $_40_44_sec = $nbr_personl_40_44[0]["nbr"] + $_40_44_sec ;
                                                  $_Plus45_sec = $nbr_personl_Plus45[0]["nbr"] + $_Plus45_sec;

                                                    $_00_04_tot_sec =$_00_04_tot_sec +  $nbr_personl_00_04[0]["nbr"];
                                                    $_05_09_tot_sec =$_05_09_tot_sec +  $nbr_personl_05_09[0]["nbr"];
                                                    $_10_14_tot_sec =$_10_14_tot_sec +   $nbr_personl_10_1[0]["nbr"];
                                                    $_15_19_tot_sec =$_15_19_tot_sec +  $nbr_personl_15_19[0]["nbr"];
                                                    $_20_24_tot_sec =$_20_24_tot_sec +  $nbr_personl_20_24[0]["nbr"];
                                                    $_25_29_tot_sec =$_25_29_tot_sec +  $nbr_personl_25_29[0]["nbr"];
                                                    $_30_34_tot_sec =$_30_34_tot_sec +  $nbr_personl_30_34[0]["nbr"];
                                                    $_35_39_tot_sec =$_35_39_tot_sec +  $nbr_personl_35_39[0]["nbr"];
                                                    $_40_44_tot_sec =$_40_44_tot_sec +  $nbr_personl_40_44[0]["nbr"];
                                                    $_Plus45_tot_sec =$_Plus45_tot_sec + $nbr_personl_Plus45[0]["nbr"];

                                                    //totaux droits
                                                    $tot_sec = $_00_04_sec+$_05_09_sec+$_10_14_sec +$_15_19_sec+$_20_24_sec+$_25_29_sec+$_30_34_sec+$_35_39_sec+$_40_44_sec+$_Plus45_sec;
                                                    /*$tot_gen_sec = $tot_gen_sec + $tot_sec;*/
                                            }

                                            
                                    
                                        }

                                   // }


                                }
                                $id_pp ++;
                                 $tot_gen_mat = $tot_gen_mat + $tot_mat;
                                  $tot_gen_pri = $tot_gen_pri + $tot_pri;
                                  $tot_gen_sec = $tot_gen_sec + $tot_sec;

                                echo "<tr>";
                                        echo "<td rowspan='3'>$id_pp</td>";
                                        echo "<td rowspan='3'>$nom_p</td>";
                                        echo "<td >MATERNELLE</td>";
                                        //for ($i=0; $i < 10; $i++) { 
                                            
                                           echo "<td> $_00_04_mat</td>"; 
                                           echo "<td> $_05_09_mat</td>"; 
                                           echo "<td> $_10_14_mat</td>"; 
                                           echo "<td> $_15_19_mat</td>"; 
                                           echo "<td> $_20_24_mat</td>"; 
                                           echo "<td> $_25_29_mat</td>"; 
                                           echo "<td> $_30_34_mat</td>"; 
                                           echo "<td> $_35_39_mat</td>"; 
                                           echo "<td> $_40_44_mat</td>"; 
                                           echo "<td> $_Plus45_mat</td>"; 
                                               
                                        //}

                                             
                                        echo "<td class='tr'>$tot_mat</td>";
                                        

                                        echo "</tr>";

                                        echo "<tr>";
                                        
                                        echo "<td>PRIMAIRE</td>";
                                        //for ($i=0; $i < 17; $i++) { 
                                           // echo "<td> -</td>";
                                            //echo "<td> -</td>";
                                               
                                        //}
                                         echo "<td> $_00_04_pri</td>"; 
                                           echo "<td> $_05_09_pri</td>"; 
                                           echo "<td> $_10_14_pri</td>"; 
                                           echo "<td> $_15_19_pri</td>"; 
                                           echo "<td> $_20_24_pri</td>"; 
                                           echo "<td> $_25_29_pri</td>"; 
                                           echo "<td> $_30_34_pri</td>"; 
                                           echo "<td> $_35_39_pri</td>"; 
                                           echo "<td> $_40_44_pri</td>"; 
                                           echo "<td> $_Plus45_pri</td>";

                                             
                                        
                                        echo "<td class='tr'>$tot_pri</td>";

                                        echo "</tr>";

                                        echo "<tr>";
                                        
                                        echo "<td>SECONDAIRE</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        } */ 
                                        echo "<td> $_00_04_sec</td>"; 
                                           echo "<td> $_05_09_sec</td>"; 
                                           echo "<td> $_10_14_sec</td>"; 
                                           echo "<td> $_15_19_sec</td>"; 
                                           echo "<td> $_20_24_sec</td>"; 
                                           echo "<td> $_25_29_sec</td>"; 
                                           echo "<td> $_30_34_sec</td>"; 
                                           echo "<td> $_35_39_sec</td>"; 
                                           echo "<td> $_40_44_sec</td>"; 
                                           echo "<td> $_Plus45_sec</td>";

                                            
                                        
                                        echo "<td class='tr'>$tot_sec</td>";

                                        echo "</tr>";                                    
                                }
                                //TOTAUX GENERAUX
                                $_00_04_tot =  $_00_04_tot_mat +  $_00_04_tot_pri +  $_00_04_tot_sec;
                                 $_05_09_tot =  $_05_09_tot_mat +  $_05_09_tot_pri +  $_05_09_tot_sec;
                                 $_10_14_tot =  $_10_14_tot_mat +  $_10_14_tot_pri +  $_10_14_tot_sec;
                                 $_15_19_tot =  $_15_19_tot_mat +  $_15_19_tot_pri +  $_15_19_tot_sec;
                                 $_20_24_tot =  $_20_24_tot_mat +  $_20_24_tot_pri +  $_20_24_tot_sec;
                                 $_25_29_tot =  $_25_29_tot_mat +  $_25_29_tot_pri +  $_25_29_tot_sec;
                                 $_30_34_tot =  $_30_34_tot_mat +  $_30_34_tot_pri +  $_30_34_tot_sec;
                                 $_35_39_tot =  $_35_39_tot_mat +  $_35_39_tot_pri +  $_35_39_tot_sec;
                                 $_40_44_tot =  $_40_44_tot_mat +  $_40_44_tot_pri +  $_40_44_tot_sec;
                                $_Plus45_tot = $_Plus45_tot_mat + $_Plus45_tot_pri + $_Plus45_tot_sec;

                                //sommation des totaux
                                $tot_general =$tot_gen_mat + $tot_gen_pri+  $tot_gen_sec ;
                                    

                                echo "<tr class='tr'>";

                                echo "<td colspan='3'>TOTAL MATERNELLE</td>";
                                        
                                       /*for ($i=0; $i < 10; $i++) { 
                                           echo "<td>--</td>";
                                       }*/
                                        echo "<td> $_00_04_tot_mat</td>"; 
                                           echo "<td> $_05_09_tot_mat</td>"; 
                                           echo "<td> $_10_14_tot_mat</td>"; 
                                           echo "<td> $_15_19_tot_mat</td>"; 
                                           echo "<td> $_20_24_tot_mat</td>"; 
                                           echo "<td> $_25_29_tot_mat</td>"; 
                                           echo "<td> $_30_34_tot_mat</td>"; 
                                           echo "<td> $_35_39_tot_mat</td>"; 
                                           echo "<td> $_40_44_tot_mat</td>"; 
                                           echo "<td> $_Plus45_tot_mat</td>";


                                      
                                        echo "<td class='tr'>$tot_gen_mat</td>";

                                echo "</tr>"; 
                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL PRIMAIRE</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        } */ 

                                         echo "<td> $_00_04_tot_pri</td>"; 
                                           echo "<td> $_05_09_tot_pri</td>"; 
                                           echo "<td> $_10_14_tot_pri</td>"; 
                                           echo "<td> $_15_19_tot_pri</td>"; 
                                           echo "<td> $_20_24_tot_pri</td>"; 
                                           echo "<td> $_25_29_tot_pri</td>"; 
                                           echo "<td> $_30_34_tot_pri</td>"; 
                                           echo "<td> $_35_39_tot_pri</td>"; 
                                           echo "<td> $_40_44_tot_pri</td>"; 
                                           echo "<td> $_Plus45_tot_pri</td>";



                                        
                                        echo "<td class='tr'>$tot_gen_pri</td>";

                                echo "</tr>"; 
                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL SECONDAIRE</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        }*/


                                         echo "<td> $_00_04_tot_sec</td>"; 
                                           echo "<td> $_05_09_tot_sec</td>"; 
                                           echo "<td> $_10_14_tot_sec</td>"; 
                                           echo "<td> $_15_19_tot_sec</td>"; 
                                           echo "<td> $_20_24_tot_sec</td>"; 
                                           echo "<td> $_25_29_tot_sec</td>"; 
                                           echo "<td> $_30_34_tot_sec</td>"; 
                                           echo "<td> $_35_39_tot_sec</td>"; 
                                           echo "<td> $_40_44_tot_sec</td>"; 
                                           echo "<td> $_Plus45_tot_sec</td>";




                                       
                                        echo "<td class='tr'>$tot_gen_sec</td>";

                                echo "</tr>";
                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL GENERAL</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        } */  
                                         echo "<td> $_00_04_tot</td>"; 
                                           echo "<td> $_05_09_tot</td>"; 
                                           echo "<td> $_10_14_tot</td>"; 
                                           echo "<td> $_15_19_tot</td>"; 
                                           echo "<td> $_20_24_tot</td>"; 
                                           echo "<td> $_25_29_tot</td>"; 
                                           echo "<td> $_30_34_tot</td>"; 
                                           echo "<td> $_35_39_tot</td>"; 
                                           echo "<td> $_40_44_tot</td>"; 
                                           echo "<td> $_Plus45_tot</td>";



                                       
                                        echo "<td class='tr'>$tot_general</td>";

                                echo "</tr>"; 


                                ?>           
                            </tr>
                            <tr class="warning1 petit_caracter1">
                                
                                
                                <?php 
                                /*echo "<td> 2</td>";
                                   echo "<td> XXXXX</td>";
                                   echo "<td> YYYYY</td>";
                                for ($i=0; $i < 17; $i++) { 
                                   echo "<td> 2</td>";
                                   echo "<td> -</td>";
                                   //echo "<td> HF</td>";
                                }
                                echo "<td> H</td>";
                                   echo "<td> F</td>";
                                   echo "<td> HF</td>";*/

                                ?>           
                            </tr>
                            
                        </tbody>
                    </table>

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



       <!--  La technologie peut être divisée en deux parties:
1. Développement d'applications et de logiciels: les équipes sont divisées en nouvelles applications.
2.Server Technology: Maintenance du réseau et du matériel.

permet d'interagir avec les clients, de faciliter les activités de trading, d'exécuter des transactions de plusieurs milliards de dollars, de gérer les risques, de recueillir les dernières informations sur le marché et de maintenir les opérations 24 heures sur 24, 7 jours sur 7.

peuvent également apporter de nouvelles idées. La bonne communication et les compétences interpersonnelles, ainsi que le travail en équipe et les capacités de résolution de problèmes sont essentiels.

I am able to make a decision in the circumstance that seems difficult ,. I have degrees and circles that can help me develop leadership and technological skills that can be useful in a banking environment

I like to collaborate with people and tend to help team cohesion and morale. In addition, I have a knowledge in the field of internet banking and custom software design that is directly applicable. So I will help the team achieve its goals faster with superior quality, and make them happier to do so.

Set up quick and easy ways to interact with customers, facilitate trading activities, execute multi-billion dollar transactions, manage risk, collect the latest market information and maintain Operations 24 Hours/24, 7 days/7 using a mobile or desktop application by not limiting the distance or location of work.

Conception of a statistical management software of the Catholic school coordination. In the diocese of goma, province of North Kivu in the Republic of Congo. In 2017
 

 ♫ Song 1: ARCHIS - Blood (APEK & Breathe Carolina Remix).mp3
♫ Song 2: Justin Caruso - Talk About Me | Ft. Victoria Zaro (Kuur Remix)-->