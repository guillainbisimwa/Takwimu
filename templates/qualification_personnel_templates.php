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
                            <li><a class="active" href="qualification_personnel.php">Qualification du personnel </a></li>
                             <li><a class="" href="anciennete_personnel.php">Ancienetté dans le grade du personnel </a></li>
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
                                <h2 class="text-uppercase">Qualification du personnel</h2>
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
                                    <div class='center_naledi'>
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
                        <span class='titre_print'>QUALIFICATION DU PERSONNEL DE L'ANNEE 2017-2018</span><br>

                    </div>
                    <table id="affiche_relev_stat_table"  class="naledi_yellow  table-bordered  table-responsive pointInputTable table-condensed table-hover">
                        <thead>
                            <tr class="warning">
                                <th rowspan="2"> N° </th>
                                <th rowspan="2">PAROISSE</th>
                                <th rowspan="2">NIVEAU </th>
                                <th colspan="2">DR</th>
                                <th colspan="2">IR </th>
                                <th colspan="2">L2/LA </th>
                                <th colspan="2">G3 </th>
                                <th colspan="2">A1 </th>
                                <th colspan="2">A2 </th>
                                <th colspan="2">P6N </th>
                                <th colspan="2">D6N </th>
                                <th colspan="2">CAP/D6A </th>
                                <th colspan="2">D4A </th>
                                <th colspan="2">D4N </th>
                                <th colspan="2">EAP </th>
                                <th colspan="2">EMP </th>
                                <th colspan="2">PP5 </th>
                                <th colspan="2">PP6 </th>
                                <th colspan="2">SFS </th>
                                <th colspan="2">AUTRES </th>
                                <th colspan="3">TOT </th>
                                
                                              
                            </tr>
                             <tr class="warning1 petit_caracter1">
                               
                                    <?php 
                                
                                for ($i=0; $i < 17; $i++) { 
                                   echo "<th> H</th>";
                                   echo "<th> F</th>";
                                   //echo "<th> HF</th>";
                                }
                                echo "<th> H</th>";
                                   echo "<th> F</th>";
                                   echo "<th> HF</th>";

                                ?> 
                                
                               
                                
                                              
                            </tr>
                            
                        </thead>
                        <tbody>
                        
                                
                                
                                <?php

                                //LES SOMMES TOUTALES MAT PRI ET SECS
                                //*****************************************
                                $DR_h_tot_mat = 0;
                                $IR_h_tot_mat = 0;
                                $L2_h_tot_mat = 0;
                                $G3_h_tot_mat = 0;
                                $A1_h_tot_mat = 0;
                                $A2_h_tot_mat = 0;
                                $P6N_h_tot_mat = 0;
                                $D6N_h_tot_mat = 0;
                                $CAP_h_tot_mat = 0;
                                $D4A_h_tot_mat = 0;
                                $D4N_h_tot_mat = 0;
                                $EAP_h_tot_mat = 0;
                                $EMP_h_tot_mat = 0;
                                $PP5_h_tot_mat = 0;
                                $PP6_h_tot_mat = 0;
                                $SFS_h_tot_mat = 0;
                                $AUTRES_h_tot_mat  = 0;

                                    $DR_f_tot_mat = 0;
                                    $IR_f_tot_mat = 0;
                                    $L2_f_tot_mat = 0;
                                    $G3_f_tot_mat = 0;
                                    $A1_f_tot_mat = 0;
                                    $A2_f_tot_mat = 0;
                                   $P6N_f_tot_mat = 0;
                                   $D6N_f_tot_mat = 0;
                                   $CAP_f_tot_mat = 0;
                                   $D4A_f_tot_mat = 0;
                                   $D4N_f_tot_mat = 0;
                                   $EAP_f_tot_mat = 0;
                                   $EMP_f_tot_mat = 0;
                                   $PP5_f_tot_mat = 0;
                                   $PP6_f_tot_mat = 0;
                                   $SFS_f_tot_mat = 0;
                                $AUTRES_f_tot_mat = 0;


                                $DR_h_tot_pri = 0;
                                $IR_h_tot_pri = 0;
                                $L2_h_tot_pri = 0;
                                $G3_h_tot_pri = 0;
                                $A1_h_tot_pri = 0;
                                $A2_h_tot_pri = 0;
                                $P6N_h_tot_pri = 0;
                                $D6N_h_tot_pri = 0;
                                $CAP_h_tot_pri = 0;
                                $D4A_h_tot_pri = 0;
                                $D4N_h_tot_pri = 0;
                                $EAP_h_tot_pri = 0;
                                $EMP_h_tot_pri = 0;
                                $PP5_h_tot_pri = 0;
                                $PP6_h_tot_pri = 0;
                                $SFS_h_tot_pri = 0;
                                $AUTRES_h_tot_pri  = 0;

                                    $DR_f_tot_pri = 0;
                                    $IR_f_tot_pri = 0;
                                    $L2_f_tot_pri = 0;
                                    $G3_f_tot_pri = 0;
                                    $A1_f_tot_pri = 0;
                                    $A2_f_tot_pri = 0;
                                   $P6N_f_tot_pri = 0;
                                   $D6N_f_tot_pri = 0;
                                   $CAP_f_tot_pri = 0;
                                   $D4A_f_tot_pri = 0;
                                   $D4N_f_tot_pri = 0;
                                   $EAP_f_tot_pri = 0;
                                   $EMP_f_tot_pri = 0;
                                   $PP5_f_tot_pri = 0;
                                   $PP6_f_tot_pri = 0;
                                   $SFS_f_tot_pri = 0;
                                $AUTRES_f_tot_pri = 0;


                                $DR_h_tot_sec = 0;
                                $IR_h_tot_sec = 0;
                                $L2_h_tot_sec = 0;
                                $G3_h_tot_sec = 0;
                                $A1_h_tot_sec = 0;
                                $A2_h_tot_sec = 0;
                                $P6N_h_tot_sec = 0;
                                $D6N_h_tot_sec = 0;
                                $CAP_h_tot_sec = 0;
                                $D4A_h_tot_sec = 0;
                                $D4N_h_tot_sec = 0;
                                $EAP_h_tot_sec = 0;
                                $EMP_h_tot_sec = 0;
                                $PP5_h_tot_sec = 0;
                                $PP6_h_tot_sec = 0;
                                $SFS_h_tot_sec = 0;
                                $AUTRES_h_tot_sec  = 0;

                                    $DR_f_tot_sec = 0;
                                    $IR_f_tot_sec = 0;
                                    $L2_f_tot_sec = 0;
                                    $G3_f_tot_sec = 0;
                                    $A1_f_tot_sec = 0;
                                    $A2_f_tot_sec = 0;
                                   $P6N_f_tot_sec = 0;
                                   $D6N_f_tot_sec = 0;
                                   $CAP_f_tot_sec = 0;
                                   $D4A_f_tot_sec = 0;
                                   $D4N_f_tot_sec = 0;
                                   $EAP_f_tot_sec = 0;
                                   $EMP_f_tot_sec = 0;
                                   $PP5_f_tot_sec = 0;
                                   $PP6_f_tot_sec = 0;
                                   $SFS_f_tot_sec = 0;
                                $AUTRES_f_tot_sec = 0;

                                //TOTAUX GENERAUX
                                $DR_h_tot = 0;
                                $IR_h_tot = 0;
                                $L2_h_tot = 0;
                                $G3_h_tot = 0;
                                $A1_h_tot = 0;
                                $A2_h_tot = 0;
                                $P6N_h_tot = 0;
                                $D6N_h_tot = 0;
                                $CAP_h_tot = 0;
                                $D4A_h_tot = 0;
                                $D4N_h_tot = 0;
                                $EAP_h_tot = 0;
                                $EMP_h_tot = 0;
                                $PP5_h_tot = 0;
                                $PP6_h_tot = 0;
                                $SFS_h_tot = 0;
                                $AUTRES_h_tot  = 0;

                                    $DR_f_tot = 0;
                                    $IR_f_tot = 0;
                                    $L2_f_tot = 0;
                                    $G3_f_tot = 0;
                                    $A1_f_tot = 0;
                                    $A2_f_tot = 0;
                                   $P6N_f_tot = 0;
                                   $D6N_f_tot = 0;
                                   $CAP_f_tot = 0;
                                   $D4A_f_tot = 0;
                                   $D4N_f_tot = 0;
                                   $EAP_f_tot = 0;
                                   $EMP_f_tot = 0;
                                   $PP5_f_tot = 0;
                                   $PP6_f_tot = 0;
                                   $SFS_f_tot = 0;
                                $AUTRES_f_tot = 0;

                                

                                //TOTAUX GEN DROITS
                                $h_tot_gen_mat = 0;
                                $f_tot_gen_mat = 0;
                                $hf_tot_gen_mat = 0;

                                $h_tot_gen_pri = 0;
                                $f_tot_gen_pri = 0;
                                $hf_tot_gen_pri = 0;

                                $h_tot_gen_sec = 0;
                                $f_tot_gen_sec = 0;
                                $hf_tot_gen_sec = 0;

                                //totaux generaux
                                $h_tot_gen = 0;
                                $f_tot_gen = 0;
                                $hf_tot_gen = 0;

                                $id_pp = 0;




                                $tab_paroisse = query("SELECT * FROM sous_div");
                            $num=1;
                             //$D6N_h_pri = 0;
                            foreach ($tab_paroisse as $paroisse) {

                                //$D6N_h_tot_pri = 0;

                                $DR_h = 0;
                                $IR_h = 0;
                                $L2_h = 0;
                                $G3_h = 0;
                                $A1_h = 0;
                                $A2_h = 0;
                                $P6N_h = 0;
                                $D6N_h = 0;
                                $CAP_h = 0;
                                $D4A_h = 0;
                                $D4N_h = 0;
                                $EAP_h = 0;
                                $EMP_h = 0;
                                $PP5_h = 0;
                                $PP6_h = 0;
                                $SFS_h = 0;
                                $AUTRES_h = 0;

                                    $DR_f = 0;
                                    $IR_f = 0;
                                    $L2_f = 0;
                                    $G3_f = 0;
                                    $A1_f = 0;
                                    $A2_f = 0;
                                   $P6N_f = 0;
                                   $D6N_f = 0;
                                   $CAP_f = 0;
                                   $D4A_f = 0;
                                   $D4N_f = 0;
                                   $EAP_f = 0;
                                   $EMP_f = 0;
                                   $PP5_f = 0;
                                   $PP6_f = 0;
                                   $SFS_f = 0;
                               $AUTRES_f = 0; 

                                $DR_h_pri = 0;
                                $IR_h_pri = 0;
                                $L2_h_pri = 0;
                                $G3_h_pri = 0;
                                $A1_h_pri = 0;
                                $A2_h_pri = 0;
                                $P6N_h_pri = 0;
                               $D6N_h_pri = 0;
                                $CAP_h_pri = 0;
                                $D4A_h_pri = 0;
                                $D4N_h_pri = 0;
                                $EAP_h_pri = 0;
                                $EMP_h_pri = 0;
                                $PP5_h_pri = 0;
                                $PP6_h_pri = 0;
                                $SFS_h_pri = 0;
                                $AUTRES_h_pri  = 0;

                                    $DR_f_pri = 0;
                                    $IR_f_pri = 0;
                                    $L2_f_pri = 0;
                                    $G3_f_pri = 0;
                                    $A1_f_pri = 0;
                                    $A2_f_pri = 0;
                                   $P6N_f_pri = 0;
                                   $D6N_f_pri = 0;
                                   $CAP_f_pri = 0;
                                   $D4A_f_pri = 0;
                                   $D4N_f_pri = 0;
                                   $EAP_f_pri = 0;
                                   $EMP_f_pri = 0;
                                   $PP5_f_pri = 0;
                                   $PP6_f_pri = 0;
                                   $SFS_f_pri = 0;
                                $AUTRES_f_pri = 0;

                                $DR_h_sec = 0;
                                $IR_h_sec = 0;
                                $L2_h_sec = 0;
                                $G3_h_sec = 0;
                                $A1_h_sec = 0;
                                $A2_h_sec = 0;
                                $P6N_h_sec = 0;
                                $D6N_h_sec = 0;
                                $CAP_h_sec = 0;
                                $D4A_h_sec = 0;
                                $D4N_h_sec = 0;
                                $EAP_h_sec = 0;
                                $EMP_h_sec = 0;
                                $PP5_h_sec = 0;
                                $PP6_h_sec = 0;
                                $SFS_h_sec = 0;
                                $AUTRES_h_sec  = 0;

                                    $DR_f_sec = 0;
                                    $IR_f_sec = 0;
                                    $L2_f_sec = 0;
                                    $G3_f_sec = 0;
                                    $A1_f_sec = 0;
                                    $A2_f_sec = 0;
                                   $P6N_f_sec = 0;
                                   $D6N_f_sec = 0;
                                   $CAP_f_sec = 0;
                                   $D4A_f_sec = 0;
                                   $D4N_f_sec = 0;
                                   $EAP_f_sec = 0;
                                   $EMP_f_sec = 0;
                                   $PP5_f_sec = 0;
                                   $PP6_f_sec = 0;
                                   $SFS_f_sec = 0;
                                $AUTRES_f_sec = 0;

                                //TOTAUX DROITS
                                $h_tot_mat = 0;
                                $f_tot_mat = 0;
                                $hf_tot_mat = 0;

                                $h_tot_pri = 0;
                                $f_tot_pri = 0;
                                $hf_tot_pri = 0;

                                $h_tot_sec = 0;
                                $f_tot_sec = 0;
                                $hf_tot_sec = 0;

                                
                                
                                $id_p = $paroisse["id"];
                                $nom_p = $paroisse["nom_sous_div"];
                                $nbr_ecol_mat = 0;
                                

                                //$tab_sous_div = query("SELECT * FROM sous_div where belongs_to = ?",$id_p);
                               // foreach ($tab_sous_div as $sd) {
                                   // $id_sd = $sd["id"];
                                   

                                    $tab_ecole = query("SELECT * FROM ecole2 where belongs_to = ? ", $id_p);
                                    foreach ($tab_ecole as $tb_ec) {
                                        $nbr_personl = query("SELECT COUNT(*) AS nbr FROM personnel WHERE ecole_affect = ?",$tb_ec["id"]);

                                        if ($tb_ec["id"] >0) {
                                           
                                            if ($tb_ec["id_niveau"] == "Maternelle") {
                                              $DR_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"DR","01");
                                                $IR_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"IR","01");
                                                $L2_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"L2/LA","01");
                                                $G3_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"G3","01");
                                                $A1_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A1","01");
                                                $A2_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A2","01");
                                               $P6N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"P6N","01");
                                               $D6N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D6N","01");
                                               $CAP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"CAP/D6A","01");
                                               $D4A_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4A","01");
                                               $D4N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4N","01");
                                               $EAP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EAP","01");
                                               $EMP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EMP","01");
                                               $PP5_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP5","01");
                                               $PP6_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP6","01");
                                               $SFS_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"SFS","01");
                                                $AUTRES_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"AUTRES","01");

                                                $DR_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"DR","02");
                                                $IR_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"IR","02");
                                                $L2_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"L2/LA","02");
                                                $G3_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"G3","02");
                                                $A1_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A1","02");
                                                $A2_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A2","02");
                                               $P6N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"P6N","02");
                                               $D6N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D6N","02");
                                               $CAP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"CAP/D6A","02");
                                               $D4A_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4A","02");
                                               $D4N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4N","02");
                                               $EAP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EAP","02");
                                               $EMP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EMP","02");
                                               $PP5_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP5","02");
                                               $PP6_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP6","02");
                                               $SFS_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"SFS","02");
                                                $AUTRES_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"AUTRES","02");  

                                        $DR_h = $DR_tab_h[0]["nbr"] + $DR_h ;
                                        $DR_f =  $DR_tab_f[0]["nbr"] + $DR_f ;
                                        $IR_h = $IR_tab_h[0]["nbr"] + $IR_h ;
                                        $IR_f = $IR_tab_f[0]["nbr"] + $IR_f ;
                                        $L2_h = $L2_tab_h[0]["nbr"] + $L2_h ;
                                        $L2_f = $L2_tab_f[0]["nbr"] + $L2_f ;
                                        $G3_h = $G3_tab_h[0]["nbr"] + $G3_h ;
                                        $G3_f = $G3_tab_f[0]["nbr"] + $G3_f ;
                                        $A1_h = $A1_tab_h[0]["nbr"] + $A1_h ;
                                        $A1_f = $A1_tab_f[0]["nbr"] + $A1_f ;
                                        $A2_h = $A2_tab_h[0]["nbr"] + $A2_h ;
                                        $A2_f = $A2_tab_f[0]["nbr"] + $A2_f ;
                                        $P6N_h = $P6N_tab_h[0]["nbr"] + $P6N_h;
                                        $P6N_f = $P6N_tab_f[0]["nbr"] + $P6N_f;
                                        $D6N_h = $D6N_tab_h[0]["nbr"] + $D6N_h;
                                        $D6N_f = $D6N_tab_f[0]["nbr"] + $D6N_f;
                                        $CAP_h = $CAP_tab_h[0]["nbr"] + $CAP_h;
                                        $CAP_f = $CAP_tab_f[0]["nbr"] + $CAP_f;
                                        $D4A_h = $D4A_tab_h[0]["nbr"] + $D4A_h;
                                        $D4A_f = $D4A_tab_f[0]["nbr"] + $D4A_f;
                                        $D4N_h = $D4N_tab_h[0]["nbr"] + $D4N_h;
                                        $D4N_f = $D4N_tab_f[0]["nbr"] + $D4N_f;
                                        $EAP_h = $EAP_tab_h[0]["nbr"] + $EAP_h;
                                        $EAP_f = $EAP_tab_f[0]["nbr"] + $EAP_f;
                                        $EMP_h = $EMP_tab_h[0]["nbr"] + $EMP_h;
                                        $EMP_f = $EMP_tab_f[0]["nbr"] + $EMP_f;
                                        $PP5_h = $PP5_tab_h[0]["nbr"] + $PP5_h;
                                        $PP5_f = $PP5_tab_f[0]["nbr"] + $PP5_f;
                                        $PP6_h = $PP6_tab_h[0]["nbr"] + $PP6_h;
                                        $PP6_f = $PP6_tab_f[0]["nbr"] + $PP6_f;
                                        $SFS_h = $SFS_tab_h[0]["nbr"] + $SFS_h;
                                        $SFS_f = $SFS_tab_f[0]["nbr"] + $SFS_f;
                                        $AUTRES_h = $AUTRES_tab_h[0]["nbr"] + $AUTRES_h;
                                        $AUTRES_f = $AUTRES_tab_f[0]["nbr"] + $AUTRES_f;

                                $DR_h_tot_mat = $DR_h_tot_mat + $DR_tab_h[0]["nbr"];
                                $IR_h_tot_mat = $IR_h_tot_mat + $IR_tab_h[0]["nbr"];
                                $L2_h_tot_mat = $L2_h_tot_mat + $L2_tab_h[0]["nbr"];
                                $G3_h_tot_mat = $G3_h_tot_mat + $G3_tab_h[0]["nbr"];
                                $A1_h_tot_mat = $A1_h_tot_mat + $A1_tab_h[0]["nbr"];
                                $A2_h_tot_mat = $A2_h_tot_mat + $A2_tab_h[0]["nbr"];
                                $P6N_h_tot_mat = $P6N_h_tot_mat + $P6N_tab_h[0]["nbr"];
                                $D6N_h_tot_mat = $D6N_h_tot_mat + $D6N_tab_h[0]["nbr"];
                                $CAP_h_tot_mat = $CAP_h_tot_mat + $CAP_tab_h[0]["nbr"];
                                $D4A_h_tot_mat = $D4A_h_tot_mat + $D4A_tab_h[0]["nbr"];
                                $D4N_h_tot_mat = $D4N_h_tot_mat + $D4N_tab_h[0]["nbr"];
                                $EAP_h_tot_mat = $EAP_h_tot_mat + $EAP_tab_h[0]["nbr"];
                                $EMP_h_tot_mat = $EMP_h_tot_mat + $EMP_tab_h[0]["nbr"];
                                $PP5_h_tot_mat = $PP5_h_tot_mat + $PP5_tab_h[0]["nbr"];
                                $PP6_h_tot_mat = $PP6_h_tot_mat + $PP6_tab_h[0]["nbr"];
                                $SFS_h_tot_mat = $SFS_h_tot_mat + $SFS_tab_h[0]["nbr"];
                                $AUTRES_h_tot_mat  =$AUTRES_h_tot_mat + $AUTRES_tab_h[0]["nbr"];

                                    $DR_f_tot_mat = $DR_f_tot_mat + $DR_tab_f[0]["nbr"];
                                    $IR_f_tot_mat = $IR_f_tot_mat + $IR_tab_f[0]["nbr"];
                                    $L2_f_tot_mat = $L2_f_tot_mat + $L2_tab_f[0]["nbr"];
                                    $G3_f_tot_mat = $G3_f_tot_mat + $G3_tab_f[0]["nbr"];
                                    $A1_f_tot_mat = $A1_f_tot_mat + $A1_tab_f[0]["nbr"];
                                    $A2_f_tot_mat = $A2_f_tot_mat + $A2_tab_f[0]["nbr"];
                                   $P6N_f_tot_mat = $P6N_f_tot_mat + $P6N_tab_f[0]["nbr"];
                                   $D6N_f_tot_mat = $D6N_f_tot_mat + $D6N_tab_f[0]["nbr"];
                                   $CAP_f_tot_mat = $CAP_f_tot_mat + $CAP_tab_f[0]["nbr"];
                                   $D4A_f_tot_mat = $D4A_f_tot_mat + $D4A_tab_f[0]["nbr"];
                                   $D4N_f_tot_mat = $D4N_f_tot_mat + $D4N_tab_f[0]["nbr"];
                                   $EAP_f_tot_mat = $EAP_f_tot_mat + $EAP_tab_f[0]["nbr"];
                                   $EMP_f_tot_mat = $EMP_f_tot_mat + $EMP_tab_f[0]["nbr"];
                                   $PP5_f_tot_mat = $PP5_f_tot_mat + $PP5_tab_f[0]["nbr"];
                                   $PP6_f_tot_mat = $PP6_f_tot_mat + $PP6_tab_f[0]["nbr"];
                                   $SFS_f_tot_mat = $SFS_f_tot_mat + $SFS_tab_f[0]["nbr"];
                                $AUTRES_f_tot_mat = $AUTRES_f_tot_mat + $AUTRES_tab_f[0]["nbr"];



                                        //somme totaux droits
                                $h_tot_mat = $DR_h+$IR_h+$L2_h+$G3_h+$A1_h+$A2_h+$P6N_h+$D6N_h+$CAP_h+$D4A_h+$D4N_h+$EAP_h+$EMP_h+$PP5_h+$PP6_h+$SFS_h+$AUTRES_h;
                                
                                $f_tot_mat = $DR_f+$IR_f+$L2_f+$G3_f+$A1_f+$A2_f+$P6N_f+$D6N_f+$CAP_f+$D4A_f+$D4N_f+$EAP_f+$EMP_f+$PP5_f+$PP6_f+$SFS_f+$AUTRES_f;

                                $hf_tot_mat = $h_tot_mat+$f_tot_mat;

                               /* //totaux generaux mat
                                $h_tot_gen_mat = $h_tot_gen_mat + $h_tot_mat; 
                                $f_tot_gen_mat = $f_tot_gen_mat + $f_tot_mat;
                                107 + 4 
                                */
                                            }

                                            elseif ($tb_ec["id_niveau"] == "Primaire") {
                                               $DR_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"DR","01");
                                                $IR_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"IR","01");
                                                $L2_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"L2/LA","01");
                                                $G3_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"G3","01");
                                                $A1_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A1","01");
                                                $A2_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A2","01");
                                               $P6N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"P6N","01");
                                               $D6N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D6N","01");
                                               $CAP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"CAP/D6A","01");
                                               $D4A_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4A","01");
                                               $D4N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4N","01");
                                               $EAP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EAP","01");
                                               $EMP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EMP","01");
                                               $PP5_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP5","01");
                                               $PP6_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP6","01");
                                               $SFS_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"SFS","01");
                                                $AUTRES_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"AUTRES","01");

                                                $DR_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"DR","02");
                                                $IR_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"IR","02");
                                                $L2_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"L2/LA","02");
                                                $G3_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"G3","02");
                                                $A1_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A1","02");
                                                $A2_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A2","02");
                                               $P6N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"P6N","02");
                                               $D6N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D6N","02");
                                               $CAP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"CAP/D6A","02");
                                               $D4A_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4A","02");
                                               $D4N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4N","02");
                                               $EAP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EAP","02");
                                               $EMP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EMP","02");
                                               $PP5_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP5","02");
                                               $PP6_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP6","02");
                                               $SFS_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"SFS","02");
                                                $AUTRES_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"AUTRES","02");  

                                        $DR_h_pri = $DR_tab_h[0]["nbr"] + $DR_h_pri;
                                        $DR_f_pri =  $DR_tab_f[0]["nbr"] + $DR_f_pri;
                                        $IR_h_pri = $IR_tab_h[0]["nbr"] + $IR_h_pri;
                                        $IR_f_pri = $IR_tab_f[0]["nbr"] + $IR_f_pri;
                                        $L2_h_pri = $L2_tab_h[0]["nbr"] + $L2_h_pri;
                                        $L2_f_pri = $L2_tab_f[0]["nbr"] + $L2_f_pri;
                                        $G3_h_pri = $G3_tab_h[0]["nbr"] + $G3_h_pri;
                                        $G3_f_pri = $G3_tab_f[0]["nbr"] + $G3_f_pri;
                                        $A1_h_pri = $A1_tab_h[0]["nbr"] + $A1_h_pri;
                                        $A1_f_pri = $A1_tab_f[0]["nbr"] + $A1_f_pri;
                                        $A2_h_pri = $A2_tab_h[0]["nbr"] + $A2_h_pri;
                                        $A2_f_pri = $A2_tab_f[0]["nbr"] + $A2_f_pri;
                                        $P6N_h_pri = $P6N_tab_h[0]["nbr"] + $P6N_h_pri;
                                        $P6N_f_pri = $P6N_tab_f[0]["nbr"] + $P6N_f_pri;
                                        $D6N_h_pri = $D6N_tab_h[0]["nbr"] + $D6N_h_pri;
                                        $D6N_f_pri = $D6N_tab_f[0]["nbr"] + $D6N_f_pri;
                                        $CAP_h_pri = $CAP_tab_h[0]["nbr"] + $CAP_h_pri;
                                        $CAP_f_pri = $CAP_tab_f[0]["nbr"] + $CAP_f_pri;
                                        $D4A_h_pri = $D4A_tab_h[0]["nbr"] + $D4A_h_pri;
                                        $D4A_f_pri = $D4A_tab_f[0]["nbr"] + $D4A_f_pri;
                                        $D4N_h_pri = $D4N_tab_h[0]["nbr"] + $D4N_h_pri;
                                        $D4N_f_pri = $D4N_tab_f[0]["nbr"] + $D4N_f_pri;
                                        $EAP_h_pri = $EAP_tab_h[0]["nbr"] + $EAP_h_pri;
                                        $EAP_f_pri = $EAP_tab_f[0]["nbr"] + $EAP_f_pri;
                                        $EMP_h_pri = $EMP_tab_h[0]["nbr"] + $EMP_h_pri;
                                        $EMP_f_pri = $EMP_tab_f[0]["nbr"] + $EMP_f_pri;
                                        $PP5_h_pri = $PP5_tab_h[0]["nbr"] + $PP5_h_pri;
                                        $PP5_f_pri = $PP5_tab_f[0]["nbr"] + $PP5_f_pri;
                                        $PP6_h_pri = $PP6_tab_h[0]["nbr"] + $PP6_h_pri;
                                        $PP6_f_pri = $PP6_tab_f[0]["nbr"] + $PP6_f_pri;
                                        $SFS_h_pri = $SFS_tab_h[0]["nbr"] + $SFS_h_pri;
                                        $SFS_f_pri = $SFS_tab_f[0]["nbr"] + $SFS_f_pri;
                                        $AUTRES_h_pri = $AUTRES_tab_h[0]["nbr"] + $AUTRES_h_pri;
                                        $AUTRES_f_pri = $AUTRES_tab_f[0]["nbr"] + $AUTRES_f_pri;


                                        //TOTAUX PRIMAIRE
                                         $DR_h_tot_pri = $DR_h_tot_pri + $DR_tab_h[0]["nbr"];
                                $IR_h_tot_pri = $IR_h_tot_pri + $IR_tab_h[0]["nbr"];
                                $L2_h_tot_pri = $L2_h_tot_pri + $L2_tab_h[0]["nbr"];
                                $G3_h_tot_pri = $G3_h_tot_pri + $G3_tab_h[0]["nbr"];
                                $A1_h_tot_pri = $A1_h_tot_pri + $A1_tab_h[0]["nbr"];
                                $A2_h_tot_pri = $A2_h_tot_pri + $A2_tab_h[0]["nbr"];
                                $P6N_h_tot_pri = $P6N_h_tot_pri + $P6N_tab_h[0]["nbr"];
                                $D6N_h_tot_pri = $D6N_h_tot_pri  + $D6N_tab_h[0]["nbr"];
                                $CAP_h_tot_pri = $CAP_h_tot_pri + $CAP_tab_h[0]["nbr"];
                                $D4A_h_tot_pri = $D4A_h_tot_pri + $D4A_tab_h[0]["nbr"];
                                $D4N_h_tot_pri = $D4N_h_tot_pri + $D4N_tab_h[0]["nbr"];
                                $EAP_h_tot_pri = $EAP_h_tot_pri + $EAP_tab_h[0]["nbr"];
                                $EMP_h_tot_pri = $EMP_h_tot_pri + $EMP_tab_h[0]["nbr"];
                                $PP5_h_tot_pri = $PP5_h_tot_pri + $PP5_tab_h[0]["nbr"];
                                $PP6_h_tot_pri = $PP6_h_tot_pri + $PP6_tab_h[0]["nbr"];
                                $SFS_h_tot_pri = $SFS_h_tot_pri + $SFS_tab_h[0]["nbr"];
                                $AUTRES_h_tot_pri  =$AUTRES_h_tot_pri + $AUTRES_tab_h[0]["nbr"];

                                    $DR_f_tot_pri = $DR_f_tot_pri + $DR_tab_f[0]["nbr"];
                                    $IR_f_tot_pri = $IR_f_tot_pri + $IR_tab_f[0]["nbr"];
                                    $L2_f_tot_pri = $L2_f_tot_pri + $L2_tab_f[0]["nbr"];
                                    $G3_f_tot_pri = $G3_f_tot_pri + $G3_tab_f[0]["nbr"];
                                    $A1_f_tot_pri = $A1_f_tot_pri + $A1_tab_f[0]["nbr"];
                                    $A2_f_tot_pri = $A2_f_tot_pri + $A2_tab_f[0]["nbr"];
                                   $P6N_f_tot_pri = $P6N_f_tot_pri + $P6N_tab_f[0]["nbr"];
                                   $D6N_f_tot_pri = $D6N_f_tot_pri + $D6N_tab_f[0]["nbr"];
                                   $CAP_f_tot_pri = $CAP_f_tot_pri + $CAP_tab_f[0]["nbr"];
                                   $D4A_f_tot_pri = $D4A_f_tot_pri + $D4A_tab_f[0]["nbr"];
                                   $D4N_f_tot_pri = $D4N_f_tot_pri + $D4N_tab_f[0]["nbr"];
                                   $EAP_f_tot_pri = $EAP_f_tot_pri + $EAP_tab_f[0]["nbr"];
                                   $EMP_f_tot_pri = $EMP_f_tot_pri + $EMP_tab_f[0]["nbr"];
                                   $PP5_f_tot_pri = $PP5_f_tot_pri + $PP5_tab_f[0]["nbr"];
                                   $PP6_f_tot_pri = $PP6_f_tot_pri + $PP6_tab_f[0]["nbr"];
                                   $SFS_f_tot_pri = $SFS_f_tot_pri + $SFS_tab_f[0]["nbr"];
                                $AUTRES_f_tot_pri = $AUTRES_f_tot_pri + $AUTRES_tab_f[0]["nbr"];

                                //TOTAUX DROITS
                                $h_tot_pri = $DR_h_pri+$IR_h_pri+$L2_h_pri+$G3_h_pri+$A1_h_pri+$A2_h_pri+$P6N_h_pri+$D6N_h_pri+$CAP_h_pri+$D4A_h_pri+$D4N_h_pri+$EAP_h_pri+$EMP_h_pri+$PP5_h_pri+$PP6_h_pri+$SFS_h_pri+$AUTRES_h_pri;
                                
                                $f_tot_pri = $DR_f_pri+$IR_f_pri+$L2_f_pri+$G3_f_pri+$A1_f_pri+$A2_f_pri+$P6N_f_pri+$D6N_f_pri+$CAP_f_pri+$D4A_f_pri+$D4N_f_pri+$EAP_f_pri+$EMP_f_pri+$PP5_f_pri+$PP6_f_pri+$SFS_f_pri+$AUTRES_f_pri;

                                $hf_tot_pri = $h_tot_pri+$f_tot_pri;

                                //totaux generaux mat
                                /* $h_tot_gen_pri =$h_tot_gen_pri+  $h_tot_pri; 
                                $f_tot_gen_pri = $f_tot_gen_pri + $f_tot_pri;
                                echo "$h_tot_gen_pri + $h_tot_pri <br>";*/
                                            }
                                            elseif ($tb_ec["id_niveau"] == "Secondaire") {

                                                $DR_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"DR","01");
                                                $IR_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"IR","01");
                                                $L2_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"L2/LA","01");
                                                $G3_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"G3","01");
                                                $A1_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A1","01");
                                                $A2_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A2","01");
                                               $P6N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"P6N","01");
                                               $D6N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D6N","01");
                                               $CAP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"CAP/D6A","01");
                                               $D4A_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4A","01");
                                               $D4N_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4N","01");
                                               $EAP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EAP","01");
                                               $EMP_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EMP","01");
                                               $PP5_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP5","01");
                                               $PP6_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP6","01");
                                               $SFS_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"SFS","01");
                                                $AUTRES_tab_h = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"AUTRES","01");

                                                $DR_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"DR","02");
                                                $IR_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"IR","02");
                                                $L2_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"L2/LA","02");
                                                $G3_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"G3","02");
                                                $A1_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A1","02");
                                                $A2_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"A2","02");
                                               $P6N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"P6N","02");
                                               $D6N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D6N","02");
                                               $CAP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"CAP/D6A","02");
                                               $D4A_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4A","02");
                                               $D4N_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"D4N","02");
                                               $EAP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EAP","02");
                                               $EMP_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"EMP","02");
                                               $PP5_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP5","02");
                                               $PP6_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"PP6","02");
                                               $SFS_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"SFS","02");
                                                $AUTRES_tab_f = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and qualdip_p = ? and sex_p = ?",$tb_ec["id"],"AUTRES","02");  

                                        $DR_h_sec = $DR_tab_h[0]["nbr"] + $DR_h_sec;
                                        $DR_f_sec = $DR_tab_f[0]["nbr"] + $DR_f_sec;
                                        $IR_h_sec = $IR_tab_h[0]["nbr"] + $IR_h_sec;
                                        $IR_f_sec = $IR_tab_f[0]["nbr"] + $IR_f_sec;
                                        $L2_h_sec = $L2_tab_h[0]["nbr"] + $L2_h_sec;
                                        $L2_f_sec = $L2_tab_f[0]["nbr"] + $L2_f_sec;
                                        $G3_h_sec = $G3_tab_h[0]["nbr"] + $G3_h_sec;
                                        $G3_f_sec = $G3_tab_f[0]["nbr"] + $G3_f_sec;
                                        $A1_h_sec = $A1_tab_h[0]["nbr"] + $A1_h_sec;
                                        $A1_f_sec = $A1_tab_f[0]["nbr"] + $A1_f_sec;
                                        $A2_h_sec = $A2_tab_h[0]["nbr"] + $A2_h_sec;
                                        $A2_f_sec = $A2_tab_f[0]["nbr"] + $A2_f_sec;
                                        $P6N_h_sec = $P6N_tab_h[0]["nbr"] + $P6N_h_sec;
                                        $P6N_f_sec = $P6N_tab_f[0]["nbr"] + $P6N_f_sec;
                                        $D6N_h_sec = $D6N_tab_h[0]["nbr"] + $D6N_h_sec;
                                        $D6N_f_sec = $D6N_tab_f[0]["nbr"] + $D6N_f_sec;
                                        $CAP_h_sec = $CAP_tab_h[0]["nbr"] + $CAP_h_sec;
                                        $CAP_f_sec = $CAP_tab_f[0]["nbr"] + $CAP_f_sec;
                                        $D4A_h_sec = $D4A_tab_h[0]["nbr"] + $D4A_h_sec;
                                        $D4A_f_sec = $D4A_tab_f[0]["nbr"] + $D4A_f_sec;
                                        $D4N_h_sec = $D4N_tab_h[0]["nbr"] + $D4N_h_sec;
                                        $D4N_f_sec = $D4N_tab_f[0]["nbr"] + $D4N_f_sec;
                                        $EAP_h_sec = $EAP_tab_h[0]["nbr"] + $EAP_h_sec;
                                        $EAP_f_sec = $EAP_tab_f[0]["nbr"] + $EAP_f_sec;
                                        $EMP_h_sec = $EMP_tab_h[0]["nbr"] + $EMP_h_sec;
                                        $EMP_f_sec = $EMP_tab_f[0]["nbr"] + $EMP_f_sec;
                                        $PP5_h_sec = $PP5_tab_h[0]["nbr"] + $PP5_h_sec;
                                        $PP5_f_sec = $PP5_tab_f[0]["nbr"] + $PP5_f_sec;
                                        $PP6_h_sec = $PP6_tab_h[0]["nbr"] + $PP6_h_sec;
                                        $PP6_f_sec = $PP6_tab_f[0]["nbr"] + $PP6_f_sec;
                                        $SFS_h_sec = $SFS_tab_h[0]["nbr"] + $SFS_h_sec;
                                        $SFS_f_sec= $SFS_tab_f[0]["nbr"] + $SFS_f_sec;
                                        $AUTRES_h_sec = $AUTRES_tab_h[0]["nbr"] + $AUTRES_h_sec;
                                        $AUTRES_f_sec = $AUTRES_tab_f[0]["nbr"] + $AUTRES_f_sec;

                                        /* $AUTRES_f_pri = $AUTRES_tab_f[0]["nbr"] + $AUTRES_f_pri;


                                        //TOTAUX PRIMAIRE
                                         $DR_h_tot_pri = $DR_h_tot_pri + $DR_tab_h[0]["nbr"];*/

                                         //TOTAUX PRIMAIRE
                                $DR_h_tot_sec = $DR_h_tot_sec +  $DR_tab_h[0]["nbr"];
                                $IR_h_tot_sec = $IR_h_tot_sec +  $IR_tab_h[0]["nbr"];
                                $L2_h_tot_sec = $L2_h_tot_sec +  $L2_tab_h[0]["nbr"];
                                $G3_h_tot_sec = $G3_h_tot_sec +  $G3_tab_h[0]["nbr"];
                                $A1_h_tot_sec = $A1_h_tot_sec +  $A1_tab_h[0]["nbr"];
                                $A2_h_tot_sec = $A2_h_tot_sec +  $A2_tab_h[0]["nbr"];
                                $P6N_h_tot_sec = $P6N_h_tot_sec + $P6N_tab_h[0]["nbr"] ;
                                $D6N_h_tot_sec = $D6N_h_tot_sec + $D6N_tab_h[0]["nbr"] ;
                                $CAP_h_tot_sec = $CAP_h_tot_sec + $CAP_tab_h[0]["nbr"] ;
                                $D4A_h_tot_sec = $D4A_h_tot_sec + $D4A_tab_h[0]["nbr"] ;
                                $D4N_h_tot_sec = $D4N_h_tot_sec + $D4N_tab_h[0]["nbr"] ;
                                $EAP_h_tot_sec = $EAP_h_tot_sec + $EAP_tab_h[0]["nbr"] ;
                                $EMP_h_tot_sec = $EMP_h_tot_sec + $EMP_tab_h[0]["nbr"] ;
                                $PP5_h_tot_sec = $PP5_h_tot_sec + $PP5_tab_h[0]["nbr"] ;
                                $PP6_h_tot_sec = $PP6_h_tot_sec + $PP6_tab_h[0]["nbr"] ;
                                $SFS_h_tot_sec = $SFS_h_tot_sec + $SFS_tab_h[0]["nbr"] ;
                                $AUTRES_h_tot_sec  =$AUTRES_h_tot_sec + $AUTRES_h_tot_sec[0]["nbr"];

                                    $DR_f_tot_sec = $DR_f_tot_sec + $DR_tab_f[0]["nbr"];
                                    $IR_f_tot_sec = $IR_f_tot_sec + $IR_tab_f[0]["nbr"];
                                    $L2_f_tot_sec = $L2_f_tot_sec + $L2_tab_f[0]["nbr"];
                                    $G3_f_tot_sec = $G3_f_tot_sec + $G3_tab_f[0]["nbr"];
                                    $A1_f_tot_sec = $A1_f_tot_sec + $A1_tab_f[0]["nbr"];
                                    $A2_f_tot_sec = $A2_f_tot_sec + $A2_tab_f[0]["nbr"];
                                   $P6N_f_tot_sec = $P6N_f_tot_sec + $P6N_tab_f[0]["nbr"];
                                   $D6N_f_tot_sec = $D6N_f_tot_sec + $D6N_tab_f[0]["nbr"];
                                   $CAP_f_tot_sec = $CAP_f_tot_sec + $CAP_tab_f[0]["nbr"];
                                   $D4A_f_tot_sec = $D4A_f_tot_sec + $D4A_tab_f[0]["nbr"];
                                   $D4N_f_tot_sec = $D4N_f_tot_sec + $D4N_tab_f[0]["nbr"];
                                   $EAP_f_tot_sec = $EAP_f_tot_sec + $EAP_tab_f[0]["nbr"];
                                   $EMP_f_tot_sec = $EMP_f_tot_sec + $EMP_tab_f[0]["nbr"];
                                   $PP5_f_tot_sec = $PP5_f_tot_sec + $PP5_tab_f[0]["nbr"];
                                   $PP6_f_tot_sec = $PP6_f_tot_sec + $PP6_tab_f[0]["nbr"];
                                   $SFS_f_tot_sec = $SFS_f_tot_sec + $SFS_tab_f[0]["nbr"];
                                $AUTRES_f_tot_sec = $AUTRES_f_tot_sec + $AUTRES_tab_f[0]["nbr"];

                                //TOTAUX DROITS
                                $h_tot_sec = $DR_h_sec+$IR_h_sec+$L2_h_sec+$G3_h_sec+$A1_h_sec+$A2_h_sec+$P6N_h_sec+$D6N_h_sec+$CAP_h_sec+$D4A_h_sec+$D4N_h_sec+$EAP_h_sec+$EMP_h_sec+$PP5_h_sec+$PP6_h_sec+$SFS_h_sec+$AUTRES_h_sec;
                                
                                $f_tot_sec = $DR_f_sec+$IR_f_sec+$L2_f_sec+$G3_f_sec+$A1_f_sec+$A2_f_sec+$P6N_f_sec+$D6N_f_sec+$CAP_f_sec+$D4A_f_sec+$D4N_f_sec+$EAP_f_sec+$EMP_f_sec+$PP5_f_sec+$PP6_f_sec+$SFS_f_sec+$AUTRES_f_sec;

                                $hf_tot_sec = $h_tot_sec+$f_tot_sec;

                               /* //totaux generaux mat
                                $h_tot_gen_sec = $h_tot_gen_sec + $h_tot_sec; 
                                $f_tot_gen_sec = $f_tot_gen_sec + $f_tot_sec;*/
                                                
                                            }

                                            
                                    
                                        }


                                        //echo $nbr_personl[0]["nbr"]."<br>"; 
                                        //echo "SELECT COUNT(*) AS nbr FROM personnel WHERE ecole_affect = ".$tb_ec["id"]."<br>";
                                        //qualdip_p
                                        
                                         
                                     }


                                //}
                                $id_pp ++;
                                echo "<tr>";
                                        echo "<td rowspan='3'>$id_pp</td>";
                                        echo "<td rowspan='3'>$nom_p</td>";
                                        echo "<td >MATERNELLE</td>";
                                        //for ($i=0; $i < 17; $i++) { 
                                            echo "<td>". ($DR_h == 0  ? '' : $DR_h)."</td>";
                                            echo "<td>". ($DR_f == 0  ? '' : $DR_f)."</td>";
                                            echo "<td>". ($IR_h == 0  ? '' : $IR_h)."</td>";
                                            echo "<td>". ($IR_f == 0  ? '' : $IR_f)."</td>";
                                            echo "<td>". ($L2_h == 0  ? '' : $L2_h)."</td>";
                                            echo "<td>". ($L2_f == 0  ? '' : $L2_f)."</td>";
                                            echo "<td>". ($G3_h == 0  ? '' : $G3_h)."</td>";
                                            echo "<td>". ($G3_f == 0  ? '' : $G3_f)."</td>";
                                            echo "<td>". ($A1_h == 0  ? '' : $A1_h)."</td>";
                                            echo "<td>". ($A1_f == 0  ? '' : $A1_f)."</td>";
                                            echo "<td>". ($A2_h == 0  ? '' : $A2_h)."</td>";
                                            echo "<td>". ($A2_f == 0  ? '' : $A2_f)."</td>";
                                            echo "<td>". ($P6N_h == 0  ? '' : $P6N_h)."</td>";
                                            echo "<td>". ($P6N_f == 0  ? '' : $P6N_f)."</td>";
                                            echo "<td>". ($D6N_h == 0  ? '' : $D6N_h)."</td>";
                                            echo "<td>". ($D6N_f == 0  ? '' : $D6N_f)."</td>";
                                            echo "<td>". ($CAP_h == 0  ? '' : $CAP_h)."</td>";

                                            echo "<td>". ($CAP_f == 0  ? '' : $CAP_f)."</td>";
                                            echo "<td>". ($D4A_h == 0  ? '' : $D4A_h)."</td>";
                                            echo "<td>". ($D4A_f == 0  ? '' : $D4A_f)."</td>";
                                            echo "<td>". ($D4N_h == 0  ? '' : $D4N_h)."</td>";
                                            echo "<td>". ($D4N_f == 0  ? '' : $D4N_f)."</td>";
                                            echo "<td>". ($EAP_h == 0  ? '' : $EAP_h)."</td>";
                                            echo "<td>". ($EAP_f == 0  ? '' : $EAP_f)."</td>";
                                            echo "<td>". ($EMP_h == 0  ? '' : $EMP_h)."</td>";
                                            echo "<td>". ($EMP_f == 0  ? '' : $EMP_f)."</td>";
                                            echo "<td>". ($PP5_h == 0  ? '' : $PP5_h)."</td>";
                                            echo "<td>". ($PP5_f == 0  ? '' : $PP5_f)."</td>";
                                            echo "<td>". ($PP6_h == 0  ? '' : $PP6_h)."</td>";
                                            echo "<td>". ($PP6_f == 0  ? '' : $PP6_f)."</td>";
                                            echo "<td>". ($SFS_h == 0  ? '' : $SFS_h)."</td>";
                                            echo "<td>". ($SFS_f == 0  ? '' : $SFS_f)."</td>";
                                            echo "<td>". ($AUTRES_h == 0  ? '' : $AUTRES_h)."</td>";
                                            echo "<td>". ($AUTRES_f == 0  ? '' : $AUTRES_f)."</td>";
                                            
                                               
                                        //}
                                             //totaux generaux mat
                                $h_tot_gen_mat = $h_tot_gen_mat + $h_tot_mat; 
                                $f_tot_gen_mat = $f_tot_gen_mat + $f_tot_mat; 
                                
                                             
                                        echo "<td class='tr'>$h_tot_mat</td>";
                                        echo "<td class='tr'>$f_tot_mat</td>";
                                        echo "<td class='tr'>$hf_tot_mat</td>";

                                        echo "</tr>";

                                        echo "<tr>";
                                        
                                        echo "<td>PRIMAIRE</td>";
                                        //for ($i=0; $i < 17; $i++) { 
                                           // echo "<td> -</td>";
                                            //echo "<td> -</td>";
                                               
                                        //}
                                        echo "<td>". ($DR_h_pri == 0  ? '' : $DR_h_pri)."</td>";
                                            echo "<td>". ($DR_f_pri == 0  ? '' : $DR_f_pri)."</td>";
                                            echo "<td>". ($IR_h_pri == 0  ? '' : $IR_h_pri)."</td>";
                                            echo "<td>". ($IR_f_pri == 0  ? '' : $IR_f_pri)."</td>";
                                            echo "<td>". ($L2_h_pri == 0  ? '' : $L2_h_pri)."</td>";
                                            echo "<td>". ($L2_f_pri == 0  ? '' : $L2_f_pri)."</td>";
                                            echo "<td>". ($G3_h_pri == 0  ? '' : $G3_h_pri)."</td>";
                                            echo "<td>". ($G3_f_pri == 0  ? '' : $G3_f_pri)."</td>";
                                            echo "<td>". ($A1_h_pri == 0  ? '' : $A1_h_pri)."</td>";
                                            echo "<td>". ($A1_f_pri == 0  ? '' : $A1_f_pri)."</td>";
                                            echo "<td>". ($A2_h_pri == 0  ? '' : $A2_h_pri)."</td>";
                                            echo "<td>". ($A2_f_pri == 0  ? '' : $A2_f_pri)."</td>";
                                            echo "<td>". ($P6N_h_pri == 0  ? '' : $P6N_h_pri)."</td>";
                                            echo "<td>". ($P6N_f_pri == 0  ? '' : $P6N_f_pri)."</td>";
                                            echo "<td>". ($D6N_h_pri == 0  ? '' : $D6N_h_pri)."</td>";
                                            echo "<td>". ($D6N_f_pri == 0  ? '' : $D6N_f_pri)."</td>";
                                            echo "<td>". ($CAP_h_pri == 0  ? '' : $CAP_h_pri)."</td>";

                                            echo "<td>". ($CAP_f_pri == 0  ? '' : $CAP_f_pri)."</td>";
                                            echo "<td>". ($D4A_h_pri == 0  ? '' : $D4A_h_pri)."</td>";
                                            echo "<td>". ($D4A_f_pri == 0  ? '' : $D4A_f_pri)."</td>";
                                            echo "<td>". ($D4N_h_pri == 0  ? '' : $D4N_h_pri)."</td>";
                                            echo "<td>". ($D4N_f_pri == 0  ? '' : $D4N_f_pri)."</td>";
                                            echo "<td>". ($EAP_h_pri == 0  ? '' : $EAP_h_pri)."</td>";
                                            echo "<td>". ($EAP_f_pri == 0  ? '' : $EAP_f_pri)."</td>";
                                            echo "<td>". ($EMP_h_pri == 0  ? '' : $EMP_h_pri)."</td>";
                                            echo "<td>". ($EMP_f_pri == 0  ? '' : $EMP_f_pri)."</td>";
                                            echo "<td>". ($PP5_h_pri == 0  ? '' : $PP5_h_pri)."</td>";
                                            echo "<td>". ($PP5_f_pri == 0  ? '' : $PP5_f_pri)."</td>";
                                            echo "<td>". ($PP6_h_pri == 0  ? '' : $PP6_h_pri)."</td>";
                                            echo "<td>". ($PP6_f_pri == 0  ? '' : $PP6_f_pri)."</td>";
                                            echo "<td>". ($SFS_h_pri == 0  ? '' : $SFS_h_pri)."</td>";
                                            echo "<td>". ($SFS_f_pri == 0  ? '' : $SFS_f_pri)."</td>";
                                            echo "<td>". ($AUTRES_h_pri == 0  ? '' : $AUTRES_h_pri)."</td>";
                                            echo "<td>". ($AUTRES_f_pri == 0  ? '' : $AUTRES_f_pri)."</td>";

                                    $h_tot_gen_pri =$h_tot_gen_pri+  $h_tot_pri; 
                                    $f_tot_gen_pri = $f_tot_gen_pri + $f_tot_pri;

                                //echo "$h_tot_gen_pri + $h_tot_pri <br>";
                                        echo "<td class='tr'>$h_tot_pri</td>";
                                        echo "<td class='tr'>$f_tot_pri</td>";
                                        echo "<td class='tr'>$hf_tot_pri</td>";

                                        echo "</tr>";

                                        echo "<tr>";
                                        
                                        echo "<td>SECONDAIRE</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        } */ 
                                        echo "<td>". ($DR_h_sec == 0  ? '' : $DR_h_sec)."</td>";
                                            echo "<td>". ($DR_f_sec == 0  ? '' : $DR_f_sec)."</td>";
                                            echo "<td>". ($IR_h_sec == 0  ? '' : $IR_h_sec)."</td>";
                                            echo "<td>". ($IR_f_sec == 0  ? '' : $IR_f_sec)."</td>";
                                            echo "<td>". ($L2_h_sec == 0  ? '' : $L2_h_sec)."</td>";
                                            echo "<td>". ($L2_f_sec == 0  ? '' : $L2_f_sec)."</td>";
                                            echo "<td>". ($G3_h_sec == 0  ? '' : $G3_h_sec)."</td>";
                                            echo "<td>". ($G3_f_sec == 0  ? '' : $G3_f_sec)."</td>";
                                            echo "<td>". ($A1_h_sec == 0  ? '' : $A1_h_sec)."</td>";
                                            echo "<td>". ($A1_f_sec == 0  ? '' : $A1_f_sec)."</td>";
                                            echo "<td>". ($A2_h_sec == 0  ? '' : $A2_h_sec)."</td>";
                                            echo "<td>". ($A2_f_sec == 0  ? '' : $A2_f_sec)."</td>";
                                            echo "<td>". ($P6N_h_sec == 0  ? '' : $P6N_h_sec)."</td>";
                                            echo "<td>". ($P6N_f_sec == 0  ? '' : $P6N_f_sec)."</td>";
                                            echo "<td>". ($D6N_h_sec == 0  ? '' : $D6N_h_sec)."</td>";
                                            echo "<td>". ($D6N_f_sec == 0  ? '' : $D6N_f_sec)."</td>";
                                            echo "<td>". ($CAP_h_sec == 0  ? '' : $CAP_h_sec)."</td>";

                                            echo "<td>". ($CAP_f_sec == 0  ? '' : $CAP_f_sec)."</td>";
                                            echo "<td>". ($D4A_h_sec == 0  ? '' : $D4A_h_sec)."</td>";
                                            echo "<td>". ($D4A_f_sec == 0  ? '' : $D4A_f_sec)."</td>";
                                            echo "<td>". ($D4N_h_sec == 0  ? '' : $D4N_h_sec)."</td>";
                                            echo "<td>". ($D4N_f_sec == 0  ? '' : $D4N_f_sec)."</td>";
                                            echo "<td>". ($EAP_h_sec == 0  ? '' : $EAP_h_sec)."</td>";
                                            echo "<td>". ($EAP_f_sec == 0  ? '' : $EAP_f_sec)."</td>";
                                            echo "<td>". ($EMP_h_sec == 0  ? '' : $EMP_h_sec)."</td>";
                                            echo "<td>". ($EMP_f_sec == 0  ? '' : $EMP_f_sec)."</td>";
                                            echo "<td>". ($PP5_h_sec == 0  ? '' : $PP5_h_sec)."</td>";
                                            echo "<td>". ($PP5_f_sec == 0  ? '' : $PP5_f_sec)."</td>";
                                            echo "<td>". ($PP6_h_sec == 0  ? '' : $PP6_h_sec)."</td>";
                                            echo "<td>". ($PP6_f_sec == 0  ? '' : $PP6_f_sec)."</td>";
                                            echo "<td>". ($SFS_h_sec == 0  ? '' : $SFS_h_sec)."</td>";
                                            echo "<td>". ($SFS_f_sec == 0  ? '' : $SFS_f_sec)."</td>";
                                            echo "<td>". ($AUTRES_h_sec == 0  ? '' : $AUTRES_h_sec)."</td>";
                                            echo "<td>". ($AUTRES_f_sec == 0  ? '' : $AUTRES_f_sec)."</td>"; 
                                        
                                         //totaux generaux mat
                                $h_tot_gen_sec = $h_tot_gen_sec + $h_tot_sec; 
                                $f_tot_gen_sec = $f_tot_gen_sec + $f_tot_sec;

                                        echo "<td class='tr'>$h_tot_sec</td>";
                                        echo "<td class='tr'>$f_tot_sec</td>";
                                        echo "<td class='tr'>$hf_tot_sec</td>";

                                        echo "</tr>";                                    
                                }
                                //TOTAUX GENERAUX
                                    $DR_h_tot =$DR_h_tot_mat + $DR_h_tot_pri + $DR_h_tot_sec;
                                    $IR_h_tot =$IR_h_tot_mat + $IR_h_tot_pri + $IR_h_tot_sec;
                                    $L2_h_tot =$L2_h_tot_mat + $L2_h_tot_pri + $L2_h_tot_sec;
                                    $G3_h_tot =$G3_h_tot_mat + $G3_h_tot_pri + $G3_h_tot_sec;
                                    $A1_h_tot =$A1_h_tot_mat + $A1_h_tot_pri + $A1_h_tot_sec;
                                    $A2_h_tot =$A2_h_tot_mat + $A2_h_tot_pri + $A2_h_tot_sec;
                                   $P6N_h_tot =$P6N_h_tot_mat + $P6N_h_tot_pri + $P6N_h_tot_sec;
                                   $D6N_h_tot =$D6N_h_tot_mat + $D6N_h_tot_pri + $D6N_h_tot_sec;
                                   $CAP_h_tot =$CAP_h_tot_mat + $CAP_h_tot_pri + $CAP_h_tot_sec;
                                   $D4A_h_tot =$D4A_h_tot_mat + $D4A_h_tot_pri + $D4A_h_tot_sec;
                                   $D4N_h_tot =$D4N_h_tot_mat + $D4N_h_tot_pri + $D4N_h_tot_sec;
                                   $EAP_h_tot =$EAP_h_tot_mat + $EAP_h_tot_pri + $EAP_h_tot_sec;
                                   $EMP_h_tot =$EMP_h_tot_mat + $EMP_h_tot_pri + $EMP_h_tot_sec;
                                   $PP5_h_tot =$PP5_h_tot_mat + $PP5_h_tot_pri + $PP5_h_tot_sec;
                                   $PP6_h_tot =$PP6_h_tot_mat + $PP6_h_tot_pri + $PP6_h_tot_sec;
                                   $SFS_h_tot =$SFS_h_tot_mat + $SFS_h_tot_pri + $SFS_h_tot_sec;
                                $AUTRES_h_tot =  $AUTRES_h_tot_mat + $AUTRES_h_tot_pri + $AUTRES_h_tot_sec;
                                    $DR_f_tot =$DR_f_tot_mat + $DR_f_tot_pri + $DR_f_tot_sec;
                                    $IR_f_tot =$IR_f_tot_mat + $IR_f_tot_pri + $IR_f_tot_sec;
                                    $L2_f_tot =$L2_f_tot_mat + $L2_f_tot_pri + $L2_f_tot_sec;
                                    $G3_f_tot =$G3_f_tot_mat + $G3_f_tot_pri + $G3_f_tot_sec;
                                    $A1_f_tot =$A1_f_tot_mat + $A1_f_tot_pri + $A1_f_tot_sec;
                                    $A2_f_tot =$A2_f_tot_mat + $A2_f_tot_pri + $A2_f_tot_sec;
                                   $P6N_f_tot =$P6N_f_tot_mat + $P6N_f_tot_pri + $P6N_f_tot_sec;
                                   $D6N_f_tot =$D6N_f_tot_mat + $D6N_f_tot_pri + $D6N_f_tot_sec;
                                   $CAP_f_tot =$CAP_f_tot_mat + $CAP_f_tot_pri + $CAP_f_tot_sec;
                                   $D4A_f_tot =$D4A_f_tot_mat + $D4A_f_tot_pri + $D4A_f_tot_sec;
                                   $D4N_f_tot =$D4N_f_tot_mat + $D4N_f_tot_pri + $D4N_f_tot_sec;
                                   $EAP_f_tot =$EAP_f_tot_mat + $EAP_f_tot_pri + $EAP_f_tot_sec;
                                   $EMP_f_tot =$EMP_f_tot_mat + $EMP_f_tot_pri + $EMP_f_tot_sec;
                                   $PP5_f_tot =$PP5_f_tot_mat + $PP5_f_tot_pri + $PP5_f_tot_sec;
                                   $PP6_f_tot =$PP6_f_tot_mat + $PP6_f_tot_pri + $PP6_f_tot_sec;
                                   $SFS_f_tot =$SFS_f_tot_mat + $SFS_f_tot_pri + $SFS_f_tot_sec;
                                $AUTRES_f_tot =$AUTRES_f_tot_mat + $AUTRES_f_tot_pri + $AUTRES_f_tot_sec;

                                //somme totaux gen
                                $hf_tot_gen_mat = $h_tot_gen_mat + $f_tot_gen_mat;
                                $hf_tot_gen_pri = $h_tot_gen_pri + $f_tot_gen_pri;
                                $hf_tot_gen_sec = $h_tot_gen_sec + $f_tot_gen_sec;

                                //totaux generaux
                                $h_tot_gen = $h_tot_gen_mat+$h_tot_gen_pri+$h_tot_gen_sec;
                                $f_tot_gen = $f_tot_gen_mat+$f_tot_gen_pri+$f_tot_gen_sec;
                                $hf_tot_gen = $h_tot_gen+$f_tot_gen;

                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL MATERNELLE</td>";
                                        echo "<td> $DR_h_tot_mat</td>";
                                        echo "<td> $DR_f_tot_mat</td> ";
                                        echo "<td> $IR_h_tot_mat</td>";
                                        echo "<td> $IR_f_tot_mat</td> ";
                                        echo "<td> $L2_h_tot_mat</td>";
                                        echo "<td> $L2_f_tot_mat</td> ";
                                        echo "<td> $G3_h_tot_mat</td>";
                                        echo "<td> $G3_f_tot_mat</td> ";
                                        echo "<td> $A1_h_tot_mat</td>";
                                        echo "<td> $A1_f_tot_mat</td> ";
                                        echo "<td> $A2_h_tot_mat</td>";
                                        echo "<td> $A2_f_tot_mat</td> ";
                                        echo "<td> $P6N_h_tot_mat</td>";
                                        echo "<td> $P6N_f_tot_mat</td> ";
                                        echo "<td> $D6N_h_tot_mat</td>";
                                        echo "<td> $D6N_f_tot_mat</td> ";
                                        echo "<td> $CAP_h_tot_mat</td>";
                                        echo "<td> $CAP_f_tot_mat</td> ";
                                        echo "<td> $D4A_h_tot_mat</td>";
                                        echo "<td> $D4A_f_tot_mat</td> ";
                                        echo "<td> $D4N_h_tot_mat</td>";
                                        echo "<td> $D4N_f_tot_mat</td> ";
                                        echo "<td> $EAP_h_tot_mat</td>";
                                        echo "<td> $EAP_f_tot_mat</td> ";
                                        echo "<td> $EMP_h_tot_mat</td>";
                                        echo "<td> $EMP_f_tot_mat</td> ";
                                        echo "<td> $PP5_h_tot_mat</td>";
                                        echo "<td> $PP5_f_tot_mat</td> ";
                                        echo "<td> $PP6_h_tot_mat</td>";
                                        echo "<td> $PP6_f_tot_mat</td> ";
                                        echo "<td> $SFS_h_tot_mat</td>";
                                        echo "<td> $SFS_f_tot_mat</td> ";
                                        echo "<td> $AUTRES_h_tot_mat</td>";
                                        echo "<td> $AUTRES_f_tot_mat</td> ";
   
                                        echo "<td class='tr'>$h_tot_gen_mat</td>";
                                        echo "<td class='tr'>$f_tot_gen_mat</td>";
                                        echo "<td class='tr'>$hf_tot_gen_mat</td>";



                                echo "</tr>"; 
                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL PRIMAIRE</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        } */ 

                                        echo "<td> $DR_h_tot_pri</td>";
                                        echo "<td> $DR_f_tot_pri</td> ";
                                        echo "<td> $IR_h_tot_pri</td>";
                                        echo "<td> $IR_f_tot_pri</td> ";
                                        echo "<td> $L2_h_tot_pri</td>";
                                        echo "<td> $L2_f_tot_pri</td> ";
                                        echo "<td> $G3_h_tot_pri</td>";
                                        echo "<td> $G3_f_tot_pri</td> ";
                                        echo "<td> $A1_h_tot_pri</td>";
                                        echo "<td> $A1_f_tot_pri</td> ";
                                        echo "<td> $A2_h_tot_pri</td>";
                                        echo "<td> $A2_f_tot_pri</td> ";
                                        echo "<td> $P6N_h_tot_pri</td>";
                                        echo "<td> $P6N_f_tot_pri</td> ";
                                        echo "<td> $D6N_h_tot_pri</td>";
                                        echo "<td> $D6N_f_tot_pri</td> ";
                                        echo "<td> $CAP_h_tot_pri</td>";
                                        echo "<td> $CAP_f_tot_pri</td> ";
                                        echo "<td> $D4A_h_tot_pri</td>";
                                        echo "<td> $D4A_f_tot_pri</td> ";
                                        echo "<td> $D4N_h_tot_pri</td>";
                                        echo "<td> $D4N_f_tot_pri</td> ";
                                        echo "<td> $EAP_h_tot_pri</td>";
                                        echo "<td> $EAP_f_tot_pri</td> ";
                                        echo "<td> $EMP_h_tot_pri</td>";
                                        echo "<td> $EMP_f_tot_pri</td> ";
                                        echo "<td> $PP5_h_tot_pri</td>";
                                        echo "<td> $PP5_f_tot_pri</td> ";
                                        echo "<td> $PP6_h_tot_pri</td>";
                                        echo "<td> $PP6_f_tot_pri</td> ";
                                        echo "<td> $SFS_h_tot_pri</td>";
                                        echo "<td> $SFS_f_tot_pri</td> ";
                                        echo "<td> $AUTRES_h_tot_pri</td>";
                                        echo "<td> $AUTRES_f_tot_pri</td> ";


                                        echo "<td class='tr'>$h_tot_gen_pri</td>";
                                        echo "<td class='tr'>$f_tot_gen_pri</td>";
                                        echo "<td class='tr'>$hf_tot_gen_pri</td>";

                                echo "</tr>"; 
                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL SECONDAIRE</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        }*/


                                        echo "<td> $DR_h_tot_sec</td>";
                                        echo "<td> $DR_f_tot_sec</td> ";
                                        echo "<td> $IR_h_tot_sec</td>";
                                        echo "<td> $IR_f_tot_sec</td> ";
                                        echo "<td> $L2_h_tot_sec</td>";
                                        echo "<td> $L2_f_tot_sec</td> ";
                                        echo "<td> $G3_h_tot_sec</td>";
                                        echo "<td> $G3_f_tot_sec</td> ";
                                        echo "<td> $A1_h_tot_sec</td>";
                                        echo "<td> $A1_f_tot_sec</td> ";
                                        echo "<td> $A2_h_tot_sec</td>";
                                        echo "<td> $A2_f_tot_sec</td> ";
                                        echo "<td> $P6N_h_tot_sec</td>";
                                        echo "<td> $P6N_f_tot_sec</td> ";
                                        echo "<td> $D6N_h_tot_sec</td>";
                                        echo "<td> $D6N_f_tot_sec</td> ";
                                        echo "<td> $CAP_h_tot_sec</td>";
                                        echo "<td> $CAP_f_tot_sec</td> ";
                                        echo "<td> $D4A_h_tot_sec</td>";
                                        echo "<td> $D4A_f_tot_sec</td> ";
                                        echo "<td> $D4N_h_tot_sec</td>";
                                        echo "<td> $D4N_f_tot_sec</td> ";
                                        echo "<td> $EAP_h_tot_sec</td>";
                                        echo "<td> $EAP_f_tot_sec</td> ";
                                        echo "<td> $EMP_h_tot_sec</td>";
                                        echo "<td> $EMP_f_tot_sec</td> ";
                                        echo "<td> $PP5_h_tot_sec</td>";
                                        echo "<td> $PP5_f_tot_sec</td> ";
                                        echo "<td> $PP6_h_tot_sec</td>";
                                        echo "<td> $PP6_f_tot_sec</td> ";
                                        echo "<td> $SFS_h_tot_sec</td>";
                                        echo "<td> $SFS_f_tot_sec</td> ";
                                        echo "<td> $AUTRES_h_tot_sec</td>";
                                        echo "<td> $AUTRES_f_tot_sec</td> ";



                                        echo "<td class='tr'>$h_tot_gen_sec</td>";
                                        echo "<td class='tr'>$f_tot_gen_sec</td>";
                                        echo "<td class='tr'>$hf_tot_gen_sec</td>";

                                echo "</tr>";
                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL GENERAL</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        } */  
                                        echo "<td> $DR_h_tot</td>";
                                        echo "<td> $DR_f_tot</td> ";
                                        echo "<td> $IR_h_tot</td>";
                                        echo "<td> $IR_f_tot</td> ";
                                        echo "<td> $L2_h_tot</td>";
                                        echo "<td> $L2_f_tot</td> ";
                                        echo "<td> $G3_h_tot</td>";
                                        echo "<td> $G3_f_tot</td> ";
                                        echo "<td> $A1_h_tot</td>";
                                        echo "<td> $A1_f_tot</td> ";
                                        echo "<td> $A2_h_tot</td>";
                                        echo "<td> $A2_f_tot</td> ";
                                        echo "<td> $P6N_h_tot</td>";
                                        echo "<td> $P6N_f_tot</td> ";
                                        echo "<td> $D6N_h_tot</td>";
                                        echo "<td> $D6N_f_tot</td> ";
                                        echo "<td> $CAP_h_tot</td>";
                                        echo "<td> $CAP_f_tot</td> ";
                                        echo "<td> $D4A_h_tot</td>";
                                        echo "<td> $D4A_f_tot</td> ";
                                        echo "<td> $D4N_h_tot</td>";
                                        echo "<td> $D4N_f_tot</td> ";
                                        echo "<td> $EAP_h_tot</td>";
                                        echo "<td> $EAP_f_tot</td> ";
                                        echo "<td> $EMP_h_tot</td>";
                                        echo "<td> $EMP_f_tot</td> ";
                                        echo "<td> $PP5_h_tot</td>";
                                        echo "<td> $PP5_f_tot</td> ";
                                        echo "<td> $PP6_h_tot</td>";
                                        echo "<td> $PP6_f_tot</td> ";
                                        echo "<td> $SFS_h_tot</td>";
                                        echo "<td> $SFS_f_tot</td> ";
                                        echo "<td> $AUTRES_h_tot</td>";
                                        echo "<td> $AUTRES_f_tot</td> ";


                                        echo "<td class='tr'>$h_tot_gen</td>";
                                        echo "<td class='tr'>$f_tot_gen</td>";
                                        echo "<td class='tr'>$hf_tot_gen</td>";

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