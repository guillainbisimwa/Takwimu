<script src='vendors/bower_components/jquery/dist/jquery.min.js'></script>


<?php 
echo '<script type="text/javascript">
        $(document).ready ( function(){ var sectionArray=["" ';
        foreach ($table_section as $row) 
        {        
            echo ',"'.$row["nom_section"].'"';
        }
        echo '];';
        
        echo 'territoire=new Bloodhound({datumTokenizer:Bloodhound.tokenizers.whitespace,
                queryTokenizer:Bloodhound.tokenizers.whitespace,
                local:sectionArray});
             $(".liste_section").typeahead({hint:!0,highlight:!0,minLength:1},
            {name:"territoire",source:territoire});';

    echo '});</script>';


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
                            <li><a href="institution.php">Institution</a></li>
                            <li><a href="diocese.php">Diocèse</a></li>
                            <li><a href="coordination_sp.php">Coordination sous provinciale</a></li>
                            <li><a href="sous_division.php">Paroisse</a></li>
                            <li><a href="paroisse.php">Sous division</a></li>
                            <li><a href="ecole.php">Ecole</a></li>
                            <li><a href="utilisateur.php">Utilisateur</a></li>
                            <li class="active"><a  href="section_option.php">Section / Option</a></li>
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
                                <h2>SECTION / OPTION </h2>
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
        //$inst = query("SELECT * FROM institution limit 1");

        echo '
                                    <div class="ta-block p-20" style="display: initial;">
    
                                        <div >
                                <div class="modal-dialog1">
                                    <form    class="modal-content1 p-20">
                                        <div class="modal-header1">
                                            <h4 class="modal-title1">Modifier section / option</h4>
                                        </div>

                                        <div class="modal-body1 row" >
 
                        <div class="col-sm-7 left">
                         
                        
                      
                           
                        

                       
                      
                        
                            
                            
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
                                    
                                   </div>
                                 <div class="col-sm-12">
                                <table id="data-table-basicn" class="table table-condensed table-striped table-bordered" style="width: 75%;margin: auto;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sections</th>
                                    <th>Options</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $num = 1; //table_option 
                                    foreach ($table_section as $sec) 
                                    {   
                                        echo("<tr>");
                                        echo("<td>" . $num . "</td>");           
                                        echo("<td>" . $sec["nom_section"] . "</td>");
                                        echo("<td><ul class='clist clist-star'>");
                                        foreach ($table_option as $option) {
                                            if ($sec["id"] ==$option["belongs_to"] ) {
                                                 echo '<li>'.$option["nom_option"].'</li>';
                                            }
                                          
                                        
                                        }
                                        echo("</ul></td>");
                                        
                                        
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
                
                       
                        <button class="btn btn-float btn-danger m-btn waves-effect waves-circle waves-float" data-toggle="modal" href="#modalAjouterParoisse"><i class="zmdi zmdi-plus"></i></button>

                        <div class="modal fade in" id="modalAjouterParoisse" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <nav id="my_form_inst1"  class="modal-content">
<!--                                     method="post" action="section_option.php" enctype="multipart/form-data"
 -->                                        <div class="modal-header">
                                            <h4 class="modal-title">Ajouter une section et/ou une option</h4>
                                        </div>

                                        <div class="modal-body row" >
                                           
                                           
                                         
                                           
                                            <div class="col-sm-12">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="nom_sec" name="nom_sec" type="text" class="form-control liste_section" placeholder="Denomination de la section">
                                       
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                        <br>
                            <div class="input-group fg-float">
                                <span class="input-group-addon"><i class="zmdi zmdi-collection-item"></i></span>
                                    <div class="fg-line">
                                        <input name="nom_op" id="nom_op" type="text" class="form-control" >
                                        <label class="fg-label">Denomination de l'Option</label>
                                    </div>
                            </div>
                        </div>
                       
                           
                                            <div class="col-sm-12 affreslt_inst"></div>
  
                                        </div>
                                        <div class=" modal-footer ">
                                            <button id="enregistre_section_option" class="btn waves-effect btn-primary">Enregistrer</button>
                                            <button id="fermer_inst" type="button" class="btn waves-effect btn-danger" data-dismiss="modal">Fermer
                                            </button>
                                        </div>
                                    </nav>
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