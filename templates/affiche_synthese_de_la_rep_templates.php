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
                            <li><a class="active" href="affiche_synthese_de_la_rep.php">Synthèse de la répartition des élèves du secondaire par option</a></li>
                            <li><a href="affiche_mouvement_eleves.php">Affiche mouvement des élèves </a></li>
                            

                            
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
                                <h2 class="text-uppercase">Synthèse de la répartition des élèves du secondaire par option </h2>
                                <ul class="actions no-print">
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
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="#" id="tri_paroisse">Trier par paroisse 
                                                    <span id="tri_paroisse_gly" class="glyphicon"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#" id="tri_diocese">Trier par diocese 
                                                    <span id="tri_diocese_gly" class="glyphicon glyphicon-ok"></span></a>
                                                </li>
                                            </ul>

                                           
                                        </li>
                                    </ul>
                            </div>

                            <div class="card-body ">
                                

                                <div class="list-group">
                                    <div class="list-group-item media">
                                     <div class="col-sm-12 tableau_scroll synthese_par_diocese" style="display: block">
                                    <div class='center_naledi text-uppercase'>
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
                        <span class='titre_print'>Synthèse de la répartition des élèves du secondaire par option DE L'ANNEE SCOLAIRE 2017-2018</span><br>

                    </div>
                    <table id="affiche_relev_stat_table" class="naledi_yellow table-hover  table-bordered  table-responsive pointInputTable table-condensed">
                        <thead>
                            <thead>
                            <tr class="warning">
                                <th rowspan="3"> N° OPTION </th>
                                
                                <th rowspan="3"> </th>
                                <th rowspan="1" colspan="2"> NIVEAU</th>
                               
                                <th colspan="12" class="text-uppercase" > Effectifs scolaires</th>
                                <th rowspan="2" colspan="2"> TOT. GEN</th>
                                
                            </tr>
                            <tr class="warning">
                                <th rowspan="2"> SECTION </th>
                                
                               
                                <th rowspan="2"> OPTION</th>
                                
                               
                                <th colspan="2">1ère</th>
                                <th colspan="2">2ème</th>  
                                <th  colspan="2">3ème</th>
                                <th colspan="2">4ème</th>
                                <th colspan="2">5ème </th>
                                <th colspan="2">6ème</th>
                            </tr>
                            <tr class="warning">
                                <th  > F </th>
                                <th >GF </th>
                                <th >F</th>
                                <th >GF</th>
                                <th >F</th>  
                                <th  > GF </th>
                                <th >F </th>
                                <th >GF </th>
                                <th >F</th>
                                <th >GF</th>  
                                <th  > F </th>
                                <th >GF</th>
                                <th > F </th>
                                <th >GF</th>
                                
                            </tr>
                               
                                
                        </thead>
                        <tbody class="naledi_yellow1 text-uppercase">
                       
                    <?php

                        $som_sec_fille_1 =0;
                        $som_sec_garcon_1 =0;

                        $som_sec_fille_2 =0;
                        $som_sec_garcon_2 =0;

                        $som_sec_fg_garcon_1 =0;
                        $som_sec_fg_garcon_2 =0;

                        $total_sec_eff_1_fille =0;
                        $total_sec_eff_1_fg =0;

                        $total_sec_eff_2_fille =0;
                        $total_sec_eff_2_fg =0;

                        $total_sec_eff_fille =0;
                        $total_sec_eff_fg =0;

                        

                        $total_sec_eff_3_fille =0;
                        $total_sec_eff_3_fg =0;
                        $total_sec_eff_4_fille =0;
                        $total_sec_eff_4_fg =0;
                        $total_sec_eff_5_fille =0;
                        $total_sec_eff_5_fg =0;
                        $total_sec_eff_6_fille =0;
                        $total_sec_eff_6_fg =0;

                        $total_som_sec_fille_3 =0;
                        $total_som_sec_garcon_3 =0;
                        $total_som_sec_fille_4 =0;
                        $total_som_sec_garcon_4 =0;
                        $total_som_sec_fille_5 =0;
                        $total_som_sec_garcon_5 =0;
                        $total_som_sec_fille_6 =0;
                        $total_som_sec_garcon_6 =0;

                        $tot_gen_fille = 0;
                        $tot_gen_fg = 0; 




                        $tab_ecole_sec = query("SELECT * FROM `classe_secondaire_co`");
                        //$tab_ecole_sec2 = query("SELECT * FROM `classe_secondaire_co` WHERE nom_class = ? ","2");

                        foreach($tab_ecole_sec as $co) {
                            $somme_sec_fille_1 = 0;
                            $somme_sec_garcon_1 = 0;
                            $somme_sec_fille_2 = 0;
                            $somme_sec_garcon_2 = 0;

                            if ($co["nom_class"] == "1") 
                            {
                                $somme_sec_fille_1 =$co["effectif_F"];
                                $somme_sec_garcon_1=$co["effectif_G"];
                            }
                            elseif ($co["nom_class"] == "2") 
                            {
                                $somme_sec_fille_2 =$co["effectif_F"];
                                $somme_sec_garcon_2=$co["effectif_G"];
                            }


                            $som_sec_fille_1 =$som_sec_fille_1 + $somme_sec_fille_1;
                            $som_sec_garcon_1=$som_sec_garcon_1 +$somme_sec_garcon_1;

                            $som_sec_fille_2 =$som_sec_fille_2+ $somme_sec_fille_2;
                            $som_sec_garcon_2=$som_sec_garcon_2+$somme_sec_garcon_2;

                            $som_sec_fg_garcon_1 = $som_sec_garcon_1+$som_sec_fille_1;
                            $som_sec_fg_garcon_2 = $som_sec_garcon_2+$som_sec_fille_2;

                            //totaux 
                            $total_sec_eff_1_fille = $total_sec_eff_1_fille + $somme_sec_fille_1;
                            $total_sec_eff_1_fg = $total_sec_eff_1_fg + $somme_sec_fille_1 + $somme_sec_garcon_1;

                            $total_sec_eff_2_fille = $total_sec_eff_2_fille + $somme_sec_fille_2;
                            $total_sec_eff_2_fg = $total_sec_eff_2_fg + $somme_sec_fille_2 + $somme_sec_garcon_2;  

                            //totaux droit
                            $total_sec_eff_fille =$total_sec_eff_fille+ $somme_sec_fille_1 + $somme_sec_fille_2;
                            $total_sec_eff_fg =$total_sec_eff_fg+ $somme_sec_fille_1 + $somme_sec_fille_2 + $somme_sec_garcon_1 + $somme_sec_garcon_2;
                                            

                        }
                        $tot_gen_fille = $tot_gen_fille + $total_sec_eff_fille;
                        $tot_gen_fg = $tot_gen_fg + $total_sec_eff_fg;
                        echo "
                         <tr>
                            
                            <td colspan='4'>CYCLE D'ORIENTATION/ENSEIGNEMENT GENERAL</td>
                            <td>$som_sec_fille_1</td>
                            <td>$som_sec_fg_garcon_1</td>
                            <td>$som_sec_fille_2</td>
                            <td>$som_sec_fg_garcon_2</td>
                            <td colspan='8' style='background: cadetblue'></td>
                            
                            <td class='tr'>$total_sec_eff_fille</td>
                            <td class='tr'>$total_sec_eff_fg</td>
                        </tr>";

                            $tab_section = query("SELECT * FROM section");
                            $id_s = 1;
                             $id_o = 1;
                            foreach ($tab_section as $section) {

                                $id_section = $section["id"];
                                $nom_section = $section["nom_section"];


                               

                                $tab_option  = query("SELECT * FROM option WHERE belongs_to = ?",$id_section);
                                $id_check = 1;
                                foreach ($tab_option as $option) {
                                    $id_option = $option["id"];
                                    $nom_option = $option["nom_option"];

                                    $nbr_option = count($tab_option);

                                    //SECTION PAR SECTION
                                    $found_option = 0;
                    $tab_ecole_sec_cl = query("SELECT * FROM classe_secondaire_cl WHERE option = ?",$id_option);
                    //var_dump($tab_ecole_sec_cl);
                    //echo "<br><br>";
                    //echo "SELECT * FROM classe_secondaire_cl WHERE option = $id_option <br>";
                                    $som_sec_fille_3 =0;
                                    $som_sec_garcon_3 =0;
                                    $som_sec_fille_4 =0;
                                    $som_sec_garcon_4 =0;
                                    $som_sec_fille_5 =0;
                                    $som_sec_garcon_5 =0;
                                    $som_sec_fille_6 =0;
                                    $som_sec_garcon_6 =0;

                                    $somme_sec_fille_3 = 0;                                  
                                    $somme_sec_garcon_3 = 0;
                                    $somme_sec_fille_4 = 0;                                 
                                    $somme_sec_garcon_4 = 0;
                                    $somme_sec_fille_5 = 0;                                 
                                    $somme_sec_garcon_5 = 0;
                                    $somme_sec_fille_6 = 0;                                 
                                    $somme_sec_garcon_6 = 0;



                                    foreach ($tab_ecole_sec_cl as $cl) {
                                        //echo $cl["nom_class"]."<br>";
                                        $cl_class = $cl["nom_class"];
                                        //echo "$cl_class -";
                                        if($cl_class == 3) 
                                        {
                                            $somme_sec_fille_3 = $cl["effectif_F"] +$somme_sec_fille_3;
                                            $somme_sec_garcon_3 = $cl["effectif_G"] +$somme_sec_garcon_3;
                                            //echo "$somme_sec_fille_3 bree<br>";
                                        }
                                        elseif ($cl["nom_class"] == 4) 
                                        {
                                            $somme_sec_fille_4 =$cl["effectif_F"]+$somme_sec_fille_4;
                                            $somme_sec_garcon_4=$cl["effectif_G"]+$somme_sec_garcon_4;
                                        }
                                        elseif ($cl["nom_class"] == 5) 
                                        {
                                            $somme_sec_fille_5 =$cl["effectif_F"]+$somme_sec_fille_5;
                                            $somme_sec_garcon_5=$cl["effectif_G"]+$somme_sec_garcon_5;
                                        }
                                        elseif ($cl["nom_class"] == 6) 
                                        {
                                            $somme_sec_fille_6 =$cl["effectif_F"]+$somme_sec_fille_6;
                                            $somme_sec_garcon_6=$cl["effectif_G"]+$somme_sec_garcon_6;
                                        }

                                        

                                        //echo $somme_sec_fille_3."<br>";
                                        

                                    } 
                                        $som_sec_fille_3 =$som_sec_fille_3 + $somme_sec_fille_3;
                                        $som_sec_garcon_3=$som_sec_garcon_3 +$somme_sec_garcon_3;
                                        $som_sec_fg_garcon_3 = $som_sec_garcon_3+$som_sec_fille_3;

                                        $som_sec_fille_4 =$som_sec_fille_4 + $somme_sec_fille_4;
                                        $som_sec_garcon_4=$som_sec_garcon_4 +$somme_sec_garcon_4;
                                        $som_sec_fg_garcon_4 = $som_sec_garcon_4+$som_sec_fille_4;

                                        $som_sec_fille_5 =$som_sec_fille_5 + $somme_sec_fille_5;
                                        $som_sec_garcon_5=$som_sec_garcon_5 +$somme_sec_garcon_5;
                                        $som_sec_fg_garcon_5 = $som_sec_garcon_5+$som_sec_fille_5;

                                        $som_sec_fille_6 =$som_sec_fille_6 + $somme_sec_fille_6;
                                        $som_sec_garcon_6=$som_sec_garcon_6 +$somme_sec_garcon_6;
                                        $som_sec_fg_garcon_6 = $som_sec_garcon_6+$som_sec_fille_6;

                                        //SOMME DROITE
                                        $total_som_sec_fille = $som_sec_fille_3 + $som_sec_fille_4 + $som_sec_fille_5 + $som_sec_fille_6;

                                        $total_som_sec_fg_garcon =$som_sec_fg_garcon_3 + $som_sec_fg_garcon_4 + $som_sec_fg_garcon_5 + $som_sec_fg_garcon_6;

                                        //somme basse
                                        $total_sec_eff_3_fille = $total_sec_eff_3_fille + $som_sec_fille_3;
                                        $total_sec_eff_4_fille = $total_sec_eff_4_fille + $som_sec_fille_4;
                                        $total_sec_eff_5_fille = $total_sec_eff_5_fille + $som_sec_fille_5;
                                        $total_sec_eff_6_fille = $total_sec_eff_6_fille + $som_sec_fille_6;

                                        $total_sec_eff_3_fg = $total_sec_eff_3_fg + $som_sec_fg_garcon_3;
                                        $total_sec_eff_4_fg = $total_sec_eff_4_fg + $som_sec_fg_garcon_4;
                                        $total_sec_eff_5_fg = $total_sec_eff_5_fg + $som_sec_fg_garcon_5;
                                        $total_sec_eff_6_fg = $total_sec_eff_6_fg + $som_sec_fg_garcon_6;

                                        $tot_gen_fille = $tot_gen_fille + $total_som_sec_fille;
                                        $tot_gen_fg = $tot_gen_fg + $total_som_sec_fg_garcon;




                                    if ($id_o == 1) {
                                        echo "<tr>
                                            <td >$id_o</td>
                                            <td class='rotate' rowspan='25'><span >SYNTHESE PAR OPTION</span></td>
                                            <td rowspan= '$nbr_option'>$nom_section</td>
                                            <td>$nom_option</td>
                                            <td colspan='4' style='background: cadetblue' ></td>

                                            <td>$som_sec_fille_3</td>
                                            <td>$som_sec_fg_garcon_3</td>
                                            <td>$som_sec_fille_4</td>
                                            <td>$som_sec_fg_garcon_4</td>
                                            <td>$som_sec_fille_5</td>
                                            <td>$som_sec_fg_garcon_5</td>
                                            <td>$som_sec_fille_6</td>
                                            <td>$som_sec_fg_garcon_6</td>

                                            <td class='tr'>$total_som_sec_fille</td>
                                            
                                            <td class='tr'>$total_som_sec_fg_garcon</td>
                                        </tr>"; 
                                    }
                                    elseif ($id_check == 1) {
                                        echo '<tr>
                                            <td >'.$id_o.'</td>
                                            
                                            <td rowspan="'.$nbr_option. '" >'.$nom_section.'</td>
                                            <td rowspan="0" >'.$nom_option.'</td>';
                                           //for ($i=0; $i < 4; $i++) { 
                                               echo "<td colspan='4' style='background: cadetblue'></td>";
                                            //}
                                            
                                            echo "<td>$som_sec_fille_3</td>
                                            <td>$som_sec_fg_garcon_3</td>
                                            <td>$som_sec_fille_4</td>
                                            <td>$som_sec_fg_garcon_4</td>
                                            <td>$som_sec_fille_5</td>
                                            <td>$som_sec_fg_garcon_5</td>
                                            <td>$som_sec_fille_6</td>
                                            <td>$som_sec_fg_garcon_6</td>
                                            <td class='tr'>$total_som_sec_fille</td>
                                            
                                            <td class='tr'>$total_som_sec_fg_garcon</td>
                                        </tr>"; 
                                    }
                                    else {
                                        echo '<tr>
                                            <td >'.$id_o.'</td>
                                            <td>'.$nom_option.'</td>';

                                            //for ($i=0; $i < 4; $i++) { 
                                               echo "<td colspan='4' style='background: cadetblue'></td>";
                                            //}
                                            
                                           echo " <td>$som_sec_fille_3</td>
                                            <td>$som_sec_fg_garcon_3</td>
                                            <td>$som_sec_fille_4</td>
                                            <td>$som_sec_fg_garcon_4</td>
                                            <td>$som_sec_fille_5</td>
                                            <td>$som_sec_fg_garcon_5</td>
                                            <td>$som_sec_fille_6</td>
                                            <td>$som_sec_fg_garcon_6</td>
                                            <td class='tr'>$total_som_sec_fille</td>
                                            <td class='tr'>$total_som_sec_fg_garcon</td>
                                        </tr>";
                                    }

                                    
                                   $id_check++;
                                    $id_o++;
                                }
                           
                               $id_s++; 
                            }
                            echo "<tr class='tr'>
                                    <td colspan='4'> TOTAL SECONDAIRE</td>
                                    
                                    <td>$som_sec_fille_1</td>
                                    <td>$som_sec_fg_garcon_1</td>
                                    <td>$som_sec_fille_2</td>
                                    <td>$som_sec_fg_garcon_2</td>

                                    <td>$total_sec_eff_3_fille</td>
                                    <td>$total_sec_eff_3_fg</td>
                                    <td>$total_sec_eff_4_fille</td>
                                    <td>$total_sec_eff_4_fg</td>
                                    <td>$total_sec_eff_5_fille</td>
                                    <td>$total_sec_eff_5_fg</td>
                                    <td>$total_sec_eff_6_fille</td>
                                    <td>$total_sec_eff_6_fg</td>
                                    <td>$tot_gen_fille</td>
                                    <td>$tot_gen_fg</td>
                                </tr>
                            ";
                        ?>
                        
                        </tbody>
                        
                    </table>
                                     </div>
























                                     <div class="col-sm-12 tableau_scroll synthese_par_paroisse" style="display: none">
                                    <div class='center_naledi text-uppercase'>
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
                        <span class='titre_print'>Synthèse de la répartition des élèves du secondaire par option et par paroisse DE L'ANNEE SCOLAIRE 2015-2016</span><br>

                    </div>
                    <table id="affiche_relev_stat_table" class="table-hover naledi_yellow  table-bordered  table-responsive pointInputTable table-condensed">
                        <thead>
                            <thead>
                            <tr class="warning">
                                <th rowspan="3"> N° </th>
                                
                                <th rowspan="3"> PAROISSE </th>
                                <th rowspan="1" colspan="2"> NIVEAU</th>
                               
                                <th colspan="12" class="text-uppercase" > Effectifs scolaires</th>
                                <th rowspan="2" colspan="2"> TOT. GEN</th>
                                
                            </tr>
                            <tr class="warning">
                                <th rowspan="2"> SECTION </th>
                                
                               
                                <th rowspan="2"> OPTION</th>
                                
                               
                                <th colspan="2">1ère</th>
                                <th colspan="2">2ème</th>  
                                <th  colspan="2">3ème</th>
                                <th colspan="2">4ème</th>
                                <th colspan="2">5ème </th>
                                <th colspan="2">6ème</th>
                            </tr>
                            <tr class="warning">
                                <th  > F </th>
                                <th >GF </th>
                                <th >F</th>
                                <th >GF</th>
                                <th >F</th>  
                                <th  > GF </th>
                                <th >F </th>
                                <th >GF </th>
                                <th >F</th>
                                <th >GF</th>  
                                <th  > F </th>
                                <th >GF</th>
                                <th > F </th>
                                <th >GF</th>
                                
                            </tr>
                               
                                
                        </thead>
                        <tbody class="naledi_yellow1 text-uppercase">
                       
                    <?php

                    $total_general_1_f = 0;
                    $total_general_1_fg = 0;
                    $total_general_2_f = 0;
                    $total_general_2_fg = 0;
                    $total_general_3_f = 0;
                    $total_general_3_fg = 0;
                    $total_general_4_f = 0;
                    $total_general_4_fg = 0;
                    $total_general_5_f = 0;
                    $total_general_5_fg = 0;
                    $total_general_6_f = 0;
                    $total_general_6_fg = 0;

                    $total_general_f = 0;
                    $total_general_fg = 0;



                       
                       $tab_paroisse = query("SELECT * FROM sous_div");

                        $num_par = 0;

                    foreach($tab_paroisse as $par2)
                    {
                        $som_sec_fille_1 =0;
                        $som_sec_garcon_1 =0;

                        $som_sec_fille_2 =0;
                        $som_sec_garcon_2 =0;

                        $som_sec_fg_garcon_1 =0;
                        $som_sec_fg_garcon_2 =0;

                        $total_sec_eff_1_fille =0;
                        $total_sec_eff_1_fg =0;

                        $total_sec_eff_2_fille =0;
                        $total_sec_eff_2_fg =0;

                        $total_sec_eff_fille =0;
                        $total_sec_eff_fg =0;

                        

                        $total_sec_eff_3_fille =0;
                        $total_sec_eff_3_fg =0;
                        $total_sec_eff_4_fille =0;
                        $total_sec_eff_4_fg =0;
                        $total_sec_eff_5_fille =0;
                        $total_sec_eff_5_fg =0;
                        $total_sec_eff_6_fille =0;
                        $total_sec_eff_6_fg =0;

                        $total_som_sec_fille_3 =0;
                        $total_som_sec_garcon_3 =0;
                        $total_som_sec_fille_4 =0;
                        $total_som_sec_garcon_4 =0;
                        $total_som_sec_fille_5 =0;
                        $total_som_sec_garcon_5 =0;
                        $total_som_sec_fille_6 =0;
                        $total_som_sec_garcon_6 =0;

                        $tot_gen_fille = 0;
                        $tot_gen_fg = 0;  
                        
                        $num_par++;
                        $id_par2 = $par2["id"];
                        $nom_par2 = $par2["nom_sous_div"]; 
                        //$tab_sous_div = query("SELECT * FROM sous_div where belongs_to = ?",$id_par2);
                        //foreach ($tab_sous_div as $sd)
                        //{
                            $tab_ecole2_co = query("SELECT * FROM ecole2 WHERE belongs_to = ?",$par2["id"]);
                            foreach($tab_ecole2_co as $ecole2_co)
                            {
                            
                            
                                


                        $tab_ecole_sec = query("SELECT * FROM `classe_secondaire_co` where id_ecole = ?",$ecole2_co["id"]);
                        //$tab_ecole_sec2 = query("SELECT * FROM `classe_secondaire_co` WHERE nom_class = ? ","2");

                        foreach($tab_ecole_sec as $co) {
                            $somme_sec_fille_1 = 0;
                            $somme_sec_garcon_1 = 0;
                            $somme_sec_fille_2 = 0;
                            $somme_sec_garcon_2 = 0;

                            if ($co["nom_class"] == "1") 
                            {
                                $somme_sec_fille_1 =$co["effectif_F"];
                                $somme_sec_garcon_1=$co["effectif_G"];
                            }
                            elseif ($co["nom_class"] == "2") 
                            {
                                $somme_sec_fille_2 =$co["effectif_F"];
                                $somme_sec_garcon_2=$co["effectif_G"];
                            }


                            $som_sec_fille_1 =$som_sec_fille_1 + $somme_sec_fille_1;
                            $som_sec_garcon_1=$som_sec_garcon_1 +$somme_sec_garcon_1;

                            $som_sec_fille_2 =$som_sec_fille_2+ $somme_sec_fille_2;
                            $som_sec_garcon_2=$som_sec_garcon_2+$somme_sec_garcon_2;

                            $som_sec_fg_garcon_1 = $som_sec_garcon_1+$som_sec_fille_1;
                            $som_sec_fg_garcon_2 = $som_sec_garcon_2+$som_sec_fille_2;

                            //totaux 
                            $total_sec_eff_1_fille = $total_sec_eff_1_fille + $somme_sec_fille_1;
                            $total_sec_eff_1_fg = $total_sec_eff_1_fg + $somme_sec_fille_1 + $somme_sec_garcon_1;

                            $total_sec_eff_2_fille = $total_sec_eff_2_fille + $somme_sec_fille_2;
                            $total_sec_eff_2_fg = $total_sec_eff_2_fg + $somme_sec_fille_2 + $somme_sec_garcon_2;  

                            //totaux droit
                            $total_sec_eff_fille =$total_sec_eff_fille+ $somme_sec_fille_1 + $somme_sec_fille_2;
                            $total_sec_eff_fg =$total_sec_eff_fg+ $somme_sec_fille_1 + $somme_sec_fille_2 + $somme_sec_garcon_1 + $somme_sec_garcon_2;
                                            

                        }
                        //fin ecole co
                        }
                    //FIN FOREWACH SOUS DIV CO
                    //}
                        $tot_gen_fille = $tot_gen_fille + $total_sec_eff_fille;
                        $tot_gen_fg = $tot_gen_fg + $total_sec_eff_fg;
                        echo "
                         <tr>
                        <td rowspan='26'>$num_par</td>
                           
                        <td class='rotate1' rowspan='26'><span >$nom_par2</span></td>
                            <td colspan='2'>CYCLE D'ORIENTATION/ENSEIGNEMENT GENERAL</td>
                            <td>$som_sec_fille_1 </td>
                            <td>$som_sec_fg_garcon_1</td>
                            <td>$som_sec_fille_2</td>
                            <td>$som_sec_fg_garcon_2</td>
                            <td colspan='8' style='background: cadetblue'></td>
                            
                            <td class='tr'>$total_sec_eff_fille </td>
                            <td class='tr'>$total_sec_eff_fg</td>
                        </tr>";

                            $tab_section = query("SELECT * FROM section");
                            $id_s = 1;
                             $id_o = 1;
                            foreach ($tab_section as $section) {

                                $id_section = $section["id"];
                                $nom_section = $section["nom_section"];


                               

                                $tab_option  = query("SELECT * FROM option WHERE belongs_to = ?",$id_section);
                                $id_check = 1;
                                foreach ($tab_option as $option) {
                                    $id_option = $option["id"];
                                    $nom_option = $option["nom_option"];

                                    $nbr_option = count($tab_option);


                                    //SECTION PAR SECTION
                                    $found_option = 0;
                                    $som_sec_fille_3 =0;
                                    $som_sec_garcon_3 =0;
                                    $som_sec_fille_4 =0;
                                    $som_sec_garcon_4 =0;
                                    $som_sec_fille_5 =0;
                                    $som_sec_garcon_5 =0;
                                    $som_sec_fille_6 =0;
                                    $som_sec_garcon_6 =0;

                                //foreach ($tab_sous_div as $sd)
                                //{
                                    $tab_ecole2_cl = query("SELECT * FROM ecole2 WHERE belongs_to = ?",$par2["id"]);
                            foreach($tab_ecole2_cl as $ecole2_cl)
                            {
                    $tab_ecole_sec_cl = query("SELECT * FROM classe_secondaire_cl WHERE option = ? AND id_ecole = ?",$id_option,$ecole2_cl["id"]);
                    
                    
                                    
                                    
                                    $somme_sec_fille_3 = 0;                                  
                                    $somme_sec_garcon_3 = 0;
                                    $somme_sec_fille_4 = 0;                                 
                                    $somme_sec_garcon_4 = 0;
                                    $somme_sec_fille_5 = 0;                                 
                                    $somme_sec_garcon_5 = 0;
                                    $somme_sec_fille_6 = 0;                                 
                                    $somme_sec_garcon_6 = 0;
                                    



                                    foreach ($tab_ecole_sec_cl as $cl) {

                                        //echo $cl["nom_class"]."<br>";
                                        $cl_class = $cl["nom_class"];
                                        //echo "$cl_class -";
                                        if($cl_class == 3) 
                                        {
                                            $somme_sec_fille_3 = $cl["effectif_F"] + $somme_sec_fille_3;
                                            $somme_sec_garcon_3 = $cl["effectif_G"] +$somme_sec_garcon_3;
                                            //echo "$somme_sec_fille_3 bree<br>";
                                        }
                                        elseif ($cl["nom_class"] == 4) 
                                        {
                                            $somme_sec_fille_4 =$cl["effectif_F"]+$somme_sec_fille_4;
                                            $somme_sec_garcon_4=$cl["effectif_G"]+$somme_sec_garcon_4;
                                        }
                                        elseif ($cl["nom_class"] == 5) 
                                        {
                                            $somme_sec_fille_5 =$cl["effectif_F"]+$somme_sec_fille_5;
                                            $somme_sec_garcon_5=$cl["effectif_G"]+$somme_sec_garcon_5;
                                        }
                                        elseif ($cl["nom_class"] == 6) 
                                        {
                                            $somme_sec_fille_6 =$cl["effectif_F"]+$somme_sec_fille_6;
                                            $somme_sec_garcon_6=$cl["effectif_G"]+$somme_sec_garcon_6;
                                        }

                                        

                                        //echo $somme_sec_fille_3."<br>";
                                        

                                    } 
                                    //echo " $som_sec_fille_3 <br>";
                                    $som_sec_fille_3 =$som_sec_fille_3 + $somme_sec_fille_3;
                                        $som_sec_garcon_3=$som_sec_garcon_3 +$somme_sec_garcon_3;
                                        $som_sec_fg_garcon_3 = $som_sec_garcon_3+$som_sec_fille_3;

                                        $som_sec_fille_4 =$som_sec_fille_4 + $somme_sec_fille_4;
                                        $som_sec_garcon_4=$som_sec_garcon_4 +$somme_sec_garcon_4;
                                        $som_sec_fg_garcon_4 = $som_sec_garcon_4+$som_sec_fille_4;

                                        $som_sec_fille_5 =$som_sec_fille_5 + $somme_sec_fille_5;
                                        $som_sec_garcon_5=$som_sec_garcon_5 +$somme_sec_garcon_5;
                                        $som_sec_fg_garcon_5 = $som_sec_garcon_5+$som_sec_fille_5;

                                        $som_sec_fille_6 =$som_sec_fille_6 + $somme_sec_fille_6;
                                        $som_sec_garcon_6=$som_sec_garcon_6 +$somme_sec_garcon_6;
                                        $som_sec_fg_garcon_6 = $som_sec_garcon_6+$som_sec_fille_6;

                                        //SOMME DROITE
                                        $total_som_sec_fille = $som_sec_fille_3 + $som_sec_fille_4 + $som_sec_fille_5 + $som_sec_fille_6;

                                        $total_som_sec_fg_garcon =$som_sec_fg_garcon_3 + $som_sec_fg_garcon_4 + $som_sec_fg_garcon_5 + $som_sec_fg_garcon_6;
                                    //fin foe each ecole cl
                                }
                                


                                    
                                    //FIN FOREWACH SOUS DIVISION
                                //}
                                        
                                
                                        //somme basse
                                        $total_sec_eff_3_fille = $total_sec_eff_3_fille + $som_sec_fille_3;
                                        $total_sec_eff_4_fille = $total_sec_eff_4_fille + $som_sec_fille_4;
                                        $total_sec_eff_5_fille = $total_sec_eff_5_fille + $som_sec_fille_5;
                                        $total_sec_eff_6_fille = $total_sec_eff_6_fille + $som_sec_fille_6;

                                        $total_sec_eff_3_fg = $total_sec_eff_3_fg + $som_sec_fg_garcon_3;
                                        $total_sec_eff_4_fg = $total_sec_eff_4_fg + $som_sec_fg_garcon_4;
                                        $total_sec_eff_5_fg = $total_sec_eff_5_fg + $som_sec_fg_garcon_5;
                                        $total_sec_eff_6_fg = $total_sec_eff_6_fg + $som_sec_fg_garcon_6;

                                        $tot_gen_fille = $tot_gen_fille + $total_som_sec_fille;
                                        $tot_gen_fg = $tot_gen_fg + $total_som_sec_fg_garcon;



                                    if ($id_o == 1) {
                                        echo "<tr>
                                            
                                            
                                            <td rowspan= '$nbr_option'>$nom_section</td>
                                            <td>$nom_option</td>
                                            <td colspan='4' style='background: cadetblue' ></td>

                                            <td>$som_sec_fille_3</td>
                                            <td>$som_sec_fg_garcon_3</td>
                                            <td>$som_sec_fille_4</td>
                                            <td>$som_sec_fg_garcon_4</td>
                                            <td>$som_sec_fille_5</td>
                                            <td>$som_sec_fg_garcon_5</td>
                                            <td>$som_sec_fille_6</td>
                                            <td>$som_sec_fg_garcon_6</td>

                                            <td class='tr'>$total_som_sec_fille </td>
                                            
                                            <td class='tr'>$total_som_sec_fg_garcon</td>
                                        </tr>"; 
                                    }
                                    elseif ($id_check == 1) {
                                        echo '<tr>
                                            
                                            
                                            <td rowspan="'.$nbr_option. '" >'.$nom_section.'</td>
                                            <td rowspan="0" >'.$nom_option.'</td>';
                                           //for ($i=0; $i < 4; $i++) { 
                                               echo "<td colspan='4' style='background: cadetblue'></td>";
                                            //}
                                            
                                            echo "<td>$som_sec_fille_3</td>
                                            <td>$som_sec_fg_garcon_3</td>
                                            <td>$som_sec_fille_4</td>
                                            <td>$som_sec_fg_garcon_4</td>
                                            <td>$som_sec_fille_5</td>
                                            <td>$som_sec_fg_garcon_5</td>
                                            <td>$som_sec_fille_6</td>
                                            <td>$som_sec_fg_garcon_6</td>
                                            <td class='tr'>$total_som_sec_fille</td>
                                            
                                            <td class='tr'>$total_som_sec_fg_garcon</td>
                                        </tr>"; 
                                    }
                                    else {
                                        echo '<tr>
                                            
                                            <td>'.$nom_option.'</td>';

                                            //for ($i=0; $i < 4; $i++) { 
                                               echo "<td colspan='4' style='background: cadetblue'></td>";
                                            //}
                                            
                                           echo " <td>$som_sec_fille_3</td>
                                            <td>$som_sec_fg_garcon_3</td>
                                            <td>$som_sec_fille_4</td>
                                            <td>$som_sec_fg_garcon_4</td>
                                            <td>$som_sec_fille_5</td>
                                            <td>$som_sec_fg_garcon_5</td>
                                            <td>$som_sec_fille_6</td>
                                            <td>$som_sec_fg_garcon_6</td>
                                            <td class='tr'>$total_som_sec_fille</td>
                                            <td class='tr'>$total_som_sec_fg_garcon</td>
                                        </tr>";
                                    }

                                    
                                   $id_check++;
                                    $id_o++;
                                }
                           
                               $id_s++; 
                            }
                            $total_general_1_f =$total_general_1_f + $som_sec_fille_1;
                            $total_general_1_fg =$total_general_1_fg + $som_sec_fg_garcon_1;

                            $total_general_2_f =$total_general_2_f + $som_sec_fille_2;
                            $total_general_2_fg =$total_general_2_fg + $som_sec_fg_garcon_2;

                            $total_general_3_f =$total_general_3_f + $total_sec_eff_3_fille;
                            $total_general_3_fg =$total_general_3_fg + $total_sec_eff_3_fg;

                            $total_general_4_f =$total_general_4_f + $total_sec_eff_4_fille;
                            $total_general_4_fg =$total_general_4_fg + $total_sec_eff_4_fg;

                            $total_general_5_f =$total_general_5_f + $total_sec_eff_5_fille;
                            $total_general_5_fg =$total_general_5_fg + $total_sec_eff_5_fg;

                            $total_general_6_f =$total_general_6_f + $total_sec_eff_6_fille;
                            $total_general_6_fg =$total_general_6_fg + $total_sec_eff_6_fg;

                            $total_general_f =$total_general_f + $tot_gen_fille;
                            $total_general_fg =$total_general_fg + $tot_gen_fg;


                             echo "<tr class='tr'>
                                    <td colspan='4'> TOTAL PAR OPTION / $nom_par2</td>
                                    
                                    <td>$som_sec_fille_1 </td>
                                    <td>$som_sec_fg_garcon_1 </td>
                                    <td>$som_sec_fille_2</td>
                                    <td>$som_sec_fg_garcon_2</td>

                                    <td>$total_sec_eff_3_fille</td>
                                    <td>$total_sec_eff_3_fg</td>
                                    <td>$total_sec_eff_4_fille</td>
                                    <td>$total_sec_eff_4_fg</td>
                                    <td>$total_sec_eff_5_fille</td>
                                    <td>$total_sec_eff_5_fg</td>
                                    <td>$total_sec_eff_6_fille</td>
                                    <td>$total_sec_eff_6_fg</td>
                                    <td>$tot_gen_fille </td>
                                    <td>$tot_gen_fg </td>
                                </tr>
                            ";
                            
                }
                            echo "<tr class='tr'>
                                    <td colspan='4'> TOTAL GENERAL SECONDAIRE</td>
                                    
                                    <td>$total_general_1_f</td>
                                    <td>$total_general_1_fg</td>
                                    <td>$total_general_2_f</td>
                                    <td>$total_general_2_fg</td>

                                    <td>$total_general_3_f</td>
                                    <td>$total_general_3_fg</td>
                                    <td>$total_general_4_f</td>
                                    <td>$total_general_4_fg</td>
                                    <td>$total_general_5_f</td>
                                    <td>$total_general_5_fg</td>
                                    <td>$total_general_6_f</td>
                                    <td>$total_general_6_fg</td>
                                    <td>$total_general_f</td>
                                    <td>$total_general_fg</td>
                                </tr>
                            "; 

                        ?>
                        
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