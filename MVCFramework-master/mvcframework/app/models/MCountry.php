<?php

class DatabaseController
{

    public function __construct()
    {
        $SERVERNAME = ("localhost");
        $USERNAME = ( "root");
        $PASSWORD = ( "");
        $DBNAME = ("georgeutrecht");

        $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
        $conn;
    }

    function connect()
    {
        $SERVERNAME = ("localhost");
        $USERNAME = ( "root");
        $PASSWORD = ( "");
        $DBNAME = ("georgeutrecht");

        $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
        return $conn;
    }




    function getCountries($conn){
        
        $sql = "SELECT * FROM `bookings` order by `timeslot` ";
        $result = mysqli_query($conn, $sql);
        $record = mysqli_fetch_assoc($result);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo ($row["id"] . " " . $row["name"] . " " . $row["email"] . " " . $row["date"] . " " . $row["timeslot"] . "<br>");
            }
        } else {
            echo "0 results";
        }

    }
}


