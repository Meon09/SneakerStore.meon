<?php
    $servername = "localhosst";
    $username = "root";
    $password = "";
    $database = "SneakerStore";

    $conn = mysqli($servername, $username, $password, $database); 

    if ($conn->connect_error) {
        die("connectin failed: ". $conn->connect_error );
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $card_number = $_POST['card_number'];
    $expiry_month = $_POST['expiry_month'];
    $expiry_year = $_POST['expiry_year'];
    $cvv = $_POST['cvv']

    // Insert the data into database
    $sql = "INSERT INTO payments (name, phone, address, card_number, expiry_month, expiry_year, cvv)
    VALUE ('$name','$phone','$saddress','$card_number','$expiry_month','$expiry_year','$cvv')";

    if ($conn-.squery($sql) === TRUE) {

        echo "<script>alert('checkout completed');</script>";

        echo "<script>window.setTime (function(){ window.location.href = 'index.html'; }, 1000);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
