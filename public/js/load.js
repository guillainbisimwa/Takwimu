$(document).ready(function(){
/*
	$('table td').click(
		
	function () {
		console.log("breek")
	    $('table td:nth-child(' + ($(this).index() + 1) + ')').addClass('hovernaledi');
	});
	$('table td').hover(
function () {
    $('table td:nth-child(' + ($(this).index() + 1) + ')').removeClass('hovernaledi');
}
		);*/
	//d = new Date();
	//d.getDay();
	//console.log(d.getDate())
	//d.setDate(32)
	//console.log(d.getDate())

	$("#connexion").click(function(){
		var login = $("#nom_user").val();
		var password = $("#password_user").val();

		$.ajax({
			url: 'index.php',
			type: 'POST',
			data : { login: login, password :password},
			success : function(data)
			{
				$(".affreslt_aut").html(data);
				
			}
		});
		
	});
	$(".closebtn").click(function(){
		
		//$(".msgApology").addClass("bounceOutDown");
		$(".msgApology").addClass("fadeOutUpBig");
		$(".msgApology").removeClass("bounceIn");
		//$(".closebtn").css("display","none");
		console.log("ok")
	});



	//ecolemat_form  cacher et qfficher enregstr_elev
   /*  $("#passer_enr_mat").click(function(){
     	$("#ecolemat_form").removeClass("hidden");
     	$("#ecolemat_form").css("display","block");
     	console.log("ok")
     })
     //afichage du tableau primaire passer_enr_pri
     $("#passer_enr_pri").click(function(){
     	$("#ecolepri_form").removeClass("hidden");
     	$("#ecolepri_form").css("display","block");
     	console.log("ok")
     })*/
	//enregistrement institution
	$('#my_form_inst').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'institution.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_inst").html(response);
                        	
                            //$('#result > pre').html(response);
                            //$('#result > pre').html(JSON.stringify(response, undefined, 4));
                        }
                    });
                });
	/*$("#Enregistrer_inst1").click(function(){
		//bp_inst adress_inst phone
		var nom_inst = $("#nom_inst").val();
		var s_a_inst = $("#s_a_inst").val();
		var details_inst = $("#details_inst").val();
		
		//var reg = /^[a-zA-Z/ 'éèàç-]{1,20}$/;
		//if(reg.test(nom_inst) && reg.test(s_a_inst) && reg.test(details_inst) )
		if($.trim(nom_inst).length > 0 && $.trim(s_a_inst).length > 0 && $.trim(details_inst).length > 0)
		{
			$.ajax({
				url: 'institution.php',
				type: 'POST',
				data : { 
					nom_inst: nom_inst, 
					s_a_inst :s_a_inst, 
					details_inst:details_inst
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
					$("#Enregistrer_inst").css("opacity",0);
					
				}
			});
		}
		else 
		{
			$.ajax({
				url: 'institution.php',
				type: 'POST',
				data : { 
					nom_inst: nom_inst, 
					s_a_inst :s_a_inst, 
					details_inst:details_inst
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
					var explode = function(){
			  		//location.reload();
			  		//$(".modal-body").load();
			  		$(".msgApology").removeClass("bounceIn");
					$(".msgApology").addClass("hinge");
					$(".modal-body").load();
					};
					setTimeout(explode, 2000);
					$(".modal-body").load();
				}
			});
		}

		
	})*/
	$("#fermer_inst").click(function(){
		$(".affreslt_inst").html("");
		$("#modal_body_inst").css("display","block");
		//$("#Enregistrer_inst").css("display","block");
		$("#Enregistrer_inst").css("opacity",1);

		$("#nom_inst").val("");
	 	$("#s_a_inst").val("");

		$("#details_inst").val("");
		$(".modal-body").load();

		//location.reload();
	})
	//reinitialiser
	$("#close_apology").click(function(){
		$(".fieldset").css("height",0);

	}) 
	$(".zmdi-refresh-alt").click(function(){
		location.reload();
	})
	
	$("#fermer_inst").click(function(){
		console.log("ok")
		location.reload();
	})
	///setTimeout(function(){
  //location.reload();
//}, 2000);
/*var explode = function(){
  alert("Boom!");
};
setTimeout(explode, 2000);*/
//enregistrer diocese
 $("#Enregistrer_diocese").click(function(){

		var nom_diocese = $("#nom_diocese").val();
		
			$.ajax({
				url: 'diocese.php',
				type: 'POST',
				data : { 
					
					nom_diocese :nom_diocese
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
				}
			});
			
	})

 //enregister coordination sous provincilale 
  $("#Enregistrer_c_sp").click(function(){

		var nom_diocese = $("#nom_diocese").val();
		var nom_coord_sp = $("#nom_coord_sp").val();
		console.log(nom_diocese)
		
			$.ajax({
				url: 'coordination_sp.php',
				type: 'POST',
				data : { 
					
					nom_diocese :nom_diocese,
					nom_coord_sp:nom_coord_sp
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
				}
			});
			
	})
  //enregistrer paroisse 2
  $("#Enregistrer_p2").click(function(){

		var nom_paroisse = $("#nom_paroisse").val();
		var nom_coord_sp = $("#nom_coord_sp").val();
		//console.log(nom_diocese)
		
			$.ajax({
				url: 'paroisse.php',
				type: 'POST',
				data : { 
					
					nom_paroisse :nom_paroisse,
					nom_coord_sp:nom_coord_sp
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
				}
			});
			
	})

   //enregistrer sous division
  $("#Enregistrer_sous_div").click(function(){

		var nom_paroisse = $("#nom_paroisse_sd").val();
		var nom_sous_div = $("#nom_sous_div").val();
		//console.log(nom_diocese)
		
			$.ajax({
				url: 'sous_division.php',
				type: 'POST',
				data : { 
					
					nom_paroisse :nom_paroisse,
					nom_sous_div:nom_sous_div
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
				}
			});
			
	})

//enregister ecole

     $("#enregistrer_ecole").click(function(){
     	var nom_ecole =  $("#nom_ecole").val();
     	var matricule  =  $("#matricule").val();
     	var c_banque  =  $("#c_banque").val();
     	var nivo_ecole =$("#nivo_ecole").val();
     	var adress_exct =$("#adress_exct").val();
     	var arrete_agr =$("#arrete_agr").val();
     	var section_ecole =$("#section_ecole").val();
     	var section_ecole2 = "";
     	var sous_div_id = "";

     	var nom_sous_div =$("#nom_sous_div").val();
     	if($("#section_ecole").val() != undefined){
     		$.each(section_ecole, function( i, l ){
				 //sect = sect + l+" - ";
				 var tab1 = l.split("**");
				 var section= tab1[0];
				 var option=tab1[1];
				 section_ecole2 = section_ecole2+"**"+option;
				//sect = sect +"<li><span id='sections' class='text-uppercase c-black'>"+
	     		//"Section "+section+ "</span><span id='options'> (option: "+option +")</span></li>";//(option: latin-philo)
			});
     	}
     	else section_ecole2 ="";
     	//console.log(nivo_ecole)
     		//$.each(nom_sous_div, function( i, l ){
				 //sect = sect + l+" - ";
		if(nom_sous_div != "")
		{
			var tab_sous_div = nom_sous_div.split("**");
			var sous_div_id= tab_sous_div[0];
		 	console.log(sous_div_id)
		 }
				 //var option=tab1[1];
				 //section_ecole2 = section_ecole2+"**"+option;
				//sect = sect +"<li><span id='sections' class='text-uppercase c-black'>"+
	     		//"Section "+section+ "</span><span id='options'> (option: "+option +")</span></li>";//(option: latin-philo)
			//});

     	
     	// adress_exct arrete_agr 

     	

			$.ajax({
				url: 'ecole.php',
				type: 'POST',
				data : { 
					nom_ecole: nom_ecole, 
					matricule :matricule,
					arrete_agr:arrete_agr,
					adress_exct:adress_exct,
					nivo_ecole: nivo_ecole,
					c_banque:c_banque,
					section_ecole2:section_ecole2,
					nom_sous_div:nom_sous_div 
				},
				success : function(data)
				{
					

					$(".essai").html(data);
					//$("#config_ecole_div").css("display","none");
					

					/*if (nivo_ecole == "Maternelle") {
						$("#passer_enr_mat").removeClass("hidden");
						$("#passer_enr_mat").css("display","block");
						
					}
					else if(nivo_ecole == "Primaire"){
						$("#passer_enr_pri").removeClass("hidden");
						$("#passer_enr_pri").css("display","block");
					}*/
					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
				}
			});
		
     })
//apercu2

      $("#apercu2").click(function(){
     	var nom_ecole =  $("#nom_ecole").val();
     	var matricule  =  $("#matricule").val();
     	var c_banque  =  $("#c_banque").val();
     	var nivo_ecole =$("#nivo_ecole").val();
     	var section_ecole=$("#section_ecole").val();

     	var nom_sous_div =$("#nom_sous_div").val();
     	var option_org ="";

     	//if(nom_sous_div != "")
		//{ $id_sous_div**$nom_sous_div**$nom_paroisse2**$nom_coord_sp2
			var tab_sous_div = nom_sous_div.split("**");
			//var adress_exct = tab_sous_div[1];
			var coordination_sp = tab_sous_div[3];
			var paroisse = tab_sous_div[2];
			var sous_div = tab_sous_div[1];

			
		 	
		 //}

     	$("#nom_ecole_conf").html(nom_ecole);//var nom_ecole_conf;
     	$("#matricule_conf").html(matricule);//var matricule_conf;
     	$("#c_bank_conf").html(c_banque);

     	$("#paroisse_conf").html(sous_div);

     	$("#s_d_conf").html(coordination_sp);
     	$("#diocese_conf").html(paroisse);
     	//$("#territoire_conf").html(nom_sous_div);

     	$("#niveau").html(nivo_ecole);

     	if (section_ecole!= null) {
	    	//$("#class_organisee").html("");
	    	console.log(section_ecole)
	    	var sect ="";
     		$.each(section_ecole, function( i, l ){
				 //sect = sect + l+" - ";
				 var tab1 = l.split("**");
				 var section= tab1[0];
				 var option=tab1[1];
				 option_org = option_org+"**"+option;
				sect = sect +"<li><span id='sections' class='text-uppercase c-black'>"+
	     		"Section "+section+ "</span><span id='options'> (option: "+option +")</span></li>";//(option: latin-philo)
			});

	     		$("#ul_section_option").html(sect);
	    }

     })

$("#nivo_ecole_mod").change(function(){
        var choix = $("#nivo_ecole_mod").val();
        console.log(choix) 
        if (choix=="Maternelle") {
        	$("#block_class_mat_mod").removeClass("hidden");
        	$("#block_class_pri_mod").addClass("hidden");
        	$("#block_class_sec_mod").addClass("hidden");

        	$("#classe_ecole_m_mod").val("");
     		$("#classe_ecole_ps_mod").val("");
        }
        else if (choix=="Primaire") {
        	$("#block_class_mat_mod").addClass("hidden");
        	$("#block_class_pri_mod").removeClass("hidden");
        	$("#block_class_sec_mod").addClass("hidden");
        	$("#classe_ecole_m_mod").val("");
     		$("#classe_ecole_ps_mod").val("");
        }
         else if (choix=="Secondaire") {
        	$("#block_class_mat_mod").addClass("hidden");
        	$("#classe_ecole_m_mod").val("");
     		$("#classe_ecole_ps_mod").val("");
        	$("#block_class_pri_mod").removeClass("hidden");
        	$("#block_class_sec_mod").removeClass("hidden");


        }
    })
     $("#section_ecole_mod").change(function(){
     	var sec =  $("#section_ecole_mod").val();
     	//console.log(sec)
     })
//aperci modification

      $("#apercu2_mod").click(function(){
     	var nom_ecole =  $("#nom_ecole_mod").val();
     	var matricule  =  $("#matricule_mod").val();
     	var c_banque  =  $("#c_banque_mod").val();
     	var nivo_ecole =$("#nivo_ecole_mod").val();
     	var section_ecole=$("#section_ecole_mod").val();

     	var nom_sous_div =$("#nom_sous_div_mod").val();
     	var option_org ="";

     	//if(nom_sous_div != "")
		//{ $id_sous_div**$nom_sous_div**$nom_paroisse2**$nom_coord_sp2
			var tab_sous_div = nom_sous_div.split("**");
			//var adress_exct = tab_sous_div[1];
			var coordination_sp = tab_sous_div[3];
			var paroisse = tab_sous_div[2];
			var sous_div = tab_sous_div[1];

			
		 	
		 //}

     	$("#nom_ecole_conf_mod").html(nom_ecole);//var nom_ecole_conf;
     	$("#matricule_conf_mod").html(matricule);//var matricule_conf;
     	$("#c_bank_conf_mod").html(c_banque);

     	$("#paroisse_conf_mod").html(sous_div);

     	$("#s_d_conf_mod").html(coordination_sp);
     	$("#diocese_conf_mod").html(paroisse);
     	//$("#territoire_conf").html(nom_sous_div);

     	$("#niveau_mod").html(nivo_ecole);

     	if (section_ecole!= null) {
	    	//$("#class_organisee").html("");
	    	console.log(section_ecole)
	    	var sect ="";
     		$.each(section_ecole, function( i, l ){
				 //sect = sect + l+" - ";
				 var tab1 = l.split("**");
				 var section= tab1[0];
				 var option=tab1[1];
				 option_org = option_org+"**"+option;
				sect = sect +"<li><span id='sections' class='text-uppercase c-black'>"+
	     		"Option: "+section+ "</span><span id='options_mod'></span></li>";//(option: latin-philo)
	     		// (option: "+option +")(option: "+option +")
			});

	     		$("#ul_section_option_mod").html(sect);
	    }

     })
//enregistrement utilisateur
	$('#my_form_user').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'utilisateur.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_inst").html(response);
                        }
                    });
                });
				
	$("#type").change(function(){
		console.log($("#type").val())
		//Analyste Conseiller d'enseignement
		if($("#type").val() == "Conseiller d'enseignement"){
			
		}
		else {
			
		}
	});
	//1*2**4JRS###

	//enregistrer effectif
     $("#select_ecole_btn").click(function(){
     	var ecole_info = $("#select_ecole").val();
     	
        console.log(ecole_info)
        var nom_ecole="";
        var nivo_ecole="";
        var p_ecole="";
        var d_ecole="";
        var ecole_info_tab =ecole_info.split("**");
        nom_ecole=ecole_info_tab[0];
        nivo_ecole=ecole_info_tab[1];
        p_ecole=ecole_info_tab[2];
        d_ecole=ecole_info_tab[3];
        console.log(nom_ecole+" e")

        $("#current_ecole").val(nom_ecole);
        $("#current_ecole2").val(nom_ecole);
        $("#current_ecoleco").val(nom_ecole);
        //$("#current_ecolecl").val(nom_ecole);

        //College mwanga**Maternelle**bienheureuse**Beni
        $("#niveau_eff").html("(ECOLE "+nivo_ecole+")");
        $("#nom_ecole_eff").html(" "+nom_ecole);
        $("#paroisse_eff").html("(Sous division de: "+p_ecole+", ");
        $("#diocese_eff").html("Paroisse: "+d_ecole+")");
     	//console.log(ecole)
     	if (nivo_ecole == "Maternelle") {
     		//ecolemat_form ecolepri_form
     		$("#ecolepri_form").css("display","none");
     		$("#ecolepri_form").addClass("hidden");

     		$("#ecolemat_form").css("display","block");
     		$("#ecolemat_form").removeClass("hidden");

     		$("#ecoleco_form").css("display","none");
     		$("#ecoleco_form").addClass("hidden");
     	}
     	else if(nivo_ecole == "Primaire"){
     		$("#ecolepri_form").css("display","block");
     		$("#ecolepri_form").removeClass("hidden");

     		$("#ecolemat_form").css("display","none");
     		$("#ecolemat_form").addClass("hidden");

     		$("#ecoleco_form").css("display","none");
     		$("#ecoleco_form").addClass("hidden");
     	}
     	else if(nivo_ecole == "Secondaire"){
     		//aficher le tableau fois le no;nbre des 
     		$("#ecoleco_form").css("display","block");
     		$("#ecoleco_form").removeClass("hidden");
     		
     		$.ajax({
     			url :'Eleve_classe_section_option.php',
     			type:'post',
     			data : {
     				n : nom_ecole
     			},
     			success : function(data){
					$("#tableau_cl").html(data);

					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
				}
     		});
     		$("#ecolepri_form").css("display","none");
     		$("#ecolepri_form").addClass("hidden");

     		$("#ecolemat_form").css("display","none");
     		$("#ecolemat_form").addClass("hidden");

     		
     	}
     	else {
     		$("#ecolepri_form").css("display","none");
     		$("#ecolepri_form").addClass("hidden");

     		$("#ecolemat_form").css("display","none");
     		$("#ecolemat_form").addClass("hidden");

     		$("#ecoleco_form").css("display","none");
     		$("#ecoleco_form").addClass("hidden");
     	}
     });

	//redoublant choix ecole button
	$("#select_ecole_btn_red").click(function(){
     	var ecole_info = $("#select_ecole").val();
     	
        console.log(ecole_info)
        var nom_ecole="";
        var nivo_ecole="";
        var p_ecole="";
        var d_ecole="";
        var ecole_info_tab =ecole_info.split("**");
        nom_ecole=ecole_info_tab[0];
        nivo_ecole=ecole_info_tab[1];
        p_ecole=ecole_info_tab[2];
        d_ecole=ecole_info_tab[3];
        console.log(nom_ecole+" e")

        $("#current_ecole").val(nom_ecole);
        $("#current_ecole1").val(nom_ecole);
        $("#current_ecole2").val(nom_ecole);
        //$("#current_ecolecl").val(nom_ecole);

        //College mwanga**Maternelle**bienheureuse**Beni
        $("#niveau_eff").html("(ECOLE "+nivo_ecole+")");
        $("#nom_ecole_eff").html(" "+nom_ecole);
        $("#paroisse_eff").html("(Sous division de: "+p_ecole+", ");
        $("#diocese_eff").html("Paroisse: "+d_ecole+")");
     	//console.log(ecole)
     	if (nivo_ecole == "Maternelle") {
     		//ecolemat_form ecolepri_form
     		$("#ecolepri_form_red").css("display","none");
     		$("#ecolepri_form_red").addClass("hidden");

     		$("#ecolemat_form_red").css("display","block");
     		$("#ecolemat_form_red").removeClass("hidden");

     		$("#ecoleco_form_red").css("display","none");
     		$("#ecoleco_form_red").addClass("hidden");
     	}
     	else if(nivo_ecole == "Primaire"){
     		$("#ecolepri_form_red").css("display","block");
     		$("#ecolepri_form_red").removeClass("hidden");

     		$("#ecolemat_form_red").css("display","none");
     		$("#ecolemat_form_red").addClass("hidden");

     		$("#ecoleco_form_red").css("display","none");
     		$("#ecoleco_form_red").addClass("hidden");
     	}
     	else if(nivo_ecole == "Secondaire"){
     		//aficher le tableau fois le no;nbre des 
     		$("#ecoleco_form_red").css("display","block");
     		$("#ecoleco_form_red").removeClass("hidden");
     		
     		
     		$("#ecolepri_form_red").css("display","none");
     		$("#ecolepri_form_red").addClass("hidden");

     		$("#ecolemat_form_red").css("display","none");
     		$("#ecolemat_form_red").addClass("hidden");

     		
     	}
     	else {
     		$("#ecolepri_form_red").css("display","none");
     		$("#ecolepri_form_red").addClass("hidden");

     		$("#ecolemat_form_red").css("display","none");
     		$("#ecolemat_form_red").addClass("hidden");

     		$("#ecoleco_form_red").css("display","none");
     		$("#ecoleco_form_red").addClass("hidden");
     	}
     });

//redoublant choix ecole button
	$("#select_ecole_btn_mouv").click(function(){
     	var ecole_info = $("#select_ecole").val();
     	
        console.log(ecole_info)
        var nom_ecole="";
        var nivo_ecole="";
        var p_ecole="";
        var d_ecole="";
        var ecole_info_tab =ecole_info.split("**");
        nom_ecole=ecole_info_tab[0];
        nivo_ecole=ecole_info_tab[1];
        p_ecole=ecole_info_tab[2];
        d_ecole=ecole_info_tab[3];
        console.log(nom_ecole+" e")

        $("#current_ecole").val(nom_ecole);
        $("#current_ecole1").val(nom_ecole);
        $("#current_ecole2").val(nom_ecole);
        //$("#current_ecolecl").val(nom_ecole);

        //College mwanga**Maternelle**bienheureuse**Beni
        $("#niveau_eff").html("(ECOLE "+nivo_ecole+")");
        $("#nom_ecole_eff").html(" "+nom_ecole);
        $("#paroisse_eff").html("(Sous division de: "+p_ecole+", ");
        $("#diocese_eff").html("Paroisse: "+d_ecole+")");
     	//console.log(ecole)
     	if (nivo_ecole != null) {
     		$("#ecolepri_form_mouv").css("display","block");
     		$("#ecolepri_form_mouv").removeClass("hidden");
     	}
     	
     	else {
     		$("#ecolepri_form_mouv").css("display","none");
     		$("#ecolepri_form_mouv").addClass("hidden");

     		
     	}
     });






/*  

	old #####################################################################################
*/
 //Enregistrer_paroisse
 $("#Enregistrer_paroisse").click(function(){

		var nom_paroisse = $("#nom_paroisse").val();
		var bp_paroisse = $("#bp_paroisse").val();
		var nom_diocese = $("#nom_diocese").val();
		var sous_div = $("#sous_div").val();
		var territoire_imp = $("#territoire_imp").val();
		

		//var reg = /^[a-zA-Z/ 'éèàç-]{1,20}$/;
		//if(reg.test(nom_inst) && reg.test(s_a_inst) && reg.test(details_inst) )
		if($.trim(nom_paroisse).length > 0 && 
			$.trim(bp_paroisse).length > 0 && 
			$.trim(nom_diocese).length > 0 && 
			$.trim(sous_div).length > 0 && 
			$.trim(territoire_imp).length > 0)
		{
			$.ajax({
				url: 'paroisse.php',
				type: 'POST',
				data : { 
					nom_paroisse: nom_paroisse, 
					bp_paroisse :bp_paroisse, 
					nom_diocese :nom_diocese, 
					sous_div :sous_div, 
					territoire_imp:territoire_imp
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					$("#modal_body_inst").css("display","none");
					$("#Enregistrer_inst").css("opacity",0);
					
				}
			});
		}
		else 
		{
			$.ajax({
				url: 'paroisse.php',
				type: 'POST',
				data : { 
					nom_paroisse: nom_paroisse, 
					bp_paroisse :bp_paroisse, 
					nom_diocese :nom_diocese, 
					sous_div :sous_div, 
					territoire_imp:territoire_imp
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
				}
			});
		}	
	})
 
	//enregistrer option et section
	$("#Enregistrer_sec_op").click(function(){
		var nom_sec = $("#nom_sec").val();
		var nom_op = $("#nom_op").val();
		if($.trim(nom_sec).length > 0 && 
			$.trim(nom_op).length > 0)
		{
			$.ajax({
				url: 'section_option.php',
				type: 'POST',
				data : { 
					nom_sec: nom_sec, 
					nom_op :nom_op
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
					$("#Enregistrer_inst").css("opacity",0);
					
				}
			});
		}
		else 
		{
			$.ajax({
				url: 'section_option.php',
				type: 'POST',
				data : { 
					nom_sec: nom_sec, 
					nom_op :nom_op
				},
				success : function(data)
				{
					$(".affreslt_inst").html(data);
					//$("#modal_body_inst").css("display","none");
				}
			});
		}
	})
	
     $("#nivo_ecole").change(function(){
        var choix = $("#nivo_ecole").val();
        console.log(choix) 
        if (choix=="Maternelle") {
        	$("#block_class_mat").removeClass("hidden");
        	$("#block_class_pri").addClass("hidden");
        	$("#block_class_sec").addClass("hidden");

        	$("#classe_ecole_m").val("");
     		$("#classe_ecole_ps").val("");
        }
        else if (choix=="Primaire") {
        	$("#block_class_mat").addClass("hidden");
        	$("#block_class_pri").removeClass("hidden");
        	$("#block_class_sec").addClass("hidden");
        	$("#classe_ecole_m").val("");
     		$("#classe_ecole_ps").val("");
        }
         else if (choix=="Secondaire") {
        	$("#block_class_mat").addClass("hidden");
        	$("#classe_ecole_m").val("");
     		$("#classe_ecole_ps").val("");
        	$("#block_class_pri").removeClass("hidden");
        	$("#block_class_sec").removeClass("hidden");


        }
    })
     $("#section_ecole").change(function(){
     	var sec =  $("#section_ecole").val();
     	//console.log(sec)
     })
     //$("#classe_ecole_ps").change(function(){
     	//var choix = $("#classe_ecole_ps").val();
        //console.log(choix) 
     //})
     //Apercu 
      $("#apercu").click(function(){
     	var nom_ecole =  $("#nom_ecole").val();
     	var matricule  =  $("#matricule").val();
     	var c_banque  =  $("#c_banque").val();
     	var nivo_ecole =$("#nivo_ecole").val();

     	var classe_ecole_m=$("#classe_ecole_m").val();
     	var classe_ecole_ps=$("#classe_ecole_ps").val();
     	var section_ecole=$("#section_ecole").val();
     	var paroisse_et_info =$("#paroisse_ecole").val();

     	var c = paroisse_et_info.split("**");
     	var paroisse_ecole =c[0];
     	var s_d_ecole =c[3];
     	var diocese_ecole =c[1];
     	var territoire_ecole =c[2];
     	var tab ="";
     	var class_org ="";
     	var option_org="";
     	//$p**$dioc**$err**$s_d

     	//console.log(nom_ecole)
     	$("#nom_ecole_conf").html(nom_ecole);//var nom_ecole_conf;
     	$("#matricule_conf").html(matricule);//var matricule_conf;
     	$("#c_bank_conf").html(c_banque);
     	$("#paroisse_conf").html(paroisse_ecole);

     	$("#s_d_conf").html(s_d_ecole);
     	$("#diocese_conf").html(diocese_ecole);
     	$("#territoire_conf").html(territoire_ecole);

     	$("#niveau").html(nivo_ecole);
     	
     	
     	if (classe_ecole_ps != null) {
     		$("#class_organisee").html("");
     		//var tab ="";
     		$.each(classe_ecole_ps, function( i, l ){
		  		class_org =class_org+"**"+l;
			  	if (l == 1) {
			  	tab = tab +l + "ère ,";
		  		}
		  		else tab = tab +l + "ème ,";
			});
	     	$("#class_organisee").html(tab);
	    }
	    if (classe_ecole_m!= null) {
	    	$("#class_organisee").html("");
	    	
     		$.each(classe_ecole_m, function( i, l ){
		  		class_org =class_org+"**"+l;
			  	if (l == 1) {
			  	tab = tab +l + "ère ,";
		  		}
		  		else tab = tab +l + "ème ,";
			});
	     	$("#class_organisee").html(tab);
	    }
	    if (section_ecole!= null) {
	    	//$("#class_organisee").html("");
	    	console.log(section_ecole)
	    	var sect ="";
     		$.each(section_ecole, function( i, l ){
				 //sect = sect + l+" - ";
				 var tab1 = l.split("**");
				 var section= tab1[0];
				 var option=tab1[1];
				 option_org = option_org+"**"+option;
				sect = sect +"<li><span id='sections' class='text-uppercase c-black'>"+
	     		"Section "+section+ "</span><span id='options'> (option: "+option +")</span></li>";//(option: latin-philo)
			});

	     	//$("#ul_section_option").html(
	     		//"<li><span id='sections' class='text-uppercase c-black'>"+
	     		//"Section"+sect+ "</span><span id='options'> (option: latin-philo)</span></li>");
	     		$("#ul_section_option").html(sect);
	    }
	    
	    

     })
	//enreg
     //enregistrement effectif
     $("#passer_enr_eleves").click(function(){
     	var nom_ecole =  $("#nom_ecole").val();
     	var matricule  =  $("#matricule").val();
     	var c_banque  =  $("#c_banque").val();
     	var nivo_ecole =$("#nivo_ecole").val();

     	var classe_ecole_m=$("#classe_ecole_m").val();
     	var classe_ecole_ps=$("#classe_ecole_ps").val();
     	var section_ecole=$("#section_ecole").val();
     	var paroisse_et_info =$("#paroisse_ecole").val();

     	var c = paroisse_et_info.split("**");
     	var paroisse_ecole =c[0];
     	var s_d_ecole =c[3];
     	var diocese_ecole =c[1];
     	var territoire_ecole =c[2];
     	var tab ="";
     	var class_org ="";
     	var option_org="";
     	//$p**$dioc**$err**$s_d

     	//console.log(nom_ecole)
     	/*$("#nom_ecole_conf").html(nom_ecole);//var nom_ecole_conf;
     	$("#matricule_conf").html(matricule);//var matricule_conf;
     	$("#c_bank_conf").html(c_banque);
     	$("#paroisse_conf").html(paroisse_ecole);

     	$("#s_d_conf").html(s_d_ecole);
     	$("#diocese_conf").html(diocese_ecole);
     	$("#territoire_conf").html(territoire_ecole);

     	$("#niveau").html(nivo_ecole);
     	*/
     	
     	if (classe_ecole_ps != null) {
     		//$("#class_organisee").html("");
     		//var tab ="";
     		$.each(classe_ecole_ps, function( i, l ){
		  		class_org =class_org+"**"+l;
			  	if (l == 1) {
			  	tab = tab +l + "ère ,";
		  		}
		  		else tab = tab +l + "ème ,";
			});
	     	//$("#class_organisee").html(tab);
	    }
	    if (classe_ecole_m!= null) {
	    	$("#class_organisee").html("");
	    	
     		$.each(classe_ecole_m, function( i, l ){
		  		class_org =class_org+"**"+l;
			  	if (l == 1) {
			  	tab = tab +l + "ère ,";
		  		}
		  		else tab = tab +l + "ème ,";
			});
	     	//$("#class_organisee").html(tab);
	    }
	    if (section_ecole!= null) {
	    	//$("#class_organisee").html("");
	    	console.log(section_ecole)
	    	var sect ="";
     		$.each(section_ecole, function( i, l ){
				 //sect = sect + l+" - ";
				 var tab1 = l.split("**");
				 var section= tab1[0];
				 var option=tab1[1];
				 option_org = option_org+"**"+option;
				//sect = sect +"<li><span id='sections' class='text-uppercase c-black'>"+
	     		//"Section "+section+ "</span><span id='options'> (option: "+option +")</span></li>";//(option: latin-philo)
			});

	     	//$("#ul_section_option").html(
	     		//"<li><span id='sections' class='text-uppercase c-black'>"+
	     		//"Section"+sect+ "</span><span id='options'> (option: latin-philo)</span></li>");
	     		//$("#ul_section_option").html(sect);
	    }
	    if($.trim(nom_ecole).length > 0 && 
	    $.trim(paroisse_et_info).length > 0 && 
	    $.trim(nivo_ecole).length > 0 && 
	    $.trim(class_org).length > 0 && 
			$.trim(matricule).length > 0)
		{
			$.ajax({
				url: 'ecole.php',
				type: 'POST',
				data : { 
					nom_ecole: nom_ecole, 
					matricule :matricule,
					paroisse_et_info: paroisse_ecole,
					nivo_ecole: nivo_ecole,
					class_org:class_org,
					c_banque:c_banque,
					option_org:option_org
				},
				success : function(data)
				{
					

					$(".essai").html(data);
					$("#config_ecole_div").css("display","none");
					

					if (nivo_ecole == "Maternelle") {
						$("#passer_enr_mat").removeClass("hidden");
						$("#passer_enr_mat").css("display","block");
						/*   Secondaire">*/
					}
					else if(nivo_ecole == "Primaire"){
						$("#passer_enr_pri").removeClass("hidden");
						$("#passer_enr_pri").css("display","block");
					}
					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
				}
			});
		}
		else
		{
			$.ajax({
				url: 'ecole.php',
				type: 'POST',
				data : { 
					nom_ecole: nom_ecole, 
					matricule :matricule,
					paroisse_et_info: paroisse_ecole,
					nivo_ecole: nivo_ecole,
					class_org:class_org,
					c_banque:c_banque,
					option_org:option_org
				},
				success : function(data)
				{
					$(".essai").html(data);
					//$("#config_ecole_div").css("display","none");
					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
				}
			});
		}
	    
	    

     })
     //ecouteur du tableau maternelle
     $(".tabm6ans").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	console.log("okk22 "+idf+" ddd "+id2)

     	var c1 =  parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());
     	var c5= parseInt($("#"+id2+"6").val());
     	var c6= parseInt($("#"+id2+"7").val());

     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	$("#"+id2+"8").html(c5+c6);
		//total
     	$("#"+id2+"9").html(c1+c3+c5);
     	$("#"+id2+"10").html(c2+c4+c6);
     	$("#"+id2+"11").html(c1+c2+c3+c4+c5+c6);
     	


     })
     //ecouteur du tableau primaire
     $(".tabp6ans").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	console.log("okk22 "+idf+" ddd "+id2)

     	var c1= parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());
     	var c5= parseInt($("#"+id2+"6").val());
     	var c6= parseInt($("#"+id2+"7").val());
     	var c7= parseInt($("#"+id2+"9").val());
     	var c8= parseInt($("#"+id2+"10").val());
     	var c9= parseInt($("#"+id2+"12").val());
     	var c10= parseInt($("#"+id2+"13").val());
     	var c11= parseInt($("#"+id2+"15").val());
     	var c12= parseInt($("#"+id2+"16").val());

     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	$("#"+id2+"8").html(c5+c6);
     	$("#"+id2+"11").html(c7+c8);
     	$("#"+id2+"14").html(c9+c10);
     	$("#"+id2+"17").html(c11+c12);
		//total
     	$("#"+id2+"18").html(c1+c3+c5+c7+c9+c11);
     	$("#"+id2+"19").html(c2+c4+c6+c8+c10+c12);
     	$("#"+id2+"20").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12);
     })
	//ecouteur du tableau primaire
     $(".tabp_mouv").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	console.log("okk22 "+idf+" ddd "+id2)

     	var c1= parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());
     	var c5= parseInt($("#"+id2+"6").val());
     	var c6= parseInt($("#"+id2+"7").val());
     	var c7= parseInt($("#"+id2+"9").val());
     	var c8= parseInt($("#"+id2+"10").val());
     	var c9= parseInt($("#"+id2+"12").val());
     	var c10= parseInt($("#"+id2+"13").val());
     	//var c11= parseInt($("#"+id2+"15").val());
     	//var c12= parseInt($("#"+id2+"16").val());

     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	$("#"+id2+"8").html(c5+c6);
     	$("#"+id2+"11").html(c7+c8);
     	$("#"+id2+"14").html(c9+c10);
     	//$("#"+id2+"17").html(c11+c12);
		//total
     	$("#"+id2+"15").html(c1+c3+c5+c7+c9);
     	$("#"+id2+"16").html(c2+c4+c6+c8+c10);
     	$("#"+id2+"17").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10);
     })
     //ecouteur tableau co //tabco6ans
     $(".tabco6ans").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)

     	var c1 =  parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());
     	
     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	
		//total
     	$("#"+id2+"6").html(c1+c3);
     	$("#"+id2+"7").html(c2+c4);
     	$("#"+id2+"8").html(c1+c2+c3+c4);
     	console.log("okk221 "+idf+" ddd "+id2+"6")
     })
     //ecouteur sur le tableau cl -- tabcl6ans tabcl6ans tabcl6ans10
     $(".tabcl6ans").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	console.log("okk22 "+idf+" ddd "+id2)

     	var c1=parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());

     	var c5= parseInt($("#"+id2+"6").val());
     	var c6= parseInt($("#"+id2+"7").val());
     	var c7= parseInt($("#"+id2+"9").val());
     	var c8= parseInt($("#"+id2+"10").val());
     	
     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	$("#"+id2+"8").html(c5+c6);
     	$("#"+id2+"11").html(c7+c8);
     	
		//total
     	$("#"+id2+"12").html(c1+c3+c5+c7);
     	$("#"+id2+"13").html(c2+c4+c6+c8);
     	$("#"+id2+"14").html(c1+c2+c3+c4+c5+c6+c7+c8);
     	console.log("okk221 "+idf+" ddd "+id2+"6")
     })
     //ecouteur tableau structure organsiees materbnelle tabmstruc
     $(".tabmstruc").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)

     	var c1=parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"2").val());
     
     	$("#"+id2+"3").html(c1+c2+c3);
     	console.log("okk221 "+idf+" ddd "+id2+"6")
     })
     //ecouteur tableau structure organisees primaire et secondaire
      $(".tabpsstruc").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)

     	var c1=parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"2").val());
     	var c4= parseInt($("#"+id2+"3").val());
     	var c5= parseInt($("#"+id2+"4").val());
     	var c6= parseInt($("#"+id2+"5").val());
     
     	$("#"+id2+"6").html(c1+c2+c3+c4+c5+c6);
     	console.log("okk221 "+idf+" ddd "+id2+"6")
     })

      //ecouteur tableau ages eleves materbnell
     $(".tabageeleve").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)

     	var c1=parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"2").val());
     
     	$("#"+id2+"3").html(c1+c2+c3);
     	console.log("okk221 "+idf+" ddd "+id2+"6")
     })
     //ecouteur tableau ages eleves primaire 5 a 18 ans
     $(".tabageelevepri").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)

     	var c1=parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"2").val());
     	var c4= parseInt($("#"+id2+"3").val());
     	var c5= parseInt($("#"+id2+"4").val());
     	var c6= parseInt($("#"+id2+"5").val());
     	var c7= parseInt($("#"+id2+"6").val());
     	var c8= parseInt($("#"+id2+"7").val());
     	var c9= parseInt($("#"+id2+"8").val());
     	var c10= parseInt($("#"+id2+"9").val());
     	var c11= parseInt($("#"+id2+"10").val());
     	var c12= parseInt($("#"+id2+"11").val());
     	var c13= parseInt($("#"+id2+"12").val());
     	var c14= parseInt($("#"+id2+"13").val());
     
     	$("#"+id2+"14").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14);
     	console.log("okk221 "+idf+" ddd "+id2+"6")
     })

     //ecouteur tableau ages eleves secondaire 10 a +20 ans
     $(".tabageelevesec").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)

     	var c1=parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"2").val());
     	var c4= parseInt($("#"+id2+"3").val());
     	var c5= parseInt($("#"+id2+"4").val());
     	var c6= parseInt($("#"+id2+"5").val());
     	var c7= parseInt($("#"+id2+"6").val());
     	var c8= parseInt($("#"+id2+"7").val());
     	var c9= parseInt($("#"+id2+"8").val());
     	var c10= parseInt($("#"+id2+"9").val());
     	var c11= parseInt($("#"+id2+"10").val());
     	var c12= parseInt($("#"+id2+"11").val());
     	//var c13= parseInt($("#"+id2+"12").val());
     	//var c14= parseInt($("#"+id2+"13").val());
     
     	$("#"+id2+"12").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12);
     	console.log("okk221 "+idf+" ddd "+id2+"6")
     })
     //ecouteur du tableau seondaire redoublant
     $(".tabp6ans_red").keyup(function(){
     	var idf = this.id;
     	var id2 = $(this).parent().parent().attr("id");
     	console.log("okk22 "+idf+" ddd "+id2)

     	var c1= parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());
     	var c5= parseInt($("#"+id2+"6").val());
     	var c6= parseInt($("#"+id2+"7").val());
     	var c7= parseInt($("#"+id2+"9").val());
     	var c8= parseInt($("#"+id2+"10").val());
     	var c9= parseInt($("#"+id2+"12").val());
     	var c10= parseInt($("#"+id2+"13").val());
     	var c11= parseInt($("#"+id2+"15").val());
     	var c12= parseInt($("#"+id2+"16").val());

     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	$("#"+id2+"8").html(c5+c6);
     	$("#"+id2+"11").html(c7+c8);
     	$("#"+id2+"14").html(c9+c10);
     	$("#"+id2+"17").html(c11+c12);
		//total
     	$("#"+id2+"18").html(c1+c3+c5+c7+c9+c11);
     	$("#"+id2+"19").html(c2+c4+c6+c8+c10+c12);
     	$("#"+id2+"20").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12);
     })

     //ecole maternelle validation
     $('#ecolemat_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'Eleve_classe.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);
                        	$("#ecolemat_form_table").css("display","none");
                        	$("#ecolemat_form_table").addClass("hidden");
                        	$("#ecolemat_form_button").css("display","none");
                        	$("#ecolemat_form_button").addClass("hidden");
                        	

                        }
                    });
                });
     //ecole primaire valiadation ecolepri_form
     $('#ecolepri_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'Eleve_classe_pri.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);//ecolepri_form_button
                        	$("#ecolepri_form_table").css("display","none");
                        	$("#ecolepri_form_table").addClass("hidden");
                        	$("#ecolepri_form_button").css("display","none");
                        	$("#ecolepri_form_button").addClass("hidden");
                        	

                        }
                    });
                });
     //ecole secondaire validation champs ecolecl_form
     $('#ecolecl_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'effectif_age_sex.php',
                        //url: 'Eleve_classe_pri_section_option_post.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);//ecolepri_form_button
                        	$("#ecolecl_form_table").css("display","none");
                        	$("#ecolecl_form_table").addClass("hidden");
                        	$("#ecolecl_form_button").css("display","none");
                        	$("#ecolecl_form_button").addClass("hidden");
                        	

                        }
                    });
                });
     // ecole secondqire vqlidqtion cycle long ecoleco_form
      $('#ecoleco_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        //url: 'effectif_age_sex.php',
                        url: 'Eleve_classe_co.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecoleco").html(response);//ecolepri_form_button
                        	$("#ecoleco_form_table").css("display","none");
                        	$("#ecoleco_form_table").addClass("hidden");
                        	$("#ecoleco_form_button").css("display","none");
                        	$("#ecoleco_form_button").addClass("hidden");
                        	

                        }
                    });
                });
      //$("#ecoleco_form_button").click(function(){
      	//console.log("ok")
      //})
      //structure orgqniser vqlidqtion structuremat_form_button
       $('#structuremat_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'structure_org.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);//ecolepri_form_button
                        	$("#structuremat_form_table").css("display","none");
                        	$("#structuremat_form_table").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");
                        }
                    });
                });
	//structi=ure autorisee form
	$('#structure_aut_mat_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'structure_aut.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);//ecolepri_form_button
                        	$("#structuremat_form_table").css("display","none");
                        	$("#structuremat_form_table").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");
                        }
                    });
                });

    // structure orgqniser vqlidqtion  primaire et secondqire stucturepri_form
     $('#stucturepri_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'structure_org.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$("#structuremat_form").css("display","none");
                        	$("#structuremat_form").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#stucturepri_form_table").css("display","none");
                        	$("#stucturepri_form_table").addClass("hidden");
                        	$("#stucturepri_form_button").css("display","none");
                        	$("#stucturepri_form_button").addClass("hidden");

                        	$(".affreslt_ecole2").html(response);//stucturemat_form_table
                        }
                    });
                });
// structure autorisee vqlidqtion  primaire et secondqire stucturepri_form
     $('#stucture_aut_pri_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'structure_aut.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$("#structuremat_form").css("display","none");
                        	$("#structuremat_form").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#stucturepri_form_table").css("display","none");
                        	$("#stucturepri_form_table").addClass("hidden");
                        	$("#stucturepri_form_button").css("display","none");
                        	$("#stucturepri_form_button").addClass("hidden");

                        	$(".affreslt_ecole2").html(response);//stucturemat_form_table
                        }
                    });
                });

	// Age des eleves validqtion  maternelle
     $('#ages_eleves_mat_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'age_des_eleves.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	//$("#ages_eleves_mat_form").css("display","none");
                        	//$("#ages_eleves_mat_form").addClass("hidden");
                        	//$("#structuremat_form_button").css("display","none");
                        	//$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#structuremat_form_table").css("display","none");
                        	$("#structuremat_form_table").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");

                        	$(".affreslt_ecole").html(response);//stucturemat_form_table
                        }
                    });
                });

// Age des eleves validqtion  primaire
     $('#ages_eleves_pri_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'age_des_eleves.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	//$("#ages_eleves_mat_form").css("display","none");
                        	//$("#ages_eleves_mat_form").addClass("hidden");
                        	//$("#structuremat_form_button").css("display","none");
                        	//$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#stucturepri_form_table").css("display","none");
                        	$("#stucturepri_form_table").addClass("hidden");
                        	$("#stucturepri_form_button").css("display","none");
                        	$("#stucturepri_form_button").addClass("hidden");

                        	$(".affreslt_ecole").html(response);//stucturemat_form_table
                        }
                    });
                });

// Age des eleves validqtion  secondaire
     $('#ages_eleves_sec_form').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'age_des_eleves.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	//$("#ages_eleves_mat_form").css("display","none");
                        	//$("#ages_eleves_mat_form").addClass("hidden");
                        	//$("#structuremat_form_button").css("display","none");
                        	//$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#stucturesec_form_table").css("display","none");
                        	$("#stucturesec_form_table").addClass("hidden");
                        	$("#stucturesec_form_button").css("display","none");
                        	$("#stucturesec_form_button").addClass("hidden");

                        	$(".affreslt_ecole").html(response);//stucturemat_form_table
                        }
                    });
                });



     $("#affiche_resultat1").click(function(){
     	var nom_ecole =  $("#nom_ecole").val();
     	var matricule  =  $("#matricule").val();
     	var c_banque  =  $("#c_banque").val();
     	var nivo_ecole =$("#nivo_ecole").val();

     	var classe_ecole_m=$("#classe_ecole_m").val();
     	var classe_ecole_ps=$("#classe_ecole_ps").val();
     	var section_ecole=$("#section_ecole").val();
     	var paroisse_et_info =$("#paroisse_ecole").val();

     	var c = paroisse_et_info.split("**");
     	var paroisse_ecole =c[0];
     	var s_d_ecole =c[3];
     	var diocese_ecole =c[1];
     	var territoire_ecole =c[2];
     	//$("#affiche_resultat").html("okkkk");
	    //condition d'enregistrement 
	    console.log(nom_ecole)
	    console.log(matricule)
	    console.log(paroisse_et_info)
	    console.log(nivo_ecole)
	    console.log(section_ecole)
	   /*if($.trim(nom_ecole).length > 0 && 
			$.trim(matricule).length > 0 &&
			$.trim(paroisse_et_info)> 0 &&
			$.trim(nivo_ecole)> 0
			)
		{*/
			$.ajax({
				url: 'ecole.php',
				type: 'POST',
				data : { 
					nom_ecole: nom_ecole, 
					matricule :matricule,
					paroisse_et_info: paroisse_et_info,
					nivo_ecole: nivo_ecole
				},
				success : function(data)
				{
					$(".essai").html(data);

					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
				}
			});
		//}
     })

//ecole maternelle validation redoublant
     $('#ecolemat_form_red').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'redoublant_par_sex.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);
                        	$("#ecolemat_form_table").css("display","none");
                        	$("#ecolemat_form_table").addClass("hidden");
                        	$("#ecolemat_form_button").css("display","none");
                        	$("#ecolemat_form_button").addClass("hidden");
                        	

                        }
                    });
                });

//ecole primaire validation redoublant
     $('#ecolepri_form_red').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'redoublant_par_sex.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);
                        	$("#ecolepri_form_table").css("display","none");
                        	$("#ecolepri_form_table").addClass("hidden");
                        	$("#ecolepri_form_button").css("display","none");
                        	$("#ecolepri_form_button").addClass("hidden");
                        	

                        }
                    });
                });
//ecole primaire validation redoublant
     $('#ecolepri_form_mouv').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mouvement_eleves.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);
                        	$("#ecolepri_form_table").css("display","none");
                        	$("#ecolepri_form_table").addClass("hidden");
                        	$("#ecolepri_form_button").css("display","none");
                        	$("#ecolepri_form_button").addClass("hidden");
                        	

                        }
                    });
                });

//ecole seecondaire validation redoublant
     $('#ecoleco_form_red').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'redoublant_par_sex.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_ecole").html(response);
                        	$("#ecolesec_form_table").css("display","none");
                        	$("#ecolesec_form_table").addClass("hidden");
                        	$("#ecolesec_form_button").css("display","none");
                        	$("#ecolesec_form_button").addClass("hidden");
                        	

                        }
                    });
                });


     /*//enregistrer effectif
     $("#select_ecole_btn").click(function(){
     	var ecole_info = $("#select_ecole").val();
     	
        console.log(ecole_info)
        var nom_ecole="";
        var nivo_ecole="";
        var p_ecole="";
        var d_ecole="";
        var ecole_info_tab =ecole_info.split("**");
        nom_ecole=ecole_info_tab[0];
        nivo_ecole=ecole_info_tab[1];
        p_ecole=ecole_info_tab[2];
        d_ecole=ecole_info_tab[3];
        console.log(nom_ecole)

        $("#current_ecole").val(nom_ecole);
        $("#current_ecole2").val(nom_ecole);
        $("#current_ecoleco").val(nom_ecole);
        //$("#current_ecolecl").val(nom_ecole);

        //College mwanga**Maternelle**bienheureuse**Beni
        $("#niveau_eff").html("(ECOLE "+nivo_ecole+")");
        $("#nom_ecole_eff").html(" "+nom_ecole);
        $("#paroisse_eff").html("(Sous division de: "+p_ecole+", ");
        $("#diocese_eff").html("Diocèse: "+d_ecole+")");
     	//console.log(ecole)
     	if (nivo_ecole == "Maternelle") {
     		//ecolemat_form ecolepri_form
     		$("#ecolepri_form").css("display","none");
     		$("#ecolepri_form").addClass("hidden");

     		$("#ecolemat_form").css("display","block");
     		$("#ecolemat_form").removeClass("hidden");

     		$("#ecoleco_form").css("display","none");
     		$("#ecoleco_form").addClass("hidden");
     	}
     	else if(nivo_ecole == "Primaire"){
     		$("#ecolepri_form").css("display","block");
     		$("#ecolepri_form").removeClass("hidden");

     		$("#ecolemat_form").css("display","none");
     		$("#ecolemat_form").addClass("hidden");

     		$("#ecoleco_form").css("display","none");
     		$("#ecoleco_form").addClass("hidden");
     	}
     	else if(nivo_ecole == "Secondaire"){
     		//aficher le tableau fois le no;nbre des 
     		$("#ecoleco_form").css("display","block");
     		$("#ecoleco_form").removeClass("hidden");
     		
     		$.ajax({
     			url :'Eleve_classe_section_option.php',
     			type:'post',
     			data : {
     				n : nom_ecole
     			},
     			success : function(data){
					$("#tableau_cl").html(data);

					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
				}
     		});
     		$("#ecolepri_form").css("display","none");
     		$("#ecolepri_form").addClass("hidden");

     		$("#ecolemat_form").css("display","none");
     		$("#ecolemat_form").addClass("hidden");

     		
     	}
     	else {
     		$("#ecolepri_form").css("display","none");
     		$("#ecolepri_form").addClass("hidden");

     		$("#ecolemat_form").css("display","none");
     		$("#ecolemat_form").addClass("hidden");

     		$("#ecoleco_form").css("display","none");
     		$("#ecoleco_form").addClass("hidden");
     	}
     });*/
     //structture organisee select_structure_btn
     $("#select_structure_btn").click(function(){
     	var ecole_info = $("#select_ecole_stucture").val();
     	
        console.log(ecole_info)
        var nom_ecole="";
        var nivo_ecole="";
        var p_ecole="";
        var d_ecole="";
        var ecole_info_tab =ecole_info.split("**");
        nom_ecole=ecole_info_tab[0];
        nivo_ecole=ecole_info_tab[1];
        p_ecole=ecole_info_tab[2];
        d_ecole=ecole_info_tab[3];
        console.log(nom_ecole)

        $("#current_ecole_structure").val(nom_ecole);
        //current_ecole_structure
        $("#current_ecole_structure2").val(nom_ecole);
       /// $("#current_ecolec").val(nom_ecole);
        //$("#current_ecolecl").val(nom_ecole);

        //College mwanga**Maternelle**bienheureuse**Beni
        $("#niveau_eff").html("(ECOLE "+nivo_ecole+")");
        $("#nom_ecole_eff").html(" "+nom_ecole);
        $("#paroisse_eff").html("(Sous division de: "+p_ecole+", ");
        $("#diocese_eff").html("Paroisse: "+d_ecole+")");
     	//console.log(ecole)
     	if (nivo_ecole == "Maternelle") {
     		//structuremat_form_button
     		//ecolemat_form ecolepri_form
     		$("#stucturepri_form").css("display","none");
     		$("#stucturepri_form").addClass("hidden");

     		$("#structuremat_form").css("display","block");
     		$("#structuremat_form").removeClass("hidden");

     		/*$("#ecoleco_form").css("display","none");
     		$("#ecoleco_form").addClass("hidden");*/
     	}
     	else if(nivo_ecole == "Primaire"){
     		$("#structuremat_form").css("display","none");
     		$("#structuremat_form").addClass("hidden");

     		$("#stucturepri_form").css("display","block");
     		$("#stucturepri_form").removeClass("hidden");
     	}
     	else if(nivo_ecole == "Secondaire"){
     		$("#structuremat_form").css("display","none");
     		$("#structuremat_form").addClass("hidden");

     		$("#stucturepri_form").css("display","block");
     		$("#stucturepri_form").removeClass("hidden");
     	}
     	else {
     		$("#stucturepri_form").css("display","none");
     		$("#stucturepri_form").addClass("hidden");

     		$("#structuremat_form").css("display","none");
     		$("#structuremat_form").addClass("hidden");
     	}
     });

	//STRUCTURE AUTORISEE 
	$("#select_structure_aut_btn").click(function(){
     	var ecole_info = $("#select_ecole_stucture").val();
     	
        console.log(ecole_info)
        var nom_ecole="";
        var nivo_ecole="";
        var p_ecole="";
        var d_ecole="";
        var ecole_info_tab =ecole_info.split("**");
        nom_ecole=ecole_info_tab[0];
        nivo_ecole=ecole_info_tab[1];
        p_ecole=ecole_info_tab[2];
        d_ecole=ecole_info_tab[3];
        console.log(nom_ecole)

        $("#current_ecole_structure").val(nom_ecole);
        //current_ecole_structure
        $("#current_ecole_structure2").val(nom_ecole);
       /// $("#current_ecolec").val(nom_ecole);
        //$("#current_ecolecl").val(nom_ecole);

        //College mwanga**Maternelle**bienheureuse**Beni
        $("#niveau_eff").html("(ECOLE "+nivo_ecole+")");
        $("#nom_ecole_eff").html(" "+nom_ecole);
        $("#paroisse_eff").html("(Sous division de: "+p_ecole+", ");
        $("#diocese_eff").html("Paroisse: "+d_ecole+")");
     	//console.log(ecole)
     	if (nivo_ecole == "Maternelle") {
     		//structuremat_form_button
     		//ecolemat_form ecolepri_form
     		$("#stucture_aut_pri_form").css("display","none");
     		$("#stucture_aut_pri_form").addClass("hidden");

     		$("#structure_aut_mat_form").css("display","block");
     		$("#structure_aut_mat_form").removeClass("hidden");

     		/*$("#ecoleco_form").css("display","none");
     		$("#ecoleco_form").addClass("hidden");*/
     	}
     	else if(nivo_ecole == "Primaire"){
     		$("#structure_aut_mat_form").css("display","none");
     		$("#structure_aut_mat_form").addClass("hidden");

     		$("#stucture_aut_pri_form").css("display","block");
     		$("#stucture_aut_pri_form").removeClass("hidden");
     	}
     	else if(nivo_ecole == "Secondaire"){
     		$("#structure_aut_mat_form").css("display","none");
     		$("#structure_aut_mat_form").addClass("hidden");

     		$("#stucture_aut_pri_form").css("display","block");
     		$("#stucture_aut_pri_form").removeClass("hidden");
     	}
     	else {
     		$("#stucture_aut_pri_form").css("display","none");
     		$("#stucture_aut_pri_form").addClass("hidden");

     		$("#structure_aut_mat_form").css("display","none");
     		$("#structure_aut_mat_form").addClass("hidden");
     	}
     }); 

	//Age des eleves choix ecole
	$("#select_age_ecole_btn").click(function(){
     	var ecole_info = $("#select_ecole_stucture").val();
     	
        console.log(ecole_info)
        var nom_ecole="";
        var nivo_ecole="";
        var p_ecole="";
        var d_ecole="";
        var ecole_info_tab =ecole_info.split("**");
        nom_ecole=ecole_info_tab[0];
        nivo_ecole=ecole_info_tab[1];
        p_ecole=ecole_info_tab[2];
        d_ecole=ecole_info_tab[3];
        console.log(nom_ecole)

        $("#current_ecole_structure").val(nom_ecole);
        //current_ecole_structure
        $("#current_ecole_structure2").val(nom_ecole);
        $("#current_ecole_structure3").val(nom_ecole);
       /// $("#current_ecolec").val(nom_ecole);
        //$("#current_ecolecl").val(nom_ecole);

        //College mwanga**Maternelle**bienheureuse**Beni
        $("#niveau_eff").html("(ECOLE "+nivo_ecole+")");
        $("#nom_ecole_eff").html(" "+nom_ecole);
        $("#paroisse_eff").html("(Sous division de: "+p_ecole+", ");
        $("#diocese_eff").html("Paroisse: "+d_ecole+")");
     	//console.log(ecole)
     	if (nivo_ecole == "Maternelle") {
     		//structuremat_form_button
     		//ecolemat_form ecolepri_form
     		$("#ages_eleves_pri_form").css("display","none");
     		$("#ages_eleves_pri_form").addClass("hidden");

     		$("#ages_eleves_mat_form").css("display","block");
     		$("#ages_eleves_mat_form").removeClass("hidden");

     		$("#ages_eleves_sec_form").css("display","none");
     		$("#ages_eleves_sec_form").addClass("hidden");
     	}
     	else if(nivo_ecole == "Primaire"){
     		$("#ages_eleves_mat_form").css("display","none");
     		$("#ages_eleves_mat_form").addClass("hidden");

     		$("#ages_eleves_pri_form").css("display","block");
     		$("#ages_eleves_pri_form").removeClass("hidden");

     		$("#ages_eleves_sec_form").css("display","none");
     		$("#ages_eleves_sec_form").addClass("hidden");
     	}
     	else if(nivo_ecole == "Secondaire"){
     		$("#ages_eleves_mat_form").css("display","none");
     		$("#ages_eleves_mat_form").addClass("hidden");

     		$("#ages_eleves_sec_form").css("display","block");
     		$("#ages_eleves_sec_form").removeClass("hidden");

     		$("#ages_eleves_pri_form").css("display","none");
     		$("#ages_eleves_pri_form").addClass("hidden");
     	}
     	else {
     		$("#ages_eleves_pri_form").css("display","none");
     		$("#ages_eleves_pri_form").addClass("hidden");

     		$("#ages_eleves_mat_form").css("display","none");
     		$("#ages_eleves_mat_form").addClass("hidden");

     		$("#ages_eleves_sec_form").css("display","none");
     		$("#ages_eleves_sec_form").addClass("hidden");
     	}
     });
     //print age cummules
     $(".printBtn").click(function(){
		var idf = this.id;
		console.log("ok")
		//$.print("#tab_printBtn"+idf,this);
	})
    $("#select_paroisse_btn").click(function() {
    	var pa = $("#select_paroisse").val();
    	//console.log(pa)
    	if(pa != ""){
    		$.ajax({
     		url :'affiche_age_eleve_cumulees.php',
     		type:'post',
     		data : {n : pa},
     		success : function(data){
     			$("#resultat_tab").html(data);
     			$("#printBtn").removeClass("hidden");
     			$("#printBtn").css("display","block");
     			
     		}
     	});
    	}
    	

    })
    $("#select_paroisse_eff_btn").click(function() {
    	var pa = $("#select_eff_paroisse").val();
    	console.log(pa)
    	if(pa != ""){
    		$.ajax({
     		url :'affiche_releve_stat_eff.php',
     		type:'post',
     		data : {n : pa},
     		success : function(data){
     			$("#resultat_eff_tab").html(data);
     			$("#printBtn").removeClass("hidden");
     			$("#printBtn").css("display","block");
     			
     		}
     	});
    	}
    	

    })
    //QGE REVOLU
    $("#select_paroisse_age_revolu_btn").click(function() {
    	var pa = $("#select_eff_paroisse").val();
    	console.log(pa)
    	if(pa != ""){
    		$.ajax({
     		url :'affiche_age_revolu.php',
     		type:'post',
     		data : {n : pa},
     		success : function(data){
     			$("#resultat_eff_tab").html(data);
     			$("#printBtn").removeClass("hidden");
     			$("#printBtn").css("display","block");
     			
     		}
     	});
    	}
    	

    })

    /*
my_form_add_personnel

	matricule_p
	nom_p
	date_nais_p
	sex_p
	date_eng_p
	nat_p
	sifa_p
	conf_p
	date_dip
	qualdip_p
	date_pro_p
	grade_anc_p
	grade_act_p
	annee_pre_p
	fonct_p
	INSERT INTO useless_table (id, date_added) VALUES(
            1, STR_TO_DATE('03/08/2009', '%m/%d/%Y'));
    *///var date_nais_p = $('#date_nais_p').val("22-3-2014");

    //$('#my_form_add_personnel_btn').on('submit', function (e) {
	$("#my_form_add_personnel_btn").click(function(){
        // On empêche le navigateur de soumettre le formulaire
        //e.preventDefault();

        var date_nais_p = $('#date_nais_p').val();
        var date_eng_p = $('#date_eng_p').val();
        var date_dip = $('#date_dip').val();
        var date_pro_p = $('#date_pro_p').val();
        var annee_pre_p = "0";
        //$.trim(nom_inst).length > 0 || $.trim(date_pro_p).length > 0
        if ($.trim(date_nais_p).length > 0 && $.trim(date_eng_p).length > 0 && $.trim(date_dip).length > 0) {
        	date_nais_p = $('#date_nais_p').val();
			date_eng_p = $('#date_eng_p').val();
			date_dip = $('#date_dip').val();
			

			tab_date_nais_p = date_nais_p.split("/") ;
			tab_date_eng_p = date_eng_p.split("/") ;
			tab_date_dip = date_dip.split("/") ;
			

			date_nais_p = 	tab_date_nais_p[2]+"-"+tab_date_nais_p[1]+"-"+tab_date_nais_p[0];		
			date_eng_p 	= 	tab_date_eng_p[2]+"-"+tab_date_eng_p[1]+"-"+tab_date_eng_p[0];		
			date_dip 	= 	tab_date_dip[2]+"-"+tab_date_dip[1]+"-"+tab_date_dip[0];		
			

			var d = new Date();
			var year = d.getFullYear();
			
			//var ap = 
			//annee_pre_p = $('#annee_pre_p').val();
			annee_pre_p_found = year - tab_date_eng_p[2];
			annee_pre_p =annee_pre_p_found+"";
			console.log(" => "+annee_pre_p)

        }

        else {
        	date_nais_p = "";
			date_eng_p = "";
			date_dip = "";
			
        }
        if($.trim(date_pro_p).length > 0)
        {
        	date_pro_p = $('#date_pro_p').val();
			tab_date_pro_p = date_pro_p.split("/") ;
			date_pro_p 	= 	tab_date_pro_p[2]+"-"+tab_date_pro_p[1]+"-"+tab_date_pro_p[0];
        }
        else {
        	date_pro_p = "";
        }
        var matricule_p = $('#matricule_p').val();
		var nom_p = $('#nom_p').val();
		
		var sex_p = $('#sex_p').val();
		
		var nat_p = $('#nat_p').val();
		var class_p = $('#class_p').val();
		//class_p
		var sifa_p = $('#sifa_p').val();
		var conf_p = $('#conf_p').val();
		
		var qualdip_p = $('#qualdip_p').val();
		
		var grade_anc_p = "";
		var grade_act_p = "";

		var grade_anc_p2 = $('#select_grade_anc2').val();
		var grade_anc_p1 = $('#select_grade_anc1').val();
		var grade_act_p1 = $('#select_grade_act1').val();
		var grade_act_p2 = $('#select_grade_act2').val();
		
		if (grade_act_p1 != "" && grade_act_p2 != "" && grade_anc_p1 != "" && grade_anc_p2 != "") {
			grade_anc_p = grade_anc_p1+""+grade_anc_p2;
			grade_act_p = grade_act_p1+""+grade_act_p2;
		}
		//var annee_pre_p = $('#annee_pre_p').val();
		var fonct_p = $('#fonct_p').val();
		var select_ecole_affecter = $("#select_ecole_affecter").val();


		console.log(class_p)
		/*console.log(grade_act_p)*/

		/*console.log(date_nais_p)
		console.log(date_dip)
		console.log(date_pro_p)
		console.log(date_eng_p)*/
		/*console.log(matricule_p)
		console.log(nom_p)
		console.log(date_nais_p)
		console.log(sex_p)
		console.log(date_eng_p)
		console.log(nat_p)
		console.log(sifa_p)
		console.log(conf_p)
		console.log(date_dip)
		console.log(qualdip_p)
		console.log(date_pro_p)
		console.log(grade_anc_p)
		console.log(grade_act_p)
		console.log(annee_pre_p)
		console.log(fonct_p)
		console.log(select_ecole_affecter)*/
		$.ajax({
            
            url: 'gestion_personnel.php',
			type: 'POST',        
            data: {
            	matricule_p:matricule_p,
				nom_p:nom_p,
				date_nais_p:date_nais_p,
				sex_p:sex_p,
				date_eng_p:date_eng_p,
				nat_p:nat_p,
				sifa_p:sifa_p,
				conf_p:conf_p,
				date_dip:date_dip,
				qualdip_p:qualdip_p,
				date_pro_p:date_pro_p,
				grade_anc_p:grade_anc_p,
				grade_act_p:grade_act_p,
				annee_pre_p:annee_pre_p,
				fonct_p:fonct_p,
				select_ecole_affecter:select_ecole_affecter,
				class_p:class_p

            },
            success: function (data) {
                 //affreslt_inst
     			$(".affreslt_inst").html(data);

            }
        });

    });
//###############################################################################################
//	MODIFICATION
//##############################################################################################
$("#button_mod").click(function(){
	//$(".tabm6ans").keyup(function(){
     	var idf = this.id;
     	console.log("ok")
     	//var id2 = $(this).attr("id");current_ecole

     	
     	
     //})
	var ecole = $("#select_ecole_mod").val();
	console.log(ecole+" > bree")
	if (ecole!="") {
		$.ajax({
			url:"modification.php",
			type:"POST",
			data:{
				current_ecole:ecole
			},
			success :function(data){
				$(".result_mod").html(data);

				
		     	//ecouteur tableau maternelle modification effectif
		     	for(var i=0;i<3;i++){
		     	var id2 = $("#tabm6ans"+i).attr("id");
		     	//console.log(id2)
		     	
		     	var c1= parseInt($("#"+id2+"0").val());
		     	var c2= parseInt($("#"+id2+"1").val());
		     	var c3= parseInt($("#"+id2+"3").val());
		     	var c4= parseInt($("#"+id2+"4").val());
		     	var c5= parseInt($("#"+id2+"6").val());
		     	var c6= parseInt($("#"+id2+"7").val());

		     	$("#"+id2+"2").html(c1+c2);
		     	$("#"+id2+"5").html(c3+c4);
		     	$("#"+id2+"8").html(c5+c6);
				//total
		     	$("#"+id2+"9").html(c1+c3+c5);
		     	$("#"+id2+"10").html(c2+c4+c6);
		     	$("#"+id2+"11").html(c1+c2+c3+c4+c5+c6);
		     }

		     for(var i = 0;i<5;i++)
		     {
		     	 // $(".tabp6ans").keyup(function(){
     	//var idf = this.id;
     	//var id2 = $(this).parent().parent().attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)
     	var id2 = $("#tabp6ans"+i).attr("id");

     	var c1= parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());
     	var c5= parseInt($("#"+id2+"6").val());
     	var c6= parseInt($("#"+id2+"7").val());
     	var c7= parseInt($("#"+id2+"9").val());
     	var c8= parseInt($("#"+id2+"10").val());
     	var c9= parseInt($("#"+id2+"12").val());
     	var c10= parseInt($("#"+id2+"13").val());
     	var c11= parseInt($("#"+id2+"15").val());
     	var c12= parseInt($("#"+id2+"16").val());

     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	$("#"+id2+"8").html(c5+c6);
     	$("#"+id2+"11").html(c7+c8);
     	$("#"+id2+"14").html(c9+c10);
     	$("#"+id2+"17").html(c11+c12);
		//total
     	$("#"+id2+"18").html(c1+c3+c5+c7+c9+c11);
     	$("#"+id2+"19").html(c2+c4+c6+c8+c10+c12);
     	$("#"+id2+"20").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12);
     //})
		     }

		//ecouteur tableau co modififectifcation effectif age sex

     //$(".tabco6ans").keyup(function(){
     	for(var i = 0;i<1;i++)
     	{
     	//var idf = this.id;
     	//var id2 = $(this).parent().parent().attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)
     	var id2 = $("#tabco6ans"+i).attr("id");

     	var c1 =  parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());
     	
     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	
		//total
     	$("#"+id2+"6").html(c1+c3);
     	$("#"+id2+"7").html(c2+c4);
     	$("#"+id2+"8").html(c1+c2+c3+c4);
     	//console.log("okk221 "+idf+" ddd "+id2+"6")
     }
     for (var i = 0; i < 6; i++) {
     	//ecouteur sur le tableau cl -- tabcl6ans tabcl6ans tabcl6ans10
     //$(".tabcl6ans").keyup(function(){
     	//var idf = this.id;
     	//var id2 = $(this).parent().parent().attr("id");
     	var id2 = $("#tabcl6ans"+i).attr("id");
     	//console.log("okk22 "+idf+" ddd "+id2)

     	var c1=parseInt($("#"+id2+"0").val());
     	var c2= parseInt($("#"+id2+"1").val());
     	var c3= parseInt($("#"+id2+"3").val());
     	var c4= parseInt($("#"+id2+"4").val());

     	var c5= parseInt($("#"+id2+"6").val());
     	var c6= parseInt($("#"+id2+"7").val());
     	var c7= parseInt($("#"+id2+"9").val());
     	var c8= parseInt($("#"+id2+"10").val());
     	
     	$("#"+id2+"2").html(c1+c2);
     	$("#"+id2+"5").html(c3+c4);
     	$("#"+id2+"8").html(c5+c6);
     	$("#"+id2+"11").html(c7+c8);
     	
		//total
     	$("#"+id2+"12").html(c1+c3+c5+c7);
     	$("#"+id2+"13").html(c2+c4+c6+c8);
     	$("#"+id2+"14").html(c1+c2+c3+c4+c5+c6+c7+c8);
     	//console.log("okk221 "+idf+" ddd "+id2+"6")
     //})
     };
     //})
		     
			}
		});
	};
})
//##########################################################################################
//############################################################################################
//modificatin structure organisee
$("#button_str_org_mod").click(function(){
	//$(".tabm6ans").keyup(function(){
     	var idf = this.id;
     	console.log(idf)
     	//var id2 = $(this).attr("id");
     	
     	
     //})
	var ecole = $("#select_ecole_mod").val();
	console.log(ecole)
	if (ecole!="") {
		$.ajax({
			url:"modification_str_org.php",
			type:"POST",
			data:{
				current_ecole:ecole
			},
			success :function(data){
				$(".result_mod").html(data);
		     	//ecouteur tableau maternelle modification structure org
			    for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabmstruc"+i).attr("id");
		     		var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     
			     	$("#"+id2+"3").html(c1+c2+c3);
		     	}
		     	for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabpsstruc"+i).attr("id");
		     		//$(".tabpsstruc").keyup(function(){
			     	//var idf = this.id;
			     	//var id2 = $(this).parent().parent().attr("id");
			     	//console.log("okk22 "+idf+" ddd "+id2)

			     	var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     	var c4= parseInt($("#"+id2+"3").val());
			     	var c5= parseInt($("#"+id2+"4").val());
			     	var c6= parseInt($("#"+id2+"5").val());
			     
			     	$("#"+id2+"6").html(c1+c2+c3+c4+c5+c6);
     	//console.log("okk221 "+idf+" ddd "+id2+"6")
     //})
		     	}
		     	for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabpsstruc"+i).attr("id");
		     		//$(".tabpsstruc").keyup(function(){
			     	//var idf = this.id;
			     	//var id2 = $(this).parent().parent().attr("id");
			     	//console.log("okk22 "+idf+" ddd "+id2)

			     	var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     	var c4= parseInt($("#"+id2+"3").val());
			     	var c5= parseInt($("#"+id2+"4").val());
			     	var c6= parseInt($("#"+id2+"5").val());
			     
			     	$("#"+id2+"6").html(c1+c2+c3+c4+c5+c6);
		     	}

		     	

		     
     	
     
		     
			}
		});
	};
})

//##########################################################################################
//############################################################################################
//modificatin structure autorisee
$("#button_str_aut_mod").click(function(){
	//$(".tabm6ans").keyup(function(){
     	var idf = this.id;
     	console.log(idf)
     	//var id2 = $(this).attr("id");
     	
     	
     //})
	var ecole = $("#select_ecole_mod").val();
	console.log(ecole)
	if (ecole!="") {
		$.ajax({
			url:"modification_str_aut.php",
			type:"POST",
			data:{
				current_ecole:ecole
			},
			success :function(data){
				$(".result_mod").html(data);
		     	//ecouteur tableau maternelle modification structure org
			    for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabmstruc"+i).attr("id");
		     		var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     
			     	$("#"+id2+"3").html(c1+c2+c3);
		     	}
		     	for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabpsstruc"+i).attr("id");
		     		//$(".tabpsstruc").keyup(function(){
			     	//var idf = this.id;
			     	//var id2 = $(this).parent().parent().attr("id");
			     	//console.log("okk22 "+idf+" ddd "+id2)

			     	var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     	var c4= parseInt($("#"+id2+"3").val());
			     	var c5= parseInt($("#"+id2+"4").val());
			     	var c6= parseInt($("#"+id2+"5").val());
			     
			     	$("#"+id2+"6").html(c1+c2+c3+c4+c5+c6);
     	//console.log("okk221 "+idf+" ddd "+id2+"6")
     //})
		     	}
		     	for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabpsstruc"+i).attr("id");
		     		//$(".tabpsstruc").keyup(function(){
			     	//var idf = this.id;
			     	//var id2 = $(this).parent().parent().attr("id");
			     	//console.log("okk22 "+idf+" ddd "+id2)

			     	var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     	var c4= parseInt($("#"+id2+"3").val());
			     	var c5= parseInt($("#"+id2+"4").val());
			     	var c6= parseInt($("#"+id2+"5").val());
			     
			     	$("#"+id2+"6").html(c1+c2+c3+c4+c5+c6);
		     	}

		     	

		     
     	
     
		     
			}
		});
	};
})
//
//##########################################################################################
//############################################################################################
//modificatin structure autorisee
$("#button_age_elev_mod").click(function(){
	//$(".tabm6ans").keyup(function(){
     	var idf = this.id;
     	console.log(idf)
     	//var id2 = $(this).attr("id");
     	
     	
     //})
	var ecole = $("#select_ecole_mod").val();
	console.log(ecole)
	if (ecole!="") {
		$.ajax({
			url:"modification_age_des_eleves.php",
			type:"POST",
			data:{
				current_ecole:ecole
			},
			success :function(data){
				$(".result_mod").html(data);
		     	//ecouteur tableau maternelle modification structure org
			    for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabageeleve"+i).attr("id");
		     		//$(".tabageeleve").keyup(function(){
			     	//var idf = this.id;
			     	//var id2 = $(this).parent().parent().attr("id");
			     	//console.log("okk22 "+idf+" ddd "+id2)

			     	var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     
			     	$("#"+id2+"3").html(c1+c2+c3);
			     	//console.log("okk221 "+idf+" ddd "+id2+"6")
			     //})
		     	}
		     	for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabageelevepri"+i).attr("id");
		     		//$(".tabpsstruc").keyup(function(){
			     	//var idf = this.id;
			     	//var id2 = $(this).parent().parent().attr("id");
			     	//console.log("okk22 "+idf+" ddd "+id2)

			     	var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     	var c4= parseInt($("#"+id2+"3").val());
			     	var c5= parseInt($("#"+id2+"4").val());
			     	var c6= parseInt($("#"+id2+"5").val());
			     	var c7= parseInt($("#"+id2+"6").val());
			     	var c8= parseInt($("#"+id2+"7").val());
			     	var c9= parseInt($("#"+id2+"8").val());
			     	var c10= parseInt($("#"+id2+"9").val());
			     	var c11= parseInt($("#"+id2+"10").val());
			     	var c12= parseInt($("#"+id2+"11").val());
			     	var c13= parseInt($("#"+id2+"12").val());
			     	var c14= parseInt($("#"+id2+"13").val());
			     
			     	$("#"+id2+"14").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14);
     	//console.log("okk221 "+idf+" ddd "+id2+"6")
     //})
		     	}
		     	for(var i = 0;i<1;i++)
		     	{
		     		var id2 = $("#tabageelevesec"+i).attr("id");
		     		//$(".tabpsstruc").keyup(function(){
			     	//var idf = this.id;
			     	//var id2 = $(this).parent().parent().attr("id");
			     	//console.log("okk22 "+idf+" ddd "+id2)

			     	var c1=parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"2").val());
			     	var c4= parseInt($("#"+id2+"3").val());
			     	var c5= parseInt($("#"+id2+"4").val());
			     	var c6= parseInt($("#"+id2+"5").val());
			     	var c7= parseInt($("#"+id2+"6").val());
			     	var c8= parseInt($("#"+id2+"7").val());
			     	var c9= parseInt($("#"+id2+"8").val());
			     	var c10= parseInt($("#"+id2+"9").val());
			     	var c11= parseInt($("#"+id2+"10").val());
			     	var c12= parseInt($("#"+id2+"11").val());
			     	//var c13= parseInt($("#"+id2+"12").val());
			     	//var c14= parseInt($("#"+id2+"13").val());
			     
			     	$("#"+id2+"12").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12);
		     	}

		     	

		     
     	
     
		     
			}
		});
	};
})
//############################################################################################
//############################################################################################
//modifivation de redoublants
$("#modif_btn_redoublant").click(function(){
	var ecole = $("#select_ecole_mod").val();
	console.log(ecole)
	if (ecole!="") {
		$.ajax({
			url:"modification_redoublant_par_sexe.php",
			type:"POST",
			data:{
				current_ecole:ecole
			},
			success :function(data){
				$(".result_mod").html(data);
				for(var i=0;i<1;i++){
		     	var id2 = $("#tabm6ans"+i).attr("id");
		     	console.log(id2)
		     	
		     	var c1= parseInt($("#"+id2+"0").val());
		     	var c2= parseInt($("#"+id2+"1").val());
		     	var c3= parseInt($("#"+id2+"3").val());
		     	var c4= parseInt($("#"+id2+"4").val());
		     	var c5= parseInt($("#"+id2+"6").val());
		     	var c6= parseInt($("#"+id2+"7").val());

		     	$("#"+id2+"2").html(c1+c2);
		     	$("#"+id2+"5").html(c3+c4);
		     	$("#"+id2+"8").html(c5+c6);
				//total
		     	$("#"+id2+"9").html(c1+c3+c5);
		     	$("#"+id2+"10").html(c2+c4+c6);
		     	$("#"+id2+"11").html(c1+c2+c3+c4+c5+c6);
		     	//primai
		     }
		     for (var i = 0; i < 1; i++) {
		     	//$(".tabp6ans").keyup(function(){
		     	
		     	var id2 = $("#tabp6ans"+i).attr("id");
		     	console.log(id2)
		     	var c1= parseInt($("#"+id2+"0").val());
		     	var c2= parseInt($("#"+id2+"1").val());
		     	var c3= parseInt($("#"+id2+"3").val());
		     	var c4= parseInt($("#"+id2+"4").val());
		     	var c5= parseInt($("#"+id2+"6").val());
		     	var c6= parseInt($("#"+id2+"7").val());
		     	var c7= parseInt($("#"+id2+"9").val());
		     	var c8= parseInt($("#"+id2+"10").val());
		     	var c9= parseInt($("#"+id2+"12").val());
		     	var c10= parseInt($("#"+id2+"13").val());
		     	var c11= parseInt($("#"+id2+"15").val());
		     	var c12= parseInt($("#"+id2+"16").val());

		     	$("#"+id2+"2").html(c1+c2);
		     	$("#"+id2+"5").html(c3+c4);
		     	$("#"+id2+"8").html(c5+c6);
		     	$("#"+id2+"11").html(c7+c8);
		     	$("#"+id2+"14").html(c9+c10);
		     	$("#"+id2+"17").html(c11+c12);
				//total
		     	$("#"+id2+"18").html(c1+c3+c5+c7+c9+c11);
		     	$("#"+id2+"19").html(c2+c4+c6+c8+c10+c12);
		     	$("#"+id2+"20").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12);
     //})
		     	
		     }
			}
		});
	}

})
//modif_btn_mouvement
//############################################################################################
//############################################################################################
//modifivation de mouvement
$("#modif_btn_mouvement").click(function(){
	var ecole = $("#select_ecole_mod").val();
	console.log(ecole)
	if (ecole!="") {
		$.ajax({
			url:"modification_mouvement.php",
			type:"POST",
			data:{
				current_ecole:ecole
			},
			success :function(data){
				$(".result_mod").html(data);
				for(var i = 0;i<1;i++)
				{
					//$(".tabp_mouv").keyup(function(){
			     	//var idf = this.id;
			     	//var id2 = $(this).parent().parent().attr("id");
			     	//console.log("okk22 "+idf+" ddd "+id2)
			     	var id2 = $("#tabp_mouv"+i).attr("id");

			     	var c1= parseInt($("#"+id2+"0").val());
			     	var c2= parseInt($("#"+id2+"1").val());
			     	var c3= parseInt($("#"+id2+"3").val());
			     	var c4= parseInt($("#"+id2+"4").val());
			     	var c5= parseInt($("#"+id2+"6").val());
			     	var c6= parseInt($("#"+id2+"7").val());
			     	var c7= parseInt($("#"+id2+"9").val());
			     	var c8= parseInt($("#"+id2+"10").val());
			     	var c9= parseInt($("#"+id2+"12").val());
			     	var c10= parseInt($("#"+id2+"13").val());
			     	//var c11= parseInt($("#"+id2+"15").val());
			     	//var c12= parseInt($("#"+id2+"16").val());

			     	$("#"+id2+"2").html(c1+c2);
			     	$("#"+id2+"5").html(c3+c4);
			     	$("#"+id2+"8").html(c5+c6);
			     	$("#"+id2+"11").html(c7+c8);
			     	$("#"+id2+"14").html(c9+c10);
			     	//$("#"+id2+"17").html(c11+c12);
					//total
			     	$("#"+id2+"15").html(c1+c3+c5+c7+c9);
			     	$("#"+id2+"16").html(c2+c4+c6+c8+c10);
			     	$("#"+id2+"17").html(c1+c2+c3+c4+c5+c6+c7+c8+c9+c10);
			     //})
				}
				
		    
			}
		});
	}

})
//modification istitution
$('#my_form_inst_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'modification_institution.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_inst2").html(response);
                        	
                            //$('#result > pre').html(response);
                            //$('#result > pre').html(JSON.stringify(response, undefined, 4));
                        }
                    });
                });
//modification de diocese
$("#btn_select_diocese_mod").click(function(){
	var ecole_tab = $("#select_ecole_mod").val();
	var tab1 = ecole_tab.split("**");
				 var id= tab1[0];
				 var ecole=tab1[1];
	$("#nom_diocese_mod").val(ecole);
	$("#id_ecole").val(id);

})
$("#mod_diocese").click(function(){
	var nom_diocese = $("#nom_diocese_mod").val();
	var id_ecole  = $("#id_ecole").val();
	console.log(id_ecole)
	$.ajax({
		url:'modification_diocese.php',
		type:'post',
		data:{
			nom_diocese:nom_diocese,
			id:id_ecole
		},
		success : function(data){
			$(".affreslt_inst2").html(data);
		}
	});

})
$("#btn_select_coord_mod").click(function(){
	var ecole_tab = $("#select_ecole_mod").val();
	var tab1 = ecole_tab.split("**");
	var id= tab1[0];
	var diocese=tab1[1];
	var coordination_sp=tab1[2];
	var id_dio = tab1[3];
	

	
	$("#nom_coord_sp_mod").val(coordination_sp);
	$("#id_diocese").val(id_dio);
	$("#select_dio_mod").val(id_dio).change();
	
	$("#id_ecole").val(id);

})

$("#mod_coord_sp").click(function(){
	var nom_coord_sp = $("#nom_coord_sp_mod").val();
	var id_coord_Sp  = $("#id_ecole").val();
	var select_dio_mod  = $("#select_dio_mod").val();
	var id_diocese  = $("#id_diocese").val();

	console.log(nom_coord_sp)
	console.log(id_coord_Sp)
	console.log(select_dio_mod)
	//console.log(id_diocese)

	
	$.ajax({
		url:'modification_coord_sp.php',
		type:'post',
		data:{
			nom_coord_sp:nom_coord_sp,
			id_diocese:select_dio_mod,
			id_coord_Sp:id_coord_Sp
		},
		success : function(data){
			$(".affreslt_inst2").html(data);
		}
	});
})

//mod paroisse
$("#btn_select_paroisse").click(function(){
	var ecole_tab = $("#select_ecole").val();
	var tab1 = ecole_tab.split("**");
	var id = tab1[0];
	var nom_coord_sp =tab1[1];
	var nom_paroisse=tab1[2];
	var id_coord_sp = tab1[3];
	
	$("#select_coord_sp_mod").val(id_coord_sp).change();
	$("#nom_paroisse_mod").val(nom_paroisse);
	$("#id_paroisse").val(id);
	$("#id_coord_sp").val(nom_coord_sp);
	console.log(nom_paroisse)

})
//modification paroisse
$("#mod_paroisse").click(function(){
	var select_coord_sp_mod = $("#select_coord_sp_mod").val();
	var nom_paroisse_mod = $("#nom_paroisse_mod").val();
	var id_paroisse = $("#id_paroisse").val();
	var id_coord_sp = $("#id_coord_sp").val();
	console.log(select_coord_sp_mod)
	console.log(nom_paroisse_mod)
	console.log(id_paroisse)
	console.log(id_coord_sp)
	
	$.ajax({
		url:'modification_paroisse.php',
		type:'post',
		data:{
			nom_paroisse_mod:nom_paroisse_mod,
			id_paroisse:id_paroisse,
			id_coord_sp:select_coord_sp_mod
		},
		success : function(data){
			$(".affreslt_inst2").html(data);
		}
	});
})
//mod sous div
$("#btn_select_sous_div").click(function(){
	var ecole_tab = $("#select_ecole").val();
	var tab1 = ecole_tab.split("**");
	var id = tab1[0];
	var nom_coord_sp =tab1[1];
	var nom_paroisse=tab1[2];
	var id_coord_sp = tab1[3];
	
	$("#nom_paroisse_sd_mod").val(id_coord_sp).change();
	$("#nom_sous_div_mod").val(nom_paroisse);
	$("#id_sous_div").val(id);
	$("#id_paroisse").val(nom_coord_sp);
	console.log(ecole_tab)

})
//modification paroisse
$("#mod_sous_div").click(function(){
	var select_paroisse = $("#nom_paroisse_sd_mod").val();
	var nom_sous_div_mod = $("#nom_sous_div_mod").val();
	var id_sous_div = $("#id_sous_div").val();
	var id_paroisse = $("#id_paroisse").val();
	console.log(select_paroisse)
	console.log(nom_sous_div_mod)
	console.log(id_sous_div)
	console.log(id_paroisse)
	
	$.ajax({
		url:'modification_sous_div.php',
		type:'post',
		data:{
			nom_sous_div_mod:nom_sous_div_mod,
			id_sous_div:id_sous_div,
			id_paroisse:select_paroisse
		},
		success : function(data){
			$(".affreslt_inst2").html(data);
		}
	});
})
//modificato ecole
$("#btn_select_ecole").click(function(){
	var ecole_tab = $("#select_ecole_mod").val();
	var tab1 = ecole_tab.split("@@");
	console.log(ecole_tab)
	//$id@@$nom_d@@$nom_ecole@@$matricule@@$compte_bancaire@@$id_niveau@@
	//$arrete_agr@@$adress_exact@@$liste_option@@$nom_d
	var id = tab1[0];
	var id_d = tab1[1];
	var nom_ecole = tab1[2];
	var matricule = tab1[3];
	var compte_bancaire = tab1[4];
	var id_niveau = tab1[5];
	var arrete_agr = tab1[6];
	var adress_exact = tab1[7];
	var liste_option = tab1[8];
	var nom_d = tab1[9];
	var par = tab1[10];

	//select sous div
	//$id_sous_div**$nom_sous_div**$nom_paroisse2**
	var sd = id_d+"**"+nom_d;
	var sec = liste_option.split("**");
	console.log(sec)

	
	//this.date(this.getMoment()
/*Date i = getDate();
console.log(i.getDate())*/

	$("#id_ecole_mod").val(id);
	$("#nom_ecole_mod").val(nom_ecole);
	$("#matricule_mod").val(matricule);
	$("#arrete_agr_mod").val(arrete_agr);
	$("#adress_exct_mod").val(adress_exact);
	$("#c_banque_mod").val(compte_bancaire);
	$("#nom_sous_div_mod").val(sd).change();
	$("#nivo_ecole_mod").val(id_niveau).change();

	$("#section_ecole_mod").val(sec).change();
	
	console.log(par)

	/*nom_ecole_mod
	matricule_mod
	arrete_agr_mod
	adress_exct_mod
	c_banque_mod
	nom_sous_div_mod
	nivo_ecole_mod
	section_ecole_mod*/

	/*console.log(id)
	console.log(id_d)
	console.log(nom_ecole)
	console.log(matricule)
	console.log(compte_bancaire)
	console.log(id_niveau)
	console.log(arrete_agr)
	console.log(adress_exact)
	console.log(liste_option)
	console.log(nom_d)*/
})
//modification ecole
$("#mod_ecole_div").click(function(){

	var id_ecole_mod = $("#id_ecole_mod").val();
	var nom_ecole_mod = $("#nom_ecole_mod").val();
	var matricule_mod = $("#matricule_mod").val();
	var arrete_agr_mod = $("#arrete_agr_mod").val();
	var adress_exct_mod = $("#adress_exct_mod").val();
	var c_banque_mod = $("#c_banque_mod").val();
	var nom_sous_div_mod = $("#nom_sous_div_mod").val();
	var nivo_ecole_mod = $("#nivo_ecole_mod").val();
	var section_ecole_mod = $("#section_ecole_mod").val();
	console.log(nom_ecole_mod)
	console.log(matricule_mod)
	console.log(arrete_agr_mod)
	console.log(adress_exct_mod)
	console.log(c_banque_mod)
	console.log(nom_sous_div_mod)
	console.log(nivo_ecole_mod)
	console.log(section_ecole_mod)
	$.ajax({
		url:'modification_ecole.php',
		type:'post',
		data:{
			id_ecole_mod:id_ecole_mod,
			nom_ecole_mod:nom_ecole_mod,
			matricule_mod:matricule_mod,
			arrete_agr_mod:arrete_agr_mod,
			adress_exct_mod:adress_exct_mod,
			c_banque_mod:c_banque_mod,
			nom_sous_div_mod:nom_sous_div_mod,
			nivo_ecole_mod:nivo_ecole_mod,
			section_ecole_mod:section_ecole_mod

		},
		success : function(data){
			$(".affreslt_inst_mod2").html(data);
		}
	});
});
//modifivation ele age par sex
$('#ecolemat_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mod_effectif_age_Sex.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".aff_mod_tab").html(response);
                        	$("#ecolemat_form_table").css("display","none");
                        	$("#ecolemat_form_table").addClass("hidden");
                        	$("#ecolemat_form_button").css("display","none");
                        	$("#ecolemat_form_button").addClass("hidden");
                        	

                        }
                    });
                });
//modification age sex ecole primaire
$('#ecolepri_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mod_Eleve_classe_pri.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".aff_mod_tab").html(response);//ecolepri_form_button
                        	$("#ecolepri_form_table").css("display","none");
                        	$("#ecolepri_form_table").addClass("hidden");
                        	$("#ecolepri_form_button").css("display","none");
                        	$("#ecolepri_form_button").addClass("hidden");
                        	

                        }
                    });
                });
//modificatin age sex ecole co 
$('#ecoleco_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        //url: 'effectif_age_sex.php',
                        url: 'mod_Eleve_classe_co.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".aff_mod_tab_co").html(response);//ecolepri_form_button
                        	$("#ecoleco_form_table").css("display","none");
                        	$("#ecoleco_form_table").addClass("hidden");
                        	$("#ecoleco_form_button").css("display","none");
                        	$("#ecoleco_form_button").addClass("hidden");
                        	

                        }
                    });
                });
//modifcatioin age sex ecole secindaire cl
 $('#ecolecl_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mod_eleve_class_cl.php',
                        //url: 'Eleve_classe_pri_section_option_post.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".aff_mod_tab_cl").html(response);//ecolepri_form_button
                        	$("#ecolecl_form_table").css("display","none");
                        	$("#ecolecl_form_table").addClass("hidden");
                        	$("#ecolecl_form_button").css("display","none");
                        	$("#ecolecl_form_button").addClass("hidden");
                        	

                        }
                    });
                });
//##################################################################
//#################################################################
//structure aut modification
$('#structuremat_aut_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mod_structure_aut.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_str").html(response);//ecolepri_form_button
                        	$("#structuremat_form_table").css("display","none");
                        	$("#structuremat_form_table").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");
                        }
                    });
                });
//structure modification  primaire
 $('#stucturepri_aut_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'mod_structure_aut.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$("#structuremat_form").css("display","none");
                        	$("#structuremat_form").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#stucturepri_form_table").css("display","none");
                        	$("#stucturepri_form_table").addClass("hidden");
                        	$("#stucturepri_form_button").css("display","none");
                        	$("#stucturepri_form_button").addClass("hidden");

                        	$(".affreslt_str").html(response);//stucturemat_form_table
                        }
                    });
                });

//##################################################################
//#################################################################
//structure org modification
$('#structuremat_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mod_structure_org.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_str").html(response);//ecolepri_form_button
                        	$("#structuremat_form_table").css("display","none");
                        	$("#structuremat_form_table").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");
                        }
                    });
                });
//structure modification  primaire
 $('#stucturepri_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'mod_structure_org.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$("#structuremat_form").css("display","none");
                        	$("#structuremat_form").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#stucturepri_form_table").css("display","none");
                        	$("#stucturepri_form_table").addClass("hidden");
                        	$("#stucturepri_form_button").css("display","none");
                        	$("#stucturepri_form_button").addClass("hidden");

                        	$(".affreslt_str").html(response);//stucturemat_form_table
                        }
                    });
                });
//#####################################################################################
//#####################################################################################
//modification age des elves
// Age des eleves validqtion  maternelle
     $('#ages_eleves_mat_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'mod_age_des_eleves.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	//$("#ages_eleves_mat_form").css("display","none");
                        	//$("#ages_eleves_mat_form").addClass("hidden");
                        	//$("#structuremat_form_button").css("display","none");
                        	//$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#structuremat_form_table").css("display","none");
                        	$("#structuremat_form_table").addClass("hidden");
                        	$("#structuremat_form_button").css("display","none");
                        	$("#structuremat_form_button").addClass("hidden");

                        	$(".affreslt_age").html(response);//stucturemat_form_table
                        }
                    });
                });

// Age des eleves validqtion  primaire
     $('#ages_eleves_pri_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'mod_age_des_eleves.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	//$("#ages_eleves_mat_form").css("display","none");
                        	//$("#ages_eleves_mat_form").addClass("hidden");
                        	//$("#structuremat_form_button").css("display","none");
                        	//$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#stucturepri_form_table").css("display","none");
                        	$("#stucturepri_form_table").addClass("hidden");
                        	$("#stucturepri_form_button").css("display","none");
                        	$("#stucturepri_form_button").addClass("hidden");

                        	$(".affreslt_age").html(response);//stucturemat_form_table
                        }
                    });
                });

// Age des eleves validqtion  secondaire
     $('#ages_eleves_sec_form_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        url: 'mod_age_des_eleves.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	//$("#ages_eleves_mat_form").css("display","none");
                        	//$("#ages_eleves_mat_form").addClass("hidden");
                        	//$("#structuremat_form_button").css("display","none");
                        	//$("#structuremat_form_button").addClass("hidden");
                        	//stucturepri_form_table
                        	$("#stucturesec_form_table").css("display","none");
                        	$("#stucturesec_form_table").addClass("hidden");
                        	$("#stucturesec_form_button").css("display","none");
                        	$("#stucturesec_form_button").addClass("hidden");

                        	$(".affreslt_age").html(response);//stucturemat_form_table
                        }
                    });
                });
//##############################################################################
//##############################################################################
//modification redoubalt primaire et seconadaire

     $('#ecolemat_form_red_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mod_redoublant_par_sex.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_red").html(response);
                        	$("#ecolemat_form_table").css("display","none");
                        	$("#ecolemat_form_table").addClass("hidden");
                        	$("#ecolemat_form_button").css("display","none");
                        	$("#ecolemat_form_button").addClass("hidden");
                        	

                        }
                    });
                });

//ecole primaire validation redoublant modification
     $('#ecolepri_form_red_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mod_redoublant_par_sex.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_red").html(response);
                        	$("#ecolepri_form_table").css("display","none");
                        	$("#ecolepri_form_table").addClass("hidden");
                        	$("#ecolepri_form_button").css("display","none");
                        	$("#ecolepri_form_button").addClass("hidden");
                        	

                        }
                    });
                });
//##################################################################################33
//##############################################################################3
//ecole primaire mat et seconadaire validation redoublant modification
     $('#ecolepri_form_mouv_mod').on('submit', function (e) {
		//$("#Enregistrer_inst").click(function(){
                    // On empêche le navigateur de soumettre le formulaire
                    e.preventDefault();

                    var $form = $(this);
                    var formdata = (window.FormData) ? new FormData($form[0]) : null;
                    var data = (formdata !== null) ? formdata : $form.serialize();

                    $.ajax({
                        //url: $form.attr('action'),
                        //type: $form.attr('method'),
                        url: 'mod_mouvement_eleves.php',
						type: 'POST',
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        //dataType: 'json', // selon le retour attendu
                        data: data,
                        success: function (response) {
                        	$(".affreslt_mouv").html(response);
                        	$("#ecolepri_form_table").css("display","none");
                        	$("#ecolepri_form_table").addClass("hidden");
                        	$("#ecolepri_form_button").css("display","none");
                        	$("#ecolepri_form_button").addClass("hidden");
                        	

                        }
                    });
                });

//tri par paroisse diocese et coordination sous prinvinv=cilawe
$("#tri_sd").click(function(){
	console.log("tri_sd")
	//$(".tableau_tri_diocese").css("display","none");
	$("#tri_sd_gly").addClass("glyphicon-ok");
	$("#tri_p_gly").removeClass("glyphicon-ok");
	$("#tri_csp_gly").removeClass("glyphicon-ok");
	$("#tri_d_gly").removeClass("glyphicon-ok");

	//$("#tableau_tri_sous_div").css("display","block");
	$(".tableau_tri_sous_div").removeClass("hidden");
	$(".tableau_tri_sous_div").css("display","block");
	$(".tableau_tri_diocese").css("display","none");
	$(".tableau_tri_paroisse").css("display","none");
	$(".tableau_tri_coord_sp").css("display","none");



	
});
$("#tri_p").click(function(){
	console.log("tri_p")
	$("#tri_p_gly").addClass("glyphicon-ok");
	$("#tri_sd_gly").removeClass("glyphicon-ok");
	//$("#tri_p_gly").removeClass("glyphicon-ok");
	$("#tri_csp_gly").removeClass("glyphicon-ok");
	$("#tri_d_gly").removeClass("glyphicon-ok");

	$(".tableau_tri_sous_div").css("display","none");
	$(".tableau_tri_diocese").css("display","none");

	
	$(".tableau_tri_coord_sp").css("display","none");
	
	$(".tableau_tri_paroisse").css("display","block");
	//$(".tableau_tri_paroisse").addClass("zoomOut");

	/*$(".msgApology").addClass("fadeOutUpBig");
		$(".msgApology").removeClass("bounceIn");*/
	
});
$("#tri_csp").click(function(){
	console.log("tri_csp")
	$("#tri_csp_gly").addClass("glyphicon-ok");
	$("#tri_sd_gly").removeClass("glyphicon-ok");
	$("#tri_p_gly").removeClass("glyphicon-ok");
	//$("#tri_csp_gly").removeClass("glyphicon-ok");
	$("#tri_d_gly").removeClass("glyphicon-ok");

	$(".tableau_tri_coord_sp").css("display","block");
	$(".tableau_tri_sous_div").css("display","none");
	$(".tableau_tri_diocese").css("display","none");
	$(".tableau_tri_paroisse").css("display","none");
	
	//$(".tableau_tri_coord_sp").css("display","block");
	//tableau_tri_coord_sp
	
});
$("#tri_d").click(function(){
	console.log("tri_d")
	$("#tri_d_gly").addClass("glyphicon-ok");
	$("#tri_sd_gly").removeClass("glyphicon-ok");
	$("#tri_p_gly").removeClass("glyphicon-ok");
	$("#tri_csp_gly").removeClass("glyphicon-ok");
	//$("#tri_d_gly").removeClass("glyphicon-ok");

	$(".tableau_tri_diocese").removeClass("hidden");
	$(".tableau_tri_diocese").css("display","block");
	$(".tableau_tri_sous_div").css("display","none");
	$(".tableau_tri_paroisse").css("display","none");
	$(".tableau_tri_coord_sp").css("display","none");

	
});
$("#tri_paroisse").click(function(){
	$(".synthese_par_diocese").css("display","none");
	$(".synthese_par_paroisse").css("display","block");

	$("#tri_paroisse_gly").addClass("glyphicon-ok");
	$("#tri_diocese_gly").removeClass("glyphicon-ok");
	//console.log("paroisse")
}) 
$("#tri_diocese").click(function(){
	$(".synthese_par_diocese").css("display","block");
	$(".synthese_par_paroisse").css("display","none");

	$("#tri_paroisse_gly").removeClass("glyphicon-ok");
	$("#tri_diocese_gly").addClass("glyphicon-ok");
	//console.log("diocese")

})  

//MISE EN PLACE DU PROSNNEL
	//enregistrer effectif
     $("#select_ecole_btn_mise_en_place").click(function(){
     	var ecole_info = $("#select_ecole").val();
     	
        console.log(ecole_info)
        var nom_ecole="";
        var nivo_ecole="";
        var p_ecole="";
        var d_ecole="";
        var ecole_info_tab =ecole_info.split("**");
        nom_ecole=ecole_info_tab[0];
        nivo_ecole=ecole_info_tab[1];
        p_ecole=ecole_info_tab[2];
        d_ecole=ecole_info_tab[3];
        console.log(nom_ecole+" e")

        $("#current_ecole").val(nom_ecole);
        $("#current_ecole2").val(nom_ecole);
        $("#current_ecoleco").val(nom_ecole);
        //$("#current_ecolecl").val(nom_ecole);

        //College mwanga**Maternelle**bienheureuse**Beni
        $("#niveau_eff").html("(ECOLE "+nivo_ecole+")");
        $("#nom_ecole_eff").html(" "+nom_ecole);
        $("#paroisse_eff").html("(Sous division de: "+p_ecole+", ");
        $("#diocese_eff").html("Paroisse: "+d_ecole+")");
     	//console.log(ecole)
     	$.ajax({
     			url :'mise_en_place.php',
     			type:'post',
     			data : {
     				n : nom_ecole
     			},
     			success : function(data){
					$("#tableau_cl").html(data);

					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
				}
     		});
     });

//select_ecole_btn_personnel_p_sex
 $("#select_ecole_btn_personnel_p_sex").click(function(){
     	var ecole_info = $("#select_ecole").val();
     	
        console.log(ecole_info)
        
     	//console.log(ecole)
     	$.ajax({
     			url :'personnel_par_sex.php',
     			type:'post',
     			data : {
     				n : ecole_info
     			},
     			success : function(data){
					$("#tableau_cl").html(data);

					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
				}
     		});
     });

 //print
 $(".print_tab").click(function(){
		//var idf = this.id;
		console.log("ok")

        $(".entete").removeClass("hidden");
		$.print(".tableau_scroll");
		$(".entete").addClass("hidden");
	})

//initialiser mot de passse
$(".btn-initializer").click(function(){
	var id_user = $("#section_user_ini").val();
	console.log(id_user)
	$.ajax({
		url :'initialiser_pswd.php',
     	type:'post',
     	data : {
     		n : id_user
     	},
     	success : function(data){
			$("#result_initialiser").html(data);

					//$("#modal_body_inst").css("display","none");
					//$("#Enregistrer_inst").css("opacity",0);
					
		}
	});
})

//modification ppersonnel
 //$('#my_form_add_personnel_btn').on('submit', function (e) {
	$("#my_form_add_personnel_btn1").click(function(){
        // On empêche le navigateur de soumettre le formulaire
        //e.preventDefault();

        var date_nais_p = $('#date_nais_p').val();
        var date_eng_p = $('#date_eng_p').val();
        var date_dip = $('#date_dip').val();
        var date_pro_p = $('#date_pro_p').val();
        var annee_pre_p = "0";
        //$.trim(nom_inst).length > 0 || $.trim(date_pro_p).length > 0
        if ($.trim(date_nais_p).length > 0 && $.trim(date_eng_p).length > 0 && $.trim(date_dip).length > 0) {
        	date_nais_p = $('#date_nais_p').val();
			date_eng_p = $('#date_eng_p').val();
			date_dip = $('#date_dip').val();
			

			tab_date_nais_p = date_nais_p.split("/") ;
			tab_date_eng_p = date_eng_p.split("/") ;
			tab_date_dip = date_dip.split("/") ;
			

			date_nais_p = 	tab_date_nais_p[2]+"-"+tab_date_nais_p[1]+"-"+tab_date_nais_p[0];		
			date_eng_p 	= 	tab_date_eng_p[2]+"-"+tab_date_eng_p[1]+"-"+tab_date_eng_p[0];		
			date_dip 	= 	tab_date_dip[2]+"-"+tab_date_dip[1]+"-"+tab_date_dip[0];		
			

			var d = new Date();
			var year = d.getFullYear();
			
			//var ap = 
			//annee_pre_p = $('#annee_pre_p').val();
			annee_pre_p_found = year - tab_date_eng_p[2];
			annee_pre_p =annee_pre_p_found+"";
			console.log(" => "+annee_pre_p)

        }

        else {
        	date_nais_p = "";
			date_eng_p = "";
			date_dip = "";
			
        }
        if($.trim(date_pro_p).length > 0)
        {
        	date_pro_p = $('#date_pro_p').val();
			tab_date_pro_p = date_pro_p.split("/") ;
			date_pro_p 	= 	tab_date_pro_p[2]+"-"+tab_date_pro_p[1]+"-"+tab_date_pro_p[0];
        }
        else {
        	date_pro_p = "";
        }
        var matricule_p = $('#matricule_p').val();
		var nom_p = $('#nom_p').val();
		
		var sex_p = $('#sex_p').val();
		
		var nat_p = $('#nat_p').val();
		var class_p = $('#class_p').val();
		//class_p
		var sifa_p = $('#sifa_p').val();
		var conf_p = $('#conf_p').val();
		
		var qualdip_p = $('#qualdip_p').val();
		
		var grade_anc_p = "";
		var grade_act_p = "";

		var grade_anc_p2 = $('#select_grade_anc2').val();
		var grade_anc_p1 = $('#select_grade_anc1').val();
		var grade_act_p1 = $('#select_grade_act1').val();
		var grade_act_p2 = $('#select_grade_act2').val();
		
		if (grade_act_p1 != "" && grade_act_p2 != "" && grade_anc_p1 != "" && grade_anc_p2 != "") {
			grade_anc_p = grade_anc_p1+""+grade_anc_p2;
			grade_act_p = grade_act_p1+""+grade_act_p2;
		}
		//var annee_pre_p = $('#annee_pre_p').val();
		var fonct_p = $('#fonct_p').val();
		var select_ecole_affecter = $("#select_ecole_affecter").val();


		/*console.log(grade_anc_p)
		console.log(grade_act_p)*/

		/*console.log(date_nais_p)
		console.log(date_dip)
		console.log(date_pro_p)
		console.log(date_eng_p)*/
		console.log(matricule_p)
		console.log(nom_p)
		console.log(date_nais_p)
		console.log(sex_p)
		console.log(date_eng_p)
		console.log(nat_p)
		console.log(sifa_p)
		console.log(conf_p)
		console.log(date_dip)
		console.log(qualdip_p)
		console.log(date_pro_p)
		console.log(grade_anc_p)
		console.log(grade_act_p)
		console.log(annee_pre_p)
		console.log(fonct_p)
		console.log(select_ecole_affecter)
		$.ajax({
            
            url: 'gestion_personnel.php',
			type: 'POST',        
            data: {
            	matricule_p:matricule_p,
				nom_p:nom_p,
				date_nais_p:date_nais_p,
				sex_p:sex_p,
				date_eng_p:date_eng_p,
				nat_p:nat_p,
				sifa_p:sifa_p,
				conf_p:conf_p,
				date_dip:date_dip,
				qualdip_p:qualdip_p,
				date_pro_p:date_pro_p,
				grade_anc_p:grade_anc_p,
				grade_act_p:grade_act_p,
				annee_pre_p:annee_pre_p,
				fonct_p:fonct_p,
				select_ecole_affecter:select_ecole_affecter,
				class_p:class_p

            },
            success: function (data) {
                 //affreslt_inst
     			$(".affreslt_inst").html(data);

            }
        });

    });

//fin 
})
         
	
/*

var obj = {
  "flammable": "inflammable",
  "duh": "no duh"
};
$.each( obj, function( key, value ) {
  alert( key + ": " + value );
});



$.each( [ "a", "b", "c" ], function( i, l ){
  alert( "Index #" + i + ": " + l );
});
Iterates over the properties in an object, accessing both the current item and its key.



$.each({ name: "John", lang: "JS" }, function( k, v ) {
  alert( "Key: " + k + ", Value: " + v );
});*/
       



        
       

        