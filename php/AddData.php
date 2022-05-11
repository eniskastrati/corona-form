<?php 
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $adress = $_POST['adress'];
        $date = $_POST['date'];
        $time = $_POST['time'];
    }

    $fullInfo = "Your Information :'{$fname}', '{$lname}', '{$adress}', '{$date}', '{$time}'";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "corona-form"

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

?>