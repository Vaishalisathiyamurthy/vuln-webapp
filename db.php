<?php
$conn = mysqli_connect("localhost", "vulnuser", "vulnpass", "vuln_db");

if (!$conn) {
    die("Database connection failed");
}
?>
