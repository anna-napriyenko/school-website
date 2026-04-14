<?php
    include 'connect.php';

    if($_SERVER["REQUEST METHOD"] == "POST") {
        $userlogin = $_POST['userlogin'];
        $email = $_POST['email'];
        $userpassword = $_POST['userpassword'];
        $gender = $_POST['gender'];
        $bachelorprogram = $_POST['bachelorprogram'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        if (empty($userlogin) || empty($email) || empty($userpassword) || empty($gender) || empty($bachelorprogram) || empty($age) || empty($country)) {
            die("Please fill all required fields!");
        }
        $adduser = mysqli_query($conn, "INSERT INTO users (userlogin, email, userpassword, gender, bachelorprogram, age, country) VALUES ('$userlogin', '$email', '$userpassword', '$gender', '$bachelorprogram', '$age', '$country')");
        if ($adduser) {
            echo "Registration successful!";
        } else {
            echo "Error";
        }
    }

    $search_user = mysqli_query($conn, "SELECT * FROM users WHERE userlogin = '$userlogin'");
    
    $row = mysqli_fetch_array($search_user);
    if (!empty($row['userID'])) {
        echo "Login already exists.";
        exit;
    }

?>
