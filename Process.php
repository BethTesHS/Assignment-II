<?php

require_once "autoload.php";

if (isset($_POST["Submit"])) {
    $prcs = new ProcessMethods();
    $FN = $_POST["Fullname"];
    $EM = $_POST["Email"];
    $P = $_POST["Pass"];
    $prcs->Submit($FN, $EM, $P);
    
    header("Location: index.php");

}

?>