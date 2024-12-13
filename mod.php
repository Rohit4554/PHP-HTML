<?php
// Check if all required form inputs are present
//if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) 
//{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    
        switch ($operation) 
        {
            case 'mod': mod($num1,$num2);
                //echo "$num1 Mod $num2 is: " . ($num1 % $num2);
                break;

            case 'power': power($num1,$num2);
                //echo "$num1 raised to the power of $num2 is: " . pow($num1, $num2);
                break;
        }

        function mod($num1,$num2)
        {
            echo "$num1 Mod $num2 is: " . ($num1 % $num2);  
        }

        function power($num1,$num2)
        {
            echo "$num1 raised to the power of $num2 is: " . pow($num1, $num2);  
        }
   
?>
