<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $deleteId = $_POST["delete"];

    $sql = $conn->prepare("DELETE FROM book WHERE id = ?");
    $sql->bind_param("i", $deleteId);
    $sql->execute();
    $sql->close();
}


$conn->close();


?>