<?php 
	$database_name = "flight_db";
	$conn = mysqli_connect("localhost", "root", "", $database_name);
    if(!$conn)
    {
        die("<h1>Database not connected\n". "<br>" . mysqli_connect_error($conn) . "<h1>");
    }
    else
    {
        echo ("<h1>Database Connected<h1>");
    }
?>

