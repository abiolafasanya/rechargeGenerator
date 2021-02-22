<?php
if(isset($_GET['calculate'])){
	function compute(){
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
		
		switch($_GET["sign"]){

		case "add":
				$add = $num1 + $num2;
				return 'The Result is: '.$add; 
				break;
		case "subtract":
				$sub = $num1 - $num2;
				return 'The Result is: '.$sub;
				break;

		case "multiply":
				$mult = $num1 * $num2;
				return 'The Result is: '.$mult;
				break;

		case "division":
				$div = $num1 / $num2;
				return 'The Result is: '.$div;
				break;

		default:
				echo "<span style='color:red;'>Please select an Operator</span>";
		}
	}
	echo compute();
}
?>

<form>
	<p>Number 1</p>
	<input type="text" name="num1">
	<p>Number 2</p>
	<input type="text" name="num2">
	<br><br>
	<select name="sign">
		<option>--Operator--</option>
		<option value="add">Add</option>
		<option value="subtract">Subtract</option>
		<option value="multiply">Multiply</option>
		<option value="division">Division</option>
	</select>
	<br><br>
	<input type="submit" name="calculate" value="Calculate">
	<input type="reset" value="Clear">
</form>
