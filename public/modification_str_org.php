<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $iddd = $_POST["current_ecole"];
      
      $id_last_insert = query("SELECT * FROM ecole2 WHERE id = ?", $_POST["current_ecole"]);
      $id_last = $id_last_insert[0]["id"]; 
      //Primaire  Secondaire
      if ($id_last_insert[0]["id_niveau"] == "Maternelle") {
        //success("1bree ".$id_last_insert[0]["nom_ecole"]);
        $class_mat1 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "1");
        $class_mat2 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "2");
        $class_mat3 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "3");
        
        $tabmat1;
        
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
         
        }
        foreach ($class_mat2 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
         
        }
        foreach ($class_mat3 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
        //var_dump($tabmat1);

       

        echo '<form id="structuremat_form_mod" action="structure_org.php" method="POST" class="row p-10">

                       <table id="structuremat_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered structuremat_form_table pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th > # </th>
                                <th >1ère </th>
                                <th >2ème </th>
                                <th >3ème</th>
                                <th >Tot</th>              
                            </tr>
                             
                            <tbody class="naledi_yellow">';
        $esp = 0;
            
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabmstruc$i'>";
     for ($j=0; $j < 4; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Structures organisées</td>";
        }
        
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==2  ) {
     echo "<td><input value='$tabmat1[$esp]' autocomplete='false' id='tabmstruc$i$j' type='text' class='form-control tabmstruc tabmstruc$i$j' name='tabmstruc$i$j'></td>";
      $esp++;
    }
    else echo "<td id='tabmstruc$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            
       
       
        
        echo '</tbody>
    </table>
    <button id="structuremat_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit"  >MODIFIER</button>
                            <span class="affreslt_str"></span>';
        echo " <input type='hidden' value='$iddd' name='current_ecole_structure2' id='current_ecole_structure2'>
                   </form>";

      }
      if ($id_last_insert[0]["id_niveau"] == "Primaire") {
        //success("2bree ".$id_last_insert[0]["nom_ecole"]);
        $class_mat1 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "1");
        $class_mat2 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "2");
        $class_mat3 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "3");
        $class_mat4 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "4");
        $class_mat5 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "5");
        $class_mat6 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "6");
        
        $tabmat1;
        
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
         
        }
        foreach ($class_mat2 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
         
        }
        foreach ($class_mat3 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
        foreach ($class_mat4 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
        foreach ($class_mat5 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
        foreach ($class_mat6 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
         echo '<form id="stucturepri_form_mod" action="structure_org.php" method="POST" class="row p-10" >
                       <table id="stucturepri_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th > # </th>
                                <th >1ère </th>
                                <th >2ème </th>
                                <th >3ème</th>
                                <th >4ème</th>
                                <th >5ème</th>
                                <th >6ème</th>
                                <th >Tot</th>              
                            </tr>
                            
                            <tbody class="naledi_yellow">';
        
                $esp = 0;   
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabpsstruc$i'>";
     for ($j=0; $j < 7; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Structures organisées</td>";
        }
        
       
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==2 || $j==3 || $j==4 ||$j==5 ) {
     echo "<td><input value='$tabmat1[$esp]' autocomplete='false' id='tabpsstruc$i$j' type='text' class='form-control tabpsstruc tabpsstruc$i$j' name='tabpsstruc$i$j'></td>";
      $esp++;
    }
    else echo "<td id='tabpsstruc$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo '</tbody>
    </table>
    <button id="stucturepri_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                            <span class="affreslt_str"></span>';
        echo " <input type='hidden' value='$iddd' name='current_ecole_structure2' id='current_ecole_structure2'>
                   </form>";
       
      }
      if ($id_last_insert[0]["id_niveau"] == "Secondaire") {
        //success("3bree ".$id_last_insert[0]["nom_ecole"]);
        $class_mat1 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "1");
        $class_mat2 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "2");
        $class_mat3 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "3");
        $class_mat4 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "4");
        $class_mat5 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "5");
        $class_mat6 = query("SELECT * FROM `structure_organisee` WHERE id_ecole = ? and nom_class = ?",$id_last, "6");
        
        $tabmat1;
        
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
         
        }
        foreach ($class_mat2 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
         
        }
        foreach ($class_mat3 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
        foreach ($class_mat4 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
        foreach ($class_mat5 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
        foreach ($class_mat6 as  $value) {

          $tabmat1[] = $value["nbr_structure"];
          
        }
        echo '<form id="stucturepri_form_mod" action="structure_org.php" method="POST" class="row p-10" >
                       <table id="stucturepri_form_table" style="margin: 0 auto" class="naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
                       <thead>
                            <tr class="warning">
                                <th > # </th>
                                <th >1ère </th>
                                <th >2ème </th>
                                <th >3ème</th>
                                <th >4ème</th>
                                <th >5ème</th>
                                <th >6ème</th>
                                <th >Tot</th>              
                            </tr>
                            
                            <tbody class="naledi_yellow">';
        
                $esp = 0;   
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabpsstruc$i'>";
     for ($j=0; $j < 7; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Structures organisées</td>";
        }
        
       
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==2 || $j==3 || $j==4 ||$j==5 ) {
     echo "<td><input value='$tabmat1[$esp]' autocomplete='false' id='tabpsstruc$i$j' type='text' class='form-control tabpsstruc tabpsstruc$i$j' name='tabpsstruc$i$j'></td>";
      $esp++;
    }
    else echo "<td id='tabpsstruc$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo '</tbody>
    </table>
    <button id="stucturepri_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                            <span class="affreslt_str"></span>';
        echo " <input type='hidden' value='$iddd' name='current_ecole_structure' id='current_ecole_structure'>
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
