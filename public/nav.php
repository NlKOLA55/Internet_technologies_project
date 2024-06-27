<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+FR+Moderne:wght@100..400&display=swap" rel="stylesheet">

<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['loggedin']))
        {$login = "<li> <a class='nav-link' href='../includes/logout.php'>LOGOUT</a> </li>";
         $home =  "<li> <a class='nav-link' href='admin.php'>HOME</a></li>";}
    else{
        $login = "<li> <a class='nav-link' href='admin_login.php'>ADMIN</a> </li>";
        $home = "<li> <a class='nav-link' href='index.php'>HOME</a></li>";}
?>
<nav class="navbar fw-bolder fs-3 bgi ">
    <div style="width: 300px; ">
        <ul style=" list-style: none;">

            <?php echo $home; ?>

            <li> <a class="nav-link" href="About_us.php">ABOUT US</a></li>

            <li> <a class="nav-link" href="Contact.php">CONTACT</a></li>

            <li> <a class="nav-link" href="Menu.php">MENU</a></li>

            <li> <a class="nav-link" href="Reservation.php">RESERVATION</a></li>

            <?php echo $login; ?>
        </ul>
    </div>

    <div class="fs-1 text-center seeinfoCard " style="margin-left: -300px;">
        <p>COZY   FOOD`S</p>
    </div>
    <div></div>
</nav>