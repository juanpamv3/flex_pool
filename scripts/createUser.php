<?php

$formData = $_POST["formData"];
$availability = [];
$data = [];
$agency = [];
$category;
$name;
$skills;
$country;
$role;

for ($i=1; $i <= 20; $i++) {
	$availability[$i] = $_POST[$i];
}

$data = json_decode($formData);

foreach ($data as $key => $object) {
    switch ($object->name) {
    	case 'name':
    		$name = $object->value;
    		break;
    	case 'country':
    		$country = $object->value;
    		break;
    	case 'category':
    		$category = $object->value;
    		break;
    	case 'role':
    		$role = $object->value;
    		break;
    	case 'skills':
    		$skills = $object->value;
    		break;
    	case 'agency1':
    		array_push($agency, $object->value);
    		break;
    	case 'agency2':
    		array_push($agency, $object->value);
    		break;
    	case 'agency3':
    		array_push($agency, $object->value);
    		break;
    	case 'agency4':
    		array_push($agency, $object->value);
    		break;
    }
}

$avDecoded = json_encode($availability);
$agenDecoded = json_encode($agency);

$mysqli = new mysqli("localhost", "root", "root", "flex_pool_db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
  $sql = "INSERT INTO profiles (name, role, country,category, skills, availability, agency) VALUES ('$name', '$role', '$country','$category', '$skills', '$avDecoded', '$agenDecoded')";
  if (mysqli_query($mysqli, $sql)) {
      header('Location: ../index.html');
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  }
}
?>
