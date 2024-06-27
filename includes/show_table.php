<?php
require_once 'dbh_inc.php';
$complaints_display =true;
$reservations_display =true;
$complaints_table ="";
$reservations_table ="";

//SHOW TABLE //
if (isset($_GET['complaints'])){
    $complaints_display =false;
    $complaints_table = showTableComplaints ("",$conn);
}
if (isset($_GET['reservations'])){
    $reservations_display =false;
    $reservations_table = showTableReservations ("",$conn);
}

if (isset($_GET['un_complaints'])){
    $reservations_display =true;
    $complaints_table ="";
}

if (isset($_GET['un_reservations'])){
    $complaints_display =true;
    $reservations_table ="";
}

    // DELETE //
if (isset($_POST["Delete-c"])) {
    $User_id = $_POST["user_id"];

    $sql = "DELETE FROM complaints WHERE Complaint_Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $User_id);
    $stmt->execute();

    $complaints_table = showTableComplaints ("",$conn);
}

if (isset($_POST["Delete-r"])) {
    $User_id = $_POST["user_id"];

    $sql = "DELETE FROM reservations WHERE Reservation_Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $User_id);
    $stmt->execute();

    $reservations_table = showTableReservations ("",$conn);
}



//FUNCTIONS FOR SHOW TABLE //
function showTableComplaints ($complaints_table, $conn): string{
    $sql = "SELECT Complaint_Id, E_mail,FullName, Tipe_Of, Msg, Date_Created FROM complaints";
    $stmt = $conn->query($sql);

    $complaints_table .= "<table>";
    $complaints_table .= "<tr><th>ID</th><th>Email</th><th>Full Name</th><th>Complaint</th><th>Msg</th><th>Created</th><th>Action</th></tr>";

    while ($row = $stmt->fetch_assoc()) {
        $complaints_table .= "<tr>";
        $complaints_table .= "<td>" . $row['Complaint_Id'] . "</td>";
        $complaints_table .= "<td>" . $row['E_mail'] . "</td>";
        $complaints_table .= "<td>" . $row['FullName'] . "</td>";
        $complaints_table .= "<td>" . $row['Tipe_Of'] . "</td>";
        $complaints_table .= "<td>" . $row['Msg'] . "</td>";
        $complaints_table .= "<td>" . $row['Date_Created'] . "</td>";
        $complaints_table .= "<td><form method='post' action=''>";
        $complaints_table .= "<input type='hidden' name='user_id' value='" . $row['Complaint_Id'] . "'>";
        $complaints_table .= "<input type='submit' value='Delete' name='Delete-c' id='Delete-c'  class=\"delete-button\">";
        $complaints_table .= "</form></td>";
        $complaints_table .= "</tr>";
    }
    $complaints_table .= "</table>";
    return $complaints_table;
}
function showTableReservations ($reservations_table, $conn): string {

    $sql = "SELECT Reservation_Id, email,FullName, NumberOfSeats, Date_Created, Date_set FROM reservations";
    $stmt = $conn->query($sql);

    $reservations_table .= "<table>";
    $reservations_table .= "<tr><th>ID</th><th>E_mail</th><th>FullName</th><th>Seats</th><th>Created</th><th>set</th><th>Action</th></tr>";
    
    while ($row = $stmt->fetch_assoc()) {
        $reservations_table .= "<tr>";
        $reservations_table .= "<td>" . $row['Reservation_Id'] . "</td>";
        $reservations_table .= "<td>" . $row['email'] . "</td>";
        $reservations_table .= "<td>" . $row['FullName'] . "</td>";
        $reservations_table .= "<td>" . $row['NumberOfSeats'] . "</td>";
        $reservations_table .= "<td>" . $row['Date_Created'] . "</td>";
        $reservations_table .= "<td>" . $row['Date_set'] . "</td>";
        $reservations_table .= "<td><form method='post' action=''>";
        $reservations_table .= "<input type='hidden' name='user_id' value='" . $row['Reservation_Id'] . "'>";
        $reservations_table .= "<input type='submit' value='Delete' name='Delete-r' id='Delete-r' class=\"delete-button\">";
        $reservations_table .= "</form></td>";
        $reservations_table .= "</tr>";
    }
    $reservations_table .= "</table>";
    return $reservations_table;
}