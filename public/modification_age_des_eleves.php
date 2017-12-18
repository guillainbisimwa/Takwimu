<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $iddd =  $_POST["current_ecole"];
      
      $id_last_insert = query("SELECT * FROM ecole2 WHERE id = ?", $_POST["current_ecole"]);
      $id_last = $id_last_insert[0]["id"]; 
      //Primaire  Secondaire
      if ($id_last_insert[0]["id_niveau"] == "Maternelle") {
        //success("1bree ".$id_last_insert[0]["nom_ecole"]);

       $class_mat1 = query("SELECT * FROM `age_eleves` WHERE belongs_to = ? ",$id_last);
         
        $tabmat1;
        
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["5ans"];
          $tabmat1[] = $value["6ans"];
          $tabmat1[] = $value["7ans"];
         
        }
       
        echo '<form id="ages_eleves_mat_form_mod"  class="row p-10">

                       <table id="structuremat_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered structuremat_form_table pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                
                                <th >5 ans </th>
                                <th >6 ans </th>
                                <th >7 ans</th>
                                <th >Tot</th>              
                            </tr>
                             
                            <tbody class="naledi_yellow">';
        
            $esp = 0;
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabageeleve$i'>";
     for ($j=0; $j < 4; $j++) {
       /* if ($i == 0 && $j==0) {
           echo "<td>Structures autorisées</td>";
        }*/
        
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==2  ) {
     echo "<td><input value='$tabmat1[$esp]' autocomplete='false' id='tabageeleve$i$j' type='text' class='form-control tabageeleve tabageeleve$i$j' name='tabageeleve$i$j'></td>";
    $esp++;
    }
    else echo "<td id='tabageeleve$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo'</tbody>
    </table>
    <button id="structuremat_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit"  >MODIFIER</button>
                            <span class="affreslt_age"></span>';
                    echo "<input value='$iddd' type='hidden' name='current_ecole_structure2' id='current_ecole_structure'>
                   </form>";

       

        

      }
      if ($id_last_insert[0]["id_niveau"] == "Primaire") {
        //success("2bree ".$id_last_insert[0]["nom_ecole"]);
        $class_mat1 = query("SELECT * FROM `age_eleves` WHERE belongs_to = ? ",$id_last);
         
        $tabmat1;
        
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["5ans"];
          $tabmat1[] = $value["6ans"];
          $tabmat1[] = $value["7ans"];
          $tabmat1[] = $value["8ans"];
          $tabmat1[] = $value["9ans"];
          $tabmat1[] = $value["10ans"];
          $tabmat1[] = $value["11ans"];
          $tabmat1[] = $value["12ans"];
          $tabmat1[] = $value["13ans"];
          $tabmat1[] = $value["14ans"];
          $tabmat1[] = $value["15ans"];
          $tabmat1[] = $value["16ans"];
          $tabmat1[] = $value["17ans"];
          $tabmat1[] = $value["18ans"];
         
        }
        echo '<form id="ages_eleves_pri_form_mod"  class="row p-10" >
                       <table id="stucturepri_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                               
                                <th >5 ans </th>
                                <th >6 ans </th>
                                <th >7 ans </th>
                                <th >8 ans</th>
                                <th >9 ans</th>
                                <th >10 ans</th>
                                <th >11 ans</th>
                                <th >12 ans</th>
                                <th >13 ans</th>
                                <th >14 ans</th>
                                <th >15 ans</th>
                                <th >16 ans</th>
                                <th >17 ans</th>
                                <th >18 ans</th>
                                <th >Tot</th>              
                            </tr>
                            
                            <tbody class="naledi_yellow">';
$esp = 0;
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabageelevepri$i'>";
     for ($j=0; $j < 15; $j++) {
        /*if ($i == 0 && $j==0) {
           echo "<td>Structures autorisées</td>";
        }*/
        
       
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==2 || $j==3 || $j==4 ||$j==5 ||$j==6 ||$j==7 ||$j==8 ||$j==9 ||$j==10 ||$j==11 ||$j==12 ||$j==13 ) {
     echo "<td><input  value='$tabmat1[$esp]'autocomplete='false' id='tabageelevepri$i$j' type='text' class='form-control tabageelevepri tabageelevepri$i$j' name='tabageelevepri$i$j'></td>";
    $esp++;
    }
    else echo "<td id='tabageelevepri$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo '</tbody>
    </table>
    <button id="stucturepri_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                            <span class="affreslt_age"></span>';
                    echo "<input value='$iddd' type='hidden' name='current_ecole_structure2' id='current_ecole_structure2'>
                   </form>";
        
      }
      if ($id_last_insert[0]["id_niveau"] == "Secondaire") {
        //success("3bree ".$id_last_insert[0]["nom_ecole"]);
        $class_mat1 = query("SELECT * FROM `age_eleves` WHERE belongs_to = ? ",$id_last);
         
        $tabmat1;
        
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["10ans"];
          $tabmat1[] = $value["11ans"];
          $tabmat1[] = $value["12ans"];
          $tabmat1[] = $value["13ans"];
          $tabmat1[] = $value["14ans"];
          $tabmat1[] = $value["15ans"];
          $tabmat1[] = $value["16ans"];
          $tabmat1[] = $value["17ans"];
          $tabmat1[] = $value["18ans"];
          $tabmat1[] = $value["19ans"];
          $tabmat1[] = $value["20ans"];
          $tabmat1[] = $value["20plusans"];
         
        }
        echo ' <form id="ages_eleves_sec_form_mod"  class="row p-10" >
                       <table id="stucturesec_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th >10 ans </th>
                                <th >11 ans </th>
                                <th >12 ans </th>
                                <th >13 ans</th>
                                <th >14 ans</th>
                                <th >15 ans</th>
                                <th >16 ans</th>
                                <th >17 ans</th>
                                <th >18 ans</th>
                                <th >19 ans</th>
                                <th >20 ans</th>
                                <th >plus 20 ans</th>
                                <th >Tot</th>              
                            </tr>
                            
                            <tbody class="naledi_yellow">';        
        $esp = 0;
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabageelevesec$i'>";
     for ($j=0; $j < 13; $j++) {
        /*if ($i == 0 && $j==0) {
           echo "<td>Structures autorisées</td>";
        }*/
        
       
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==2 || $j==3 || $j==4 ||$j==5 ||$j==6 ||$j==7 ||$j==8 ||$j==9 ||$j==10||$j==11 ) {
     echo "<td><input  value='$tabmat1[$esp]' autocomplete='false' id='tabageelevesec$i$j' type='text' class='form-control tabageelevesec tabageelevesec$i$j' name='tabageelevesec$i$j'></td>";
    $esp++;
    }
    else echo "<td id='tabageelevesec$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo '</tbody>
    </table>
    <button id="stucturesec_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                            <span class="affreslt_age"></span>';
                    echo "<input value='$iddd' type='hidden' name='current_ecole_structure2' id='current_ecole_structure3'>
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
