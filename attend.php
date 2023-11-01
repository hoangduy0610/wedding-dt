<?php
$mysqli = mysqli_connect("localhost", "root", "", "attendance");
if (mysqli_connect_errno($mysqli)) {
    echo "-1";
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $guest_of = intval($_POST['guest_of']);
    $ticket_num = intval($_POST['ticket_num']);
    $confirm = intval($_POST['confirm']);
    $guest_num = intval($_POST['guest_num']);
    $query = "INSERT INTO `data`(`name`, `guest_of`, `ticket_num`, `confirm`, `guest_num`) VALUES ('$name', $guest_of, $ticket_num, $confirm, $guest_num)";
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        echo "1";
    } else {
        echo "-1";
    }
}
// https://amused-schooling.000webhostapp.com/attend.php
?>