<?php
require_once 'dbh_inc.php';
$flag = [0 => "<p>Form submitted successfully!</p>"
        ,1 => "<p style=\"color: #ff0000;\">enter password</p>"
        ,2 => "<P style=\"color: #ff0000;\">Enter valid Email</p>"
        ,3 => "<p style=\"color: #ff0000;\">Incoract password</p>"
        ,4 => "<p style=\"color: #ff0000;\">Email does not exist</p>"
        ];
$key = [];

// check if evriting is set
if (isset($_POST['sb'])){

    $Email = null;
    if(isset($_POST['email']) && $_POST['email'] !== "" && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $Email = htmlspecialchars($_POST['email']);
        }
    else array_push($key, 2);

    $Pwd = null;
    if(isset($_POST['pwd']) && $_POST['pwd'] !== "") {
                    
            $Pwd = htmlspecialchars($_POST['pwd']);
        }
    else  array_push($key, 1);


    if ($Pwd && $Email) {
        $sql = "SELECT E_mail, Pwd FROM admins WHERE E_mail = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $Email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($Email, $hashed_pwd);
        
        if ($stmt->num_rows > 0) {
            $stmt->fetch();

            // Verify the password
            if (password_verify($Pwd, $hashed_pwd)) {
                array_push($key, 0);
                 session_start();
                 $_SESSION['loggedin'] = true;
                 $_SESSION['email'] = $Email;
                  header("Location: admin.php");
                  exit();
    
            } else {
                array_push($key, 3);
            }
        } else {
            array_push($key, 4);
        }
        // Close the statement
        $stmt->close();
    }
    // Close the database connection
    $conn->close();
}