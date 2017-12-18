<?php
    //configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $ecole ="";
          
      if(isset( $_POST["current_ecole"]))
      {
        $ecole = $_POST["current_ecole"];
      }
      elseif (isset($_POST["current_ecole"])) {
         $ecole = $_POST["current_ecole"];
      }

        $id_last_insert = query("SELECT * FROM ecole2 WHERE id = ?", $ecole);
        $id_last = $id_last_insert[0]["id"];
        $niveau = $id_last_insert[0]["id_niveau"];
        //success("BREE ".$niveau." ".$id_last);
        //$values = "";
        if (query("DELETE FROM redoublants WHERE belongs_to = ?",$id_last) === false) {
          apologize("Une erreur est survenue");
        }
        else {
        
        

        if ($niveau == "Maternelle") {
            $nom_class1 = "1";
            $nom_class2 = "2";
            $nom_class3 = "3";
            $id_class = 1;

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
            $troisieme="";
            foreach ($array as $key2 => $value) {
            if ($i == 0 || $i == 1 ) {
                if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $premiere = $premiere."".$xp.",";

                    }
                    else
                    $premiere = $premiere."".$value.",";
                }
            }
            elseif ($i == 2 || $i == 3 ) {
             if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $deuxieme = $deuxieme."".$xp.",";

                    }
                    else
                    $deuxieme = $deuxieme."".$value.",";
                }
            
            }
            elseif ($i == 4 || $i == 5 ) {
              if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $troisieme = $troisieme."".$xp.",";

                    }
                    else
                    $troisieme = $troisieme."".$value.",";
                }
            }
            $i++;
            
          }
          //echo $premiere ."<br>";
          //echo $deuxieme ."<br>";
          //echo $troisieme ."<br>";

          /*echo "INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class1', $premiere $id_last)";

          echo "INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class2', $deuxieme $id_last)";

          echo "INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class3', $troisieme $id_last)";*/
          if (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class1', $premiere $id_last)") === false) {
             apologize("Une erreur est survenue");
          }
          elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class2', $deuxieme $id_last)") === false) {
              apologize("Une erreur est survenue");
          }
          elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class3', $troisieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
          else {
            success("Redoublants enregistrés avec success");
          }




         
        }
        if ($niveau == "Primaire") {
             $nom_class1 = "1";
      $nom_class2 = "2";
      $nom_class3 = "3";
      $nom_class4 = "4";
      $nom_class5 = "5";
      $nom_class6 = "6";
      $id_class = 1;

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
          $troisieme="";
          $quatrieme="";
          $cinquieme="";
          $sixieme="";
          foreach ($array as $key2 => $value) {
            if ($i == 0 || $i == 1) {
              if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $premiere = $premiere."".$xp.",";

                    }
                    else
                    $premiere = $premiere."".$value.",";
                }
            }
            elseif ($i == 2 || $i == 3 ) {
              if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $deuxieme = $deuxieme."".$xp.",";

                    }
                    else
                    $deuxieme = $deuxieme."".$value.",";
                }
            
            }
            elseif ($i == 4 || $i == 5 ) {
             if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $troisieme = $troisieme."".$xp.",";

                    }
                    else
                    $troisieme = $troisieme."".$value.",";
                }
            }
             elseif ($i == 6 || $i == 7 ) {
             if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $quatrieme = $quatrieme."".$xp.",";

                    }
                    else
                    $quatrieme = $quatrieme."".$value.",";
                }
            } 
            elseif ($i == 8|| $i == 9 ) {
             if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $cinquieme = $cinquieme."".$xp.",";

                    }
                    else
                    $cinquieme = $cinquieme."".$value.",";
                }
            }
             elseif ($i == 10 || $i == 11 ) {
              if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $sixieme = $sixieme."".$xp.",";

                    }
                    else
                    $sixieme = $sixieme."".$value.",";
                }
            }
            
            $i++;
            
          }
          if (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class1', $premiere $id_last)") === false) {
             apologize("Une erreur est survenue");
          }
          elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class2', $deuxieme $id_last)") === false) {
              apologize("Une erreur est survenue");
          }
          elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class3', $troisieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
            elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class4', $quatrieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
            elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class5', $cinquieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
            elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class6', $sixieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
          else {
            success("Redoublants enregistrés avec success");
          }
            
        }
        if ($niveau == "Secondaire") {
           $nom_class1 = "1";
      $nom_class2 = "2";
      $nom_class3 = "3";
      $nom_class4 = "4";
      $nom_class5 = "5";
      $nom_class6 = "6";
      $id_class = 1;

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
          $troisieme="";
          $quatrieme="";
          $cinquieme="";
          $sixieme="";
          foreach ($array as $key2 => $value) {
            if ($i == 0 || $i == 1) {
              if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $premiere = $premiere."".$xp.",";

                    }
                    else
                    $premiere = $premiere."".$value.",";
                }
            }
            elseif ($i == 2 || $i == 3 ) {
              if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $deuxieme = $deuxieme."".$xp.",";

                    }
                    else
                    $deuxieme = $deuxieme."".$value.",";
                }
            
            }
            elseif ($i == 4 || $i == 5 ) {
             if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $troisieme = $troisieme."".$xp.",";

                    }
                    else
                    $troisieme = $troisieme."".$value.",";
                }
            }
             elseif ($i == 6 || $i == 7 ) {
             if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $quatrieme = $quatrieme."".$xp.",";

                    }
                    else
                    $quatrieme = $quatrieme."".$value.",";
                }
            } 
            elseif ($i == 8|| $i == 9 ) {
             if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $cinquieme = $cinquieme."".$xp.",";

                    }
                    else
                    $cinquieme = $cinquieme."".$value.",";
                }
            }
             elseif ($i == 10 || $i == 11 ) {
              if ($key2 != "current_ecole") {
                    //echo "<br> ".$key;
                     if ($value == "") {
                        $xp = 0;
                        $sixieme = $sixieme."".$xp.",";

                    }
                    else
                    $sixieme = $sixieme."".$value.",";
                }
            }
            
            $i++;
            
          }
          if (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class1', $premiere $id_last)") === false) {
             apologize("Une erreur est survenue");
          }
          elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class2', $deuxieme $id_last)") === false) {
              apologize("Une erreur est survenue");
          }
          elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class3', $troisieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
            elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class4', $quatrieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
            elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class5', $cinquieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
            elseif (query("INSERT INTO `redoublants`(`nom_class`, `effectif_F`, `effectif_G`, `belongs_to`) VALUES
          ('$nom_class6', $sixieme $id_last)") === false) {
              apologize("Une erreur est survenue");
            }
          else {
            success("Redoublants modifiés avec success");
          }
            
            
        }
        //echo $values;
      }
        
    }
    else
    {
    	
        render("redoublant_par_sex_templates.php", ["title" => "Repartition des rédoublant par sexe"]);
	}
?>