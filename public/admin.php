<?php
session_start();

// Check if the user is logged in and if not redirect to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
     header("Location: admin_login.php");
     exit();
}

require_once '../includes/show_table.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../css/essentials.css" />
    <style>
        /* TABELA*/
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th {
        background-color: #bbb;
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    td {
        border: 1px solid #ccc;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #bbb;
    }
    tr:nth-child(odd) {
        background-color: #d8d8d8;
    }
    
    </style>
</head>
<body>
<?php
include "nav.php";
?>

    <h2 style="text-align: center;color: #fff; ">Welcom <?php echo $_SESSION['email']; ?></h2>
    <div style="padding: 0 50px 0 50px;">
        <div class="row justify-content-center">
            <div class="row">
                <form class="col-1" style="display:<?php echo ($complaints_display)? "block": "none";?>">

                    <input type="submit" value="show complaints" name="complaints" id="complaints">
                </form>
                <form class="col-1" style="display:<?php echo (!$complaints_display)? "block":"none";?>">

                    <input type="submit" value="hide complaints" name="un_complaints" id="un_complaints">
                </form>

                <form class="col-1" style="display: <?php echo($reservations_display)? "block":"none"; ?>">

                    <input type="submit" value="show reservations" name="reservations" id="reservations">
                </form>

                <form class="col-1" style="display: <?php echo(!$reservations_display)? "block":"none"; ?>">

                    <input type="submit" value="hide reservations" name="un_reservations" id="un_reservations">
                    <?php echo $reservations_display?>
                </form>
            </div>
            <div class="" style="overflow: auto;">
                <?php echo $complaints_table;?>
            </div>
            <div class="">
                <?php echo $reservations_table;?>
            </div>
        </div>
    </div>
</body>
</html>