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

            <div class="search_box">
                <form method="POST" action="">
                    <input type="number" id="search" name="search" placeholder="Search Books I.D.">
                    <button type="submit">Search</button>
                </form>
            </div>
           
            <table>
                <thead>
                    <th width="70">Books ID</th>
                    <th width="120">Title</th>
                    <th width="120">Author</th>
                    <th>Genre</th>
                    <th>Publisher</th>
                    <th>Publisher Address</th>
                    <th width="80">Stock Quantity</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "books_db";

                $conn = new mysqli($servername, $username, $password, $dbname);


                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $search = $_POST["search"];

                    $sql = $conn->prepare("SELECT * FROM book WHERE id = ?");
                    $sql->bind_param("i", $search);
                    $sql->execute();
    
                    $result = $sql->get_result();
    
                    if($result->num_rows > 0) {
    
                        while($row = $result->fetch_assoc()) {
    
                            echo '
                            
                            <tr>
                            <td>' . $row["id"] . '</td>
                            <td>' . $row["title"] . '</td>
                            <td>' . $row["author"] . '</td>
                            <td>' . $row["genre"] . '</td>
                            <td>' . $row["publisher"] . '</td>
                            <td>' . $row["publisherAddress"] . '</td>
                            <td>' . $row["stock"] . '</td>
                            <td>
                                <form id="delete">
                                    <button type="submit">Delete</button>
                                    <input type="hidden" name="delete" value="' . $row["id"] . '"> 
                                </form>
                                <form method="POST" action="">
                                    <button type="submit">Update</button>
                                    <input type="hidden" name="delete" value="' . $row["id"] . '"> 
                                </form>
                                
                            </td>
                        </tr>
                            
                            
                            ';
    
                        }

                        
    
                    } else{
                        echo '
                            <h2>No Books are Existing with this ID</h2>
                        ';
                    }

                }

               
                
                
                
                ?>
                    
                    </tbody>
                
            </table>
            <div class="newBooks">
                <h1>Add Another Books</h1>
                <form id="submit">
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
                </form>
            </div>
        </div>
    </div>
</body>

<!-- JS links -->

<script src="script/script.js"></script>

</html>
