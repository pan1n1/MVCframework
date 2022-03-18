<?php

class DatabaseController
{

    public function __construct()
    {
        $SERVERNAME = ("localhost");
        $USERNAME = ( "root");
        $PASSWORD = ( "");
        $DBNAME = ("framework");

        $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
        $conn;
    }

    function connect()
    {
        $SERVERNAME = ("localhost");
        $USERNAME = ( "root");
        $PASSWORD = ( "");
        $DBNAME = ("framework");

        $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
        return $conn;
    }




    function getCountries($conn){
        
        $sql = "SELECT * FROM `countries` order by `id` ";
        $result = mysqli_query($conn, $sql);
      

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo ($row["id"] . " " . $row["name"] . " " . $row["capitalCity"] . " " . $row["continent"] . " " . $row["population"] . "<br>");
            }
        } else {
            echo "0 results";
        }

    }
}


