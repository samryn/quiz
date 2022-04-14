<?php
function maximum($x, $y)
{
 $max = $x; 
 if ($y> $max) { 
  $max = $y;
 } 
 echo "Nilai terbesar adalah ".$max;
}
maximum(7, 6);
?>  