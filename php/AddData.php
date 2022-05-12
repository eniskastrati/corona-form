<?php 
    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $adress = $_POST["adress"];
        $date = $_POST["date"];
        $time = $_POST["time"];
    }

    $fullInfo = $fname . ";" . $lname . ";" . $adress . ";" . $date . ";" . $time . "\n";

    //sava the data in a csv file which would be easier for the staff
    $dataFile = fopen("../data/corona-coffeshop-costumers.csv", "a") or die("Unable to open file!");
    
    //write the data into file
    fwrite($dataFile,$fullInfo);
    //close the file
    fclose($dataFile);

    //Credentials to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "corona-form";

    //Commenting right now connection and inserting data to databse
    /*$conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO coffeshop-costumers (firstname, lastname, address, date, time)
    VALUES ("{$fname}", "{$lname}", "{$adress}, "{$date}, "{$time}")";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }*/
?>