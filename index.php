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
                <form method="POST" action="search.php">
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

                $sql = $conn->prepare("SELECT * FROM book");
                $sql->execute();

                $result = $sql->get_result();

                if($result->num_rows > 0) {

                    $rows = $result->fetch_all(MYSQLI_ASSOC);

                    foreach($rows as $row) {

                        echo '
                        
                        <tr>
                        <td style="background-color: #000; color: #fff;">' . $row["id"] . '</td>
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
                            <form method="POST" action="update.php">
                                <button type="submit">Edit</button>
                                <input type="hidden" name="update" value="' . $row["id"] . '"> 
                            </form>
                            
                        </td>
                    </tr>
                        
                        
                        ';

                    }

                }
                
                
                
                ?>
                    
                   
                </tbody>
            </table>
          
        </div>
    </div>
</body>

<!-- JS links -->

<script src="script/script.js"></script>

</html>
