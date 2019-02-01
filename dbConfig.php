<?php
$con = mysqli_connect("localhost", "root", "", "shopping") or die($mysqli_error($con));
if(session_id() == '') {
    session_start();
}