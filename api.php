<?php
$con = mysqli_connect("localhost", "root", "", "hamza");
$response = array();
if ($con) {
    $sql = "SELECT * FROM crud";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Content-Type: application/JSON");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['email'] = $row['email'];
            $response[$i]['password'] = $row['password'];
            $response[$i]['user_type'] = $row['user_type'];
            $i++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} else {
    echo "Database connection Failed";
}
?>
