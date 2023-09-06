<?php
$con  = mysqli_connect('localhost','root','','flight_db');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}
