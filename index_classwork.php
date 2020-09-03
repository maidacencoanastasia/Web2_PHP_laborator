<!doctype html>
<title>Maidacenco</title>
<h1>This is my exemple</h1>
<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$input = array();
$sum = 0;
$m = 0;
$suma = 0;
foreach ($numbers as $index=>$value) {
	if ($value % 2 != 0){
  echo "$value <br>";
		$sum = $sum + $value;}
}
echo 'sum: '. $sum;
?>
<p>But, I think that exist and another possibility</p>
<?php
$numbers = range(1, 15);
shuffle($numbers);
while (list(, $number) = each($numbers)) { //list --  Присвоить переменным из списка значения подобно массиву
    echo "$number ";
}

echo "odd elements of array:" . "<br>";

foreach ($number as $key => $value) {
    if ($value % 2 != 0)  {
        echo $value . '<br />';
        array_push($input,$value);
    }
}
$output = array_slice($input, 0, 5);
foreach ($output as $key => $value) {
    if ($value % 2 != 0)  {
        echo $value . '<br />';
        $suma += $value;
    }
}
echo 'sum: '. $suma;
?>
</html>