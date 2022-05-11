<?php 
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $adress = $_POST['adress'];
        $date = $_POST['date'];
        $time = $_POST['time'];
    }

    $fullInfo = "Your Information :'{$fname}', '{$lname}', '{$adress}', '{$date}', '{$time}'";
    echo $fullInfo
?>