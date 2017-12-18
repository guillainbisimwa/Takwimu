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
							<li><a href="utilisateur.php">Utilisateur</a></li> 
                            <li ><a href="section_option.php">Section / Option</a></li>
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
                        <a href="#" data-ma-action="submenu-toggle">
                        <i class="zmdi zmdi-format-list-bulleted"></i>Affichage des résultats</a>

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
                             <li><a class="" href="grade_echelon.php">Grade et echelon du personnel et enseignants du sécondaire</a></li>
                             <li><a class="active" href="mise_en_place.php">Mise en place du personnel</a></li> 
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
                            <div class="card-header bgm-bluegray1 ch-alt m-b-20">
                               <h2 class="text-uppercase" style="color:#000 !important">
                               
                                
                                    MISE EN PLACE DU PERSONNEL

                       
                    </h2>

                               
								<div class="row">
                                            <div class="col-sm-9">
                                            <select id="select_ecole" data-live-search="true" class="selectpicker"  title="Selectionner une ecole"  tabindex="-98"  >
                                         
                                        <?php 
                                         $sous_d = query("SELECT * FROM sous_div");

                                        foreach($sous_d as $niv){
                                            $nom_sous_d = $niv["nom_sous_div"];
                                            $id_sd = $niv["id"];
											$id_belongs_sd = $niv["belongs_to"];

                                            //retouver la paroisse
                                            $nom_p_req = query("SELECT * FROM paroisse2 WHERE id = ?",$id_belongs_sd);
                                            $nom_p = $nom_p_req[0]["nom_paroisse"];

                                            // retrouver coordination sous pro
                                            $nom_cood_sp = query("SELECT * FROM `coordination_sp` WHERE id = ? ",$nom_p_req[0]["belongs_to"]);

                                            // retrouver diocese
                                            $nom_d_req = query("SELECT * FROM diocese WHERE id = ? ",$nom_cood_sp[0]["belongs_to"]);
                                            $nom_d = $nom_d_req[0]["nom_diocese"];




                                            $table_option1 = query("SELECT * FROM ecole2 WHERE belongs_to = ? ", $id_sd );
                                            echo("<optgroup label='PAROISSE $nom_p (SOUS DIVISION DE $nom_sous_d)'>");
        
        foreach ($table_option1 as $option1) {
            $nom_ecole = $option1["nom_ecole"];
            $id_e = $option1["id"];
            $niveau = $option1["id_niveau"];
            //check si les donnes exist dans les tables class_maternel class_pri _calss_secon_co et class_sec_cl
            //SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_secondaire_co WHERE id_ecole = 3
            
                echo("<option  value='$nom_ecole**$niveau**$nom_p**$nom_sous_d'>" .$nom_ecole ."</option>");
            

        }
                                             
                                             echo "</optgroup>";

											//echo("<option class='text-uppercase' >SOUS DIVISION DE $nom_sous_d </option>");
										}
                                        
								
                                    ?>  
                                    </select>
                                    
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="select_ecole_btn_mise_en_place" class="btn btn-primary">Confirmer</button>
                                    </div>
                                      
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

                                    <h2 class="center_naledi text-uppercase"> <span id="niveau_eff"> </span> <span id="nom_ecole_eff"></span> </h2>
                                    <small class="center_naledi"><span id="paroisse_eff"> </span><span id="diocese_eff"> </span></small>
                

                   <div id="tableau_cl"> 
                        

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