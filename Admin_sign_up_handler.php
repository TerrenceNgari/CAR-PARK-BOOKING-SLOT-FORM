<?php

if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connection = mysqli_connect("localhost","root","","assignment");
    if ($connection) {
        $insert = "INSERT INTO `lecturer`(`name`, `email`, `password`) VALUES ('$Username','$email','$password')";
        $save = mysqli_query($connection,$insert);
        if ($save) {
            echo '<script>alert("Saved Successfully. <br> Now sign up")</script>';
            header('location:index.html');
        } else {
            echo "failed";
        }
    }else {
        echo "Failed. We gonna find some way :)";
    }
}
?>


