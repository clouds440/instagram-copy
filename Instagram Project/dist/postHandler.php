<?php
    require_once "dbConnection.php";

    if (isset($_FILES['postUpload'])) {
        // Handle file upload
        $imgName = $_FILES['postUpload']['name'];
        $imgTmpName = $_FILES['postUpload']['tmp_name'];
        $error = $_FILES['postUpload']['error'];
    
        // Check for upload errors
        if ($error !== UPLOAD_ERR_OK) {
            die("Upload failed with error code " . $error);
        }

        $imgExtension = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
        $newImgName = uniqid("IMG-", true) . '.' . $imgExtension;
    
        $imgUploadPath = 'uploads/' . $newImgName;
    
        move_uploaded_file($imgTmpName, $imgUploadPath);
    }
    session_start();
    $userId = $_SESSION['userId'];
    $description = $_POST['postDescription'];
    // Write the SQL query to insert the data into the users table
    $sql = "INSERT INTO posts (userId, picture, description) VALUES ('$userId', '$newImgName', '$description')";

    // Execute the query using the mysqli_query function
    if (mysqli_query($conn, $sql)) {

    header('refresh:0.5;url=index.php');
    echo "<h1>Posted Successfully. Redirecting...<h1>";
    exit();
    }

    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>