<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Add Another Books</title>

    <!-- CSS links -->

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container">
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
                
            </form>
        </div>
    </div>
    <footer>
        <div class="footer_last">
            <p>Educational Purposes Only</p>
        </div>
    </footer>
</body>

<script src="script/script.js"></script>


</html>