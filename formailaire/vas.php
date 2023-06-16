<?php
$server = "localhost";
$user = "root";
$pswr = "";
$database = "voyage";
$mysqli = new mysqli($server, $user, $pswr, $database);

$city = $_POST['ville'];
$country = $_POST['pay'];
$continent = $_POST['continent'];
$description = $_POST['description'];
$sites = $_POST['sites'];
$hotels = $_POST['hotels'];
$restaurants = $_POST['restaurants'];
$train = $_POST['train-stations'];
$airports = $_POST['airports'];

// Handle file upload
$upload_dir = "uploads/";
$uploaded_files = array();

if (!empty($_FILES['photos']['name'])) {
  foreach ($_FILES['photos']['tmp_name'] as $key => $tmp_name) {
    $file_name = $_FILES['photos']['name'][$key];
    $file_tmp = $_FILES['photos']['tmp_name'][$key];
    $file_destination = $upload_dir . $file_name;

    if (move_uploaded_file($file_tmp, $file_destination)) {
      $uploaded_files[] = $file_name;
    }
  }
}

// Insert data into the database
$query = "INSERT INTO continent (nomcon) VALUES (?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $continent);
$stmt->execute();
$continent_id = $mysqli->insert_id;
$stmt->close();

$query = "INSERT INTO pays (nompay, idcon) VALUES (?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("si", $country, $continent_id);
$stmt->execute();
$country_id = $mysqli->insert_id;
$stmt->close();

$query = "INSERT INTO ville (nomvil, descvil, idpay) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ssi", $city, $description, $country_id);
$stmt->execute();
$ville_id = $mysqli->insert_id;
$stmt->close();

foreach ($uploaded_files as $file) {
  $query = "INSERT INTO site (nomsit, cheminphoto, idvil) VALUES (?, ?, ?)";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("ssi", $sites, $file, $ville_id);
  $stmt->execute();
  $stmt->close();
}

// Close the database connection
$mysqli->close();
?>
