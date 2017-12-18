<?php

	
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
          
   
      $id_last = $_POST["current_ecole"];
      //success("$id_last");
      if (query("DELETE FROM classe_primaire where id_ecole = ?",$id_last) === false) {
        apologize("Une erreur est survenue");
      }else {
      
       //echo " INSERT INTO classe_maternelle (nom_class,id_ecole,age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG) VALUES (?,?)";
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
            if ($i == 0 || $i == 1|| $i == 12 || $i == 13|| $i == 24 || $i == 25 || $i == 36 || $i == 37 || $i == 48|| $i == 49) {
               if ($value == "") {
               $xp = 0;
                $premiere = $premiere."".$xp.",";
              }
              else $premiere = $premiere."".$value.",";
               //mysql_insert_id();
            }
            elseif ($i == 2 || $i == 3 || $i == 14 || $i == 15|| $i == 26 || $i == 27 || $i == 38 || $i == 39 || $i == 50 || $i == 51) {
              if ($value == "") {
               $xd = 0;
                $deuxieme = $deuxieme."".$xd.",";
              }
              else $deuxieme = $deuxieme."".$value.",";
            
            }
            elseif ($i == 4 || $i == 5 || $i == 16 || $i == 17 || $i == 28 || $i == 29 || $i == 40 || $i == 41 || $i == 52 || $i == 53) {
              if ($value == "") {
               $xt = 0;
                $troisieme = $troisieme."".$xt.",";
              }
              else $troisieme = $troisieme."".$value.",";
            }
             elseif ($i == 6 || $i == 7 || $i == 18 || $i == 19 || $i == 30 || $i == 31 || $i == 42 || $i == 43 || $i == 54 || $i == 55) {
              if ($value == "") {
               $xt = 0;
                $quatrieme = $quatrieme."".$xt.",";
              }
              else $quatrieme = $quatrieme."".$value.",";
            } 
            elseif ($i == 8|| $i == 9 || $i == 20 || $i == 21 || $i == 32 || $i == 33 || $i == 44 || $i == 45 || $i == 56 || $i == 57 ) {
              if ($value == "") {
               $xt = 0;
                $cinquieme = $cinquieme."".$xt.",";
              }
              else $cinquieme = $cinquieme."".$value.",";
            }
             elseif ($i == 10 || $i == 11 || $i == 22 || $i == 23 || $i == 34 || $i == 35 || $i == 46 || $i == 47 || $i == 58 || $i == 59 ) {
              if ($value == "") {
               $xt = 0;
                $sixieme = $sixieme."".$xt.",";
              }
              else $sixieme = $sixieme."".$value.",";
            }
            
            $i++;
            
          }

 if(query("INSERT INTO classe_primaire (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,age_11ansF,age_11ansG,age_plus11ansF,age_plus11ansG,nom_class,id_ecole) VALUES (".$premiere.' "'.$nom_class1.'", '.$id_last.")")=== false)
  {
      apologize("Une erreur est survenue");
      
    }
    elseif (query("INSERT INTO classe_primaire (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,age_11ansF,age_11ansG,age_plus11ansF,age_plus11ansG,nom_class,id_ecole) VALUES (".$deuxieme.' "'.$nom_class2.'", '.$id_last.")") === false ) {
      apologize("Une erreur est survenue");
    }
    elseif (query("INSERT INTO classe_primaire (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,age_11ansF,age_11ansG,age_plus11ansF,age_plus11ansG,nom_class,id_ecole) VALUES (".$troisieme.' "'.$nom_class3.'", '.$id_last.")")===false) {
      apologize("Une erreur est survenue");
    }
    elseif (query("INSERT INTO classe_primaire (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,age_11ansF,age_11ansG,age_plus11ansF,age_plus11ansG,nom_class,id_ecole) VALUES (".$quatrieme.' "'.$nom_class4.'", '.$id_last.")")===false) {
      apologize("Une erreur est survenue");
    }
    elseif (query("INSERT INTO classe_primaire (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,age_11ansF,age_11ansG,age_plus11ansF,age_plus11ansG,nom_class,id_ecole) VALUES (".$cinquieme.' "'.$nom_class5.'", '.$id_last.")")===false) {
      apologize("Une erreur est survenue");
    }
    elseif (query("INSERT INTO classe_primaire (age_6ansF,age_6ansG,age_6F,age_6G,age_7a10ansF,age_7a10ansG,age_11ansF,age_11ansG,age_plus11ansF,age_plus11ansG,nom_class,id_ecole) VALUES (".$sixieme.' "'.$nom_class6.'", '.$id_last.")")===false) {
      apologize("Une erreur est survenue");
    }
    else
    {
                //$last_id = mysqli_insert_id($conn);
   // echo '<fieldset><div class="swal2-icon swal2-success animate" style="display: block;"><span class="line tip animate-success-tip"></span> <span class="line long animate-success-long"></span><div class="placeholder"></div> <div class="fix"></div></div><h2 class="text-center"> Ages revolue et effectifs enregistrées avec success</h2></fieldset>';

          success(" Ages revolue et effectifs modifiés avec succèss");
      }


        }    
    }
    else
    {
    $table_niveau = query("SELECT * FROM niveau WHERE 1");
        render("effectif_age_sex_templates.php", ["title" => "Enregistrement de l'effectif (age/sexe)","table_niveau"=>$table_niveau]);
  }
   
    
/*0)tabp6ansfg00 - 
1)tabp6ansfg01 - 
2)tabp6ansfg03 - 
3)tabp6ansfg04 - 
4)tabp6ansfg06 - 
5)tabp6ansfg07 - 
6)tabp6ansfg09 - 
7)tabp6ansfg010 - 
8)tabp6ansfg012 - 
9)tabp6ansfg013 - 

10)tabp6ansfg015 - 
11)tabp6ansfg016 - 
12)tabp6ansfg10 - 
13)tabp6ansfg11 - 
14)tabp6ansfg13 - 
15)tabp6ansfg14 - 
16)tabp6ansfg16 - 
17)tabp6ansfg17 - 
18)tabp6ansfg19 - 
19)tabp6ansfg110 - 

20)tabp6ansfg112 - 
21)tabp6ansfg113 - 
22)tabp6ansfg115 - 
23)tabp6ansfg116 - 
24)tabp6ansfg20 - 
25)tabp6ansfg21 - 
26)tabp6ansfg23 - 
27)tabp6ansfg24 - 
28)tabp6ansfg26 - 
29)tabp6ansfg27 - 

30)tabp6ansfg29 - 
31)tabp6ansfg210 - 
32)tabp6ansfg212 - 
33)tabp6ansfg213 - 
34)tabp6ansfg215 - 
35)tabp6ansfg216 - 
36)tabp6ansfg30 - 
37)tabp6ansfg31 - 
38)tabp6ansfg33 - 
39)tabp6ansfg34 - 

40)tabp6ansfg36 - 
41)tabp6ansfg37 - 
42)tabp6ansfg39 - 
43)tabp6ansfg310 - 
44)tabp6ansfg312 - 
45)tabp6ansfg313 - 
46)tabp6ansfg315 - 
47)tabp6ansfg316 - 
48)tabp6ansfg40 - 
49)tabp6ansfg41 - 

50)tabp6ansfg43 - 
51)tabp6ansfg44 - 
52)tabp6ansfg46 - 
53)tabp6ansfg47 - 
54)tabp6ansfg49 - 
55)tabp6ansfg410 - 
56)tabp6ansfg412 - 
57)tabp6ansfg413 - 
58)tabp6ansfg415 - 
59)tabp6ansfg416 - */
?>
