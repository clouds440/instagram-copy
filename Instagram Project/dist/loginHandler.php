<?php
    require_once "dbConnection.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqlSelect = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sqlSelect);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        // handle session variables
        session_start();
        $_SESSION['userId'] = $row["userId"];
        $_SESSION['name'] = $row["fname"] . " " . $row["lname"];
        $_SESSION['imgName'] = $row["profilepic"];
        
        // split the email at "@" to get the username
        $usernameArray = explode("@", $row['email']);
        $_SESSION['username'] = $usernameArray[0];

        // redirect user to the main page, logged in
        header('Location: index.php');
        exit();
    }

    else {
        echo "Email or Password is incorrect. Try Again!";
        }
    mysqli_close($conn);
?>