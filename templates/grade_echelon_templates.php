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
                             <li><a class="" href="qualification_personnel.php">Qualification du personnel </a></li>
                             <li><a class="" href="anciennete_personnel.php">Ancienetté dans le grade du personnel </a></li>
                             <li><a class="active" href="grade_echelon.php">Grade et echelon du personnel et enseignants du sécondaire</a></li>
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
                                <h2 class="text-uppercase">Grade et echelon du personnel</h2>
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
                                     <div class="col-sm-12 tab_min tableau_scroll tableau_tri_coord_sp" style="display: none1;">
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
                        <span class='titre_print text-uppercase'>Grade et echelon du personnel DE L' ANNEE 2017-2018</span><br>

                    </div>
                    <table id="affiche_relev_stat_table_min"  class="table-hover naledi_yellow  table-bordered  table-responsive pointInputTable table-condensed">
                        <thead>
                            <tr class="warning">
                                <th rowspan="2">N</th>
                                <th  class='rotate1' rowspan="2">PAROISSE</th>
                                <th class='rotate1' rowspan="2">NIV</th>
                                <th colspan="10">13 </th>
                                <th colspan="10">14 </th>
                                <th colspan="10">21 </th>
                                <th colspan="10">22 </th>
                                <th colspan="10">31 </th>
                                <th colspan="10">32 </th>
                                <th colspan="10">33 </th>
                                <th colspan="10">34 </th>
                                <th colspan="10">35 </th>
                                
                                
                                <th rowspan="2">TOT</th>
                                
                                              
                            </tr>
                            <tr class="warning">
                            <?php 
                            for ($i=0; $i < 9; $i++) { 
                                echo "<th class='rotate1'> 0 </th>";
                                echo "<th class='rotate1'> 1 </th>";
                                echo "<th class='rotate1'> 2 </th>";
                                echo "<th class='rotate1'> 3 </th>";
                                echo "<th class='rotate1'> 4 </th>";
                                echo "<th class='rotate1'> 5 </th>";
                                echo "<th class='rotate1'> 6 </th>";
                                echo "<th class='rotate1'> 7 </th>";
                                echo "<th class='rotate1'> 8 </th>";
                                echo "<th class='rotate1'> 9 </th>";
                            }
                                
                            ?>
                                
                                
                                              
                            </tr>
                             
                            
                        </thead>
                        <tbody>
                        
                                
                                
                                <?php

                                $_tot_130 = 0;
                                $_tot_131 = 0;
                                $_tot_132 = 0;
                                $_tot_133 = 0;
                                $_tot_134 = 0;
                                $_tot_135 = 0;
                                $_tot_136 = 0;
                                $_tot_137 = 0;
                                $_tot_138 = 0;
                                $_tot_139 = 0;

                                $_tot_140 = 0;
                                $_tot_141 = 0;
                                $_tot_142 = 0;
                                $_tot_143 = 0;
                                $_tot_144 = 0;
                                $_tot_145 = 0;
                                $_tot_146 = 0;
                                $_tot_147 = 0;
                                $_tot_148 = 0;
                                $_tot_149 = 0;

                                $_tot_210 = 0;
                                $_tot_211 = 0;
                                $_tot_212 = 0;
                                $_tot_213 = 0;
                                $_tot_214 = 0;
                                $_tot_215 = 0;
                                $_tot_216 = 0;
                                $_tot_217 = 0;
                                $_tot_218 = 0;
                                $_tot_219 = 0;

                                $_tot_220 = 0;
                                $_tot_221 = 0;
                                $_tot_222 = 0;
                                $_tot_223 = 0;
                                $_tot_224 = 0;
                                $_tot_225 = 0;
                                $_tot_226 = 0;
                                $_tot_227 = 0;
                                $_tot_228 = 0;
                                $_tot_229 = 0;

                                $_tot_310 = 0;
                                $_tot_311 = 0;
                                $_tot_312 = 0;
                                $_tot_313 = 0;
                                $_tot_314 = 0;
                                $_tot_315 = 0;
                                $_tot_316 = 0;
                                $_tot_317 = 0;
                                $_tot_318 = 0;
                                $_tot_319 = 0;

                                $_tot_320 = 0;
                                $_tot_321 = 0;
                                $_tot_322 = 0;
                                $_tot_323 = 0;
                                $_tot_324 = 0;
                                $_tot_325 = 0;
                                $_tot_326 = 0;
                                $_tot_327 = 0;
                                $_tot_328 = 0;
                                $_tot_329 = 0;

                                $_tot_330 = 0;
                                $_tot_331 = 0;
                                $_tot_332 = 0;
                                $_tot_333 = 0;
                                $_tot_334 = 0;
                                $_tot_335 = 0;
                                $_tot_336 = 0;
                                $_tot_337 = 0;
                                $_tot_338 = 0;
                                $_tot_339 = 0;

                                $_tot_340 = 0;
                                $_tot_341 = 0;
                                $_tot_342 = 0;
                                $_tot_343 = 0;
                                $_tot_344 = 0;
                                $_tot_345 = 0;
                                $_tot_346 = 0;
                                $_tot_347 = 0;
                                $_tot_348 = 0;
                                $_tot_349 = 0;

                                $_tot_350 = 0;
                                $_tot_351 = 0;
                                $_tot_352 = 0;
                                $_tot_353 = 0;
                                $_tot_354 = 0;
                                $_tot_355 = 0;
                                $_tot_356 = 0;
                                $_tot_357 = 0;
                                $_tot_358 = 0;
                                $_tot_359 = 0;

                                //total generale
                                $tot_general = 0;

                                
                                $tab_grade = ["13","14","21","22","31","32","33","34","35"];
                                $id_pp = 0;

                            $tab_paroisse = query("SELECT * FROM sous_div");
                            $num=1;
                            foreach ($tab_paroisse as $paroisse) {
                                $tab_donne;
                               
                                
                                
                                $id_p = $paroisse["id"];
                                $nom_p = $paroisse["nom_sous_div"];
                                $nbr_ecol_mat = 0;
                                
                                $_130 = 0;
                                $_131 = 0;
                                $_132 = 0;
                                $_133 = 0;
                                $_134 = 0;
                                $_135 = 0;
                                $_136 = 0;
                                $_137 = 0;
                                $_138 = 0;
                                $_139 = 0;

                                $_140 = 0;
                                $_141 = 0;
                                $_142 = 0;
                                $_143 = 0;
                                $_144 = 0;
                                $_145 = 0;
                                $_146 = 0;
                                $_147 = 0;
                                $_148 = 0;
                                $_149 = 0;

                                $_210 = 0;
                                $_211 = 0;
                                $_212 = 0;
                                $_213 = 0;
                                $_214 = 0;
                                $_215 = 0;
                                $_216 = 0;
                                $_217 = 0;
                                $_218 = 0;
                                $_219 = 0;

                                $_220 = 0;
                                $_221 = 0;
                                $_222 = 0;
                                $_223 = 0;
                                $_224 = 0;
                                $_225 = 0;
                                $_226 = 0;
                                $_227 = 0;
                                $_228 = 0;
                                $_229 = 0;

                                $_310 = 0;
                                $_311 = 0;
                                $_312 = 0;
                                $_313 = 0;
                                $_314 = 0;
                                $_315 = 0;
                                $_316 = 0;
                                $_317 = 0;
                                $_318 = 0;
                                $_319 = 0;

                                $_320 = 0;
                                $_321 = 0;
                                $_322 = 0;
                                $_323 = 0;
                                $_324 = 0;
                                $_325 = 0;
                                $_326 = 0;
                                $_327 = 0;
                                $_328 = 0;
                                $_329 = 0;

                                $_330 = 0;
                                $_331 = 0;
                                $_332 = 0;
                                $_333 = 0;
                                $_334 = 0;
                                $_335 = 0;
                                $_336 = 0;
                                $_337 = 0;
                                $_338 = 0;
                                $_339 = 0;

                                $_340 = 0;
                                $_341 = 0;
                                $_342 = 0;
                                $_343 = 0;
                                $_344 = 0;
                                $_345 = 0;
                                $_346 = 0;
                                $_347 = 0;
                                $_348 = 0;
                                $_349 = 0;

                                $_350 = 0;
                                $_351 = 0;
                                $_352 = 0;
                                $_353 = 0;
                                $_354 = 0;
                                $_355 = 0;
                                $_356 = 0;
                                $_357 = 0;
                                $_358 = 0;
                                $_359 = 0;

                                //TOT DROIT
                                $tot_droit = 0;

                                //$tab_sous_div = query("SELECT * FROM sous_div where belongs_to = ?",$id_p);
                                //foreach ($tab_sous_div as $sd) {
                                    //$id_sd = $sd["id"];
                                   

                                    $tab_ecole = query("SELECT * FROM ecole2 where belongs_to = ? and id_niveau = 'Secondaire'  ", $id_p);
                                    foreach ($tab_ecole as $tb_ec) {
                                        

                                        if ($tb_ec["id"] >0) {
                                            //echo "<br><br>";

                                            /*if ($tb_ec["id_niveau"] == "Maternelle") {
                                            }

                                            elseif ($tb_ec["id_niveau"] == "Primaire") {
                                            }
*/
                                            //elseif ($tb_ec["id_niveau"] == "Secondaire") {
                                               
                                                foreach ($tab_grade as $grade) {
                                                    //echo $nom_p."__".$tb_ec["nom_ecole"]."=> $grade<br>";
                                                //}
                                if ($grade == "13") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_130 =$_130 + $grd_130[0]["nbr"];
                                                $_131 =$_131 + $grd_131[0]["nbr"];
                                                $_132 =$_132 + $grd_132[0]["nbr"];
                                                $_133 =$_133 + $grd_133[0]["nbr"];
                                                $_134 =$_134 + $grd_134[0]["nbr"];
                                                $_135 =$_135 + $grd_135[0]["nbr"];
                                                $_136 =$_136 + $grd_136[0]["nbr"];
                                                $_137 =$_137 + $grd_137[0]["nbr"];
                                                $_138 =$_138 + $grd_138[0]["nbr"];
                                                $_139 =$_139 + $grd_139[0]["nbr"];

                                } 
                                if ($grade == "14") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_140 =$_140 + $grd_130[0]["nbr"];
                                                $_141 =$_141 +  $grd_131[0]["nbr"];
                                                $_142 =$_142 +  $grd_132[0]["nbr"];
                                                $_143 =$_143 + $grd_133[0]["nbr"];
                                                $_144 =$_144 + $grd_134[0]["nbr"];
                                                $_145 =$_145 + $grd_135[0]["nbr"];
                                                $_146 =$_146 + $grd_136[0]["nbr"];
                                                $_147 =$_147 +  $grd_137[0]["nbr"];
                                                $_148 =$_148 + $grd_138[0]["nbr"];
                                                $_149 =$_149 + $grd_139[0]["nbr"];

                                } 

                                if ($grade == "21") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_210 =$_210 + $grd_130[0]["nbr"];
                                                $_211 =$_211 +  $grd_131[0]["nbr"];
                                                $_212 =$_212 +  $grd_132[0]["nbr"];
                                                $_213 =$_213 + $grd_133[0]["nbr"];
                                                $_214 =$_214 + $grd_134[0]["nbr"];
                                                $_215 =$_215 + $grd_135[0]["nbr"];
                                                $_216 =$_216 + $grd_136[0]["nbr"];
                                                $_217 =$_217 +  $grd_137[0]["nbr"];
                                                $_218 =$_218 + $grd_138[0]["nbr"];
                                                $_219 =$_219 + $grd_139[0]["nbr"];

                                }
                                 if ($grade == "22") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_220 =$_220 + $grd_130[0]["nbr"];
                                                $_221 =$_221 +  $grd_131[0]["nbr"];
                                                $_222 =$_222 +  $grd_132[0]["nbr"];
                                                $_223 =$_223 + $grd_133[0]["nbr"];
                                                $_224 =$_224 + $grd_134[0]["nbr"];
                                                $_225 =$_225 + $grd_135[0]["nbr"];
                                                $_226 =$_226 + $grd_136[0]["nbr"];
                                                $_227 =$_227 +  $grd_137[0]["nbr"];
                                                $_228 =$_228 + $grd_138[0]["nbr"];
                                                $_229 =$_229 + $grd_139[0]["nbr"];

                                }
                                if ($grade == "31") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_310 =$_310 + $grd_130[0]["nbr"];
                                                $_311 =$_311 +  $grd_131[0]["nbr"];
                                                $_312 =$_312 +  $grd_132[0]["nbr"];
                                                $_313 =$_313 + $grd_133[0]["nbr"];
                                                $_314 =$_314 + $grd_134[0]["nbr"];
                                                $_315 =$_315 + $grd_135[0]["nbr"];
                                                $_316 =$_316 + $grd_136[0]["nbr"];
                                                $_317 =$_317 +  $grd_137[0]["nbr"];
                                                $_318 =$_318 + $grd_138[0]["nbr"];
                                                $_319 =$_319 + $grd_139[0]["nbr"];

                                }  
                                if ($grade == "32") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_320 =$_320 +$grd_130[0]["nbr"];
                                                $_321 =$_321 + $grd_131[0]["nbr"];
                                                $_322 =$_322 + $grd_132[0]["nbr"];
                                                $_323 =$_323 +$grd_133[0]["nbr"];
                                                $_324 =$_324 +$grd_134[0]["nbr"];
                                                $_325 =$_325 +$grd_135[0]["nbr"];
                                                $_326 =$_326 +$grd_136[0]["nbr"];
                                                $_327 =$_327 + $grd_137[0]["nbr"];
                                                $_328 =$_328 +$grd_138[0]["nbr"];
                                                $_329 =$_329 +$grd_139[0]["nbr"];

                                } 
                                if ($grade == "33") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_330 =$_330 + $grd_130[0]["nbr"];
                                                $_331 =$_331 +  $grd_131[0]["nbr"];
                                                $_332 =$_332 +  $grd_132[0]["nbr"];
                                                $_333 =$_333 + $grd_133[0]["nbr"];
                                                $_334 =$_334 + $grd_134[0]["nbr"];
                                                $_335 =$_335 + $grd_135[0]["nbr"];
                                                $_336 =$_336 + $grd_136[0]["nbr"];
                                                $_337 =$_337 +  $grd_137[0]["nbr"];
                                                $_338 =$_338 + $grd_138[0]["nbr"];
                                                $_339 =$_339 + $grd_139[0]["nbr"];

                                }

                                if ($grade == "34") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_340 =$_340 + $grd_130[0]["nbr"];
                                                $_341 =$_341 +  $grd_131[0]["nbr"];
                                                $_342 =$_342 +  $grd_132[0]["nbr"];
                                                $_343 =$_343 + $grd_133[0]["nbr"];
                                                $_344 =$_344 + $grd_134[0]["nbr"];
                                                $_345 =$_345 + $grd_135[0]["nbr"];
                                                $_346 =$_346 + $grd_136[0]["nbr"];
                                                $_347 =$_347 +  $grd_137[0]["nbr"];
                                                $_348 =$_348 + $grd_138[0]["nbr"];
                                                $_349 =$_349 + $grd_139[0]["nbr"];

                                }  
                                if ($grade == "35") {
                                    $grd_130 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%0'  ",$tb_ec["id"]);

                                                $grd_131 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%1'  ",$tb_ec["id"]);

                                                $grd_132 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%2'  ",$tb_ec["id"]);

                                                $grd_133 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%3'  ",$tb_ec["id"]);

                                                $grd_134 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%4'  ",$tb_ec["id"]);

                                                $grd_135 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%5'  ",$tb_ec["id"]);

                                                $grd_136 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%6'  ",$tb_ec["id"]);

                                                $grd_137 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%7'  ",$tb_ec["id"]);

                                                $grd_138 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%8'  ",$tb_ec["id"]);

                                                $grd_139 = query("SELECT count(*) as nbr FROM personnel WHERE ecole_affect = ? and grade_act_p LIKE '$grade%' and grade_act_p like '%9'  ",$tb_ec["id"]);

                                                $_350 =$_350 + $grd_130[0]["nbr"];
                                                $_351 =$_351 + $grd_131[0]["nbr"];
                                                $_352 =$_352 + $grd_132[0]["nbr"];
                                                $_353 =$_353 + $grd_133[0]["nbr"];
                                                $_354 =$_354 + $grd_134[0]["nbr"];
                                                $_355 =$_355 + $grd_135[0]["nbr"];
                                                $_356 =$_356 + $grd_136[0]["nbr"];
                                                $_357 =$_357 + $grd_137[0]["nbr"];
                                                $_358 =$_358 + $grd_138[0]["nbr"];
                                                $_359 =$_359 + $grd_139[0]["nbr"];

                                } 
                                                

                                //fin foraech 13 14 121 22 31 32 ...               
                                }

                                                

                                                //SELECT id, nom_p, grade_act_p FROM `personnel` where grade_act_p LIKE '13%' and grade_act_p like '%0'



                                            //fin sec    
                                            //}

                                            
                                        //fin 0
                                        //}


                                        //echo $nbr_personl[0]["nbr"]."<br>"; 
                                        //echo "SELECT COUNT(*) AS nbr FROM personnel WHERE ecole_affect = ".$tb_ec["id"]."<br>";
                                        //qualdip_p
                                        
                                      //fin ecole   
                                     }
                                     //$tab_donne[]=


                                }
                                //sommation totaux droits
                                $tot_droit= $_130+$_131+$_132+$_133+$_134+$_135+$_136+$_137+$_138+$_139+
                                $_140+$_141+$_142+$_143+$_144+$_145+$_146+$_147+$_148+$_149+
                                $_210+$_211+$_212+$_213+$_214+$_215+$_216+$_217+$_218+$_219+
                                $_220+$_221+$_222+$_223+$_224+$_225+$_226+$_227+$_228+$_229+
                                $_310+$_311+$_312+$_313+$_314+$_315+$_316+$_317+$_318+$_319+
                                $_320+$_321+$_322+$_323+$_324+$_325+$_326+$_327+$_328+$_329+
                                $_330+$_331+$_332+$_333+$_334+$_335+$_336+$_337+$_338+$_339+
                                $_340+$_341+$_342+$_343+$_344+$_345+$_346+$_347+$_348+$_349+
                                +$_350+$_351+$_352+$_353+$_354+$_355+$_356+$_357+$_358+$_359;

                                //sommation total general
                                $tot_general = $tot_general + $tot_droit;

                                $id_pp++;
                                echo "<tr>";
                                        echo "<td rowspan='0'>$id_pp</td>";
                                        echo "<td rowspan='0'>$nom_p</td>";
                                        echo "<td >SEC</td>";
                                        //for ($i=0; $i < 9; $i++) { 

                                            echo "<td>". ($_130 == 0  ? '' : $_130)."</td>";
                                            echo "<td>". ($_131 == 0  ? '' : $_131)."</td>";
                                            echo "<td>". ($_132 == 0  ? '' : $_132)."</td>";
                                            echo "<td>". ($_133 == 0  ? '' : $_133)."</td>";
                                            echo "<td>". ($_134 == 0  ? '' : $_134)."</td>";
                                            echo "<td>". ($_135 == 0  ? '' : $_135)."</td>";
                                            echo "<td>". ($_136 == 0  ? '' : $_136)."</td>";
                                            echo "<td>". ($_137 == 0  ? '' : $_137)."</td>";
                                            echo "<td>". ($_138 == 0  ? '' : $_138)."</td>";
                                            echo "<td>". ($_139 == 0  ? '' : $_139)."</td>";

                                            echo "<td>". ($_140 == 0  ? '' : $_140)."</td>";
                                            echo "<td>". ($_141 == 0  ? '' : $_141)."</td>";
                                            echo "<td>". ($_142 == 0  ? '' : $_142)."</td>";
                                            echo "<td>". ($_143 == 0  ? '' : $_143)."</td>";
                                            echo "<td>". ($_144 == 0  ? '' : $_144)."</td>";
                                            echo "<td>". ($_145 == 0  ? '' : $_145)."</td>";
                                            echo "<td>". ($_146 == 0  ? '' : $_146)."</td>";
                                            echo "<td>". ($_147 == 0  ? '' : $_147)."</td>";
                                            echo "<td>". ($_148 == 0  ? '' : $_148)."</td>";
                                            echo "<td>". ($_149 == 0  ? '' : $_149)."</td>";

                                            echo "<td>". ($_210 == 0  ? '' : $_210)."</td>";
                                            echo "<td>". ($_211 == 0  ? '' : $_211)."</td>";
                                            echo "<td>". ($_212 == 0  ? '' : $_212)."</td>";
                                            echo "<td>". ($_213 == 0  ? '' : $_213)."</td>";
                                            echo "<td>". ($_214 == 0  ? '' : $_214)."</td>";
                                            echo "<td>". ($_215 == 0  ? '' : $_215)."</td>";
                                            echo "<td>". ($_216 == 0  ? '' : $_216)."</td>";
                                            echo "<td>". ($_217 == 0  ? '' : $_217)."</td>";
                                            echo "<td>". ($_218 == 0  ? '' : $_218)."</td>";
                                            echo "<td>". ($_219 == 0  ? '' : $_219)."</td>";

                                            echo "<td>". ($_220 == 0  ? '' : $_220)."</td>";
                                            echo "<td>". ($_221 == 0  ? '' : $_221)."</td>";
                                            echo "<td>". ($_222 == 0  ? '' : $_222)."</td>";
                                            echo "<td>". ($_223 == 0  ? '' : $_223)."</td>";
                                            echo "<td>". ($_224 == 0  ? '' : $_224)."</td>";
                                            echo "<td>". ($_225 == 0  ? '' : $_225)."</td>";
                                            echo "<td>". ($_226 == 0  ? '' : $_226)."</td>";
                                            echo "<td>". ($_227 == 0  ? '' : $_227)."</td>";
                                            echo "<td>". ($_228 == 0  ? '' : $_228)."</td>";
                                            echo "<td>". ($_229 == 0  ? '' : $_229)."</td>";

                                            echo "<td>". ($_310 == 0  ? '' : $_310)."</td>";
                                            echo "<td>". ($_311 == 0  ? '' : $_311)."</td>";
                                            echo "<td>". ($_312 == 0  ? '' : $_312)."</td>";
                                            echo "<td>". ($_313 == 0  ? '' : $_313)."</td>";
                                            echo "<td>". ($_314 == 0  ? '' : $_314)."</td>";
                                            echo "<td>". ($_315 == 0  ? '' : $_315)."</td>";
                                            echo "<td>". ($_316 == 0  ? '' : $_316)."</td>";
                                            echo "<td>". ($_317 == 0  ? '' : $_317)."</td>";
                                            echo "<td>". ($_318 == 0  ? '' : $_318)."</td>";
                                            echo "<td>". ($_319 == 0  ? '' : $_319)."</td>";
                                            echo "<td>". ($_320 == 0  ? '' : $_320)."</td>";
                                            echo "<td>". ($_321 == 0  ? '' : $_321)."</td>";
                                            echo "<td>". ($_322 == 0  ? '' : $_322)."</td>";
                                            echo "<td>". ($_323 == 0  ? '' : $_323)."</td>";
                                            echo "<td>". ($_324 == 0  ? '' : $_324)."</td>";
                                            echo "<td>". ($_325 == 0  ? '' : $_325)."</td>";
                                            echo "<td>". ($_326 == 0  ? '' : $_326)."</td>";
                                            echo "<td>". ($_327 == 0  ? '' : $_327)."</td>";
                                            echo "<td>". ($_328 == 0  ? '' : $_328)."</td>";
                                            echo "<td>". ($_329 == 0  ? '' : $_329)."</td>";
                                            echo "<td>". ($_330 == 0  ? '' : $_330)."</td>";
                                            echo "<td>". ($_331 == 0  ? '' : $_331)."</td>";
                                            echo "<td>". ($_332 == 0  ? '' : $_332)."</td>";
                                            echo "<td>". ($_333 == 0  ? '' : $_333)."</td>";
                                            echo "<td>". ($_334 == 0  ? '' : $_334)."</td>";
                                            echo "<td>". ($_335 == 0  ? '' : $_335)."</td>";
                                            echo "<td>". ($_336 == 0  ? '' : $_336)."</td>";
                                            echo "<td>". ($_337 == 0  ? '' : $_337)."</td>";
                                            echo "<td>". ($_338 == 0  ? '' : $_338)."</td>";
                                            echo "<td>". ($_339 == 0  ? '' : $_339)."</td>";
                                            echo "<td>". ($_340 == 0  ? '' : $_340)."</td>";
                                            echo "<td>". ($_341 == 0  ? '' : $_341)."</td>";
                                            echo "<td>". ($_342 == 0  ? '' : $_342)."</td>";
                                            echo "<td>". ($_343 == 0  ? '' : $_343)."</td>";
                                            echo "<td>". ($_344 == 0  ? '' : $_344)."</td>";
                                            echo "<td>". ($_345 == 0  ? '' : $_345)."</td>";
                                            echo "<td>". ($_346 == 0  ? '' : $_346)."</td>";
                                            echo "<td>". ($_347 == 0  ? '' : $_347)."</td>";
                                            echo "<td>". ($_348 == 0  ? '' : $_348)."</td>";
                                            echo "<td>". ($_349 == 0  ? '' : $_349)."</td>";
                                            echo "<td>". ($_350 == 0  ? '' : $_350)."</td>";
                                            echo "<td>". ($_351 == 0  ? '' : $_351)."</td>";
                                            echo "<td>". ($_352 == 0  ? '' : $_352)."</td>";
                                            echo "<td>". ($_353 == 0  ? '' : $_353)."</td>";
                                            echo "<td>". ($_354 == 0  ? '' : $_354)."</td>";
                                            echo "<td>". ($_355 == 0  ? '' : $_355)."</td>";
                                            echo "<td>". ($_356 == 0  ? '' : $_356)."</td>";
                                            echo "<td>". ($_357 == 0  ? '' : $_357)."</td>";
                                            echo "<td>". ($_358 == 0  ? '' : $_358)."</td>";
                                            echo "<td>". ($_359 == 0  ? '' : $_359)."</td>";
                                        
                                           
                                               
                                        //}

                                             
                                        echo "<td class='tr'>$tot_droit</td>";
                                        

                                        echo "</tr>";

                                        $_tot_130 = $_tot_130 + $_130;
                                        $_tot_131 = $_tot_131 + $_131;
                                        $_tot_132 = $_tot_132 + $_132;
                                        $_tot_133 = $_tot_133 + $_133;
                                        $_tot_134 = $_tot_134 + $_134;
                                        $_tot_135 = $_tot_135 + $_135;
                                        $_tot_136 = $_tot_136 + $_136;
                                        $_tot_137 = $_tot_137 + $_137;
                                        $_tot_138 = $_tot_138 + $_138;
                                        $_tot_139 = $_tot_139 + $_139;
                                        
                                        $_tot_140 = $_tot_140 + $_140;
                                        $_tot_141 = $_tot_141 + $_141;
                                        $_tot_142 = $_tot_142 + $_142;
                                        $_tot_143 = $_tot_143 + $_143;
                                        $_tot_144 = $_tot_144 + $_144;
                                        $_tot_145 = $_tot_145 + $_145;
                                        $_tot_146 = $_tot_146 + $_146;
                                        $_tot_147 = $_tot_147 + $_147;
                                        $_tot_148 = $_tot_148 + $_148;
                                        $_tot_149 = $_tot_149 + $_149;
                                        
                                        $_tot_210 = $_tot_210 + $_210;
                                        $_tot_211 = $_tot_211 + $_211;
                                        $_tot_212 = $_tot_212 + $_212;
                                        $_tot_213 = $_tot_213 + $_213;
                                        $_tot_214 = $_tot_214 + $_214;
                                        $_tot_215 = $_tot_215 + $_215;
                                        $_tot_216 = $_tot_216 + $_216;
                                        $_tot_217 = $_tot_217 + $_217;
                                        $_tot_218 = $_tot_218 + $_218;
                                        
                                        $_tot_219 = $_tot_219 + $_219;
                                        $_tot_220 = $_tot_220 + $_220;
                                        $_tot_221 = $_tot_221 + $_221;
                                        $_tot_222 = $_tot_222 + $_222;
                                        $_tot_223 = $_tot_223 + $_223;
                                        $_tot_224 = $_tot_224 + $_224;
                                        $_tot_225 = $_tot_225 + $_225;
                                        $_tot_226 = $_tot_226 + $_226;
                                        $_tot_227 = $_tot_227 + $_227;
                                        $_tot_228 = $_tot_228 + $_228;
                                        $_tot_229 = $_tot_229 + $_229;
                                        
                                        $_tot_310 = $_tot_310 + $_310;
                                        $_tot_311 = $_tot_311 + $_311;
                                        $_tot_312 = $_tot_312 + $_312;
                                        $_tot_313 = $_tot_313 + $_313;
                                        $_tot_314 = $_tot_314 + $_314;
                                        $_tot_315 = $_tot_315 + $_315;
                                        $_tot_316 = $_tot_316 + $_316;
                                        $_tot_317 = $_tot_317 + $_317;
                                        $_tot_318 = $_tot_318 + $_318;
                                        $_tot_319 = $_tot_319 + $_319;
                                        
                                        $_tot_320 = $_tot_320 + $_320;
                                        $_tot_321 = $_tot_321 + $_321;
                                        $_tot_322 = $_tot_322 + $_322;
                                        $_tot_323 = $_tot_323 + $_323;
                                        $_tot_324 = $_tot_324 + $_324;
                                        $_tot_325 = $_tot_325 + $_325;
                                        $_tot_326 = $_tot_326 + $_326;
                                        $_tot_327 = $_tot_327 + $_327;
                                        $_tot_328 = $_tot_328 + $_328;
                                        $_tot_329 = $_tot_329 + $_329;
                                        
                                        $_tot_330 = $_tot_330 + $_330;
                                        $_tot_331 = $_tot_331 + $_331;
                                        $_tot_332 = $_tot_332 + $_332;
                                        $_tot_333 = $_tot_333 + $_333;
                                        $_tot_334 = $_tot_334 + $_334;
                                        $_tot_335 = $_tot_335 + $_335;
                                        $_tot_336 = $_tot_336 + $_336;
                                        $_tot_337 = $_tot_337 + $_337;
                                        $_tot_338 = $_tot_338 + $_338;
                                        
                                        $_tot_339 = $_tot_339 + $_339;
                                        $_tot_340 = $_tot_340 + $_340;
                                        $_tot_341 = $_tot_341 + $_341;
                                        $_tot_342 = $_tot_342 + $_342;
                                        $_tot_343 = $_tot_343 + $_343;
                                        $_tot_344 = $_tot_344 + $_344;
                                        $_tot_345 = $_tot_345 + $_345;
                                        $_tot_346 = $_tot_346 + $_346;
                                        $_tot_347 = $_tot_347 + $_347;
                                        $_tot_348 = $_tot_348 + $_348;
                                        
                                        $_tot_349 = $_tot_349 + $_349;
                                        $_tot_350 = $_tot_350 + $_350;
                                        $_tot_351 = $_tot_351 + $_351;
                                        $_tot_352 = $_tot_352 + $_352;
                                        $_tot_353 = $_tot_353 + $_353;
                                        $_tot_354 = $_tot_354 + $_354;
                                        $_tot_355 = $_tot_355 + $_355;
                                        $_tot_356 = $_tot_356 + $_356;
                                        $_tot_357 = $_tot_357 + $_357;
                                        $_tot_358 = $_tot_358 + $_358;
                                        $_tot_359 = $_tot_359 + $_359;



                                                                           
                                }
                                //TOTAUX GENERAUX
                                    

                               /* echo "<tr class='tr'>";

                                echo "<td colspan='3'>TOTAL MATERNELLE</td>";
                                        
                                       for ($i=0; $i < 10; $i++) { 
                                           echo "<td>--</td>";
                                       }

                                      
                                        echo "<td class='tr'>$</td>";

                                echo "</tr>"; 
                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL PRIMAIRE</td>";
                                        

                                        for ($i=0; $i < 10; $i++) { 
                                           echo "<td>*</td>";
                                       }


                                        
                                        echo "<td class='tr'>$</td>";

                                echo "</tr>";*/ 
                                echo "<tr class='tr'>";
                                        
                                        echo "<td colspan='3'>TOTAL SECONDAIRE</td>";
                                        /*for ($i=0; $i < 17; $i++) { 
                                            echo "<td> -</td>";
                                            echo "<td> -</td>";
                                               
                                        }*/


                                            echo "<td>$_tot_130</td>";
                                            echo "<td>$_tot_131</td>";
                                            echo "<td>$_tot_132</td>";
                                            echo "<td>$_tot_133</td>";
                                            echo "<td>$_tot_134</td>";
                                            echo "<td>$_tot_135</td>";
                                            echo "<td>$_tot_136</td>";
                                            echo "<td>$_tot_137</td>";
                                            echo "<td>$_tot_138</td>";
                                            echo "<td>$_tot_139</td>";

                                            echo "<td>$_tot_140</td>";
                                            echo "<td>$_tot_141</td>";
                                            echo "<td>$_tot_142</td>";
                                            echo "<td>$_tot_143</td>";
                                            echo "<td>$_tot_144</td>";
                                            echo "<td>$_tot_145</td>";
                                            echo "<td>$_tot_146</td>";
                                            echo "<td>$_tot_147</td>";
                                            echo "<td>$_tot_148</td>";
                                            echo "<td>$_tot_149</td>";

                                            echo "<td>$_tot_210</td>";
                                            echo "<td>$_tot_211</td>";
                                            echo "<td>$_tot_212</td>";
                                            echo "<td>$_tot_213</td>";
                                            echo "<td>$_tot_214</td>";
                                            echo "<td>$_tot_215</td>";
                                            echo "<td>$_tot_216</td>";
                                            echo "<td>$_tot_217</td>";
                                            echo "<td>$_tot_218</td>";
                                            echo "<td>$_tot_219</td>";

                                            echo "<td>$_tot_220</td>";
                                            echo "<td>$_tot_221</td>";
                                            echo "<td>$_tot_222</td>";
                                            echo "<td>$_tot_223</td>";
                                            echo "<td>$_tot_224</td>";
                                            echo "<td>$_tot_225</td>";
                                            echo "<td>$_tot_226</td>";
                                            echo "<td>$_tot_227</td>";
                                            echo "<td>$_tot_228</td>";
                                            echo "<td>$_tot_229</td>";

                                            echo "<td>$_tot_310</td>";
                                            echo "<td>$_tot_311</td>";
                                            echo "<td>$_tot_312</td>";
                                            echo "<td>$_tot_313</td>";
                                            echo "<td>$_tot_314</td>";
                                            echo "<td>$_tot_315</td>";
                                            echo "<td>$_tot_316</td>";
                                            echo "<td>$_tot_317</td>";
                                            echo "<td>$_tot_318</td>";
                                            echo "<td>$_tot_319</td>";

                                            echo "<td>$_tot_320</td>";
                                            echo "<td>$_tot_321</td>";
                                            echo "<td>$_tot_322</td>";
                                            echo "<td>$_tot_323</td>";
                                            echo "<td>$_tot_324</td>";
                                            echo "<td>$_tot_325</td>";
                                            echo "<td>$_tot_326</td>";
                                            echo "<td>$_tot_327</td>";
                                            echo "<td>$_tot_328</td>";
                                            echo "<td>$_tot_329</td>";

                                            echo "<td>$_tot_330</td>";
                                            echo "<td>$_tot_331</td>";
                                            echo "<td>$_tot_332</td>";
                                            echo "<td>$_tot_333</td>";
                                            echo "<td>$_tot_334</td>";
                                            echo "<td>$_tot_335</td>";
                                            echo "<td>$_tot_336</td>";
                                            echo "<td>$_tot_337</td>";
                                            echo "<td>$_tot_338</td>";
                                            echo "<td>$_tot_339</td>";

                                            echo "<td>$_tot_340</td>";
                                            echo "<td>$_tot_341</td>";
                                            echo "<td>$_tot_342</td>";
                                            echo "<td>$_tot_343</td>";
                                            echo "<td>$_tot_344</td>";
                                            echo "<td>$_tot_345</td>";
                                            echo "<td>$_tot_346</td>";
                                            echo "<td>$_tot_347</td>";
                                            echo "<td>$_tot_348</td>";
                                            echo "<td>$_tot_349</td>";

                                            echo "<td>$_tot_350</td>";
                                            echo "<td>$_tot_351</td>";
                                            echo "<td>$_tot_352</td>";
                                            echo "<td>$_tot_353</td>";
                                            echo "<td>$_tot_354</td>";
                                            echo "<td>$_tot_355</td>";
                                            echo "<td>$_tot_356</td>";
                                            echo "<td>$_tot_357</td>";
                                            echo "<td>$_tot_358</td>";
                                            echo "<td>$_tot_359</td>";



                                       
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