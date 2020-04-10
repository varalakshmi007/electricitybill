<!DOCTYPE html>
 
<head>
	<title>Electricity Bill</title>
</head>
<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
function calculate_bill($units) {
    $first = 9;
    $second = 12;
    $third = 15;
 
    if($units <= 50) {
        $bill = $units * $first;
	alert($bill);
    }
    else if($units <= 100) {
        $temp = 50 * $first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $second);
	alert($bill);
    }
    else {
        $temp = (50 * $first) + (50 * $second) ;
        $remaining_units = $units - 100;
        $bill = $temp + ($remaining_units * $third);
	alert($bill);
    }

}
</head>
<body>
	<div>
		<h1>Electricity Calculator</h1>       
            	<input type="number" name="units" id="units"  onclick="calculate_bill()" />            
		<h4>Amount: <h4><span id="result"></span>
		</form>
 
	</div>
</body>
</html>