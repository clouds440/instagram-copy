<?php
    require_once "dbConnection.php";
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['countryCode'] . $_POST['phone'];
    $password = $_POST['password'];

    $sqlSelect = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sqlSelect);
    if ($result->num_rows > 0) {
            echo "This email is already registered";
            return;
    }

    else {
        // Check if the image file is selected, then store it in the uploads directory
        if (isset($_FILES['fileUpload'])) {
            // Handle file upload
            $imgName = $_FILES['fileUpload']['name'];
            $imgTmpName = $_FILES['fileUpload']['tmp_name'];
            $error = $_FILES['fileUpload']['error'];
        
            // Check for upload errors
            if ($error !== UPLOAD_ERR_OK) {
                die("Upload failed with error code " . $error);
            }

            $imgExtension = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
            $newImgName = uniqid("IMG-", true) . '.' . $imgExtension;
        
            $imgUploadPath = 'uploads/' . $newImgName;
        
            move_uploaded_file($imgTmpName, $imgUploadPath);
        }

        // Write the SQL query to insert the data into the users table
        $sql = "INSERT INTO users (fname, lname, email, phone, password, profilepic) VALUES ('$fname', '$lname', '$email', '$phone', '$password', '$newImgName')";

        // Execute the query using the mysqli_query function
        if (mysqli_query($conn, $sql)) {

        // start a session with the user id
        session_start();
        $sqlSession = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sqlSession);
        $row = mysqli_fetch_assoc($result);

        // handle session variables
        $_SESSION['userId'] = $row["userId"];
        $_SESSION['name'] = $row["fname"] . " " . $row["lname"];
        // split the email at "@" to get the username
        $usernameArray = explode("@", $row['email']);
        $_SESSION['username'] = $usernameArray[0];

        // redirect user to the main page, logged in
        header('refresh:3;url=login.php');
        echo "<h1>Profile Created Successfully. Please login to continue. Redirecting...<h1>";
        exit();
        }

        else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>