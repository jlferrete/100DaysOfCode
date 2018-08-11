<?php

$host ="localhost";
$user="root";
$pass="Studium2018;";
$db_name="chatEn";

    $con = new mysqli($host, $user, $pass, $db_name);

function formatDate($date)
    {
        return date('g:i a', strtotime($date));
    }

?>