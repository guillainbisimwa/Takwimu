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
                    <li class="sub-menu active">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-settings"></i> Configurations</a>

                        <ul>
                            <li ><a  href="institution.php">Institution</a></li>
                            <li ><a href="diocese.php">Diocèse</a></li>
                            <li ><a href="coordination_sp.php">Coordination sous provinciale</a></li>
                            
                            <li ><a href="paroisse.php">Sous division</a></li>
                            <li ><a href="sous_division.php">Paroisse</a></li>
                            <li class="active"><a href="ecole.php">Ecole</a></li>
							<li><a href="utilisateur.php">Utilisateur</a></li> 
                            <li ><a href="section_option.php">Section / Option</a></li>
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

                    <div class="card">
                    
                    <?php if(isset($_SESSION['current_session'])): ?>
                        <div id="todo1" class="card">
                            <div class="card-header bgm-bluegray ch-alt m-b-20">
                                <h2>ECOLES</h2>
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
                                        Modification  d'une école
                                        <div class="tab-actions">
                                            <a data-ma-action="todo-form-close" href="#" class="c-red"><i class="zmdi zmdi-close"></i></a>
                                            <a data-ma-action="todo-form-close" href="#" class="c-green"><i class="zmdi zmdi-check"></i></a>
                                        </div>
                                    </div> -->
                                    <?php 
        //$inst = query("SELECT * FROM institution limit 1");

        echo '
                                    <div class="ta-block p-20" style="display: initial;">
    
                                        <div class="" >
                                <div class="modal-dialog1">
                                <div class="modal-header1 ">
                                            <h4 class="modal-title p-l-20">Modifier une école</h4>
                                        </div>
                                    <div class="modal-content1 p-20">
                                    

                                       <div class="col-sm-10">
<select id="select_ecole_mod" data-live-search="true" class="selectpicker"  title="Selectionner une école" data-selected-text-format="count" tabindex="-98"  >';
                                         
                                       /*for ($i=0; $i <4 ; $i++) { 
                                           echo("<option value='**op1'>" ."btrr" . "</option>");
                                       }*/
                                    $diocese = query("SELECT * FROM sous_div ");
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
                                               $nom_ecole = $res["nom_ecole"];
                                            $matricule= $res["matricule"];
                                            $compte_bancaire= $res["compte_bancaire"];
                                            $id_niveau= $res["id_niveau"];

                                            $liste_option= $res["liste_option"];

                                            $paroisse_tab = query("SELECT * FROM paroisse2 WHERE id = ?",$sec["belongs_to"]);
                                            $paroisse = $paroisse_tab[0]["nom_paroisse"]; 
                                            /*$vrliste_opt_sec = "";

                                            @$tab_l_s = split("[**]+", $liste_option);

                                            $ii = 1;
                                            foreach ($tab_l_s as $value) {
                                                $option_ = query("SELECT * FROM option WHERE nom_option = ? ",$value);
                                                $section_ = query("SELECT * FROM section WHERE id = ? ",$option_[0]["belongs_to"]);
                        $vrliste_opt_sec = $vrliste_opt_sec."**".$section_[0]["nom_section"]."**".$value;


                                                $ii++;
                                            }*/
                                            //

                                            $arrete_agr= $res["arrete_agr"];
                                            $adress_exact= $res["adress_exact"];
                echo("<option value='$id@@$id_d@@$nom_ecole@@$matricule@@$compte_bancaire@@$id_niveau@@$arrete_agr@@$adress_exact@@$liste_option@@$nom_d@@$paroisse'>" .$res["nom_ecole"]. "</option>");
                                            /* nom_ecole
                                            matricule
                                            compte_bancaire
                                            id_niveau
                                            liste_option
                                            arrete_agr
                                            adress_exact*/
                                        
                                            }
                                        }
                                       
                                        echo "</optgroup>";
                                             
                                                   
                                    }
                                   
                                     echo '</select></div>
                                     <div class="col-sm-2">
                                     <button id="btn_select_ecole" class="btn btn-primary ">Confirmer</button>
                                     </div>
                                     <div class="row">
                                     
                                     <div class="col-sm-12">
                                       <div class="modal-body row" >


                            
                            

                    <div class="col-sm-6 left">
                        <div class="card">
                            <div class="card-header bgm-bluegray ch-alt m-b-10">
                                <h2 class="text-uppercase">IDENTIFICATION ECOLE</h2>
                            </div>
                            <div class="card-body ">
                                <div class="col-sm-12">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="id_ecole_mod" type="hidden" class="form-control">
                                        <input id="nom_ecole_mod" name="nom_ecole" type="text" class="form-control liste_section" placeholder="Denomination">
                                    </div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="matricule_mod" name="matricule" type="text" class="form-control liste_section" placeholder="Matricule">
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="arrete_agr_mod" name="arrete_agr" type="text" class="form-control liste_section" placeholder="Arreté d\'agrement">
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="adress_exct_mod" name="adress_exct" type="text" class="form-control liste_section" placeholder="Adresse exact">
                                       
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="c_banque_mod" name="c_banque" type="text" class="form-control liste_section" placeholder="Compte Bancaire">
                                       
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi_naledi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                       <select  id="nom_sous_div_mod" data-live-search="true" class="selectpicker" title="paroisse" >
                                        
                                      ';
                                    foreach ($table_paroisse as $paroisse) {
                                        $id = $paroisse["id"];
                                        $nom_paroisse= $paroisse["nom_paroisse"];
                                        $belongs_to_p= $paroisse["belongs_to"];
                                        $tbl_sous_div = query("SELECT sous_div.id, sous_div.nom_sous_div,paroisse2.nom_paroisse, coordination_sp.nom_coord_sp FROM sous_div,paroisse2,coordination_sp where sous_div.belongs_to =? and sous_div.belongs_to = paroisse2.id and paroisse2.belongs_to = coordination_sp.id",$id);
                                        //$tbl_ = query("SELECT * FROM coordination_sp where belongs_to = ?",$tbl_sous_div[0]["id"]);
                                        echo("<optgroup label='Sous division de $nom_paroisse'>");
                                        foreach ($tbl_sous_div as $sous_div) {
                                            //$nom_sous_div = $sous_div["nom_sous_div"];
                                            $id_sous_div = $sous_div["id"];
                                            $nom_sous_div = $sous_div["nom_sous_div"];
                                            $nom_paroisse2 = $sous_div["nom_paroisse"];
                                            $nom_coord_sp2 = $sous_div["nom_coord_sp"];
                                            echo("<option value='$id_sous_div**$nom_sous_div'>" .$nom_sous_div . "</option>"); 
                                        }
                                        echo("</optgroup>");
                                        
                                    }
                                    echo '
                                        
                                    </select>
                                  
                                       
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi_naledi zmdi-balance"></i></span>
                                    <div class="fg-line" >
                                        <select id="nivo_ecole_mod" class="selectpicker" title="Choisir le Niveau">
                                        <option value="Maternelle">Maternelle</option>
                                        <option value="Primaire">Primaire</option>
                                        <option value="Secondaire">Secondaire</option>
                                    </select>
                                       
                                    </div>
                            </div>
                        </div>

                        <div class="col-sm-12 hidden" id="block_class_sec_mod">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi_naledi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <select id="section_ecole_mod" data-max-options="12" data-live-search="true" class="selectpicker" multiple title="Sections et options organisées" data-selected-text-format="count" tabindex="-98"  >
                                         
                                        '; 
                                        
                                    foreach ($table_section as $sec)  
                                    { 
                                        $id_p = $sec["id"];
                                        $s = $sec["nom_section"];
                                       
                                        $table_option1 = query("SELECT * FROM option WHERE belongs_to = ? ", $id_p );
                                         echo("<optgroup label='$s'>");
                                         //echo("<optgroup label='oooooo'>");
                                         foreach ($table_option1 as $option1) {
                                            $op1 = $option1["nom_option"];
                                             echo("<option value='$op1'>" .$op1 . "</option>");
                                             //echo("<option value='$s**$op1'>" .$op1 . "</option>");
                                             
                                         }
                                          echo("</optgroup>");
                                                   
                                    }
                                   echo '
                                    </select>
                                       
                                    </div>
                            </div>
                        </div>
                    

                                </div>
                    <dir class="col-sm-12">
                         <button id="apercu2_mod" class="col-sm-12 btn btn-primary  btn-lg">Aperçu </button>  <span class="col-sm-1"></span>
                          <!-- <button id="enregistrer_ecole" class=" col-sm-6 btn btn-info btn-lg ">Enregistrer ecole</button> -->

                    </dir>

                        
                        
                         
                            </div>
                        </div>
                         <div class="col-sm-6 left">
                        <div class="card1">
                            <div class="card-header bgm-bluegray ch-alt m-b-10">
                                <h2 class="text-uppercase">CONFIGURATION ECOLE</h2>
                            </div>
                            <div class="card-body ">
                                
                                <div id="config_ecole_div_mod" class="pmo-block pmo-contact ">
                                <ul>
                                <li class="c-black h2"> <span id="nom_ecole_conf_mod" class="text-uppercase"></span> <br>
                                <small >MATRICULE :<span id="matricule_conf_mod"></span> </small><br>
                                </li>

                                   
                                    <li>
                                        <i class="zmdi zmdi-pin"></i>
                                        <dl class="dl-horizontal">
                                          
                                          <dt><span class="text-uppercase c-black"> sous division :</span></dt>
                                          <dd><span class="text-capitalize" id="paroisse_conf_mod"></span></dd>
                                        </dl>
                                        
                                    </li>
                                     <li>
                                        <i class="zmdi zmdi-money-box"> </i>COMPTE BANCAIRE:
                                        <span id="c_bank_conf_mod"></span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-info"> </i>Ecole <span id="niveau_mod"></span> 
                                        <span id="class_organisee_mod"></span><br>
                                       

                                    </li>
                                </ul>
                                 <ul class="clist clist-star" id="ul_section_option_mod">
                                       
                                        
                                    </ul>
                            </div>

                            </div>
                           
                             <div class="essai_mod "> </div>
                            <!--  <button id="passer_enr_mat" class="center_naledi btn btn-success hidden" > Passer à l\' eneregistrement  des eleves </button>
                              <button id="passer_enr_pri_mod" class="center_naledi btn btn-success hidden" > Passer à l\' eneregistrement  des eleves </button> -->
                             
                            
                        </div>
                    </div>


                                            <div class="col-sm-12 affreslt_inst_mod2"></div>
  
                                        </div>
                                     </div>

                                     </div>

                                   </div>

                                </div>
                            </div> 
                                        <div class="tab-actions p-20">
                                            <button id="mod_ecole_div" class="btn btn-danger btn-icon-text waves-effect">
                                            <i class="zmdi zmdi-edit"></i> Modifier
                                            </button>
                                           
                                           <button data-ma-action="todo-form-close" class="btn btn-default btn-icon-text waves-effect">
                                            <i class="zmdi zmdi-close"></i> Fermer
                                            </button>
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
                                    <th>Nom école</th>
                                    <th>Matricule</th>
                                    <th>Paroisse</th>
                                    <th>Sous division</th>
                                    <th>Coord. SP</th>
                                    <th>Niveau</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $num = 1; 
                                    foreach ($table_ecole2 as $row) 
                                    {   
                                        echo("<tr>");
                                        echo("<td>" . $num . "</td>");           
                                        echo("<td>" . $row["nom_ecole"] . "</td>");

                                        echo("<td>" . $row["matricule"] . "</td>");

                                        echo("<td>" . $row["nom_sous_div"] . "</td>");
                                        echo("<td>" . $row["nom_paroisse"] . "</td>");
                                        echo("<td>" . $row["nom_coord_sp"] . "</td>");
                                        echo("<td>" . $row["id_niveau"] . "</td>");
                                       
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
                
                        
                        <button class="btn btn-float btn-danger m-btn waves-effect waves-circle waves-float" data-toggle="modal" href="#modalAjouterParoiss"><i class="zmdi zmdi-plus"></i></button>

                        <div class="modal fade in" id="modalAjouterParoiss" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div id="my_form_diocz" class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Ajouter une ecole</h4>
                                        </div>

                                        <div class="modal-body row" >


                            <!-- <div class="input-group fg-float  left">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line ">
                                        <input autocomplete="off" id="nom_sous_div"  type="text" class="form-control">
                                        <label class="fg-label">Nom de la sous division</label>
                                    </div>
                            </div> -->
                            

                    <div class="col-sm-6 ">
                        <div class="card">
                            <div class="card-header bgm-bluegray ch-alt m-b-10">
                                <h2 class="text-uppercase">IDENTIFICATION ECOLE</h2>
                            </div>
                            <div class="card-body ">
                                <div class="col-sm-12">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="nom_ecole" name="nom_ecole" type="text" class="form-control liste_section" placeholder="Denomination">
                                    </div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="matricule" name="matricule" type="text" class="form-control liste_section" placeholder="Matricule">
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="arrete_agr" name="arrete_agr" type="text" class="form-control liste_section" placeholder="Arreté d'agrement">
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="adress_exct" name="adress_exct" type="text" class="form-control liste_section" placeholder="Adresse exact">
                                       
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <input id="c_banque" name="c_banque" type="text" class="form-control liste_section" placeholder="Compte Bancaire">
                                       
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi_naledi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                       <select  id="nom_sous_div" data-live-search="true" class="selectpicker" title="Sous division" >
                                        
                                        <?php 
                                        
                                    /*foreach ($table_sous_div as $sd)  
                                    {   
                                        $id_p = $sd["id"];
                                        $p = $sd["nom_sous_div"];
                                        
                                        echo("<option value='$id_p'>" .$p. "</option>");    
                                    }*/
                                    foreach ($table_paroisse as $paroisse) {
                                        $id = $paroisse["id"];
                                        $nom_paroisse= $paroisse["nom_paroisse"];
                                        $belongs_to_p= $paroisse["belongs_to"];
                                        $tbl_sous_div = query("SELECT sous_div.id, sous_div.nom_sous_div,paroisse2.nom_paroisse, coordination_sp.nom_coord_sp FROM sous_div,paroisse2,coordination_sp where sous_div.belongs_to =? and sous_div.belongs_to = paroisse2.id and paroisse2.belongs_to = coordination_sp.id",$id);
                                        //$tbl_ = query("SELECT * FROM coordination_sp where belongs_to = ?",$tbl_sous_div[0]["id"]);
                                        echo("<optgroup label='Paroisse de $nom_paroisse'>");
                                        foreach ($tbl_sous_div as $sous_div) {
                                            //$nom_sous_div = $sous_div["nom_sous_div"];
                                            $id_sous_div = $sous_div["id"];
                                            $nom_sous_div = $sous_div["nom_sous_div"];
                                            $nom_paroisse2 = $sous_div["nom_paroisse"];
                                            $nom_coord_sp2 = $sous_div["nom_coord_sp"];
                                            echo("<option value='$id_sous_div**$nom_sous_div**$nom_paroisse2**$nom_coord_sp2'>" .$nom_sous_div . "</option>"); 
                                        }
                                        echo("</optgroup>");
                                        
                                    }
                                    ?>
                                        
                                    </select>
                                  
                                       
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi_naledi zmdi-balance"></i></span>
                                    <div class="fg-line" >
                                        <select id="nivo_ecole" class="selectpicker" title="Choisir le Niveau">
                                        <option value="Maternelle">Maternelle</option>
                                        <option value="Primaire">Primaire</option>
                                        <option value="Secondaire">Secondaire</option>
                                    </select>
                                       
                                    </div>
                            </div>
                        </div>

                        <div class="col-sm-12 hidden" id="block_class_sec">
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="zmdi zmdi_naledi zmdi-balance"></i></span>
                                    <div class="fg-line">
                                        <select id="section_ecole" data-max-options="12" data-live-search="true" class="selectpicker" multiple title="Sections et options organisées" data-selected-text-format="count" tabindex="-98"  >
                                         
                                        <?php 
                                        
                                    foreach ($table_section as $sec)  
                                    { 
                                        $id_p = $sec["id"];
                                        $s = $sec["nom_section"];
                                        /*
                                        
                                       
                                        echo("<option value='$s'>" .$s . "</option>"); */
                                        $table_option1 = query("SELECT * FROM option WHERE belongs_to = ? ", $id_p );
                                         echo("<optgroup label='$s'>");
                                         //echo("<optgroup label='oooooo'>");
                                         foreach ($table_option1 as $option1) {
                                            $op1 = $option1["nom_option"];
                                             echo("<option value='$s**$op1'>" .$op1 . "</option>");
                                             //echo("<option > jjjjjj</option>");
                                         }
                                          echo("</optgroup>");
                                                   
                                    }
                                    ?> 
                                    </select>
                                       
                                    </div>
                            </div>
                        </div>
                    

                                </div>
                    <dir class="col-sm-12">
                         <button id="apercu2" class="col-sm-12 btn btn-primary  btn-lg">Aperçu </button>  <span class="col-sm-1"></span>
                          <!-- <button id="enregistrer_ecole" class=" col-sm-6 btn btn-info btn-lg ">Enregistrer ecole</button> -->

                    </dir>

                        
                        
                         
                            </div>
                        </div>
                         <div class="col-sm-6 ">
                        <div class="card1">
                            <div class="card-header bgm-bluegray ch-alt m-b-10">
                                <h2 class="text-uppercase">CONFIGURATION ECOLE</h2>
                            </div>
                            <div class="card-body ">
                                
                                <div id="config_ecole_div" class="pmo-block pmo-contact ">
                                <ul>
                                <li class="c-black h2"> <span id="nom_ecole_conf" class="text-uppercase"></span> <br>
                                <small >MATRICULE :<span id="matricule_conf"></span> </small><br>
                                <small >N° D'AGREEMENT :<span id="num_agreemnt"></span> </small></li>

                                   
                                    <li>
                                        <i class="zmdi zmdi-pin"></i>
                                        <dl class="dl-horizontal">
                                          <dt><span class="text-uppercase c-black"> Adresse exacte :</span></dt>
                                          <dd><span id="territoire_conf"></span></dd>
                                          <dt><span class="text-uppercase c-black"> Coordination sous P :</span></dt>
                                          <dd><span class="text-capitalize" id="s_d_conf"></span></dd>
                                          <dt><span class="text-uppercase c-black"> paroisse :</span></dt>
                                          <dd><span class="text-capitalize" id="diocese_conf"></span></dd>
                                          <dt><span class="text-uppercase c-black"> sous division :</span></dt>
                                          <dd><span class="text-capitalize" id="paroisse_conf"></span></dd>
                                        </dl>
                                        
                                    </li>
                                     <li>
                                        <i class="zmdi zmdi-money-box"> </i>COMPTE BANCAIRE:
                                        <span id="c_bank_conf"></span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-info"> </i>Ecole <span id="niveau"></span> 
                                        <span id="class_organisee"></span><br>
                                       

                                    </li>
                                </ul>
                                 <ul class="clist clist-star" id="ul_section_option">
                                       
                                        
                                    </ul>
                            </div>

                            </div>
                           
                             <div class="essai "> </div>
                            <!--  <button id="passer_enr_mat" class="center_naledi btn btn-success hidden" > Passer à l' eneregistrement  des eleves </button>
                              <button id="passer_enr_pri" class="center_naledi btn btn-success hidden" > Passer à l' eneregistrement  des eleves </button> -->
                             
                            
                        </div>
                    </div>






















                            



                                       
                                            <div class="col-sm-12 affreslt_inst"></div>
  
                                        </div>
                                        <div class=" modal-footer ">
                                            <button id="enregistrer_ecole" type="submit" class="btn waves-effect btn-primary">Enregistrer</button>
                                            <button id="fermer_inst" type="button" class="btn waves-effect btn-danger" data-dismiss="modal">Fermer
                                            </button>
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