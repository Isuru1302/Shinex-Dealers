<?php
    $con = mysqli_connect("localhost","storeadmin" ,"12345","store");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>