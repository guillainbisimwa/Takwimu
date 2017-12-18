<?php

	echo "<script src='vendors/bower_components/jquery/dist/jquery.min.js'></script>";
  echo '<script src="js/load.js"></script>';

    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $nom_ecole = $_POST["n"];
      //echo $nom_ecole;
      $table_ecole = query("SELECT * FROM ecole2  WHERE nom_ecole = ?",$_POST["n"]);
      $id_ecole = $table_ecole[0]["id"];
      $liste_option = $table_ecole[0]["liste_option"];
      //!empty($_POST["option_org"])
      //@$tab_class = split("[**]+", $_POST["class_org"]);
      @$tab_option = split("[**]+", $liste_option);
      $ii = 1;
      echo '<form id="ecolecl_form" action="Eleve_classe_co.php" method="POST" class="row p-10">';
       $limite_ligne = 1;
       //echo '<h3 class="p-20 center_naledi">Section: '.$nom_section.', Option: '.$value.'</h3>';

                       echo '<table id="ecolecl_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> AGE/SEXE </th>
                                <th colspan="3">3ème année  </th>
                                <th colspan="3">4ème année </th>
                                <th colspan="3">5ème année </th>
                                <th colspan="3">6ème année </th>
                             
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

                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                                
                                <th>F</th>
                                <th>G</th>
                                <th>FG</th>
                            </tr>
                            <tbody class="naledi_yellow">';
                            $i = 0;
      foreach ($tab_option as $value) {
        if ($value != "") {
        //echo $ii ." ".$value." <br>";
        $table_option = query("SELECT * FROM option WHERE nom_option = ?", $value);
        $id_option = $table_option[0]["belongs_to"];

        $table_section = query("SELECT * FROM section WHERE id = ?", $id_option);
        $nom_section = $table_section[0]["nom_section"];
        
             
                //for ($i=0; $i < 3; $i++) {
                 

echo "<tr id='tabcl6ans$i'>";
     for ($j=0; $j <15; $j++) {
        if ($i == $limite_ligne && $j==0) {
            echo "<td>$value  </td>";
            //$limite_ligne =1;
        }
        
    //addition de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6  || $j==7 || $j==9 || $j==10 ) {
     echo "<td><input autocomplete='false' id='tabcl6ans$i$j' type='text' class='form-control tabcl6ans tabcl6ans$i$j' name='tabcl6ans$i$j'></td>";
    }
    else echo "<td id='tabcl6ans$i$j'>0</td>";

    }

echo "</tr>"; 
                       
           // }
            
      $limite_ligne = 1 + $limite_ligne;
                    }
                    $i++;
                  }
                   echo ' </tbody>
    </table>';
                  echo ' <button id="ecolecl_form_button" class="btn btn-info col-sm-12 waves-effect btn-lg" type="submit"  >ENREGISTRER</button>
                            <span class="affreslt_ecole"></span>
                              <input type="hidden" value="'.$nom_ecole.'" name="current_ecole" id="current_ecolecl" >
                   </form>';
    }
    else
    {
        /*$table_section = query("SELECT * FROM section WHERE 1");
        $table_paroisse = query("SELECT * FROM paroisse WHERE 1");
         

        render("ecole_templates.php", ["title" => "Section et option","table_paroisse"=>$table_paroisse,"table_section" => $table_section]);
	*/
      $table_ecole2 = query("SELECT ecole2.*, sous_div.nom_sous_div, paroisse2.nom_paroisse, coordination_sp.nom_coord_sp, diocese.nom_diocese FROM ecole2, sous_div, paroisse2, coordination_sp, diocese WHERE ecole2.belongs_to = sous_div.id AND sous_div.belongs_to = paroisse2.id AND paroisse2.belongs_to = coordination_sp.id AND coordination_sp.belongs_to = diocese.id");
      
        //$table_sous_div = query("SELECT * FROM sous_div");
        $table_sous_div = query("SELECT sous_div.id, sous_div.nom_sous_div,paroisse2.nom_paroisse as n_p,coordination_sp.nom_coord_sp as c_sp FROM `sous_div`,paroisse2,coordination_sp WHERE sous_div.belongs_to = paroisse2.id and paroisse2.belongs_to = coordination_sp.id");

        $table_paroisse = query("SELECT * FROM paroisse2");
        $table_section = query("SELECT * FROM section WHERE 1");
       
        render("ecole_templates.php", ["title" => "Ecole","table_section"=>$table_section, "table_paroisse"=>$table_paroisse, "table_sous_div"=>$table_sous_div,"table_ecole2"=>$table_ecole2]);
  }
   
 ?>