<?php   

$servername  = "localhost";
$username  = "root";
$password  = "";
$database  = "ajaxpractices";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$query = mysqli_query($conn, $sql) OR die("SQL query failed");

//variable declared 
$output = "";

if (mysqli_num_rows($query) > 0) {
    $output = '<div id="table-data" class="mt-3">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>';

    while ($row = mysqli_fetch_assoc($query)) {
        $output .= '<tr>
                        <td>' . $row["id"] . '</td>
                        <td>' . $row["first_name"] . '</td>
                        <td>' . $row["last_name"] . '</td>
                    </tr>';
    }

    $output .= '</table></div>';
    mysqli_close($conn);
    echo $output;
} else {
    // No data found
    $output = '<div id="table-data" class="mt-3">
                <p>No data found</p>
               </div>';
}




