<?php
$servername = '127.0.0.1: 3308';
$username = 'root';
$password = '';
$dbname = 'kensap_classes';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//data from kensap class of 2017
echo ("<strong>Kensap class of 2017 </strong><br>");
$sql = "SELECT firstname, lastname FROM kensap_2017";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

//class of 2018
echo ("<br>");
echo ("<strong>Kensap class of 2018 </strong><br>");
$sql = "SELECT firstname, lastname FROM kensap_2018";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

//class of 2019
echo ("<br>");
echo ("<strong>Kensap class of 2019 </strong><br>");
$sql = "SELECT firstname, lastname FROM kensap_2019";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

//class of 2020
echo ("<br>");
echo ("<strong>Kensap class of 2020 </strong><br>");
$sql = "SELECT firstname, lastname FROM kensap_2020";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>