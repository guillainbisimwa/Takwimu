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
        $class_mat1 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "1");
        $class_mat2 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "2");
        $class_mat3 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "3");
        //var_dump($class_mat);
        $tabmat1;
        //$tabmat2[] = "";
        //$tabmat3[] = "";
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["effectif_F"];
          $tabmat1[] = $value["effectif_G"];
         
        }
        foreach ($class_mat2 as  $value) {

          $tabmat1[] = $value["effectif_F"];
          $tabmat1[] = $value["effectif_G"];
        }
        foreach ($class_mat3 as  $value) {

          $tabmat1[] = $value["effectif_F"];
          $tabmat1[] = $value["effectif_G"];
        }
        //var_dump($tabmat1);

       

        echo '<form id="ecolemat_form_red_mod" class="row p-10" style="display: none1;">

                       <table id="ecolemat_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> SEXE/CLASSE </th>
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
                            <tbody class="naledi_yellow">';
        $esp = 0;
            
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabm6ans$i'>";
     for ($j=0; $j < 12; $j++) {

        if ($i == 0 && $j==0) {
           echo "<td>REDOUBLANTS</td>";
        }
        /*else if ($i == 1 && $j==0) {
            echo "<td> 6 ans</td>";
        } 
         else if ($i == 2 && $j==0) {
            echo "<td>7 à 10 ans</td>";
        } */
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6 ||$j==7 ) {
     echo "<td><input value='$tabmat1[$esp]' autocomplete='false' id='tabm6ans$i$j' type='text' class='form-control tabm6ans tabm6ansfg$i$j' name='tabm6ansfg$i$j'></td>";
       $esp++;
    }
    else echo "<td id='tabm6ans$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo '</tbody>
    </table>
    <button id="ecolemat_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit"  >MODIFIER</button>
                            <span class="affreslt_red"></span>';
                      echo " <input value='$iddd' type='hidden' name='current_ecole' id='current_ecole'>
                   </form>";

      }
      if ($id_last_insert[0]["id_niveau"] == "Primaire") {
         //success("2bree ".$id_last_insert[0]["nom_ecole"]);
        $class_pri1 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "1");
        $class_pri2 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "2");
        $class_pri3 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "3");
        $class_pri4 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "4");
        $class_pri5 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "5");
        $class_pri6 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "6");
        //var_dump($class_mat);
        $tabpri1;

        foreach ($class_pri1 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
         
        }
        foreach ($class_pri2 as  $value) {
          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
         
        }
        foreach ($class_pri3 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
        }
        foreach ($class_pri4 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
          
        }
        foreach ($class_pri5 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
        }
        foreach ($class_pri6 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
        }
        echo '<form id="ecolepri_form_red_mod"  class="row p-10 " >
                       <table id="ecolepri_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed tab_with_6_p">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> SEXE/CLASSE </th>
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
                            <tbody class="naledi_yellow">';
                            $esp = 0;
         
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabp6ans$i'>";
     for ($j=0; $j < 21; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>REDOUBLANTS</td>";
        }
       
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6 ||$j==7 ||$j==9|| $j==10|| $j==12||$j==13||$j==15||$j==16 ) {
     echo "<td><input value='$tabpri1[$esp]' autocomplete='false' id='tabp6ans$i$j' type='text' class='form-control tabp6ans tabp6ansfg$i$j' name='tabp6ansfg$i$j'></td>";
      $esp++;
    }
    else echo "<td id='tabp6ans$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo'</tbody>
    </table>
    <button id="ecolepri_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                             <span class="affreslt_red"></span>';
                      echo " <input value='$iddd' type='hidden' name='current_ecole' id='current_ecole1'>
                   </form>";
      }
      if ($id_last_insert[0]["id_niveau"] == "Secondaire") {
         //success("3bree ".$id_last_insert[0]["nom_ecole"]);
        $class_pri1 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "1");
        $class_pri2 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "2");
        $class_pri3 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "3");
        $class_pri4 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "4");
        $class_pri5 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "5");
        $class_pri6 = query("SELECT * FROM redoublants WHERE belongs_to = ? and nom_class = ?",$id_last, "6");
        //var_dump($class_mat);
        $tabpri1;

        foreach ($class_pri1 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
         
        }
        foreach ($class_pri2 as  $value) {
          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
         
        }
        foreach ($class_pri3 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
        }
        foreach ($class_pri4 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
          
        }
        foreach ($class_pri5 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
        }
        foreach ($class_pri6 as  $value) {

          $tabpri1[] = $value["effectif_F"];
          $tabpri1[] = $value["effectif_G"];
        }
        echo '<form id="ecolepri_form_red_mod"  class="row p-10 " >
                       <table id="ecolepri_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed tab_with_6_p">
                       <thead>
                            <tr class="warning">
                                <th rowspan="2"> SEXE/CLASSE </th>
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
                            <tbody class="naledi_yellow">';
                            $esp = 0;
         
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabp6ans$i'>";
     for ($j=0; $j < 21; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>REDOUBLANTS</td>";
        }
       
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6 ||$j==7 ||$j==9|| $j==10|| $j==12||$j==13||$j==15||$j==16 ) {
     echo "<td><input value='$tabpri1[$esp]' autocomplete='false' id='tabp6ans$i$j' type='text' class='form-control tabp6ans tabp6ansfg$i$j' name='tabp6ansfg$i$j'></td>";
      $esp++;
    }
    else echo "<td id='tabp6ans$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo'</tbody>
    </table>
    <button id="ecolepri_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                             <span class="affreslt_red"></span>';
                      echo " <input value='$iddd' type='hidden' name='current_ecole' id='current_ecole'>
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
