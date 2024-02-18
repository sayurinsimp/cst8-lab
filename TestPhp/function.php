<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $inputdata = $_POST["textfield"];
    $_SESSION["storedData"] = $inputdata;

    header("Location: ../sample.php");
    exit;
}
?>