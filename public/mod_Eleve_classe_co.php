<?php

	
    // configuration
    require("../includes/config.php"); 
    
    //if ($_SERVER["REQUEST_METHOD"] == "POST")
    //{
          


    $id_last = $_POST["current_ecole"];
      //success("$id_last");
      if (query("DELETE FROM classe_secondaire_co where id_ecole = ?",$id_last) === false) {
        apologize("Une erreur est survenue");
      }else {
       //echo " INSERT INTO classe_maternelle (nom_class,id_ecole,age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG) VALUES (?,?)";
      $nom_class1 = "1";
      $nom_class2 = "2";
      //$nom_class3 = "3";
      //$id_class = 1;

        $data['text'] = $_POST;
        $obj = $data['text'];
         //echo  $data['text']."<br>";
         //echo  count($obj)."<br>";

         $array = (array)($obj);
         $re = "";
          //echo len($array)."<br>";
          $i = 0;
          $premiere="";
          $deuxieme="";
         //$troisieme="";
          foreach ($array as $key2 => $value) {
            if ($i == 0 || $i == 1 ) {
               if ($value == "") {
               $xp = 0;
                $premiere = $premiere."".$xp.",";
              }
              else $premiere = $premiere."".$value.",";
               //mysql_insert_id();
            }
            elseif ($i == 2 || $i == 3 ) {
              if ($value == "") {
               $xd = 0;
                $deuxieme = $deuxieme."".$xd.",";
              }
              else $deuxieme = $deuxieme."".$value.",";
            
            }
            
           
            $i++;
            
          }

          if(query("INSERT INTO classe_secondaire_co (effectif_F,effectif_G,nom_class,id_ecole) VALUES (".$premiere.' "'.$nom_class1.'", '.$id_last."),(".$deuxieme.' "'.$nom_class2.'", '.$id_last.")")=== false )
    {
                 //apologize("Une erreur est survenue");
        apologize("Une erreur est survenue");
      } 
      else
      {
        
                  //$last_id = mysqli_insert_id($conn);
      //echo '<fieldset><div class="swal2-icon swal2-success animate" style="display: block;"><span class="line tip animate-success-tip"></span> <span class="line long animate-success-long"></span><div class="placeholder"></div> <div class="fix"></div></div><h2 class="text-center">Effectifs CO enregistrées avec success</h2></fieldset>';
        success("Effectifs CO enregistrées avec success");
                 //success("Paroisse ajoutée avec succèss");
      }
          //echo "INSERT INTO classe_secondaire_co (effectif_F,effectif_G,nom_class,id_ecole) VALUES (".$premiere.' "'.$nom_class1.'", '.$id_last."),(".$deuxieme.' "'.$nom_class2.'", '.$id_last.")";

   /* $test_co1 = query("SELECT * FROM classe_secondaire_co WHERE id_ecole = ? and nom_class = ?", $id_last,$nom_class1);
    $test_co2 = query("SELECT * FROM classe_secondaire_co WHERE id_ecole = ? and nom_class = ?", $id_last,$nom_class2);
    //echo count($test_co1);

    if(count($test_co1) == 0 && count($test_co2) == 0){
      //DELETE FROM `classe_secondaire_co` WHERE 1
      if(query("DELETE FROM `classe_secondaire_co` WHERE id = ? ",$test_co1[0]["id"]) === false){
        apologize("Une erreur est survenue");
        
      }
      else {
        if(query("INSERT INTO classe_secondaire_co (effectif_F,effectif_G,nom_class,id_ecole) VALUES (".$premiere.' "'.$nom_class1.'", '.$id_last."),(".$deuxieme.' "'.$nom_class2.'", '.$id_last.")")=== false )
    {
                 //apologize("Une erreur est survenue");
        apologize("Une erreur est survenue");
      } 
      else
      {
        
                  //$last_id = mysqli_insert_id($conn);
      //echo '<fieldset><div class="swal2-icon swal2-success animate" style="display: block;"><span class="line tip animate-success-tip"></span> <span class="line long animate-success-long"></span><div class="placeholder"></div> <div class="fix"></div></div><h2 class="text-center">Effectifs CO enregistrées avec success</h2></fieldset>';
        success("Effectifs CO enregistrées avec success");
                 //success("Paroisse ajoutée avec succèss");
      }
      $test_co11 = query("SELECT * FROM classe_secondaire_co WHERE id_ecole = ? and nom_class = ?", $id_last,$nom_class1);
    $test_co22 = query("SELECT * FROM classe_secondaire_co WHERE id_ecole = ? and nom_class = ?", $id_last,$nom_class2);
      if (count($test_co11) == 1 && count($test_co22) == 1) {
       //echo '<fieldset><div class="swal2-icon swal2-success animate" style="display: block;"><span class="line tip animate-success-tip"></span> <span class="line long animate-success-long"></span><div class="placeholder"></div> <div class="fix"></div></div><h2 class="text-center">Effectifs CO enregistrées avec success</h2></fieldset>';
        success("Effectifs CO enregistrées avec success");
    }

    }
  }*/
  /*if (count($test_co1) == 1 && count($test_co2) == 1) {
       //echo '<fieldset><div class="swal2-icon swal2-success animate" style="display: block;"><span class="line tip animate-success-tip"></span> <span class="line long animate-success-long"></span><div class="placeholder"></div> <div class="fix"></div></div><h2 class="text-center">Effectifs CO enregistrées avec success</h2></fieldset>';
      success("Effectifs CO enregistrées avec success");

    }*/
  }
    

?>