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
                                    <a href="logout.php"><i class="zmdi zmdi-settings text-danger"></i>Déconnection</a>
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
                    <li class="sub-menu active">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-settings"></i> Configurations</a>

                        <ul>
                            <li class="active"><a  href="institution.php">Institution</a></li>
                            <li><a href="diocese.php">Diocèse</a></li>
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
                     <li class=" sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-account"></i>Gestion du personnel</a>

                        <ul>
                            <li><a class="" href="gestion_personnel.php">Enregistrer et afficher le personnel </a></li>
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

                    <div class="card ">
                    
                    <?php if(isset($_SESSION['current_session'])): ?>
                        <div id="todo1" class="card">
                            <div class="card-header bgm-bluegray ch-alt m-b-20">
                                <h2>INSTITUTION </h2>
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
    <!-- #######################################################################################-->
<?php 
        $inst = query("SELECT * FROM institution limit 1");

        echo '
                                    <div class="ta-block p-20" style="display: initial;">
    
                                        <div >
                                <div class="modal-dialog1">
                                    <form id="my_form_inst_mod"  enctype="multipart/form-data" class="modal-content1 p-20">
                                        <div class="modal-header1">
                                            <h4 class="modal-title1">Modifier l\'institution</h4>
                                        </div>

                                        <div class="modal-body1 row" >
 
                        <div class="col-sm-7 left">
                         <div class="input-group fg-float  left">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line ">
                                        <input autocomplete="off" id="nom_inst_mod" name="nom_inst" type="text" class="form-control" value=" '.$inst[0]["nom_institution"] .'">
                                        <label class="fg-label">Nom de l\'institution</label>
                                        <input type="hidden" name="nom_inst_old" value=" '.$inst[0]["id"] .'" />
                                    </div>
                            </div>

                            <div class="input-group fg-float left ">
                                <span class="input-group-addon"><i class="zmdi zmdi-collection-item">
                                </i></span>
                                    <div class="fg-line ">
                                        <input value=" '.$inst[0]["bp_institution"] .'" autocomplete="off" name="bp_inst" id="bp_inst_mod" type="text" class="form-control" >
                                        <label class="fg-label">Boite Postale</label>
                                    </div>
                            </div>
                        
                      
                            <div class="input-group fg-float left">
                             
                                <span class="input-group-addon"><i class="zmdi zmdi-wrap-text"></i></span>
                                    <div class="fg-line">
                                        <input value=" '.$inst[0]["sigle_institution"] .'" autocomplete="off" name="s_a_inst" id="s_a_inst_mod" type="text" class="form-control">
                                        <label class="fg-label">Sigle et/ou Abreviation</label>
                                    </div>
                            </div>
                        

                       
                            <div class="input-group fg-float left">
                             
                                <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                    <div class="fg-line">
                                        <input value=" '.$inst[0]["adress_institution"] .'" autocomplete="off" name="adress_inst" id="adress_inst_mod" type="text" class="form-control">
                                        <label class="fg-label">Adresse</label>
                                    </div>
                            </div>
                      
                        
                            <div class="input-group fg-float left">

                                <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                    <div class="fg-line">
                                        <input value=" '.$inst[0]["phone_institution"] .'"  autocomplete="off" name="phone" id="phone_mod" type="text" class="form-control" >
                                        <label class="fg-label">Téléphone</label>
                                    </div>
                            </div>
                             <div class="input-group fg-float left ">
                                <span class="input-group-addon"><i class="zmdi zmdi-calendar-note"></i></span>
                                    <div class="fg-line ">
                                        <input value=" '.$inst[0]["annee_sc"] .'" autocomplete="off" name="annee_sc" id="annee_sc_mod" type="text" class="form-control" >
                                        <label class="fg-label">Année scolaire</label>
                                    </div>
                                    
                            </div>
                            </div>
                        
                        
                           

                            <div class="fileinput fileinput-new col-sm-5 left" data-provides="fileinput">
                                <p class="c-black  text-uppercase">Logo de l\'institution</p>
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="line-height: 150px;">
                                    <img src="img/'.$inst[0]["logo_institution"] .'"/>
                                </div>
                                <div>
                                    <span class="btn btn-file">
                                        <span class="fileinput-new">Parcourir...</span>
                                        <input id="photo_inst_mod" type="file" name="image" >
                                    </span>
                                    <a href="#" class="btn  fileinput-exists"
                                       data-dismiss="fileinput">Annuler</a>
                                </div>
                            </div>
                       
                       
                                            
                                           
                                            
                                        
                                            <div class="col-sm-12 affreslt_inst2"></div>
  
                                        </div>
                                        <div class="tab-actions p-20">
                                
                                <button id="" type="submit" class="btn btn-danger btn-icon-text waves-effect">
                                <i class="zmdi zmdi-edit"></i> Modifier
                                </button>
                               
                               <button data-ma-action="todo-form-close" class="btn btn-default btn-icon-text waves-effect">
                                <i class="zmdi zmdi-close"></i> Fermer
                                </button>
                              
                                        </div>
                                        
                                    </form>
                                </div>
                            </div> 
                            
                                    </div>';
    ?>
                                        <!-- #######################################################################################-->

                                </div>

                                <div class="list-group">
                                    <div class="list-group-item media">
                                       <div class="col-sm-12"> 
                                    <h3><?php 
                                    foreach ($rows as $key) {
                                        if (!empty($key["nom_institution"])) {
                                              echo "<span class='text-uppercase'>".$key["nom_institution"]."</span><br>"; 
                                                echo "<small class='text-capitalize'>".$key["sigle_institution"]."</small>";
                                        }
                                       
                                      break;
                                    }?>
                                    
                                   
                                    </h3>
                                   </div>
                                 <div class="col-sm-6">
                                <?php 
                                    foreach ($rows as $key) {
                                       echo '<img class="img-responsive img-thumbnail" style="width: 100%" src="img/'.$key["logo_institution"].'" >'; 
                                    break;
                                    }?>
                                    
                                </div> 

                            <div class="col-sm-6">
                                <div class="pmo-block pmo-contact ">
                                <ul>
                                <li class="c-black"> PROVINCE DU NORD-KIVU</li>

                                    <li><i class="zmdi zmdi-phone"></i> <?php 
                                    foreach ($rows as $key) {
                                       echo $key["phone_institution"]; 
                                       break;
                                    }?></li>
                                    <li>
                                    <i class="zmdi zmdi-calendar-note"></i> 
                                    <?php 
                                 foreach ($rows as $key) {
                                       echo $key["annee_sc"]; 
                                       break;
                                    }?>
                                    </li>
                                   
                                    
                                    <li>
                                        <i class="zmdi zmdi-pin"></i>
                                        <address class="m-b-0 ng-binding">
                                <?php 
                                    foreach ($rows as $key) {
                                       echo $key["adress_institution"]."<br><span class='text-uppercase'>BP. ".$key["bp_institution"]."</span>";
                                    break;
                                    }?>
                                        </address>
                                    </li>
                                </ul>
                            </div>
                            
                            </div>
                                    </div>

                                   

                                    

                                    
                                </div>
                            </div>
                        </div>
                
                        <!-- <div class="card-header bgm-bluegray ch-alt m-b-20">
                                    <h2>INSTITUTION</h2>
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

                                    <button class="btn bgm-red btn-float waves-effect"><i class="zmdi zmdi-edit"></i>
                                    </button>
                                </div>
                        <div class="card-body">
                            vv
                        </div> -->
                        <button class="btn btn-float btn-danger m-btn waves-effect waves-circle waves-float" data-toggle="modal" href="#modalAjouterParoisse"><i class="zmdi zmdi-plus"></i></button>

                        <div class="modal fade in" id="modalAjouterParoisse" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form id="my_form_inst" method="post" action="institution.php" enctype="multipart/form-data" class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Ajouter une institution</h4>
                                        </div>

                                        <div class="modal-body row" >
                                           
                                           
                                         
                                           
                                            
                       
                           
                       
                        
                        <div class="col-sm-7 left">
                         <div class="input-group fg-float  left">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line ">
                                        <input autocomplete="off" id="nom_inst" name="nom_inst" type="text" class="form-control">
                                        <label class="fg-label">Nom de l'institution</label>
                                    </div>
                            </div>

                            <div class="input-group fg-float left ">
                                <span class="input-group-addon"><i class="zmdi zmdi-collection-item">
                                </i></span>
                                    <div class="fg-line ">
                                        <input autocomplete="off" name="bp_inst" id="bp_inst" type="text" class="form-control" >
                                        <label class="fg-label">Boite Postale</label>
                                    </div>
                            </div>
                        
                      
                            <div class="input-group fg-float left">
                             
                                <span class="input-group-addon"><i class="zmdi zmdi-wrap-text"></i></span>
                                    <div class="fg-line">
                                        <input autocomplete="off" name="s_a_inst" id="s_a_inst" type="text" class="form-control">
                                        <label class="fg-label">Sigle et/ou Abreviation</label>
                                    </div>
                            </div>
                        

                       
                            <div class="input-group fg-float left">
                             
                                <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                    <div class="fg-line">
                                        <input autocomplete="off" name="adress_inst" id="adress_inst" type="text" class="form-control">
                                        <label class="fg-label">Adresse</label>
                                    </div>
                            </div>
                      
                        
                            <div class="input-group fg-float left">
                                <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                    <div class="fg-line">
                                        <input autocomplete="off" name="phone" id="phone" type="text" class="form-control" >
                                        <label class="fg-label">Téléphone</label>
                                    </div>
                            </div>
                             <div class="input-group fg-float left ">
                                <span class="input-group-addon"><i class="zmdi zmdi-calendar-note"></i></span>
                                    <div class="fg-line ">
                                        <input autocomplete="off" name="annee_sc" id="annee_sc" type="text" class="form-control" >
                                        <label class="fg-label">Année scolaire</label>
                                    </div>
                                    
                            </div>
                            </div>
                        
                        
                           

                            <div class="fileinput fileinput-new col-sm-5 left" data-provides="fileinput">
                                <p class="c-black  text-uppercase">Logo de l'institution</p>
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-file">
                                        <span class="fileinput-new">Parcourir...</span>
                                        <input id="photo_inst" type="file" name="image">
                                    </span>
                                    <a href="#" class="btn  fileinput-exists"
                                       data-dismiss="fileinput">Annuler</a>
                                </div>
                            </div>
                       
                       
                                            
                                           
                                            
                                        
                                            <div class="col-sm-12 affreslt_inst"></div>
  
                                        </div>
                                        <div class=" modal-footer ">
                                            <button id="" type="submit" class="btn waves-effect btn-primary">Enregistrer</button>
                                            <button id="fermer_inst" type="button" class="btn waves-effect btn-danger" data-dismiss="modal">Fermer
                                            </button>
                                        </div>
                                    </form>
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