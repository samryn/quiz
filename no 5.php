<?php 
      $nilaiArray = [];
      for($i = 1; $i <= 10; $i++){
          // untuk hasil sisa bagi 2
          if($i % 2 === 0) { 
              echo ' '.$i ;
              //untuk push nilai ke array kosong
              array_push($nilaiArray, $i);  
          }
      };
      echo "<br>";
      $nilMax = 0;

      // melakukan perulangan pada array menggunakan foreach
      foreach ($nilaiArray as $nilArr) {
        if($nilArr > $nilMax) {
            $nilMax = $nilArr;
        }
    }

    echo 'nilai maksimum adalah '.$nilMax;
    ?>