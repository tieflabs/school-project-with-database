<?php
// Check if the search query is set
if (isset($_GET['search'])) {
    // Retrieve the search query from the URL
    $search_query = $_GET['search'];

    // Connect to your database (replace placeholders with your actual database credentials)
    $host = 'localhost';
    $username = 'username';
    $password = 'password_hash';
    $database = 'dbname';

    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform a basic search query (replace "products" with your actual table name)
    $sql = "SELECT * FROM products WHERE product_name LIKE '%$search_query%'";

    $result = $conn->query($sql);

    // Check if any results were found
    if ($result->num_rows > 0) {
        echo "<h2>Search Results</h2>";
        echo "<ul>";
        // Output each result
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['product_name'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No results found.";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "No search query provided.";
}
?>
