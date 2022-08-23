<?php
require('./classes/Maintenance.php');
$allCompanies = Maintenance::getMaintenanceCompanies();
$allModels = Maintenance::getMaintenanceCompaniesModels();
$fileUrl = getcwd() . DIRECTORY_SEPARATOR . 'maintenanceData.txt';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	if (file_exists($fileUrl)) {
		$file = fopen($fileUrl, 'r');
		$data = fread($file, filesize($fileUrl));
		$allFileMaintenances = array();
		foreach (explode(';', $data) as $currMaintenanceStr) {
			if (!$currMaintenanceStr) continue;
			$currMaintenanceDataArr = explode(',', $currMaintenanceStr);
			array_push($allFileMaintenances, new Maintenance($currMaintenanceDataArr[0], $currMaintenanceDataArr[1]));
		}
	}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$company = $_POST['selectedCompany'];
	$model = $_POST['selectedModel'];
	if (!empty($company)) {
		if (!empty($model)) {
			$modelArr = explode('--', $model);
			if (strtolower($modelArr[0]) === strtolower($company)) {
				$maintenance = new Maintenance($company, $modelArr[1]);
				// check is fils is not exists then create
				if (!file_exists($fileUrl)) {
					$file  = fopen($fileUrl, 'w');
					fclose($file);
				}
				$file = fopen($fileUrl, 'a');
				fwrite($file, $maintenance->getMaintenanceInString() . ';');
				fclose($file);
			} else {
				$message = "Selected company " . $company . ' has not model ' . $modelArr[1];
			}
		} else {
			$message = 'Enter valid model';
		}
	} else {
		$message = "Enter valid company";
	}
}
?>

<html>

<head>
	<title>Assignment 2 | 8</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class='bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500'>
	<?php require('./2.php'); ?>
	<div class='backdrop-blur-sm bg-white/50 w-96 mx-auto mt-16 rounded-md p-4'>
		<h2 class='text-lg font-medium mb-4'>Add Maintenance to file:</h2>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class='text-md flex flex-col gap-3 items-center'>
			<div class='w-10/12 flex items-center gap-3'>
				<label class='flex-1 text-center' for='factInput'>Select Company:</label>
				<select id='selectCompany' name='selectedCompany' class='py-1 px-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-transparent' required>
					<?php
					foreach (Maintenance::getMaintenanceCompanies() as  $currentCompany) {
						echo "<option value='$currentCompany'>" . ucfirst($currentCompany) . "</option>";
					}
					?>
				</select>
			</div>
			<div class='w-10/12 flex items-center gap-3'>
				<label class='flex-1 text-center' for='factInput'>Select Model:</label>
				<select id='selectModel' name='selectedModel' class='py-1 px-2 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-transparent' required>
					<?php
					foreach (Maintenance::getMaintenanceCompaniesModels() as $company => $currentModels) {
						foreach ($currentModels as $currModel) {
							echo "<option value='$company--$currModel'>" . ucfirst($currModel) . "</option>";
						}
					}
					?>
				</select>
			</div>
			<button class='bg-gradient-to-r from-green-400 to-blue-500 rounded-md px-4 py-2 text-white text-md focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-offset-transparent focus:ring-blue-500 active:ring-2 active:ring-offset-2 active:ring-offset-transparent active:ring-blue-500' type='submit'>
				save car maintenance
			</button>
		</form>
	</div>
	<?php
	if (isset($allFileMaintenances) && count($allFileMaintenances)) {
		echo "<div class='backdrop-blur-sm bg-white/50 w-6/12 flex items-center flex-col mx-auto mt-16 rounded-md p-4'>";
		echo "<h2 class='text-lg font-medium mb-4'>File maintenances:</h2>";
		echo "<table >
			<thead>
				<tr>
					<th class='px-2'>Company</th>
					<th class='px-2'>Model</th>
					<th class='px-2'>Monthly Maintenance</th>
					<th class='px-2'>Yearly Maintenance</th>
				</tr>
			</thead>
			<tbody>";
		foreach ($allFileMaintenances as $currMaintenance) {
			echo "<tr>
					<td class='px-2'>" . $currMaintenance->getCompany() . "</td>
					<td class='px-2'>" . $currMaintenance->getModel() . "</td>
					<td class='px-2'>Rs." . $currMaintenance->getMonthlyMaintenance() . "</td>
					<td class='px-2'>Rs." . $currMaintenance->getYearlyMaintenance() . "</td>
 		 		</tr>";
		}
		echo "	
			</tbody>
		</table>
		</div>";
	}
	?>

</body>

</html>