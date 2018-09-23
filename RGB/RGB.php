<?php
function RGB($a, $b, $c) {
  function convertir($num) {
    $mapa = array(0 => "0", 
                 1 => "1", 
                 2 => "2", 
                 3 => "3", 
                 4 => "4", 
                 5 => "5", 
                 6 => "6", 
                 7 => "7", 
                 8 => "8",
                 9 => "9",
                 10 => "A",
                 11 => "B",
                 12 => "C",
                 13 => "D",
                 14 => "E",
                 15 => "F");
        $aux = $num;
        $cont = 0;
        $str = "";
        while ($aux > 0) {
          $temp = $aux % 16;
          if ($cont != 2) {
            $str= $mapa[$temp].$str;
          }
          $aux = (int)$aux / 16;
          $cont += 1;
        }
        return $str;
    }
    $num1 = convertir($a);
    $num2 = convertir($b);
    $num3 = convertir($c);
    if ($num1 == "") {
      $num1 = "00";
    }
    if ($num2 == "") {
      $num2 = "00";
    }
    if ($num3 == "") {
      $num3 = "00";
    }

    return '#'.$num1.$num2.$num3;
  }
  echo RGB(29, 250, 14);
?>