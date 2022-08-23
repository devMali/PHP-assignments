

<?php


$allCities = array(
    'surat' => array('ahmedabad' => 5000, 'vadodara' => 3500,),
    'ahmedabad' => array('surat' => 5000, 'vadodara' => 1110),
    'vadodara' => array('ahmedabad' => 1110, 'surat' => 3500,),
);



if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $source = $_POST['source'];
    $destination = $_POST['destination'];

    if ($source !== 'none' && $destination !== 'none' && $source !== $destination) {
        $cost = $allCities[$source][$destination];
        $message = "air-fare between $source and $destination is $cost rupees";
    } else {
        $error = "Please select city <br>and source city and destination city must not be same";
    }
}

?>
<html>
<body>
	
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
	<center>
	<label for="source">Source</label>
		<select name="source" id="source">
                    <option value="none">Select Source City</option>
                    <?php
                    foreach (array_keys($allCities) as $currentCity) {
                        echo "<option value='$currentCity'>" . ucfirst($currentCity)  . "</option>";
                    }
                    ?>
            </select>
			<br>
	<label class="font-semibold" for="destination">Destination</label>
                	<select name="destination" id="destination">
                    <option value="none">Select Destination City</option>
                    <?php
                    foreach (array_keys($allCities) as $currentCity) {
                        echo "<option value='$currentCity'>" . ucfirst($currentCity)  . "</option>";
                    }
                    ?>
                </select><br><br>
				<button type="submit">Calculate fare</button>
    </center>    
	</form>
	<?php
     if (isset($error) && $error) {
            echo "<h2>$error</h2>";
        }
        if (isset($message) && $message) {
            echo "<h2>$message</h2>";
        }
?>
</body>
</html>


$arr= array(
	'ahmedabad' =>	array('surat'=>23,'baorda'=>23),
	'surat' =>	array('ahmedabad'=>23,'baorda'=>23),
	'baroda' =>	array('surat'=>23,'ahmedabad'=>23),
);

$arr2=array ('dev'=>17,'sijo'=>16);

$arr3 = array(

	array(1,jay,praj),
	array(2,dev,mali),
);