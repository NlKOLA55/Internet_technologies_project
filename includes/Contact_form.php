<?php
require_once 'dbh_inc.php';

$flag = [0 => "<p>Form submitted successfully!</p>"
        ,1 => "<p style=\"color: #ff0000;\">Enter valid Name</p>"
        ,2 => "<P style=\"color: #ff0000;\">Enter valid Email</p>"
        ,3 => "<p style=\"color: #ff0000;\">Pick a option</p>"
        ,4 => "<p style=\"color: #ff0000;\">Fill in text</p>"
        ,5 => "<p style=\"color: #ff0000;\">Error: " . "\$stmt->error" . "</p>"
        ,6 => "<p style=\"color: #ff0000;\">Only 3 complaint per day</p>"
        ];
$key = [];

// check if evriting is set
if (isset($_POST['sb']))
{
    $Name = null;
    if(isset($_POST['name']) && $_POST['name'] !== "")
        {
            $Name = htmlspecialchars($_POST['name']);
        }
    else  array_push($key, 1);
    $Contact = null;
    if(isset($_POST['contact']) && $_POST['contact'] !== "" && filter_var($_POST['contact'], FILTER_VALIDATE_EMAIL))
        {
            $Contact = htmlspecialchars($_POST['contact']);
        }
    else array_push($key, 2);

    $Option = null;
    if(isset($_POST['option']) && $_POST['option'] !== "")
        {
            $Option = htmlspecialchars($_POST['option']);
        }
    else array_push($key, 3);
    $Text = null;
    if(isset($_POST['text']) && $_POST['text'] !== "")
        {
            $Text = htmlspecialchars($_POST['text']);
        }
    else array_push($key, 4);
    
    // Check if all required fields are filled
    if ($Name && $Contact && $Option && $Text) {
        $sql = "SELECT E_mail FROM complaints WHERE E_mail = ? AND DATE(Date_Created) = CURRENT_DATE";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$Contact);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($Email,);

         // 3 poruke dozvoljeno nadan p emailu (pocinje od 0)
        if($stmt->num_rows < 3){
            // Prepare an SQL statement to prevent SQL injection
            $sql = "INSERT INTO complaints (FullName,E_mail, Tipe_Of, msg) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $Name, $Contact, $Option, $Text);

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
        $stmt->close();
    }
    // Close the database connection
    $conn->close();
}