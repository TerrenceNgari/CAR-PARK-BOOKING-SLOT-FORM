<?php
if (isset($_GET ['xyz'])){
    extract($_GET);
    // To start deleting , connect to the database
    $connect = mysqli_connect("localhost","root","","assignment");
    // Create the delete query
    $delete_query = "DELETE FROM `slots` WHERE id = $xyz";
    // Write the query to execute the delation
    $delete = mysqli_query($connect,$delete_query);
    // Write an if statement to check if deletion was successful
    if ($delete){
        // Redirect to view employees to check if deletion was completed
        header("location:view_employees.php");
    }else{
        echo "Deleting failed";
    }
}

