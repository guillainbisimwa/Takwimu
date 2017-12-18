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

				<ul class="main-menu ">
					<li><a href="admin.php"><i class="zmdi zmdi-home"></i> Acceuil</a></li>
					<?php if(isset($_SESSION['current_session']) && $_SESSION['current_session'] == "admin"): ?>
					<li class="sub-menu active">
						<a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-settings"></i> Configurations</a>

						<ul>
							<li ><a  href="institution.php">Institution</a></li>
							<li ><a href="diocese.php">Diocèse</a></li>
							<li><a href="coordination_sp.php">Coordination sous provinciale</a></li>
							<li><a href="paroisse.php">Sous division</a></li>
							<li><a href="sous_division.php">Paroisse</a></li>
							<li><a href="ecole.php">Ecole</a></li>
							<li><a class="active" href="utilisateur.php">Utilisateur</a></li>
                            <li ><a  href="section_option.php">Section / Option</a></li>
						</ul>
					</li>
					<?php endif; ?>
					  <li class=" sub-menu">
						<a href="#" data-ma-action="submenu-toggle"><i class="zmdi zmdi-blur-linear"></i> Affecter les indicateurs</a>
						<ul>
							<li><a  href="effectif_age_sex.php">Effectifs (Age/Sexe)</a></li>
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
							<div class="card-header bgm-bluegray ch-alt m-b-20">
								<h2>LISTE D'UTILISATEURS</h2>
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

								   <!--  <div class="ta-block p-20">
										Modification Utilisateur
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
											<h4 class="modal-title p-l-20">Modifier un utilisateur</h4>
										</div>
									<div class="modal-content1 p-20">
									

									   <div class="col-sm-8">
<select id="section_user_ini" data-live-search="true" class="selectpicker"  title="Selectionner un utilisateur" data-selected-text-format="count" tabindex="-98"  >';
										 
									   
									$diocese = query("SELECT * FROM user ");
								   foreach ($diocese as $sec)  
									{  
										//$nom_d = $sec["nom_paroisse"];
										$id_d = $sec["id"];
										echo("<option value='$id_d'>" .$sec["nom"]." ".$sec["prenom"]. "</option>");
										
											 
												   
									}
								   
									 echo '</select></div>
									 <div class="col-sm-4">
									 <button class="btn btn-warning btn-initializer">Reinitialiser le mots de passe</button>
									 </div>
									 <div class="row">
									 
									 <div class="col-sm-12">
										<div class="modal-body" id="modal_body_inst">
				   <div>

				   </div>
						
						<div class="col-sm-12"><div id="result_initialiser"></div></div>

					 </div>
									 </div>

									 </div>

								   </div>

								</div>
							</div> 
										<div class="tab-actions p-20">
											<!--button text-right class="btn btn-md btn-warning">Reinitialiser le mots de passe</button-->
										   
											<button text-right data-ma-action="todo-form-close" class="btn btn-md btn-default">fermer</button>
											
											<!-- <a data-ma-action="todo-form-close" href="#" class="c-red"><i class="zmdi zmdi-close"></i></a>
											<a data-ma-action="todo-form-close" href="#" class="c-green"><i class="zmdi zmdi-check"></i></a> -->
										</div>
									</div>';
	?>
  
								</div>

								<div class="list-group">
									<div class="list-group-item media">
									 <div class="col-sm-12">
									 <div class="table-responsive">
							<table id="data-table-basic" class="table table-condensed table-striped table-bordered">
								<thead>
								<tr class="tbl_left">
									<th>#</th>
									<th>Nom</th>
									<th>Prenom</th>
									<th>Type</th>
									<th>Paroisse</th>
									<th>Téléphone</th>
								</tr>
								</thead>
								<tbody>
								<?php
								$num = 1; 
									foreach ($table_utilisateur as $row) 
									{
										//``, ``, `password`, ``, ``, `adress`, `photo`   
										echo("<tr>");
										echo("<td>" . $num . "</td>");           
										echo("<td>" . $row["nom"] . "</td>");
										echo("<td>" . $row["prenom"] . "</td>");
										//echo("<td>" . $row["type_user"] . "</td>");
										
										if($row["type_user"] == "Conseiller d'enseignement")
										{
											echo("<td>" . $row["type_user"] . "</td>");
											if($row["belongs_to"] > 0){
												
											  $nom_p = query("SELECT * FROM paroisse2 where id = ?",$row["belongs_to"]);
												if (count($nom_p) >= 1){
													echo("<td>" . $nom_p[0]["nom_paroisse"] . "</td>");
												}
												
											}
											else echo("<td></td>");
										}
										else {
											echo("<td>" . $row["type_user"] . "</td>");
											echo("<td></td>");
										}
										
										
										
										echo("<td>" . $row["phone"] . "</td>");
										
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
						</div>
						
				   <button class="btn btn-float btn-danger m-btn waves-effect waves-circle waves-float" data-toggle="modal" href="#modalAjouterUser"><i class="zmdi zmdi-plus" ></i></button> 


					 <div class="modal fade" id="modalAjouterUser" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
									  <form id="my_form_user" class="card" method="post" action="utilisateur.php" enctype="multipart/form-data">
								<div class="card-header ">
									<h2>AJOUTER UN UTILISATEUR</h2>
								</div>

					<div class="modal-body" id="modal_body_inst">
						<div class="col-sm-12 left">
							<div class="input-group fg-float">
								<span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
									<div class="fg-line">
										<input id="nom_user" name="nom_user" type="text" class="form-control">
										<label class="fg-label">Nom de l'utilisateur</label>
									</div>
							</div>
						</div>
						<div class="col-sm-6 left">
							<br>
							<div class="input-group fg-float">
								<span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
									<div class="fg-line">
										<input name="prenom_user" id="prenom_user" type="text" class="form-control" >
										<label class="fg-label">Prenom de l'utilisateur</label>
									</div>
							</div>
						</div>
						<div class="col-sm-6 left">
						<br>
							<div class="input-group fg-float">
								<span class="input-group-addon"><i class="zmdi zmdi-case"></i></span>
									<div class="fg-line">
										<input name="password_user" id="password_user" type="password" class="form-control" value="naledi">
										<label class="fg-label">Mots de passe par defaut:(naledi)</label>
									</div>
							</div>
						</div>

						<div class="col-sm-6 left">
						<br>
							<div class="input-group fg-float">
								<span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
									<div class="fg-line">
										<input name="adress_user" id="adress_user" type="text" class="form-control">
										<label class="fg-label">Adresse</label>
									</div>
							</div>
						</div>
						<div class="col-sm-6 left">
						<br>
							<div class="input-group fg-float">
								<span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
									<div class="fg-line">
										<input name="phone" id="phone" type="text" class="form-control" >
										<label class="fg-label">Telephone</label>
									</div>
							</div>
						</div>
						<div class="col-sm-6 left">
						<br>
							 <!--div class="form-group fg-float">
								<div class="fg-line">
									<div class="select">
										<select class="form-control" name="type" id="type"  >
											<option></option>
											<option>Coordinateur</option>
											<option>Analyste</option>
													
										</select>
										<label class="fg-label">Selectioner type</label>
									</div>
								</div>
							</div--> 
							<div class="input-group fg-float ">
								<span class="input-group-addon"><i class="zmdi zmdi_naledi zmdi-balance"></i></span>
									<div class="fg-line">
									   <select name="type" id="type"  class="selectpicker" title="Selectioner type" >
									   
											<option>Admin</option>
											<option>Analyste</option>
											<option>Conseiller d'enseignement</option>
										
									</select>
									</div>
							</div>
						</div>
						<div class="col-sm-6 left">
						<br>
							 
							<div class="input-group fg-float  ">
								<span class="input-group-addon"><i class="zmdi zmdi_naledi zmdi-balance"></i></span>
									<div class="fg-line">
									   <select name="paroisse" id="paroisse" data-live-search="true"  class="selectpicker" title="Selectioner Paroisse" >
									   <?php  
									
									 foreach ($table_coord_sp as $coord_sp) {
										$id = $coord_sp["id"];
										$nom_coord_sp = $coord_sp["nom_coord_sp"];
										$tbl_paroisse = query("SELECT * FROM paroisse2 where belongs_to = ?",$id);
										echo("<optgroup label='Coordination sp de $nom_coord_sp'>");
										foreach ($tbl_paroisse as $paroisse2) {
											$nom_paroisse = $paroisse2["nom_paroisse"];
											$id_paroisse = $paroisse2["id"];
											echo("<option value='$id_paroisse'>" .$nom_paroisse . "</option>"); 
										}
										echo("</optgroup>");
										
									}
									?>
										
									</select>
									</div>
							</div>
						</div>
						<div class="col-sm-6 left">
						   

							<div class="fileinput fileinput-new" data-provides="fileinput">
								<p class="c-black ">Photo de l'Utilisateur</p>
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
						</div>
						<div class="col-sm-12"><div class="affreslt_inst"></div></div>

					 </div>
					<div class="row">
						
					</div>
					<div class="modal-footer ">
						<button id="Enregistrer_user" type="submit" class="btn btn-info ">Enregistrer</button>
							<button id="fermer_inst" type="button" class="btn btn-danger " data-dismiss="modal">Fermer
							</button>
					</div>

							  
								
							</form>  

										
										
									  
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