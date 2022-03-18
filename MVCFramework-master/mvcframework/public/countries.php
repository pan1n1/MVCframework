<?php


include "../app/controllers/ccountries.php";
include "../app/models/MCountry.php";

$conn = new DatabaseController();


?> <br> <?

$conn1 = $conn->connect();

$conn->getCountries($conn1);

?>