<?php
    require_once "../dbConnection.php";

    $userId = $_SESSION['userId'];
    $pictureArray = array();
    $descriptionArray = array();

    $sqlSelect = "SELECT * FROM posts WHERE userId = '$userId'";
    if($result = mysqli_query($conn, $sqlSelect)) {
        if(mysqli_num_rows($result) > 0) {
            while($row = $result->fetch_assoc()) {
                $pictureArray[] = $row['picture'];
                $descriptionArray[] = $row['description'];
              }
        }
    }

    else {
        mysqli_close($conn);
    }
?>