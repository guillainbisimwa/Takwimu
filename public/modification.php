<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      
      $id_last_insert = query("SELECT * FROM ecole2 WHERE id = ?", $_POST["current_ecole"]);
      $id_last = $id_last_insert[0]["id"];  
      $id_post = $_POST["current_ecole"];
      //Primaire  Secondaire
      if ($id_last_insert[0]["id_niveau"] == "Maternelle") {
         //success("1bree ".$id_last_insert[0]["nom_ecole"]);
        $class_mat1 = query("SELECT * FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$id_last, "1");
        $class_mat2 = query("SELECT * FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$id_last, "2");
        $class_mat3 = query("SELECT * FROM classe_maternelle WHERE id_ecole = ? and nom_class = ?",$id_last, "3");
        //var_dump($class_mat);
        $tabmat1;
        //$tabmat2[] = "";
        //$tabmat3[] = "";
        foreach ($class_mat1 as  $value) {

          $tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];
          /*$tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];
          $tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = $value["age_7a10ansG"];*/
        }
        foreach ($class_mat2 as  $value) {

          $tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];
          /*$tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];
          $tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = $value["age_7a10ansG"];*/
        }
        foreach ($class_mat3 as  $value) {

          $tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];
          /*$tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];
          $tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = trim($value["age_7a10ansG"]);*/
        }
        foreach ($class_mat1 as  $value) {

          /*$tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];*/
          $tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];
          /*$tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = $value["age_7a10ansG"];*/
        }
        foreach ($class_mat2 as  $value) {

         /* $tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];*/
          $tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];
          /*$tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = $value["age_7a10ansG"];*/
        }
        foreach ($class_mat3 as  $value) {

          /*$tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];*/
          $tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];
          /*$tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = trim($value["age_7a10ansG"]);*/
        }
        foreach ($class_mat1 as  $value) {
/*
          $tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];
          $tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];*/
          $tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = $value["age_7a10ansG"];
        }
        foreach ($class_mat2 as  $value) {

         /* $tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];
          $tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];*/
          $tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = $value["age_7a10ansG"];
        }
        foreach ($class_mat3 as  $value) {

         /* $tabmat1[] = $value["age_6ansF"];
          $tabmat1[] = $value["age_6ansG"];
          $tabmat1[] = $value["age_6F"];
          $tabmat1[] = $value["age_6G"];*/
          $tabmat1[] = $value["age_7a10ansF"];
          $tabmat1[] = trim($value["age_7a10ansG"]);
        }
        //var_dump($tabmat1);

       

        echo '
        <form id="ecolemat_form_mod" class="row p-10" style="display: none1;">

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
                            <tbody class="naledi_yellow">';

        
           $esp = 0; $otr = 0;
                for ($i=0; $i < 3; $i++) {

echo "<tr id='tabm6ans$i'>";
     for ($j=0; $j < 12; $j++) {

        if ($i == 0 && $j==0) {

           echo "<td>Moins de 6 ans</td>";
        }
        else if ($i == 1 && $j==0) {
            echo "<td> 6 ans</td>";
            //$esp = 2;
        } 
         else if ($i == 2 && $j==0) {
            echo "<td>7 à 10 ans</td>";
              //$esp = 4;
        } 
        
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6 ||$j==7 ) {
     
       echo "<td><input value='$tabmat1[$esp]' autocomplete='false' id='tabm6ans$i$j' type='text' class='form-control tabm6ans tabm6ansfg$i$j' name='tabm6ansfg$i$j'></td>";
      $esp++;
     
     
    }
    else {
      echo "<td id='tabm6ans$i$j'>0</td>";
      /*if ($j == 2 && $i == 0 ) {
        $esp =0;
      }
      if ($j == 5 && $i == 0 ) {
        $esp =0;
      }
      if ($j == 2 && $i == 1 ) {
        $esp =2;
      }
      if ($j == 5 && $i == 1 ) {
        $esp =2;
      }
      if ($j == 2 && $i == 2 ) {
        $esp =4;
      }
      if ($j == 5 && $i == 2 ) {
        $esp =4;
      }*/
      //$esp =0;
      
      $otr++;
    }

    }
echo "</tr>"; 
                       
            }
            
        
       
       
        
        echo '</tbody>
    </table>
    <button id="ecolemat_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit"  >MODIFIER</button>
                            <span class="affreslt_ecole"></span>';
                             echo " <input value='$id_post' type='hidden' name='current_ecole' id='current_ecole'>";
                   echo '</form>
                   <span class="aff_mod_tab"></span>';

      }
      if ($id_last_insert[0]["id_niveau"] == "Primaire") {
         //success("2bree ".$id_last_insert[0]["nom_ecole"]);
        $class_pri1 = query("SELECT * FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$id_last, "1");
        $class_pri2 = query("SELECT * FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$id_last, "2");
        $class_pri3 = query("SELECT * FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$id_last, "3");
        $class_pri4 = query("SELECT * FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$id_last, "4");
        $class_pri5 = query("SELECT * FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$id_last, "5");
        $class_pri6 = query("SELECT * FROM classe_primaire WHERE id_ecole = ? and nom_class = ?",$id_last, "6");
        //var_dump($class_mat);
        $tabpri1;

        foreach ($class_pri1 as  $value) {

          $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          /*$tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri2 as  $value) {

          $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          /*$tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri3 as  $value) {

          $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          /*$tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri4 as  $value) {

          $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          /*$tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri5 as  $value) {

          $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          /*$tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri6 as  $value) {

          $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          /*$tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }






        foreach ($class_pri1 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];*/
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
         /* $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri2 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];*/
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
         /* $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri3 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];*/
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
         /* $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri4 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];*/
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
         /* $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri5 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];*/
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
         /* $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri6 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];*/
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
         /* $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }





        foreach ($class_pri1 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];*/
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          /*$tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri2 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];*/
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          /*$tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri3 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];*/
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          /*$tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri4 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];*/
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          /*$tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri5 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];*/
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          /*$tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
         foreach ($class_pri6 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];*/
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          /*$tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        


        foreach ($class_pri1 as  $value) {

          /*$tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];*/
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
         /* $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri2 as  $value) {

          /*$tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];*/
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
         /* $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri3 as  $value) {

          /*$tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];*/
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
         /* $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri4 as  $value) {

          /*$tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];*/
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
         /* $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri5 as  $value) {

          /*$tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];*/
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
         /* $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }
        foreach ($class_pri6 as  $value) {

          /*$tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];*/
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];
         /* $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];*/
        }



        foreach ($class_pri1 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];*/
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];
        }
         foreach ($class_pri2 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];*/
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];
        } 
        foreach ($class_pri3 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];*/
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];
        }
         foreach ($class_pri4 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];*/
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];
        }
         foreach ($class_pri5 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];*/
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];
        }
         foreach ($class_pri6 as  $value) {

         /* $tabpri1[] = $value["age_6ansF"];
          $tabpri1[] = $value["age_6ansG"];
          $tabpri1[] = $value["age_6F"];
          $tabpri1[] = $value["age_6G"];
          $tabpri1[] = $value["age_7a10ansF"];
          $tabpri1[] = $value["age_7a10ansG"];
          $tabpri1[] = $value["age_11ansF"];
          $tabpri1[] = $value["age_11ansG"];*/
          $tabpri1[] = $value["age_plus11ansF"];
          $tabpri1[] = $value["age_plus11ansG"];
        }
        
        echo '<form id="ecolepri_form_mod" class="row p-10" style="display: none1;">
                       <table id="ecolepri_form_table" style="margin: 0 auto" class="tab_with_6_p naledi_yellow  col-sm-12 table-bordered pointInputTable table-condensed">
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
                            <tbody class="naledi_yellow">';
        
             $esp = 0; 
                for ($i=0; $i < 5; $i++) {

echo "<tr id='tabp6ans$i'>";
     for ($j=0; $j < 21; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Moins 6 ans</td>";
        }
        else if ($i == 1 && $j==0) {
            echo "<td>6 ans</td>";
        } 
         else if ($i == 2 && $j==0) {
            echo "<td>7-10 ans</td>";
        } 
        else if ($i == 3 && $j==0) {
            echo "<td>11 ans</td>";
        }
        else if ($i == 4 && $j==0) {
            echo "<td>plus 11 ans</td>";
        }
        //else if ($i == 5 && $j==0) {
          //  echo "<td>xxxxx</td>";
        //}
   
    //soustractiuon de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6 ||$j==7 ||$j==9|| $j==10|| $j==12||$j==13||$j==15||$j==16 ) {
     echo "<td><input value='$tabpri1[$esp]' autocomplete='false' id='tabp6ans$i$j' type='text' class='form-control tabp6ans tabp6ansfg$i$j' name='tabp6ansfg$i$j'></td>";
    $esp++;
    }
    else echo "<td id='tabp6ans$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
           
       
       
        
        echo '</tbody>
    </table>
    <button id="ecolepri_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                            <span class="affreslt_ecole"></span>';
                           echo " <input value='$id_post' type='hidden' name='current_ecole' id='current_ecole'>";
                   echo '</form>
                   <span class="aff_mod_tab"></span>';
      }
      if ($id_last_insert[0]["id_niveau"] == "Secondaire") {
         //success("3bree ".$id_last_insert[0]["nom_ecole"]);
        $class_co1 = query("SELECT * FROM classe_secondaire_co WHERE id_ecole = ? and nom_class = ?",$id_last, "1");
        $class_co2 = query("SELECT * FROM classe_secondaire_co WHERE id_ecole = ? and nom_class = ?",$id_last, "2");
        //var_dump($class_mat);
        $tabco1;
        //$tabmat2[] = "";
        //$tabmat3[] = "";
        foreach ($class_co1 as  $value) {

          $tabco1[] = $value["effectif_F"];
          $tabco1[] = $value["effectif_G"];
        }
        foreach ($class_co2 as  $value) {

          $tabco1[] = $value["effectif_F"];
          $tabco1[] = $value["effectif_G"];
        }
         echo '<form id="ecoleco_form_mod" class="row p-10" style="display: none1;">

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
                            <tbody class="naledi_yellow">';
                            $esp = 0;
        
                for ($i=0; $i < 1; $i++) {

echo "<tr id='tabco6ans$i'>";
     for ($j=0; $j <9; $j++) {
        if ($i == 0 && $j==0) {
           echo "<td>Effectifs</td>";
        }
       
   
    //soustraction de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4  ) {
     echo "<td><input value='$tabco1[$esp]' autocomplete='false' id='tabco6ans$i$j' type='text' class='form-control tabco6ans tabco6ans$i$j' name='tabco6ans$i$j'></td>";
      $esp++;
    }
    else echo "<td id='tabco6ans$i$j'>0</td>";

    }
echo "</tr>"; 
                       
            }
            echo '</tbody>
    </table>
    <button id="ecoleco_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit">MODIFIER</button>
                            <span class="affreslt_ecoleco"></span>
                              <input type="hidden" name="current_ecole" id="current_ecoleco">';
                              echo " <input value='$id_post' type='hidden' name='current_ecole' id='current_ecole'>";
                   echo '</form>
                   <span class="aff_mod_tab_co"></span>';

    ###############################################################################################
    ###############################################################################################
    ###############################################################################################
                   $liste_option = $id_last_insert[0]["liste_option"];
      //!empty($_POST["option_org"])
      //@$tab_class = split("[**]+", $_POST["class_org"]);
      @$tab_option = split("[**]+", $liste_option);
      $ii = 1;
      //var_dump($tab_option);
      echo '<form id="ecolecl_form_mod"  class="row p-10">';
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

        //construction d'u tableau des effectif clasee par options
        $ecole_s_o3 = query("SELECT * FROM classe_secondaire_cl WHERE (id_ecole = ? and nom_class = ?) and option = ?
          ",$id_last, "3",$table_option[0]["id"]);

        $ecole_s_o4 = query("SELECT * FROM classe_secondaire_cl WHERE (id_ecole = ? and nom_class = ?) and option = ?
          ",$id_last, "4",$table_option[0]["id"]);

        $ecole_s_o5 = query("SELECT * FROM classe_secondaire_cl WHERE (id_ecole = ? and nom_class = ?) and option = ?
          ",$id_last, "5",$table_option[0]["id"]);

        $ecole_s_o6 = query("SELECT * FROM classe_secondaire_cl WHERE (id_ecole = ? and nom_class = ?) and option = ?
          ",$id_last, "6",$table_option[0]["id"]);
        //var_dump($ecole_s_o);
        //echo "<br>";
        //echo "SELECT * FROM classe_secondaire_cl WHERE id_ecole = $id_last and nom_class = '3' and option = ".$table_option[0]["id"]; 
        $tabcl1;
        foreach ($ecole_s_o3 as $value1) {
          $tabcl1[] = $value1["effectif_F"];
          $tabcl1[] = $value1["effectif_G"];
        }
        foreach ($ecole_s_o4 as $value2) {
          $tabcl1[] = $value2["effectif_F"];
          $tabcl1[] = $value2["effectif_G"];
        }
        foreach ($ecole_s_o5 as $value3) {
          $tabcl1[] = $value3["effectif_F"];
          $tabcl1[] = $value3["effectif_G"];
        }
        foreach ($ecole_s_o6 as $value4) {
          $tabcl1[] = $value4["effectif_F"];
          $tabcl1[] = $value4["effectif_G"];
        }
        //var_dump($tabcl1);
        
             
                //for ($i=0; $i < 3; $i++) {
                 $esp = 0;

echo "<tr id='tabcl6ans$i'>";
     for ($j=0; $j <15; $j++) {
        if ($i == $limite_ligne && $j==0) {
            echo "<td>$value  </td>";
            //$limite_ligne =1;
        }
        
    //addition de totaux
    if ( $j==0 || $j==1 || $j==3 || $j==4 || $j==6  || $j==7 || $j==9 || $j==10 ) {
     echo "<td><input value='$tabcl1[$esp]' autocomplete='false' id='tabcl6ans$i$j' type='text' class='form-control tabcl6ans tabcl6ans$i$j' name='tabcl6ans$i$j'></td>";
    $esp++;
   }
    else echo "<td id='tabcl6ans$i$j'>0</td>";

    }


echo "</tr>"; 
                       
           // }
            
      $limite_ligne = 1 + $limite_ligne;
                    } 
                    $tabcl1 = null;
                    $i++;
                  }
                   echo ' </tbody>
    </table>';
            echo '<button id="ecolecl_form_button" class="btn btn-danger col-sm-12 waves-effect btn-lg" type="submit"  >MODIFIER</button>
                            <span class="affreslt_ecole"></span>';
                            echo " <input value='$id_post' type='hidden' name='current_ecole' id='current_ecole'>";
                   echo '</form>
                   <span class="aff_mod_tab_cl"></span>';

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
