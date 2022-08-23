<?php

$allCities = array(
    'surat' => array('ahmedabad' => 265, 'vadodara' => 155, 'rajkot' => 440, 'bhavnagar' => 360,),
    'ahmedabad' => array('surat' => 265, 'vadodara' => 110, 'rajkot' => 215, 'bhavnagar' => 170,),
    'vadodara' => array('ahmedabad' => 110, 'surat' => 155, 'rajkot' => 280, 'bhavnagar' => 200,),
    'rajkot' => array('ahmedabad' => 215, 'vadodara' => 280, 'surat' => 440, 'bhavnagar' => 175,),
    'bhavnagar' => array('ahmedabad' => 170, 'vadodara' => 200, 'rajkot' => 175, 'surat' => 360,),
);

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $source = $_POST['source'];
    $destination = $_POST['destination'];

    if ($source !== 'none' && $destination !== 'none' && $source !== $destination) {
        $distance = $allCities[$source][$destination];
        $message = "Distance between $source and $destination is $distance Km";
    } else {
        $error = "Please select city and source city and destination city must not be same";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Assignment-1 | 11</title>
</head>

<body class="bg-gradient-to-r from-green-400 to-blue-500 font-gray-900">
    <h1 class="text-white font-bold text-center text-4xl mt-4">
        Calculate Distance
    </h1>
    <div class="
        bg-white
        backdrop-filter backdrop-blur-xl
        bg-opacity-40
        shadow-md
        mx-auto
        mt-8
        flex flex-col
        items-center
        p-4
        gap-3
        w-72
        rounded-lg
        border-2 border-white border-opacity-50
      ">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="flex flex-col items-start gap-3 w-full" method="POST">
            <div class="flex flex-col items-start gap-3 w-full">
                <label class="font-semibold" for="source">Source</label>
                <select class="
              w-full
              rounded-md
              px-4
              py-2
              focus:outline-none focus:ring-2 focus:ring-pink-400
              text-md
              font-medium
            " name="source" id="source">
                    <option value="none">Select Source City</option>
                    <?php
                    foreach (array_keys($allCities) as $currentCity) {
                        echo "<option value='$currentCity'>" . ucfirst($currentCity)  . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="flex flex-col items-start gap-3 w-full">
                <label class="font-semibold" for="destination">Destination</label>
                <select class="
              w-full
              rounded-md
              px-4
              py-2
              focus:outline-none focus:ring-2 focus:ring-pink-400
              text-md
              font-medium
            " name="destination" id="destination">
                    <option value="none">Select Destination City</option>
                    <?php
                    foreach (array_keys($allCities) as $currentCity) {
                        echo "<option value='$currentCity'>" . ucfirst($currentCity)  . "</option>";
                    }
                    ?>
                </select>
            </div>

            <button class="
            px-2
            py-1
            rounded-md
            bg-gradient-to-br
            from-pink-500
            to-yellow-500
            text-white
            shadow-md
            transition
            duration-200
            transform
            hover:scale-95 hover:opacity-80 hover:shadow-none
            focus:outline-none focus:ring-2 focus:ring-yellow-400
          " type="submit">
                Calculate Distance
            </button>
        </form>
    </div>
    <?php
    if (isset($error) || isset($message)) {
        echo '<div class="
            bg-white
            backdrop-filter backdrop-blur-xl
            bg-opacity-40
            shadow-md
            mx-auto
            mt-8
            flex flex-col
            items-center
            p-4
            gap-3
            w-72
            rounded-lg
            border-2 border-white border-opacity-50">';
        if (isset($error) && $error) {
            echo "<h2 class='text-md text-red-900 font-medium'>$error</h2>";
        }
        if (isset($message) && $message) {
            echo "<h2 class='text-md text-green-900 font-medium'>$message</h2>";
        }
        echo '</div>';
    } ?>
</body>

</html>