<?php
$num1 = "";
$num2 = "";
$op = "";
$result = "";
if(isset($_GET['num1'] ))
{
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$op = $_GET['op'];
	switch($op)
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
		}
}
?>

<form>
	<b>a:</b><input type="text" name="num1" value= "<?php echo $num1?>"/><p>
	<b>b:</b><input type="text" name="num2" value= "<?php echo $num2?>"/><p> 
	<b>op:</b><input type="text" name="op" value= "<?php echo $op?>"/> <p>
	<b>result:</b><input type="text" name="result" value= "<?php echo $result?>"/> <p>
	<input type="submit" value="Calculate"><p>
</form>