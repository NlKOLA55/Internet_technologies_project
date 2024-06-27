<?php
require_once 'dbh_inc.php';

$flag = [0 => "<p>Form submitted successfully!</p>"
        ,1 => "<p style=\"color: #ff0000;\">Enter valid Name</p>"
        ,2 => "<P style=\"color: #ff0000;\">Enter valid Email</p>"
        ,3 => "<p style=\"color: #ff0000;\">Pick a Date</p>"
        ,4 => "<p style=\"color: #ff0000;\">Pick number of Seats</p>"
        ,5 => "<p style=\"color: #ff0000;\">Error: " . "\$stmt->error" . "</p>"
        ,6 => "<p style=\"color: #ff0000;\">Only 7 rezervation can be made</p>"
        ];
$key = [];
// check if evriting is set
if (isset($_POST['sb'])){
    $Name = null;
    if(isset($_POST['name']) && $_POST['name'] !== "") {
            $Name = htmlspecialchars($_POST['name']);
        }
    else  array_push($key, 1);

    $Email = null;
    if(isset($_POST['email']) && $_POST['email'] !== "" && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $Email = htmlspecialchars($_POST['email']);
        }
    else array_push($key, 2);

    $Date = null;
    if(isset($_POST['date']) && $_POST['email'] !== ""){
            $Date = $_POST['date'];
        }
    else array_push($key, 3);

    $Seats = null;
    if(isset($_POST['seats']) && $_POST['seats'] !== "") {
            $Seats = htmlspecialchars($_POST['seats']);
            $Seats = intval($Seats);
        }
    else array_push($key, 4);
    

    // Check if all required fields are filled
    if ($Name && $Email && $Date && $Seats) {
        $sql = "SELECT email FROM reservations WHERE email = ? AND DATE(Date_set) > CURRENT_DATE";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$Contact);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($Email,);
        
        if($stmt->num_rows < 7){
        // Prepare an SQL statement to prevent SQL injection
        $sql = "INSERT INTO reservations (FullName,email, Date_set, NumberOfSeats) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $Name, $Email, $Date, $Seats);

        // Execute the statement
        if ($stmt->execute()) {
            $key = [0];
        } else {
            array_push($key, 5);
            $flag[5] = "<p style=\"color: #ff0000;\">Error: " . $stmt->error . "</p>";
        }  
        }
        else{
            array_push($key, 6);
        }
    }
    // Close the database connection
    $conn->close();
}