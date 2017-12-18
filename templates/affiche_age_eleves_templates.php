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
                            <li><a href="affiche_synthese_de_la_rep.php">Synthèse de la répartition des élèves du secondaire par option</a></li>
                            <li><a href="affiche_mouvement_eleves.php">Affiche mouvement des élèves</a></li>
                            <li><a class="active" href="affiche_age_eleves.php">Affiche ages des élèves</a></li>


                            
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
                                    
            

                        <span class='titre_print text-uppercase'>Affiche age revolu des élèves</span><br>
<?php
 echo '<table id="affiche_relev_stat_table"  class="naledi_yellow table-hover table-bordered  table-responsive pointInputTable table-condensed" style="">
                       <thead>
                            <tr class="warning">
                                <th rowspan="3"> N° </th>
                                <th rowspan="3"> PAROISSE </th>
                                <th rowspan="3"> TERR </th>
                                <th rowspan="3"> NIVEAU </th>
                                <th rowspan="3"> AGE </th>
                                <th colspan="3"> CLASSE </th>
                                <th colspan="3"> CLASSE </th>
                                <th colspan="3"> CLASSE </th>
                                <th colspan="3"> CLASSE </th>
                                <th colspan="3"> CLASSE </th>
                                <th colspan="3"> CLASSE </th>
                                <th colspan="3" rowspan="2"> TOTAL GEN </th>
                            </tr>
                            <tr>
                                   
                                <th colspan="3">1ère</th>
                                 <th colspan="3">2ème</th>
                                <th colspan="3">3ème</th>
                                <th colspan="3">4ème</th>
                                <th colspan="3">5ème</th>
                                <th colspan="3">6ème</th>                            
                            </tr>
                            <tr>
                                <th>F</th>
                                <th>G</th>
                                <th>GF</th>
                                 <th>F</th>
                                <th>G</th>
                                <th>GF</th>
                                 <th>F</th>
                                <th>G</th>
                                <th>GF</th>
                                <th>F</th>
                                <th>G</th>
                                <th>GF</th>
                                <th>F</th>
                                <th>G</th>
                                <th>GF</th>
                                <th>F</th>
                                <th>G</th>
                                <th>GF</th>
                                <th>F</th>
                                <th>G</th>
                                <th>GF</th>
                                
                            </tr>
                            
                            <tbody class="naledi_yellow1">';
                            
                        $age[0] = "Moins 6 ans";
                        $age[1] = "6 ans";
                        $age[2] = "7 à 10 ans";
                        $age[3] = "11 ans";
                        $age[4] = "Plus de 11 ans";
                        $nbr_m = 0;

                        $tab__6ansf1_mat=0;
                        $tab_6ansf1_mat=0;
                        $tab_7_10ansf1_mat=0;
                        $tab_11ansf1_mat=0;
                        $tab_plus_11ansf1_mat=0;

                        $tab__6ansf2_mat=0;
                        $tab_6ansf2_mat=0;
                        $tab_7_10ansf2_mat=0;
                        $tab_11ansf2_mat=0;
                        $tab_plus_11ansf2_mat=0;

                        $tab__6ansf3_mat=0;
                        $tab_6ansf3_mat=0;
                        $tab_7_10ansf3_mat=0;
                        $tab_11ansf3_mat=0;
                        $tab_plus_11ansf3_mat=0;

                        $tab__6ansf4_mat=0;
                        $tab_6ansf4_mat=0;
                        $tab_7_10ansf4_mat=0;
                        $tab_11ansf4_mat=0;
                        $tab_plus_11ansf4_mat=0;

                        $tab__6ansf5_mat=0;
                        $tab_6ansf5_mat=0;
                        $tab_7_10ansf5_mat=0;
                        $tab_11ansf5_mat=0;
                        $tab_plus_11ansf5_mat=0;

                        $tab__6ansf6_mat=0;
                        $tab_6ansf6_mat=0;
                        $tab_7_10ansf6_mat=0;
                        $tab_11ansf6_mat=0;
                        $tab_plus_11ansf6_mat=0;




                        $tab__6ansg1_mat=0;
                        $tab_6ansg1_mat=0;
                        $tab_7_10ansg1_mat=0;
                        $tab_11ansg1_mat=0;
                        $tab_plus_11ansg1_mat=0;

                        $tab__6ansg2_mat=0;
                        $tab_6ansg2_mat=0;
                        $tab_7_10ansg2_mat=0;
                        $tab_11ansg2_mat=0;
                        $tab_plus_11ansg2_mat=0;

                        $tab__6ansg3_mat=0;
                        $tab_6ansg3_mat=0;
                        $tab_7_10ansg3_mat=0;
                        $tab_11ansg3_mat=0;
                        $tab_plus_11ansg3_mat=0;

                        $tab__6ansg4_mat=0;
                        $tab_6ansg4_mat=0;
                        $tab_7_10ansg4_mat=0;
                        $tab_11ansg4_mat=0;
                        $tab_plus_11ansg4_mat=0;

                        $tab__6ansg5_mat=0;
                        $tab_6ansg5_mat=0;
                        $tab_7_10ansg5_mat=0;
                        $tab_11ansg5_mat=0;
                        $tab_plus_11ansg5_mat=0;

                        $tab__6ansg6_mat=0;
                        $tab_6ansg6_mat=0;
                        $tab_7_10ansg6_mat=0;
                        $tab_11ansg6_mat=0;
                        $tab_plus_11ansg6_mat=0;



                        $tab__6ansf1_pri=0;
                        $tab_6ansf1_pri=0;
                        $tab_7_10ansf1_pri=0;
                        $tab_11ansf1_pri=0;
                        $tab_plus_11ansf1_pri=0;

                        $tab__6ansf2_pri=0;
                        $tab_6ansf2_pri=0;
                        $tab_7_10ansf2_pri=0;
                        $tab_11ansf2_pri=0;
                        $tab_plus_11ansf2_pri=0;

                        $tab__6ansf3_pri=0;
                        $tab_6ansf3_pri=0;
                        $tab_7_10ansf3_pri=0;
                        $tab_11ansf3_pri=0;
                        $tab_plus_11ansf3_pri=0;

                        $tab__6ansf4_pri=0;
                        $tab_6ansf4_pri=0;
                        $tab_7_10ansf4_pri=0;
                        $tab_11ansf4_pri=0;
                        $tab_plus_11ansf4_pri=0;

                        $tab__6ansf5_pri=0;
                        $tab_6ansf5_pri=0;
                        $tab_7_10ansf5_pri=0;
                        $tab_11ansf5_pri=0;
                        $tab_plus_11ansf5_pri=0;

                        $tab__6ansf6_pri=0;
                        $tab_6ansf6_pri=0;
                        $tab_7_10ansf6_pri=0;
                        $tab_11ansf6_pri=0;
                        $tab_plus_11ansf6_pri=0;



                        $tab__6ansg1_pri=0;
                        $tab_6ansg1_pri=0;
                        $tab_7_10ansg1_pri=0;
                        $tab_11ansg1_pri=0;
                        $tab_plus_11ansg1_pri=0;

                        $tab__6ansg2_pri=0;
                        $tab_6ansg2_pri=0;
                        $tab_7_10ansg2_pri=0;
                        $tab_11ansg2_pri=0;
                        $tab_plus_11ansg2_pri=0;

                        $tab__6ansg3_pri=0;
                        $tab_6ansg3_pri=0;
                        $tab_7_10ansg3_pri=0;
                        $tab_11ansg3_pri=0;
                        $tab_plus_11ansg3_pri=0;

                        $tab__6ansg4_pri=0;
                        $tab_6ansg4_pri=0;
                        $tab_7_10ansg4_pri=0;
                        $tab_11ansg4_pri=0;
                        $tab_plus_11ansg4_pri=0;

                        $tab__6ansg5_pri=0;
                        $tab_6ansg5_pri=0;
                        $tab_7_10ansg5_pri=0;
                        $tab_11ansg5_pri=0;
                        $tab_plus_11ansg5_pri=0;

                        $tab__6ansg6_pri=0;
                        $tab_6ansg6_pri=0;
                        $tab_7_10ansg6_pri=0;
                        $tab_11ansg6_pri=0;
                        $tab_plus_11ansg6_pri=0;

                        

                        $tab_paroisse = query("SELECT * FROM sous_div");

                        foreach ($tab_paroisse as $paroisse_) {
                            $tab_ecole = query("SELECT * FROM ecole2 where belongs_to = ? and id_niveau <> 'Secondaire' ORDER BY id_niveau",$paroisse_["id"]);
                            $som__6ansf1_mat = 0;
                            $som__6ansg1_mat = 0;
                            $som__6ansf2_mat = 0;
                            $som__6ansg2_mat = 0;
                            $som__6ansf3_mat = 0;
                            $som__6ansg3_mat = 0;
                            $som__6ansf4_mat = 0;
                            $som__6ansg4_mat = 0;
                            $som__6ansf5_mat = 0;
                            $som__6ansg5_mat = 0;
                            $som__6ansf6_mat = 0;
                            $som__6ansg6_mat = 0;

                            $som_6ansf1_mat = 0;
                            $som_6ansg1_mat = 0;
                            $som_6ansf2_mat = 0;
                            $som_6ansg2_mat = 0;
                            $som_6ansf3_mat = 0;
                            $som_6ansg3_mat = 0;
                            $som_6ansf4_mat = 0;
                            $som_6ansg4_mat = 0;
                            $som_6ansf5_mat = 0;
                            $som_6ansg5_mat = 0;
                            $som_6ansf6_mat = 0;
                            $som_6ansg6_mat = 0;

                            $som_7_11ansf1_mat = 0;
                            $som_7_11ansg1_mat = 0;
                            $som_7_11ansf2_mat = 0;
                            $som_7_11ansg2_mat = 0;
                            $som_7_11ansf3_mat = 0;
                            $som_7_11ansg3_mat = 0;
                            $som_7_11ansf4_mat = 0;
                            $som_7_11ansg4_mat = 0;
                            $som_7_11ansf5_mat = 0;
                            $som_7_11ansg5_mat = 0;
                            $som_7_11ansf6_mat = 0;
                            $som_7_11ansg6_mat = 0;

                            $som_11ansf1_mat = 0;
                            $som_11ansg1_mat = 0;
                            $som_11ansf2_mat = 0;
                            $som_11ansg2_mat = 0;
                            $som_11ansf3_mat = 0;
                            $som_11ansg3_mat = 0;
                            $som_11ansf4_mat = 0;
                            $som_11ansg4_mat = 0;
                            $som_11ansf5_mat = 0;
                            $som_11ansg5_mat = 0;
                            $som_11ansf6_mat = 0;
                            $som_11ansg6_mat = 0;

                            $som_plus_11ansf1_mat = 0;
                            $som_plus_11ansg1_mat = 0;
                            $som_plus_11ansf2_mat = 0;
                            $som_plus_11ansg2_mat = 0;
                            $som_plus_11ansf3_mat = 0;
                            $som_plus_11ansg3_mat = 0;
                            $som_plus_11ansf4_mat = 0;
                            $som_plus_11ansg4_mat = 0;
                            $som_plus_11ansf5_mat = 0;
                            $som_plus_11ansg5_mat = 0;
                            $som_plus_11ansf6_mat = 0;
                            $som_plus_11ansg6_mat = 0;



                            $som__6ansf1_pri = 0;
                            $som__6ansg1_pri = 0;
                            $som__6ansf2_pri = 0;
                            $som__6ansg2_pri = 0;
                            $som__6ansf3_pri = 0;
                            $som__6ansg3_pri = 0;
                            $som__6ansf4_pri = 0;
                            $som__6ansg4_pri = 0;
                            $som__6ansf5_pri = 0;
                            $som__6ansg5_pri = 0;
                            $som__6ansf6_pri = 0;
                            $som__6ansg6_pri = 0;

                            $som_6ansf1_pri = 0;
                            $som_6ansg1_pri = 0;
                            $som_6ansf2_pri = 0;
                            $som_6ansg2_pri = 0;
                            $som_6ansf3_pri = 0;
                            $som_6ansg3_pri = 0;
                            $som_6ansf4_pri = 0;
                            $som_6ansg4_pri = 0;
                            $som_6ansf5_pri = 0;
                            $som_6ansg5_pri = 0;
                            $som_6ansf6_pri = 0;
                            $som_6ansg6_pri = 0;

                            $som_7_11ansf1_pri = 0;
                            $som_7_11ansg1_pri = 0;
                            $som_7_11ansf2_pri = 0;
                            $som_7_11ansg2_pri = 0;
                            $som_7_11ansf3_pri = 0;
                            $som_7_11ansg3_pri = 0;
                            $som_7_11ansf4_pri = 0;
                            $som_7_11ansg4_pri = 0;
                            $som_7_11ansf5_pri = 0;
                            $som_7_11ansg5_pri = 0;
                            $som_7_11ansf6_pri = 0;
                            $som_7_11ansg6_pri = 0;

                            $som_11ansf1_pri = 0;
                            $som_11ansg1_pri = 0;
                            $som_11ansf2_pri = 0;
                            $som_11ansg2_pri = 0;
                            $som_11ansf3_pri = 0;
                            $som_11ansg3_pri = 0;
                            $som_11ansf4_pri = 0;
                            $som_11ansg4_pri = 0;
                            $som_11ansf5_pri = 0;
                            $som_11ansg5_pri = 0;
                            $som_11ansf6_pri = 0;
                            $som_11ansg6_pri = 0;

                            $som_plus_11ansf1_pri = 0;
                            $som_plus_11ansg1_pri = 0;
                            $som_plus_11ansf2_pri = 0;
                            $som_plus_11ansg2_pri = 0;
                            $som_plus_11ansf3_pri = 0;
                            $som_plus_11ansg3_pri = 0;
                            $som_plus_11ansf4_pri = 0;
                            $som_plus_11ansg4_pri = 0;
                            $som_plus_11ansf5_pri = 0;
                            $som_plus_11ansg5_pri = 0;
                            $som_plus_11ansf6_pri = 0;
                            $som_plus_11ansg6_pri = 0;

                            foreach ($tab_ecole as $ecole2_) {
                                if ($ecole2_["id_niveau"] == "Maternelle" ) {
                                    //selectionner l'age de moins de 6 ans ds toutes les ecoles de la paroisse x
                                    $req__6ansf1_mat = query("SELECT SUM(age_6ansF) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");
                                    $req__6ansg1_mat = query("SELECT SUM(age_6ansG) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");

                                    $req__6ansf2_mat = query("SELECT SUM(age_6ansF) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");
                                    $req__6ansg2_mat = query("SELECT SUM(age_6ansG) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");

                                    $req__6ansf3_mat = query("SELECT SUM(age_6ansF) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    $req__6ansg3_mat = query("SELECT SUM(age_6ansG) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    
                                    $som__6ansf1_mat = $som__6ansf1_mat + $req__6ansf1_mat[0]["som"];
                                    $som__6ansg1_mat = $som__6ansg1_mat + $req__6ansg1_mat[0]["som"];
                                    $som__6ansf2_mat = $som__6ansf2_mat + $req__6ansf2_mat[0]["som"];
                                    $som__6ansg2_mat = $som__6ansg2_mat + $req__6ansg2_mat[0]["som"];
                                    $som__6ansf3_mat = $som__6ansf3_mat + $req__6ansf3_mat[0]["som"];
                                    $som__6ansg3_mat = $som__6ansg3_mat + $req__6ansg3_mat[0]["som"];

                                    $req_6ansf1_mat = query("SELECT SUM(age_6F) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");
                                    $req_6ansg1_mat = query("SELECT SUM(age_6G) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");

                                    $req_6ansf2_mat = query("SELECT SUM(age_6F) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");
                                    $req_6ansg2_mat = query("SELECT SUM(age_6G) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");

                                    $req_6ansf3_mat = query("SELECT SUM(age_6F) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    $req_6ansg3_mat = query("SELECT SUM(age_6G) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    
                                    $som_6ansf1_mat = $som_6ansf1_mat + $req_6ansf1_mat[0]["som"];
                                    $som_6ansg1_mat = $som_6ansg1_mat + $req_6ansg1_mat[0]["som"];
                                    $som_6ansf2_mat = $som_6ansf2_mat + $req_6ansf2_mat[0]["som"];
                                    $som_6ansg2_mat = $som_6ansg2_mat + $req_6ansg2_mat[0]["som"];
                                    $som_6ansf3_mat = $som_6ansf3_mat + $req_6ansf3_mat[0]["som"];
                                    $som_6ansg3_mat = $som_6ansg3_mat + $req_6ansg3_mat[0]["som"];

                                    $req_7_11f1_mat = query("SELECT SUM(age_7a10ansF) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");
                                    $req_7_11g1_mat = query("SELECT SUM(age_7a10ansG) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");

                                    $req_7_11f2_mat = query("SELECT SUM(age_7a10ansF) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");
                                    $req_7_11g2_mat = query("SELECT SUM(age_7a10ansG) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");

                                    $req_7_11f3_mat = query("SELECT SUM(age_7a10ansF) as som FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    $req_7_11g3_mat = query("SELECT SUM(age_7a10ansG) as som  FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    
                                    $som_7_11ansf1_mat = $som_7_11ansf1_mat + $req_7_11f1_mat[0]["som"];
                                    $som_7_11ansg1_mat = $som_7_11ansg1_mat + $req_7_11g1_mat[0]["som"];
                                    $som_7_11ansf2_mat = $som_7_11ansf2_mat + $req_7_11f2_mat[0]["som"];
                                    $som_7_11ansg2_mat = $som_7_11ansg2_mat + $req_7_11g2_mat[0]["som"];
                                    $som_7_11ansf3_mat = $som_7_11ansf3_mat + $req_7_11f3_mat[0]["som"];
                                    $som_7_11ansg3_mat = $som_7_11ansg3_mat + $req_7_11g3_mat[0]["som"];

                                    

                                    

                                }
                                elseif ($ecole2_["id_niveau"] == "Primaire" ) {
                                    //selectionner l'age de moins de 6 ans ds toutes les ecoles de la paroisse x
                                    $req__6ansf1_pri = query("SELECT SUM(age_6ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");
                                    $req__6ansg1_pri = query("SELECT SUM(age_6ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");

                                    $req__6ansf2_pri = query("SELECT SUM(age_6ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");
                                    $req__6ansg2_pri = query("SELECT SUM(age_6ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");

                                    $req__6ansf3_pri = query("SELECT SUM(age_6ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    $req__6ansg3_pri = query("SELECT SUM(age_6ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");

                                    $req__6ansf4_pri = query("SELECT SUM(age_6ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");
                                    $req__6ansg4_pri = query("SELECT SUM(age_6ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");

                                    $req__6ansf5_pri = query("SELECT SUM(age_6ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");
                                    $req__6ansg5_pri = query("SELECT SUM(age_6ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");

                                    $req__6ansf6_pri = query("SELECT SUM(age_6ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    $req__6ansg6_pri = query("SELECT SUM(age_6ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    
                                    $som__6ansf1_pri = $som__6ansf1_pri + $req__6ansf1_pri[0]["som"];
                                    $som__6ansg1_pri = $som__6ansg1_pri + $req__6ansg1_pri[0]["som"];
                                    $som__6ansf2_pri = $som__6ansf2_pri + $req__6ansf2_pri[0]["som"];
                                    $som__6ansg2_pri = $som__6ansg2_pri + $req__6ansg2_pri[0]["som"];
                                    $som__6ansf3_pri = $som__6ansf3_pri + $req__6ansf3_pri[0]["som"];
                                    $som__6ansg3_pri = $som__6ansg3_pri + $req__6ansg3_pri[0]["som"];
                                    $som__6ansf4_pri = $som__6ansf4_pri + $req__6ansf4_pri[0]["som"];
                                    $som__6ansg4_pri = $som__6ansg4_pri + $req__6ansg4_pri[0]["som"];
                                    $som__6ansf5_pri = $som__6ansf5_pri + $req__6ansf5_pri[0]["som"];
                                    $som__6ansg5_pri = $som__6ansg5_pri + $req__6ansg5_pri[0]["som"];
                                    $som__6ansf6_pri = $som__6ansf6_pri + $req__6ansf6_pri[0]["som"];
                                    $som__6ansg6_pri = $som__6ansg6_pri + $req__6ansg6_pri[0]["som"];

                                    $req_6ansf1_pri = query("SELECT SUM(age_6F) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");
                                    $req_6ansg1_pri = query("SELECT SUM(age_6G) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");

                                    $req_6ansf2_pri = query("SELECT SUM(age_6F) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");
                                    $req_6ansg2_pri = query("SELECT SUM(age_6G) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");

                                    $req_6ansf3_pri = query("SELECT SUM(age_6F) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    $req_6ansg3_pri = query("SELECT SUM(age_6G) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");

                                    $req_6ansf4_pri = query("SELECT SUM(age_6F) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");
                                    $req_6ansg4_pri = query("SELECT SUM(age_6G) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");

                                    $req_6ansf5_pri = query("SELECT SUM(age_6F) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");
                                    $req_6ansg5_pri = query("SELECT SUM(age_6G) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");

                                    $req_6ansf6_pri = query("SELECT SUM(age_6F) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    $req_6ansg6_pri = query("SELECT SUM(age_6G) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    
                                    $som_6ansf1_pri = $som_6ansf1_pri + $req_6ansf1_pri[0]["som"];
                                    $som_6ansg1_pri = $som_6ansg1_pri + $req_6ansg1_pri[0]["som"];
                                    $som_6ansf2_pri = $som_6ansf2_pri + $req_6ansf2_pri[0]["som"];
                                    $som_6ansg2_pri = $som_6ansg2_pri + $req_6ansg2_pri[0]["som"];
                                    $som_6ansf3_pri = $som_6ansf3_pri + $req_6ansf3_pri[0]["som"];
                                    $som_6ansg3_pri = $som_6ansg3_pri + $req_6ansg3_pri[0]["som"];
                                    $som_6ansf4_pri = $som_6ansf4_pri + $req_6ansf4_pri[0]["som"];
                                    $som_6ansg4_pri = $som_6ansg4_pri + $req_6ansg4_pri[0]["som"];
                                    $som_6ansf5_pri = $som_6ansf5_pri + $req_6ansf5_pri[0]["som"];
                                    $som_6ansg5_pri = $som_6ansg5_pri + $req_6ansg5_pri[0]["som"];
                                    $som_6ansf6_pri = $som_6ansf6_pri + $req_6ansf6_pri[0]["som"];
                                    $som_6ansg6_pri = $som_6ansg6_pri + $req_6ansg6_pri[0]["som"];

                                    $req_7_11f1_pri = query("SELECT SUM(age_7a10ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");
                                    $req_7_11g1_pri = query("SELECT SUM(age_7a10ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");

                                    $req_7_11f2_pri = query("SELECT SUM(age_7a10ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");
                                    $req_7_11g2_pri = query("SELECT SUM(age_7a10ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");

                                    $req_7_11f3_pri = query("SELECT SUM(age_7a10ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    $req_7_11g3_pri = query("SELECT SUM(age_7a10ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");

                                    $req_7_11f4_pri = query("SELECT SUM(age_7a10ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");
                                    $req_7_11g4_pri = query("SELECT SUM(age_7a10ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");

                                    $req_7_11f5_pri = query("SELECT SUM(age_7a10ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");
                                    $req_7_11g5_pri = query("SELECT SUM(age_7a10ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");

                                    $req_7_11f6_pri = query("SELECT SUM(age_7a10ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    $req_7_11g6_pri = query("SELECT SUM(age_7a10ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    
                                    $som_7_11ansf1_pri = $som_7_11ansf1_pri + $req_7_11f1_pri[0]["som"];
                                    $som_7_11ansg1_pri = $som_7_11ansg1_pri + $req_7_11g1_pri[0]["som"];
                                    $som_7_11ansf2_pri = $som_7_11ansf2_pri + $req_7_11f2_pri[0]["som"];
                                    $som_7_11ansg2_pri = $som_7_11ansg2_pri + $req_7_11g2_pri[0]["som"];
                                    $som_7_11ansf3_pri = $som_7_11ansf3_pri + $req_7_11f3_pri[0]["som"];
                                    $som_7_11ansg3_pri = $som_7_11ansg3_pri + $req_7_11g3_pri[0]["som"];
                                    $som_7_11ansf4_pri = $som_7_11ansf4_pri + $req_7_11f4_pri[0]["som"];
                                    $som_7_11ansg4_pri = $som_7_11ansg4_pri + $req_7_11g4_pri[0]["som"];
                                    $som_7_11ansf5_pri = $som_7_11ansf5_pri + $req_7_11f5_pri[0]["som"];
                                    $som_7_11ansg5_pri = $som_7_11ansg5_pri + $req_7_11g5_pri[0]["som"];
                                    $som_7_11ansf6_pri = $som_7_11ansf6_pri + $req_7_11f6_pri[0]["som"];
                                    $som_7_11ansg6_pri = $som_7_11ansg6_pri + $req_7_11g6_pri[0]["som"];


                                    $req_11f1_pri = query("SELECT SUM(age_11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");
                                    $req_11g1_pri = query("SELECT SUM(age_11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");

                                    $req_11f2_pri = query("SELECT SUM(age_11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");
                                    $req_11g2_pri = query("SELECT SUM(age_11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");

                                    $req_11f3_pri = query("SELECT SUM(age_11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    $req_11g3_pri = query("SELECT SUM(age_11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");

                                    $req_11f4_pri = query("SELECT SUM(age_11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");
                                    $req_11g4_pri = query("SELECT SUM(age_11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");

                                    $req_11f5_pri = query("SELECT SUM(age_11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");
                                    $req_11g5_pri = query("SELECT SUM(age_11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");

                                    $req_11f6_pri = query("SELECT SUM(age_11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    $req_11g6_pri = query("SELECT SUM(age_11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    
                                    $som_11ansf1_pri = $som_11ansf1_pri + $req_11f1_pri[0]["som"];
                                    $som_11ansg1_pri = $som_11ansg1_pri + $req_11g1_pri[0]["som"];
                                    $som_11ansf2_pri = $som_11ansf2_pri + $req_11f2_pri[0]["som"];
                                    $som_11ansg2_pri = $som_11ansg2_pri + $req_11g2_pri[0]["som"];
                                    $som_11ansf3_pri = $som_11ansf3_pri + $req_11f3_pri[0]["som"];
                                    $som_11ansg3_pri = $som_11ansg3_pri + $req_11g3_pri[0]["som"];
                                    $som_11ansf4_pri = $som_11ansf4_pri + $req_11f4_pri[0]["som"];
                                    $som_11ansg4_pri = $som_11ansg4_pri + $req_11g4_pri[0]["som"];
                                    $som_11ansf5_pri = $som_11ansf5_pri + $req_11f5_pri[0]["som"];
                                    $som_11ansg5_pri = $som_11ansg5_pri + $req_11g5_pri[0]["som"];
                                    $som_11ansf6_pri = $som_11ansf6_pri + $req_11f6_pri[0]["som"];
                                    $som_11ansg6_pri = $som_11ansg6_pri + $req_11g6_pri[0]["som"];


                                    $req_plus11f1_pri = query("SELECT SUM(age_plus11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");
                                    $req_plus11g1_pri = query("SELECT SUM(age_plus11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"1");

                                    $req_plus11f2_pri = query("SELECT SUM(age_plus11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");
                                    $req_plus11g2_pri = query("SELECT SUM(age_plus11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"2");

                                    $req_plus11f3_pri = query("SELECT SUM(age_plus11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");
                                    $req_plus11g3_pri = query("SELECT SUM(age_plus11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"3");

                                    $req_plus11f4_pri = query("SELECT SUM(age_plus11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");
                                    $req_plus11g4_pri = query("SELECT SUM(age_plus11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"4");

                                    $req_plus11f5_pri = query("SELECT SUM(age_plus11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");
                                    $req_plus11g5_pri = query("SELECT SUM(age_plus11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"5");

                                    $req_plus11f6_pri = query("SELECT SUM(age_plus11ansF) as som FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    $req_plus11g6_pri = query("SELECT SUM(age_plus11ansG) as som  FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$ecole2_["id"],"6");
                                    
                                    $som_plus_11ansf1_pri = $som_plus_11ansf1_pri + $req_plus11f1_pri[0]["som"];
                                    $som_plus_11ansg1_pri = $som_plus_11ansg1_pri + $req_plus11g1_pri[0]["som"];
                                    $som_plus_11ansf2_pri = $som_plus_11ansf2_pri + $req_plus11f2_pri[0]["som"];
                                    $som_plus_11ansg2_pri = $som_plus_11ansg2_pri + $req_plus11g2_pri[0]["som"];
                                    $som_plus_11ansf3_pri = $som_plus_11ansf3_pri + $req_plus11f3_pri[0]["som"];
                                    $som_plus_11ansg3_pri = $som_plus_11ansg3_pri + $req_plus11g3_pri[0]["som"];
                                    $som_plus_11ansf4_pri = $som_plus_11ansf4_pri + $req_plus11f4_pri[0]["som"];
                                    $som_plus_11ansg4_pri = $som_plus_11ansg4_pri + $req_plus11g4_pri[0]["som"];
                                    $som_plus_11ansf5_pri = $som_plus_11ansf5_pri + $req_plus11f5_pri[0]["som"];
                                    $som_plus_11ansg5_pri = $som_plus_11ansg5_pri + $req_plus11g5_pri[0]["som"];
                                    $som_plus_11ansf6_pri = $som_plus_11ansf6_pri + $req_plus11f6_pri[0]["som"];
                                    $som_plus_11ansg6_pri = $som_plus_11ansg6_pri + $req_plus11g6_pri[0]["som"];
                                }
                            }
                            
                             $nbr_m++;
                                echo "<tr >";
                                echo "<td rowspan='10'> $nbr_m</td>";
                                echo "<td rowspan='10'>". $paroisse_["nom_sous_div"]. "</td>";
                                 echo "<td rowspan='10' > </td>";
                                echo "<td rowspan='5'>Maternelle</td>";
                                //foreach ((array)$age as $key) {
                                    echo "<td >Moins 6 ans</td>"; 
                                    //for ($i=0; $i <3; $i++) {
                                        echo '<td style="background:gainsboro1">'.$som__6ansf1_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg1_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf1_mat  + $som__6ansg1_mat).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som__6ansf2_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg2_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf2_mat  + $som__6ansg2_mat).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som__6ansf3_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg3_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf3_mat  + $som__6ansg3_mat).'</td>';

                                        $tab__6ansf1_mat = $tab__6ansf1_mat+$som__6ansf1_mat;
                                        $tab__6ansg1_mat = $tab__6ansg1_mat+$som__6ansg1_mat;
                                        $tab__6ansf2_mat = $tab__6ansf2_mat+$som__6ansf2_mat;
                                        $tab__6ansg2_mat = $tab__6ansg2_mat+$som__6ansg2_mat;
                                        $tab__6ansf3_mat = $tab__6ansf3_mat+$som__6ansf3_mat;
                                        $tab__6ansg3_mat = $tab__6ansg3_mat+$som__6ansg3_mat;


                                
                                    //}
                                    //for ($i=0; $i <9; $i++) {
                                            echo '<td colspan="9" style="background:gainsboro"></td>';
                                    //}
                                        echo '<td style="background:gainsboro1">'.($som__6ansf1_mat+$som__6ansf2_mat+$som__6ansf3_mat).'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansg1_mat+$som__6ansg2_mat+$som__6ansg3_mat).'</td>';
                                        echo '<td style="background:gainsboro1">'.(($som__6ansf1_mat+$som__6ansf2_mat+$som__6ansf3_mat)+($som__6ansg1_mat+$som__6ansg2_mat+$som__6ansg3_mat)).'</td>';
                                     echo "</tr>";

                                        echo "<tr class='tr2'>";
                                        echo "<td > 6 ans</td>";
                                        echo '<td style="background:gainsboro1">'.$som_6ansf1_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg1_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf1_mat  + $som_6ansg1_mat).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_6ansf2_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg2_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf2_mat  + $som_6ansg2_mat).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_6ansf3_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg3_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf3_mat  + $som_6ansg3_mat).'</td>';

                                        $tab_6ansf1_mat = $tab_6ansf1_mat+$som_6ansf1_mat;
                                        $tab_6ansg1_mat = $tab_6ansg1_mat+$som_6ansg1_mat;
                                        $tab_6ansf2_mat = $tab_6ansf2_mat+$som_6ansf2_mat;
                                        $tab_6ansg2_mat = $tab_6ansg2_mat+$som_6ansg2_mat;
                                        $tab_6ansf3_mat = $tab_6ansf3_mat+$som_6ansf3_mat;
                                        $tab_6ansg3_mat = $tab_6ansg3_mat+$som_6ansg3_mat;


                                        //for ($i=0; $i <9; $i++) {
                                            echo '<td colspan="9" style="background:gainsboro"></td>';
                                        //}
                                         echo '<td style="background:gainsboro1">'.($som_6ansf1_mat+$som_6ansf2_mat+$som_6ansf3_mat).'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansg1_mat+$som_6ansg2_mat+$som_6ansg3_mat).'</td>';
                                        echo '<td style="background:gainsboro1">'.(($som_6ansf1_mat+$som_6ansf2_mat+$som_6ansf3_mat)+($som_6ansg1_mat+$som_6ansg2_mat+$som_6ansg3_mat)).'</td>';
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<td > 7 à 10 ans</td>";

                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf1_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg1_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf1_mat  + $som_7_11ansg1_mat).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf2_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg2_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf2_mat  + $som_7_11ansg2_mat).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf3_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg3_mat.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf3_mat  + $som_7_11ansg3_mat).'</td>';

                                        
                                        $tab_7_10ansf1_mat  = $tab_7_10ansf1_mat +$som_7_11ansf1_mat;
                                        $tab_7_10ansg1_mat  = $tab_7_10ansg1_mat +$som_7_11ansg1_mat;
                                        $tab_7_10ansf2_mat  = $tab_7_10ansf2_mat +$som_7_11ansf2_mat;
                                        $tab_7_10ansg2_mat  = $tab_7_10ansg2_mat +$som_7_11ansg2_mat;
                                        $tab_7_10ansf3_mat  = $tab_7_10ansf3_mat +$som_7_11ansf3_mat;
                                        $tab_7_10ansg3_mat  = $tab_7_10ansg3_mat +$som_7_11ansg3_mat;

                                        
                                        //for ($i=0; $i <9; $i++) {
                                            echo '<td colspan="9" style="background:gainsboro"></td>';
                                        //}

                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf1_mat+$som_7_11ansf2_mat+$som_7_11ansf3_mat).'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansg1_mat+$som_7_11ansg2_mat+$som_7_11ansg3_mat).'</td>';
                                        echo '<td style="background:gainsboro1">'.(($som_7_11ansf1_mat+$som_7_11ansf2_mat+$som_7_11ansf3_mat)+($som_7_11ansg1_mat+$som_7_11ansg2_mat+$som_7_11ansg3_mat)).'</td>';
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<td >11 ans</td>"; 
                                        //for ($i=0; $i <21; $i++) {
                                                echo '<td colspan="21" style="background:gainsboro"></td>';
                                        //}
                                         echo "</tr>";
                                          echo "<tr>";
                                        echo "<td >Plus de 11 ans</td>"; 
                                       // for ($i=0; $i <21; $i++) {
                                                echo '<td colspan="21" style="background:gainsboro"></td>';
                                        //}
                                         echo "</tr>";
                                //}

                                echo "<td rowspan='5'>Primaire</td>";
                                echo "<td >Moins 6 ans</td>"; 
                                    //for ($i=0; $i <3; $i++) {
                                        echo '<td style="background:gainsboro1">'.$som__6ansf1_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg1_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf1_pri  + $som__6ansg1_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som__6ansf2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf2_pri  + $som__6ansg2_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som__6ansf3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf3_pri  + $som__6ansg3_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som__6ansf4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf4_pri  + $som__6ansg4_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som__6ansf5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf5_pri  + $som__6ansg5_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som__6ansf6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som__6ansg6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansf6_pri  + $som__6ansg6_pri).'</td>';
                                        
                                    //}
                                    
                                        echo '<td style="background:gainsboro1">'.($som__6ansf1_pri+$som__6ansf2_pri+$som__6ansf3_pri + $som__6ansf4_pri+$som__6ansf5_pri+$som__6ansf6_pri).'</td>';
                                        echo '<td style="background:gainsboro1">'.($som__6ansg1_pri+$som__6ansg2_pri+$som__6ansg3_pri+$som__6ansg4_pri+$som__6ansg5_pri+$som__6ansg6_pri).'</td>';
                                        echo '<td style="background:gainsboro1">'.(($som__6ansf1_pri+$som__6ansf2_pri+$som__6ansf3_pri + $som__6ansf4_pri+$som__6ansf5_pri+$som__6ansf6_pri)+($som__6ansg1_pri+$som__6ansg2_pri+$som__6ansg3_pri+$som__6ansg4_pri+$som__6ansg5_pri+$som__6ansg6_pri)).'</td>';
                                     echo "</tr>";

                                      $tab__6ansf1_pri = $tab__6ansf1_pri+$som__6ansf1_pri;
                                        $tab__6ansg1_pri = $tab__6ansg1_pri+$som__6ansg1_pri;
                                        $tab__6ansf2_pri = $tab__6ansf2_pri+$som__6ansf2_pri;
                                        $tab__6ansg2_pri = $tab__6ansg2_pri+$som__6ansg2_pri;
                                        $tab__6ansf3_pri = $tab__6ansf3_pri+$som__6ansf3_pri;
                                        $tab__6ansg3_pri = $tab__6ansg3_pri+$som__6ansg3_pri;
                                        $tab__6ansf4_pri = $tab__6ansf4_pri+$som__6ansf4_pri;
                                        $tab__6ansg4_pri = $tab__6ansg4_pri+$som__6ansg4_pri;
                                        $tab__6ansf5_pri = $tab__6ansf5_pri+$som__6ansf5_pri;
                                        $tab__6ansg5_pri = $tab__6ansg5_pri+$som__6ansg5_pri;
                                        $tab__6ansf6_pri = $tab__6ansf6_pri+$som__6ansf6_pri;
                                        $tab__6ansg6_pri = $tab__6ansg6_pri+$som__6ansg6_pri;
                                 
                                


                                    echo "<tr class='tr2'>"; 
                                     echo "<td >6 ans</td>"; 
                                    //for ($i=0; $i <3; $i++) {
                                        echo '<td style="background:gainsboro1">'.$som_6ansf1_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg1_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf1_pri  + $som_6ansg1_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_6ansf2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf2_pri  + $som_6ansg2_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_6ansf3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf3_pri  + $som_6ansg3_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_6ansf4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf4_pri  + $som_6ansg4_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_6ansf5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf5_pri  + $som_6ansg5_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_6ansf6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_6ansg6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansf6_pri  + $som_6ansg6_pri).'</td>';
                                        
                                    //}
                                    
                                        echo '<td style="background:gainsboro1">'.($som_6ansf1_pri+$som_6ansf2_pri+$som_6ansf3_pri + $som_6ansf4_pri+$som_6ansf5_pri+$som_6ansf6_pri).'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_6ansg1_pri+$som_6ansg2_pri+$som_6ansg3_pri+$som_6ansg4_pri+$som_6ansg5_pri+$som_6ansg6_pri).'</td>';
                                        echo '<td style="background:gainsboro1">'.(($som_6ansf1_pri+$som_6ansf2_pri+$som_6ansf3_pri + $som_6ansf4_pri+$som_6ansf5_pri+$som_6ansf6_pri)+($som_6ansg1_pri+$som_6ansg2_pri+$som_6ansg3_pri+$som_6ansg4_pri+$som_6ansg5_pri+$som_6ansg6_pri)).'</td>';
                                     echo "</tr>";

                                      $tab_6ansf1_pri = $tab_6ansf1_pri+$som_6ansf1_pri;
                                        $tab_6ansg1_pri = $tab_6ansg1_pri+$som_6ansg1_pri;
                                        $tab_6ansf2_pri = $tab_6ansf2_pri+$som_6ansf2_pri;
                                        $tab_6ansg2_pri = $tab_6ansg2_pri+$som_6ansg2_pri;
                                        $tab_6ansf3_pri = $tab_6ansf3_pri+$som_6ansf3_pri;
                                        $tab_6ansg3_pri = $tab_6ansg3_pri+$som_6ansg3_pri;
                                        $tab_6ansf4_pri = $tab_6ansf4_pri+$som_6ansf4_pri;
                                        $tab_6ansg4_pri = $tab_6ansg4_pri+$som_6ansg4_pri;
                                        $tab_6ansf5_pri = $tab_6ansf5_pri+$som_6ansf5_pri;
                                        $tab_6ansg5_pri = $tab_6ansg5_pri+$som_6ansg5_pri;
                                        $tab_6ansf6_pri = $tab_6ansf6_pri+$som_6ansf6_pri;
                                        $tab_6ansg6_pri = $tab_6ansg6_pri+$som_6ansg6_pri;
                            




                             echo "<tr>"; 
                                     echo "<td >7 à 10 ans</td>"; 
                                    
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf1_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg1_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf1_pri  + $som_7_11ansg1_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf2_pri  + $som_7_11ansg2_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf3_pri  + $som_7_11ansg3_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf4_pri  + $som_7_11ansg4_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf5_pri  + $som_7_11ansg5_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_7_11ansf6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_7_11ansg6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf6_pri  + $som_7_11ansg6_pri).'</td>';
                                   
                                    
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansf1_pri+$som_7_11ansf2_pri+$som_7_11ansf3_pri + $som_7_11ansf4_pri+$som_7_11ansf5_pri+$som_7_11ansf6_pri).'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_7_11ansg1_pri+$som_7_11ansg2_pri+$som_7_11ansg3_pri + $som_7_11ansg4_pri+$som_7_11ansg5_pri+$som_7_11ansg6_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.(($som_7_11ansf1_pri+$som_7_11ansf2_pri+$som_7_11ansf3_pri + $som_7_11ansf4_pri+$som_7_11ansf5_pri+$som_7_11ansf6_pri)+($som_7_11ansg1_pri+$som_7_11ansg2_pri+$som_7_11ansg3_pri + $som_7_11ansg4_pri+$som_7_11ansg5_pri+$som_7_11ansg6_pri)).'</td>';
                                     echo "</tr>";

                                        $tab_7_10ansf1_pri  = $tab_7_10ansf1_pri +$som_7_11ansf1_pri;
                                        $tab_7_10ansg1_pri  = $tab_7_10ansg1_pri +$som_7_11ansg1_pri;
                                        $tab_7_10ansf2_pri  = $tab_7_10ansf2_pri +$som_7_11ansf2_pri;
                                        $tab_7_10ansg2_pri  = $tab_7_10ansg2_pri +$som_7_11ansg2_pri;
                                        $tab_7_10ansf3_pri  = $tab_7_10ansf3_pri +$som_7_11ansf3_pri;
                                        $tab_7_10ansg3_pri  = $tab_7_10ansg3_pri +$som_7_11ansg3_pri;
                                        $tab_7_10ansf4_pri  = $tab_7_10ansf4_pri +$som_7_11ansf4_pri;
                                        $tab_7_10ansg4_pri  = $tab_7_10ansg4_pri +$som_7_11ansg4_pri;
                                        $tab_7_10ansf5_pri  = $tab_7_10ansf5_pri +$som_7_11ansf5_pri;
                                        $tab_7_10ansg5_pri  = $tab_7_10ansg5_pri +$som_7_11ansg5_pri;
                                        $tab_7_10ansf6_pri  = $tab_7_10ansf6_pri +$som_7_11ansf6_pri;
                                        $tab_7_10ansg6_pri  = $tab_7_10ansg6_pri +$som_7_11ansg6_pri;




                                      echo "<tr class='tr2'>"; 
                                     echo "<td > 11 ans</td>"; 
                                    
                                        echo '<td style="background:gainsboro1">'.$som_11ansf1_pri .'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_11ansg1_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_11ansf1_pri  + $som_11ansg1_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_11ansf2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_11ansg2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_11ansf2_pri  + $som_11ansg2_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_11ansf3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_11ansg3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_11ansf3_pri  + $som_11ansg3_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_11ansf4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_11ansg4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_11ansf4_pri  + $som_11ansg4_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_11ansf5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_11ansg5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_11ansf5_pri  + $som_11ansg5_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_11ansf6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_11ansg6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_11ansf6_pri  + $som_11ansg6_pri).'</td>';
                                   
                                    
                                        echo '<td style="background:gainsboro1">'.($som_11ansf1_pri+$som_11ansf2_pri+$som_11ansf3_pri + $som_11ansf4_pri+$som_11ansf5_pri+$som_11ansf6_pri).'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_11ansg1_pri+$som_11ansg2_pri+$som_11ansg3_pri + $som_11ansg4_pri+$som_11ansg5_pri+$som_11ansg6_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.(($som_11ansf1_pri+$som_11ansf2_pri+$som_11ansf3_pri + $som_11ansf4_pri+$som_11ansf5_pri+$som_11ansf6_pri)+($som_11ansg1_pri+$som_11ansg2_pri+$som_11ansg3_pri + $som_11ansg4_pri+$som_11ansg5_pri+$som_11ansg6_pri)).'</td>';
                                     echo "</tr>";

                                     
                                        $tab_11ansf1_pri  = $tab_11ansf1_pri +$som_11ansf1_pri;
                                        $tab_11ansg1_pri  = $tab_11ansg1_pri +$som_11ansg1_pri;
                                        $tab_11ansf2_pri  = $tab_11ansf2_pri +$som_11ansf2_pri;
                                        $tab_11ansg2_pri  = $tab_11ansg2_pri +$som_11ansg2_pri;
                                        $tab_11ansf3_pri  = $tab_11ansf3_pri +$som_11ansf3_pri;
                                        $tab_11ansg3_pri  = $tab_11ansg3_pri +$som_11ansg3_pri;
                                        $tab_11ansf4_pri  = $tab_11ansf4_pri +$som_11ansf4_pri;
                                        $tab_11ansg4_pri  = $tab_11ansg4_pri +$som_11ansg4_pri;
                                        $tab_11ansf5_pri  = $tab_11ansf5_pri +$som_11ansf5_pri;
                                        $tab_11ansg5_pri  = $tab_11ansg5_pri +$som_11ansg5_pri;
                                        $tab_11ansf6_pri  = $tab_11ansf6_pri +$som_11ansf6_pri;
                                        $tab_11ansg6_pri  = $tab_11ansg6_pri +$som_11ansg6_pri;





                                     echo "<tr>"; 
                                     echo "<td >Plus de 11 ans</td>"; 
                                    
                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansf1_pri .'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansg1_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_plus_11ansf1_pri  + $som_plus_11ansg1_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansf2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansg2_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_plus_11ansf2_pri  + $som_plus_11ansg2_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansf3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansg3_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_plus_11ansf3_pri  + $som_plus_11ansg3_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansf4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansg4_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_plus_11ansf4_pri  + $som_plus_11ansg4_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansf5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansg5_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_plus_11ansf5_pri  + $som_plus_11ansg5_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansf6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.$som_plus_11ansg6_pri.'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_plus_11ansf6_pri  + $som_plus_11ansg6_pri).'</td>';
                                   
                                    
                                        echo '<td style="background:gainsboro1">'.($som_plus_11ansf1_pri+$som_plus_11ansf2_pri+$som_plus_11ansf3_pri + $som_plus_11ansf4_pri+$som_plus_11ansf5_pri+$som_plus_11ansf6_pri).'</td>';
                                        echo '<td style="background:gainsboro1">'.($som_plus_11ansg1_pri+$som_plus_11ansg2_pri+$som_plus_11ansg3_pri + $som_plus_11ansg4_pri+$som_plus_11ansg5_pri+$som_plus_11ansg6_pri).'</td>';

                                        echo '<td style="background:gainsboro1">'.(($som_plus_11ansf1_pri+$som_plus_11ansf2_pri+$som_plus_11ansf3_pri + $som_plus_11ansf4_pri+$som_plus_11ansf5_pri+$som_plus_11ansf6_pri)+($som_plus_11ansg1_pri+$som_plus_11ansg2_pri+$som_plus_11ansg3_pri + $som_plus_11ansg4_pri+$som_plus_11ansg5_pri+$som_plus_11ansg6_pri)).'</td>';
                                     echo "</tr>";

                                     //tab_plus_11ansf1_pri
                                        $tab_plus_11ansf1_pri  = $tab_plus_11ansf1_pri +$som_plus_11ansf1_pri;
                                        $tab_plus_11ansg1_pri  = $tab_plus_11ansg1_pri +$som_plus_11ansg1_pri;
                                        $tab_plus_11ansf2_pri  = $tab_plus_11ansf2_pri +$som_plus_11ansf2_pri;
                                        $tab_plus_11ansg2_pri  = $tab_plus_11ansg2_pri +$som_plus_11ansg2_pri;
                                        $tab_plus_11ansf3_pri  = $tab_plus_11ansf3_pri +$som_plus_11ansf3_pri;
                                        $tab_plus_11ansg3_pri  = $tab_plus_11ansg3_pri +$som_plus_11ansg3_pri;
                                        $tab_plus_11ansf4_pri  = $tab_plus_11ansf4_pri +$som_plus_11ansf4_pri;
                                        $tab_plus_11ansg4_pri  = $tab_plus_11ansg4_pri +$som_plus_11ansg4_pri;
                                        $tab_plus_11ansf5_pri  = $tab_plus_11ansf5_pri +$som_plus_11ansf5_pri;
                                        $tab_plus_11ansg5_pri  = $tab_plus_11ansg5_pri +$som_plus_11ansg5_pri;
                                        $tab_plus_11ansf6_pri  = $tab_plus_11ansf6_pri +$som_plus_11ansf6_pri;
                                        $tab_plus_11ansg6_pri  = $tab_plus_11ansg6_pri +$som_plus_11ansg6_pri;
                            

                        }
                        echo "<tr class='tr'>";

                        /*tab__6ansf1_mat
                        tab_6ansf1_mat
                        tab_7_10ansf1_mat*/
                           
                            echo "<td colspan='4'>S/TOTAL [MATERNELLE]</td>";
                            echo "<td > moins 6ans</td>";
                             echo "<td>$tab__6ansf1_mat</td>";
                             echo "<td>$tab__6ansg1_mat</td>";
                             echo "<td>".($tab__6ansf1_mat+$tab__6ansg1_mat)."</td>";

                              echo "<td>$tab__6ansf2_mat</td>";
                             echo "<td>$tab__6ansg2_mat</td>";
                             echo "<td>".($tab__6ansf2_mat+$tab__6ansg2_mat)."</td>";

                              echo "<td>$tab__6ansf3_mat</td>";
                             echo "<td>$tab__6ansg3_mat</td>";
                             echo "<td>".($tab__6ansf3_mat+$tab__6ansg3_mat)."</td>";


                           
                            //for ($i=0; $i <9; $i++) {
                                echo "<td colspan='9' style='background:gainsboro'></td>";
                            //}  


                             echo "<td>".($tab__6ansf1_mat+$tab__6ansf2_mat + $tab__6ansf3_mat)."</td>";
                             echo "<td>".($tab__6ansg1_mat+$tab__6ansg2_mat + $tab__6ansg3_mat)."</td>";
                             echo "<td>".(($tab__6ansf1_mat+$tab__6ansf2_mat + $tab__6ansf3_mat)
                                +($tab__6ansg1_mat+$tab__6ansg2_mat + $tab__6ansg3_mat))."</td>";
                            
                           echo " </tr>";

                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>S/TOTAL [MATERNELLE]</td>";
                            echo "<td > 6 ans</td>";
                           
                           echo "<td>$tab_6ansf1_mat</td>";
                             echo "<td>$tab_6ansg1_mat</td>";
                             echo "<td>".($tab_6ansf1_mat+$tab_6ansg1_mat)."</td>";

                              echo "<td>$tab_6ansf2_mat</td>";
                             echo "<td>$tab_6ansg2_mat</td>";
                             echo "<td>".($tab_6ansf2_mat+$tab_6ansg2_mat)."</td>";

                              echo "<td>$tab_6ansf3_mat</td>";
                             echo "<td>$tab_6ansg3_mat</td>";
                             echo "<td>".($tab_6ansf3_mat+$tab_6ansg3_mat)."</td>";


                           
                            //for ($i=0; $i <9; $i++) {
                                echo "<td colspan='9' style='background:gainsboro'></td>";
                            //}  


                             echo "<td>".($tab_6ansf1_mat+$tab_6ansf2_mat + $tab_6ansf3_mat)."</td>";
                             echo "<td>".($tab_6ansg1_mat+$tab_6ansg2_mat + $tab_6ansg3_mat)."</td>";
                             echo "<td>".(($tab_6ansf1_mat+$tab_6ansf2_mat + $tab_6ansf3_mat)
                                +($tab_6ansg1_mat+$tab_6ansg2_mat + $tab_6ansg3_mat))."</td>"; 
                           echo " </tr>";

                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>S/TOTAL [MATERNELLE]</td>";
                            echo "<td > 7 à 10 ans</td>";
                           /*tab_7_10ansf1_mat
                            for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            }  */
                            echo "<td>$tab_7_10ansf1_mat</td>";
                             echo "<td>$tab_7_10ansg1_mat</td>";
                             echo "<td>".($tab_7_10ansf1_mat+$tab_7_10ansg1_mat)."</td>";

                              echo "<td>$tab_7_10ansf2_mat</td>";
                             echo "<td>$tab_7_10ansg2_mat</td>";
                             echo "<td>".($tab_7_10ansf2_mat+$tab_7_10ansg2_mat)."</td>";

                              echo "<td>$tab_7_10ansf3_mat</td>";
                             echo "<td>$tab_7_10ansg3_mat</td>";
                             echo "<td>".($tab_7_10ansf3_mat+$tab_7_10ansg3_mat)."</td>";
                            echo "<td colspan='9' style='background:gainsboro'></td>";
                            echo "<td>".($tab_7_10ansf1_mat+$tab_7_10ansf2_mat + $tab_7_10ansf3_mat)."</td>";
                             echo "<td>".($tab_7_10ansg1_mat+$tab_7_10ansg2_mat + $tab_7_10ansg3_mat)."</td>";
                             echo "<td>".(($tab_7_10ansf1_mat+$tab_7_10ansf2_mat + $tab_7_10ansf3_mat)
                                +($tab_7_10ansg1_mat+$tab_7_10ansg2_mat + $tab_7_10ansg3_mat))."</td>"; 
                           echo " </tr>";

                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>S/TOTAL [MATERNELLE]</td>";
                            echo "<td > 11 ans</td>";
                           
                            /*for ($i=0; $i <21; $i++) {
                                
                            }  */
                            echo "<td colspan='21' style='background:gainsboro'></td>";
                           echo " </tr>";

                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>S/TOTAL [MATERNELLE]</td>";
                            echo "<td > Plus de 11 ans</td>";
                           
                            /*for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            } */ 
                            echo "<td colspan='21' style='background:gainsboro'></td>";
                           echo " </tr>"; 






                           echo "<tr class='tr1'>";
                           
                            echo "<td colspan='4'>S/TOTAL [PRIMAIRE]</td>";
                            echo "<td > moins 6ans</td>";
                           
                           /* for ($i=0; $i <21; $i++) {
                                echo "<td>0</td>";
                            }  */
                            echo "<td>$tab__6ansf1_pri</td>";
                            echo "<td>$tab__6ansg1_pri</td>";
                            echo "<td>".($tab__6ansf1_pri+$tab__6ansg1_pri)."</td>";

                            echo "<td>$tab__6ansf2_pri</td>";
                            echo "<td>$tab__6ansg2_pri</td>";
                            echo "<td>".($tab__6ansf2_pri+$tab__6ansg2_pri)."</td>";

                            echo "<td>$tab__6ansf3_pri</td>";
                            echo "<td>$tab__6ansg3_pri</td>";
                            echo "<td>".($tab__6ansf3_pri+$tab__6ansg3_pri)."</td>";

                            echo "<td>$tab__6ansf4_pri</td>";
                            echo "<td>$tab__6ansg4_pri</td>";
                            echo "<td>".($tab__6ansf4_pri+$tab__6ansg4_pri)."</td>";

                            echo "<td>$tab__6ansf5_pri</td>";
                            echo "<td>$tab__6ansg5_pri</td>";
                            echo "<td>".($tab__6ansf5_pri+$tab__6ansg5_pri)."</td>";

                            echo "<td>$tab__6ansf6_pri</td>";
                            echo "<td>$tab__6ansg6_pri</td>";
                            echo "<td>".($tab__6ansf6_pri+$tab__6ansg6_pri)."</td>";


                            echo "<td>".($tab__6ansf1_pri+$tab__6ansf2_pri + $tab__6ansf3_pri + $tab__6ansf4_pri + $tab__6ansf5_pri + $tab__6ansf6_pri)."</td>";

                            echo "<td>".($tab__6ansg1_pri+$tab__6ansg2_pri + $tab__6ansg3_pri +$tab__6ansg4_pri + $tab__6ansg5_pri  + $tab__6ansg6_pri)."</td>";
                            echo "<td>".(($tab__6ansf1_pri+$tab__6ansf2_pri + $tab__6ansf3_pri + $tab__6ansf4_pri + $tab__6ansf5_pri + $tab__6ansf6_pri)
                                +($tab__6ansg1_pri+$tab__6ansg2_pri + $tab__6ansg3_pri +$tab__6ansg4_pri + $tab__6ansg5_pri  + $tab__6ansg6_pri))."</td>";
                           echo " </tr>";

                           echo "<tr class='tr1'>";
                           
                            echo "<td colspan='4'>S/TOTAL [PRIMAIRE]</td>";
                            echo "<td > 6 ans</td>";
                           
                           /* for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            }  */

                            echo "<td>$tab_6ansf1_pri</td>";
                            echo "<td>$tab_6ansg1_pri</td>";
                            echo "<td>".($tab_6ansf1_pri+$tab_6ansg1_pri)."</td>";

                            echo "<td>$tab_6ansf2_pri</td>";
                            echo "<td>$tab_6ansg2_pri</td>";
                            echo "<td>".($tab_6ansf2_pri+$tab_6ansg2_pri)."</td>";

                            echo "<td>$tab_6ansf3_pri</td>";
                            echo "<td>$tab_6ansg3_pri</td>";
                            echo "<td>".($tab_6ansf3_pri+$tab_6ansg3_pri)."</td>";

                            echo "<td>$tab_6ansf4_pri</td>";
                            echo "<td>$tab_6ansg4_pri</td>";
                            echo "<td>".($tab_6ansf4_pri+$tab_6ansg4_pri)."</td>";

                            echo "<td>$tab_6ansf5_pri</td>";
                            echo "<td>$tab_6ansg5_pri</td>";
                            echo "<td>".($tab_6ansf5_pri+$tab_6ansg5_pri)."</td>";

                            echo "<td>$tab_6ansf6_pri</td>";
                            echo "<td>$tab_6ansg6_pri</td>";
                            echo "<td>".($tab_6ansf6_pri+$tab_6ansg6_pri)."</td>";


                            echo "<td>".($tab_6ansf1_pri+$tab_6ansf2_pri + $tab_6ansf3_pri + $tab_6ansf4_pri + $tab_6ansf5_pri + $tab_6ansf6_pri)."</td>";

                            echo "<td>".($tab_6ansg1_pri+$tab_6ansg2_pri + $tab_6ansg3_pri +$tab_6ansg4_pri + $tab_6ansg5_pri  + $tab_6ansg6_pri)."</td>";
                            echo "<td>".(($tab_6ansf1_pri+$tab_6ansf2_pri + $tab_6ansf3_pri + $tab_6ansf4_pri + $tab_6ansf5_pri + $tab_6ansf6_pri)
                                +($tab_6ansg1_pri+$tab_6ansg2_pri + $tab_6ansg3_pri +$tab_6ansg4_pri + $tab_6ansg5_pri  + $tab_6ansg6_pri))."</td>";
                           echo " </tr>";

                           echo "<tr class='tr1'>";
                           
                            echo "<td colspan='4'>S/TOTAL [PRIMAIRE]</td>";
                            echo "<td > 7 à 10 ans</td>";
                           
                            /*for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            }*/ 
                            echo "<td>$tab_7_10ansf1_pri</td>";
                             echo "<td>$tab_7_10ansg1_pri</td>";
                             echo "<td>".($tab_7_10ansf1_pri+$tab_7_10ansg1_pri)."</td>";

                              echo "<td>$tab_7_10ansf2_pri</td>";
                             echo "<td>$tab_7_10ansg2_pri</td>";
                             echo "<td>".($tab_7_10ansf2_pri+$tab_7_10ansg2_pri)."</td>";

                              echo "<td>$tab_7_10ansf3_pri</td>";
                             echo "<td>$tab_7_10ansg3_pri</td>";
                             echo "<td>".($tab_7_10ansf3_pri+$tab_7_10ansg3_pri)."</td>";

                             echo "<td>$tab_7_10ansf4_pri</td>";
                             echo "<td>$tab_7_10ansg4_pri</td>";
                             echo "<td>".($tab_7_10ansf4_pri+$tab_7_10ansg4_pri)."</td>";

                             echo "<td>$tab_7_10ansf5_pri</td>";
                             echo "<td>$tab_7_10ansg5_pri</td>";
                             echo "<td>".($tab_7_10ansf5_pri+$tab_7_10ansg5_pri)."</td>";

                             echo "<td>$tab_7_10ansf6_pri</td>";
                             echo "<td>$tab_7_10ansg6_pri</td>";
                             echo "<td>".($tab_7_10ansf6_pri+$tab_7_10ansg6_pri)."</td>";

                            echo "<td>".($tab_7_10ansf1_pri+$tab_7_10ansf2_pri + $tab_7_10ansf3_pri + $tab_7_10ansf4_pri+ $tab_7_10ansf5_pri+ $tab_7_10ansf6_pri)."</td>";
                             echo "<td>".($tab_7_10ansg1_pri+$tab_7_10ansg2_pri + $tab_7_10ansg3_pri + $tab_7_10ansg4_pri+ $tab_7_10ansg5_pri+ $tab_7_10ansg6_pri)."</td>";
                             echo "<td>".(($tab_7_10ansf1_pri+$tab_7_10ansf2_pri + $tab_7_10ansf3_pri + $tab_7_10ansf4_pri+ $tab_7_10ansf5_pri+ $tab_7_10ansf6_pri)
                                +($tab_7_10ansg1_pri+$tab_7_10ansg2_pri + $tab_7_10ansg3_pri + $tab_7_10ansg4_pri+ $tab_7_10ansg5_pri+ $tab_7_10ansg6_pri))."</td>";  
                           echo " </tr>";

                           echo "<tr class='tr1'>";
                           
                            echo "<td colspan='4'>S/TOTAL [PRIMAIRE]</td>";
                            echo "<td > 11 ans</td>";
                           
                            /*for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            }  tab_11ansf1_pri*/
                            echo "<td>$tab_11ansf1_pri</td>";
                             echo "<td>$tab_11ansg1_pri</td>";
                             echo "<td>".($tab_11ansf1_pri+$tab_11ansg1_pri)."</td>";

                              echo "<td>$tab_11ansf2_pri</td>";
                             echo "<td>$tab_11ansg2_pri</td>";
                             echo "<td>".($tab_11ansf2_pri+$tab_11ansg2_pri)."</td>";

                              echo "<td>$tab_11ansf3_pri</td>";
                             echo "<td>$tab_11ansg3_pri</td>";
                             echo "<td>".($tab_11ansf3_pri+$tab_11ansg3_pri)."</td>";

                             echo "<td>$tab_11ansf4_pri</td>";
                             echo "<td>$tab_11ansg4_pri</td>";
                             echo "<td>".($tab_11ansf4_pri+$tab_11ansg4_pri)."</td>";

                             echo "<td>$tab_11ansf5_pri</td>";
                             echo "<td>$tab_11ansg5_pri</td>";
                             echo "<td>".($tab_11ansf5_pri+$tab_11ansg5_pri)."</td>";

                             echo "<td>$tab_11ansf6_pri</td>";
                             echo "<td>$tab_11ansg6_pri</td>";
                             echo "<td>".($tab_11ansf6_pri+$tab_11ansg6_pri)."</td>";

                            echo "<td>".($tab_11ansf1_pri+$tab_11ansf2_pri + $tab_11ansf3_pri + $tab_11ansf4_pri+ $tab_11ansf5_pri+ $tab_11ansf6_pri)."</td>";
                             echo "<td>".($tab_11ansg1_pri+$tab_11ansg2_pri + $tab_11ansg3_pri + $tab_11ansg4_pri+ $tab_11ansg5_pri+ $tab_11ansg6_pri)."</td>";
                             echo "<td>".(($tab_11ansf1_pri+$tab_11ansf2_pri + $tab_11ansf3_pri + $tab_11ansf4_pri+ $tab_11ansf5_pri+ $tab_11ansf6_pri)
                                +($tab_11ansg1_pri+$tab_11ansg2_pri + $tab_11ansg3_pri + $tab_11ansg4_pri+ $tab_11ansg5_pri+ $tab_11ansg6_pri))."</td>";  
                           echo " </tr>";

                           echo "<tr class='tr1'>";
                           
                            echo "<td colspan='4'>S/TOTAL [PRIMAIRE]</td>";
                            echo "<td > Plus de 11 ans</td>";
                           
                            /*for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            }  tab_plus_11ansf1_pri*/
                            echo "<td>$tab_plus_11ansf1_pri</td>";
                             echo "<td>$tab_plus_11ansg1_pri</td>";
                             echo "<td>".($tab_plus_11ansf1_pri+$tab_plus_11ansg1_pri)."</td>";

                              echo "<td>$tab_plus_11ansf2_pri</td>";
                             echo "<td>$tab_plus_11ansg2_pri</td>";
                             echo "<td>".($tab_plus_11ansf2_pri+$tab_plus_11ansg2_pri)."</td>";

                              echo "<td>$tab_plus_11ansf3_pri</td>";
                             echo "<td>$tab_plus_11ansg3_pri</td>";
                             echo "<td>".($tab_plus_11ansf3_pri+$tab_plus_11ansg3_pri)."</td>";

                             echo "<td>$tab_plus_11ansf4_pri</td>";
                             echo "<td>$tab_plus_11ansg4_pri</td>";
                             echo "<td>".($tab_plus_11ansf4_pri+$tab_plus_11ansg4_pri)."</td>";

                             echo "<td>$tab_plus_11ansf5_pri</td>";
                             echo "<td>$tab_plus_11ansg5_pri</td>";
                             echo "<td>".($tab_plus_11ansf5_pri+$tab_plus_11ansg5_pri)."</td>";

                             echo "<td>$tab_plus_11ansf6_pri</td>";
                             echo "<td>$tab_plus_11ansg6_pri</td>";
                             echo "<td>".($tab_plus_11ansf6_pri+$tab_plus_11ansg6_pri)."</td>";

                            echo "<td>".($tab_plus_11ansf1_pri+$tab_plus_11ansf2_pri + $tab_plus_11ansf3_pri + $tab_plus_11ansf4_pri+ $tab_plus_11ansf5_pri+ $tab_plus_11ansf6_pri)."</td>";
                             echo "<td>".($tab_plus_11ansg1_pri+$tab_plus_11ansg2_pri + $tab_plus_11ansg3_pri + $tab_plus_11ansg4_pri+ $tab_plus_11ansg5_pri+ $tab_plus_11ansg6_pri)."</td>";
                             echo "<td>".(($tab_plus_11ansf1_pri+$tab_plus_11ansf2_pri + $tab_plus_11ansf3_pri + $tab_plus_11ansf4_pri+ $tab_plus_11ansf5_pri+ $tab_plus_11ansf6_pri)
                                +($tab_plus_11ansg1_pri+$tab_plus_11ansg2_pri + $tab_plus_11ansg3_pri + $tab_plus_11ansg4_pri+ $tab_plus_11ansg5_pri+ $tab_plus_11ansg6_pri))."</td>"; 
                           echo " </tr>"; 






                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>TOTAL GENERAL</td>";
                            echo "<td > moins 6ans</td>";

                            
                                echo "<td>".($tab__6ansf1_mat+$tab__6ansf1_pri)."</td>";
                                echo "<td>".($tab__6ansg1_mat+$tab__6ansg1_pri)."</td>";

                                echo "<td>".($tab__6ansg1_mat+$tab__6ansg1_pri +$tab__6ansf1_mat +$tab__6ansf1_pri)."</td>";

                                echo "<td>".($tab__6ansf2_mat+$tab__6ansf2_pri)."</td>";
                                echo "<td>".($tab__6ansg2_mat+$tab__6ansg2_pri)."</td>";

                                echo "<td>".($tab__6ansg2_mat+$tab__6ansg2_pri +$tab__6ansf2_mat +$tab__6ansf2_pri)."</td>";


                                echo "<td>".($tab__6ansf3_mat+$tab__6ansf3_pri)."</td>";
                                echo "<td>".($tab__6ansg3_mat+$tab__6ansg3_pri)."</td>";

                                echo "<td>".($tab__6ansg3_mat+$tab__6ansg3_pri +$tab__6ansf3_mat +$tab__6ansf3_pri)."</td>";


                                echo "<td>".($tab__6ansf4_mat+$tab__6ansf4_pri)."</td>";
                                echo "<td>".($tab__6ansg4_mat+$tab__6ansg4_pri)."</td>";

                                echo "<td>".($tab__6ansg4_mat+$tab__6ansg4_pri +$tab__6ansf4_mat +$tab__6ansf4_pri)."</td>";


                                echo "<td>".($tab__6ansf5_mat+$tab__6ansf5_pri)."</td>";
                                echo "<td>".($tab__6ansg5_mat+$tab__6ansg5_pri)."</td>";

                                echo "<td>".($tab__6ansg5_mat+$tab__6ansg5_pri +$tab__6ansf5_mat +$tab__6ansf5_pri)."</td>";


                                echo "<td>".($tab__6ansf6_mat+$tab__6ansf6_pri)."</td>";
                                echo "<td>".($tab__6ansg6_mat+$tab__6ansg6_pri)."</td>";

                                echo "<td>".($tab__6ansg6_mat+$tab__6ansg6_pri +$tab__6ansf6_mat +$tab__6ansf6_pri)."</td>";


                           
                            /*for ($i=0; $i <3; $i++) {
                                echo "<td>0</td>";
                            } */
                            //tab__6ansf1_mat
                                echo "<td>".($tab__6ansf1_mat+$tab__6ansf1_pri + $tab__6ansf2_mat+$tab__6ansf2_pri + $tab__6ansf3_mat+$tab__6ansf3_pri +$tab__6ansf4_mat+$tab__6ansf4_pri+ $tab__6ansf5_mat+$tab__6ansf5_pri +$tab__6ansf6_mat+$tab__6ansf6_pri)."</td>";

                                echo "<td>".($tab__6ansg1_mat+$tab__6ansg1_pri + $tab__6ansg2_mat+$tab__6ansg2_pri + $tab__6ansg3_mat+$tab__6ansg3_pri +$tab__6ansg4_mat+$tab__6ansg4_pri+ $tab__6ansg5_mat+$tab__6ansg5_pri +$tab__6ansg6_mat+$tab__6ansg6_pri)."</td>";

                                echo "<td>".(($tab__6ansf1_mat+$tab__6ansf1_pri + $tab__6ansf2_mat+$tab__6ansf2_pri + $tab__6ansf3_mat+$tab__6ansf3_pri +$tab__6ansf4_mat+$tab__6ansf4_pri+ $tab__6ansf5_mat+$tab__6ansf5_pri +$tab__6ansf6_mat+$tab__6ansf6_pri)+($tab__6ansg1_mat+$tab__6ansg1_pri + $tab__6ansg2_mat+$tab__6ansg2_pri + $tab__6ansg3_mat+$tab__6ansg3_pri +$tab__6ansg4_mat+$tab__6ansg4_pri+ $tab__6ansg5_mat+$tab__6ansg5_pri +$tab__6ansg6_mat+$tab__6ansg6_pri))."</td>";

                           echo " </tr>";

                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>TOTAL GENERAL</td>";
                            echo "<td > 6 ans</td>";
                           
                            echo "<td>".($tab_6ansf1_mat+$tab_6ansf1_pri)."</td>";
                                echo "<td>".($tab_6ansg1_mat+$tab_6ansg1_pri)."</td>";

                                echo "<td>".($tab_6ansg1_mat+$tab_6ansg1_pri +$tab_6ansf1_mat +$tab_6ansf1_pri)."</td>";

                                echo "<td>".($tab_6ansf2_mat+$tab_6ansf2_pri)."</td>";
                                echo "<td>".($tab_6ansg2_mat+$tab_6ansg2_pri)."</td>";

                                echo "<td>".($tab_6ansg2_mat+$tab_6ansg2_pri +$tab_6ansf2_mat +$tab_6ansf2_pri)."</td>";


                                echo "<td>".($tab_6ansf3_mat+$tab_6ansf3_pri)."</td>";
                                echo "<td>".($tab_6ansg3_mat+$tab_6ansg3_pri)."</td>";

                                echo "<td>".($tab_6ansg3_mat+$tab_6ansg3_pri +$tab_6ansf3_mat +$tab_6ansf3_pri)."</td>";


                                echo "<td>".($tab_6ansf4_mat+$tab_6ansf4_pri)."</td>";
                                echo "<td>".($tab_6ansg4_mat+$tab_6ansg4_pri)."</td>";

                                echo "<td>".($tab_6ansg4_mat+$tab_6ansg4_pri +$tab_6ansf4_mat +$tab_6ansf4_pri)."</td>";


                                echo "<td>".($tab_6ansf5_mat+$tab_6ansf5_pri)."</td>";
                                echo "<td>".($tab_6ansg5_mat+$tab_6ansg5_pri)."</td>";

                                echo "<td>".($tab_6ansg5_mat+$tab_6ansg5_pri +$tab_6ansf5_mat +$tab_6ansf5_pri)."</td>";


                                echo "<td>".($tab_6ansf6_mat+$tab_6ansf6_pri)."</td>";
                                echo "<td>".($tab_6ansg6_mat+$tab_6ansg6_pri)."</td>";

                                echo "<td>".($tab_6ansg6_mat+$tab_6ansg6_pri +$tab_6ansf6_mat +$tab_6ansf6_pri)."</td>";

                                echo "<td>".($tab_6ansf1_mat+$tab_6ansf1_pri + $tab_6ansf2_mat+$tab_6ansf2_pri + $tab_6ansf3_mat+$tab_6ansf3_pri +$tab_6ansf4_mat+$tab_6ansf4_pri+ $tab_6ansf5_mat+$tab_6ansf5_pri +$tab_6ansf6_mat+$tab_6ansf6_pri)."</td>";

                                echo "<td>".($tab_6ansg1_mat+$tab_6ansg1_pri + $tab_6ansg2_mat+$tab_6ansg2_pri + $tab_6ansg3_mat+$tab_6ansg3_pri +$tab_6ansg4_mat+$tab_6ansg4_pri+ $tab_6ansg5_mat+$tab_6ansg5_pri +$tab_6ansg6_mat+$tab_6ansg6_pri)."</td>";

                                echo "<td>".(($tab_6ansf1_mat+$tab_6ansf1_pri + $tab_6ansf2_mat+$tab_6ansf2_pri + $tab_6ansf3_mat+$tab_6ansf3_pri +$tab_6ansf4_mat+$tab_6ansf4_pri+ $tab_6ansf5_mat+$tab_6ansf5_pri +$tab_6ansf6_mat+$tab_6ansf6_pri)+($tab_6ansg1_mat+$tab_6ansg1_pri + $tab_6ansg2_mat+$tab_6ansg2_pri + $tab_6ansg3_mat+$tab_6ansg3_pri +$tab_6ansg4_mat+$tab_6ansg4_pri+ $tab_6ansg5_mat+$tab_6ansg5_pri +$tab_6ansg6_mat+$tab_6ansg6_pri))."</td>";
                           echo " </tr>";

                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>TOTAL GENERAL</td>";
                            echo "<td > 7 à 10 ans</td>";

                            //tab_7_10ansf1_mat
                            echo "<td>".($tab_7_10ansf1_mat+$tab_7_10ansf1_pri)."</td>";
                                echo "<td>".($tab_7_10ansg1_mat+$tab_7_10ansg1_pri)."</td>";

                                echo "<td>".($tab_7_10ansg1_mat+$tab_7_10ansg1_pri +$tab_7_10ansf1_mat +$tab_7_10ansf1_pri)."</td>";

                                echo "<td>".($tab_7_10ansf2_mat+$tab_7_10ansf2_pri)."</td>";
                                echo "<td>".($tab_7_10ansg2_mat+$tab_7_10ansg2_pri)."</td>";

                                echo "<td>".($tab_7_10ansg2_mat+$tab_7_10ansg2_pri +$tab_7_10ansf2_mat +$tab_7_10ansf2_pri)."</td>";


                                echo "<td>".($tab_7_10ansf3_mat+$tab_7_10ansf3_pri)."</td>";
                                echo "<td>".($tab_7_10ansg3_mat+$tab_7_10ansg3_pri)."</td>";

                                echo "<td>".($tab_7_10ansg3_mat+$tab_7_10ansg3_pri +$tab_7_10ansf3_mat +$tab_7_10ansf3_pri)."</td>";


                                echo "<td>".($tab_7_10ansf4_mat+$tab_7_10ansf4_pri)."</td>";
                                echo "<td>".($tab_7_10ansg4_mat+$tab_7_10ansg4_pri)."</td>";

                                echo "<td>".($tab_7_10ansg4_mat+$tab_7_10ansg4_pri +$tab_7_10ansf4_mat +$tab_7_10ansf4_pri)."</td>";


                                echo "<td>".($tab_7_10ansf5_mat+$tab_7_10ansf5_pri)."</td>";
                                echo "<td>".($tab_7_10ansg5_mat+$tab_7_10ansg5_pri)."</td>";

                                echo "<td>".($tab_7_10ansg5_mat+$tab_7_10ansg5_pri +$tab_7_10ansf5_mat +$tab_7_10ansf5_pri)."</td>";


                                echo "<td>".($tab_7_10ansf6_mat+$tab_7_10ansf6_pri)."</td>";
                                echo "<td>".($tab_7_10ansg6_mat+$tab_7_10ansg6_pri)."</td>";

                                echo "<td>".($tab_7_10ansg6_mat+$tab_7_10ansg6_pri +$tab_7_10ansf6_mat +$tab_7_10ansf6_pri)."</td>";

                                echo "<td>".($tab_7_10ansf1_mat+$tab_7_10ansf1_pri + $tab_7_10ansf2_mat+$tab_7_10ansf2_pri + $tab_7_10ansf3_mat+$tab_7_10ansf3_pri +$tab_7_10ansf4_mat+$tab_7_10ansf4_pri+ $tab_7_10ansf5_mat+$tab_7_10ansf5_pri +$tab_7_10ansf6_mat+$tab_7_10ansf6_pri)."</td>";

                                echo "<td>".($tab_7_10ansg1_mat+$tab_7_10ansg1_pri + $tab_7_10ansg2_mat+$tab_7_10ansg2_pri + $tab_7_10ansg3_mat+$tab_7_10ansg3_pri +$tab_7_10ansg4_mat+$tab_7_10ansg4_pri+ $tab_7_10ansg5_mat+$tab_7_10ansg5_pri +$tab_7_10ansg6_mat+$tab_7_10ansg6_pri)."</td>";

                                echo "<td>".(($tab_7_10ansf1_mat+$tab_7_10ansf1_pri + $tab_7_10ansf2_mat+$tab_7_10ansf2_pri + $tab_7_10ansf3_mat+$tab_7_10ansf3_pri +$tab_7_10ansf4_mat+$tab_7_10ansf4_pri+ $tab_7_10ansf5_mat+$tab_7_10ansf5_pri +$tab_7_10ansf6_mat+$tab_7_10ansf6_pri)+($tab_7_10ansg1_mat+$tab_7_10ansg1_pri + $tab_7_10ansg2_mat+$tab_7_10ansg2_pri + $tab_7_10ansg3_mat+$tab_7_10ansg3_pri +$tab_7_10ansg4_mat+$tab_7_10ansg4_pri+ $tab_7_10ansg5_mat+$tab_7_10ansg5_pri +$tab_7_10ansg6_mat+$tab_7_10ansg6_pri))."</td>";
                           
                           /* for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            } */ 
                           echo " </tr>";

                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>TOTAL GENERAL</td>";
                            echo "<td > 11 ans</td>";
                           
                            /*for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            } tab_11ansg5_pri */ 
                            echo "<td>".($tab_11ansf1_mat+$tab_11ansf1_pri)."</td>";
                                echo "<td>".($tab_11ansg1_mat+$tab_11ansg1_pri)."</td>";

                                echo "<td>".($tab_11ansg1_mat+$tab_11ansg1_pri +$tab_11ansf1_mat +$tab_11ansf1_pri)."</td>";

                                echo "<td>".($tab_11ansf2_mat+$tab_11ansf2_pri)."</td>";
                                echo "<td>".($tab_11ansg2_mat+$tab_11ansg2_pri)."</td>";

                                echo "<td>".($tab_11ansg2_mat+$tab_11ansg2_pri +$tab_11ansf2_mat +$tab_11ansf2_pri)."</td>";


                                echo "<td>".($tab_11ansf3_mat+$tab_11ansf3_pri)."</td>";
                                echo "<td>".($tab_11ansg3_mat+$tab_11ansg3_pri)."</td>";

                                echo "<td>".($tab_11ansg3_mat+$tab_11ansg3_pri +$tab_11ansf3_mat +$tab_11ansf3_pri)."</td>";


                                echo "<td>".($tab_11ansf4_mat+$tab_11ansf4_pri)."</td>";
                                echo "<td>".($tab_11ansg4_mat+$tab_11ansg4_pri)."</td>";

                                echo "<td>".($tab_11ansg4_mat+$tab_11ansg4_pri +$tab_11ansf4_mat +$tab_11ansf4_pri)."</td>";


                                echo "<td>".($tab_11ansf5_mat+$tab_11ansf5_pri)."</td>";
                                echo "<td>".($tab_11ansg5_mat+$tab_11ansg5_pri)."</td>";

                                echo "<td>".($tab_11ansg5_mat+$tab_11ansg5_pri +$tab_11ansf5_mat +$tab_11ansf5_pri)."</td>";


                                echo "<td>".($tab_11ansf6_mat+$tab_11ansf6_pri)."</td>";
                                echo "<td>".($tab_11ansg6_mat+$tab_11ansg6_pri)."</td>";

                                echo "<td>".($tab_11ansg6_mat+$tab_11ansg6_pri +$tab_11ansf6_mat +$tab_11ansf6_pri)."</td>";

                                echo "<td>".($tab_11ansf1_mat+$tab_11ansf1_pri + $tab_11ansf2_mat+$tab_11ansf2_pri + $tab_11ansf3_mat+$tab_11ansf3_pri +$tab_11ansf4_mat+$tab_11ansf4_pri+ $tab_11ansf5_mat+$tab_11ansf5_pri +$tab_11ansf6_mat+$tab_11ansf6_pri)."</td>";

                                echo "<td>".($tab_11ansg1_mat+$tab_11ansg1_pri + $tab_11ansg2_mat+$tab_11ansg2_pri + $tab_11ansg3_mat+$tab_11ansg3_pri +$tab_11ansg4_mat+$tab_11ansg4_pri+ $tab_11ansg5_mat+$tab_11ansg5_pri +$tab_11ansg6_mat+$tab_11ansg6_pri)."</td>";

                                echo "<td>".(($tab_11ansf1_mat+$tab_11ansf1_pri + $tab_11ansf2_mat+$tab_11ansf2_pri + $tab_11ansf3_mat+$tab_11ansf3_pri +$tab_11ansf4_mat+$tab_11ansf4_pri+ $tab_11ansf5_mat+$tab_11ansf5_pri +$tab_11ansf6_mat+$tab_11ansf6_pri)+($tab_11ansg1_mat+$tab_11ansg1_pri + $tab_11ansg2_mat+$tab_11ansg2_pri + $tab_11ansg3_mat+$tab_11ansg3_pri +$tab_11ansg4_mat+$tab_11ansg4_pri+ $tab_11ansg5_mat+$tab_11ansg5_pri +$tab_11ansg6_mat+$tab_11ansg6_pri))."</td>";
                           echo " </tr>";

                           echo "<tr class='tr'>";
                           
                            echo "<td colspan='4'>TOTAL GENERAL</td>";
                            echo "<td > Plus de 11 ans</td>";
                           
                            /*for ($i=0; $i <21; $i++) {
                                echo "<td>#</td>";
                            } tab_plus_11ansg5_pri*/ 
                            echo "<td>".($tab_plus_11ansf1_mat+$tab_plus_11ansf1_pri)."</td>";
                                echo "<td>".($tab_plus_11ansg1_mat+$tab_plus_11ansg1_pri)."</td>";

                                echo "<td>".($tab_plus_11ansg1_mat+$tab_plus_11ansg1_pri +$tab_plus_11ansf1_mat +$tab_plus_11ansf1_pri)."</td>";

                                echo "<td>".($tab_plus_11ansf2_mat+$tab_plus_11ansf2_pri)."</td>";
                                echo "<td>".($tab_plus_11ansg2_mat+$tab_plus_11ansg2_pri)."</td>";

                                echo "<td>".($tab_plus_11ansg2_mat+$tab_plus_11ansg2_pri +$tab_plus_11ansf2_mat +$tab_plus_11ansf2_pri)."</td>";


                                echo "<td>".($tab_plus_11ansf3_mat+$tab_plus_11ansf3_pri)."</td>";
                                echo "<td>".($tab_plus_11ansg3_mat+$tab_plus_11ansg3_pri)."</td>";

                                echo "<td>".($tab_plus_11ansg3_mat+$tab_plus_11ansg3_pri +$tab_plus_11ansf3_mat +$tab_plus_11ansf3_pri)."</td>";


                                echo "<td>".($tab_plus_11ansf4_mat+$tab_plus_11ansf4_pri)."</td>";
                                echo "<td>".($tab_plus_11ansg4_mat+$tab_plus_11ansg4_pri)."</td>";

                                echo "<td>".($tab_plus_11ansg4_mat+$tab_plus_11ansg4_pri +$tab_plus_11ansf4_mat +$tab_plus_11ansf4_pri)."</td>";


                                echo "<td>".($tab_plus_11ansf5_mat+$tab_plus_11ansf5_pri)."</td>";
                                echo "<td>".($tab_plus_11ansg5_mat+$tab_plus_11ansg5_pri)."</td>";

                                echo "<td>".($tab_plus_11ansg5_mat+$tab_plus_11ansg5_pri +$tab_plus_11ansf5_mat +$tab_plus_11ansf5_pri)."</td>";


                                echo "<td>".($tab_plus_11ansf6_mat+$tab_plus_11ansf6_pri)."</td>";
                                echo "<td>".($tab_plus_11ansg6_mat+$tab_plus_11ansg6_pri)."</td>";

                                echo "<td>".($tab_plus_11ansg6_mat+$tab_plus_11ansg6_pri +$tab_plus_11ansf6_mat +$tab_plus_11ansf6_pri)."</td>";

                                echo "<td>".($tab_plus_11ansf1_mat+$tab_plus_11ansf1_pri + $tab_plus_11ansf2_mat+$tab_plus_11ansf2_pri + $tab_plus_11ansf3_mat+$tab_plus_11ansf3_pri +$tab_plus_11ansf4_mat+$tab_plus_11ansf4_pri+ $tab_plus_11ansf5_mat+$tab_plus_11ansf5_pri +$tab_plus_11ansf6_mat+$tab_plus_11ansf6_pri)."</td>";

                                echo "<td>".($tab_plus_11ansg1_mat+$tab_plus_11ansg1_pri + $tab_plus_11ansg2_mat+$tab_plus_11ansg2_pri + $tab_plus_11ansg3_mat+$tab_plus_11ansg3_pri +$tab_plus_11ansg4_mat+$tab_plus_11ansg4_pri+ $tab_plus_11ansg5_mat+$tab_plus_11ansg5_pri +$tab_plus_11ansg6_mat+$tab_plus_11ansg6_pri)."</td>";

                                echo "<td>".(($tab_plus_11ansf1_mat+$tab_plus_11ansf1_pri + $tab_plus_11ansf2_mat+$tab_plus_11ansf2_pri + $tab_plus_11ansf3_mat+$tab_plus_11ansf3_pri +$tab_plus_11ansf4_mat+$tab_plus_11ansf4_pri+ $tab_plus_11ansf5_mat+$tab_plus_11ansf5_pri +$tab_plus_11ansf6_mat+$tab_plus_11ansf6_pri)+($tab_plus_11ansg1_mat+$tab_plus_11ansg1_pri + $tab_plus_11ansg2_mat+$tab_plus_11ansg2_pri + $tab_plus_11ansg3_mat+$tab_plus_11ansg3_pri +$tab_plus_11ansg4_mat+$tab_plus_11ansg4_pri+ $tab_plus_11ansg5_mat+$tab_plus_11ansg5_pri +$tab_plus_11ansg6_mat+$tab_plus_11ansg6_pri))."</td>"; 

                           echo " </tr>"; 

                           



                           

                               

                            
                            
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