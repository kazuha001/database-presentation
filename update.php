<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Books Reporting</title>

    <!-- CSS links -->

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container">
        <div class="tables">
            <h1>BOOK's Library</h1>
           
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "books_db";

                $conn = new mysqli($servername, $username, $password, $dbname);


                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $update = $_POST["update"];

                    $sql = $conn->prepare("SELECT * FROM book WHERE id = ?");
                    $sql->bind_param("i", $update);
                    $sql->execute();
    
                    $result = $sql->get_result();
    
                    if($result->num_rows > 0) {
    
                        while($row = $result->fetch_assoc()) {
    
                            echo '
                            
                    <div class="newBooks">
                    <h1>Edit Books ID Number ' . $row["id"] . '</h1>
                    <form id="update">
                    <label for="title">Title: <input type="text" id="title" name="title" placeholder="Enter Title" required></label>
                    
                    <label for="author">Author: <input type="text" id="author" name="author" placeholder="Author Name" required></label>
                    
                    <label for="genre">Genre: <input type="text" name="genre" id="genre" placeholder="Enter Genre" required></label>

                    <label for="publisher">Publisher: <input type="text" id="publisher" name="publisher" placeholder="Enter Publisher" required></label>

                    <label for="publisherAddress">Publisher Address: <input type="text" id="publisherAddress" name="publisherAddress" placeholder="Enter Publisher Address" required></label>

                    <label for="stock">Stocks: <input type="number" id="stock" name="stock" placeholder="Enter Quantity" required></label>

                    <div class="buttons">
                        <button type="submit">Submit</button>
                    </div>
                    
                    <a href="index.html">About 1st Normal Form and 2nd Normal Form</a>
                    <input type="hidden" name="updateS1" value="' . $row["id"] . '" required>
                    </form>
                    </div>
                            
                            ';
    
                        }

                        
    
                    } 

                }
                
                
                ?>
                    
                  
            
            
        </div>
    </div>
</body>

<!-- JS links -->

<script src="script/script1.js"></script>

</html>
