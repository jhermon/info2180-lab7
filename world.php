<?php

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'world';
$_country = $_GET['country'];
$all_countires = $_GET['all'];

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$stmt = $conn->query("SELECT * FROM _country");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($all =='true'){
    $stmt = $conn->query("SELECT * FROM countries");
    
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<ul>';
    foreach ($results as $row) {
      echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';
}

else if ($_country !== ""){
    $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%';");
    
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<ul>';
    foreach ($results as $row) {
      echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';
}
