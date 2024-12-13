<?php

 $num = $_POST['num'];
 $operation = $_POST['operation'];

   switch($operation)
   {
       case 'Nsum' : Nsum($num);
                     break;
        
        case 'Factorial' : Factorial($num);
                           break;
   }

   function Nsum($num)
   {
      echo "Sum of first $num numbers is : " . (($num * ($num + 1)) / 2);
   }

   function Factorial($num)
   {
    //$num = $b;
    $factorial = 1;
    for ($x = $num; $x >= 1; $x--) 
    {
        $factorial = $factorial * $x;
    }
    echo "Factorial of $num is : " . $factorial;
   }
?>