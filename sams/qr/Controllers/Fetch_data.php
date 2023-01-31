<?php

function get_attendence_today(){
    include 'Models/Connection.php';

    // $conn=mysqli_connect("localhost","root","","sams");
    // $conn->query("SET GLOBAL time_zone = 'Asia/Kolkata'");
    // $conn->query("SET time_zone = '+05:30'");
    // $conn->query("SET @@session.time_zone = '+05:30'");

    $sql = "SELECT * FROM att INNER JOIN student ON att.id = student.id WHERE DATE(record_date) =  CURDATE()  ORDER BY At_id DESC";
    $result = $conn->query($sql);

    $all_rows = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $all_rows[] = $row;
        }
    }

    return $all_rows;
}


function get_late_today(){
    include 'Models/Connection.php';

    // $conn=mysqli_connect("localhost","root","","sams");
    // $conn->query("SET GLOBAL time_zone = 'Asia/Kolkata'");
    // $conn->query("SET time_zone = '+05:30'");
    // $conn->query("SET @@session.time_zone = '+05:30'");

    $sql = "SELECT * FROM att INNER JOIN student ON att.id = student.id WHERE DATE(record_date) = CURDATE() AND out_or_in = 'out' AND suspend=0 ORDER BY At_id DESC";
    $result = $conn->query($sql);

    $all_rows = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $all_rows[] = $row;
        }
    }

    return $all_rows;
}


?>