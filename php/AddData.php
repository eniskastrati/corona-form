<?php 
    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $adress = $_POST["adress"];
        $date = $_POST["date"];
        $time = $_POST["time"];
    }else{
        echo "No Data Provided from Form";
    }

    //csv format
    $fullInfoData = $fname . ";" . $lname . ";" . $email . ";". $adress . ";" . $date . ";" . $time . "\n";
    $fullInfo = $fname . $lname . $email . $adress . $date . $time;


    //sava the data in a csv file which would be easier for the staff
    //$dataFile = fopen("../data/corona-coffeshop-costumers.csv", "a") or die("Unable to open file!");
    
    //write the data into file
    //fwrite($dataFile,$fullInfo);
    //close the file
    //fclose($dataFile);

    //Credentials to database
    $servername = "localhost";
    $username = "root";
    $dbname = "corona-form";
    $password = "";

    // databse connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO costumer-data (firstName, lastName, email, adress, date, time, costumerTrack)
    VALUES ($fullInfo[0], $fullInfo[1],$fullInfo[2], $fullInfo[3], $fullInfo[4], $fullInfo[5], 'noInfo');

    if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>