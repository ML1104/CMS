<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cms_ml";

// Create connection
$conn = new mysqli('127.0.0.1', 'root', '', 'cms_ml');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT title FROM models';
$result = $conn->query($sql);

if ($result->num_rows > 3 ) {
    return;
}else{
    $sql = "INSERT INTO models (title, description, image, category_id, artist, price, age, upvotes)
    VALUES ('Cover', 'Cover Model', 'https://images.unsplash.com/photo-1504532105049-367430c38ba7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fc4d1d388c6158e94b2b2e23a43a4496&auto=format&fit=crop&w=1350&q=80', '3', 'giuseppe rumerio', '100', 'unknown age', '4')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
};