<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $iddd = $_POST["current_ecole"];
      
      $id_last_insert = query("SELECT * FROM ecole2 WHERE id = ?", $_POST["current_ecole"]);
      $id_last = $id_last_insert[0]["id"]; 
      //Primaire  Secondaire
      if ($id_last_insert[0]["id_niveau"] == "Maternelle" || $id_last_insert[0]["id_niveau"] == "Primaire" || $id_last_insert[0]["id_niveau"] == "Secondaire") {
         //success("1bree ".$id_last_insert[0]["nom_ecole"]);
        $class_mat1 = query("SELECT * FROM nouveau_inscrit WHERE belongs_to = ? ",$id_last);
       

        $class_promu1 = query("SELECT * FROM promus WHERE belongs_to = ?",$id_last);
        
        $class_transferer1 = query("SELECT * FROM transfere WHERE belongs_to = ?",$id_last);

        $class_abandon1 = query("SELECT * FROM abandon WHERE belongs_to = ?",$id_last);
       
        $class_certifie1 = query("SELECT * FROM certifie_diplome WHERE belongs_to = ?",$id_last);
        
        //var_dump($class_mat);
        $tabmat1;
        //$tabmat2[] = "";
        //$tabmat3[] = "";
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["effectif_F"];
          $tabmat1[] = $value["effectif_G"];
         
        }
        foreach ($class_promu1 as  $value) {

          $tabmat1[] = $value["effectif_F"];
          $tabmat1[] = $value["effectif_G"];
        }
        foreach ($class_transferer1 as  $value) {

          $tabmat1[] = $value["effectif_F"];
          $tabmat1[] = $value["effectif_G"];
        }
        foreach ($class_abandon1 as  $value) {

          $tabmat1[] = $value["effectif_F"];
          $tabmat1[] = $value["effectif_G"];
        }
        foreach ($class_certifie1 as  $value) {

          $tabmat1[] = $value["effectif_F"];
          $tabmat1[] = $value["effectif_G"];
        }
        //var_dump($tabmat1);

       

        echo '<form id="ecolepri_form_mouv_mod"  class="row p-10" >
                       <table id="ecolepri_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> SEXE/CLASSE </th>
                                <th colspan="3">NOUV INSCRIT</th>
                                <th colspan="3">PROMUS </th>
                                <th colspan="3">TRANSF</th>
                                <th colspan="3">ABANDONS</th>
                                <th colspan="3">CERTIF/DIPL</th>
                                
                                <th colspan="3">Tot</th>              
                            </tr>
                             <tr class="warning"> 
                                
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
                            <tbody class="naledi_yellow">';
        $esp = 0;
            
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabp_mouv$i'>";
     for ($j=0; $j < 18; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Effectifs</td>";
        }
        
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6 ||$j==7 ||$j==9|| $j==10|| $j==12||$j==13 ) {
     echo "<td><input value='$tabmat1[$esp]' autocomplete='false' id='tabp_mouv$i$j' type='text' class='form-control tabp_mouv tabp_mouvfg$i$j' name='tabp_mouvfg$i$j'></td>";
      $esp++;
    }
    else echo "<td id='tabp_mouv$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo '</tbody>
    </table>
    <button id="ecolepri_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                            <span class="affreslt_mouv"></span>';
                          echo "  <input value='$iddd' type='hidden' name='current_ecole' id='current_ecole1'>
                   </form>";

      }
      
      
      


      $list_option =  $id_last_insert[0]["liste_option"];
     
        //apologize("Une erreur est survenue");
        //.swal2-icon.swal2-success .fix
      echo '<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>';
      echo '<script src="js/load.js"></script>';
    }
    else
    {
	     render("acceuil_admin.php", ["title" => "Administration"]);
	}
?>
