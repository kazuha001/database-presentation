<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "books_db";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    echo "Error";
} else{
    echo "Connected Successfully";
}

if ($_SERVER["REQUEST_METHOD"] = "POST") {

$titleId = $_POST["title"];
$authorId = $_POST["author"];
$genreId = $_POST["genre"];
$publisherId = $_POST["publisher"];
$publisherAddressId = $_POST["publisherAddress"];
$stockId = $_POST["stock"];

$sql = $conn->prepare("INSERT INTO book (title, author, genre, publisher, publisherAddress, stock)
VALUES (?, ?, ?, ?, ?, ?)");

$sql->bind_param("ssssss", $titleId, $authorId, $genreId, $publisherId, $publisherAddressId, $stockId);

$sql->execute();

$sql->close();

}

$conn->close();



?>