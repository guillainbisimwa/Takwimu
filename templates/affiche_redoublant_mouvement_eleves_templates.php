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
                            <li><a  href="effectif_age_sex.php">Effectifs (Age/Sexe)</a></li>
                            <li><a  href="structure_org.php">Structures organisées</a></li>
                            <li><a  href="structure_aut.php">Structures autorisées</a></li>
                            <li><a  href="age_des_eleves.php">Age des élèves</a></li>
                            <li><a  href="redoublant_par_sex.php">Redoublants par sexe</a></li>
                            <li><a  href="mouvement_eleves.php">Mouvement des élèves </a></li>
                        </ul>
                    </li><?php endif; ?>
<?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin"|| $_SESSION['current_session'] == "Analyste"): ?>
                     <li class="active sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-format-list-bulleted
"></i>Affichage des résultats</a>

                        <ul>
                            <li><a href="affiche_releve_stat_eff.php">Relevé statistiques des structures et effectifs scolaires </a></li>
                            <li><a  href="affiche_synthese_de_la_rep.php">Synthèse de la répartition des élèves du secondaire par option</a></li>
                            <li><a class="" href="affiche_mouvement_eleves.php">Affiche mouvement des élèves </a></li>
                            <li><a class="" href="affiche_age_eleves.php">Affiche ages des élèves</a></li>
                            <li><a class="active" href="affiche_redoublant_mouvement_eleves.php">Affiche des rédoublants</a></li>


                            
                        </ul>
                    </li>
                    
                     <li class=" sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-account"></i>Gestion du personnel</a>

                        <ul><?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin" || $_SESSION['current_session'] == "Conseiller d'enseignement" ): ?>
                            <li><a class="" href="gestion_personnel.php">Enregistrer et afficher le personnel </a></li><?php endif; ?>
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
                       
                       

                    </div>

                    <div class="card">
                    
                    <?php if(isset($_SESSION['current_session'])): ?>
                        <div id="todo1" class="card">
                            <div class="card-header bgm-bluegray ch-alt m-b-20">
                                <h2 class="no-print text-uppercase">Affiche mouvement des élèves</h2>
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
                                        
                                       
                                    </ul>
                            </div>

                            <div class="card-body ">
                                <!-- <div class="t-add">
                                    <i class="bgm-red ta-btn zmdi zmdi-edit" data-ma-action="todo-form-open"></i>

                                    <div class="ta-block p-20">
                                        Modification ,,...
                                        <div class="tab-actions">
                                            <a data-ma-action="todo-form-close" href="#" class="c-red"><i class="zmdi zmdi-close"></i></a>
                                            <a data-ma-action="todo-form-close" href="#" class="c-green"><i class="zmdi zmdi-check"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="list-group">
                                    <div class="list-group-item media">
                                    
                                     <div class="col-sm-12 tableau_scroll tableau_tri_diocese">

                                        

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
                                    
            

                        <span class='titre_print text-uppercase'>RELEVE STATISTIQUES DES EFFECTIFS SCOLAIRES REDOUBLANTS</span><br>

                       <table id="ecolepri_form_table" style="margin: 0 auto" class="naledi_yellow table-hover col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> N°</th>
                                <th rowspan="2"> PAROISSE</th>
                                <th rowspan="2"> NIVEAU</th>
                                <th colspan="3">1 ère</th>
                                <th colspan="3">2 ème</th>
                                <th colspan="3">3 ème</th>
                                <th colspan="3">4 ème</th>
                                <th colspan="3">5 ème</th>
                                <th colspan="3">6 ème</th>
                                <th colspan="3">TOT</th>
                                
                                              
                            </tr>
                             <tr class="warning"> 
                                
                                
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                            </tr>
                            <tbody class="naledi_yellow">
                         <?php 
                         $id_pp = 0;
        $tabl_paroisse = query("SELECT * FROM sous_div");

        $RED_mat_f_tot=0;
        $REDOUBLANTS_mat_f_tot=0;
        $PROMUS_mat_f_tot=0;
        $TRANSF_mat_f_tot=0;
        $ABANDONS_mat_f_tot=0;
        $CERTIF_DIPL_mat_f_tot=0;

        $RED_pri_f_tot=0;
        $REDOUBLANTS_pri_f_tot=0;
        $PROMUS_pri_f_tot=0;
        $TRANSF_pri_f_tot=0;
        $ABANDONS_pri_f_tot=0;
        $CERTIF_DIPL_pri_f_tot=0;

        $RED_sec_f_tot=0;
        $REDOUBLANTS_sec_f_tot=0;
        $PROMUS_sec_f_tot=0;
        $TRANSF_sec_f_tot=0;
        $ABANDONS_sec_f_tot=0;
        $CERTIF_DIPL_sec_f_tot=0;

        $RED_mat_g_tot=0;
        $REDOUBLANTS_mat_g_tot=0;
        $PROMUS_mat_g_tot=0;
        $TRANSF_mat_g_tot=0;
        $ABANDONS_mat_g_tot=0;
        $CERTIF_DIPL_mat_g_tot=0;

        $RED_pri_g_tot=0;
        $REDOUBLANTS_pri_g_tot=0;
        $PROMUS_pri_g_tot=0;
        $TRANSF_pri_g_tot=0;
        $ABANDONS_pri_g_tot=0;
        $CERTIF_DIPL_pri_g_tot=0;

        $RED_sec_g_tot=0;
        $REDOUBLANTS_sec_g_tot=0;
        $PROMUS_sec_g_tot=0;
        $TRANSF_sec_g_tot=0;
        $ABANDONS_sec_g_tot=0;
        $CERTIF_DIPL_sec_g_tot=0;
        foreach ($tabl_paroisse as $paroisse_) {
            
        
        $id_last_insert = query("SELECT * FROM ecole2 WHERE belongs_to = ?",$paroisse_["id"]);

        $RED_mat_f=0;
        $REDOUBLANTS_mat_f=0;
        $PROMUS_mat_f=0;
        $TRANSF_mat_f=0;
        $ABANDONS_mat_f=0;
        $CERTIF_DIPL_mat_f=0;

        $RED_pri_f=0;
        $REDOUBLANTS_pri_f=0;
        $PROMUS_pri_f=0;
        $TRANSF_pri_f=0;
        $ABANDONS_pri_f=0;
        $CERTIF_DIPL_pri_f=0;

        $RED_sec_f=0;
        $REDOUBLANTS_sec_f=0;
        $PROMUS_sec_f=0;
        $TRANSF_sec_f=0;
        $ABANDONS_sec_f=0;
        $CERTIF_DIPL_sec_f=0;

        $RED_mat_g=0;
        $REDOUBLANTS_mat_g=0;
        $PROMUS_mat_g=0;
        $TRANSF_mat_g=0;
        $ABANDONS_mat_g=0;
        $CERTIF_DIPL_mat_g=0;

        $RED_pri_g=0;
        $REDOUBLANTS_pri_g=0;
        $PROMUS_pri_g=0;
        $TRANSF_pri_g=0;
        $ABANDONS_pri_g=0;
        $CERTIF_DIPL_pri_g=0;

        $RED_sec_g=0;
        $REDOUBLANTS_sec_g=0;
        $PROMUS_sec_g=0;
        $TRANSF_sec_g=0;
        $ABANDONS_sec_g=0;
        $CERTIF_DIPL_sec_g=0;

        foreach ($id_last_insert as $ecole_) {

            $tbl_red_mat_1_f=  query("SELECT sum(`effectif_F`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "1");
            $tbl_red_mat_1_g=  query("SELECT sum(`effectif_G`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "1");

            $tbl_red_mat_2_f=  query("SELECT sum(`effectif_F`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "2");
            $tbl_red_mat_2_g=  query("SELECT sum(`effectif_G`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "2");

            $tbl_red_mat_3_f=  query("SELECT sum(`effectif_F`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "3");
            $tbl_red_mat_3_g=  query("SELECT sum(`effectif_G`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "3");

            $tbl_red_mat_4_f=  query("SELECT sum(`effectif_F`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "4");
            $tbl_red_mat_4_g=  query("SELECT sum(`effectif_G`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "4");

            $tbl_red_mat_5_f=  query("SELECT sum(`effectif_F`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "5");
            $tbl_red_mat_5_g=  query("SELECT sum(`effectif_G`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "5");

            $tbl_red_mat_6_f=  query("SELECT sum(`effectif_F`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "6");
            $tbl_red_mat_6_g=  query("SELECT sum(`effectif_G`) as som from `redoublants` WHERE belongs_to = ? and nom_class = ?",$ecole_["id"], "6");


            if ($ecole_["id_niveau"] == "Maternelle" ) {
     // echo $tbl_red_mat_6_f."~#{[|`\^@]}¤w|}";
                
            }

            elseif ($ecole_["id_niveau"] == "Primaire") {
                
               
            }
            elseif ($ecole_["id_niveau"] == "Secondaire") {
                
               
            }

        }
        $id_pp++;
        echo "<tr >";
        echo "<td rowspan='3'> $id_pp</td>";
        echo "<td rowspan='3'>". $paroisse_["nom_sous_div"]. "</td>";
        
        echo "<td rowspan='1'>Maternelle</td>";

        echo "<td>$RED_mat_f </td>";
        echo "<td>$RED_mat_g </td>";
        echo "<td>".($RED_mat_f+$RED_mat_g)."</td>";
        echo "<td>$REDOUBLANTS_mat_f </td>";
        echo "<td>$REDOUBLANTS_mat_g </td>";
        echo "<td>".($REDOUBLANTS_mat_f+$REDOUBLANTS_mat_g)."</td>";
        echo "<td>$PROMUS_mat_f </td>";
        echo "<td>$PROMUS_mat_g </td>";
        echo "<td>".($PROMUS_mat_f+$PROMUS_mat_g)."</td>";
        echo "<td>$TRANSF_mat_f </td>";
        echo "<td>$TRANSF_mat_g </td>";
        echo "<td>".($TRANSF_mat_f+$TRANSF_mat_g)."</td>";
        

        
        echo "<td class='tr'>".($RED_mat_f+$REDOUBLANTS_mat_f+$PROMUS_mat_f+$TRANSF_mat_f)."</td>";
        echo "<td class='tr'>".($RED_mat_g+$REDOUBLANTS_mat_g+$PROMUS_mat_g+$TRANSF_mat_g)."</td>";
        
        echo "<td class='tr'>".(($RED_mat_f+$REDOUBLANTS_mat_f+$PROMUS_mat_f+$TRANSF_mat_f)+$RED_mat_g+$REDOUBLANTS_mat_g+$PROMUS_mat_g+$TRANSF_mat_g)."</td>";

        echo "<td>$ABANDONS_mat_f </td>";
        echo "<td>$ABANDONS_mat_g </td>";
        echo "<td>".($ABANDONS_mat_f+$ABANDONS_mat_g)."</td>";
        echo "<td>$CERTIF_DIPL_mat_f </td>";
        echo "<td>$CERTIF_DIPL_mat_g </td>";
        echo "<td>".($CERTIF_DIPL_mat_f+$CERTIF_DIPL_mat_g)."</td>";

        /*for ($i=0; $i < 3 ; $i++) { 
             echo "<td class='tr'> </td>";
        }*/

        echo "</tr >";
        echo "<tr class='tr2'>";
        echo "<td rowspan='1'>Primaire</td>";

         echo "<td>$RED_pri_f </td>";
        echo "<td>$RED_pri_g </td>";
        echo "<td>".($RED_pri_f+$RED_pri_g)."</td>";
        echo "<td>$REDOUBLANTS_pri_f </td>";
        echo "<td>$REDOUBLANTS_pri_g </td>";
        echo "<td>".($REDOUBLANTS_pri_f+$REDOUBLANTS_pri_g)."</td>";
        echo "<td>$PROMUS_pri_f </td>";
        echo "<td>$PROMUS_pri_g </td>";
        echo "<td>".($PROMUS_pri_f+$PROMUS_pri_g)."</td>";
        echo "<td>$TRANSF_pri_f </td>";
        echo "<td>$TRANSF_pri_g </td>";
        echo "<td>".($TRANSF_pri_f+$TRANSF_pri_g)."</td>";
        

        /*for ($i=0; $i < 3 ; $i++) { 
             echo "<td class='tr'> </td>";
        }*/
        echo "<td class='tr'>".($RED_pri_f+$REDOUBLANTS_pri_f+$PROMUS_pri_f+$TRANSF_pri_f)."</td>";
        echo "<td class='tr'>".($RED_pri_g+$REDOUBLANTS_pri_g+$PROMUS_pri_g+$TRANSF_pri_g)."</td>";
        
        echo "<td class='tr'>".(($RED_pri_f+$REDOUBLANTS_pri_f+$PROMUS_pri_f+$TRANSF_pri_f)+$RED_pri_g+$REDOUBLANTS_pri_g+$PROMUS_pri_g+$TRANSF_pri_g)."</td>";

        echo "<td>$ABANDONS_pri_f </td>";
        echo "<td>$ABANDONS_pri_g </td>";
        echo "<td>".($ABANDONS_pri_f+$ABANDONS_pri_g)."</td>";
        echo "<td>$CERTIF_DIPL_pri_f </td>";
        echo "<td>$CERTIF_DIPL_pri_g </td>";
        echo "<td>".($CERTIF_DIPL_pri_f+$CERTIF_DIPL_pri_g)."</td>";

         echo "</tr >";

          echo "<tr >";
        echo "<td rowspan='1'>Secondaire</td>";

        echo "<td>$RED_sec_f </td>";
        echo "<td>$RED_sec_g </td>";
        echo "<td>".($RED_sec_f+$RED_sec_g)."</td>";
        echo "<td>$REDOUBLANTS_sec_f </td>";
        echo "<td>$REDOUBLANTS_sec_g </td>";
        echo "<td>".($REDOUBLANTS_sec_f+$REDOUBLANTS_sec_g)."</td>";
        echo "<td>$PROMUS_sec_f </td>";
        echo "<td>$PROMUS_sec_g </td>";
        echo "<td>".($PROMUS_sec_f+$PROMUS_sec_g)."</td>";
        echo "<td>$TRANSF_sec_f </td>";
        echo "<td>$TRANSF_sec_g </td>";
        echo "<td>".($TRANSF_sec_f+$TRANSF_sec_g)."</td>";
        

       /* for ($i=0; $i < 3 ; $i++) { 
             echo "<td class='tr'> </td>";
        }*/
        echo "<td class='tr'>".($RED_sec_f+$REDOUBLANTS_sec_f+$PROMUS_sec_f+$TRANSF_sec_f)."</td>";
        echo "<td class='tr'>".($RED_sec_g+$REDOUBLANTS_sec_g+$PROMUS_sec_g+$TRANSF_sec_g)."</td>";
        
        echo "<td class='tr'>".(($RED_sec_f+$REDOUBLANTS_sec_f+$PROMUS_sec_f+$TRANSF_sec_f)+$RED_sec_g+$REDOUBLANTS_sec_g+$PROMUS_sec_g+$TRANSF_sec_g)."</td>";

        echo "<td>$ABANDONS_sec_f </td>";
        echo "<td>$ABANDONS_sec_g </td>";
        echo "<td>".($ABANDONS_sec_f+$ABANDONS_sec_g)."</td>";
        echo "<td>$CERTIF_DIPL_sec_f </td>";
        echo "<td>$CERTIF_DIPL_sec_g </td>";
        echo "<td>".($CERTIF_DIPL_sec_f+$CERTIF_DIPL_sec_g)."</td>";

        echo "</tr >";
        
        //sommation  total general
        $RED_mat_f_tot= $RED_mat_f_tot + $RED_mat_f;
        $REDOUBLANTS_mat_f_tot= $REDOUBLANTS_mat_f_tot + $REDOUBLANTS_mat_f;
        $PROMUS_mat_f_tot= $PROMUS_mat_f_tot + $PROMUS_mat_f;
        $TRANSF_mat_f_tot= $TRANSF_mat_f_tot + $TRANSF_mat_f;
        $ABANDONS_mat_f_tot= $ABANDONS_mat_f_tot + $ABANDONS_mat_f;
        $CERTIF_DIPL_mat_f_tot= $CERTIF_DIPL_mat_f_tot + $CERTIF_DIPL_mat_f;

        $RED_pri_f_tot= $RED_pri_f_tot + $RED_pri_f;
        $REDOUBLANTS_pri_f_tot= $REDOUBLANTS_pri_f_tot + $REDOUBLANTS_pri_f;
        $PROMUS_pri_f_tot= $PROMUS_pri_f_tot + $PROMUS_pri_f;
        $TRANSF_pri_f_tot= $TRANSF_pri_f_tot + $TRANSF_pri_f;
        $ABANDONS_pri_f_tot= $ABANDONS_pri_f_tot + $ABANDONS_pri_f;
        $CERTIF_DIPL_pri_f_tot= $CERTIF_DIPL_pri_f_tot + $CERTIF_DIPL_pri_f;

        $RED_sec_f_tot= $RED_sec_f_tot + $RED_sec_f;
        $REDOUBLANTS_sec_f_tot= $REDOUBLANTS_sec_f_tot + $REDOUBLANTS_sec_f;
        $PROMUS_sec_f_tot= $PROMUS_sec_f_tot + $PROMUS_sec_f;
        $TRANSF_sec_f_tot= $TRANSF_sec_f_tot + $TRANSF_sec_f;
        $ABANDONS_sec_f_tot= $ABANDONS_sec_f_tot + $ABANDONS_sec_f;
        $CERTIF_DIPL_sec_f_tot= $CERTIF_DIPL_sec_f_tot + $CERTIF_DIPL_sec_f;

        $RED_mat_g_tot= $RED_mat_g_tot + $RED_mat_g;
        $REDOUBLANTS_mat_g_tot= $REDOUBLANTS_mat_g_tot + $REDOUBLANTS_mat_g;
        $PROMUS_mat_g_tot= $PROMUS_mat_g_tot + $PROMUS_mat_g;
        $TRANSF_mat_g_tot= $TRANSF_mat_g_tot + $TRANSF_mat_g;
        $ABANDONS_mat_g_tot= $ABANDONS_mat_g_tot + $ABANDONS_mat_g;
        $CERTIF_DIPL_mat_g_tot= $CERTIF_DIPL_mat_g_tot + $CERTIF_DIPL_mat_g;

        $RED_pri_g_tot= $RED_pri_g_tot + $RED_pri_g;
        $REDOUBLANTS_pri_g_tot= $REDOUBLANTS_pri_g_tot + $REDOUBLANTS_pri_g;
        $PROMUS_pri_g_tot= $PROMUS_pri_g_tot + $PROMUS_pri_g;
        $TRANSF_pri_g_tot= $TRANSF_pri_g_tot + $TRANSF_pri_g;
        $ABANDONS_pri_g_tot= $ABANDONS_pri_g_tot + $ABANDONS_pri_g;
        $CERTIF_DIPL_pri_g_tot= $CERTIF_DIPL_pri_g_tot + $CERTIF_DIPL_pri_g;

        $RED_sec_g_tot= $RED_sec_g_tot + $RED_sec_g;
        $REDOUBLANTS_sec_g_tot= $REDOUBLANTS_sec_g_tot + $REDOUBLANTS_sec_g;
        $PROMUS_sec_g_tot= $PROMUS_sec_g_tot + $PROMUS_sec_g;
        $TRANSF_sec_g_tot= $TRANSF_sec_g_tot + $TRANSF_sec_g;
        $ABANDONS_sec_g_tot= $ABANDONS_sec_g_tot + $ABANDONS_sec_g;
        $CERTIF_DIPL_sec_g_tot= $CERTIF_DIPL_sec_g_tot + $CERTIF_DIPL_sec_g;


       
       

        
            
                
                       
        
        } 
        echo "<tr class='tr'>";
        echo "<td rowspan='3' colspan='2'>SOUS TOTAUX </td>";
        
        echo "<td rowspan='1'>Maternelle</td>";
        echo "<td>$RED_mat_f_tot </td>";
        echo "<td>$RED_mat_g_tot </td>";
        echo "<td>".($RED_mat_f_tot+$RED_mat_g_tot)."</td>";
        echo "<td>$REDOUBLANTS_mat_f_tot </td>";
        echo "<td>$REDOUBLANTS_mat_g_tot </td>";
        echo "<td>".($REDOUBLANTS_mat_f_tot+$REDOUBLANTS_mat_g_tot)."</td>";
        echo "<td>$PROMUS_mat_f_tot </td>";
        echo "<td>$PROMUS_mat_g_tot </td>";
        echo "<td>".($PROMUS_mat_f_tot+$PROMUS_mat_g_tot)."</td>";
        echo "<td>$TRANSF_mat_f_tot </td>";
        echo "<td>$TRANSF_mat_g_tot </td>";
        echo "<td>".($TRANSF_mat_f_tot+$TRANSF_mat_g_tot)."</td>";
       

        
        echo "<td class='tr'>".($RED_mat_f_tot+$REDOUBLANTS_mat_f_tot+$PROMUS_mat_f_tot+$TRANSF_mat_f_tot)."</td>";
        echo "<td class='tr'>".($RED_mat_g_tot+$REDOUBLANTS_mat_g_tot+$PROMUS_mat_g_tot+$TRANSF_mat_g_tot)."</td>";
        
        echo "<td class='tr'>".(($RED_mat_f_tot+$REDOUBLANTS_mat_f_tot+$PROMUS_mat_f_tot+$TRANSF_mat_f_tot)+
            $RED_mat_g_tot+$REDOUBLANTS_mat_g_tot+$PROMUS_mat_g_tot+$TRANSF_mat_g_tot)."</td>";

         echo "<td>$ABANDONS_mat_f_tot </td>";
        echo "<td>$ABANDONS_mat_g_tot </td>";
        echo "<td>".($ABANDONS_mat_f_tot+$ABANDONS_mat_g_tot)."</td>";
        echo "<td>$CERTIF_DIPL_mat_f_tot </td>";
        echo "<td>$CERTIF_DIPL_mat_g_tot </td>";
        echo "<td>".($CERTIF_DIPL_mat_f_tot+$CERTIF_DIPL_mat_g_tot)."</td>";
        echo "</tr>";


        echo "<tr class='tr'>";   

         echo "<td rowspan='1'>Primaire</td>";
        echo "<td>$RED_pri_f_tot </td>";
        echo "<td>$RED_pri_g_tot </td>";
        echo "<td>".($RED_pri_f_tot+$RED_pri_g_tot)."</td>";
        echo "<td>$REDOUBLANTS_pri_f_tot </td>";
        echo "<td>$REDOUBLANTS_pri_g_tot </td>";
        echo "<td>".($REDOUBLANTS_pri_f_tot+$REDOUBLANTS_pri_g_tot)."</td>";
        echo "<td>$PROMUS_pri_f_tot </td>";
        echo "<td>$PROMUS_pri_g_tot </td>";
        echo "<td>".($PROMUS_pri_f_tot+$PROMUS_pri_g_tot)."</td>";
        echo "<td>$TRANSF_pri_f_tot </td>";
        echo "<td>$TRANSF_pri_g_tot </td>";
        echo "<td>".($TRANSF_pri_f_tot+$TRANSF_pri_g_tot)."</td>";
        

        
        echo "<td class='tr'>".($RED_pri_f_tot+$REDOUBLANTS_pri_f_tot+$PROMUS_pri_f_tot+$TRANSF_pri_f_tot)."</td>";
        echo "<td class='tr'>".($RED_pri_g_tot+$REDOUBLANTS_pri_g_tot+$PROMUS_pri_g_tot+$TRANSF_pri_g_tot)."</td>";
        
        echo "<td class='tr'>".(($RED_pri_f_tot+$REDOUBLANTS_pri_f_tot+$PROMUS_pri_f_tot+$TRANSF_pri_f_tot)+$RED_pri_g_tot+$REDOUBLANTS_pri_g_tot+$PROMUS_pri_g_tot+$TRANSF_pri_g_tot)."</td>";

        echo "<td>$ABANDONS_pri_f_tot </td>";
        echo "<td>$ABANDONS_pri_g_tot </td>";
        echo "<td>".($ABANDONS_pri_f_tot+$ABANDONS_pri_g_tot)."</td>";
        echo "<td>$CERTIF_DIPL_pri_f_tot </td>";
        echo "<td>$CERTIF_DIPL_pri_g_tot </td>";
        echo "<td>".($CERTIF_DIPL_pri_f_tot+$CERTIF_DIPL_pri_g_tot)."</td>";

        echo "</tr>";


        echo "<tr class='tr'>";   

         echo "<td rowspan='1'>Secondaire</td>";
        /*for ($i=0; $i < 18 ; $i++) { 
             echo "<td > </td>";
        }
        for ($i=0; $i < 3 ; $i++) { 
             echo "<td class='tr'> </td>";
        }*/
        echo "<td>$RED_sec_f_tot </td>";
        echo "<td>$RED_sec_g_tot </td>";
        echo "<td>".($RED_sec_f_tot+$RED_sec_g_tot)."</td>";
        echo "<td>$REDOUBLANTS_sec_f_tot </td>";
        echo "<td>$REDOUBLANTS_sec_g_tot </td>";
        echo "<td>".($REDOUBLANTS_sec_f_tot+$REDOUBLANTS_sec_g_tot)."</td>";
        echo "<td>$PROMUS_sec_f_tot </td>";
        echo "<td>$PROMUS_sec_g_tot </td>";
        echo "<td>".($PROMUS_sec_f_tot+$PROMUS_sec_g_tot)."</td>";
        echo "<td>$TRANSF_sec_f_tot </td>";
        echo "<td>$TRANSF_sec_g_tot </td>";
        echo "<td>".($TRANSF_sec_f_tot+$TRANSF_sec_g_tot)."</td>";
        

        
        echo "<td class='tr'>".($RED_sec_f_tot+$REDOUBLANTS_sec_f_tot+$PROMUS_sec_f_tot+$TRANSF_sec_f_tot)."</td>";
        echo "<td class='tr'>".($RED_sec_g_tot+$REDOUBLANTS_sec_g_tot+$PROMUS_sec_g_tot+$TRANSF_sec_g_tot)."</td>";
        
        echo "<td class='tr'>".(($RED_sec_f_tot+$REDOUBLANTS_sec_f_tot+$PROMUS_sec_f_tot+$TRANSF_sec_f_tot)+$RED_sec_g_tot+$REDOUBLANTS_sec_g_tot+$PROMUS_sec_g_tot+$TRANSF_sec_g_tot)."</td>";

        echo "<td>$ABANDONS_sec_f_tot </td>";
        echo "<td>$ABANDONS_sec_g_tot </td>";
        echo "<td>".($ABANDONS_sec_f_tot+$ABANDONS_sec_g_tot)."</td>";
        echo "<td>$CERTIF_DIPL_sec_f_tot </td>";
        echo "<td>$CERTIF_DIPL_sec_g_tot </td>";
        echo "<td>".($CERTIF_DIPL_sec_f_tot+$CERTIF_DIPL_sec_g_tot)."</td>";
        echo "</tr>"; 

        //total generale
         echo "<tr class='tr'>";
        echo "<td colspan='3' > TOTAL GENERAL </td>";
        
       /* for ($i=0; $i < 18 ; $i++) { 
             echo "<td > </td>";
        }
        for ($i=0; $i < 3 ; $i++) { 
             echo "<td class='tr'> </td>";
        }*/
        echo "<td>".($RED_mat_f_tot + $RED_pri_f_tot + $RED_sec_f_tot)."</td>";
        echo "<td>".($RED_mat_g_tot + $RED_pri_g_tot + $RED_sec_g_tot)."</td>";
        echo "<td>".($RED_mat_f_tot + $RED_pri_f_tot + $RED_sec_f_tot + $RED_mat_g_tot + $RED_pri_g_tot + $RED_sec_g_tot)."</td>";

        echo "<td>".($REDOUBLANTS_mat_f_tot+$REDOUBLANTS_pri_f_tot+$REDOUBLANTS_sec_f_tot)."</td>";
        echo "<td>".($REDOUBLANTS_mat_g_tot+$REDOUBLANTS_pri_g_tot+$REDOUBLANTS_sec_g_tot)."</td>";
        echo "<td>".($REDOUBLANTS_mat_f_tot+$REDOUBLANTS_pri_f_tot+$REDOUBLANTS_sec_f_tot+$REDOUBLANTS_mat_g_tot+$REDOUBLANTS_pri_g_tot+$REDOUBLANTS_sec_g_tot)."</td>";

        echo "<td>".($PROMUS_mat_f_tot +$PROMUS_pri_f_tot +$PROMUS_sec_f_tot )."</td>";
        echo "<td>".($PROMUS_mat_g_tot +$PROMUS_pri_g_tot +$PROMUS_sec_g_tot )."</td>";
        echo "<td>".($PROMUS_mat_f_tot +$PROMUS_pri_f_tot +$PROMUS_sec_f_tot+$PROMUS_mat_g_tot +$PROMUS_pri_g_tot +$PROMUS_sec_g_tot)."</td>";
        
        echo "<td>".($TRANSF_mat_f_tot+ $TRANSF_pri_f_tot+$TRANSF_sec_f_tot)." </td>";
        echo "<td>".($TRANSF_mat_g_tot+ $TRANSF_pri_g_tot+$TRANSF_sec_g_tot)." </td>";
        echo "<td>".($TRANSF_mat_f_tot+ $TRANSF_pri_f_tot+$TRANSF_sec_f_tot+$TRANSF_mat_g_tot+ $TRANSF_pri_g_tot+$TRANSF_sec_g_tot)."</td>";
        

        

       

        
        echo "<td class='tr'>".($RED_mat_f_tot+$REDOUBLANTS_mat_f_tot+$PROMUS_mat_f_tot+$TRANSF_mat_f_tot+ $RED_pri_f_tot+$REDOUBLANTS_pri_f_tot+$PROMUS_pri_f_tot+$TRANSF_pri_f_tot+$RED_sec_f_tot+$REDOUBLANTS_sec_f_tot+$PROMUS_sec_f_tot+$TRANSF_sec_f_tot)."</td>";

        echo "<td class='tr'>".($RED_mat_g_tot+$REDOUBLANTS_mat_g_tot+$PROMUS_mat_g_tot+$TRANSF_mat_g_tot+ $RED_pri_g_tot+$REDOUBLANTS_pri_g_tot+$PROMUS_pri_g_tot+$TRANSF_pri_g_tot +$RED_sec_g_tot+$REDOUBLANTS_sec_g_tot+$PROMUS_sec_g_tot+$TRANSF_sec_g_tot)."</td>";
        
        echo "<td class='tr'>".((($RED_mat_f_tot+$REDOUBLANTS_mat_f_tot+$PROMUS_mat_f_tot+$TRANSF_mat_f_tot + $RED_pri_f_tot+$REDOUBLANTS_pri_f_tot+$PROMUS_pri_f_tot+$TRANSF_pri_f_tot +$RED_sec_f_tot+$REDOUBLANTS_sec_f_tot+$PROMUS_sec_f_tot+$TRANSF_sec_f_tot))+$RED_mat_g_tot+$REDOUBLANTS_mat_g_tot+$PROMUS_mat_g_tot+$TRANSF_mat_g_tot+ $RED_pri_g_tot+$REDOUBLANTS_pri_g_tot+$PROMUS_pri_g_tot+$TRANSF_pri_g_tot+$RED_sec_g_tot+$REDOUBLANTS_sec_g_tot+$PROMUS_sec_g_tot+$TRANSF_sec_g_tot)."</td>";

        echo "<td>".($ABANDONS_mat_f_tot +$ABANDONS_pri_f_tot +$ABANDONS_sec_f_tot )."</td>";
        echo "<td>".($ABANDONS_mat_g_tot +$ABANDONS_pri_g_tot +$ABANDONS_sec_g_tot )."</td>";
        echo "<td>".($ABANDONS_mat_f_tot +$ABANDONS_pri_f_tot +$ABANDONS_sec_f_tot+$ABANDONS_mat_g_tot +$ABANDONS_pri_g_tot +$ABANDONS_sec_g_tot)."</td>";
        
        echo "<td>".($CERTIF_DIPL_mat_f_tot+ $CERTIF_DIPL_pri_f_tot+$CERTIF_DIPL_sec_f_tot)." </td>";
        echo "<td>".($CERTIF_DIPL_mat_g_tot+ $CERTIF_DIPL_pri_g_tot+$CERTIF_DIPL_sec_g_tot)." </td>";
        echo "<td>".($CERTIF_DIPL_mat_f_tot+ $CERTIF_DIPL_pri_f_tot+$CERTIF_DIPL_sec_f_tot+$CERTIF_DIPL_mat_g_tot+ $CERTIF_DIPL_pri_g_tot+$CERTIF_DIPL_sec_g_tot)."</td>";
         
        echo "</tr>";     


            echo '</tbody>
      </table>';
       ?>

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