<?php

function query($sql) {
    global $db_connection;
    return mysqli_query($db_connection, $sql);
}

function redirect($to) {
    header("Location: $to");
}