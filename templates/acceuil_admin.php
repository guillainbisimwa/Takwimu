<?php 
    
    if(isset($_SESSION['current_session'])){
        //header("Location: " . "logout.php");
        /*if($_SESSION['current_session'] == "Analyste")
        {
            //header("Location: " . "logout.php");
        }
        if ($_SESSION['current_session'] == "Conseiller d'enseignement  ") {
            //header("Location: " . "logout.php");    
         } */
        
    }
    else header("Location: " . "logout.php"); 
    //echo "non session";
    
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
                    <a href="#" class="m-l-10">
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
                            
                           <span class="text-danger">Utilisateur inconnue</span>
                        
                    <?php endif; ?>
                            

                            <i class="zmdi zmdi-face"></i>
                        </div>
                    </a>

                    
                </div>

                <ul class="main-menu">
                    <li><a href="admin.php"><i class="zmdi zmdi-home"></i> Acceuil</a></li>
                     <?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin"): ?>
                         <li class="sub-menu">
                   
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-settings"></i> Configurations</a>

                        <ul>
                            <li><a href="institution.php">Institution</a></li>
                            <li><a href="diocese.php">Diocèse</a></li>
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
                            <li><a  href="effectif_age_sex.php">Effectifs (Age/Sexe)</a></li>
                            <li><a  href="structure_org.php">Structures organisées</a></li>
                            <li><a  href="structure_aut.php">Structures autorisées</a></li>
                            <li><a  href="age_des_eleves.php">Age des élèves</a></li>
                            <li><a  href="redoublant_par_sex.php">Redoublants par sexe</a></li>
                            <li><a  href="mouvement_eleves.php">Mouvement des élèves </a></li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin" || $_SESSION['current_session'] == "Analyste" ): ?>
                     <li class=" sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-format-list-bulleted
"></i>Affichage des résultats</a>

                        <ul>
                            <li><a href="affiche_releve_stat_eff.php">Relevé statistiques des structures et effectifs scolaires </a></li>
                            <li><a  href="affiche_synthese_de_la_rep.php">Synthèse de la répartition des élèves du secondaire par option</a></li>

                            
                        </ul>
                    </li>

                     <li class=" sub-menu">

                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-account"></i>Gestion du personnel</a>

                        <ul>
                            
                            <?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin" || $_SESSION['current_session'] == "Conseiller d'enseignement" ): ?>

                                <li><a class="" href="gestion_personnel.php">Enregistrer et afficher le personnel </a></li>

                            <?php endif; ?>
                            <li><a class="" href="qualification_personnel.php">Qualification du personnel </a></li>
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
                       
                        <ul class="actions">
                           
                        </ul>

                    </div>

                    <div class="card jumbotron text-center">
                    <div class="  text-center">
                         <?php if(isset($_SESSION['current_session'])): ?>

                            <?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin"): ?>
                            <h1 class="text-center">Bienvenue dans l'espace d'administration </h1>
                        <div class="mini-charts">
                        <div class="row">
                        <?php
                            $coord_sp_dasboard = query("SELECT COUNT(*) AS nbr FROM coordination_sp");
                            $paroisse_dasboard = query("SELECT COUNT(*) AS nbr FROM paroisse2");
                            $sous_division_dasboard = query("SELECT COUNT(*) AS nbr FROM sous_div");
                            $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2");
                            $personnel_dasboard = query("SELECT COUNT(*) AS nbr FROM personnel");



                            //effectif scolaire

            

                            //totaux nombre ecole
                            $total_ecole_maternelle=0;
                            $total_ecole_primaire=0;
                            $total_ecole_secondaire=0;
                            $total_ecole=0;

                            //structure orgnanisee
                            $total_str_org1_mat = 0;
                            $total_str_org2_mat = 0;
                            $total_str_org3_mat = 0;

                            $total_str_org1_pri = 0;
                            $total_str_org2_pri = 0;
                            $total_str_org3_pri = 0;
                            $total_str_org4_pri = 0;
                            $total_str_org5_pri = 0;
                            $total_str_org6_pri = 0;

                            $total_str_org1_sec = 0;
                            $total_str_org2_sec = 0;
                            $total_str_org3_sec = 0;
                            $total_str_org4_sec = 0;
                            $total_str_org5_sec = 0;
                            $total_str_org6_sec = 0;

                            //totaux
                            $total_str_org_mat = 0;
                            $total_str_org_pri = 0;
                            $total_str_org_sec = 0;

                            $total_str_org = 0;

                            //totaux effectifs
                            $total_mat_eff_1_fille = 0;
                            $total_mat_eff_1_fg = 0;

                            $total_mat_eff_2_fille = 0;
                            $total_mat_eff_2_fg = 0;

                            $total_mat_eff_3_fille = 0;
                            $total_mat_eff_3_fg = 0;

                            /*$total_mat_eff_4_fille = 0;
                            $total_mat_eff_4_fg = 0;

                            $total_mat_eff_5_fille = 0;
                            $total_mat_eff_5_fg = 0;

                            $total_mat_eff_6_fille = 0;
                            $total_mat_eff_6_fg = 0;*/

                            $total_mat_eff_fille = 0;
                            $total_mat_eff_fg = 0;

                            $total_pri_eff_1_fille = 0;
                            $total_pri_eff_1_fg = 0;

                            $total_pri_eff_2_fille = 0;
                            $total_pri_eff_2_fg = 0;

                            $total_pri_eff_3_fille = 0;
                            $total_pri_eff_3_fg = 0;

                            $total_pri_eff_4_fille = 0;
                            $total_pri_eff_4_fg = 0;

                            $total_pri_eff_5_fille = 0;
                            $total_pri_eff_5_fg = 0;

                            $total_pri_eff_6_fille = 0;
                            $total_pri_eff_6_fg = 0;

                            $total_pri_eff_fille = 0;
                            $total_pri_eff_fg = 0;

                            $total_sec_eff_1_fille = 0;
                            $total_sec_eff_1_fg = 0;

                            $total_sec_eff_2_fille = 0;
                            $total_sec_eff_2_fg = 0;

                            $total_sec_eff_3_fille = 0;
                            $total_sec_eff_3_fg = 0;

                            $total_sec_eff_4_fille = 0;
                            $total_sec_eff_4_fg = 0;

                            $total_sec_eff_5_fille = 0;
                            $total_sec_eff_5_fg = 0;

                            $total_sec_eff_6_fille = 0;
                            $total_sec_eff_6_fg = 0;

                            $total_sec_eff_fille = 0;
                            $total_sec_eff_fg = 0;

                            $tot_eff_mat_fille = 0;
                            $tot_eff_mat_fg = 0;

                            $tot_eff_pri_fille = 0;
                            $tot_eff_pri_fg = 0;

                            $tot_eff_sec_fille = 0;
                            $tot_eff_sec_fg = 0;

                            //tot gen
                            $tot_gen_eff_fille_1 = 0;
                            $tot_gen_eff_fille_2 = 0;
                            $tot_gen_eff_fille_3 = 0;
                            $tot_gen_eff_fille_4 = 0;
                            $tot_gen_eff_fille_5 = 0;
                            $tot_gen_eff_fille_6 = 0;

                            $tot_gen_eff_fg_1 = 0;
                            $tot_gen_eff_fg_2 = 0;
                            $tot_gen_eff_fg_3 = 0;
                            $tot_gen_eff_fg_4 = 0;
                            $tot_gen_eff_fg_5 = 0;
                            $tot_gen_eff_fg_6 = 0;

                            $tot_gen_eff_fille = 0;
                            $tot_gen_eff_fg = 0;




                            

                            


                            



                            




                            

                            $tab_paroisse = query("SELECT * FROM diocese");
                            $num=1;
                            foreach ($tab_paroisse as $paroisse) {
                                $nbr_ecol_mat = 0;
                                $nbr_ecol_pri = 0;
                                $nbr_ecol_sec = 0;
                                $id_p = $paroisse["id"];
                                $nom_p = $paroisse["nom_diocese"];

                                //structure org et class
                                $nom_class1 = 0;
                                $nom_class2 = 0;
                                $nom_class3 = 0;

                                $nom_class_pri1 = 0;
                                $nom_class_pri2 = 0;
                                $nom_class_pri3 = 0;
                                $nom_class_pri4 = 0;
                                $nom_class_pri5 = 0;
                                $nom_class_pri6 = 0;

                                $nom_class_sec1 = 0;
                                $nom_class_sec2 = 0;
                                $nom_class_sec3 = 0;
                                $nom_class_sec4 = 0;
                                $nom_class_sec5 = 0;
                                $nom_class_sec6 = 0;
                                
                                //###################################
                            //EFFECTIFS DES ELEV mat
                            $som_mat_fille_1 = 0;
                            $som_mat_garcon_1 = 0;
                            $som_mat_fg_garcon_1 = 0;

                            $som_mat_fille_2 = 0;
                            $som_mat_garcon_2 = 0;
                            $som_mat_fg_garcon_2 = 0;

                            $som_mat_fille_3 = 0;
                            $som_mat_garcon_3 = 0;
                            $som_mat_fg_garcon_3 = 0;
                            //pri
                            $som_pri_fille_1 = 0;
                            $som_pri_garcon_1 = 0;
                            $som_pri_fg_garcon_1 = 0;

                            $som_pri_fille_2 = 0;
                            $som_pri_garcon_2 = 0;
                            $som_pri_fg_garcon_2 = 0;

                            $som_pri_fille_3 = 0;
                            $som_pri_garcon_3 = 0;
                            $som_pri_fg_garcon_3 = 0;

                            $som_pri_fille_4 = 0;
                            $som_pri_garcon_4 = 0;
                            $som_pri_fg_garcon_4 = 0;

                            $som_pri_fille_5 = 0;
                            $som_pri_garcon_5 = 0;
                            $som_pri_fg_garcon_5 = 0;

                            $som_pri_fille_6 = 0;
                            $som_pri_garcon_6 = 0;
                            $som_pri_fg_garcon_6 = 0;

                            //sec
                            $som_sec_fille_1 = 0;
                            $som_sec_garcon_1 = 0;
                            $som_sec_fg_garcon_1 = 0;

                            $som_sec_fille_2 = 0;
                            $som_sec_garcon_2 = 0;
                            $som_sec_fg_garcon_2 = 0;

                            $som_sec_fille_3 = 0;
                            $som_sec_garcon_3 = 0;
                            $som_sec_fg_garcon_3 = 0;

                            $som_sec_fille_4 = 0;
                            $som_sec_garcon_4 = 0;
                            $som_sec_fg_garcon_4 = 0;

                            $som_sec_fille_5 = 0;
                            $som_sec_garcon_5 = 0;
                            $som_sec_fg_garcon_5 = 0;
                            
                            $som_sec_fille_6 = 0;
                            $som_sec_garcon_6 = 0;
                            $som_sec_fg_garcon_6 = 0;

                            //totaux effectif
                            $total_eff_mat_fille = 0;
                            $total_eff_mat_fg = 0;

                            $total_eff_pri_fille = 0;
                            $total_eff_pri_fg = 0;

                            $total_eff_sec_fille = 0;
                            $total_eff_sec_fg = 0;

                            //primaire
                            //$som_p_fille_1 = 0;
                            //$som_p_garcon_1 = 0;

                                $tab_sous_div = query("SELECT * FROM sous_div ");
                                foreach ($tab_sous_div as $sd) {
                                    $id_sd = $sd["id"];
                                    $tab_ecole_mat = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd, "Maternelle");
                                    
                                    //echo "SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau = "."Maternelle<br>";
                                    $nbr_ecol_mat = $tab_ecole_mat[0]["nbr"] +$nbr_ecol_mat;
                                    $total_ecole_maternelle = $total_ecole_maternelle + $nbr_ecol_mat;
                                    $tab_ecole_pri = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd,"Primaire");

                                    $nbr_ecol_pri = $tab_ecole_pri[0]["nbr"]+$nbr_ecol_pri;
                                    $total_ecole_primaire = $total_ecole_primaire + $nbr_ecol_pri;
                                    $tab_ecole_sec = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd,"Secondaire");

                                    $nbr_ecol_sec = $tab_ecole_sec[0]["nbr"]+$nbr_ecol_sec;
                                    $total_ecole_secondaire = $total_ecole_secondaire + $nbr_ecol_sec;

                                    

                                    /*echo "$total_ecole = $total_ecole_maternelle + $total_ecole_primaire + $total_ecole_secondaire <br>";*/

                                    //STRUCTURRE ORGANISEE MATERNELLE
                                     $tab_ecole = query("SELECT * FROM ecole2 where belongs_to = ? ", $id_sd);
                                     foreach ($tab_ecole as $tb_ec) {
                                        if($tb_ec["id_niveau"] == "Maternelle"){
                                        //########################################################
                                        //STRUCTURE ORG

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        

                                        $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                       

                                        $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                        if (count($tabstr_org1) == 1 && count($tabstr_org2) && count($tabstr_org3) ) {
                                            $nom_class1 = $nom_class1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class2 = $nom_class2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class3 = $nom_class3 + $tabstr_org3[0]["nbr_structure"];
                                        }

                                        //EFFECTIF DES ELEVS 
                                        $tab_ecole_mat = query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");

                                        $tab_ecole_mat2 = query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        $tab_ecole_mat3= query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");

                                            if(count($tab_ecole_mat) == 1 && count($tab_ecole_mat2) == 1 && count($tab_ecole_mat3) == 1){
                                               

                                                $somme_mat_fille_1 =  $tab_ecole_mat[0]["age_6ansF"]+$tab_ecole_mat[0]["age_6F"]+$tab_ecole_mat[0]["age_7a10ansF"];

                                                $somme_mat_garcon_1 = $tab_ecole_mat[0]["age_6ansG"]+$tab_ecole_mat[0]["age_6G"]+$tab_ecole_mat[0]["age_7a10ansG"];

                                                 $somme_mat_fille_2 = $tab_ecole_mat2[0]["age_6ansF"]+$tab_ecole_mat2[0]["age_6F"]+$tab_ecole_mat2[0]["age_7a10ansF"];

                                                $somme_mat_garcon_2 = $tab_ecole_mat2[0]["age_6ansG"]+$tab_ecole_mat2[0]["age_6G"]+$tab_ecole_mat2[0]["age_7a10ansG"];

                                                 $somme_mat_fille_3 =$tab_ecole_mat3[0]["age_6ansF"]+$tab_ecole_mat3[0]["age_6F"]+$tab_ecole_mat3[0]["age_7a10ansF"];

                                                $somme_mat_garcon_3 = $tab_ecole_mat3[0]["age_6ansG"]+$tab_ecole_mat3[0]["age_6G"]+$tab_ecole_mat3[0]["age_7a10ansG"];

                                                $som_mat_fille_1 =$som_mat_fille_1 +$somme_mat_fille_1;
                                                $som_mat_garcon_1 =$som_mat_garcon_1+$somme_mat_garcon_1;
                                                $som_mat_fille_2 =$som_mat_fille_2+$somme_mat_fille_2;
                                                $som_mat_garcon_2 =$som_mat_garcon_2+$somme_mat_garcon_2;
                                                $som_mat_fille_3 =$som_mat_fille_3+$somme_mat_fille_3;
                                                $som_mat_garcon_3 =$som_mat_garcon_3+$somme_mat_garcon_3;



                                                $som_mat_fg_garcon_1 = $som_mat_garcon_1+$som_mat_fille_1;
                                                $som_mat_fg_garcon_2 = $som_mat_garcon_2+$som_mat_fille_2;
                                                $som_mat_fg_garcon_3 = $som_mat_garcon_3+$som_mat_fille_3;

                                                //totaux effectifs
                                                $total_eff_mat_fille = $som_mat_fille_1 + $som_mat_fille_2+ $som_mat_fille_3;

                                                $total_eff_mat_fg = $som_mat_fg_garcon_1 + $som_mat_fg_garcon_2 + $som_mat_fg_garcon_3;
                                               
                                                //totaux effectif bas
                                                $total_mat_eff_1_fille = $total_mat_eff_1_fille + $somme_mat_fille_1;

                                                $total_mat_eff_1_fg =$total_mat_eff_1_fg + $somme_mat_fille_1 + $somme_mat_garcon_1;

                                                $total_mat_eff_2_fille = $total_mat_eff_2_fille + $somme_mat_fille_2;

                                                $total_mat_eff_2_fg =$total_mat_eff_2_fg + $somme_mat_fille_2 + $somme_mat_garcon_2;

                                                $total_mat_eff_3_fille = $total_mat_eff_3_fille + $somme_mat_fille_3;

                                                $total_mat_eff_3_fg =$total_mat_eff_3_fg + $somme_mat_fille_3 + $somme_mat_garcon_3;



                                                $tot_eff_mat_fille = $tot_eff_mat_fille + $somme_mat_fille_1 + $somme_mat_fille_2 + $somme_mat_fille_3;

                                                $tot_eff_mat_fg = $tot_eff_mat_fg + $somme_mat_garcon_1 + $somme_mat_garcon_2+ $somme_mat_garcon_3 + $somme_mat_fille_1 + $somme_mat_fille_2 + $somme_mat_fille_3;
                                                //echo "$total_mat_eff_1_fille<br>";



                                            }
                                            
                                        
                                        


        


                                          


                                    }
                                    elseif($tb_ec["id_niveau"] == "Primaire"){

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        
                                        //echo $tabstr_org1[0]["nbr_structure"]." <br>";
                                        //echo $nom_class1." <br>";
                                         $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                        

                                         $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                         $tabstr_org4 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");
                                       


                                         $tabstr_org5 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");
                                        

                                        $tabstr_org6 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        

                                        if(count($tabstr_org1)==1 && count($tabstr_org2)==1 && count($tabstr_org3)==1 && count($tabstr_org4)==1 && count($tabstr_org5)==1 && count($tabstr_org6)==1)
                                        {
                                            $nom_class_pri1 = $nom_class_pri1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class_pri2 = $nom_class_pri2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class_pri3 = $nom_class_pri3 + $tabstr_org3[0]["nbr_structure"];
                                            $nom_class_pri4 = $nom_class_pri4 + $tabstr_org4[0]["nbr_structure"];
                                            $nom_class_pri5 = $nom_class_pri5 + $tabstr_org5[0]["nbr_structure"];
                                            $nom_class_pri6 = $nom_class_pri6 + $tabstr_org6[0]["nbr_structure"];
                                        }

                                        //primaire
                                         $tab_ecole_pri = query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");

                                        $tab_ecole_pri2 = query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        $tab_ecole_pri3= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        
                                        $tab_ecole_pri4= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");

                                        $tab_ecole_pri5= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");

                                        $tab_ecole_pri6= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        if (count($tab_ecole_pri) == 1 && count($tab_ecole_pri2) == 1 && count($tab_ecole_pri3) == 1 && count($tab_ecole_pri4) == 1 && count($tab_ecole_pri5) == 1 && count($tab_ecole_pri6) == 1) {
                                            # code...
                                            $somme_pri_fille_1 =  $tab_ecole_pri[0]["age_6ansF"] + $tab_ecole_pri[0]["age_6F"] +$tab_ecole_pri[0]["age_7a10ansF"] + $tab_ecole_pri[0]["age_11ansF"]+$tab_ecole_pri[0]["age_plus11ansF"];

                                            $somme_pri_garcon_1 =$tab_ecole_pri[0]["age_6ansG"] + $tab_ecole_pri[0]["age_6G"] +$tab_ecole_pri[0]["age_7a10ansG"] + $tab_ecole_pri[0]["age_11ansG"]+$tab_ecole_pri[0]["age_plus11ansG"];

                                            $somme_pri_fille_2 =$tab_ecole_pri2[0]["age_6ansF"] + $tab_ecole_pri2[0]["age_6F"] +$tab_ecole_pri2[0]["age_7a10ansF"] + $tab_ecole_pri2[0]["age_11ansF"]+$tab_ecole_pri2[0]["age_plus11ansF"];

                                            $somme_pri_garcon_2 =$tab_ecole_pri2[0]["age_6ansG"] + $tab_ecole_pri2[0]["age_6G"] +$tab_ecole_pri2[0]["age_7a10ansG"] + $tab_ecole_pri2[0]["age_11ansG"]+$tab_ecole_pri2[0]["age_plus11ansG"];

                                            $somme_pri_fille_3 = $tab_ecole_pri3[0]["age_6ansF"] + $tab_ecole_pri3[0]["age_6F"] +$tab_ecole_pri3[0]["age_7a10ansF"] + $tab_ecole_pri3[0]["age_11ansF"]+$tab_ecole_pri3[0]["age_plus11ansF"];

                                            $somme_pri_garcon_3 =$tab_ecole_pri3[0]["age_6ansG"] + $tab_ecole_pri3[0]["age_6G"] +$tab_ecole_pri3[0]["age_7a10ansG"] + $tab_ecole_pri3[0]["age_11ansG"]+$tab_ecole_pri3[0]["age_plus11ansG"];

                                            $somme_pri_fille_4 =$tab_ecole_pri4[0]["age_6ansF"] + $tab_ecole_pri4[0]["age_6F"] +$tab_ecole_pri4[0]["age_7a10ansF"] + $tab_ecole_pri4[0]["age_11ansF"]+$tab_ecole_pri4[0]["age_plus11ansF"];

                                            $somme_pri_garcon_4 =$tab_ecole_pri4[0]["age_6ansG"] + $tab_ecole_pri4[0]["age_6G"] +$tab_ecole_pri4[0]["age_7a10ansG"] + $tab_ecole_pri4[0]["age_11ansG"]+$tab_ecole_pri4[0]["age_plus11ansG"];

                                            $somme_pri_fille_5 = $tab_ecole_pri5[0]["age_6ansF"] + $tab_ecole_pri5[0]["age_6F"] +$tab_ecole_pri5[0]["age_7a10ansF"] + $tab_ecole_pri5[0]["age_11ansF"]+$tab_ecole_pri5[0]["age_plus11ansF"];

                                            $somme_pri_garcon_5 =$tab_ecole_pri5[0]["age_6ansG"] + $tab_ecole_pri5[0]["age_6G"] +$tab_ecole_pri5[0]["age_7a10ansG"] + $tab_ecole_pri5[0]["age_11ansG"]+$tab_ecole_pri5[0]["age_plus11ansG"];

                                            $somme_pri_fille_6 =$tab_ecole_pri6[0]["age_6ansF"] + $tab_ecole_pri6[0]["age_6F"] +$tab_ecole_pri6[0]["age_7a10ansF"] + $tab_ecole_pri6[0]["age_11ansF"]+$tab_ecole_pri6[0]["age_plus11ansF"];

                                            $somme_pri_garcon_6 =$tab_ecole_pri6[0]["age_6ansG"] + $tab_ecole_pri6[0]["age_6G"] +$tab_ecole_pri6[0]["age_7a10ansG"] + $tab_ecole_pri6[0]["age_11ansG"]+$tab_ecole_pri6[0]["age_plus11ansG"];

                                            $som_pri_fille_1 = $som_pri_fille_1+$somme_pri_fille_1;
                                            $som_pri_garcon_1 = $som_pri_garcon_1+$somme_pri_garcon_1;

                                            $som_pri_fille_2 = $som_pri_fille_2+$somme_pri_fille_2;
                                            $som_pri_garcon_2 = $som_pri_garcon_2+$somme_pri_garcon_2;

                                            $som_pri_fille_3 = $som_pri_fille_3+$somme_pri_fille_3;
                                            $som_pri_garcon_3 = $som_pri_garcon_3+$somme_pri_garcon_3;

                                            $som_pri_fille_4 = $som_pri_fille_4+$somme_pri_fille_4;
                                            $som_pri_garcon_4 = $som_pri_garcon_4+$somme_pri_garcon_4;

                                            $som_pri_fille_5 = $som_pri_fille_5+$somme_pri_fille_5;
                                            $som_pri_garcon_5 = $som_pri_garcon_5+$somme_pri_garcon_5;

                                            $som_pri_fille_6 = $som_pri_fille_6+$somme_pri_fille_6;
                                            $som_pri_garcon_6 = $som_pri_garcon_6+$somme_pri_garcon_6;

                                            $som_pri_fg_garcon_1 = $som_pri_garcon_1+$som_pri_fille_1;
                                            $som_pri_fg_garcon_2 = $som_pri_garcon_2+$som_pri_fille_2;
                                            $som_pri_fg_garcon_3 = $som_pri_garcon_3+$som_pri_fille_3;
                                            $som_pri_fg_garcon_4 = $som_pri_garcon_4+$som_pri_fille_4;
                                            $som_pri_fg_garcon_5 = $som_pri_garcon_5+$som_pri_fille_5;
                                            $som_pri_fg_garcon_6 = $som_pri_garcon_6+$som_pri_fille_6;

                                            $total_eff_pri_fille = $som_pri_fille_1+$som_pri_fille_2+$som_pri_fille_3+$som_pri_fille_4+$som_pri_fille_5+$som_pri_fille_6;

                                            $total_eff_pri_fg = $som_pri_fg_garcon_1+$som_pri_fg_garcon_2+$som_pri_fg_garcon_3+$som_pri_fg_garcon_4+$som_pri_fg_garcon_5+$som_pri_fg_garcon_6; 

                                            //tautaux bas 
                                            $total_pri_eff_1_fille = $total_pri_eff_1_fille + $somme_pri_fille_1;

                                            $total_pri_eff_1_fg =$total_pri_eff_1_fg + $somme_pri_fille_1 + $somme_pri_garcon_1;

                                            $total_pri_eff_2_fille = $total_pri_eff_2_fille + $somme_pri_fille_2;

                                            $total_pri_eff_2_fg =$total_pri_eff_2_fg + $somme_pri_fille_2 + $somme_pri_garcon_2;

                                            $total_pri_eff_3_fille = $total_pri_eff_3_fille + $somme_pri_fille_3;

                                            $total_pri_eff_3_fg =$total_pri_eff_3_fg + $somme_pri_fille_3 + $somme_pri_garcon_3;

                                            $total_pri_eff_4_fille = $total_pri_eff_4_fille + $somme_pri_fille_4;

                                            $total_pri_eff_4_fg =$total_pri_eff_4_fg + $somme_pri_fille_4 + $somme_pri_garcon_4;

                                            $total_pri_eff_5_fille = $total_pri_eff_5_fille + $somme_pri_fille_5;

                                            $total_pri_eff_5_fg =$total_pri_eff_5_fg + $somme_pri_fille_5 + $somme_pri_garcon_5;

                                            $total_pri_eff_6_fille = $total_pri_eff_6_fille + $somme_pri_fille_6;

                                            $total_pri_eff_6_fg =$total_pri_eff_6_fg + $somme_pri_fille_6 + $somme_pri_garcon_6;

                                            //totaux droit
                                            $tot_eff_pri_fille = $tot_eff_pri_fille + $somme_pri_fille_1 + $somme_pri_fille_2 + $somme_pri_fille_3 + $somme_pri_fille_4 + $somme_pri_fille_5 + $somme_pri_fille_6;

                                            $tot_eff_pri_fg = $tot_eff_pri_fg + $somme_pri_garcon_1 + $somme_pri_garcon_2+ $somme_pri_garcon_3 + $somme_pri_garcon_4 + $somme_pri_garcon_5 + $somme_pri_garcon_6 + $somme_pri_fille_1 + $somme_pri_fille_2 + $somme_pri_fille_3 + $somme_pri_fille_4 + $somme_pri_fille_5 + $somme_pri_fille_6;


                                        } 
                                        

                                    }
                                    elseif($tb_ec["id_niveau"] == "Secondaire"){

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        
                                        //echo $tabstr_org1[0]["nbr_structure"]." <br>";
                                        //echo $nom_class1." <br>";
                                         $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                        

                                         $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                         $tabstr_org4 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");
                                        


                                         $tabstr_org5 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");
                                        

                                        $tabstr_org6 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        

                                        if (count($tabstr_org1) && count($tabstr_org2 ) && count($tabstr_org3) && count($tabstr_org4) && count($tabstr_org5) && count($tabstr_org6)) {
                                            $nom_class_sec1 = $nom_class_sec1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class_sec2 = $nom_class_sec2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class_sec3 = $nom_class_sec3 + $tabstr_org3[0]["nbr_structure"];
                                            $nom_class_sec4 = $nom_class_sec4 + $tabstr_org4[0]["nbr_structure"];
                                            $nom_class_sec5 = $nom_class_sec5 + $tabstr_org5[0]["nbr_structure"];
                                            $nom_class_sec6 = $nom_class_sec6 + $tabstr_org6[0]["nbr_structure"];
                                        }

                                        //SECONDAIRE
                                        $tab_ecole_sec = query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
    //echo "SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ".$tb_ec["id"]." and nom_class = '1' ";

                                        $tab_ecole_sec2 = query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        //recursivite des section
                                        $liste_section = query("SELECT DISTINCT `option` FROM `classe_secondaire_cl` WHERE `id_ecole` =  ? ",$tb_ec["id"]);

                                        //echo "SELECT DISTINCT `option` FROM `classe_secondaire_cl` WHERE `id_ecole` = ".$tb_ec["id"]."<br>";

                                       

                                        if ((count($tab_ecole_sec) == 1 && count($tab_ecole_sec2) == 1 )) {

                                            
                                            $somme_sec_fille_1 =$tab_ecole_sec[0]["effectif_F"];
                                            $somme_sec_garcon_1=$tab_ecole_sec[0]["effectif_G"];

                                            $somme_sec_fille_2 =$tab_ecole_sec2[0]["effectif_F"];
                                            $somme_sec_garcon_2=$tab_ecole_sec2[0]["effectif_G"];

                                            $som_sec_fille_1 =$som_sec_fille_1 + $somme_sec_fille_1;
                                            $som_sec_garcon_1=$som_sec_garcon_1 +$somme_sec_garcon_1;

                                            $som_sec_fille_2 =$som_sec_fille_2+ $somme_sec_fille_2;
                                            $som_sec_garcon_2=$som_sec_garcon_2+$somme_sec_garcon_2;

                                            //$somme_sec_fille_1 = 

                                            //fonction recursive des sections

                                            $som_sec_fg_garcon_1 = $som_sec_garcon_1+$som_sec_fille_1;
                                            $som_sec_fg_garcon_2 = $som_sec_garcon_2+$som_sec_fille_2;

                                            //totaux 
                                            $total_sec_eff_1_fille = $total_sec_eff_1_fille + $somme_sec_fille_1;
                                            $total_sec_eff_1_fg = $total_sec_eff_1_fg + $somme_sec_fille_1 + $somme_sec_garcon_1;

                                            $total_sec_eff_2_fille = $total_sec_eff_2_fille + $somme_sec_fille_2;
                                            $total_sec_eff_2_fg = $total_sec_eff_2_fg + $somme_sec_fille_2 + $somme_sec_garcon_2;

                                            //echo "$total_sec_eff_fille<br>";

                                            //totaux droit
                                            $total_sec_eff_fille =$total_sec_eff_fille+ $somme_sec_fille_1 + $somme_sec_fille_2;
                                             $total_sec_eff_fg =$total_sec_eff_fg+ $somme_sec_fille_1 + $somme_sec_fille_2 + $somme_sec_garcon_1 + $somme_sec_garcon_2;
                                            

                                        } 
                                        if (count($liste_section) > 0) {
                                    foreach ($liste_section as $option) {
                                       /* $tab_cl_3 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and nom_class = ?",$tb_ec["id"], "3");*/

                                        $tab_cl_3 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "3" , $option["option"]);
                                        $tab_cl_4 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "4" , $option["option"]);
                                        $tab_cl_5 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "5" , $option["option"]);
                                        $tab_cl_6 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ?) ",$tb_ec["id"], "6" , $option["option"]);

                                        
                                        


                                        if(count($tab_cl_3) == 1 && count($tab_cl_4) == 1 && count($tab_cl_5) == 1 && count($tab_cl_6) == 1)
                                        {
                                       
                                            $somme_sec_fille_3 =  $tab_cl_3[0]["effectif_F"];
                                            $somme_sec_garcon_3 =   $tab_cl_3[0]["effectif_G"];

                                            $somme_sec_fille_4 =  $tab_cl_4[0]["effectif_F"];
                                            $somme_sec_garcon_4 =   $tab_cl_4[0]["effectif_G"];

                                            $somme_sec_fille_5 =  $tab_cl_5[0]["effectif_F"];
                                            $somme_sec_garcon_5 =   $tab_cl_5[0]["effectif_G"];

                                            $somme_sec_fille_6 =  $tab_cl_6[0]["effectif_F"];
                                            $somme_sec_garcon_6 =   $tab_cl_6[0]["effectif_G"];

                                            $som_sec_fille_3 =$som_sec_fille_3 +$somme_sec_fille_3 ; 
                                            $som_sec_garcon_3 =$som_sec_garcon_3 +$somme_sec_garcon_3; 
                                            $som_sec_fille_4 = $som_sec_fille_4 + $somme_sec_fille_4 ; 
                                            $som_sec_garcon_4 = $som_sec_garcon_4 +$somme_sec_garcon_4;
                                            $som_sec_fille_5 = $som_sec_fille_5 + $somme_sec_fille_5 ; 
                                            $som_sec_garcon_5 = $som_sec_garcon_5 +$somme_sec_garcon_5;
                                            $som_sec_fille_6 = $som_sec_fille_6 + $somme_sec_fille_6 ;
                                            $som_sec_garcon_6 = $som_sec_garcon_6 +$somme_sec_garcon_6;

                                            $som_sec_fg_garcon_3 = $som_sec_garcon_3+$som_sec_fille_3;
                                            $som_sec_fg_garcon_4 = $som_sec_garcon_4+$som_sec_fille_4;
                                            $som_sec_fg_garcon_5 = $som_sec_garcon_5+$som_sec_fille_5;
                                            $som_sec_fg_garcon_6 = $som_sec_garcon_6+$som_sec_fille_6;

                                            //totaux 
                                            $total_sec_eff_3_fille = $total_sec_eff_3_fille + $somme_sec_fille_3;
                                            $total_sec_eff_3_fg = $total_sec_eff_3_fg + $somme_sec_fille_3 + $somme_sec_garcon_3;

                                            $total_sec_eff_4_fille = $total_sec_eff_4_fille + $somme_sec_fille_4;
                                            $total_sec_eff_4_fg = $total_sec_eff_4_fg + $somme_sec_fille_4 + $somme_sec_garcon_4;

                                            $total_sec_eff_5_fille = $total_sec_eff_5_fille + $somme_sec_fille_5;
                                            $total_sec_eff_5_fg = $total_sec_eff_5_fg + $somme_sec_fille_5 + $somme_sec_garcon_5;

                                            $total_sec_eff_6_fille = $total_sec_eff_6_fille + $somme_sec_fille_6;
                                            $total_sec_eff_6_fg = $total_sec_eff_6_fg + $somme_sec_fille_6 + $somme_sec_garcon_6; 

                                            $total_sec_eff_fille = $total_sec_eff_fille+ $somme_sec_fille_3 + $somme_sec_fille_4 + $somme_sec_fille_5 + $somme_sec_fille_6;

                                             $total_sec_eff_fg = $total_sec_eff_fg+ $somme_sec_fille_3 + $somme_sec_fille_4 + $somme_sec_fille_5 + $somme_sec_fille_6 + $somme_sec_garcon_3 + $somme_sec_garcon_4 + $somme_sec_garcon_5 + $somme_sec_garcon_6 ;




                                           
                                        }


                                        
                                    } 
                                   
                                    

                                }
                                //
                                //$total_sec_eff_1_fille = $total_sec_eff_1_fille;
                                
                                        
                                
                                    }

                                     }


                                }
                                //totaux de structure mat
                                $total_str_org1_mat = $total_str_org1_mat + $nom_class1;
                                $total_str_org2_mat = $total_str_org2_mat + $nom_class2;
                                $total_str_org3_mat = $total_str_org3_mat + $nom_class3;

                                $total_str_org1_pri = $total_str_org1_pri + $nom_class_pri1;
                                $total_str_org2_pri = $total_str_org2_pri + $nom_class_pri2;
                                $total_str_org3_pri = $total_str_org3_pri + $nom_class_pri3;
                                $total_str_org4_pri = $total_str_org4_pri + $nom_class_pri4;
                                $total_str_org5_pri = $total_str_org5_pri + $nom_class_pri5;
                                $total_str_org6_pri = $total_str_org6_pri + $nom_class_pri6;

                                $total_str_org1_sec = $total_str_org1_sec + $nom_class_sec1;
                                $total_str_org2_sec = $total_str_org2_sec + $nom_class_sec2;
                                $total_str_org3_sec = $total_str_org3_sec + $nom_class_sec3;
                                $total_str_org4_sec = $total_str_org4_sec + $nom_class_sec4;
                                $total_str_org5_sec = $total_str_org5_sec + $nom_class_sec5;
                                $total_str_org6_sec = $total_str_org6_sec + $nom_class_sec6;

                                //totaux gen
                                $total_str_org1 = $total_str_org1_mat+$total_str_org1_pri+$total_str_org1_sec;
                                $total_str_org2 = $total_str_org2_mat+$total_str_org2_pri+$total_str_org2_sec;
                                $total_str_org3 = $total_str_org3_mat+$total_str_org3_pri+$total_str_org3_sec;
                                $total_str_org4 = $total_str_org4_pri+$total_str_org4_sec;
                                $total_str_org5 = $total_str_org5_pri+$total_str_org5_sec;
                                $total_str_org6 = $total_str_org6_pri+$total_str_org6_sec;

                                //totaux droits

                                $total_eff_sec_fille = $som_sec_fille_1+$som_sec_fille_2+$som_sec_fille_3+$som_sec_fille_4+$som_sec_fille_5+$som_sec_fille_6;

                                $total_eff_sec_fg = $som_sec_fg_garcon_1+$som_sec_fg_garcon_2+$som_sec_fg_garcon_3+$som_sec_fg_garcon_4+$som_sec_fg_garcon_5+$som_sec_fg_garcon_6;

                                //total genrale effectif

                                $total_ecole = $nbr_ecol_mat + $nbr_ecol_pri + $nbr_ecol_sec;

                             

                               

                                
                                       
                               
                                    if ($nbr_ecol_mat == 0) {
                                       

                                        $nom_class_pri = $nom_class_pri1+$nom_class_pri2+$nom_class_pri3+$nom_class_pri4+$nom_class_pri5+$nom_class_pri6;
                                        
                                        
                                       
                                       

                                        $nom_class_sec = $nom_class_sec1+$nom_class_sec2+$nom_class_sec3+$nom_class_sec4+$nom_class_sec5+$nom_class_sec6;
                                        
                                    }
                                    else{

                                        $nom_class123 = $nom_class1 + $nom_class2 +$nom_class3; 
                                       

                                        $nom_class_pri = $nom_class_pri1+$nom_class_pri2+$nom_class_pri3+$nom_class_pri4+$nom_class_pri5+$nom_class_pri6;
                                       

                                        $nom_class_sec = $nom_class_sec1+$nom_class_sec2+$nom_class_sec3+$nom_class_sec4+$nom_class_sec5+$nom_class_sec6;
                                        
                                    }
                                    
                                }

                                //##################################################################
                                $total_str_org_mat = $total_str_org_mat + $total_str_org1_mat +$total_str_org2_mat + $total_str_org3_mat;

                                $total_str_org_pri = $total_str_org_pri + $total_str_org1_pri +$total_str_org2_pri + $total_str_org3_pri + $total_str_org4_pri+ $total_str_org5_pri+ $total_str_org6_pri;

                                $total_str_org_sec = $total_str_org_sec + $total_str_org1_sec +$total_str_org2_sec + $total_str_org3_sec + $total_str_org4_sec+ $total_str_org5_sec+ $total_str_org6_sec;

                                $total_str_org = $total_str_org_mat + $total_str_org_pri + $total_str_org_sec;

                                  //totaux effectif

                                $tot_gen_eff_fille_1 = $total_mat_eff_1_fille +$total_pri_eff_1_fille + $total_sec_eff_1_fille;
                                $tot_gen_eff_fg_1 = $total_mat_eff_1_fg+$total_pri_eff_1_fg+$total_sec_eff_1_fg;

                                 $tot_gen_eff_fille_2 = $total_mat_eff_2_fille +$total_pri_eff_2_fille + $total_sec_eff_2_fille;
                                $tot_gen_eff_fg_2 = $total_mat_eff_2_fg+$total_pri_eff_2_fg+$total_sec_eff_2_fg;

                                 $tot_gen_eff_fille_3 = $total_mat_eff_3_fille +$total_pri_eff_3_fille + $total_sec_eff_3_fille;
                                $tot_gen_eff_fg_3 = $total_mat_eff_3_fg+$total_pri_eff_3_fg+$total_sec_eff_3_fg;

                                 $tot_gen_eff_fille_4 = $total_pri_eff_4_fille + $total_sec_eff_4_fille;
                                $tot_gen_eff_fg_4 = $total_pri_eff_4_fg+$total_sec_eff_4_fg;

                                 $tot_gen_eff_fille_5 = $total_pri_eff_5_fille + $total_sec_eff_5_fille;
                                $tot_gen_eff_fg_5 = $total_pri_eff_5_fg+$total_sec_eff_5_fg;

                                 $tot_gen_eff_fille_6 = $total_pri_eff_6_fille + $total_sec_eff_6_fille;
                                $tot_gen_eff_fg_6 = $total_pri_eff_6_fg+$total_sec_eff_6_fg;

                                $tot_gen_eff_fille = $tot_eff_mat_fille+$tot_eff_pri_fille+$total_sec_eff_fille;
                                $tot_gen_eff_fg = $tot_eff_mat_fg+$tot_eff_pri_fg+$total_sec_eff_fg;





                           /* echo "<tr class='tr'>";
                                echo "<td colspan='2'> TOTAL GENERAL</td>";
                               
                                 echo "<td > $total_ecole </td>";
                                  echo "<td  style='background:cadetblue'></td>";
                                 echo "<td>$total_str_org1</td>";
                                 echo "<td>$total_str_org2</td>";
                                 echo "<td>$total_str_org3</td>";
                                 echo "<td>$total_str_org4</td>";
                                 echo "<td>$total_str_org5</td>";
                                 echo "<td>$total_str_org6</td>";
                                 echo "<td>$total_str_org</td>";

                                 //les totaux

                                 echo "<td>$tot_gen_eff_fille_1</td>";
                                 echo "<td>$tot_gen_eff_fg_1</td>";

                                 echo "<td>$tot_gen_eff_fille_2</td>";
                                 echo "<td>$tot_gen_eff_fg_2</td>";

                                 echo "<td>$tot_gen_eff_fille_3</td>";
                                 echo "<td>$tot_gen_eff_fg_3</td>";

                                 echo "<td>$tot_gen_eff_fille_4</td>";
                                 echo "<td>$tot_gen_eff_fg_4</td>";

                                 echo "<td>$tot_gen_eff_fille_5</td>";
                                 echo "<td>$tot_gen_eff_fg_5</td>";

                                 echo "<td>$tot_gen_eff_fille_6</td>";
                                 echo "<td>$tot_gen_eff_fg_6</td>";

                                  echo "<td>$tot_gen_eff_fille</td>";
                                  echo "<td>$tot_gen_eff_fg</td>";
*/


                                /*for ($i=0; $i < 12 ; $i++) { 
                                    echo "<td> -- </td>";
                                }*/

                                //echo "</tr>";


                           
                        
                                
                            
                            
            

                            //fin effectif scolaire













































                        
                           echo '<div class="col-sm-3">
                                                            <div class="mini-charts-item bgm-cyan">
                                                                <div class="clearfix1">
                                                                    
                                                                    <div class="count">
                                                                        <small>Cooridations sous provinciales</small>
                                                                        <h2>'.$coord_sp_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-3">
                                                            <div class="mini-charts-item bgm-lightgreen">
                                                                <div class="clearfix">
                                                                    <!-- <div class="chart stats-bar-2"></div> -->
                                                                    <div class="count">
                                                                        <small>Sous divisions</small>
                                                                        <h2>'.$paroisse_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-3">
                                                            <div class="mini-charts-item bgm-blue">
                                                                <div class="clearfix">
                                                                   <!--  <div class="chart stats-line"></div> -->
                                                                    <div class="count">
                                                                        <small>Paroisses</small>
                                                                        <h2>'.$sous_division_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-3">
                                                            <div class="mini-charts-item bgm-bluegray">
                                                                <div class="clearfix">
                                                                    <!-- <div class="chart stats-line-2"></div> -->
                                                                    <div class="count">
                                                                        <small>Ecoles</small>
                                                                        <h2>'.$ecole_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-6">
                                                            <div class="mini-charts-item bgm-pink">
                                                                <div class="clearfix">
                                                                     <div class="chart stats-bar"></div> 
                                                                    <div class="count">
                                                                        <small>Nombre total d\'élèves</small>
                                                                        <h2>'.$tot_gen_eff_fg.'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-6">
                                                            <div class="mini-charts-item bgm-purple">
                                                                <div class="clearfix">
                                                                     <div class="chart stats-bar-2"></div> 
                                                                    <div class="count">
                                                                        <small>Nombre total du personnel</small>
                                                                        <h2>'.$personnel_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                        ?>

                            
                        </div>
                    </div>



                    


                    <div class="dash-widgets">
                        <div class="row">
                            

                            <div class="col-md-12 col-sm-12">
                                <div id="pie-charts" class="dw-item bgm-teal c-white">

                                    <?php

                                    $nbr_ecole = 0;
                                    $nbr_str_org = 0;
                                    $nbr_str_aut = 0;

                                    //nombre des ecoles aux quelles on a deja associe un effectif
                                    //nombre des ecoles aux quelles on pas encore associe un effectif

                                    //$effectif_age_sex = query();
                                    //nombre des ecoles
                                    $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2");
                                    $total_ecole = $ecole_dasboard[0]["nbr"];

                                    $ecole_total = query("SELECT * FROM ecole2");
                                    foreach ($ecole_total as $ecole) {
                                        //maternelle
                                        $mat = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_maternelle WHERE id_ecole = ?",$ecole["id"]);
                                        if($mat[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                        }

                                        //primaire
                                        $pri = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_primaire WHERE id_ecole = ?",$ecole["id"]);
                                        if($pri[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                        }
                                        
                                        //secondaire
                                        $sec = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_secondaire_cl WHERE id_ecole = ?",$ecole["id"]);
                                        if($sec[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                        }

                                        $str_org = query("SELECT count(DISTINCT `id_ecole`) as nbr FROM structure_organisee WHERE id_ecole = ?",$ecole["id"]);
                                        if ($str_org[0]["nbr"] == 1) {
                                            $nbr_str_org++;
                                        }

                                        $str_aut = query("SELECT count(DISTINCT `id_ecole`) as nbr FROM structure_autorisee WHERE id_ecole = ?",$ecole["id"]);
                                        if ($str_aut[0]["nbr"] == 1) {
                                            $nbr_str_aut++;
                                        }
                                       
                                        
                                    }
                                    //echo $nbr_ecole; 
                                     //FORMULLE 
                                        // (7*100)/14
                                    $percent_efectif = 0;
                                    $percent_str_org = 0;
                                    $percent_str_aut = 0;
                                    if ($total_ecole == 0) {
                                         $percent_efectif = ($nbr_ecole * 100)/1;
                                         $percent_str_org = ($nbr_str_org * 100)/1;
                                         $percent_str_aut = ($nbr_str_aut * 100)/1;
                                    }
                                    else {

                                         $percent_efectif = ($nbr_ecole * 100)/$total_ecole;
                                         $percent_str_org = ($nbr_str_org * 100)/$total_ecole;
                                         $percent_str_aut = ($nbr_str_aut * 100)/$total_ecole;
                                    }
                                       
                                       
                                        $percent_efectif = substr($percent_efectif, 0,4);

                                        //STRUCTURE ORGANISEE
                                       
                                       
                                        $percent_str_org = substr($percent_str_org, 0,4);
                                        //echo $percent_str_org;

                                        //STRUCTURE AUTORISEE
                                       
                                       
                                        $percent_str_aut = substr($percent_str_aut, 0,4);

                                        //PAROISSES
                                        $paroisse_dasboard = query("SELECT COUNT(*) AS nbr FROM paroisse2");
                                        $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2");

                                        $nbr_paroisse = ($paroisse_dasboard[0]["nbr"]*100)/25;
                                        $nbr_paroisse = substr($nbr_paroisse, 0,4);

                                        //ECOLE PAR RAPPORT A  672
                                        $nbr_ecole = ($ecole_dasboard[0]["nbr"]*100)/672;
                                        $nbr_ecole = substr($nbr_ecole, 0,4);

                                        //total application
                                        $etat_total = ($percent_efectif+$percent_str_org+$percent_str_aut+$nbr_paroisse+$nbr_ecole)/5;
                                        $etat_total = substr($etat_total, 0,4);
                                        
                                    
                                    echo'<div class="dw-item">
                                        <div class="dwi-header">
                                            <div class="dwih-title">Etat de l\'application</div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="text-center p-20 m-t-25">
                                            <div class="col-sm-12 easy-pie main-pie" data-percent="'.$etat_total.'">
                                                <div class="percent">'.$etat_total.'</div>
                                                <div class="pie-title">Vous avez déjà réaliser '.$etat_total.'% de remplissage des données</div>
                                            </div>
                                        </div>


                                        <div class="p-t-25 p-b-20 text-center">
                                            <div class="col-sm-2 easy-pie sub-pie-1" data-percent="'.$percent_efectif.'">
                                                <div class="percent">'.$percent_efectif.'</div>
                                                <div class="pie-title">Effectifs/age et sexe</div>
                                            </div>
                                             <div class="col-sm-2 easy-pie sub-pie-2" data-percent="'.$percent_str_org.'">
                                                <div class="percent">'.$percent_str_org.'</div>
                                                <div class="pie-title">Structures organisées</div>
                                            </div>

                                            <div class="col-sm-2 easy-pie sub-pie-2" data-percent="'.$percent_str_aut.'">
                                                <div class="percent">'.$percent_str_aut.'</div>
                                                <div class="pie-title">Structures autorisées</div>
                                            </div>

                                            <div class="col-sm-2 easy-pie sub-pie-2" data-percent="'.$nbr_paroisse.'">
                                                <div class="percent">'.$nbr_paroisse.'</div>
                                                <div class="pie-title">Paroisses</div>
                                            </div>

                                            <div class="col-sm-2 easy-pie sub-pie-2" data-percent="'.$nbr_ecole.'">
                                                <div class="percent">'.$nbr_ecole.'</div>
                                                <div class="pie-title">Ecoles</div>
                                            </div>

                                            <div class="col-sm-2 easy-pie sub-pie-2" data-percent="5">
                                                <div class="percent">5</div>
                                                <div class="pie-title">Autres</div>
                                            </div>
                                            
                                        </div>
                                    </div>';
                                    ?>

                                </div>
                            </div>

                            
                        </div>
                    </div>









                    <!--###########################################################################################
                    ############################################################################################
                    ############################################################################################333########################################################################################3-->
                    <?php elseif(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "Conseiller d'enseignement"): ?>

                        <?php  
                            $paroisse = query("SELECT * FROM paroisse2 where id = ?",$_SESSION["paroisse"]);
                            echo '<h1 class="text-center">Bienvenue dans la paroisse '.$paroisse[0]["nom_paroisse"].' </h1>';
                        ?>
                            
                        <div class="mini-charts">
                        <div class="row">
                        <?php
                            $coord_sp_dasboard = query("SELECT COUNT(*) AS nbr FROM coordination_sp");
                            $paroisse_nom = query("SELECT * FROM paroisse2 where id = ?",$_SESSION["paroisse"]);
                            $paroisse_dasboard = 1;
                            $sous_division_dasboard = query("SELECT COUNT(*) AS nbr FROM sous_div WHERE belongs_to = ?",$_SESSION["paroisse"]);

                            
                            
                             /*$tab_sous_div = query("SELECT * FROM sous_div ");
                                foreach ($tab_sous_div as $sd) {
                                    $id_sd = $sd["id"];
                                    $tab_ecole_mat = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd, "Maternelle");
                                }*/


                            $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2, sous_div where ecole2.belongs_to = sous_div.id and sous_div.belongs_to = ?",$_SESSION["paroisse"]);

                            $personnel_dasboard = query("SELECT COUNT(*) AS nbr  FROM `personnel`, ecole2, sous_div WHERE personnel.ecole_affect = ecole2.id and ecole2.belongs_to = sous_div.id and sous_div.belongs_to = ?",$_SESSION["paroisse"]);














































                            //effectif scolaire

            

                            //totaux nombre ecole
                            $total_ecole_maternelle=0;
                            $total_ecole_primaire=0;
                            $total_ecole_secondaire=0;
                            $total_ecole=0;

                            //structure orgnanisee
                            $total_str_org1_mat = 0;
                            $total_str_org2_mat = 0;
                            $total_str_org3_mat = 0;

                            $total_str_org1_pri = 0;
                            $total_str_org2_pri = 0;
                            $total_str_org3_pri = 0;
                            $total_str_org4_pri = 0;
                            $total_str_org5_pri = 0;
                            $total_str_org6_pri = 0;

                            $total_str_org1_sec = 0;
                            $total_str_org2_sec = 0;
                            $total_str_org3_sec = 0;
                            $total_str_org4_sec = 0;
                            $total_str_org5_sec = 0;
                            $total_str_org6_sec = 0;

                            //totaux
                            $total_str_org_mat = 0;
                            $total_str_org_pri = 0;
                            $total_str_org_sec = 0;

                            $total_str_org = 0;

                            //totaux effectifs
                            $total_mat_eff_1_fille = 0;
                            $total_mat_eff_1_fg = 0;

                            $total_mat_eff_2_fille = 0;
                            $total_mat_eff_2_fg = 0;

                            $total_mat_eff_3_fille = 0;
                            $total_mat_eff_3_fg = 0;

                            /*$total_mat_eff_4_fille = 0;
                            $total_mat_eff_4_fg = 0;

                            $total_mat_eff_5_fille = 0;
                            $total_mat_eff_5_fg = 0;

                            $total_mat_eff_6_fille = 0;
                            $total_mat_eff_6_fg = 0;*/

                            $total_mat_eff_fille = 0;
                            $total_mat_eff_fg = 0;

                            $total_pri_eff_1_fille = 0;
                            $total_pri_eff_1_fg = 0;

                            $total_pri_eff_2_fille = 0;
                            $total_pri_eff_2_fg = 0;

                            $total_pri_eff_3_fille = 0;
                            $total_pri_eff_3_fg = 0;

                            $total_pri_eff_4_fille = 0;
                            $total_pri_eff_4_fg = 0;

                            $total_pri_eff_5_fille = 0;
                            $total_pri_eff_5_fg = 0;

                            $total_pri_eff_6_fille = 0;
                            $total_pri_eff_6_fg = 0;

                            $total_pri_eff_fille = 0;
                            $total_pri_eff_fg = 0;

                            $total_sec_eff_1_fille = 0;
                            $total_sec_eff_1_fg = 0;

                            $total_sec_eff_2_fille = 0;
                            $total_sec_eff_2_fg = 0;

                            $total_sec_eff_3_fille = 0;
                            $total_sec_eff_3_fg = 0;

                            $total_sec_eff_4_fille = 0;
                            $total_sec_eff_4_fg = 0;

                            $total_sec_eff_5_fille = 0;
                            $total_sec_eff_5_fg = 0;

                            $total_sec_eff_6_fille = 0;
                            $total_sec_eff_6_fg = 0;

                            $total_sec_eff_fille = 0;
                            $total_sec_eff_fg = 0;

                            $tot_eff_mat_fille = 0;
                            $tot_eff_mat_fg = 0;

                            $tot_eff_pri_fille = 0;
                            $tot_eff_pri_fg = 0;

                            $tot_eff_sec_fille = 0;
                            $tot_eff_sec_fg = 0;

                            //tot gen
                            $tot_gen_eff_fille_1 = 0;
                            $tot_gen_eff_fille_2 = 0;
                            $tot_gen_eff_fille_3 = 0;
                            $tot_gen_eff_fille_4 = 0;
                            $tot_gen_eff_fille_5 = 0;
                            $tot_gen_eff_fille_6 = 0;

                            $tot_gen_eff_fg_1 = 0;
                            $tot_gen_eff_fg_2 = 0;
                            $tot_gen_eff_fg_3 = 0;
                            $tot_gen_eff_fg_4 = 0;
                            $tot_gen_eff_fg_5 = 0;
                            $tot_gen_eff_fg_6 = 0;

                            $tot_gen_eff_fille = 0;
                            $tot_gen_eff_fg = 0;




                            

                            


                            



                            




                            

                            $tab_paroisse = query("SELECT * FROM diocese");
                            $num=1;
                            foreach ($tab_paroisse as $paroisse) {
                                $nbr_ecol_mat = 0;
                                $nbr_ecol_pri = 0;
                                $nbr_ecol_sec = 0;
                                $id_p = $paroisse["id"];
                                $nom_p = $paroisse["nom_diocese"];

                                //structure org et class
                                $nom_class1 = 0;
                                $nom_class2 = 0;
                                $nom_class3 = 0;

                                $nom_class_pri1 = 0;
                                $nom_class_pri2 = 0;
                                $nom_class_pri3 = 0;
                                $nom_class_pri4 = 0;
                                $nom_class_pri5 = 0;
                                $nom_class_pri6 = 0;

                                $nom_class_sec1 = 0;
                                $nom_class_sec2 = 0;
                                $nom_class_sec3 = 0;
                                $nom_class_sec4 = 0;
                                $nom_class_sec5 = 0;
                                $nom_class_sec6 = 0;
                                
                                //###################################
                            //EFFECTIFS DES ELEV mat
                            $som_mat_fille_1 = 0;
                            $som_mat_garcon_1 = 0;
                            $som_mat_fg_garcon_1 = 0;

                            $som_mat_fille_2 = 0;
                            $som_mat_garcon_2 = 0;
                            $som_mat_fg_garcon_2 = 0;

                            $som_mat_fille_3 = 0;
                            $som_mat_garcon_3 = 0;
                            $som_mat_fg_garcon_3 = 0;
                            //pri
                            $som_pri_fille_1 = 0;
                            $som_pri_garcon_1 = 0;
                            $som_pri_fg_garcon_1 = 0;

                            $som_pri_fille_2 = 0;
                            $som_pri_garcon_2 = 0;
                            $som_pri_fg_garcon_2 = 0;

                            $som_pri_fille_3 = 0;
                            $som_pri_garcon_3 = 0;
                            $som_pri_fg_garcon_3 = 0;

                            $som_pri_fille_4 = 0;
                            $som_pri_garcon_4 = 0;
                            $som_pri_fg_garcon_4 = 0;

                            $som_pri_fille_5 = 0;
                            $som_pri_garcon_5 = 0;
                            $som_pri_fg_garcon_5 = 0;

                            $som_pri_fille_6 = 0;
                            $som_pri_garcon_6 = 0;
                            $som_pri_fg_garcon_6 = 0;

                            //sec
                            $som_sec_fille_1 = 0;
                            $som_sec_garcon_1 = 0;
                            $som_sec_fg_garcon_1 = 0;

                            $som_sec_fille_2 = 0;
                            $som_sec_garcon_2 = 0;
                            $som_sec_fg_garcon_2 = 0;

                            $som_sec_fille_3 = 0;
                            $som_sec_garcon_3 = 0;
                            $som_sec_fg_garcon_3 = 0;

                            $som_sec_fille_4 = 0;
                            $som_sec_garcon_4 = 0;
                            $som_sec_fg_garcon_4 = 0;

                            $som_sec_fille_5 = 0;
                            $som_sec_garcon_5 = 0;
                            $som_sec_fg_garcon_5 = 0;
                            
                            $som_sec_fille_6 = 0;
                            $som_sec_garcon_6 = 0;
                            $som_sec_fg_garcon_6 = 0;

                            //totaux effectif
                            $total_eff_mat_fille = 0;
                            $total_eff_mat_fg = 0;

                            $total_eff_pri_fille = 0;
                            $total_eff_pri_fg = 0;

                            $total_eff_sec_fille = 0;
                            $total_eff_sec_fg = 0;

                            //primaire
                            //$som_p_fille_1 = 0;
                            //$som_p_garcon_1 = 0;

                                $tab_sous_div = query("SELECT * FROM sous_div WHERE belongs_to = ? ",$_SESSION["paroisse"]);
                                foreach ($tab_sous_div as $sd) {
                                    $id_sd = $sd["id"];
                                    $tab_ecole_mat = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd, "Maternelle");
                                    
                                    //echo "SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau = "."Maternelle<br>";
                                    $nbr_ecol_mat = $tab_ecole_mat[0]["nbr"] +$nbr_ecol_mat;
                                    $total_ecole_maternelle = $total_ecole_maternelle + $nbr_ecol_mat;
                                    $tab_ecole_pri = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd,"Primaire");

                                    $nbr_ecol_pri = $tab_ecole_pri[0]["nbr"]+$nbr_ecol_pri;
                                    $total_ecole_primaire = $total_ecole_primaire + $nbr_ecol_pri;
                                    $tab_ecole_sec = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd,"Secondaire");

                                    $nbr_ecol_sec = $tab_ecole_sec[0]["nbr"]+$nbr_ecol_sec;
                                    $total_ecole_secondaire = $total_ecole_secondaire + $nbr_ecol_sec;

                                    

                                    /*echo "$total_ecole = $total_ecole_maternelle + $total_ecole_primaire + $total_ecole_secondaire <br>";*/

                                    //STRUCTURRE ORGANISEE MATERNELLE
                                     $tab_ecole = query("SELECT * FROM ecole2 where belongs_to = ? ", $id_sd);
                                     foreach ($tab_ecole as $tb_ec) {
                                        if($tb_ec["id_niveau"] == "Maternelle"){
                                        //########################################################
                                        //STRUCTURE ORG

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        

                                        $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                       

                                        $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                        if (count($tabstr_org1) == 1 && count($tabstr_org2) && count($tabstr_org3) ) {
                                            $nom_class1 = $nom_class1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class2 = $nom_class2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class3 = $nom_class3 + $tabstr_org3[0]["nbr_structure"];
                                        }

                                        //EFFECTIF DES ELEVS 
                                        $tab_ecole_mat = query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");

                                        $tab_ecole_mat2 = query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        $tab_ecole_mat3= query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");

                                            if(count($tab_ecole_mat) == 1 && count($tab_ecole_mat2) == 1 && count($tab_ecole_mat3) == 1){
                                               

                                                $somme_mat_fille_1 =  $tab_ecole_mat[0]["age_6ansF"]+$tab_ecole_mat[0]["age_6F"]+$tab_ecole_mat[0]["age_7a10ansF"];

                                                $somme_mat_garcon_1 = $tab_ecole_mat[0]["age_6ansG"]+$tab_ecole_mat[0]["age_6G"]+$tab_ecole_mat[0]["age_7a10ansG"];

                                                 $somme_mat_fille_2 = $tab_ecole_mat2[0]["age_6ansF"]+$tab_ecole_mat2[0]["age_6F"]+$tab_ecole_mat2[0]["age_7a10ansF"];

                                                $somme_mat_garcon_2 = $tab_ecole_mat2[0]["age_6ansG"]+$tab_ecole_mat2[0]["age_6G"]+$tab_ecole_mat2[0]["age_7a10ansG"];

                                                 $somme_mat_fille_3 =$tab_ecole_mat3[0]["age_6ansF"]+$tab_ecole_mat3[0]["age_6F"]+$tab_ecole_mat3[0]["age_7a10ansF"];

                                                $somme_mat_garcon_3 = $tab_ecole_mat3[0]["age_6ansG"]+$tab_ecole_mat3[0]["age_6G"]+$tab_ecole_mat3[0]["age_7a10ansG"];

                                                $som_mat_fille_1 =$som_mat_fille_1 +$somme_mat_fille_1;
                                                $som_mat_garcon_1 =$som_mat_garcon_1+$somme_mat_garcon_1;
                                                $som_mat_fille_2 =$som_mat_fille_2+$somme_mat_fille_2;
                                                $som_mat_garcon_2 =$som_mat_garcon_2+$somme_mat_garcon_2;
                                                $som_mat_fille_3 =$som_mat_fille_3+$somme_mat_fille_3;
                                                $som_mat_garcon_3 =$som_mat_garcon_3+$somme_mat_garcon_3;



                                                $som_mat_fg_garcon_1 = $som_mat_garcon_1+$som_mat_fille_1;
                                                $som_mat_fg_garcon_2 = $som_mat_garcon_2+$som_mat_fille_2;
                                                $som_mat_fg_garcon_3 = $som_mat_garcon_3+$som_mat_fille_3;

                                                //totaux effectifs
                                                $total_eff_mat_fille = $som_mat_fille_1 + $som_mat_fille_2+ $som_mat_fille_3;

                                                $total_eff_mat_fg = $som_mat_fg_garcon_1 + $som_mat_fg_garcon_2 + $som_mat_fg_garcon_3;
                                               
                                                //totaux effectif bas
                                                $total_mat_eff_1_fille = $total_mat_eff_1_fille + $somme_mat_fille_1;

                                                $total_mat_eff_1_fg =$total_mat_eff_1_fg + $somme_mat_fille_1 + $somme_mat_garcon_1;

                                                $total_mat_eff_2_fille = $total_mat_eff_2_fille + $somme_mat_fille_2;

                                                $total_mat_eff_2_fg =$total_mat_eff_2_fg + $somme_mat_fille_2 + $somme_mat_garcon_2;

                                                $total_mat_eff_3_fille = $total_mat_eff_3_fille + $somme_mat_fille_3;

                                                $total_mat_eff_3_fg =$total_mat_eff_3_fg + $somme_mat_fille_3 + $somme_mat_garcon_3;



                                                $tot_eff_mat_fille = $tot_eff_mat_fille + $somme_mat_fille_1 + $somme_mat_fille_2 + $somme_mat_fille_3;

                                                $tot_eff_mat_fg = $tot_eff_mat_fg + $somme_mat_garcon_1 + $somme_mat_garcon_2+ $somme_mat_garcon_3 + $somme_mat_fille_1 + $somme_mat_fille_2 + $somme_mat_fille_3;
                                                //echo "$total_mat_eff_1_fille<br>";



                                            }
                                            
                                        
                                        


        


                                          


                                    }
                                    elseif($tb_ec["id_niveau"] == "Primaire"){

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        
                                        //echo $tabstr_org1[0]["nbr_structure"]." <br>";
                                        //echo $nom_class1." <br>";
                                         $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                        

                                         $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                         $tabstr_org4 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");
                                       


                                         $tabstr_org5 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");
                                        

                                        $tabstr_org6 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        

                                        if(count($tabstr_org1)==1 && count($tabstr_org2)==1 && count($tabstr_org3)==1 && count($tabstr_org4)==1 && count($tabstr_org5)==1 && count($tabstr_org6)==1)
                                        {
                                            $nom_class_pri1 = $nom_class_pri1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class_pri2 = $nom_class_pri2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class_pri3 = $nom_class_pri3 + $tabstr_org3[0]["nbr_structure"];
                                            $nom_class_pri4 = $nom_class_pri4 + $tabstr_org4[0]["nbr_structure"];
                                            $nom_class_pri5 = $nom_class_pri5 + $tabstr_org5[0]["nbr_structure"];
                                            $nom_class_pri6 = $nom_class_pri6 + $tabstr_org6[0]["nbr_structure"];
                                        }

                                        //primaire
                                         $tab_ecole_pri = query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");

                                        $tab_ecole_pri2 = query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        $tab_ecole_pri3= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        
                                        $tab_ecole_pri4= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");

                                        $tab_ecole_pri5= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");

                                        $tab_ecole_pri6= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        if (count($tab_ecole_pri) == 1 && count($tab_ecole_pri2) == 1 && count($tab_ecole_pri3) == 1 && count($tab_ecole_pri4) == 1 && count($tab_ecole_pri5) == 1 && count($tab_ecole_pri6) == 1) {
                                            # code...
                                            $somme_pri_fille_1 =  $tab_ecole_pri[0]["age_6ansF"] + $tab_ecole_pri[0]["age_6F"] +$tab_ecole_pri[0]["age_7a10ansF"] + $tab_ecole_pri[0]["age_11ansF"]+$tab_ecole_pri[0]["age_plus11ansF"];

                                            $somme_pri_garcon_1 =$tab_ecole_pri[0]["age_6ansG"] + $tab_ecole_pri[0]["age_6G"] +$tab_ecole_pri[0]["age_7a10ansG"] + $tab_ecole_pri[0]["age_11ansG"]+$tab_ecole_pri[0]["age_plus11ansG"];

                                            $somme_pri_fille_2 =$tab_ecole_pri2[0]["age_6ansF"] + $tab_ecole_pri2[0]["age_6F"] +$tab_ecole_pri2[0]["age_7a10ansF"] + $tab_ecole_pri2[0]["age_11ansF"]+$tab_ecole_pri2[0]["age_plus11ansF"];

                                            $somme_pri_garcon_2 =$tab_ecole_pri2[0]["age_6ansG"] + $tab_ecole_pri2[0]["age_6G"] +$tab_ecole_pri2[0]["age_7a10ansG"] + $tab_ecole_pri2[0]["age_11ansG"]+$tab_ecole_pri2[0]["age_plus11ansG"];

                                            $somme_pri_fille_3 = $tab_ecole_pri3[0]["age_6ansF"] + $tab_ecole_pri3[0]["age_6F"] +$tab_ecole_pri3[0]["age_7a10ansF"] + $tab_ecole_pri3[0]["age_11ansF"]+$tab_ecole_pri3[0]["age_plus11ansF"];

                                            $somme_pri_garcon_3 =$tab_ecole_pri3[0]["age_6ansG"] + $tab_ecole_pri3[0]["age_6G"] +$tab_ecole_pri3[0]["age_7a10ansG"] + $tab_ecole_pri3[0]["age_11ansG"]+$tab_ecole_pri3[0]["age_plus11ansG"];

                                            $somme_pri_fille_4 =$tab_ecole_pri4[0]["age_6ansF"] + $tab_ecole_pri4[0]["age_6F"] +$tab_ecole_pri4[0]["age_7a10ansF"] + $tab_ecole_pri4[0]["age_11ansF"]+$tab_ecole_pri4[0]["age_plus11ansF"];

                                            $somme_pri_garcon_4 =$tab_ecole_pri4[0]["age_6ansG"] + $tab_ecole_pri4[0]["age_6G"] +$tab_ecole_pri4[0]["age_7a10ansG"] + $tab_ecole_pri4[0]["age_11ansG"]+$tab_ecole_pri4[0]["age_plus11ansG"];

                                            $somme_pri_fille_5 = $tab_ecole_pri5[0]["age_6ansF"] + $tab_ecole_pri5[0]["age_6F"] +$tab_ecole_pri5[0]["age_7a10ansF"] + $tab_ecole_pri5[0]["age_11ansF"]+$tab_ecole_pri5[0]["age_plus11ansF"];

                                            $somme_pri_garcon_5 =$tab_ecole_pri5[0]["age_6ansG"] + $tab_ecole_pri5[0]["age_6G"] +$tab_ecole_pri5[0]["age_7a10ansG"] + $tab_ecole_pri5[0]["age_11ansG"]+$tab_ecole_pri5[0]["age_plus11ansG"];

                                            $somme_pri_fille_6 =$tab_ecole_pri6[0]["age_6ansF"] + $tab_ecole_pri6[0]["age_6F"] +$tab_ecole_pri6[0]["age_7a10ansF"] + $tab_ecole_pri6[0]["age_11ansF"]+$tab_ecole_pri6[0]["age_plus11ansF"];

                                            $somme_pri_garcon_6 =$tab_ecole_pri6[0]["age_6ansG"] + $tab_ecole_pri6[0]["age_6G"] +$tab_ecole_pri6[0]["age_7a10ansG"] + $tab_ecole_pri6[0]["age_11ansG"]+$tab_ecole_pri6[0]["age_plus11ansG"];

                                            $som_pri_fille_1 = $som_pri_fille_1+$somme_pri_fille_1;
                                            $som_pri_garcon_1 = $som_pri_garcon_1+$somme_pri_garcon_1;

                                            $som_pri_fille_2 = $som_pri_fille_2+$somme_pri_fille_2;
                                            $som_pri_garcon_2 = $som_pri_garcon_2+$somme_pri_garcon_2;

                                            $som_pri_fille_3 = $som_pri_fille_3+$somme_pri_fille_3;
                                            $som_pri_garcon_3 = $som_pri_garcon_3+$somme_pri_garcon_3;

                                            $som_pri_fille_4 = $som_pri_fille_4+$somme_pri_fille_4;
                                            $som_pri_garcon_4 = $som_pri_garcon_4+$somme_pri_garcon_4;

                                            $som_pri_fille_5 = $som_pri_fille_5+$somme_pri_fille_5;
                                            $som_pri_garcon_5 = $som_pri_garcon_5+$somme_pri_garcon_5;

                                            $som_pri_fille_6 = $som_pri_fille_6+$somme_pri_fille_6;
                                            $som_pri_garcon_6 = $som_pri_garcon_6+$somme_pri_garcon_6;

                                            $som_pri_fg_garcon_1 = $som_pri_garcon_1+$som_pri_fille_1;
                                            $som_pri_fg_garcon_2 = $som_pri_garcon_2+$som_pri_fille_2;
                                            $som_pri_fg_garcon_3 = $som_pri_garcon_3+$som_pri_fille_3;
                                            $som_pri_fg_garcon_4 = $som_pri_garcon_4+$som_pri_fille_4;
                                            $som_pri_fg_garcon_5 = $som_pri_garcon_5+$som_pri_fille_5;
                                            $som_pri_fg_garcon_6 = $som_pri_garcon_6+$som_pri_fille_6;

                                            $total_eff_pri_fille = $som_pri_fille_1+$som_pri_fille_2+$som_pri_fille_3+$som_pri_fille_4+$som_pri_fille_5+$som_pri_fille_6;

                                            $total_eff_pri_fg = $som_pri_fg_garcon_1+$som_pri_fg_garcon_2+$som_pri_fg_garcon_3+$som_pri_fg_garcon_4+$som_pri_fg_garcon_5+$som_pri_fg_garcon_6; 

                                            //tautaux bas 
                                            $total_pri_eff_1_fille = $total_pri_eff_1_fille + $somme_pri_fille_1;

                                            $total_pri_eff_1_fg =$total_pri_eff_1_fg + $somme_pri_fille_1 + $somme_pri_garcon_1;

                                            $total_pri_eff_2_fille = $total_pri_eff_2_fille + $somme_pri_fille_2;

                                            $total_pri_eff_2_fg =$total_pri_eff_2_fg + $somme_pri_fille_2 + $somme_pri_garcon_2;

                                            $total_pri_eff_3_fille = $total_pri_eff_3_fille + $somme_pri_fille_3;

                                            $total_pri_eff_3_fg =$total_pri_eff_3_fg + $somme_pri_fille_3 + $somme_pri_garcon_3;

                                            $total_pri_eff_4_fille = $total_pri_eff_4_fille + $somme_pri_fille_4;

                                            $total_pri_eff_4_fg =$total_pri_eff_4_fg + $somme_pri_fille_4 + $somme_pri_garcon_4;

                                            $total_pri_eff_5_fille = $total_pri_eff_5_fille + $somme_pri_fille_5;

                                            $total_pri_eff_5_fg =$total_pri_eff_5_fg + $somme_pri_fille_5 + $somme_pri_garcon_5;

                                            $total_pri_eff_6_fille = $total_pri_eff_6_fille + $somme_pri_fille_6;

                                            $total_pri_eff_6_fg =$total_pri_eff_6_fg + $somme_pri_fille_6 + $somme_pri_garcon_6;

                                            //totaux droit
                                            $tot_eff_pri_fille = $tot_eff_pri_fille + $somme_pri_fille_1 + $somme_pri_fille_2 + $somme_pri_fille_3 + $somme_pri_fille_4 + $somme_pri_fille_5 + $somme_pri_fille_6;

                                            $tot_eff_pri_fg = $tot_eff_pri_fg + $somme_pri_garcon_1 + $somme_pri_garcon_2+ $somme_pri_garcon_3 + $somme_pri_garcon_4 + $somme_pri_garcon_5 + $somme_pri_garcon_6 + $somme_pri_fille_1 + $somme_pri_fille_2 + $somme_pri_fille_3 + $somme_pri_fille_4 + $somme_pri_fille_5 + $somme_pri_fille_6;


                                        } 
                                        

                                    }
                                    elseif($tb_ec["id_niveau"] == "Secondaire"){

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        
                                        //echo $tabstr_org1[0]["nbr_structure"]." <br>";
                                        //echo $nom_class1." <br>";
                                         $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                        

                                         $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                         $tabstr_org4 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");
                                        


                                         $tabstr_org5 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");
                                        

                                        $tabstr_org6 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        

                                        if (count($tabstr_org1) && count($tabstr_org2 ) && count($tabstr_org3) && count($tabstr_org4) && count($tabstr_org5) && count($tabstr_org6)) {
                                            $nom_class_sec1 = $nom_class_sec1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class_sec2 = $nom_class_sec2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class_sec3 = $nom_class_sec3 + $tabstr_org3[0]["nbr_structure"];
                                            $nom_class_sec4 = $nom_class_sec4 + $tabstr_org4[0]["nbr_structure"];
                                            $nom_class_sec5 = $nom_class_sec5 + $tabstr_org5[0]["nbr_structure"];
                                            $nom_class_sec6 = $nom_class_sec6 + $tabstr_org6[0]["nbr_structure"];
                                        }

                                        //SECONDAIRE
                                        $tab_ecole_sec = query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
    //echo "SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ".$tb_ec["id"]." and nom_class = '1' ";

                                        $tab_ecole_sec2 = query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        //recursivite des section
                                        $liste_section = query("SELECT DISTINCT `option` FROM `classe_secondaire_cl` WHERE `id_ecole` =  ? ",$tb_ec["id"]);

                                        //echo "SELECT DISTINCT `option` FROM `classe_secondaire_cl` WHERE `id_ecole` = ".$tb_ec["id"]."<br>";

                                       

                                        if ((count($tab_ecole_sec) == 1 && count($tab_ecole_sec2) == 1 )) {

                                            
                                            $somme_sec_fille_1 =$tab_ecole_sec[0]["effectif_F"];
                                            $somme_sec_garcon_1=$tab_ecole_sec[0]["effectif_G"];

                                            $somme_sec_fille_2 =$tab_ecole_sec2[0]["effectif_F"];
                                            $somme_sec_garcon_2=$tab_ecole_sec2[0]["effectif_G"];

                                            $som_sec_fille_1 =$som_sec_fille_1 + $somme_sec_fille_1;
                                            $som_sec_garcon_1=$som_sec_garcon_1 +$somme_sec_garcon_1;

                                            $som_sec_fille_2 =$som_sec_fille_2+ $somme_sec_fille_2;
                                            $som_sec_garcon_2=$som_sec_garcon_2+$somme_sec_garcon_2;

                                            //$somme_sec_fille_1 = 

                                            //fonction recursive des sections

                                            $som_sec_fg_garcon_1 = $som_sec_garcon_1+$som_sec_fille_1;
                                            $som_sec_fg_garcon_2 = $som_sec_garcon_2+$som_sec_fille_2;

                                            //totaux 
                                            $total_sec_eff_1_fille = $total_sec_eff_1_fille + $somme_sec_fille_1;
                                            $total_sec_eff_1_fg = $total_sec_eff_1_fg + $somme_sec_fille_1 + $somme_sec_garcon_1;

                                            $total_sec_eff_2_fille = $total_sec_eff_2_fille + $somme_sec_fille_2;
                                            $total_sec_eff_2_fg = $total_sec_eff_2_fg + $somme_sec_fille_2 + $somme_sec_garcon_2;

                                            //echo "$total_sec_eff_fille<br>";

                                            //totaux droit
                                            $total_sec_eff_fille =$total_sec_eff_fille+ $somme_sec_fille_1 + $somme_sec_fille_2;
                                             $total_sec_eff_fg =$total_sec_eff_fg+ $somme_sec_fille_1 + $somme_sec_fille_2 + $somme_sec_garcon_1 + $somme_sec_garcon_2;
                                            

                                        } 
                                        if (count($liste_section) > 0) {
                                    foreach ($liste_section as $option) {
                                       /* $tab_cl_3 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and nom_class = ?",$tb_ec["id"], "3");*/

                                        $tab_cl_3 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "3" , $option["option"]);
                                        $tab_cl_4 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "4" , $option["option"]);
                                        $tab_cl_5 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "5" , $option["option"]);
                                        $tab_cl_6 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ?) ",$tb_ec["id"], "6" , $option["option"]);

                                        
                                        


                                        if(count($tab_cl_3) == 1 && count($tab_cl_4) == 1 && count($tab_cl_5) == 1 && count($tab_cl_6) == 1)
                                        {
                                       
                                            $somme_sec_fille_3 =  $tab_cl_3[0]["effectif_F"];
                                            $somme_sec_garcon_3 =   $tab_cl_3[0]["effectif_G"];

                                            $somme_sec_fille_4 =  $tab_cl_4[0]["effectif_F"];
                                            $somme_sec_garcon_4 =   $tab_cl_4[0]["effectif_G"];

                                            $somme_sec_fille_5 =  $tab_cl_5[0]["effectif_F"];
                                            $somme_sec_garcon_5 =   $tab_cl_5[0]["effectif_G"];

                                            $somme_sec_fille_6 =  $tab_cl_6[0]["effectif_F"];
                                            $somme_sec_garcon_6 =   $tab_cl_6[0]["effectif_G"];

                                            $som_sec_fille_3 =$som_sec_fille_3 +$somme_sec_fille_3 ; 
                                            $som_sec_garcon_3 =$som_sec_garcon_3 +$somme_sec_garcon_3; 
                                            $som_sec_fille_4 = $som_sec_fille_4 + $somme_sec_fille_4 ; 
                                            $som_sec_garcon_4 = $som_sec_garcon_4 +$somme_sec_garcon_4;
                                            $som_sec_fille_5 = $som_sec_fille_5 + $somme_sec_fille_5 ; 
                                            $som_sec_garcon_5 = $som_sec_garcon_5 +$somme_sec_garcon_5;
                                            $som_sec_fille_6 = $som_sec_fille_6 + $somme_sec_fille_6 ;
                                            $som_sec_garcon_6 = $som_sec_garcon_6 +$somme_sec_garcon_6;

                                            $som_sec_fg_garcon_3 = $som_sec_garcon_3+$som_sec_fille_3;
                                            $som_sec_fg_garcon_4 = $som_sec_garcon_4+$som_sec_fille_4;
                                            $som_sec_fg_garcon_5 = $som_sec_garcon_5+$som_sec_fille_5;
                                            $som_sec_fg_garcon_6 = $som_sec_garcon_6+$som_sec_fille_6;

                                            //totaux 
                                            $total_sec_eff_3_fille = $total_sec_eff_3_fille + $somme_sec_fille_3;
                                            $total_sec_eff_3_fg = $total_sec_eff_3_fg + $somme_sec_fille_3 + $somme_sec_garcon_3;

                                            $total_sec_eff_4_fille = $total_sec_eff_4_fille + $somme_sec_fille_4;
                                            $total_sec_eff_4_fg = $total_sec_eff_4_fg + $somme_sec_fille_4 + $somme_sec_garcon_4;

                                            $total_sec_eff_5_fille = $total_sec_eff_5_fille + $somme_sec_fille_5;
                                            $total_sec_eff_5_fg = $total_sec_eff_5_fg + $somme_sec_fille_5 + $somme_sec_garcon_5;

                                            $total_sec_eff_6_fille = $total_sec_eff_6_fille + $somme_sec_fille_6;
                                            $total_sec_eff_6_fg = $total_sec_eff_6_fg + $somme_sec_fille_6 + $somme_sec_garcon_6; 

                                            $total_sec_eff_fille = $total_sec_eff_fille+ $somme_sec_fille_3 + $somme_sec_fille_4 + $somme_sec_fille_5 + $somme_sec_fille_6;

                                             $total_sec_eff_fg = $total_sec_eff_fg+ $somme_sec_fille_3 + $somme_sec_fille_4 + $somme_sec_fille_5 + $somme_sec_fille_6 + $somme_sec_garcon_3 + $somme_sec_garcon_4 + $somme_sec_garcon_5 + $somme_sec_garcon_6 ;




                                           
                                        }


                                        
                                    } 
                                   
                                    

                                }
                                //
                                //$total_sec_eff_1_fille = $total_sec_eff_1_fille;
                                
                                        
                                
                                    }

                                     }


                                }
                                //totaux de structure mat
                                $total_str_org1_mat = $total_str_org1_mat + $nom_class1;
                                $total_str_org2_mat = $total_str_org2_mat + $nom_class2;
                                $total_str_org3_mat = $total_str_org3_mat + $nom_class3;

                                $total_str_org1_pri = $total_str_org1_pri + $nom_class_pri1;
                                $total_str_org2_pri = $total_str_org2_pri + $nom_class_pri2;
                                $total_str_org3_pri = $total_str_org3_pri + $nom_class_pri3;
                                $total_str_org4_pri = $total_str_org4_pri + $nom_class_pri4;
                                $total_str_org5_pri = $total_str_org5_pri + $nom_class_pri5;
                                $total_str_org6_pri = $total_str_org6_pri + $nom_class_pri6;

                                $total_str_org1_sec = $total_str_org1_sec + $nom_class_sec1;
                                $total_str_org2_sec = $total_str_org2_sec + $nom_class_sec2;
                                $total_str_org3_sec = $total_str_org3_sec + $nom_class_sec3;
                                $total_str_org4_sec = $total_str_org4_sec + $nom_class_sec4;
                                $total_str_org5_sec = $total_str_org5_sec + $nom_class_sec5;
                                $total_str_org6_sec = $total_str_org6_sec + $nom_class_sec6;

                                //totaux gen
                                $total_str_org1 = $total_str_org1_mat+$total_str_org1_pri+$total_str_org1_sec;
                                $total_str_org2 = $total_str_org2_mat+$total_str_org2_pri+$total_str_org2_sec;
                                $total_str_org3 = $total_str_org3_mat+$total_str_org3_pri+$total_str_org3_sec;
                                $total_str_org4 = $total_str_org4_pri+$total_str_org4_sec;
                                $total_str_org5 = $total_str_org5_pri+$total_str_org5_sec;
                                $total_str_org6 = $total_str_org6_pri+$total_str_org6_sec;

                                //totaux droits

                                $total_eff_sec_fille = $som_sec_fille_1+$som_sec_fille_2+$som_sec_fille_3+$som_sec_fille_4+$som_sec_fille_5+$som_sec_fille_6;

                                $total_eff_sec_fg = $som_sec_fg_garcon_1+$som_sec_fg_garcon_2+$som_sec_fg_garcon_3+$som_sec_fg_garcon_4+$som_sec_fg_garcon_5+$som_sec_fg_garcon_6;

                                //total genrale effectif

                                $total_ecole = $nbr_ecol_mat + $nbr_ecol_pri + $nbr_ecol_sec;

                             

                               

                                
                                       
                               
                                    if ($nbr_ecol_mat == 0) {
                                       

                                        $nom_class_pri = $nom_class_pri1+$nom_class_pri2+$nom_class_pri3+$nom_class_pri4+$nom_class_pri5+$nom_class_pri6;
                                        
                                        
                                       
                                       

                                        $nom_class_sec = $nom_class_sec1+$nom_class_sec2+$nom_class_sec3+$nom_class_sec4+$nom_class_sec5+$nom_class_sec6;
                                        
                                    }
                                    else{

                                        $nom_class123 = $nom_class1 + $nom_class2 +$nom_class3; 
                                       

                                        $nom_class_pri = $nom_class_pri1+$nom_class_pri2+$nom_class_pri3+$nom_class_pri4+$nom_class_pri5+$nom_class_pri6;
                                       

                                        $nom_class_sec = $nom_class_sec1+$nom_class_sec2+$nom_class_sec3+$nom_class_sec4+$nom_class_sec5+$nom_class_sec6;
                                        
                                    }
                                    
                                }

                                //##################################################################
                                $total_str_org_mat = $total_str_org_mat + $total_str_org1_mat +$total_str_org2_mat + $total_str_org3_mat;

                                $total_str_org_pri = $total_str_org_pri + $total_str_org1_pri +$total_str_org2_pri + $total_str_org3_pri + $total_str_org4_pri+ $total_str_org5_pri+ $total_str_org6_pri;

                                $total_str_org_sec = $total_str_org_sec + $total_str_org1_sec +$total_str_org2_sec + $total_str_org3_sec + $total_str_org4_sec+ $total_str_org5_sec+ $total_str_org6_sec;

                                $total_str_org = $total_str_org_mat + $total_str_org_pri + $total_str_org_sec;

                                  //totaux effectif

                                $tot_gen_eff_fille_1 = $total_mat_eff_1_fille +$total_pri_eff_1_fille + $total_sec_eff_1_fille;
                                $tot_gen_eff_fg_1 = $total_mat_eff_1_fg+$total_pri_eff_1_fg+$total_sec_eff_1_fg;

                                 $tot_gen_eff_fille_2 = $total_mat_eff_2_fille +$total_pri_eff_2_fille + $total_sec_eff_2_fille;
                                $tot_gen_eff_fg_2 = $total_mat_eff_2_fg+$total_pri_eff_2_fg+$total_sec_eff_2_fg;

                                 $tot_gen_eff_fille_3 = $total_mat_eff_3_fille +$total_pri_eff_3_fille + $total_sec_eff_3_fille;
                                $tot_gen_eff_fg_3 = $total_mat_eff_3_fg+$total_pri_eff_3_fg+$total_sec_eff_3_fg;

                                 $tot_gen_eff_fille_4 = $total_pri_eff_4_fille + $total_sec_eff_4_fille;
                                $tot_gen_eff_fg_4 = $total_pri_eff_4_fg+$total_sec_eff_4_fg;

                                 $tot_gen_eff_fille_5 = $total_pri_eff_5_fille + $total_sec_eff_5_fille;
                                $tot_gen_eff_fg_5 = $total_pri_eff_5_fg+$total_sec_eff_5_fg;

                                 $tot_gen_eff_fille_6 = $total_pri_eff_6_fille + $total_sec_eff_6_fille;
                                $tot_gen_eff_fg_6 = $total_pri_eff_6_fg+$total_sec_eff_6_fg;

                                $tot_gen_eff_fille = $tot_eff_mat_fille+$tot_eff_pri_fille+$total_sec_eff_fille;
                                $tot_gen_eff_fg = $tot_eff_mat_fg+$tot_eff_pri_fg+$total_sec_eff_fg;





                           /* echo "<tr class='tr'>";
                                echo "<td colspan='2'> TOTAL GENERAL</td>";
                               
                                 echo "<td > $total_ecole </td>";
                                  echo "<td  style='background:cadetblue'></td>";
                                 echo "<td>$total_str_org1</td>";
                                 echo "<td>$total_str_org2</td>";
                                 echo "<td>$total_str_org3</td>";
                                 echo "<td>$total_str_org4</td>";
                                 echo "<td>$total_str_org5</td>";
                                 echo "<td>$total_str_org6</td>";
                                 echo "<td>$total_str_org</td>";

                                 //les totaux

                                 echo "<td>$tot_gen_eff_fille_1</td>";
                                 echo "<td>$tot_gen_eff_fg_1</td>";

                                 echo "<td>$tot_gen_eff_fille_2</td>";
                                 echo "<td>$tot_gen_eff_fg_2</td>";

                                 echo "<td>$tot_gen_eff_fille_3</td>";
                                 echo "<td>$tot_gen_eff_fg_3</td>";

                                 echo "<td>$tot_gen_eff_fille_4</td>";
                                 echo "<td>$tot_gen_eff_fg_4</td>";

                                 echo "<td>$tot_gen_eff_fille_5</td>";
                                 echo "<td>$tot_gen_eff_fg_5</td>";

                                 echo "<td>$tot_gen_eff_fille_6</td>";
                                 echo "<td>$tot_gen_eff_fg_6</td>";

                                  echo "<td>$tot_gen_eff_fille</td>";
                                  echo "<td>$tot_gen_eff_fg</td>";
*/


                                /*for ($i=0; $i < 12 ; $i++) { 
                                    echo "<td> -- </td>";
                                }*/

                                //echo "</tr>";


                           
                        
                                
                            
                            
            

                            //fin effectif scolaire













































                        
                           echo '
                            
                                                        <div class="col-sm-4">
                                                            <div class="mini-charts-item bgm-lightgreen">
                                                                <div class="clearfix">
                                                                     <div class="chart stats-line"></div> 
                                                                    <div class="count">
                                                                        <small>Paroisses '.$paroisse_nom[0]["nom_paroisse"].'</small>
                                                                        <h2>'.$paroisse_dasboard.'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-4">
                                                            <div class="mini-charts-item bgm-blue">
                                                                <div class="clearfix">
                                                                   <div class="chart stats-line"></div> 
                                                                    <div class="count">
                                                                        <small>Sous divisions</small>
                                                                        <h2>'.$sous_division_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-4">
                                                            <div class="mini-charts-item bgm-bluegray">
                                                                <div class="clearfix">
                                                                    <div class="chart stats-line"></div> 
                                                                    <div class="count">
                                                                        <small>Ecoles </small>
                                                                        <h2>'.$ecole_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-6">
                                                            <div class="mini-charts-item bgm-pink">
                                                                <div class="clearfix">
                                                                     <div class="chart stats-bar"></div> 
                                                                    <div class="count">
                                                                        <small>Nombre total d\'élèves</small>
                                                                        <h2>'.$tot_gen_eff_fg.'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-6">
                                                            <div class="mini-charts-item bgm-purple">
                                                                <div class="clearfix">
                                                                     <div class="chart stats-bar-2"></div> 
                                                                    <div class="count">
                                                                        <small>Nombre total du personnel</small>
                                                                        <h2>'.$personnel_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                        ?>

                            
                        </div>
                    </div>



                    


                    <div class="dash-widgets">
                        <div class="row">
                            

                            <div class="col-md-12 col-sm-12">
                                <div id="pie-charts" class="dw-item bgm-teal c-white">

                                    <?php

                                    $nbr_ecole = 0;
                                    $nbr_str_org = 0;
                                    $nbr_str_aut = 0;

                                    //nombre des ecoles aux quelles on a deja associe un effectif
                                    //nombre des ecoles aux quelles on pas encore associe un effectif

                                    //$effectif_age_sex = query();
                                    //nombre des ecoles dans la paroisse 
                                    //ecole2.belongs_to = sous_div.id and sous_div.belongs_to = ?
                                    $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2, sous_div WHERE ecole2.belongs_to = sous_div.id and sous_div.belongs_to = ? ",$_SESSION["paroisse"]);
                                    $total_ecole = $ecole_dasboard[0]["nbr"];


                                    $ecole_total = query("SELECT ecole2.id FROM ecole2 , sous_div WHERE ecole2.belongs_to = sous_div.id and sous_div.belongs_to = ? ",$_SESSION["paroisse"]);
                                    //echo count($ecole_total);
                                    foreach ($ecole_total as $ecole) {
                                        //maternelle
                                        $mat = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_maternelle WHERE id_ecole = ?",$ecole["id"]);
                                        if($mat[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                            //echo "SELECT count(DISTINCT `id_ecole`) as nbr from classe_maternelle WHERE id_ecole = ".$ecole["id"]."<br>";
                                            //echo "bre1<br>";
                                        }

                                        //primaire
                                        $pri = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_primaire WHERE id_ecole = ?",$ecole["id"]);
                                        if($pri[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                            //echo "bre2<br>";
                                            //echo "SELECT count(DISTINCT `id_ecole`) as nbr from classe_primaire WHERE id_ecole = ".$ecole["id"]."<br>";
                                        }
                                        
                                        //secondaire
                                        $sec = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_secondaire_cl WHERE id_ecole = ?",$ecole["id"]);
                                        if($sec[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                            //echo "bre3<br>";
                                        }

                                        $str_org = query("SELECT count(DISTINCT `id_ecole`) as nbr FROM structure_organisee WHERE id_ecole = ?",$ecole["id"]);
                                        if ($str_org[0]["nbr"] == 1) {
                                            $nbr_str_org++;
                                        }

                                        $str_aut = query("SELECT count(DISTINCT `id_ecole`) as nbr FROM structure_autorisee WHERE id_ecole = ?",$ecole["id"]);
                                        if ($str_aut[0]["nbr"] == 1) {
                                            $nbr_str_aut++;
                                        }
                                       
                                        
                                    }
                                    //echo $nbr_ecole; 
                                     //FORMULLE 
                                        // (7*100)/14
                                        $percent_efectif = ($nbr_ecole * 100)/$total_ecole;
                                       
                                        $percent_efectif = substr($percent_efectif, 0,4);

                                        //STRUCTURE ORGANISEE
                                        $percent_str_org = ($nbr_str_org * 100)/$total_ecole;
                                       
                                        $percent_str_org = substr($percent_str_org, 0,4);
                                        //echo $percent_str_org;

                                        //STRUCTURE AUTORISEE
                                        $percent_str_aut = ($nbr_str_aut * 100)/$total_ecole;
                                       
                                        $percent_str_aut = substr($percent_str_aut, 0,4);

                                        //PAROISSES
                                        $paroisse_dasboard = query("SELECT COUNT(*) AS nbr FROM paroisse2");
                                        $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2");

                                        $nbr_paroisse = ($paroisse_dasboard[0]["nbr"]*100)/25;
                                        $nbr_paroisse = substr($nbr_paroisse, 0,4);

                                        //ECOLE PAR RAPPORT A  672
                                        $nbr_ecole = ($ecole_dasboard[0]["nbr"]*100)/672;
                                        $nbr_ecole = substr($nbr_ecole, 0,4);

                                        //total application
                                        $etat_total = ($percent_efectif+$percent_str_org+$percent_str_aut)/3;
                                        $etat_total = substr($etat_total, 0,4);
                                        
                                    
                                    echo'<div class="dw-item">
                                        <div class="dwi-header">
                                            <div class="dwih-title">Etat de la paroisse '.$paroisse_nom[0]["nom_paroisse"].'</div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="text-center p-20 m-t-25">
                                            <div class="col-sm-12 easy-pie main-pie" data-percent="'.$etat_total.'">
                                                <div class="percent">'.$etat_total.'</div>
                                                <div class="pie-title">Vous avez déjà réaliser '.$etat_total.'% de remplissage des données</div>
                                            </div>
                                        </div>


                                        <div class="p-t-25 p-b-20 text-center">
                                            <div class="col-sm-3 easy-pie sub-pie-1" data-percent="'.$percent_efectif.'">
                                                <div class="percent">'.$percent_efectif.'</div>
                                                <div class="pie-title">Effectifs/age et sexe</div>
                                            </div>
                                             <div class="col-sm-3 easy-pie sub-pie-2" data-percent="'.$percent_str_org.'">
                                                <div class="percent">'.$percent_str_org.'</div>
                                                <div class="pie-title">Structures organisées</div>
                                            </div>

                                            <div class="col-sm-3 easy-pie sub-pie-2" data-percent="'.$percent_str_aut.'">
                                                <div class="percent">'.$percent_str_aut.'</div>
                                                <div class="pie-title">Structures autorisées</div>
                                            </div>

                                            

                                            

                                            <div class="col-sm-3 easy-pie sub-pie-2" data-percent="5">
                                                <div class="percent">5</div>
                                                <div class="pie-title">Autres</div>
                                            </div>
                                            
                                        </div>
                                    </div>';
                                    ?>

                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <!--###########################################################################################
                    ############################################################################################
                    ############################################################################################333########################################################################################3-->
                    <?php elseif(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "Analyste"): ?>

                        <?php  
                            
                            echo '<h1 class="text-center">Bienvenue dans l\'espace d\'analyse </h1>';
                        ?>
                            
                        <div class="mini-charts">
                        <div class="row">
                        <?php
                            $coord_sp_dasboard = query("SELECT COUNT(*) AS nbr FROM coordination_sp");
                            $paroisse_dasboard = query("SELECT COUNT(*) AS nbr FROM paroisse2");
                            $sous_division_dasboard = query("SELECT COUNT(*) AS nbr FROM sous_div");
                            $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2");
                            $personnel_dasboard = query("SELECT COUNT(*) AS nbr FROM personnel");














































                            //effectif scolaire

            

                            //totaux nombre ecole
                            $total_ecole_maternelle=0;
                            $total_ecole_primaire=0;
                            $total_ecole_secondaire=0;
                            $total_ecole=0;

                            //structure orgnanisee
                            $total_str_org1_mat = 0;
                            $total_str_org2_mat = 0;
                            $total_str_org3_mat = 0;

                            $total_str_org1_pri = 0;
                            $total_str_org2_pri = 0;
                            $total_str_org3_pri = 0;
                            $total_str_org4_pri = 0;
                            $total_str_org5_pri = 0;
                            $total_str_org6_pri = 0;

                            $total_str_org1_sec = 0;
                            $total_str_org2_sec = 0;
                            $total_str_org3_sec = 0;
                            $total_str_org4_sec = 0;
                            $total_str_org5_sec = 0;
                            $total_str_org6_sec = 0;

                            //totaux
                            $total_str_org_mat = 0;
                            $total_str_org_pri = 0;
                            $total_str_org_sec = 0;

                            $total_str_org = 0;

                            //totaux effectifs
                            $total_mat_eff_1_fille = 0;
                            $total_mat_eff_1_fg = 0;

                            $total_mat_eff_2_fille = 0;
                            $total_mat_eff_2_fg = 0;

                            $total_mat_eff_3_fille = 0;
                            $total_mat_eff_3_fg = 0;

                            /*$total_mat_eff_4_fille = 0;
                            $total_mat_eff_4_fg = 0;

                            $total_mat_eff_5_fille = 0;
                            $total_mat_eff_5_fg = 0;

                            $total_mat_eff_6_fille = 0;
                            $total_mat_eff_6_fg = 0;*/

                            $total_mat_eff_fille = 0;
                            $total_mat_eff_fg = 0;

                            $total_pri_eff_1_fille = 0;
                            $total_pri_eff_1_fg = 0;

                            $total_pri_eff_2_fille = 0;
                            $total_pri_eff_2_fg = 0;

                            $total_pri_eff_3_fille = 0;
                            $total_pri_eff_3_fg = 0;

                            $total_pri_eff_4_fille = 0;
                            $total_pri_eff_4_fg = 0;

                            $total_pri_eff_5_fille = 0;
                            $total_pri_eff_5_fg = 0;

                            $total_pri_eff_6_fille = 0;
                            $total_pri_eff_6_fg = 0;

                            $total_pri_eff_fille = 0;
                            $total_pri_eff_fg = 0;

                            $total_sec_eff_1_fille = 0;
                            $total_sec_eff_1_fg = 0;

                            $total_sec_eff_2_fille = 0;
                            $total_sec_eff_2_fg = 0;

                            $total_sec_eff_3_fille = 0;
                            $total_sec_eff_3_fg = 0;

                            $total_sec_eff_4_fille = 0;
                            $total_sec_eff_4_fg = 0;

                            $total_sec_eff_5_fille = 0;
                            $total_sec_eff_5_fg = 0;

                            $total_sec_eff_6_fille = 0;
                            $total_sec_eff_6_fg = 0;

                            $total_sec_eff_fille = 0;
                            $total_sec_eff_fg = 0;

                            $tot_eff_mat_fille = 0;
                            $tot_eff_mat_fg = 0;

                            $tot_eff_pri_fille = 0;
                            $tot_eff_pri_fg = 0;

                            $tot_eff_sec_fille = 0;
                            $tot_eff_sec_fg = 0;

                            //tot gen
                            $tot_gen_eff_fille_1 = 0;
                            $tot_gen_eff_fille_2 = 0;
                            $tot_gen_eff_fille_3 = 0;
                            $tot_gen_eff_fille_4 = 0;
                            $tot_gen_eff_fille_5 = 0;
                            $tot_gen_eff_fille_6 = 0;

                            $tot_gen_eff_fg_1 = 0;
                            $tot_gen_eff_fg_2 = 0;
                            $tot_gen_eff_fg_3 = 0;
                            $tot_gen_eff_fg_4 = 0;
                            $tot_gen_eff_fg_5 = 0;
                            $tot_gen_eff_fg_6 = 0;

                            $tot_gen_eff_fille = 0;
                            $tot_gen_eff_fg = 0;




                            

                            


                            



                            




                            

                            $tab_paroisse = query("SELECT * FROM diocese");
                            $num=1;
                            foreach ($tab_paroisse as $paroisse) {
                                $nbr_ecol_mat = 0;
                                $nbr_ecol_pri = 0;
                                $nbr_ecol_sec = 0;
                                $id_p = $paroisse["id"];
                                $nom_p = $paroisse["nom_diocese"];

                                //structure org et class
                                $nom_class1 = 0;
                                $nom_class2 = 0;
                                $nom_class3 = 0;

                                $nom_class_pri1 = 0;
                                $nom_class_pri2 = 0;
                                $nom_class_pri3 = 0;
                                $nom_class_pri4 = 0;
                                $nom_class_pri5 = 0;
                                $nom_class_pri6 = 0;

                                $nom_class_sec1 = 0;
                                $nom_class_sec2 = 0;
                                $nom_class_sec3 = 0;
                                $nom_class_sec4 = 0;
                                $nom_class_sec5 = 0;
                                $nom_class_sec6 = 0;
                                
                                //###################################
                            //EFFECTIFS DES ELEV mat
                            $som_mat_fille_1 = 0;
                            $som_mat_garcon_1 = 0;
                            $som_mat_fg_garcon_1 = 0;

                            $som_mat_fille_2 = 0;
                            $som_mat_garcon_2 = 0;
                            $som_mat_fg_garcon_2 = 0;

                            $som_mat_fille_3 = 0;
                            $som_mat_garcon_3 = 0;
                            $som_mat_fg_garcon_3 = 0;
                            //pri
                            $som_pri_fille_1 = 0;
                            $som_pri_garcon_1 = 0;
                            $som_pri_fg_garcon_1 = 0;

                            $som_pri_fille_2 = 0;
                            $som_pri_garcon_2 = 0;
                            $som_pri_fg_garcon_2 = 0;

                            $som_pri_fille_3 = 0;
                            $som_pri_garcon_3 = 0;
                            $som_pri_fg_garcon_3 = 0;

                            $som_pri_fille_4 = 0;
                            $som_pri_garcon_4 = 0;
                            $som_pri_fg_garcon_4 = 0;

                            $som_pri_fille_5 = 0;
                            $som_pri_garcon_5 = 0;
                            $som_pri_fg_garcon_5 = 0;

                            $som_pri_fille_6 = 0;
                            $som_pri_garcon_6 = 0;
                            $som_pri_fg_garcon_6 = 0;

                            //sec
                            $som_sec_fille_1 = 0;
                            $som_sec_garcon_1 = 0;
                            $som_sec_fg_garcon_1 = 0;

                            $som_sec_fille_2 = 0;
                            $som_sec_garcon_2 = 0;
                            $som_sec_fg_garcon_2 = 0;

                            $som_sec_fille_3 = 0;
                            $som_sec_garcon_3 = 0;
                            $som_sec_fg_garcon_3 = 0;

                            $som_sec_fille_4 = 0;
                            $som_sec_garcon_4 = 0;
                            $som_sec_fg_garcon_4 = 0;

                            $som_sec_fille_5 = 0;
                            $som_sec_garcon_5 = 0;
                            $som_sec_fg_garcon_5 = 0;
                            
                            $som_sec_fille_6 = 0;
                            $som_sec_garcon_6 = 0;
                            $som_sec_fg_garcon_6 = 0;

                            //totaux effectif
                            $total_eff_mat_fille = 0;
                            $total_eff_mat_fg = 0;

                            $total_eff_pri_fille = 0;
                            $total_eff_pri_fg = 0;

                            $total_eff_sec_fille = 0;
                            $total_eff_sec_fg = 0;

                            //primaire
                            //$som_p_fille_1 = 0;
                            //$som_p_garcon_1 = 0;

                                $tab_sous_div = query("SELECT * FROM sous_div ");
                                foreach ($tab_sous_div as $sd) {
                                    $id_sd = $sd["id"];
                                    $tab_ecole_mat = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd, "Maternelle");
                                    
                                    //echo "SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau = "."Maternelle<br>";
                                    $nbr_ecol_mat = $tab_ecole_mat[0]["nbr"] +$nbr_ecol_mat;
                                    $total_ecole_maternelle = $total_ecole_maternelle + $nbr_ecol_mat;
                                    $tab_ecole_pri = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd,"Primaire");

                                    $nbr_ecol_pri = $tab_ecole_pri[0]["nbr"]+$nbr_ecol_pri;
                                    $total_ecole_primaire = $total_ecole_primaire + $nbr_ecol_pri;
                                    $tab_ecole_sec = query("SELECT count(*) as nbr FROM ecole2 where belongs_to = ? and id_niveau =?", $id_sd,"Secondaire");

                                    $nbr_ecol_sec = $tab_ecole_sec[0]["nbr"]+$nbr_ecol_sec;
                                    $total_ecole_secondaire = $total_ecole_secondaire + $nbr_ecol_sec;

                                    

                                    /*echo "$total_ecole = $total_ecole_maternelle + $total_ecole_primaire + $total_ecole_secondaire <br>";*/

                                    //STRUCTURRE ORGANISEE MATERNELLE
                                     $tab_ecole = query("SELECT * FROM ecole2 where belongs_to = ? ", $id_sd);
                                     foreach ($tab_ecole as $tb_ec) {
                                        if($tb_ec["id_niveau"] == "Maternelle"){
                                        //########################################################
                                        //STRUCTURE ORG

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        

                                        $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                       

                                        $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                        if (count($tabstr_org1) == 1 && count($tabstr_org2) && count($tabstr_org3) ) {
                                            $nom_class1 = $nom_class1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class2 = $nom_class2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class3 = $nom_class3 + $tabstr_org3[0]["nbr_structure"];
                                        }

                                        //EFFECTIF DES ELEVS 
                                        $tab_ecole_mat = query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");

                                        $tab_ecole_mat2 = query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        $tab_ecole_mat3= query("SELECT * FROM `classe_maternelle` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");

                                            if(count($tab_ecole_mat) == 1 && count($tab_ecole_mat2) == 1 && count($tab_ecole_mat3) == 1){
                                               

                                                $somme_mat_fille_1 =  $tab_ecole_mat[0]["age_6ansF"]+$tab_ecole_mat[0]["age_6F"]+$tab_ecole_mat[0]["age_7a10ansF"];

                                                $somme_mat_garcon_1 = $tab_ecole_mat[0]["age_6ansG"]+$tab_ecole_mat[0]["age_6G"]+$tab_ecole_mat[0]["age_7a10ansG"];

                                                 $somme_mat_fille_2 = $tab_ecole_mat2[0]["age_6ansF"]+$tab_ecole_mat2[0]["age_6F"]+$tab_ecole_mat2[0]["age_7a10ansF"];

                                                $somme_mat_garcon_2 = $tab_ecole_mat2[0]["age_6ansG"]+$tab_ecole_mat2[0]["age_6G"]+$tab_ecole_mat2[0]["age_7a10ansG"];

                                                 $somme_mat_fille_3 =$tab_ecole_mat3[0]["age_6ansF"]+$tab_ecole_mat3[0]["age_6F"]+$tab_ecole_mat3[0]["age_7a10ansF"];

                                                $somme_mat_garcon_3 = $tab_ecole_mat3[0]["age_6ansG"]+$tab_ecole_mat3[0]["age_6G"]+$tab_ecole_mat3[0]["age_7a10ansG"];

                                                $som_mat_fille_1 =$som_mat_fille_1 +$somme_mat_fille_1;
                                                $som_mat_garcon_1 =$som_mat_garcon_1+$somme_mat_garcon_1;
                                                $som_mat_fille_2 =$som_mat_fille_2+$somme_mat_fille_2;
                                                $som_mat_garcon_2 =$som_mat_garcon_2+$somme_mat_garcon_2;
                                                $som_mat_fille_3 =$som_mat_fille_3+$somme_mat_fille_3;
                                                $som_mat_garcon_3 =$som_mat_garcon_3+$somme_mat_garcon_3;



                                                $som_mat_fg_garcon_1 = $som_mat_garcon_1+$som_mat_fille_1;
                                                $som_mat_fg_garcon_2 = $som_mat_garcon_2+$som_mat_fille_2;
                                                $som_mat_fg_garcon_3 = $som_mat_garcon_3+$som_mat_fille_3;

                                                //totaux effectifs
                                                $total_eff_mat_fille = $som_mat_fille_1 + $som_mat_fille_2+ $som_mat_fille_3;

                                                $total_eff_mat_fg = $som_mat_fg_garcon_1 + $som_mat_fg_garcon_2 + $som_mat_fg_garcon_3;
                                               
                                                //totaux effectif bas
                                                $total_mat_eff_1_fille = $total_mat_eff_1_fille + $somme_mat_fille_1;

                                                $total_mat_eff_1_fg =$total_mat_eff_1_fg + $somme_mat_fille_1 + $somme_mat_garcon_1;

                                                $total_mat_eff_2_fille = $total_mat_eff_2_fille + $somme_mat_fille_2;

                                                $total_mat_eff_2_fg =$total_mat_eff_2_fg + $somme_mat_fille_2 + $somme_mat_garcon_2;

                                                $total_mat_eff_3_fille = $total_mat_eff_3_fille + $somme_mat_fille_3;

                                                $total_mat_eff_3_fg =$total_mat_eff_3_fg + $somme_mat_fille_3 + $somme_mat_garcon_3;



                                                $tot_eff_mat_fille = $tot_eff_mat_fille + $somme_mat_fille_1 + $somme_mat_fille_2 + $somme_mat_fille_3;

                                                $tot_eff_mat_fg = $tot_eff_mat_fg + $somme_mat_garcon_1 + $somme_mat_garcon_2+ $somme_mat_garcon_3 + $somme_mat_fille_1 + $somme_mat_fille_2 + $somme_mat_fille_3;
                                                //echo "$total_mat_eff_1_fille<br>";



                                            }
                                            
                                        
                                        


        


                                          


                                    }
                                    elseif($tb_ec["id_niveau"] == "Primaire"){

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        
                                        //echo $tabstr_org1[0]["nbr_structure"]." <br>";
                                        //echo $nom_class1." <br>";
                                         $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                        

                                         $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                         $tabstr_org4 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");
                                       


                                         $tabstr_org5 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");
                                        

                                        $tabstr_org6 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        

                                        if(count($tabstr_org1)==1 && count($tabstr_org2)==1 && count($tabstr_org3)==1 && count($tabstr_org4)==1 && count($tabstr_org5)==1 && count($tabstr_org6)==1)
                                        {
                                            $nom_class_pri1 = $nom_class_pri1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class_pri2 = $nom_class_pri2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class_pri3 = $nom_class_pri3 + $tabstr_org3[0]["nbr_structure"];
                                            $nom_class_pri4 = $nom_class_pri4 + $tabstr_org4[0]["nbr_structure"];
                                            $nom_class_pri5 = $nom_class_pri5 + $tabstr_org5[0]["nbr_structure"];
                                            $nom_class_pri6 = $nom_class_pri6 + $tabstr_org6[0]["nbr_structure"];
                                        }

                                        //primaire
                                         $tab_ecole_pri = query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");

                                        $tab_ecole_pri2 = query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        $tab_ecole_pri3= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        
                                        $tab_ecole_pri4= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");

                                        $tab_ecole_pri5= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");

                                        $tab_ecole_pri6= query("SELECT * FROM `classe_primaire` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        if (count($tab_ecole_pri) == 1 && count($tab_ecole_pri2) == 1 && count($tab_ecole_pri3) == 1 && count($tab_ecole_pri4) == 1 && count($tab_ecole_pri5) == 1 && count($tab_ecole_pri6) == 1) {
                                            # code...
                                            $somme_pri_fille_1 =  $tab_ecole_pri[0]["age_6ansF"] + $tab_ecole_pri[0]["age_6F"] +$tab_ecole_pri[0]["age_7a10ansF"] + $tab_ecole_pri[0]["age_11ansF"]+$tab_ecole_pri[0]["age_plus11ansF"];

                                            $somme_pri_garcon_1 =$tab_ecole_pri[0]["age_6ansG"] + $tab_ecole_pri[0]["age_6G"] +$tab_ecole_pri[0]["age_7a10ansG"] + $tab_ecole_pri[0]["age_11ansG"]+$tab_ecole_pri[0]["age_plus11ansG"];

                                            $somme_pri_fille_2 =$tab_ecole_pri2[0]["age_6ansF"] + $tab_ecole_pri2[0]["age_6F"] +$tab_ecole_pri2[0]["age_7a10ansF"] + $tab_ecole_pri2[0]["age_11ansF"]+$tab_ecole_pri2[0]["age_plus11ansF"];

                                            $somme_pri_garcon_2 =$tab_ecole_pri2[0]["age_6ansG"] + $tab_ecole_pri2[0]["age_6G"] +$tab_ecole_pri2[0]["age_7a10ansG"] + $tab_ecole_pri2[0]["age_11ansG"]+$tab_ecole_pri2[0]["age_plus11ansG"];

                                            $somme_pri_fille_3 = $tab_ecole_pri3[0]["age_6ansF"] + $tab_ecole_pri3[0]["age_6F"] +$tab_ecole_pri3[0]["age_7a10ansF"] + $tab_ecole_pri3[0]["age_11ansF"]+$tab_ecole_pri3[0]["age_plus11ansF"];

                                            $somme_pri_garcon_3 =$tab_ecole_pri3[0]["age_6ansG"] + $tab_ecole_pri3[0]["age_6G"] +$tab_ecole_pri3[0]["age_7a10ansG"] + $tab_ecole_pri3[0]["age_11ansG"]+$tab_ecole_pri3[0]["age_plus11ansG"];

                                            $somme_pri_fille_4 =$tab_ecole_pri4[0]["age_6ansF"] + $tab_ecole_pri4[0]["age_6F"] +$tab_ecole_pri4[0]["age_7a10ansF"] + $tab_ecole_pri4[0]["age_11ansF"]+$tab_ecole_pri4[0]["age_plus11ansF"];

                                            $somme_pri_garcon_4 =$tab_ecole_pri4[0]["age_6ansG"] + $tab_ecole_pri4[0]["age_6G"] +$tab_ecole_pri4[0]["age_7a10ansG"] + $tab_ecole_pri4[0]["age_11ansG"]+$tab_ecole_pri4[0]["age_plus11ansG"];

                                            $somme_pri_fille_5 = $tab_ecole_pri5[0]["age_6ansF"] + $tab_ecole_pri5[0]["age_6F"] +$tab_ecole_pri5[0]["age_7a10ansF"] + $tab_ecole_pri5[0]["age_11ansF"]+$tab_ecole_pri5[0]["age_plus11ansF"];

                                            $somme_pri_garcon_5 =$tab_ecole_pri5[0]["age_6ansG"] + $tab_ecole_pri5[0]["age_6G"] +$tab_ecole_pri5[0]["age_7a10ansG"] + $tab_ecole_pri5[0]["age_11ansG"]+$tab_ecole_pri5[0]["age_plus11ansG"];

                                            $somme_pri_fille_6 =$tab_ecole_pri6[0]["age_6ansF"] + $tab_ecole_pri6[0]["age_6F"] +$tab_ecole_pri6[0]["age_7a10ansF"] + $tab_ecole_pri6[0]["age_11ansF"]+$tab_ecole_pri6[0]["age_plus11ansF"];

                                            $somme_pri_garcon_6 =$tab_ecole_pri6[0]["age_6ansG"] + $tab_ecole_pri6[0]["age_6G"] +$tab_ecole_pri6[0]["age_7a10ansG"] + $tab_ecole_pri6[0]["age_11ansG"]+$tab_ecole_pri6[0]["age_plus11ansG"];

                                            $som_pri_fille_1 = $som_pri_fille_1+$somme_pri_fille_1;
                                            $som_pri_garcon_1 = $som_pri_garcon_1+$somme_pri_garcon_1;

                                            $som_pri_fille_2 = $som_pri_fille_2+$somme_pri_fille_2;
                                            $som_pri_garcon_2 = $som_pri_garcon_2+$somme_pri_garcon_2;

                                            $som_pri_fille_3 = $som_pri_fille_3+$somme_pri_fille_3;
                                            $som_pri_garcon_3 = $som_pri_garcon_3+$somme_pri_garcon_3;

                                            $som_pri_fille_4 = $som_pri_fille_4+$somme_pri_fille_4;
                                            $som_pri_garcon_4 = $som_pri_garcon_4+$somme_pri_garcon_4;

                                            $som_pri_fille_5 = $som_pri_fille_5+$somme_pri_fille_5;
                                            $som_pri_garcon_5 = $som_pri_garcon_5+$somme_pri_garcon_5;

                                            $som_pri_fille_6 = $som_pri_fille_6+$somme_pri_fille_6;
                                            $som_pri_garcon_6 = $som_pri_garcon_6+$somme_pri_garcon_6;

                                            $som_pri_fg_garcon_1 = $som_pri_garcon_1+$som_pri_fille_1;
                                            $som_pri_fg_garcon_2 = $som_pri_garcon_2+$som_pri_fille_2;
                                            $som_pri_fg_garcon_3 = $som_pri_garcon_3+$som_pri_fille_3;
                                            $som_pri_fg_garcon_4 = $som_pri_garcon_4+$som_pri_fille_4;
                                            $som_pri_fg_garcon_5 = $som_pri_garcon_5+$som_pri_fille_5;
                                            $som_pri_fg_garcon_6 = $som_pri_garcon_6+$som_pri_fille_6;

                                            $total_eff_pri_fille = $som_pri_fille_1+$som_pri_fille_2+$som_pri_fille_3+$som_pri_fille_4+$som_pri_fille_5+$som_pri_fille_6;

                                            $total_eff_pri_fg = $som_pri_fg_garcon_1+$som_pri_fg_garcon_2+$som_pri_fg_garcon_3+$som_pri_fg_garcon_4+$som_pri_fg_garcon_5+$som_pri_fg_garcon_6; 

                                            //tautaux bas 
                                            $total_pri_eff_1_fille = $total_pri_eff_1_fille + $somme_pri_fille_1;

                                            $total_pri_eff_1_fg =$total_pri_eff_1_fg + $somme_pri_fille_1 + $somme_pri_garcon_1;

                                            $total_pri_eff_2_fille = $total_pri_eff_2_fille + $somme_pri_fille_2;

                                            $total_pri_eff_2_fg =$total_pri_eff_2_fg + $somme_pri_fille_2 + $somme_pri_garcon_2;

                                            $total_pri_eff_3_fille = $total_pri_eff_3_fille + $somme_pri_fille_3;

                                            $total_pri_eff_3_fg =$total_pri_eff_3_fg + $somme_pri_fille_3 + $somme_pri_garcon_3;

                                            $total_pri_eff_4_fille = $total_pri_eff_4_fille + $somme_pri_fille_4;

                                            $total_pri_eff_4_fg =$total_pri_eff_4_fg + $somme_pri_fille_4 + $somme_pri_garcon_4;

                                            $total_pri_eff_5_fille = $total_pri_eff_5_fille + $somme_pri_fille_5;

                                            $total_pri_eff_5_fg =$total_pri_eff_5_fg + $somme_pri_fille_5 + $somme_pri_garcon_5;

                                            $total_pri_eff_6_fille = $total_pri_eff_6_fille + $somme_pri_fille_6;

                                            $total_pri_eff_6_fg =$total_pri_eff_6_fg + $somme_pri_fille_6 + $somme_pri_garcon_6;

                                            //totaux droit
                                            $tot_eff_pri_fille = $tot_eff_pri_fille + $somme_pri_fille_1 + $somme_pri_fille_2 + $somme_pri_fille_3 + $somme_pri_fille_4 + $somme_pri_fille_5 + $somme_pri_fille_6;

                                            $tot_eff_pri_fg = $tot_eff_pri_fg + $somme_pri_garcon_1 + $somme_pri_garcon_2+ $somme_pri_garcon_3 + $somme_pri_garcon_4 + $somme_pri_garcon_5 + $somme_pri_garcon_6 + $somme_pri_fille_1 + $somme_pri_fille_2 + $somme_pri_fille_3 + $somme_pri_fille_4 + $somme_pri_fille_5 + $somme_pri_fille_6;


                                        } 
                                        

                                    }
                                    elseif($tb_ec["id_niveau"] == "Secondaire"){

                                        $tabstr_org1 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
                                        
                                        //echo $tabstr_org1[0]["nbr_structure"]." <br>";
                                        //echo $nom_class1." <br>";
                                         $tabstr_org2 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");
                                        

                                         $tabstr_org3 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"3");
                                        

                                         $tabstr_org4 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"4");
                                        


                                         $tabstr_org5 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"5");
                                        

                                        $tabstr_org6 = query("SELECT * FROM structure_organisee WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"6");
                                        

                                        if (count($tabstr_org1) && count($tabstr_org2 ) && count($tabstr_org3) && count($tabstr_org4) && count($tabstr_org5) && count($tabstr_org6)) {
                                            $nom_class_sec1 = $nom_class_sec1 + $tabstr_org1[0]["nbr_structure"];
                                            $nom_class_sec2 = $nom_class_sec2 + $tabstr_org2[0]["nbr_structure"];
                                            $nom_class_sec3 = $nom_class_sec3 + $tabstr_org3[0]["nbr_structure"];
                                            $nom_class_sec4 = $nom_class_sec4 + $tabstr_org4[0]["nbr_structure"];
                                            $nom_class_sec5 = $nom_class_sec5 + $tabstr_org5[0]["nbr_structure"];
                                            $nom_class_sec6 = $nom_class_sec6 + $tabstr_org6[0]["nbr_structure"];
                                        }

                                        //SECONDAIRE
                                        $tab_ecole_sec = query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"1");
    //echo "SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ".$tb_ec["id"]." and nom_class = '1' ";

                                        $tab_ecole_sec2 = query("SELECT * FROM `classe_secondaire_co` WHERE id_ecole = ? and nom_class = ? ",$tb_ec["id"],"2");

                                        //recursivite des section
                                        $liste_section = query("SELECT DISTINCT `option` FROM `classe_secondaire_cl` WHERE `id_ecole` =  ? ",$tb_ec["id"]);

                                        //echo "SELECT DISTINCT `option` FROM `classe_secondaire_cl` WHERE `id_ecole` = ".$tb_ec["id"]."<br>";

                                       

                                        if ((count($tab_ecole_sec) == 1 && count($tab_ecole_sec2) == 1 )) {

                                            
                                            $somme_sec_fille_1 =$tab_ecole_sec[0]["effectif_F"];
                                            $somme_sec_garcon_1=$tab_ecole_sec[0]["effectif_G"];

                                            $somme_sec_fille_2 =$tab_ecole_sec2[0]["effectif_F"];
                                            $somme_sec_garcon_2=$tab_ecole_sec2[0]["effectif_G"];

                                            $som_sec_fille_1 =$som_sec_fille_1 + $somme_sec_fille_1;
                                            $som_sec_garcon_1=$som_sec_garcon_1 +$somme_sec_garcon_1;

                                            $som_sec_fille_2 =$som_sec_fille_2+ $somme_sec_fille_2;
                                            $som_sec_garcon_2=$som_sec_garcon_2+$somme_sec_garcon_2;

                                            //$somme_sec_fille_1 = 

                                            //fonction recursive des sections

                                            $som_sec_fg_garcon_1 = $som_sec_garcon_1+$som_sec_fille_1;
                                            $som_sec_fg_garcon_2 = $som_sec_garcon_2+$som_sec_fille_2;

                                            //totaux 
                                            $total_sec_eff_1_fille = $total_sec_eff_1_fille + $somme_sec_fille_1;
                                            $total_sec_eff_1_fg = $total_sec_eff_1_fg + $somme_sec_fille_1 + $somme_sec_garcon_1;

                                            $total_sec_eff_2_fille = $total_sec_eff_2_fille + $somme_sec_fille_2;
                                            $total_sec_eff_2_fg = $total_sec_eff_2_fg + $somme_sec_fille_2 + $somme_sec_garcon_2;

                                            //echo "$total_sec_eff_fille<br>";

                                            //totaux droit
                                            $total_sec_eff_fille =$total_sec_eff_fille+ $somme_sec_fille_1 + $somme_sec_fille_2;
                                             $total_sec_eff_fg =$total_sec_eff_fg+ $somme_sec_fille_1 + $somme_sec_fille_2 + $somme_sec_garcon_1 + $somme_sec_garcon_2;
                                            

                                        } 
                                        if (count($liste_section) > 0) {
                                    foreach ($liste_section as $option) {
                                       /* $tab_cl_3 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and nom_class = ?",$tb_ec["id"], "3");*/

                                        $tab_cl_3 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "3" , $option["option"]);
                                        $tab_cl_4 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "4" , $option["option"]);
                                        $tab_cl_5 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ? )",$tb_ec["id"], "5" , $option["option"]);
                                        $tab_cl_6 = query("SELECT * FROM classe_secondaire_cl WHERE id_ecole = ? and (nom_class = ? and option = ?) ",$tb_ec["id"], "6" , $option["option"]);

                                        
                                        


                                        if(count($tab_cl_3) == 1 && count($tab_cl_4) == 1 && count($tab_cl_5) == 1 && count($tab_cl_6) == 1)
                                        {
                                       
                                            $somme_sec_fille_3 =  $tab_cl_3[0]["effectif_F"];
                                            $somme_sec_garcon_3 =   $tab_cl_3[0]["effectif_G"];

                                            $somme_sec_fille_4 =  $tab_cl_4[0]["effectif_F"];
                                            $somme_sec_garcon_4 =   $tab_cl_4[0]["effectif_G"];

                                            $somme_sec_fille_5 =  $tab_cl_5[0]["effectif_F"];
                                            $somme_sec_garcon_5 =   $tab_cl_5[0]["effectif_G"];

                                            $somme_sec_fille_6 =  $tab_cl_6[0]["effectif_F"];
                                            $somme_sec_garcon_6 =   $tab_cl_6[0]["effectif_G"];

                                            $som_sec_fille_3 =$som_sec_fille_3 +$somme_sec_fille_3 ; 
                                            $som_sec_garcon_3 =$som_sec_garcon_3 +$somme_sec_garcon_3; 
                                            $som_sec_fille_4 = $som_sec_fille_4 + $somme_sec_fille_4 ; 
                                            $som_sec_garcon_4 = $som_sec_garcon_4 +$somme_sec_garcon_4;
                                            $som_sec_fille_5 = $som_sec_fille_5 + $somme_sec_fille_5 ; 
                                            $som_sec_garcon_5 = $som_sec_garcon_5 +$somme_sec_garcon_5;
                                            $som_sec_fille_6 = $som_sec_fille_6 + $somme_sec_fille_6 ;
                                            $som_sec_garcon_6 = $som_sec_garcon_6 +$somme_sec_garcon_6;

                                            $som_sec_fg_garcon_3 = $som_sec_garcon_3+$som_sec_fille_3;
                                            $som_sec_fg_garcon_4 = $som_sec_garcon_4+$som_sec_fille_4;
                                            $som_sec_fg_garcon_5 = $som_sec_garcon_5+$som_sec_fille_5;
                                            $som_sec_fg_garcon_6 = $som_sec_garcon_6+$som_sec_fille_6;

                                            //totaux 
                                            $total_sec_eff_3_fille = $total_sec_eff_3_fille + $somme_sec_fille_3;
                                            $total_sec_eff_3_fg = $total_sec_eff_3_fg + $somme_sec_fille_3 + $somme_sec_garcon_3;

                                            $total_sec_eff_4_fille = $total_sec_eff_4_fille + $somme_sec_fille_4;
                                            $total_sec_eff_4_fg = $total_sec_eff_4_fg + $somme_sec_fille_4 + $somme_sec_garcon_4;

                                            $total_sec_eff_5_fille = $total_sec_eff_5_fille + $somme_sec_fille_5;
                                            $total_sec_eff_5_fg = $total_sec_eff_5_fg + $somme_sec_fille_5 + $somme_sec_garcon_5;

                                            $total_sec_eff_6_fille = $total_sec_eff_6_fille + $somme_sec_fille_6;
                                            $total_sec_eff_6_fg = $total_sec_eff_6_fg + $somme_sec_fille_6 + $somme_sec_garcon_6; 

                                            $total_sec_eff_fille = $total_sec_eff_fille+ $somme_sec_fille_3 + $somme_sec_fille_4 + $somme_sec_fille_5 + $somme_sec_fille_6;

                                             $total_sec_eff_fg = $total_sec_eff_fg+ $somme_sec_fille_3 + $somme_sec_fille_4 + $somme_sec_fille_5 + $somme_sec_fille_6 + $somme_sec_garcon_3 + $somme_sec_garcon_4 + $somme_sec_garcon_5 + $somme_sec_garcon_6 ;




                                           
                                        }


                                        
                                    } 
                                   
                                    

                                }
                                //
                                //$total_sec_eff_1_fille = $total_sec_eff_1_fille;
                                
                                        
                                
                                    }

                                     }


                                }
                                //totaux de structure mat
                                $total_str_org1_mat = $total_str_org1_mat + $nom_class1;
                                $total_str_org2_mat = $total_str_org2_mat + $nom_class2;
                                $total_str_org3_mat = $total_str_org3_mat + $nom_class3;

                                $total_str_org1_pri = $total_str_org1_pri + $nom_class_pri1;
                                $total_str_org2_pri = $total_str_org2_pri + $nom_class_pri2;
                                $total_str_org3_pri = $total_str_org3_pri + $nom_class_pri3;
                                $total_str_org4_pri = $total_str_org4_pri + $nom_class_pri4;
                                $total_str_org5_pri = $total_str_org5_pri + $nom_class_pri5;
                                $total_str_org6_pri = $total_str_org6_pri + $nom_class_pri6;

                                $total_str_org1_sec = $total_str_org1_sec + $nom_class_sec1;
                                $total_str_org2_sec = $total_str_org2_sec + $nom_class_sec2;
                                $total_str_org3_sec = $total_str_org3_sec + $nom_class_sec3;
                                $total_str_org4_sec = $total_str_org4_sec + $nom_class_sec4;
                                $total_str_org5_sec = $total_str_org5_sec + $nom_class_sec5;
                                $total_str_org6_sec = $total_str_org6_sec + $nom_class_sec6;

                                //totaux gen
                                $total_str_org1 = $total_str_org1_mat+$total_str_org1_pri+$total_str_org1_sec;
                                $total_str_org2 = $total_str_org2_mat+$total_str_org2_pri+$total_str_org2_sec;
                                $total_str_org3 = $total_str_org3_mat+$total_str_org3_pri+$total_str_org3_sec;
                                $total_str_org4 = $total_str_org4_pri+$total_str_org4_sec;
                                $total_str_org5 = $total_str_org5_pri+$total_str_org5_sec;
                                $total_str_org6 = $total_str_org6_pri+$total_str_org6_sec;

                                //totaux droits

                                $total_eff_sec_fille = $som_sec_fille_1+$som_sec_fille_2+$som_sec_fille_3+$som_sec_fille_4+$som_sec_fille_5+$som_sec_fille_6;

                                $total_eff_sec_fg = $som_sec_fg_garcon_1+$som_sec_fg_garcon_2+$som_sec_fg_garcon_3+$som_sec_fg_garcon_4+$som_sec_fg_garcon_5+$som_sec_fg_garcon_6;

                                //total genrale effectif

                                $total_ecole = $nbr_ecol_mat + $nbr_ecol_pri + $nbr_ecol_sec;

                             

                               

                                
                                       
                               
                                    if ($nbr_ecol_mat == 0) {
                                       

                                        $nom_class_pri = $nom_class_pri1+$nom_class_pri2+$nom_class_pri3+$nom_class_pri4+$nom_class_pri5+$nom_class_pri6;
                                        
                                        
                                       
                                       

                                        $nom_class_sec = $nom_class_sec1+$nom_class_sec2+$nom_class_sec3+$nom_class_sec4+$nom_class_sec5+$nom_class_sec6;
                                        
                                    }
                                    else{

                                        $nom_class123 = $nom_class1 + $nom_class2 +$nom_class3; 
                                       

                                        $nom_class_pri = $nom_class_pri1+$nom_class_pri2+$nom_class_pri3+$nom_class_pri4+$nom_class_pri5+$nom_class_pri6;
                                       

                                        $nom_class_sec = $nom_class_sec1+$nom_class_sec2+$nom_class_sec3+$nom_class_sec4+$nom_class_sec5+$nom_class_sec6;
                                        
                                    }
                                    
                                }

                                //##################################################################
                                $total_str_org_mat = $total_str_org_mat + $total_str_org1_mat +$total_str_org2_mat + $total_str_org3_mat;

                                $total_str_org_pri = $total_str_org_pri + $total_str_org1_pri +$total_str_org2_pri + $total_str_org3_pri + $total_str_org4_pri+ $total_str_org5_pri+ $total_str_org6_pri;

                                $total_str_org_sec = $total_str_org_sec + $total_str_org1_sec +$total_str_org2_sec + $total_str_org3_sec + $total_str_org4_sec+ $total_str_org5_sec+ $total_str_org6_sec;

                                $total_str_org = $total_str_org_mat + $total_str_org_pri + $total_str_org_sec;

                                  //totaux effectif

                                $tot_gen_eff_fille_1 = $total_mat_eff_1_fille +$total_pri_eff_1_fille + $total_sec_eff_1_fille;
                                $tot_gen_eff_fg_1 = $total_mat_eff_1_fg+$total_pri_eff_1_fg+$total_sec_eff_1_fg;

                                 $tot_gen_eff_fille_2 = $total_mat_eff_2_fille +$total_pri_eff_2_fille + $total_sec_eff_2_fille;
                                $tot_gen_eff_fg_2 = $total_mat_eff_2_fg+$total_pri_eff_2_fg+$total_sec_eff_2_fg;

                                 $tot_gen_eff_fille_3 = $total_mat_eff_3_fille +$total_pri_eff_3_fille + $total_sec_eff_3_fille;
                                $tot_gen_eff_fg_3 = $total_mat_eff_3_fg+$total_pri_eff_3_fg+$total_sec_eff_3_fg;

                                 $tot_gen_eff_fille_4 = $total_pri_eff_4_fille + $total_sec_eff_4_fille;
                                $tot_gen_eff_fg_4 = $total_pri_eff_4_fg+$total_sec_eff_4_fg;

                                 $tot_gen_eff_fille_5 = $total_pri_eff_5_fille + $total_sec_eff_5_fille;
                                $tot_gen_eff_fg_5 = $total_pri_eff_5_fg+$total_sec_eff_5_fg;

                                 $tot_gen_eff_fille_6 = $total_pri_eff_6_fille + $total_sec_eff_6_fille;
                                $tot_gen_eff_fg_6 = $total_pri_eff_6_fg+$total_sec_eff_6_fg;

                                $tot_gen_eff_fille = $tot_eff_mat_fille+$tot_eff_pri_fille+$total_sec_eff_fille;
                                $tot_gen_eff_fg = $tot_eff_mat_fg+$tot_eff_pri_fg+$total_sec_eff_fg;





                           /* echo "<tr class='tr'>";
                                echo "<td colspan='2'> TOTAL GENERAL</td>";
                               
                                 echo "<td > $total_ecole </td>";
                                  echo "<td  style='background:cadetblue'></td>";
                                 echo "<td>$total_str_org1</td>";
                                 echo "<td>$total_str_org2</td>";
                                 echo "<td>$total_str_org3</td>";
                                 echo "<td>$total_str_org4</td>";
                                 echo "<td>$total_str_org5</td>";
                                 echo "<td>$total_str_org6</td>";
                                 echo "<td>$total_str_org</td>";

                                 //les totaux

                                 echo "<td>$tot_gen_eff_fille_1</td>";
                                 echo "<td>$tot_gen_eff_fg_1</td>";

                                 echo "<td>$tot_gen_eff_fille_2</td>";
                                 echo "<td>$tot_gen_eff_fg_2</td>";

                                 echo "<td>$tot_gen_eff_fille_3</td>";
                                 echo "<td>$tot_gen_eff_fg_3</td>";

                                 echo "<td>$tot_gen_eff_fille_4</td>";
                                 echo "<td>$tot_gen_eff_fg_4</td>";

                                 echo "<td>$tot_gen_eff_fille_5</td>";
                                 echo "<td>$tot_gen_eff_fg_5</td>";

                                 echo "<td>$tot_gen_eff_fille_6</td>";
                                 echo "<td>$tot_gen_eff_fg_6</td>";

                                  echo "<td>$tot_gen_eff_fille</td>";
                                  echo "<td>$tot_gen_eff_fg</td>";
*/


                                /*for ($i=0; $i < 12 ; $i++) { 
                                    echo "<td> -- </td>";
                                }*/

                                //echo "</tr>";


                           
                        
                                
                            
                            
            

                            //fin effectif scolaire













































                        
                           echo '<div class="col-sm-3">
                                                            <div class="mini-charts-item bgm-cyan">
                                                                <div class="clearfix1">
                                                                    
                                                                    <div class="count">
                                                                        <small>Cooridations sous provinciales</small>
                                                                        <h2>'.$coord_sp_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-3">
                                                            <div class="mini-charts-item bgm-lightgreen">
                                                                <div class="clearfix">
                                                                    <!-- <div class="chart stats-bar-2"></div> -->
                                                                    <div class="count">
                                                                        <small>Paroisses</small>
                                                                        <h2>'.$paroisse_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-3">
                                                            <div class="mini-charts-item bgm-blue">
                                                                <div class="clearfix">
                                                                   <!--  <div class="chart stats-line"></div> -->
                                                                    <div class="count">
                                                                        <small>Sous divisions</small>
                                                                        <h2>'.$sous_division_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-3">
                                                            <div class="mini-charts-item bgm-bluegray">
                                                                <div class="clearfix">
                                                                    <!-- <div class="chart stats-line-2"></div> -->
                                                                    <div class="count">
                                                                        <small>Ecoles</small>
                                                                        <h2>'.$ecole_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-6">
                                                            <div class="mini-charts-item bgm-pink">
                                                                <div class="clearfix">
                                                                     <div class="chart stats-bar"></div> 
                                                                    <div class="count">
                                                                        <small>Nombre total d\'élèves</small>
                                                                        <h2>'.$tot_gen_eff_fg.'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <div class="col-sm-6">
                                                            <div class="mini-charts-item bgm-purple">
                                                                <div class="clearfix">
                                                                     <div class="chart stats-bar-2"></div> 
                                                                    <div class="count">
                                                                        <small>Nombre total du personnel</small>
                                                                        <h2>'.$personnel_dasboard[0]["nbr"].'</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                        ?>

                            
                        </div>
                    </div>



                    


                    <div class="dash-widgets">
                        <div class="row">
                            

                            <div class="col-md-12 col-sm-12">
                                <div id="pie-charts" class="dw-item bgm-teal c-white">

                                    <?php

                                    $nbr_ecole = 0;
                                    $nbr_str_org = 0;
                                    $nbr_str_aut = 0;

                                    //nombre des ecoles aux quelles on a deja associe un effectif
                                    //nombre des ecoles aux quelles on pas encore associe un effectif

                                    //$effectif_age_sex = query();
                                    //nombre des ecoles
                                    $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2");
                                    $total_ecole = $ecole_dasboard[0]["nbr"];

                                    $ecole_total = query("SELECT * FROM ecole2");
                                    foreach ($ecole_total as $ecole) {
                                        //maternelle
                                        $mat = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_maternelle WHERE id_ecole = ?",$ecole["id"]);
                                        if($mat[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                        }

                                        //primaire
                                        $pri = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_primaire WHERE id_ecole = ?",$ecole["id"]);
                                        if($pri[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                        }
                                        
                                        //secondaire
                                        $sec = query("SELECT count(DISTINCT `id_ecole`) as nbr from classe_secondaire_cl WHERE id_ecole = ?",$ecole["id"]);
                                        if($sec[0]["nbr"] == 1)
                                        {
                                            $nbr_ecole++;
                                        }

                                        $str_org = query("SELECT count(DISTINCT `id_ecole`) as nbr FROM structure_organisee WHERE id_ecole = ?",$ecole["id"]);
                                        if ($str_org[0]["nbr"] == 1) {
                                            $nbr_str_org++;
                                        }

                                        $str_aut = query("SELECT count(DISTINCT `id_ecole`) as nbr FROM structure_autorisee WHERE id_ecole = ?",$ecole["id"]);
                                        if ($str_aut[0]["nbr"] == 1) {
                                            $nbr_str_aut++;
                                        }
                                       
                                        
                                    }
                                    //echo $nbr_ecole; 
                                     //FORMULLE 
                                        // (7*100)/14
                                        $percent_efectif = ($nbr_ecole * 100)/$total_ecole;
                                       
                                        $percent_efectif = substr($percent_efectif, 0,4);

                                        //STRUCTURE ORGANISEE
                                        $percent_str_org = ($nbr_str_org * 100)/$total_ecole;
                                       
                                        $percent_str_org = substr($percent_str_org, 0,4);
                                        //echo $percent_str_org;

                                        //STRUCTURE AUTORISEE
                                        $percent_str_aut = ($nbr_str_aut * 100)/$total_ecole;
                                       
                                        $percent_str_aut = substr($percent_str_aut, 0,4);

                                        //PAROISSES
                                        $paroisse_dasboard = query("SELECT COUNT(*) AS nbr FROM paroisse2");
                                        $ecole_dasboard = query("SELECT COUNT(*) AS nbr FROM ecole2");

                                        $nbr_paroisse = ($paroisse_dasboard[0]["nbr"]*100)/25;
                                        $nbr_paroisse = substr($nbr_paroisse, 0,4);

                                        //ECOLE PAR RAPPORT A  672
                                        $nbr_ecole = ($ecole_dasboard[0]["nbr"]*100)/672;
                                        $nbr_ecole = substr($nbr_ecole, 0,4);

                                        //total application
                                        $etat_total = ($percent_efectif+$percent_str_org+$percent_str_aut+$nbr_paroisse+$nbr_ecole)/5;
                                        $etat_total = substr($etat_total, 0,4);
                                        
                                    
                                    echo'<div class="dw-item">
                                        <div class="dwi-header">
                                            <div class="dwih-title">Etat de l\'application</div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="text-center p-20 m-t-25">
                                            <div class="col-sm-12 easy-pie main-pie" data-percent="'.$etat_total.'">
                                                <div class="percent">'.$etat_total.'</div>
                                                <div class="pie-title">Rien que '.$etat_total.'% de données a  déjà été réaliser  </div>
                                            </div>
                                        </div>


                                        <div class="p-t-25 p-b-20 text-center">
                                            <div class="col-sm-2 easy-pie sub-pie-1" data-percent="'.$percent_efectif.'">
                                                <div class="percent">'.$percent_efectif.'</div>
                                                <div class="pie-title">Effectifs/age et sexe</div>
                                            </div>
                                             <div class="col-sm-2 easy-pie sub-pie-2" data-percent="'.$percent_str_org.'">
                                                <div class="percent">'.$percent_str_org.'</div>
                                                <div class="pie-title">Structures organisées</div>
                                            </div>

                                            <div class="col-sm-2 easy-pie sub-pie-2" data-percent="'.$percent_str_aut.'">
                                                <div class="percent">'.$percent_str_aut.'</div>
                                                <div class="pie-title">Structures autorisées</div>
                                            </div>

                                            <div class="col-sm-2 easy-pie sub-pie-2" data-percent="'.$nbr_paroisse.'">
                                                <div class="percent">'.$nbr_paroisse.'</div>
                                                <div class="pie-title">Paroisses</div>
                                            </div>

                                            <div class="col-sm-2 easy-pie sub-pie-2" data-percent="'.$nbr_ecole.'">
                                                <div class="percent">'.$nbr_ecole.'</div>
                                                <div class="pie-title">Ecoles</div>
                                            </div>

                                            <div class="col-sm-2 easy-pie sub-pie-2" data-percent="5">
                                                <div class="percent">5</div>
                                                <div class="pie-title">Autres</div>
                                            </div>
                                            
                                        </div>
                                    </div>';
                                    ?>

                                </div>
                            </div>

                            
                        </div>
                    </div>
                        
                         
                         <?php endif; ?>
                        <?php else: ?>
                        <!--b style="color:red" > echec: votre session n existe pas </b><br-->
                            
                            <h1 class="text-center">DESOLEE, VOUS N'AVEZ PAS LE DROIT D'ACCEDER A CETTE PAGE</h1>
                            <h2 class="text-danger text-center"><a href="index.php"><span class="text-danger">VEILLER VOUS CONNECTER</span></a> </h2>
                            
                    <?php endif; ?>
                    </div>
                        
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

        /*<?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "Analyste"): ?>
                
                            
                        
                         <?php else: ?>
                        
                    <?php endif; ?>*/