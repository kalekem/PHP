<?php
$servername = "127.0.0.1: 3308";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Simple', 'Simon', 'simon@example.com'),
		('Titus', 'Tukei', 'tukei@example.com'),
		('John', 'Karang', 'garang@example.com'),
		('Naomi', 'Kibolo', 'naomi@example.com'),
		('Orangee', 'Shamba', 'shamba@example.com'),
		('Maji', 'Marefu', 'marefu@example.com'),
		('Mahindi', 'Mlimani', 'mahindi@example.com'),
		('Muzik', 'Kaoko', 'kaoko@example.com'),
		('Mayai', 'Waziri', 'waziri@example.com'),
		('Kisima', 'Cha Kiningi', 'kiningi@example.com'),
		('River', 'Between Sides', 'river@example.com'),
		('Kanji', 'Dj King', 'dj@example.com')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>