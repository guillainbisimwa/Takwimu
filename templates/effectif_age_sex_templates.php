<?php 
    
    if(isset($_SESSION['current_session'])){
        if($_SESSION['current_session'] == "Analyste")
        {
            header("Location: " . "logout.php");
        }
        if ($_SESSION['current_session'] == "Conseiller d'enseignement") {
             //header("Location: " . "logout.php");   
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
                    
                      <li class="active sub-menu">
                        <a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-blur-linear"></i> Affecter les indicateurs</a>
                        <ul>
                            <li><a class="active"  href="effectif_age_sex.php">Effectifs (Age/Sexe)</a></li>
                            <li><a  href="structure_org.php">Structures organisées</a></li>
                            <li><a  href="structure_aut.php">Structures autorisées</a></li>
                            <li><a href="age_des_eleves.php">Age des élèves</a></li>
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
                            <div class="card-header bgm-bluegray1 ch-alt m-b-20">
                               <h2 class="text-uppercase" style="color:#000 !important">
                               <?php if(isset($_SESSION['paroisse'])):
                                    $np = query("SELECT * FROM paroisse2 where id = ? ",$_SESSION['paroisse']); 
                                    echo "ENREGISTREMENT D'EFFECTIFS DANS LA PAROISSE ".$np[0]["nom_paroisse"];
                                ?>
                                <?php else: 
                                    echo "ENREGISTREMENT D'EFFECTIFS DANS TOUTES LES PAROISSES";

                                ?>
                        <!--b style="color:red" > echec: votre session n existe pas </b>
                            
                           ENREGISTREMENT D'EFFECTIFS DANS LA PAROISSE XXX XXXX X <br-->
                        
                    <?php endif; ?>
                    </h2>

                               
								<div class="row">
                                            <div class="col-sm-9">
                                            <select id="select_ecole" data-live-search="true" class="selectpicker"  title="Selectionner une ecole"  tabindex="-98"  >
                                         
                                        <?php 
                                        $sous_d = "";
                                        if ($_SESSION["current_session"] == "Conseiller d'enseignement" ) {
                                            $sous_d = query("SELECT * FROM sous_div where belongs_to = ?",$_SESSION["paroisse"]);
                                            
                                        }
                                        else  $sous_d = query("SELECT * FROM sous_div");

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
                                            echo("<optgroup label='SOUS DIVISION DE $nom_p (PAROISSE $nom_sous_d)'>");
        
        foreach ($table_option1 as $option1) {
            $nom_ecole = $option1["nom_ecole"];
            $id_e = $option1["id"];
            $niveau = $option1["id_niveau"];
            //check si les donnes exist dans les tables class_maternel class_pri _calss_secon_co et class_sec_cl
            //SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_secondaire_co WHERE id_ecole = 3
            $class_sec_co = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_secondaire_co WHERE id_ecole = ?",$id_e);
            $class_sec_cl = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_secondaire_cl WHERE id_ecole = ?",$id_e);
            $class_matern = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_maternelle WHERE id_ecole = ?",$id_e);
            $class_primai = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_primaire WHERE id_ecole = ?",$id_e);
            if (($class_primai[0]["nbr"] == 0 && $class_matern[0]["nbr"] == 0) &&
             ($class_sec_co[0]["nbr"] == 0 || $class_sec_cl[0]["nbr"] == 0 )) {
                echo("<option  value='$nom_ecole**$niveau**$nom_p**$nom_sous_d'>" .$nom_ecole ."</option>");
            }
            else echo("<option disabled='disabled' value='$nom_ecole**$niveau**$nom_p**$nom_sous_d'>" .$nom_ecole ."</option>");

        }
                                             
                                             echo "</optgroup>";

											//echo("<option class='text-uppercase' >SOUS DIVISION DE $nom_sous_d </option>");
										}
                                        
								
                                    ?>  
                                    </select>
                                    
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="select_ecole_btn" class="btn btn-primary">Confirmer</button>
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
        //$inst = query("SELECT * FROM institution limit 1");

        echo '
                                    <div class="ta-block p-20" style="display: initial;">
    
                                        <div class="" >
                                <div class="modal-dialog1">
                                <div class="modal-header1 ">
                                            <h4 class="modal-title p-l-20">Modifier l\'effectif d\'une école</h4>
                                        </div>
                                    <div class="modal-content1 p-20">
                                    

                                       <div class="col-sm-10">
<select id="select_ecole_mod" data-live-search="true" class="selectpicker"  title="Selectionner une école" data-selected-text-format="count" tabindex="-98"  >';
                                       $diocese = "";  
                                       if ($_SESSION["current_session"] == "Conseiller d'enseignement" ) {
                                            $diocese = query("SELECT * FROM sous_div where belongs_to = ?",$_SESSION["paroisse"]);
                                            
                                        }
                                        else  $diocese = query("SELECT * FROM sous_div");
                                    //$diocese = query("SELECT * FROM sous_div ");
                                   foreach ($diocese as $sec)  
                                    {  
                                        $nom_d = $sec["nom_sous_div"];
                                        $id_d = $sec["id"];

                                        echo("<optgroup label='paroisse ".$nom_d."'>");
                                        //SELECT * FROM sous_div WHERE belongs_to = 6 and `nom_sous_div` != ""
                                        $vide = "";

                                        $coord = query("SELECT * FROM ecole2 WHERE belongs_to = ?  ",$id_d);
                                        if (count($coord) >= 1) {
                                            foreach ($coord as $res ) {
                                               $id = $res["id"];
                                               //afficher les ecole n'ayant pas de effectifs
                                               $clss_mat = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_maternelle WHERE  id_ecole = ?",$id);
                                               $clss_pri = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_primaire WHERE  id_ecole = ?",$id);
                                               $clss_sec_co = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_secondaire_co WHERE  id_ecole = ?",$id);
                                               $clss_sec_cl = query("SELECT COUNT(DISTINCT id_ecole) as nbr FROM classe_secondaire_cl WHERE  id_ecole = ?",$id);
                                               
                                               if (($clss_mat[0]["nbr"] == 0 && $clss_pri[0]["nbr"] == 0) && 
                                                ($clss_sec_co[0]["nbr"] == 0 || $clss_sec_cl[0]["nbr"] == 0 )) {
                                                   echo("<option disabled='disabled' value='$id'>" .$res["nom_ecole"]. "</option>");
                                               }
                                               else echo("<option value='$id'>" .$res["nom_ecole"]. "</option>");
                                        
                                            }
                                        }
                                       
                                        echo "</optgroup>";
                                             
                                                   
                                    }
                                   
                                     echo '</select></div>
                                     <div class="col-sm-2">
                                     <button class="btn btn-primary" id="button_mod">Confirmer</button>
                                     </div>
                                     <div class="row">
                                     
                                     <div class="col-sm-12">
                                       <span class="result_mod"></span>
                                     </div>

                                     </div>

                                   </div>

                                </div>
                            </div> 
                                        <div class="tab-actions p-20">
                                            
                                            <button text-right data-ma-action="todo-form-close" class="btn btn-md btn-default">fermer</button>
                                            
                                            <!-- <a data-ma-action="todo-form-close" href="#" class="c-red"><i class="zmdi zmdi-close"></i></a>
                                            <a data-ma-action="todo-form-close" href="#" class="c-green"><i class="zmdi zmdi-check"></i></a> -->
                                        </div>
                                    </div>';
    ?>
  
                                </div>

                                <div class="list-group">
                                    <div class="list-group-item media tab_padding">
                                     <div class="col-sm-">
                                    
                                    <div class="table-responsive1 " >
                                    <h2 class="center_naledi text-uppercase"> <span id="niveau_eff"> </span> <span id="nom_ecole_eff"></span> </h2>
                                    <small class="center_naledi"><span id="paroisse_eff"> </span><span id="diocese_eff"> </span></small>
                <form id="ecolemat_form" action="Eleve_classe.php" method="POST" class="row p-10" style="display: none;">

                       <table id="ecolemat_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> AGE/SEXE </th>
                                <th colspan="3">1ère </th>
                                <th colspan="3">2ème </th>
                                <th colspan="3">3ème</th>
                                <th colspan="3">Tot</th>              
                            </tr>
                             <tr class="warning"> 
                                <th>F</th>
                                <th>G</th>
                                <th >FG</th>
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
                            <tbody class='naledi_yellow'>
        
            <?php 
                for ($i=0; $i < 3; $i++) {

echo "<tr id='tabm6ans$i'>";
     for ($j=0; $j < 12; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Moins de 6 ans</td>";
        }
        else if ($i == 1 && $j==0) {
            echo "<td> 6 ans</td>";
        } 
         else if ($i == 2 && $j==0) {
            echo "<td>7 à 10 ans</td>";
        } 
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6 ||$j==7 ) {
     echo "<td><input autocomplete='false' id='tabm6ans$i$j' type='text' class='form-control tabm6ans tabm6ansfg$i$j' name='tabm6ansfg$i$j'></td>";
    }
    else echo "<td id='tabm6ans$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            ?>
        
       
       
        
        </tbody>
    </table>
    <button id="ecolemat_form_button" class="btn btn-info col-sm-12 waves-effect btn-lg" type="submit"  >ENREGISTRER</button>
                            <span class="affreslt_ecole"></span>
                              <input type="hidden" name="current_ecole" id="current_ecole">
                   </form>



            <form id="ecolepri_form" action="Eleve_classe_pri.php" method="POST" class="row p-10" style="display: none;">
                       <table id="ecolepri_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> AGE/SEXE </th>
                                <th colspan="3">1ère </th>
                                <th colspan="3">2ème </th>
                                <th colspan="3">3ème</th>
                                <th colspan="3">4ème</th>
                                <th colspan="3">5ème</th>
                                <th colspan="3">6ème</th>
                                <th colspan="3">Tot</th>              
                            </tr>
                             <tr class="warning"> 
                                <th>F</th>
                                <th>G</th>
                                <th >FG</th>
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
                            <tbody class='naledi_yellow'>
        
            <?php 
                for ($i=0; $i < 5; $i++) {

echo "<tr id='tabp6ans$i'>";
     for ($j=0; $j < 21; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Moins de 6 ans</td>";
        }
        else if ($i == 1 && $j==0) {
            echo "<td> 6 ans</td>";
        } 
         else if ($i == 2 && $j==0) {
            echo "<td>7 à 10 ans</td>";
        } 
        else if ($i == 3 && $j==0) {
            echo "<td>11 ans</td>";
        }
        else if ($i == 4 && $j==0) {
            echo "<td>plus de 11 ans</td>";
        }
        //else if ($i == 5 && $j==0) {
          //  echo "<td>xxxxx</td>";
        //}
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6 ||$j==7 ||$j==9|| $j==10|| $j==12||$j==13||$j==15||$j==16 ) {
     echo "<td><input autocomplete='false' id='tabp6ans$i$j' type='text' class='form-control tabp6ans tabp6ansfg$i$j' name='tabp6ansfg$i$j'></td>";
    }
    else echo "<td id='tabp6ans$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            ?>
        
       
       
        
        </tbody>
    </table>
    <button id="ecolepri_form_button" class="btn btn-info col-sm-12 waves-effect btn-lg" type="submit">ENREGISTRER</button>
                            <span class="affreslt_ecole"></span>
                            <input type="hidden" name="current_ecole" id="current_ecole2">
                   </form>

            <form id="ecoleco_form" class="row p-10" style="display: none;">
<!-- action="Eleve_classe_co.php" method="POST"  -->
                       <table id="ecoleco_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> AGE/SEXE </th>
                                <th colspan="3">1ère année CO </th>
                                <th colspan="3">2ème année CO </th>
                             
                                <th colspan="3">Total générale</th>              
                            </tr>
                             <tr class="warning"> 
                                <th>F</th>
                                <th>G</th>
                                <th >FG</th>
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                                
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                            </tr>
                            <tbody class='naledi_yellow'>
        
            <?php 
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabco6ans$i'>";
     for ($j=0; $j <9; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Effectifs</td>";
        }
       
   
    //soustraction de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4  ) {
     echo "<td><input autocomplete='false' id='tabco6ans$i$j' type='text' class='form-control tabco6ans tabco6ans$i$j' name='tabco6ans$i$j'></td>";
    }
    else echo "<td id='tabco6ans$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            ?>
        
       
       
        
        </tbody>
    </table>
    <button id="ecoleco_form_button" class="btn btn-info col-sm-12 waves-effect btn-lg" type="submit">ENREGISTRER</button>
                            <span class="affreslt_ecoleco"></span>
                              <input type="hidden" name="current_ecole" id="current_ecoleco">
                   </form>

        
                   <div id="tableau_cl"> </div>




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