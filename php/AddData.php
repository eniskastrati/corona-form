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
    $dbname = "corona-form";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO coffeshop-costumers (firstname, lastname, address, date, time)
    VALUES ('{$fname}', '{$lname}', '{$adress}, '{$date}, '{$time}')";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>