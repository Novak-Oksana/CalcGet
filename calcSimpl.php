<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$oP = $_GET['opr'];
$result = 0.0;
switch($oP)
{
	case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
	default: echo "Error";
}
echo $result;
?>