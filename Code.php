<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project01";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

// Retrieve the values from session variables
$caste = $_SESSION['caste'];
$occupation = $_SESSION['occupation'];
$age = $_SESSION['age'];
$income = $_SESSION['income'];

// SQL query
$sql = "SELECT t1.scheme_name, t1.description, t1.url
        FROM all_scheme t1
        WHERE t1.age >= '$age' AND t1.caste = '$caste' AND t1.occupation = '$occupation' AND t1.income >= '$income'";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    echo "<style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            
            th, td {
                padding: 10px;
                text-align: left;
                border: 1px solid #ddd;
            }
            
            th {
                background-color: #f2f2f2;
            }
            
            tr:nth-child(even) {
                background-color: #f5f5f5;
            }
            
            a {
                color: #0000FF;
                text-decoration: none;
            }
        </style>";
    // Create an HTML table
    echo "<table>
            <tr>
                <th>Scheme Name</th>
                <th>Description</th>
                <th>URL</th>
            </tr>";

    // Fetch and display the records
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['scheme_name'] . "</td>
                <td>" . $row['description'] . "</td>
                <td><a href='" . $row['url'] . "'>" . $row['url'] . "</a></td>
              </tr>";
    }

    // Close the HTML table
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>
