<?php 
    
    if(isset($_SESSION['current_session'])){
        if($_SESSION['current_session'] == "Analyste")
        {
            header("Location: " . "logout.php");
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
                    <?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin"): ?>
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

                        <ul>
                            <li><a class="active" href="gestion_personnel.php">Enregistrer et afficher le personnel </a></li>
                             

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
                                <h2>PERSONNEL ADMINISTRATIF, ENSEIGNANT ET OUVRIER</h2>
                                <ul class="actions">
                                        <li>
                                            <a href="#">
                                                <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="zmdi zmdi-delete"></i>
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
                                <div class="t-add">
                                    <i class="bgm-red ta-btn zmdi zmdi-edit" data-ma-action="todo-form-open"></i>

                                    <!-- <div class="ta-block p-20">
                                        Modification ,,...
                                        <div class="tab-actions">
                                            <a data-ma-action="todo-form-close" href="#" class="c-red"><i class="zmdi zmdi-close"></i></a>
                                            <a data-ma-action="todo-form-close" href="#" class="c-green"><i class="zmdi zmdi-check"></i></a>
                                        </div>
                                    </div> -->
                                    <?php
                                             echo '
                                    <div class="ta-block p-20" style="display: initial;">
    
                                        <div class="" >
                                <div class="modal-dialog1">
                                <div class="modal-header1 ">
                                            <h4 class="modal-title p-l-20">Modifier un utilisateur</h4>
                                        </div>
                                    <div class="modal-content1 p-20">
                                    

                                       <div class="col-sm-10">
<select id="section_ecole_mod1" data-live-search="true" class="selectpicker"  title="Selectionner un personnel" data-selected-text-format="count" tabindex="-98"  >';
                                         
                                       
                                    $personnel_tab = query("SELECT * FROM personnel order by nom_p ");
                                   foreach ($personnel_tab as $per)  
                                    {  
                                        //$nom_d = $sec["nom_paroisse"];
                                        $id_d = $per["id"];
                                        echo("<option value='$id'>" .$per["nom_p"]."</option>");
                                        
                                             
                                                   
                                    }
                                   
                                     echo '</select></div>
                                     <div class="col-sm-2">
                                     <button class="btn btn-primary ">Selectionner</button>
                                     </div>
                                     <div class="row">
                                     
                                     <div class="col-sm-12">
                                        <br></br>

                        <div class="col-sm-6 col_30 left">
                            <div class="col-sm-12">
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-library"></i></span>
                                        <div class="fg-line">
                                            <input id="matricule_p1" name="matricule_p1" type="text" class="form-control">
                                            <label class="fg-label">MATRICULE</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                            <input id="nom_p1" name="nom_p1" type="text" class="form-control">
                                            <label class="fg-label">Nom et prénoms</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-7">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_nais_p1" name="date_nais_p" >
                                            <label class="fg-label">Date naissance</label>

                                        </div>
                                </div>
                            </div>

                           <!--  <div class="col-sm-5">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control" name="sex_p" id="sex_p1"  >
                                            <option></option>
                                            <option value="01">M</option>
                                            <option value="02">F</option>
                                                    
                                        </select>
                                        <label class="fg-label">Sexe</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                         <div class="col-sm-5">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="sex_p1" class="selectpicker"  title="Sexe" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="01">Masculin</option>
                                            <option value="02">Feminin</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_eng_p1" name="date_eng_p">
                                            <label class="fg-label">Date engagement</label>

                                        </div>
                                </div>
                            </div>

                            <!-- <div class="col-sm-6">
                                
                                <div class="input-group fg-float">
                                    
                                        <div class="fg-line">
                                            <div class="select">
                                                <select class="form-control" name="nat_p" id="nat_p1"  >
                                                    
                                                            
                                                </select>
                                                <label class="fg-label">Nationnalité</label>
                                            </div>
                                        </div>

                                </div>
                            </div> -->

                            <div class="col-sm-6">
                            
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="nat_p1" class="selectpicker"  title="Nationnalité" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="01">Congolaise</option>
                                        <option value="02">Etrangère</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                            

                            

                            <div class="col-sm-6">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-accounts"></i></span>
                                        <div class="fg-line">
                                            <input id="sifa_p1" name="sifa_p" type="text" class="form-control">
                                            <label class="fg-label">Situation familiale</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-circle"></i></span>
                                        <div class="fg-line">
                                            <input id="conf_p1" name="conf_p" type="text" class="form-control">
                                            <label class="fg-label">Confession</label>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-eyedropper"></i></span>
                                        <div class="fg-line">
                                            <input id="fonct_p1" name="fonct_p" type="text" class="form-control">
                                            <label class="fg-label">Fonction</label>
                                        </div>
                                </div>
                            </div> 
                            <!-- <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-eyedropper"></i></span>
                                        <div class="fg-line">
                                            <input id="annee_pre_p1" name="annee_pre_p" type="text" class="form-control">
                                            <label class="fg-label">Année de prestation</label>
                                        </div>
                                </div>
                            </div> --> 

                            

                            

                           
                        </div>


                        <div class="col-sm-6 left">
                         <div class="col-sm-7">
                                
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_dip1" name="date_dip">
                                            <label class="fg-label">Date diplome</label>

                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                            
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control" name="qualdip_p" id="qualdip_p1"  >
                                            <option></option>
                                            <option value="Dr">Dr</option>
                                            <option value="Ir">Ir</option>
                                            <option value="L2/LA">L2/LA</option>
                                            <option value="G3">G3</option>
                                            <option value="A1">A1</option>
                                            <option value="A2">A2</option>
                                            <option value="P6N">P6N</option>
                                            <option value="D6N">D6N</option>
                                            <option value="CAP/D6A">CAP/D6A</option>
                                            <option value="D4A">D4A</option>
                                            <option value="D4N">D4N</option>
                                            <option value="EAP">EAP</option>
                                            <option value="EMP">EMP</option>
                                            <option value="PP5">PP5</option>
                                            <option value="PP6">PP6</option>
                                            <option value="SFS">SFS</option>
                                            <option value="AUTRES">AUTRES</option>
                                                    
                                        </select>
                                        <label class="fg-label">Qualif. Diplome</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_pro_p1" name="date_pro_p" >
                                            <label class="fg-label">Date promotion</label>

                                        </div>
                                </div>
                            </div>

                            <!-- <div class="col-sm-6">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-graduation-cap"></i></span>
                                        <div class="fg-line">
                                            <input id="grade_act_p1" name="grade_act_p" type="text" class="form-control">
                                            <label class="fg-label">Grade actuel</label>
                                        </div>
                                </div>
                            </div> -->
                        <div class="col-sm-6">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_grade_act11" class="selectpicker"  title="Grade actuel" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_grade_act21" class="selectpicker"  title="Echellon" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_grade_anc11" class="selectpicker"  title="Grade ancien" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35 </option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_grade_anc21" class="selectpicker"  title="Echellon" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
             
                            
                            
                            <div class="col-sm-12">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_ecole_affecter1" data-live-search="true" class="selectpicker"  title="Affecter dans une ecole" data-selected-text-format="count" tabindex="-98">';
                                      
                                       
                                       $diocese = query("SELECT * FROM sous_div");
                                    

                                   foreach ($diocese as $sec)  
                                    {  
                                        $nom_d = $sec["nom_sous_div"];
                                        $id_d = $sec["id"];

                                        echo("<optgroup label='Sous division de ".$nom_d."'>");
                                        //SELECT * FROM sous_div WHERE belongs_to = 6 and `nom_sous_div` != ""
                                        $vide = "";

                                        $coord = query("SELECT * FROM ecole2 WHERE belongs_to = ?  ",$id_d);
                                        if (count($coord) >= 1) {
                                            foreach ($coord as $res ) {
                                               $id = $res["id"];
                                                $class_str_org = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM structure_autorisee WHERE id_ecole = ?",$id);
                                                echo("<option value='$id'>" .$res["nom_ecole"]. "</option>");
            
                                            
                                        
                                            }
                                        }
                                       
                                        echo "</optgroup>";
                                             
                                                   
                                    }
                                   
                                     echo '</select>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>                           
                        </div>
                        
                     
                        <div class="col-sm-12"><div class="affreslt_inst"></div></div>
                                     </div>

                                     </div>

                                   </div>

                                </div>
                            </div> 
                                        <div class="tab-actions p-20">
                                            <button text-right class="btn btn-md btn-primary">Modifier</button>
                                            
                                            <button text-right data-ma-action="todo-form-close" class="btn btn-md btn-default">fermer</button>
                                           
                                        </div>
                                    </div>';
    ?>
                                </div>

                                <div class="list-group">
                                    <div class="list-group-item media">
                                     <div class="col-sm-12">
                                  
                            <table id="data-table-basic" class="table table-condensed table-striped table-bordered">
                                <thead>
                                <tr class="tbl_left">
                                    <th>#</th>
                                    <th>Nom et prenom</th>
                                    <th>Matricule</th>
                                    <th>Ecole</th>
                                   
                                    <th>Paroisse</th>
                                    <th>Coord. SP</th>
                                    <th>Niveau</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $num = 1; 
                                $table_personnel = query("SELECT * FROM personnel");


                                    foreach ($table_personnel as $row) 
                                    {

                                        $ecole_e_detail = query("SELECT ecole2.*, sous_div.nom_sous_div, paroisse2.nom_paroisse, coordination_sp.nom_coord_sp, diocese.nom_diocese FROM ecole2, sous_div, paroisse2, coordination_sp, diocese WHERE ecole2.belongs_to = sous_div.id AND sous_div.belongs_to = paroisse2.id AND paroisse2.belongs_to = coordination_sp.id AND coordination_sp.belongs_to = diocese.id and ecole2.id = ?",$row["ecole_affect"]);

  
                                        echo("<tr>");
                                        echo("<td>" . $num . "</td>");           
                                        echo("<td>" . $row["nom_p"] . "</td>");

                                        echo("<td>" . $row["matricule_p"] . "</td>");

                                        echo("<td>" . $ecole_e_detail[0]["nom_ecole"] . "</td>");
                                        echo("<td>" . $ecole_e_detail[0]["nom_paroisse"] . "</td>");
                                        echo("<td>" . $ecole_e_detail[0]["nom_coord_sp"] . "</td>");
                                        echo("<td>" . $ecole_e_detail[0]["id_niveau"] . "</td>");
                                       
                                        echo("</tr>");
                                        $num++;
                                    }
                                ?>
                                </tbody>
                            </table>

                                    

                                     </div>
                                    </div>

                                   

                                    

                                    
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-float btn-danger m-btn waves-effect waves-circle waves-float" data-toggle="modal" href="#modalAjouterParoisse"><i class="zmdi zmdi-plus" ></i></button> 


                     <div class="modal fade" id="modalAjouterParoisse" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <nav id="my_form_add_personnel" class="card" >
                                <div class="card-header ">
                                    <h2>AJOUTER UN PERSONNEL</h2>
                                </div>

                    <div class="modal-body " id="modal_body_inst">
                        <div class="col-sm-6 col_30 left">
                            <div class="col-sm-12">
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-library"></i></span>
                                        <div class="fg-line">
                                            <input id="matricule_p" name="matricule_p" type="text" class="form-control">
                                            <label class="fg-label">MATRICULE</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                            <input id="nom_p" name="nom_p" type="text" class="form-control">
                                            <label class="fg-label">Nom et prénoms</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-7">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_nais_p" name="date_nais_p" >
                                            <label class="fg-label">Date naissance</label>

                                        </div>
                                </div>
                            </div>

                           <!--  <div class="col-sm-5">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control" name="sex_p" id="sex_p"  >
                                            <option></option>
                                            <option value="01">M</option>
                                            <option value="02">F</option>
                                                    
                                        </select>
                                        <label class="fg-label">Sexe</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                         <div class="col-sm-5">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="sex_p" class="selectpicker"  title="Sexe" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="01">Masculin</option>
                                            <option value="02">Feminin</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_eng_p" name="date_eng_p">
                                            <label class="fg-label">Date engagement</label>

                                        </div>
                                </div>
                            </div>

                            <!-- <div class="col-sm-6">
                                
                                <div class="input-group fg-float">
                                    
                                        <div class="fg-line">
                                            <div class="select">
                                                <select class="form-control" name="nat_p" id="nat_p"  >
                                                    
                                                            
                                                </select>
                                                <label class="fg-label">Nationnalité</label>
                                            </div>
                                        </div>

                                </div>
                            </div> -->

                            <div class="col-sm-6">
                            
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="nat_p" class="selectpicker"  title="Nationnalité" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="01">Congolaise</option>
                                        <option value="02">Etrangère</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                            

                            

                            <div class="col-sm-6">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-accounts"></i></span>
                                        <div class="fg-line">
                                            <input id="sifa_p" name="sifa_p" type="text" class="form-control">
                                            <label class="fg-label">Situation familiale</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-circle"></i></span>
                                        <div class="fg-line">
                                            <input id="conf_p" name="conf_p" type="text" class="form-control">
                                            <label class="fg-label">Confession</label>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-eyedropper"></i></span>
                                        <div class="fg-line">
                                            <input id="fonct_p" name="fonct_p" type="text" class="form-control">
                                            <label class="fg-label">Fonction</label>
                                        </div>
                                </div>
                            </div> 
                            <!-- <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-eyedropper"></i></span>
                                        <div class="fg-line">
                                            <input id="annee_pre_p" name="annee_pre_p" type="text" class="form-control">
                                            <label class="fg-label">Année de prestation</label>
                                        </div>
                                </div>
                            </div> --> 

                            

                            

                           
                        </div>


                        <div class="col-sm-6 left">
                         <div class="col-sm-7">
                                
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_dip" name="date_dip">
                                            <label class="fg-label">Date diplome</label>

                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                            
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control" name="qualdip_p" id="qualdip_p"  >
                                            <option></option>
                                            <option value="Dr">Dr</option>
                                            <option value="Ir">Ir</option>
                                            <option value="L2/LA">L2/LA</option>
                                            <option value="G3">G3</option>
                                            <option value="A1">A1</option>
                                            <option value="A2">A2</option>
                                            <option value="P6N">P6N</option>
                                            <option value="D6N">D6N</option>
                                            <option value="CAP/D6A">CAP/D6A</option>
                                            <option value="D4A">D4A</option>
                                            <option value="D4N">D4N</option>
                                            <option value="EAP">EAP</option>
                                            <option value="EMP">EMP</option>
                                            <option value="PP5">PP5</option>
                                            <option value="PP6">PP6</option>
                                            <option value="SFS">SFS</option>
                                            <option value="AUTRES">AUTRES</option>
                                                    
                                        </select>
                                        <label class="fg-label">Qualif. Diplome</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_pro_p" name="date_pro_p" >
                                            <label class="fg-label">Date promotion</label>

                                        </div>
                                </div>
                            </div>

                            <!-- <div class="col-sm-6">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-graduation-cap"></i></span>
                                        <div class="fg-line">
                                            <input id="grade_act_p" name="grade_act_p" type="text" class="form-control">
                                            <label class="fg-label">Grade actuel</label>
                                        </div>
                                </div>
                            </div> -->
                        <div class="col-sm-6">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_grade_act1" class="selectpicker"  title="Grade actuel" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_grade_act2" class="selectpicker"  title="Echellon" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_grade_anc1" class="selectpicker"  title="Grade ancien" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35 </option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_grade_anc2" class="selectpicker"  title="Echellon" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
               <!--          (de 0 à 3 ans)
(de 4 à 6 ans)
(de 7 à 9 ans)
(de 10 à 12 ans)
(de 13 à 15 ans)
(de 16 à 18 ans)
(de 19 à 21 ans)
(de 22 à 24 ans)
(de 25 à 27 ans)
(de 28 à + ans) -->

                           <!--  <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-graduation-cap"></i></span>
                                        <div class="fg-line">
                                            <input id="grade_anc_p" name="grade_anc_p" type="text" class="form-control">
                                            <label class="fg-label">Grade ancien</label>
                                        </div>
                                </div>
                            </div> -->
                            
                            
                            <div class="col-sm-12">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select id="select_ecole_affecter" data-live-search="true" class="selectpicker"  title="Affecter dans une ecole" data-selected-text-format="count" tabindex="-98">
                                        <?php
                                         
                                       
                                       $diocese = query("SELECT * FROM sous_div");
                                    

                                   foreach ($diocese as $sec)  
                                    {  
                                        $nom_d = $sec["nom_sous_div"];
                                        $id_d = $sec["id"];

                                        echo("<optgroup label='Sous division de ".$nom_d."'>");
                                        //SELECT * FROM sous_div WHERE belongs_to = 6 and `nom_sous_div` != ""
                                        $vide = "";

                                        $coord = query("SELECT * FROM ecole2 WHERE belongs_to = ?  ",$id_d);
                                        if (count($coord) >= 1) {
                                            foreach ($coord as $res ) {
                                               $id = $res["id"];
                                                $class_str_org = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM structure_autorisee WHERE id_ecole = ?",$id);
                                                echo("<option value='$id'>" .$res["nom_ecole"]. "</option>");
            
                                            //if ($class_str_org[0]["nbr"] == 0) {
                                             //echo("<option disabled='disabled'  value='$id'>" .$res["nom_ecole"]. "</option>");
                                         //}
                                         //else 
                                        
                                            }
                                        }
                                       
                                        echo "</optgroup>";
                                             
                                                   
                                    }
                                   
                                     echo '</select>';
                                     ?>
                                    </div>

                                </div>
                            </div>
                            <div class="fg-line">
                                    <div class="select">
                                        <select id="class_p" class="selectpicker"  title="Affecter dans une classe" data-selected-text-format="count" tabindex="-98"> 
                                        <option value="1">1ère</option>
                                        <option value="2">2ème</option>
                                        <option value="3">3ème</option>
                                        <option value="4">4ème</option>
                                        <option value="5">5ème</option>
                                        <option value="6">6ème</option>
                                        
                                        </select>
                                    </div>
                                </div>
                        </div>                           
                        </div>
                        
                     
                        <div class="col-sm-12"><div class="affreslt_inst"></div></div>

                     </div>
                    <div class="row">
                        
                    </div>
                    <div class="modal-footer ">
                        <button id="my_form_add_personnel_btn" type="submit" class="btn btn-info ">Enregistrer</button>
                            <button id="fermer_inst" type="button" class="btn btn-danger " data-dismiss="modal">Fermer
                            </button>
                    </div>

                              
                                
                            </nav>  

                                        
                                        
                                      
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



































































<!-- 
















      <button class="btn btn-float btn-danger m-btn waves-effect waves-circle waves-float" data-toggle="modal" href="#modalAjouterParoisse"><i class="zmdi zmdi-plus" ></i></button> 


                     <div class="modal fade" id="modalAjouterParoisse" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <nav id="my_form_add_personnel" class="card" >
                                <div class="card-header ">
                                    <h2>AJOUTER UN PERSONNEL</h2>
                                </div>

                    <div class="modal-body" id="modal_body_inst">
                        <div class="col-sm-6 col_30">
                            <div class="col-sm-12">
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-library"></i></span>
                                        <div class="fg-line">
                                            <input id="matricule_p" name="matricule_p" type="text" class="form-control">
                                            <label class="fg-label">MATRICULE</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                            <input id="nom_p" name="nom_p" type="text" class="form-control">
                                            <label class="fg-label">Nom et prénoms</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-7">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_nais_p" name="date_nais_p" >
                                            <label class="fg-label">Date naissance</label>

                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control" name="sex_p" id="sex_p"  >
                                            <option></option>
                                            <option>M</option>
                                            <option>F</option>
                                                    
                                        </select>
                                        <label class="fg-label">Sexe</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_eng_p" name="date_eng_p">
                                            <label class="fg-label">Date engagement</label>

                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-globe"></i></span>
                                        <div class="fg-line">
                                            <input id="nat_p" name="nat_p" type="text" class="form-control" value="Congolaise">
                                            <label class="fg-label">Nationnalité</label>
                                        </div>
                                </div>
                            </div>

                            

                            

                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-accounts"></i></span>
                                        <div class="fg-line">
                                            <input id="sifa_p" name="sifa_p" type="text" class="form-control">
                                            <label class="fg-label">Situation familiale</label>
                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-circle"></i></span>
                                        <div class="fg-line">
                                            <input id="conf_p" name="conf_p" type="text" class="form-control">
                                            <label class="fg-label">Confession</label>
                                        </div>
                                </div>
                            </div>

                            

                            

                           
                        </div>


                        <div class="col-sm-6">
                         <div class="col-sm-7">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_dip" name="date_dip">
                                            <label class="fg-label">Date diplome</label>

                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-5">
                            <br>
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control" name="qualdip_p" id="qualdip_p"  >
                                            <option></option>
                                            <option>Dr</option>
                                            <option>Ir</option>
                                            <option>L2/LA</option>
                                            <option>G3</option>
                                            <option>A1</option>
                                            <option>A2</option>
                                            <option>P6N</option>
                                            <option>D6N</option>
                                            <option>CAP/D6A</option>
                                            <option>D4A</option>
                                            <option>D4N</option>
                                            <option>EAP</option>
                                            <option>EMP</option>
                                            <option>PP5</option>
                                            <option>PP6</option>
                                            <option>SFS</option>
                                            <option>AUTRES</option>
                                                    
                                        </select>
                                        <label class="fg-label">Qualif. Diplome</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control date-picker" data-toggle="dropdown" id="date_pro_p" name="date_pro_p" >
                                            <label class="fg-label">Date promotion</label>

                                        </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-graduation-cap"></i></span>
                                        <div class="fg-line">
                                            <input id="grade_act_p" name="grade_act_p" type="text" class="form-control">
                                            <label class="fg-label">Grade actuel</label>
                                        </div>
                                </div>
                            </div> 

                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-graduation-cap"></i></span>
                                        <div class="fg-line">
                                            <input id="grade_anc_p" name="grade_anc_p" type="text" class="form-control">
                                            <label class="fg-label">Grade ancien</label>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-eyedropper"></i></span>
                                        <div class="fg-line">
                                            <input id="annee_pre_p" name="annee_pre_p" type="text" class="form-control">
                                            <label class="fg-label">Année de prestation</label>
                                        </div>
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <br>
                                <div class="input-group fg-float">
                                    <span class="input-group-addon"><i class="zmdi zmdi-eyedropper"></i></span>
                                        <div class="fg-line">
                                            <input id="fonct_p" name="fonct_p" type="text" class="form-control">
                                            <label class="fg-label">Fonction</label>
                                        </div>
                                </div>
                            </div>                            
                        </div>
                        
                     
                        <div class="col-sm-12"><div class="affreslt_inst"></div></div>

                     </div>
                    <div class="row">
                        
                    </div>
                    <div class="modal-footer ">
                        <button id="my_form_add_personnel_btn" type="submit" class="btn btn-info ">Enregistrer</button>
                            <button id="fermer_inst" type="button" class="btn btn-danger " data-dismiss="modal">Fermer
                            </button>
                    </div>

                              
                                
                            </nav>  

                                        
                                        
                                      
                                    </div>
                                </div>
                            </div>
       
 -->
  